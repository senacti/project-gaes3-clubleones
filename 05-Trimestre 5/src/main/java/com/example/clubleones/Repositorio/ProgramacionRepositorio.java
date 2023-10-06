package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Programacion;
import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

@Repository
public interface ProgramacionRepositorio extends JpaRepository<Programacion, Long>{
    
    @Query("SELECT p FROM Programacion p WHERE p.categoria LIKE %?1%"
            + "OR p.equipo1 LIKE %?1%"
            + "OR p.equipo2 LIKE %?1%"
            + "OR p.direccion LIKE %?1%")
    public List<Programacion> findAll(String palabraClave);
    
}