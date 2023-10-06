package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Ejercicio;
import com.example.clubleones.Entidad.Planacondicionamiento;
import com.example.clubleones.Repositorio.PlanacondicionamientoRepositorio;
import com.example.clubleones.Servicio.PlanacondicionamientoServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class PlanacondicionamientoServicioImpl implements PlanacondicionamientoServicio {

    @Autowired
    private PlanacondicionamientoRepositorio repositorio;

    @Override
    public List<Planacondicionamiento> listarPlanes(String palabraClave) {
        if(palabraClave != null){
            return repositorio.findAll(palabraClave);
        }
        return repositorio.findAll();
    }

    @Override
    public Planacondicionamiento guardarPlan(Planacondicionamiento planacondicionamiento) {
        return repositorio.save(planacondicionamiento);
    }

    @Override
    public Planacondicionamiento obtenerPlanPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Planacondicionamiento actualizarPlan(Planacondicionamiento planacondicionamiento) {
        return repositorio.save(planacondicionamiento);
    }

    @Override
    public Planacondicionamiento eliminarPlan(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Planacondicionamiento> listAll() {
        return repositorio.findAll(Sort.by("nombre").ascending());
    }

    /*@Override
    public List<Planacondicionamiento> getAll() {
        return repositorio.findAll();
    }*/
}
