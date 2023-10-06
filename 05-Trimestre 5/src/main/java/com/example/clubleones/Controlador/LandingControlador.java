package com.example.clubleones.Controlador;

import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class LandingControlador {

    @GetMapping({"/landingpage", "/"})
    public String mostrarLanding() {
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        if (authentication != null && authentication.isAuthenticated() && !authentication.getPrincipal().equals("anonymousUser")) {
            // Usuario autenticado, redirige a la página de inicio
            return "redirect:/dashboard";
        }
        return "/landingpage";
    }

    @GetMapping({"/landingacond"})
    public String mostrarLandingAcond() {
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        if (authentication != null && authentication.isAuthenticated() && !authentication.getPrincipal().equals("anonymousUser")) {
            // Usuario autenticado, redirige a la página de inicio
            return "redirect:/dashboard";
        }
        return "/landingacond";
    }

    @GetMapping({"/landingcamp"})
    public String mostrarLandingCamp() {
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        if (authentication != null && authentication.isAuthenticated() && !authentication.getPrincipal().equals("anonymousUser")) {
            // Usuario autenticado, redirige a la página de inicio
            return "redirect:/dashboard";
        }
        return "/landingcamp";
    }

    @GetMapping({"/landingentre"})
    public String mostrarLandingEntre() {
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        if (authentication != null && authentication.isAuthenticated() && !authentication.getPrincipal().equals("anonymousUser")) {
            // Usuario autenticado, redirige a la página de inicio
            return "redirect:/dashboard";
        }
        return "/landingentre";
    }

    @GetMapping({"/error404"})
    public String mostrarError404() {
        return "/error404";
    }

    @GetMapping({"/error500"})
    public String mostrarError500() {
        return "/error500";
    }
}
