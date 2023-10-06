package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Ejercicio;
import com.example.clubleones.Repositorio.EjercicioRepositorio;
import com.example.clubleones.Servicio.EjercicioServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class EjercicioServicioImpl implements EjercicioServicio{

    @Autowired
    private EjercicioRepositorio repositorio;
    
    @Override
    public List<Ejercicio> listarEjercicio() {
        return repositorio.findAll();
    }

    @Override
    public Ejercicio guardarEjercicio(Ejercicio ejercicio) {
        return repositorio.save(ejercicio);
    }

    @Override
    public Ejercicio obtenerEjercicioPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Ejercicio actualizarEjercicio(Ejercicio ejercicio) {
        return repositorio.save(ejercicio);
    }

    @Override
    public Ejercicio eliminarEjercicio(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Ejercicio> listAll() {
        return repositorio.findAll(Sort.by("nombre").ascending());
    }
    
    /*@Override
    public List<Ejercicio> getAll() {
        return repositorio.findAll();
    }*/
}
