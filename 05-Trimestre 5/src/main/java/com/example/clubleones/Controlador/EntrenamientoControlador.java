package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Ejercicio;
import com.example.clubleones.Entidad.Entrenamiento;
import com.example.clubleones.Excel.EjercicioExcelExporter;
import com.example.clubleones.Excel.EntrenamientoExcelExporter;
import com.example.clubleones.Servicio.EjercicioServicio;
import com.example.clubleones.Servicio.EntrenamientoServicio;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class EntrenamientoControlador {
    
    @Autowired
    private EntrenamientoServicio servicio;

    @GetMapping({"/entrenamientos"})
    public String listarTodosEntrenamientos(Model modelo, @Param("palabraClave")String palabraClave) {
        modelo.addAttribute("entrenamientos", servicio.listarEntrenamiento(palabraClave));
        modelo.addAttribute("palabraClave", palabraClave);
        return "entrenamientos";
    }

    @GetMapping({"/entrenamientos/nuevo"})
    public String EntrenamientosFormulario(Model modelo) {
        Entrenamiento entrenamiento = new Entrenamiento();
        modelo.addAttribute("entrenamiento", entrenamiento);
        return "crear-entrenamientos";
    }

    @PostMapping({"/entrenamientos"})
    public String guardarEntrenamiento(@ModelAttribute("entrenamiento") Entrenamiento entrenamiento) {
        servicio.guardarEntrenamiento(entrenamiento);
        return "redirect:entrenamientos";
    }

    @GetMapping({"/entrenamientos/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("entrenamiento", servicio.obtenerEntrenamientoPorId(id));
        return "editar-entrenamientos";
    }

    @PostMapping({"/entrenamientos/{id}"})
    public String actualizarEjercicio(@PathVariable Long id, @ModelAttribute("entrenamiento") Entrenamiento entrenamiento, Model modelo) {
        Entrenamiento entrenamientoExistente = servicio.obtenerEntrenamientoPorId(id);

        entrenamientoExistente.setId(id);
        entrenamientoExistente.setFecha(entrenamiento.getFecha());
        entrenamientoExistente.setHora(entrenamiento.getHora());
        entrenamientoExistente.setTipo(entrenamiento.getTipo());
        entrenamientoExistente.setDescripcion(entrenamiento.getDescripcion());
        servicio.actualizarEntrenamiento(entrenamientoExistente);
        return "redirect:/entrenamientos";
    }

    @GetMapping({"/entrenamientos/{id}"})
    public String eliminarEntrenamiento(@PathVariable Long id) {
        servicio.eliminarEntrenamiento(id);
        return "redirect:/entrenamientos";
    }

    @GetMapping("/entrenamientos/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=entrenamientos_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Entrenamiento> listEntrenamientos = servicio.listAll();

        EntrenamientoExcelExporter excelExporter = new EntrenamientoExcelExporter(listEntrenamientos);

        excelExporter.export(response);
    }
}
