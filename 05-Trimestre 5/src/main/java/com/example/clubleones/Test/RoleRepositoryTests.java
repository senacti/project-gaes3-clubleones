/*package com.example.clubleones.Test;

import com.example.clubleones.Entidad.Role;
import com.example.clubleones.Entidad.User;
import com.example.clubleones.Repositorio.RoleRepository;
import com.example.clubleones.Repositorio.UserRepository;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;

/*@DataJpaTest
@AutoConfigureTestDatabase(replace = Replace.NONE)
@Rollback(false)*/
/*public class RoleRepositoryTests {

    @Autowired
    private RoleRepository roleRepository;
    
    @Autowired
    private UserRepository userRepository;

    public void testCreateRoles() {
        Role admin = new Role("Admin");

        roleRepository.saveAll(List.of(admin));

        Role roles = roleRepository.findAll();

        //assertThat(listRoles.size()).isEqualTo(3);
    }

    public void testAddRoleToNewUser() {

        Role roleAdmin = roleRepository.findByName("Admin");

        User user = new User();
        user.setEmail("mikes.gates@gmail.com");
        user.setPassword("mike2020");
        user.setName("Mike");
        user.addRole(roleAdmin);

        userRepository.save(user);
        //User savedUser = userRepo.save(user);

        //assertThat(savedUser.getRoles().size()).isEqualTo(1);
    }
}
*/