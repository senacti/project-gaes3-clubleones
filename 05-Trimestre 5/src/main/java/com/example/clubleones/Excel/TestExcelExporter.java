package com.example.clubleones.Excel;

import com.example.clubleones.Entidad.Test;
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

public class TestExcelExporter {

    private XSSFWorkbook workbook;
    private XSSFSheet sheet;
    private List<Test> listTests;

    public TestExcelExporter(List<Test> listTests) {
        this.listTests = listTests;
        workbook = new XSSFWorkbook();
    }

    private void writeHeaderLine() {
        sheet = workbook.createSheet("Tests");

        Row row = sheet.createRow(0);

        CellStyle style = workbook.createCellStyle();
        XSSFFont font = workbook.createFont();
        font.setBold(true);
        font.setFontHeight(16);
        style.setFont(font);

        createCell(row, 0, "Test ID", style);
        createCell(row, 1, "Nombre", style);
        createCell(row, 2, "Tipo", style);
        createCell(row, 3, "Puntaje Minimo", style);
        createCell(row, 4, "Puntaje Maximo", style);
        createCell(row, 5, "Puntaje Minimo Bajo", style);
        createCell(row, 6, "Puntaje Maximo Bajo", style);
        createCell(row, 7, "Puntaje Minimo Medio", style);
        createCell(row, 8, "Puntaje Maximo Medio", style);
        createCell(row, 9, "Puntaje Minimo Alto", style);
        createCell(row, 10, "Puntaje Maximo Alto", style);
        createCell(row, 11, "Descripción", style);
    }

   /* private void createCell(Row row, int columnCount, Object value, CellStyle style) {
        sheet.autoSizeColumn(columnCount);
        Cell cell = row.createCell(columnCount);
        if (value instanceof Integer) {
            cell.setCellValue((Integer) value);
        } else if (value instanceof Boolean) {
            cell.setCellValue((Boolean) value);
        } else {
            cell.setCellValue((String) value);
        }
        cell.setCellStyle(style);
    }*/
    
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

        for (Test test : listTests) {
            Row row = sheet.createRow(rowCount++);
            int columnCount = 0;

            createCell(row, columnCount++, test.getId(), style);
            createCell(row, columnCount++, test.getNombre(), style);
            createCell(row, columnCount++, test.getTipo(), style);
            createCell(row, columnCount++, test.getPuntajeMinimo(), style);
            createCell(row, columnCount++, test.getPuntajeMaximo(), style);
            createCell(row, columnCount++, test.getPuntajeMinimoBajo(), style);
            createCell(row, columnCount++, test.getPuntajeMaximoBajo(), style);
            createCell(row, columnCount++, test.getPuntajeMinimoMedio(), style);
            createCell(row, columnCount++, test.getPuntajeMaximoMedio(), style);
            createCell(row, columnCount++, test.getPuntajeMinimoAlto(), style);
            createCell(row, columnCount++, test.getPuntajeMaximoAlto(), style);
            createCell(row, columnCount++, test.getDescripcion(), style);
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
/**/
