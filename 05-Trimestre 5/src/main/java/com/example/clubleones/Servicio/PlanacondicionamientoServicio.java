
package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Planacondicionamiento;
import java.util.List;

public interface PlanacondicionamientoServicio {
    
    public List<Planacondicionamiento> listarPlanes(String palabraClave);
    
    public Planacondicionamiento guardarPlan(Planacondicionamiento planacondicionamiento);
    
    public Planacondicionamiento obtenerPlanPorId(Long id);
    
    public Planacondicionamiento actualizarPlan(Planacondicionamiento planacondicionamiento);
    
    public Planacondicionamiento eliminarPlan(Long id);
        
    public List<Planacondicionamiento> listAll();

}
