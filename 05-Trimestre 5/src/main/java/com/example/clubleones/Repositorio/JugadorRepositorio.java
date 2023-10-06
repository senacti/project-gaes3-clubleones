package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Jugador;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface JugadorRepositorio extends JpaRepository<Jugador, Long>{
 
}
