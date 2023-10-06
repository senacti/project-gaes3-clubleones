package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Campeonatos;
import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

@Repository
public interface CampeonatosRepositorio extends JpaRepository<Campeonatos, Long>{
    
    @Query("SELECT c FROM Campeonatos c WHERE c.nombre LIKE %?1%"
            + "OR c.categoria LIKE %?1%"
            + "OR c.modo LIKE %?1%")
    public List<Campeonatos> findAll(String palabraClave);
    
}