package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Entrenamiento;
import java.util.List;

public interface EntrenamientoServicio {

    public List<Entrenamiento> listarEntrenamiento(String palabraClave);

    public Entrenamiento guardarEntrenamiento(Entrenamiento entrenamiento);

    public Entrenamiento obtenerEntrenamientoPorId(Long id);

    public Entrenamiento actualizarEntrenamiento(Entrenamiento entrenamiento);

    public Entrenamiento eliminarEntrenamiento(Long id);

    public List<Entrenamiento> listAll();
}
