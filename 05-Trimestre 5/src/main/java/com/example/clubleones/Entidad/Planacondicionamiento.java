package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name = "planacondicionamiento")
public class Planacondicionamiento{

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(length = 30, nullable = false)
    private String nombre;

    @Column(length = 30, nullable = false)
    private String categoria;

    @Column(length = 30, nullable = false)
    private String tipo;

    @Column(length = 255, nullable = false)
    private String descripcion;
    
    @OneToMany(mappedBy = "planacondicionamiento")
    private List<Ejercicio> ejercicios = new ArrayList<>();
    
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
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

    public List<Ejercicio> getEjercicios() {
        return ejercicios;
    }

    public void setEjercicios(List<Ejercicio> ejercicios) {
        this.ejercicios = ejercicios;
    }

    public Planacondicionamiento(Long id, String nombre, String categoria, String tipo, String descripcion, List<Ejercicio> ejercicios) {
        this.id = id;
        this.nombre = nombre;
        this.categoria = categoria;
        this.tipo = tipo;
        this.descripcion = descripcion;
        this.ejercicios = ejercicios;
    }

    public Planacondicionamiento(String nombre, String categoria, String tipo, String descripcion, List<Ejercicio> ejercicios) {
        this.nombre = nombre;
        this.categoria = categoria;
        this.tipo = tipo;
        this.descripcion = descripcion;
        this.ejercicios = ejercicios;
    }

    public Planacondicionamiento() {
    }
    
}
