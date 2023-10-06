package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Ejercicio;
import com.example.clubleones.Entidad.Planacondicionamiento;
import com.example.clubleones.Excel.EjercicioExcelExporter;
import com.example.clubleones.Servicio.EjercicioServicio;
import com.example.clubleones.Servicio.PlanacondicionamientoServicio;
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
public class EjercicioControlador {
    
    @Autowired
    private EjercicioServicio servicio;

    @Autowired
    private PlanacondicionamientoServicio servicio2;

    @GetMapping("/ejercicios/verejercicios/{id}")
    public String listarEjercicios(@PathVariable Long id, Model modelo) {
        // Recuperar el autor por su ID
        Planacondicionamiento planacondicionamiento = servicio2.obtenerPlanPorId(id);
        List<Ejercicio> ejercicios = planacondicionamiento.getEjercicios();
        modelo.addAttribute("ejercicios", ejercicios);
        modelo.addAttribute("planacondicionamiento", planacondicionamiento);
        return "ejercicios";
    }

    @GetMapping("/ejercicios/nuevo")
    public String mostrarFormularioCreacionEjercicio(@RequestParam(name = "planacondicionamientoid") Long planacondicionamientoid, Model modelo) {
        Ejercicio ejercicio = new Ejercicio();
        //libro.setAutor(servicio2.obtenerAutorPorId(autorId)); // Asociar el autor al libro
        Planacondicionamiento planacondicionamiento = servicio2.obtenerPlanPorId(planacondicionamientoid); // Recuperar el autor
        ejercicio.setPlanacondicionamiento(planacondicionamiento); // Asociar el autor al libro
        modelo.addAttribute("ejercicio", ejercicio);
        modelo.addAttribute("planacondicionamiento", planacondicionamiento); // Añadir el autor al modelo
        return "crear-ejercicios"; // Devolver la vista del formulario de creación de libros
    }

    @PostMapping("/ejercicios")
    public String guardarEjercicio(@ModelAttribute Ejercicio ejercicio, @RequestParam("planacondicionamientoid") Long planacondicionamientoid) {
        // Recuperar el autor por su ID (esto depende de cómo tengas implementado tu servicio)
        Planacondicionamiento planacondicionamiento = servicio2.obtenerPlanPorId(planacondicionamientoid);
        // Asociar el autor al libro
        ejercicio.setPlanacondicionamiento(planacondicionamiento);
        // Guardar el libro en la base de datos
        servicio.guardarEjercicio(ejercicio);
        //return "redirect:/libros/verlibros/{id}"; // Puedes redirigir a la página de libros u otra página deseada.
        return "redirect:/ejercicios/verejercicios/" + planacondicionamientoid;
    }

    @GetMapping({"/ejercicios/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("ejercicio", servicio.obtenerEjercicioPorId(id));
        return "editar-ejercicios";
    }

    @PostMapping({"/ejercicios/{id}"})
    public String actualizarEjercicio(@PathVariable Long id, @ModelAttribute("ejercicio") Ejercicio ejercicio, Model modelo) {
        Ejercicio ejercicioExistente = servicio.obtenerEjercicioPorId(id);
        ejercicioExistente.setId(id);
        ejercicioExistente.setNombre(ejercicio.getNombre());
        ejercicioExistente.setDescripcion(ejercicio.getDescripcion());
        ejercicioExistente.setCantidad(ejercicio.getCantidad());
        ejercicioExistente.setSegundos(ejercicio.getSegundos());
        /*libroExistente.setId(id);
        libroExistente.setISBN(libro.getISBN());
        libroExistente.setNombreLibro(libro.getNombreLibro());
        libroExistente.setPrecioPublico(libro.getPrecioPublico());*/

        servicio.actualizarEjercicio(ejercicioExistente);
        return "redirect:/ejercicios/verejercicios/" + ejercicioExistente.getPlanacondicionamiento().getId();
    }

    @GetMapping({"/ejercicios/{id}"})
    public String eliminarEjercicio(@PathVariable Long id) {
        Ejercicio ejercicio = servicio.obtenerEjercicioPorId(id);
        Long planacondicionamientoId = ejercicio.getPlanacondicionamiento().getId();
        servicio.eliminarEjercicio(id);
        return "redirect:/ejercicios/verejercicios/" + planacondicionamientoId;
    }
    
    @GetMapping("/ejercicios/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=ejercicios_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Ejercicio> listEjercicios = servicio.listAll();

        EjercicioExcelExporter excelExporter = new EjercicioExcelExporter(listEjercicios);

        excelExporter.export(response);
    }
}
