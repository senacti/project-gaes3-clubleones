package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Jugador;
import java.util.List;


public interface JugadorServicio {
    
    public List<Jugador> listarJugador();
    
    public Jugador guardarJugador(Jugador jugador);
    
    public Jugador obtenerJugadorPorId(Long id);
    
    public Jugador actualizarJugador(Jugador jugador);
    
    public Jugador eliminarJugador(Long id);
    
    public List<Jugador> listAll();
}
