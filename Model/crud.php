<?php

require_once "conexion.php"; 

class Datos extends Conexion{

/*  public function datosAlumno($dato){
    $stmt = Conexion::conectar()->prepare("SELECT inscritos.noControl as noControl, inscritos.nombre as nombre, inscritos.licenciatura as licenciatura, inscritos.statusControl as statusControl, inscritos.statusAdmin as statusAdmin, plantel.idplantel as idplantel, plantel.nombre as nombreplantel FROM inscritos INNER JOIN plantel ON inscritos.plantel = plantel.idplantel WHERE noControl = :control AND plantel = :plantel");      
    $stmt->bindParam(":plantel", $dato["plantel"], PDO::PARAM_INT);
    $stmt->bindParam(":control", $dato["control"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
  }*/
  public function registraUser($datosModel){
    $stmt = Conexion::conectar()->prepare("INSERT INTO usuario (nick, pass, nombre, tipo) VALUES(:nick, :pass, :nombre, :tipo)");

    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $datosModel["tipo"], PDO::PARAM_STR);
    $stmt->bindParam(":nick", $datosModel["nick"], PDO::PARAM_STR);
    $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  } 

  
 

}
