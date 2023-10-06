package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Programacion;
import com.example.clubleones.Repositorio.ProgramacionRepositorio;
import com.example.clubleones.Servicio.ProgramacionServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class ProgramacionServicioImpl implements ProgramacionServicio {

    @Autowired
    private ProgramacionRepositorio repositorio;

    @Override
    public List<Programacion> listarProgramacion(String palabraClave) {
        if(palabraClave != null){
            return repositorio.findAll(palabraClave);
        }
        return repositorio.findAll();
    }

    @Override
    public Programacion guardarProgramacion(Programacion programacion) {
        return repositorio.save(programacion);
    }

    @Override
    public Programacion obtenerProgramacionPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Programacion actualizarProgramacion(Programacion programacion) {
        return repositorio.save(programacion);
    }

    @Override
    public Programacion eliminarProgramacion(Long id) {
        repositorio.deleteById(id);
        return null;
    }

}