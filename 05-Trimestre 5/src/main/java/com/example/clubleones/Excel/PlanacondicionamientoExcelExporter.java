package com.example.clubleones.Excel;

import com.example.clubleones.Entidad.Planacondicionamiento;
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

public class PlanacondicionamientoExcelExporter {
    private XSSFWorkbook workbook;
    private XSSFSheet sheet;
    private List<Planacondicionamiento> listPlanacondicionamientos;

    public PlanacondicionamientoExcelExporter(List<Planacondicionamiento> listPlanacondicionamientos) {
        this.listPlanacondicionamientos = listPlanacondicionamientos;
        workbook = new XSSFWorkbook();
    }

    private void writeHeaderLine() {
        sheet = workbook.createSheet("Planacondicionamiento");

        Row row = sheet.createRow(0);

        CellStyle style = workbook.createCellStyle();
        XSSFFont font = workbook.createFont();
        font.setBold(true);
        font.setFontHeight(16);
        style.setFont(font);

        createCell(row, 0, "Test ID", style);
        createCell(row, 1, "Nombre", style);
        createCell(row, 2, "Categoría", style);
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

        for (Planacondicionamiento planacondicionamiento : listPlanacondicionamientos) {
            Row row = sheet.createRow(rowCount++);
            int columnCount = 0;

            createCell(row, columnCount++, planacondicionamiento.getId(), style);
            createCell(row, columnCount++, planacondicionamiento.getNombre(), style);
            createCell(row, columnCount++, planacondicionamiento.getCategoria(), style);
            createCell(row, columnCount++, planacondicionamiento.getTipo(), style);
            createCell(row, columnCount++, planacondicionamiento.getDescripcion(), style);
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
