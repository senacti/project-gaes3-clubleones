package com.example.clubleones.Repositorio;

import com.example.clubleones.Entidad.Role;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface RoleRepository extends JpaRepository<Role, Long>{
        Role findByName(String name);
}
