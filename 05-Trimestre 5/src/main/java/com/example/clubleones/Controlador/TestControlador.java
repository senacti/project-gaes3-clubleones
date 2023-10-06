package com.example.clubleones.Controlador;

//import org.springframework.security.access.prepost.PreAuthorize;

import com.example.clubleones.Entidad.Test;
import com.example.clubleones.Excel.TestExcelExporter;
import com.example.clubleones.Servicio.TestServicio;
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
public class TestControlador {

    @Autowired
    private TestServicio servicio;

    @GetMapping({"/tests"})
    public String listarTodosTests(Model modelo, @Param("palabraClave")String palabraClave) {
        modelo.addAttribute("tests", servicio.listarTest(palabraClave));
        modelo.addAttribute("palabraClave", palabraClave);

        return "tests";
    }

    @GetMapping({"/tests/nuevo"})
    public String TestsFormulario(Model modelo) {
        Test test = new Test();
        modelo.addAttribute("test", test);
        return "crear-tests";
    }

    @PostMapping({"/tests"})
    public String guardarTest(@ModelAttribute("test") Test test) {
        servicio.guardarTest(test);
        return "redirect:tests";
    }

    @GetMapping({"/tests/editar/{id}"})
    public String formularioEditar(@PathVariable Long id, Model modelo) {
        modelo.addAttribute("test", servicio.obtenerTestPorId(id));
        return "editar-tests";
    }

    @PostMapping({"/tests/{id}"})
    //@PreAuthorize("hasRole('ROLE_ADMIN')")
    public String actualizarTest(@PathVariable Long id, @ModelAttribute("test") Test test, Model modelo) {
        Test testExistente = servicio.obtenerTestPorId(id);

        testExistente.setId(id);
        testExistente.setNombre(test.getNombre());
        testExistente.setTipo(test.getTipo());
        testExistente.setPuntajeMinimo(test.getPuntajeMinimo());
        testExistente.setPuntajeMaximo(test.getPuntajeMaximo());
        testExistente.setPuntajeMinimoBajo(test.getPuntajeMinimoBajo());
        testExistente.setPuntajeMaximoBajo(test.getPuntajeMaximoBajo());
        testExistente.setPuntajeMinimoMedio(test.getPuntajeMinimoMedio());
        testExistente.setPuntajeMaximoMedio(test.getPuntajeMaximoMedio());
        testExistente.setPuntajeMinimoAlto(test.getPuntajeMinimoAlto());
        testExistente.setPuntajeMaximoAlto(test.getPuntajeMaximoAlto());
        testExistente.setDescripcion(test.getDescripcion());
        servicio.actualizarTest(testExistente);
        return "redirect:/tests";
    }

    
    @GetMapping({"/tests/{id}"})
    public String eliminarTest(@PathVariable Long id) {
        servicio.eliminarTest(id);
        return "redirect:/tests";
    }

    @GetMapping("/tests/export/excel")
    public void exportToExcel(HttpServletResponse response) throws IOException {
        response.setContentType("application/octet-stream");
        DateFormat dateFormatter = new SimpleDateFormat("yyyy-MM-dd_HH:mm:ss");
        String currentDateTime = dateFormatter.format(new Date());

        String headerKey = "Content-Disposition";
        String headerValue = "attachment; filename=tests_" + currentDateTime + ".xlsx";
        response.setHeader(headerKey, headerValue);

        List<Test> listTests = servicio.listAll();

        TestExcelExporter excelExporter = new TestExcelExporter(listTests);

        excelExporter.export(response);
    }
}
