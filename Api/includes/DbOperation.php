<?php
 
class DbOperation
{
    //Database connection link
    private $con;
 
    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';
 
        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();
 
        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }
	
	/*
	* The create operation
	* When this method is called a new record is created in the database
	*/
	function createAlumno($nombre, $direccion){
		$stmt = $this->con->prepare("INSERT INTO alumnos (nombre, direccion) VALUES (?, ?)");
		$stmt->bind_param("ss", $nombre, $direccion);
		if($stmt->execute())
			return true; 
		return false; 
	}



	/*
	* The read operation
	* When this method is called it is returning all the existing record of the database
	*/
	function getAlumno(){
		$stmt = $this->con->prepare("SELECT id, nombre, direccion FROM alumnos");
		$stmt->execute();
		$stmt->bind_result($id, $nombre, $direccion);
		
		$alumnos = array(); 
		
		while($stmt->fetch()){
			$alumno  = array();
			$alumno['id'] = $id; 
			$alumno['nombre'] = $nombre; 
			$alumno['direccion'] = $direccion; 
			
			array_push($alumnos, $alumno); 
		}
		
		return $alumnos; 
	}
	
	/*
	* The update operation
	* When this method is called the record with the given id is updated with the new given values
	*/
	function updateAlumno($id, $nombre, $direccion){
		$stmt = $this->con->prepare("UPDATE alumnos SET nombre = ?, direccion = ? WHERE id = ?");
		$stmt->bind_param("ssi", $nombre, $direccion, $id);
		if($stmt->execute())
			return true; 
		return false; 
	}



	
	
	/*
	* The delete operation
	* When this method is called record is deleted for the given id 
	*/
	function deleteAlumno($id){
		$stmt = $this->con->prepare("DELETE FROM alumnos WHERE id = ? ");
		$stmt->bind_param("i", $id);
		if($stmt->execute())
			return true; 
		
		return false; 
	}
}