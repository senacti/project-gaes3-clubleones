package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import java.util.Date;
//import java.sql.Date;
import java.sql.Time;
import org.springframework.format.annotation.DateTimeFormat;

@Entity
@Table(name ="entrenamiento")
public class Entrenamiento {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(name = "fecha", nullable = false)
    @DateTimeFormat(pattern = "yyyy-MM-dd")
    private Date fecha;
    
    //@DateTimeFormat(pattern = "HH:mm:ss")
    @Column(length = 255, nullable = false)
    private String hora;
    
    @Column(length = 50, nullable = false)
    private String tipo;
    
    @Column(length = 255, nullable = false)
    private String descripcion; 

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Date getFecha() {
        return fecha;
    }

    public void setFecha(Date fecha) {
        this.fecha = fecha;
    }

    public String getHora() {
        return hora;
    }

    public void setHora(String hora) {
        this.hora = hora;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public Entrenamiento(Long id, Date fecha, String hora, String tipo, String descripcion) {
        this.id = id;
        this.fecha = fecha;
        this.hora = hora;
        this.tipo = tipo;
        this.descripcion = descripcion;
    }

    public Entrenamiento(Date fecha, String hora, String tipo, String descripcion) {
        this.fecha = fecha;
        this.hora = hora;
        this.tipo = tipo;
        this.descripcion = descripcion;
    }

    public Entrenamiento() {
    }
}