package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Planacondicionamiento;
import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

@Repository
public interface PlanacondicionamientoRepositorio extends JpaRepository<Planacondicionamiento, Long>{
    
    @Query("SELECT p FROM Planacondicionamiento p WHERE p.nombre LIKE %?1%"
            + "OR p.tipo LIKE %?1%"
            + "OR p.categoria LIKE %?1%"
            + "OR p.descripcion LIKE %?1%")
    public List<Planacondicionamiento> findAll(String palabraClave);
    
}
