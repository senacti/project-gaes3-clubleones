package com.example.clubleones.config;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.web.SecurityFilterChain;
import org.springframework.security.web.util.matcher.AntPathRequestMatcher;

@Configuration
@EnableWebSecurity
public class SpringSecurity {

    @Autowired
    private UserDetailsService userDetailsService;

    @Bean
    public static PasswordEncoder passwordEncoder() {
        return new BCryptPasswordEncoder();
    }

    @Bean
    public SecurityFilterChain filterChain(HttpSecurity http) throws Exception {
        http.csrf().disable()
                .authorizeHttpRequests((authorize)
                        -> authorize.requestMatchers("/register/**").permitAll()
                        .requestMatchers("/index").permitAll()
                        .requestMatchers("/error404").permitAll()
                        .requestMatchers("/error500").permitAll()
                        .requestMatchers("/landingpage").permitAll()
                        .requestMatchers("/landingacond").permitAll()
                        .requestMatchers("/landingentre").permitAll()
                        .requestMatchers("/landingcamp").permitAll()
                        .requestMatchers("/css/**").permitAll() // Acceso a archivos CSS
                        .requestMatchers("/js/**").permitAll() // Acceso a archivos JavaScript
                        .requestMatchers("/imagenes/**").permitAll() // Acceso a imágenes

                        .requestMatchers("/users").hasRole("ADMIN")
                        .requestMatchers("/dashboard").hasAnyRole("USER", "ADMIN")
                                
                        .requestMatchers("/planes").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/planes/nuevo").hasRole("ADMIN")
                        .requestMatchers("/planes/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/planes/{id}").hasRole("ADMIN")
                        .requestMatchers("/planes/export/excel").permitAll()
                                
                        .requestMatchers("/tests").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/tests/nuevo").hasRole("ADMIN")
                        .requestMatchers("/tests/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/tests/{id}").hasRole("ADMIN")
                        .requestMatchers("/tests/export/excel").permitAll()
                                
                        .requestMatchers("/ejercicios").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/ejercicios/verejercicios/{id}").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/ejercicios/nuevo").hasRole("ADMIN")
                        .requestMatchers("/ejercicios/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/ejercicios/planes/{id}").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/ejercicios/{id}").hasRole("ADMIN")
                        .requestMatchers("/ejercicios/export/excel").permitAll()
                        
                        .requestMatchers("/entrenamientos").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/entrenamientos/nuevo").hasRole("ADMIN")
                        .requestMatchers("/entrenamientos/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/entrenamientos/{id}").hasRole("ADMIN")
                        .requestMatchers("/entrenamientos/export/excel").permitAll()
                        
                        .requestMatchers("/campeonatos").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/campeonatos/nuevo").hasRole("ADMIN")
                        .requestMatchers("/campeonatos/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/campeonatos/{id}").hasRole("ADMIN")
                        //.requestMatchers("/campeonatos/export/excel").permitAll()
                        
                        .requestMatchers("/equipos").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/equipos/verequipos/{id}").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/equipos/nuevo").hasRole("ADMIN")
                        .requestMatchers("/equipos/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/equipos/{id}").hasRole("ADMIN")
                        .requestMatchers("/equipos/export/excel").permitAll()
                                
                        .requestMatchers("/jugadores").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/jugadores/verjugadores/{id}").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/jugadores/nuevo").hasRole("ADMIN")
                        .requestMatchers("/jugadores/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/jugadores/equipos/{id}").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/jugadores/{id}").hasRole("ADMIN")
                        .requestMatchers("/jugadores/export/excel").permitAll()
                        
                        .requestMatchers("/programacion").hasAnyRole("ADMIN", "USER")
                        .requestMatchers("/programacion/nuevo").hasRole("ADMIN")
                        .requestMatchers("/programacion/editar/{id}").hasRole("ADMIN")
                        .requestMatchers("/programacion/{id}").hasRole("ADMIN")
                        //.requestMatchers("/equipos/export/excel").permitAll()
                
                ).formLogin(
                        form -> form
                                .loginPage("/login")
                                .loginProcessingUrl("/login")
                                .defaultSuccessUrl("/dashboard")
                                .permitAll()
                ).logout(
                        logout -> logout
                                .logoutRequestMatcher(new AntPathRequestMatcher("/logout"))
                                .permitAll()
                );
        return http.build();
    }

    @Autowired
    public void configureGlobal(AuthenticationManagerBuilder auth) throws Exception {
        auth
                .userDetailsService(userDetailsService)
                .passwordEncoder(passwordEncoder());
    }

    /*    @Override
    public void addResourceHandlers(ResourceHandlerRegistry registry) {
        registry.addResourceHandler("/css/**").addResourceLocations("classpath:/static/css");
    }*/

}

