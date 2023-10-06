
package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Programacion;
import java.util.List;

public interface ProgramacionServicio {
    public List<Programacion> listarProgramacion(String palabraClave);
    
    public Programacion guardarProgramacion(Programacion programacion);
    
    public Programacion obtenerProgramacionPorId(Long id);
    
    public Programacion actualizarProgramacion(Programacion programacion);
    
    public Programacion eliminarProgramacion(Long id);
}