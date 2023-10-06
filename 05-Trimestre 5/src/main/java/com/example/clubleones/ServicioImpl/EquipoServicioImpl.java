package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Equipo;
import com.example.clubleones.Repositorio.EquipoRepositorio;
import com.example.clubleones.Servicio.EquipoServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class EquipoServicioImpl implements EquipoServicio{

    @Autowired
    private EquipoRepositorio repositorio;
    
    @Override
    public List<Equipo> listarEquipo() {
        return repositorio.findAll();
    }

    @Override
    public Equipo guardarEquipo(Equipo equipo) {
        return repositorio.save(equipo);
    }

    @Override
    public Equipo obtenerEquipoPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Equipo actualizarEquipo(Equipo equipo) {
        return repositorio.save(equipo);
    }

    @Override
    public Equipo eliminarEquipo(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Equipo> listAll() {
        return repositorio.findAll(Sort.by("nombre").ascending());
    }
    
}