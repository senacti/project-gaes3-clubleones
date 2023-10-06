package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "programacion")
public class Programacion {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(length = 30, nullable = false)
    private String dia;

    @Column(length = 30, nullable = false)
    private String hora;

    @Column(length = 30, nullable = false)
    private String categoria;

    @Column(length = 255, nullable = false)
    private String equipo1;

    @Column(length = 255, nullable = false)
    private String equipo2;

    @Column(length = 255, nullable = false)
    private String direccion;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getDia() {
        return dia;
    }

    public void setDia(String dia) {
        this.dia = dia;
    }

    public String getHora() {
        return hora;
    }

    public void setHora(String hora) {
        this.hora = hora;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getEquipo1() {
        return equipo1;
    }

    public void setEquipo1(String equipo1) {
        this.equipo1 = equipo1;
    }

    public String getEquipo2() {
        return equipo2;
    }

    public void setEquipo2(String equipo2) {
        this.equipo2 = equipo2;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public Programacion(Long id, String dia, String hora, String categoria, String equipo1, String equipo2, String direccion) {
        this.id = id;
        this.dia = dia;
        this.hora = hora;
        this.categoria = categoria;
        this.equipo1 = equipo1;
        this.equipo2 = equipo2;
        this.direccion = direccion;
    }

    public Programacion(String dia, String hora, String categoria, String equipo1, String equipo2, String direccion) {
        this.dia = dia;
        this.hora = hora;
        this.categoria = categoria;
        this.equipo1 = equipo1;
        this.equipo2 = equipo2;
        this.direccion = direccion;
    }

    public Programacion() {
    }

    
    
}