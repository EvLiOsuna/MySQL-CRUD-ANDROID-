package net.simplifiedlearning.AlumnosApp;

/**
 * Created by Belal on 9/9/2017.
 */

public class Api {

    private static final String ROOT_URL = "http://192.168.0.16:8080"+"/Api/v1/Api.php?apicall=";

    public static final String URL_CREATE_HERO = ROOT_URL + "createAlumno";
    public static final String URL_READ_HEROES = ROOT_URL + "getAlumno";
    public static final String URL_UPDATE_HERO = ROOT_URL + "updateAlumno";
    public static final String URL_DELETE_HERO = ROOT_URL + "deleteAlumno&id=";

}
