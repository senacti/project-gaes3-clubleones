package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name ="test")
public class Test {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(length = 30, nullable = false)
    private String nombre;
    
    @Column(length = 30, nullable = false)
    private String tipo;
    
    @Column(nullable = false)
    private int puntajeMinimo;
    
    @Column(nullable = false)
    private int puntajeMaximo;
    
    @Column(nullable = false)
    private int puntajeMinimoBajo;
    
    @Column(nullable = false)
    private int puntajeMaximoBajo;
    
    @Column(nullable = false)
    private int puntajeMinimoMedio;
    
    @Column(nullable = false)
    private int puntajeMaximoMedio;
    
    @Column(nullable = false)
    private int puntajeMinimoAlto;
    
    @Column(nullable = false)
    private int puntajeMaximoAlto;
    
    @Column(length = 255, nullable = false)
    private String descripcion;

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

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public int getPuntajeMinimo() {
        return puntajeMinimo;
    }

    public void setPuntajeMinimo(int puntajeMinimo) {
        this.puntajeMinimo = puntajeMinimo;
    }

    public int getPuntajeMaximo() {
        return puntajeMaximo;
    }

    public void setPuntajeMaximo(int puntajeMaximo) {
        this.puntajeMaximo = puntajeMaximo;
    }

    public int getPuntajeMinimoBajo() {
        return puntajeMinimoBajo;
    }

    public void setPuntajeMinimoBajo(int puntajeMinimoBajo) {
        this.puntajeMinimoBajo = puntajeMinimoBajo;
    }

    public int getPuntajeMaximoBajo() {
        return puntajeMaximoBajo;
    }

    public void setPuntajeMaximoBajo(int puntajeMaximoBajo) {
        this.puntajeMaximoBajo = puntajeMaximoBajo;
    }

    public int getPuntajeMinimoMedio() {
        return puntajeMinimoMedio;
    }

    public void setPuntajeMinimoMedio(int puntajeMinimoMedio) {
        this.puntajeMinimoMedio = puntajeMinimoMedio;
    }

    public int getPuntajeMaximoMedio() {
        return puntajeMaximoMedio;
    }

    public void setPuntajeMaximoMedio(int puntajeMaximoMedio) {
        this.puntajeMaximoMedio = puntajeMaximoMedio;
    }

    public int getPuntajeMinimoAlto() {
        return puntajeMinimoAlto;
    }

    public void setPuntajeMinimoAlto(int puntajeMinimoAlto) {
        this.puntajeMinimoAlto = puntajeMinimoAlto;
    }

    public int getPuntajeMaximoAlto() {
        return puntajeMaximoAlto;
    }

    public void setPuntajeMaximoAlto(int puntajeMaximoAlto) {
        this.puntajeMaximoAlto = puntajeMaximoAlto;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public Test(Long id, String nombre, String tipo, int puntajeMinimo, int puntajeMaximo, int puntajeMinimoBajo, int puntajeMaximoBajo, int puntajeMinimoMedio, int puntajeMaximoMedio, int puntajeMinimoAlto, int puntajeMaximoAlto, String descripcion) {
        this.id = id;
        this.nombre = nombre;
        this.tipo = tipo;
        this.puntajeMinimo = puntajeMinimo;
        this.puntajeMaximo = puntajeMaximo;
        this.puntajeMinimoBajo = puntajeMinimoBajo;
        this.puntajeMaximoBajo = puntajeMaximoBajo;
        this.puntajeMinimoMedio = puntajeMinimoMedio;
        this.puntajeMaximoMedio = puntajeMaximoMedio;
        this.puntajeMinimoAlto = puntajeMinimoAlto;
        this.puntajeMaximoAlto = puntajeMaximoAlto;
        this.descripcion = descripcion;
    }

    public Test(String nombre, String tipo, int puntajeMinimo, int puntajeMaximo, int puntajeMinimoBajo, int puntajeMaximoBajo, int puntajeMinimoMedio, int puntajeMaximoMedio, int puntajeMinimoAlto, int puntajeMaximoAlto, String descripcion) {
        this.nombre = nombre;
        this.tipo = tipo;
        this.puntajeMinimo = puntajeMinimo;
        this.puntajeMaximo = puntajeMaximo;
        this.puntajeMinimoBajo = puntajeMinimoBajo;
        this.puntajeMaximoBajo = puntajeMaximoBajo;
        this.puntajeMinimoMedio = puntajeMinimoMedio;
        this.puntajeMaximoMedio = puntajeMaximoMedio;
        this.puntajeMinimoAlto = puntajeMinimoAlto;
        this.puntajeMaximoAlto = puntajeMaximoAlto;
        this.descripcion = descripcion;
    }

    public Test() {
    }
    
    
}
