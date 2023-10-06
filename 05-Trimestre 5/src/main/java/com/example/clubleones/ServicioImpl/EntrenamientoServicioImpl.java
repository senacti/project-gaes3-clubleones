package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Entrenamiento;
import com.example.clubleones.Repositorio.EntrenamientoRepositorio;
import com.example.clubleones.Servicio.EntrenamientoServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class EntrenamientoServicioImpl implements EntrenamientoServicio {
    
    @Autowired
    private EntrenamientoRepositorio repositorio;

    @Override
    public List<Entrenamiento> listarEntrenamiento(String palabraClave) {
        if(palabraClave != null){
            return repositorio.findAll(palabraClave);
        }
        return repositorio.findAll();
    }

    @Override
    public Entrenamiento guardarEntrenamiento(Entrenamiento entrenamiento) {
        return repositorio.save(entrenamiento);        
    }

    @Override
    public Entrenamiento obtenerEntrenamientoPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Entrenamiento actualizarEntrenamiento(Entrenamiento entrenamiento) {
        return repositorio.save(entrenamiento);
    }

    @Override
    public Entrenamiento eliminarEntrenamiento(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Entrenamiento> listAll() {
        return repositorio.findAll(Sort.by("tipo").ascending());
    }

}
