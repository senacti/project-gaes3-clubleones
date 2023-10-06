package com.example.clubleones.Excel;

import com.example.clubleones.Entidad.Ejercicio;
import jakarta.servlet.ServletOutputStream;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.util.List;
//import javax.servlet.ServletOutputStream;
//import javax.servlet.http.HttpServletResponse;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.CellStyle;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFFont;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class EjercicioExcelExporter {
    private XSSFWorkbook workbook;
    private XSSFSheet sheet;
    private List<Ejercicio> listEjercicios;

    public EjercicioExcelExporter(List<Ejercicio> listEjercicios) {
        this.listEjercicios = listEjercicios;
        workbook = new XSSFWorkbook();
    }

    private void writeHeaderLine() {
        sheet = workbook.createSheet("Ejercicios");

        Row row = sheet.createRow(0);

        CellStyle style = workbook.createCellStyle();
        XSSFFont font = workbook.createFont();
        font.setBold(true);
        font.setFontHeight(16);
        style.setFont(font);

        createCell(row, 0, "Ejercicio ID", style);
        createCell(row, 1, "Nombre", style);
        createCell(row, 2, "Descripción", style);
        createCell(row, 3, "Cantidad", style);
        createCell(row, 4, "Segundos", style);
    }
    
    private void createCell(Row row, int columnCount, Object value, CellStyle style) {
    sheet.autoSizeColumn(columnCount);
    Cell cell = row.createCell(columnCount);
    
    if (value instanceof Integer) {
        cell.setCellValue((Integer) value);
    } else if (value instanceof Boolean) {
        cell.setCellValue((Boolean) value);
    } else if (value instanceof String) {
        cell.setCellValue((String) value);
    } else if (value instanceof Long) {
        cell.setCellValue((Long) value);
    } else {
        cell.setCellValue(value.toString());
    }
    
    cell.setCellStyle(style);
}


    private void writeDataLines() {
        int rowCount = 1;

        CellStyle style = workbook.createCellStyle();
        XSSFFont font = workbook.createFont();
        font.setFontHeight(14);
        style.setFont(font);

        for (Ejercicio ejercicio : listEjercicios) {
            Row row = sheet.createRow(rowCount++);
            int columnCount = 0;

            createCell(row, columnCount++, ejercicio.getId(), style);
            createCell(row, columnCount++, ejercicio.getNombre(), style);
            createCell(row, columnCount++, ejercicio.getDescripcion(), style);
            createCell(row, columnCount++, ejercicio.getCantidad(), style);
            createCell(row, columnCount++, ejercicio.getSegundos(), style);

           // createCell(row, columnCount++, test.getRoles().toString(), style);
        }
    }

    public void export(HttpServletResponse response) throws IOException {
        writeHeaderLine();
        writeDataLines();

        ServletOutputStream outputStream = response.getOutputStream();
        workbook.write(outputStream);
        workbook.close();

        outputStream.close();

    }
}
