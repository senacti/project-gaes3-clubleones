package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Equipo;
import java.util.List;

public interface EquipoServicio{
    public List<Equipo> listarEquipo();
    
    public Equipo guardarEquipo(Equipo equipo);
    
    public Equipo obtenerEquipoPorId(Long id);
    
    public Equipo actualizarEquipo(Equipo equipo);
    
    public Equipo eliminarEquipo(Long id);
    
    public List<Equipo> listAll();
}