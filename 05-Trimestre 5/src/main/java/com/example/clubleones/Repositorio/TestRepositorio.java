package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Test;
import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

@Repository
public interface TestRepositorio extends JpaRepository<Test, Long>{
    
    @Query("SELECT t FROM Test t WHERE t.nombre LIKE %?1%"
            + "OR t.tipo LIKE %?1%"
            + "OR t.descripcion LIKE %?1%")
    public List<Test> findAll(String palabraClave);
    
}
