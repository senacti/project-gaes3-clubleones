package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Campeonatos;
import com.example.clubleones.Servicio.CampeonatosServicio;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class CampeonatosControlador {

    @Autowired
    private CampeonatosServicio servicio;

    @GetMapping({"/campeonatos"})
    public String listarTodosCampeonatos(Model modelo, @Param("palabraClave")String palabraClave) {
        //String palabraClave = "navidad";        
        modelo.addAttribute("campeonatos", servicio.listarCampeonatos(palabraClave));
        modelo.addAttribute("palabraClave", palabraClave);
        return "campeonatos";
    }

    @GetMapping({"/campeonatos/nuevo"})
    public String campeonatosFormulario(Model modelo) {
        Campeonatos campeonatos = new Campeonatos();
        modelo.addAttribute("campeonatos", campeonatos);
        return "crear-campeonatos";
    }

    @PostMapping({"/campeonatos"})
    public String guardarCampeonato(@ModelAttribute("campeonatos") Campeonatos campeonatos) {
        servicio.guardarCampeonato(campeonatos);
        return "redirect:campeonatos";
    }

    @GetMapping({"/campeonatos/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("campeonatos", servicio.obtenerCampeonatoPorId(id));
        return "editar-campeonatos";
    }

    @PostMapping({"/campeonatos/{id}"})
    public String actualizarCampeonato(@PathVariable Long id, @ModelAttribute("campeonatos") Campeonatos campeonatos, Model modelo) {
        Campeonatos campeonatoExistente = servicio.obtenerCampeonatoPorId(id);
        campeonatoExistente.setId(id);
        campeonatoExistente.setModo(campeonatos.getModo());
        campeonatoExistente.setCategoria(campeonatos.getCategoria());
        campeonatoExistente.setNombre(campeonatos.getNombre());
        campeonatoExistente.setCantequipos(campeonatos.getCantequipos());
        campeonatoExistente.setDireccion(campeonatos.getDireccion());


        servicio.actualizarCampeonato(campeonatoExistente);
        return "redirect:/campeonatos";
    }

    @GetMapping({"/campeonatos/{id}"})
    public String eliminarCampeonato(@PathVariable Long id) {
        servicio.eliminarCampeonato(id);
        return "redirect:/campeonatos";
    }
}