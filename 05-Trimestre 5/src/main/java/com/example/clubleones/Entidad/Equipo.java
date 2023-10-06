package com.example.clubleones.Entidad;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name ="equipo")
public class Equipo {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(length = 30, nullable = false)
    private String nombre;
    
    @Column(length = 255, nullable = false)
    private String categoria;
    
    @Column(length = 255, nullable = false)
    private String inscripcion;
    
    @Column(length = 255, nullable = false)
    private String equipacion;
    
    //lista de jugadores conectada a la clase de jugador
    @OneToMany(mappedBy = "equipo")
    private List<Jugador> jugadores = new ArrayList<>();
    
    //conexión a la clase de campeonatos
    @ManyToOne
    @JoinColumn(name = "campeonatoid", referencedColumnName="id")
    private Campeonatos campeonatos;

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

    public String getInscripcion() {
        return inscripcion;
    }

    public void setInscripcion(String inscripcion) {
        this.inscripcion = inscripcion;
    }

    public String getEquipacion() {
        return equipacion;
    }

    public void setEquipacion(String equipacion) {
        this.equipacion = equipacion;
    }

    public List<Jugador> getJugadores() {
        return jugadores;
    }

    public void setJugadores(List<Jugador> jugadores) {
        this.jugadores = jugadores;
    }

    public Campeonatos getCampeonatos() {
        return campeonatos;
    }

    public void setCampeonatos(Campeonatos campeonatos) {
        this.campeonatos = campeonatos;
    }
       
    public Equipo(Long id, String nombre, String categoria, String inscripcion, String equipacion, List<Jugador> jugadores, Campeonatos campeonatos) {
        this.id = id;
        this.nombre = nombre;
        this.categoria = categoria;
        this.inscripcion = inscripcion;
        this.equipacion = equipacion;
        this.jugadores = jugadores;
        this.campeonatos = campeonatos;
    }

    public Equipo(String nombre, String categoria, String inscripcion, String equipacion, List<Jugador> jugadores, Campeonatos campeonatos) {
        this.nombre = nombre;
        this.categoria = categoria;
        this.inscripcion = inscripcion;
        this.equipacion = equipacion;
        this.jugadores = jugadores;
        this.campeonatos = campeonatos;
    }

    public Equipo() {
    }

    
    
}