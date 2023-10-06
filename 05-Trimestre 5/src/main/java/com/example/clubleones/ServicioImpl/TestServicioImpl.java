package com.example.clubleones.ServicioImpl;

import com.example.clubleones.Entidad.Test;
import com.example.clubleones.Repositorio.TestRepositorio;
import com.example.clubleones.Servicio.TestServicio;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

@Service
public class TestServicioImpl implements TestServicio {

    @Autowired
    private TestRepositorio repositorio;

    @Override
    public List<Test> listarTest(String palabraClave) {
        if(palabraClave != null){
            return repositorio.findAll(palabraClave);
        }
        return repositorio.findAll();  
    }

    @Override
    public Test guardarTest(Test test) {
        return repositorio.save(test);
    }

    @Override
    public Test obtenerTestPorId(Long id) {
        return repositorio.findById(id).get();
    }

    @Override
    public Test actualizarTest(Test test) {
        return repositorio.save(test);
    }

    @Override
    public Test eliminarTest(Long id) {
        repositorio.deleteById(id);
        return null;
    }

    @Override
    public List<Test> listAll() {
        return repositorio.findAll(Sort.by("nombre").ascending());
    }

}
