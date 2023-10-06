
package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Campeonatos;
import java.util.List;

public interface CampeonatosServicio {
    public List<Campeonatos> listarCampeonatos(String palabraClave);
    
    public Campeonatos guardarCampeonato(Campeonatos campeonatos);
    
    public Campeonatos obtenerCampeonatoPorId(Long id);
    
    public Campeonatos actualizarCampeonato(Campeonatos campeonatos);
    
    public Campeonatos eliminarCampeonato(Long id);
}