package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.Table;

@Entity
@Table(name ="ejercicio")
public class Ejercicio {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(length = 30, nullable = false)
    private String nombre;
    
    @Column(length = 255, nullable = false)
    private String descripcion;
    
    @Column(nullable = false)
    private int cantidad;
    
    @Column(nullable = false)
    private int segundos;
    
    @ManyToOne
    @JoinColumn(name = "planacondicionamientoid", referencedColumnName="id")
    private Planacondicionamiento planacondicionamiento;
    
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

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public int getSegundos() {
        return segundos;
    }

    public void setSegundos(int segundos) {
        this.segundos = segundos;
    }

    public Planacondicionamiento getPlanacondicionamiento() {
        return planacondicionamiento;
    }

    public void setPlanacondicionamiento(Planacondicionamiento planacondicionamiento) {
        this.planacondicionamiento = planacondicionamiento;
    }

    public Ejercicio(Long id, String nombre, String descripcion, int cantidad, int segundos, Planacondicionamiento planacondicionamiento) {
        this.id = id;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.cantidad = cantidad;
        this.segundos = segundos;
        this.planacondicionamiento = planacondicionamiento;
    }

    public Ejercicio(String nombre, String descripcion, int cantidad, int segundos, Planacondicionamiento planacondicionamiento) {
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.cantidad = cantidad;
        this.segundos = segundos;
        this.planacondicionamiento = planacondicionamiento;
    }

    public Ejercicio() {
    }
        
    
}
