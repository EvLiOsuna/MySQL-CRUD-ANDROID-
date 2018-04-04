package net.simplifiedlearning.AlumnosApp;

import java.io.Serializable;



class AlumnoClass {
    private int id;
    private String nombre, direccion;

    public AlumnoClass(int id, String nombre, String direccion) {
        this.id = id;
        this.nombre = nombre;
        this.direccion = direccion;
    }

    public int getId() {
        return id;
    }

    public String getNombre() {
        return nombre;
    }

    public String getDireccion() { return direccion; }

}
