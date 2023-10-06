package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Entrenamiento;
import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

public interface EntrenamientoRepositorio extends JpaRepository<Entrenamiento, Long>{
    
    @Query("SELECT e FROM Entrenamiento e WHERE e.hora LIKE %?1%"
            //+ "OR e.hora LIKE %?1%"
            + "OR e.tipo LIKE %?1%"
            + "OR e.descripcion LIKE %?1%"
            + "OR e.id LIKE %?1%")
    public List<Entrenamiento> findAll(String palabraClave);
}
