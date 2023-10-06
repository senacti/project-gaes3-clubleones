
package com.example.clubleones.Excel;

import com.example.clubleones.Entidad.Entrenamiento;
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

public class EntrenamientoExcelExporter {
    private XSSFWorkbook workbook;
    private XSSFSheet sheet;
    private List<Entrenamiento> listEntrenamientos;

    public EntrenamientoExcelExporter(List<Entrenamiento> listEntrenamientos) {
        this.listEntrenamientos = listEntrenamientos;
        workbook = new XSSFWorkbook();
    }

    private void writeHeaderLine() {
        sheet = workbook.createSheet("Entrenamientos");

        Row row = sheet.createRow(0);

        CellStyle style = workbook.createCellStyle();
        XSSFFont font = workbook.createFont();
        font.setBold(true);
        font.setFontHeight(16);
        style.setFont(font);

        createCell(row, 0, "Entrenamiento ID", style);
        createCell(row, 1, "Fecha", style);
        createCell(row, 2, "Hora", style);
        createCell(row, 3, "Tipo", style);
        createCell(row, 4, "Descripción", style);
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

        for (Entrenamiento entrenamiento : listEntrenamientos) {
            Row row = sheet.createRow(rowCount++);
            int columnCount = 0;

            createCell(row, columnCount++, entrenamiento.getId(), style);
            createCell(row, columnCount++, entrenamiento.getFecha(), style);
            createCell(row, columnCount++, entrenamiento.getHora(), style);
            createCell(row, columnCount++, entrenamiento.getTipo(), style);
            createCell(row, columnCount++, entrenamiento.getDescripcion(), style);
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
