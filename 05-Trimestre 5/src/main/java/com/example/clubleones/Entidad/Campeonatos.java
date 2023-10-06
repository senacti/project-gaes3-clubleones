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
@Table(name = "campeonatos")
public class Campeonatos {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    
    @Column(length = 60, nullable = false)
    private String nombre;

    @Column(length = 100, nullable = false)
    private String modo;

    @Column(length = 50, nullable = false)
    private String categoria;

    @Column(length = 60, nullable = false)
    private String direccion;

    @Column(nullable = false)
    private int cantequipos;
    
    //lista de equipos conectada a la clase de equipo
    @OneToMany(mappedBy = "campeonatos")
    private List<Equipo> equipos = new ArrayList<>();

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getModo() {
        return modo;
    }

    public void setModo(String modo) {
        this.modo = modo;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public int getCantequipos() {
        return cantequipos;
    }

    public void setCantequipos(int cantequipos) {
        this.cantequipos = cantequipos;
    }

    public List<Equipo> getEquipos() {
        return equipos;
    }

    public void setEquipos(List<Equipo> equipos) {
        this.equipos = equipos;
    }
    
    public Campeonatos(Long id, String nombre, String modo, String categoria, String direccion, int cantequipos, List<Equipo> equipos) {
        this.id = id;
        this.nombre = nombre;
        this.modo = modo;
        this.categoria = categoria;
        this.direccion = direccion;
        this.cantequipos = cantequipos;
        this.equipos = equipos;
    }

    public Campeonatos(String nombre, String modo, String categoria, String direccion, int cantequipos, List<Equipo> equipos) {
        this.nombre = nombre;
        this.modo = modo;
        this.categoria = categoria;
        this.direccion = direccion;
        this.cantequipos = cantequipos;
        this.equipos = equipos;
    }

    public Campeonatos() {
    }
    
    
}
