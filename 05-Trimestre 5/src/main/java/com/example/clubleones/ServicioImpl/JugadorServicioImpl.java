package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Jugador;
import com.example.clubleones.Repositorio.JugadorRepositorio;
import com.example.clubleones.Servicio.JugadorServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class JugadorServicioImpl implements JugadorServicio{
    
    @Autowired
    private JugadorRepositorio repositorio;

    @Override
    public List<Jugador> listarJugador() {
        return repositorio.findAll();
    }

    @Override
    public Jugador guardarJugador(Jugador jugador) {
        return repositorio.save(jugador);
    }

    @Override
    public Jugador obtenerJugadorPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Jugador actualizarJugador(Jugador jugador) {
        return repositorio.save(jugador);
    }

    @Override
    public Jugador eliminarJugador(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Jugador> listAll() {
        return repositorio.findAll(Sort.by("nombre").ascending());
    }
    
}
