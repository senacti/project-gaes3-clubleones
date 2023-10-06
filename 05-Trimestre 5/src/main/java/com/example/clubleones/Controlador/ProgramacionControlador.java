package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Programacion;
import com.example.clubleones.Servicio.ProgramacionServicio;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class ProgramacionControlador {

    @Autowired
    private ProgramacionServicio servicio;

    @GetMapping({"/programacion", "/"})
    public String listarTodosProgramacion(Model modelo, @Param("palabraClave")String palabraClave) {
        modelo.addAttribute("programacion", servicio.listarProgramacion(palabraClave));
        modelo.addAttribute("palabraClave", palabraClave);
        return "programacion";
    }

    @GetMapping({"/programacion/nuevo"})
    public String programacionFormulario(Model modelo) {
        Programacion programacion = new Programacion();
        modelo.addAttribute("programacion", programacion);
        return "crear-programacion";
    }

    @PostMapping({"/programacion"})
    public String guardarProgramacion(@ModelAttribute("programacion") Programacion programacion) {
        servicio.guardarProgramacion(programacion);
        return "redirect:programacion";
    }

    @GetMapping({"/programacion/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("programacion", servicio.obtenerProgramacionPorId(id));
        return "editar-programacion";
    }

    @PostMapping({"/programacion/{id}"})
    public String actualizarPlan(@PathVariable Long id, @ModelAttribute("programacion") Programacion programacion, Model modelo) {
        Programacion programacionExistente = servicio.obtenerProgramacionPorId(id);
        programacionExistente.setId(id);
        programacionExistente.setDia(programacion.getDia());
        programacionExistente.setHora(programacion.getHora());
        programacionExistente.setCategoria(programacion.getCategoria());
        programacionExistente.setEquipo1(programacion.getEquipo1());
        programacionExistente.setEquipo2(programacion.getEquipo2());
        programacionExistente.setDireccion(programacion.getDireccion());


        servicio.actualizarProgramacion(programacionExistente);
        return "redirect:/programacion";
    }

    @GetMapping({"/programacion/{id}"})
    public String eliminarProgramacion(@PathVariable Long id) {
        servicio.eliminarProgramacion(id);
        return "redirect:/programacion";
    }
}