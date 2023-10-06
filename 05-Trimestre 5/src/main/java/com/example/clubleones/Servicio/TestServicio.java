package com.example.clubleones.Servicio;

import com.example.clubleones.Entidad.Test;
import java.util.List;


public interface TestServicio {
    public List<Test> listarTest(String palabraClave);
    
    public Test guardarTest(Test test);
    
    public Test obtenerTestPorId(Long id);
    
    public Test actualizarTest(Test test);
    
    public Test eliminarTest(Long id);
    
    public List<Test> listAll();
}
