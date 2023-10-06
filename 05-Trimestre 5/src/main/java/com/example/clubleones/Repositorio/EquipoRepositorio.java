
package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Equipo;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface EquipoRepositorio extends JpaRepository<Equipo, Long>{
    
}