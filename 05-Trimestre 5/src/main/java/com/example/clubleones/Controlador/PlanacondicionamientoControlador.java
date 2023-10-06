package com.example.clubleones.Controlador;

import com.example.clubleones.Entidad.Planacondicionamiento;
import com.example.clubleones.Excel.PlanacondicionamientoExcelExporter;
import com.example.clubleones.Servicio.PlanacondicionamientoServicio;
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
public class PlanacondicionamientoControlador {

    @Autowired
    private PlanacondicionamientoServicio servicio;

    @GetMapping({"/planes"})
    public String listarTodosPlanes(Model modelo, @Param("palabraClave")String palabraClave) {
        modelo.addAttribute("planes", servicio.listarPlanes(palabraClave));
        modelo.addAttribute("palabraClave", palabraClave);
        return "planes";
    }

    @GetMapping({"/planes/nuevo"})
    public String planesFormulario(Model modelo) {
        Planacondicionamiento planacondicionamiento = new Planacondicionamiento();
        modelo.addAttribute("planacondicionamiento", planacondicionamiento);
        return "crear-planes";
    }

    @PostMapping({"/planes"})
    public String guardarPlan(@ModelAttribute("planacondicionamiento") Planacondicionamiento planacondicionamiento) {
        servicio.guardarPlan(planacondicionamiento);
        return "redirect:planes";
    }

    @GetMapping({"/planes/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("planacondicionamiento", servicio.obtenerPlanPorId(id));
        return "editar-planes";
    }

    @PostMapping({"/planes/{id}"})
    public String actualizarPlan(@PathVariable Long id, @ModelAttribute("planacondicionamiento") Planacondicionamiento planacondicionamiento, Model modelo) {
        Planacondicionamiento planExistente = servicio.obtenerPlanPorId(id);
        planExistente.setId(id);
        planExistente.setNombre(planacondicionamiento.getNombre());
        planExistente.setCategoria(planacondicionamiento.getCategoria());
        planExistente.setDescripcion(planacondicionamiento.getDescripcion());
        planExistente.setTipo(planacondicionamiento.getTipo());

        servicio.actualizarPlan(planExistente);
        return "redirect:/planes";
    }

    @GetMapping({"/planes/{id}"})
    public String eliminarPlan(@PathVariable Long id) {
        servicio.eliminarPlan(id);
        return "redirect:/planes";
    }

    @GetMapping("/planes/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=planes_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Planacondicionamiento> listPlanacondicionamientos = servicio.listAll();

        PlanacondicionamientoExcelExporter excelExporter = new PlanacondicionamientoExcelExporter(listPlanacondicionamientos);

        excelExporter.export(response);
    }
}
