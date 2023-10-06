package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.User;
import com.example.clubleones.dto.UserDto;
import java.util.List;


public interface UserService {
    void saveUser(UserDto userDto);

    User findUserByEmail(String email);

    List<UserDto> findAllUsers();
    
    //A CONTINUACIÓN VOY A TRATAR DE CREAR UN USUARIO CON ROL DE ADMIN

    //void createAdminUser(UserDto userDto);
}
