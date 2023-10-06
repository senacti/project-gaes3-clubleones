package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Campeonatos;
import com.example.clubleones.Entidad.Equipo;
import com.example.clubleones.Excel.EquipoExcelExporter;
import com.example.clubleones.Servicio.CampeonatosServicio;
import com.example.clubleones.Servicio.EquipoServicio;
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
public class EquipoControlador {
    
    @Autowired
    private EquipoServicio servicio;
    
    @Autowired
    private CampeonatosServicio servicio2;

    @GetMapping({"/equipos/verequipos/{id}"})
    public String listarTodosEquipos(@PathVariable Long id, Model modelo) {
        Campeonatos campeonatos = servicio2.obtenerCampeonatoPorId(id);
        List<Equipo> equipos = campeonatos.getEquipos();
        modelo.addAttribute("equipos", equipos);
        modelo.addAttribute("campeonatos", campeonatos);
        //modelo.addAttribute("equipos", servicio.listarEquipo());
        return "equipos";
    }

    @GetMapping({"/equipos/nuevo"})
    public String EquiposFormulario(@RequestParam(name = "campeonatoid") Long campeonatoid, Model modelo) {
        Equipo equipo = new Equipo();
        Campeonatos campeonatos = servicio2.obtenerCampeonatoPorId(campeonatoid);
        equipo.setCampeonatos(campeonatos);
        modelo.addAttribute("equipo", equipo);
        modelo.addAttribute("campeonatos", campeonatos);
        return "crear-equipos";
    }

    /*@PostMapping({"/equipos"})
    public String guardarEquipo(@ModelAttribute("equipo") Equipo equipo) {
        servicio.guardarEquipo(equipo);
        return "redirect:equipos";
    }*/
    
    @PostMapping("/equipos")
    public String guardarEquipo(@ModelAttribute Equipo equipo, @RequestParam("campeonatoid") Long campeonatoid) {
        Campeonatos campeonatos = servicio2.obtenerCampeonatoPorId(campeonatoid);
        equipo.setCampeonatos(campeonatos);
        servicio.guardarEquipo(equipo);
        return "redirect:/equipos/verequipos/" + campeonatoid;
    }

    @GetMapping({"/equipos/editar/{id}"})
    public String formularioEquipo(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("equipo", servicio.obtenerEquipoPorId(id));
        return "editar-equipos";
    }

    @PostMapping({"/equipos/{id}"})
    public String actualizarEquipo(@PathVariable Long id, @ModelAttribute("equipo") Equipo equipo, Model modelo) {
        Equipo equipoExistente = servicio.obtenerEquipoPorId(id);

        equipoExistente.setId(id);
        equipoExistente.setNombre(equipo.getNombre());
        equipoExistente.setCategoria(equipo.getCategoria());
        equipoExistente.setInscripcion(equipo.getInscripcion());
        equipoExistente.setEquipacion(equipo.getEquipacion());
        servicio.actualizarEquipo(equipoExistente);
        return "redirect:/equipos";
    }

    @GetMapping({"/equipos/{id}"})
    public String eliminarEquipo(@PathVariable Long id) {
        servicio.eliminarEquipo(id);
        return "redirect:/equipos";
    }
    
    @GetMapping("/equipos/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=equipos_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Equipo> listEquipos = servicio.listAll();

        EquipoExcelExporter excelExporter = new EquipoExcelExporter(listEquipos);

        excelExporter.export(response);
    }
}