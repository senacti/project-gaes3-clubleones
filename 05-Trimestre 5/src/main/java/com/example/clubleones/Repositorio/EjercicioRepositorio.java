
package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Ejercicio;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface EjercicioRepositorio extends JpaRepository<Ejercicio, Long>{
    
}
