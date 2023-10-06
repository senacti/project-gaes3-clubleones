package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Equipo;
import com.example.clubleones.Entidad.Jugador;
import com.example.clubleones.Excel.JugadorExcelExporter;
import com.example.clubleones.Servicio.EquipoServicio;
import com.example.clubleones.Servicio.JugadorServicio;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class JugadorControlador {
    
    @Autowired
    private JugadorServicio servicio;

    @Autowired
    private EquipoServicio servicio2;

    @GetMapping("/jugadores/verjugadores/{id}")
    public String listarJugadores(@PathVariable Long id, Model modelo) {
        Equipo equipo = servicio2.obtenerEquipoPorId(id);
        List<Jugador> jugadores = equipo.getJugadores();
        modelo.addAttribute("jugadores", jugadores);
        modelo.addAttribute("equipo", equipo);
        return "jugadores";
    }

    @GetMapping("/jugadores/nuevo")
    public String mostrarFormularioCreacionJugador(@RequestParam(name = "equipoid") Long equipoid, Model modelo) {
        Jugador jugador = new Jugador();
        Equipo equipo = servicio2.obtenerEquipoPorId(equipoid);
        jugador.setEquipo(equipo);
        modelo.addAttribute("jugador", jugador);
        modelo.addAttribute("equipo", equipo);
        return "crear-jugadores";
    }

    @PostMapping("/jugadores")
    public String guardarJugador(@ModelAttribute Jugador jugador, @RequestParam("equipoid") Long equipoid) {
        Equipo equipo = servicio2.obtenerEquipoPorId(equipoid);
        jugador.setEquipo(equipo);
        servicio.guardarJugador(jugador);
        return "redirect:/jugadores/verjugadores/" + equipoid;
    }

    @GetMapping({"/jugadores/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("jugador", servicio.obtenerJugadorPorId(id));
        return "editar-jugadores";
    }

    @PostMapping({"/jugadores/{id}"})
    public String actualizarJugador(@PathVariable Long id, @ModelAttribute("jugador") Jugador jugador, Model modelo) {
        Jugador jugadorExistente = servicio.obtenerJugadorPorId(id);
        jugadorExistente.setId(id);
        jugadorExistente.setNombre(jugador.getNombre());
        jugadorExistente.setIdentificacion(jugador.getIdentificacion());
        jugadorExistente.setDorsal(jugador.getDorsal());
        jugadorExistente.setEdad(jugador.getEdad());
        jugadorExistente.setNumcontacto(jugador.getNumcontacto());

        servicio.actualizarJugador(jugadorExistente);
        return "redirect:/jugadores/verjugadores/" + jugadorExistente.getEquipo().getId();
    }

    @GetMapping({"/jugadores/{id}"})
    public String eliminarJugador(@PathVariable Long id) {
        Jugador jugador = servicio.obtenerJugadorPorId(id);
        Long equipoId = jugador.getEquipo().getId();
        servicio.eliminarJugador(id);
        return "redirect:/jugadores/verjugadores/" + equipoId;
    }
    
    @GetMapping("/jugadores/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=Jugadores_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Jugador> listJugadores = servicio.listAll();

        JugadorExcelExporter excelExporter = new JugadorExcelExporter(listJugadores);

        excelExporter.export(response);
    }
    
}
