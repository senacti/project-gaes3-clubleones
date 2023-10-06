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
@Table (name ="jugador")
public class Jugador {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(length = 30, nullable = false)
    private String nombre;
    
    @Column(length = 14, nullable = false)
    private int identificacion;
    
    @Column(nullable = false)
    private int dorsal;
    
    @Column(nullable = false)
    private int edad;
    
    @Column(nullable = false)
    private String numcontacto;
    
    @ManyToOne
    @JoinColumn(name = "equipoid", referencedColumnName="id")
    private Equipo equipo;

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

    public int getIdentificacion() {
        return identificacion;
    }

    public void setIdentificacion(int identificacion) {
        this.identificacion = identificacion;
    }

    public int getDorsal() {
        return dorsal;
    }

    public void setDorsal(int dorsal) {
        this.dorsal = dorsal;
    }

    public int getEdad() {
        return edad;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }

    public String getNumcontacto() {
        return numcontacto;
    }

    public void setNumcontacto(String numcontacto) {
        this.numcontacto = numcontacto;
    }

    public Equipo getEquipo() {
        return equipo;
    }

    public void setEquipo(Equipo equipo) {
        this.equipo = equipo;
    }

    public Jugador(Long id, String nombre, int identificacion, int dorsal, int edad, String numcontacto, Equipo equipo) {
        this.id = id;
        this.nombre = nombre;
        this.identificacion = identificacion;
        this.dorsal = dorsal;
        this.edad = edad;
        this.numcontacto = numcontacto;
        this.equipo = equipo;
    }

    public Jugador(String nombre, int identificacion, int dorsal, int edad, String numcontacto, Equipo equipo) {
        this.nombre = nombre;
        this.identificacion = identificacion;
        this.dorsal = dorsal;
        this.edad = edad;
        this.numcontacto = numcontacto;
        this.equipo = equipo;
    }

    public Jugador() {
    }
    
    
}
