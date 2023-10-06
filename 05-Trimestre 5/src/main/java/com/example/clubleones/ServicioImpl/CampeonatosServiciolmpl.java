package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Campeonatos;
import com.example.clubleones.Repositorio.CampeonatosRepositorio;
import com.example.clubleones.Servicio.CampeonatosServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class CampeonatosServiciolmpl implements CampeonatosServicio {

    @Autowired
    private CampeonatosRepositorio repositorio;

    @Override
    public List<Campeonatos> listarCampeonatos(String palabraClave) {
        if(palabraClave != null){
            return repositorio.findAll(palabraClave);
        }
        return repositorio.findAll();
    }

    @Override
    public Campeonatos guardarCampeonato(Campeonatos campeonatos) {
        return repositorio.save(campeonatos);
    }

    @Override
    public Campeonatos obtenerCampeonatoPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Campeonatos actualizarCampeonato(Campeonatos campeonatos) {
        return repositorio.save(campeonatos);
    }

    @Override
    public Campeonatos eliminarCampeonato(Long id) {
        repositorio.deleteById(id);
        return null;
    }

}