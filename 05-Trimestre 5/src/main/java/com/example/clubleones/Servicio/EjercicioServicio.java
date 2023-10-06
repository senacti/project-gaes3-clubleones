package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Ejercicio;
import java.util.List;

public interface EjercicioServicio{
    
    public List<Ejercicio> listarEjercicio();
    
    public Ejercicio guardarEjercicio(Ejercicio ejercicio);
    
    public Ejercicio obtenerEjercicioPorId(Long id);
    
    public Ejercicio actualizarEjercicio(Ejercicio ejercicio);
    
    public Ejercicio eliminarEjercicio(Long id);
    
    public List<Ejercicio> listAll();

}