<?php

require_once "conexion.php"; 

class DatosAdmin extends Conexion{



  public function updateEstadoCita($datosModel){
  
    $stmt = Conexion::conectar()->prepare("UPDATE cita  SET  estado = :estado WHERE idCita = :id");
  
      $stmt->bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);
      $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
     
      if ($stmt->execute()) {
        return "success";
        }
      else {
        return "error";
      }
      $stmt->close();
    }

  public function registroDocUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("INSERT INTO medico (idmedico, nombre, especialidad) VALUES(:id, :nombre, :especialidad)");

    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":especialidad", $datosModel["especialidad"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function buscaIdmedico($datosModel){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM medico  WHERE idmedico = :id");  
    //$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();   
    $stmt->close();

  }

  public function consultaDocs($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla "); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function actualizaDocUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE medico SET nombre = :nombre, especialidad = :especialidad WHERE idmedico = :id");

    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":especialidad", $datosModel["especialidad"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function eliminaDocUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("DELETE FROM medico WHERE idmedico = :id");

    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
  //  $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
  //  $stmt->bindParam(":especialidad", $datosModel["especialidad"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function listadoMedicos($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function listadoTratamientoscitas($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function guardatratamientomedico($datosModel){
  
  $stmt = Conexion::conectar()->prepare("INSERT INTO tipotratamiento (descripcion, costo, idmedico) VALUES(:tratamiento, :costo, :medico)");

    $stmt->bindParam(":tratamiento", $datosModel["tratamiento"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datosModel["costo"], PDO::PARAM_INT);
    $stmt->bindParam(":medico", $datosModel["medico"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function consultalistadoTratamientos($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT tipotratamiento.idTipoTratamiento as idTipoTratamiento, tipotratamiento.descripcion as descripcion, tipotratamiento.costo as costo, $tabla.idmedico as idmedico, $tabla.nombre as nombre, $tabla.especialidad as especialidad FROM tipotratamiento INNER JOIN medico ON tipotratamiento.idmedico = $tabla.idmedico"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function consultaCitahoy($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT cita.idcita as idcita, cita.fecha as fecha, cita.prox_cita as prox_cita, cita.total_pagar as total_pagar_cita, cliente.idCliente as idCliente, cliente.nombre as nombrecliente, cita.estado as estado FROM cita INNER JOIN cliente ON cita.idCliente = cliente.idCliente WHERE  fecha = :hoy"); 
    $stmt->bindParam(":hoy", $datosModel["hoy"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }
  public function consultaCita($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT cita.idcita as idcita, cita.fecha as fecha, cita.prox_cita as prox_cita, cita.total_pagar as total_pagar_cita, cliente.idCliente as idCliente, cliente.nombre as nombrecliente, cita.estado as estado FROM cita INNER JOIN cliente ON cita.idCliente = cliente.idCliente WHERE  cita.idcita = :idcita"); 
    $stmt->bindParam(":idcita", $datosModel["idcita"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }  

   public function consultaIngresoCita($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT cita.idcita as idcita, cita.fecha as fecha, cita.prox_cita as prox_cita, cita.total_pagar as total_pagar_cita, cliente.idCliente as idCliente, cliente.nombre as nombrecliente FROM cita INNER JOIN cliente ON cita.idCliente = cliente.idCliente WHERE  fecha = :fecha"); 
    $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  } 

  public function actualizacionTraminetos($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE tipotratamiento SET descripcion = :descripcion, costo = :costo, idmedico = :idmedico WHERE idTipoTratamiento = :idTipoTratamiento");

    $stmt->bindParam(":idTipoTratamiento", $datosModel["idTipoTratamiento"], PDO::PARAM_INT);
    $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datosModel["costo"], PDO::PARAM_STR);
    $stmt->bindParam(":idmedico", $datosModel["idmedico"], PDO::PARAM_INT);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function eliminatipoTramientos($datosModel){
  
  $stmt = Conexion::conectar()->prepare("DELETE FROM tipotratamiento WHERE idTipoTratamiento = :idTipoTratamiento");

    $stmt->bindParam(":idTipoTratamiento", $datosModel["idTipoTratamiento"], PDO::PARAM_INT);
  //  $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
  //  $stmt->bindParam(":especialidad", $datosModel["especialidad"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function citasaprogramar($datosModel){  
  $stmt = Conexion::conectar()->prepare("INSERT INTO cita (idCliente, costo, idmedico) VALUES(:tratamiento, :costo, :medico)");

    $stmt->bindParam(":tratamiento", $datosModel["tratamiento"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datosModel["costo"], PDO::PARAM_INT);
    $stmt->bindParam(":medico", $datosModel["medico"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function consultaCosto($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT tipotratamiento.costo as costo, tipotratamiento.descripcion as descripcion, medico.nombre as nombre FROM tipotratamiento INNER JOIN medico ON tipotratamiento.idmedico = medico.idmedico  WHERE idTipoTratamiento = :idtratamiento");  
    $stmt->bindParam(":idtratamiento", $datosModel["idtratamiento"], PDO::PARAM_STR);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function consultaClientevaloracion($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT edocuenta.idEdoCuenta as idEdoCuenta, edocuenta.total_adecuado as total_adecuado, edocuenta.tratamiento as tratamiento, cliente.nombre as nombre, cliente.idCliente as cliente_idCliente FROM edocuenta INNER JOIN cliente ON edocuenta.cliente_idCliente = cliente.idCliente WHERE edocuenta.cliente_idCliente = :idCliente");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function consultaValoracion($datosModel){
    $stmt = Conexion::conectar()->prepare(
      "SELECT cita.total_pagar AS total, cita.fecha, @var:='CITA' as tipo, cita.idcita as id FROM cita WHERE idCliente=:idCliente
       UNION ALL
       SELECT valoracion.total as total, valoracion.fecha, valoracion.idTipoTratamieto as tipo, valoracion.idValoracion as id  FROM valoracion JOIN cita ON cita.idcita=valoracion.idcita WHERE cita.idCliente=:idCliente");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }




//check
  public function consultaClienteTA($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT edocuenta.idEdoCuenta as idEdoCuenta, edocuenta.total_adecuado as total_adecuado, edocuenta.tratamiento as tratamiento, cliente.nombre as nombre, cliente.idCliente as cliente_idCliente
     FROM edocuenta INNER JOIN cliente ON edocuenta.cliente_idCliente = cliente.idCliente 
    WHERE edocuenta.cliente_idCliente = :idCliente AND edocuenta.total_adecuado =:idcita");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
    $stmt->bindParam(":idcita", $datosModel["idcita"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }
  public function Cliente_edocuenta($id){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM edocuenta WHERE edocuenta.cliente_idCliente=$id");  
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function actualizadeuda($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE edocuenta SET   total_adecuado = :deudaactual WHERE idEdoCuenta = :idEdoCuenta");

    $stmt->bindParam(":idEdoCuenta", $datosModel["idEdoCuenta"], PDO::PARAM_INT);
    $stmt->bindParam(":deudaactual", $datosModel["deudaactual"], PDO::PARAM_INT);
   // $stmt->bindParam(":especialidad", $datosModel["especialidad"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function abonarCliente($datosModel){  
  $stmt = Conexion::conectar()->prepare("INSERT INTO abono (cantidad, idEdoCuenta, idcliente, fecha, razon) VALUES(:abono, :idEdoCuenta, :idCliente, :fecha, :razon)");

    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
     $stmt->bindParam(":idEdoCuenta", $datosModel["idEdoCuenta"], PDO::PARAM_INT);
    $stmt->bindParam(":abono", $datosModel["abono"], PDO::PARAM_INT);
    $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
    $stmt->bindParam(":razon", $datosModel["razon"], PDO::PARAM_STR);
   
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }


  public function consultaedocuenta(){
    $stmt = Conexion::conectar()->prepare("SELECT edocuenta.idEdoCuenta as idEdoCuenta, edocuenta.total_adecuado as total_adecuado, edocuenta.tratamiento as tratamiento, cliente.idCliente as idEdoCuenta, cliente.nombre as nombre FROM edocuenta INNER JOIN cliente ON cliente.idCliente = edocuenta.cliente_idCliente"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function consultaAbonos(){
    $stmt = Conexion::conectar()->prepare("SELECT  abono.idAbono as idAbono, abono.cantidad as cantidad, abono.fecha as fecha, edocuenta.idEdoCuenta as idEdoCuenta, edocuenta.total_adecuado as porcubrir, cliente.idCliente as idCliente, cliente.nombre as nombre FROM abono INNER JOIN edocuenta ON abono.idEdoCuenta = edocuenta.idEdoCuenta INNER JOIN cliente ON cliente.idCliente = abono.idcliente"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
  }
  public function consultaAbonosCliente($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT *  FROM abono WHERE abono.idcliente= :idCliente "); 
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
  }
  public function getTratamiento($id){
    $stmt = Conexion::conectar()->prepare("SELECT tipotratamiento.descripcion  FROM tipotratamiento WHERE tipotratamiento.idTipoTratamiento= $id "); 
   // $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
  }
  public function getMov($id){
    $sql = "SELECT SUM(valoracion.total) FROM valoracion JOIN cita ON cita.idcita=valoracion.idcita WHERE cita.idCliente=$id\n"
    . "UNION \n"
    . "SELECT SUM(cita.total_pagar) FROM cita WHERE cita.idCliente=$id\n"
    . "UNION \n"
    . "SELECT SUM(abono.cantidad) FROM abono WHERE abono.idcliente=$id";
    $stmt = Conexion::conectar()->prepare($sql); 
   // $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
   $stmt->execute();
   return $stmt->fetchAll();
   $stmt->close();
  }
  public function getCosto($razon, $id){
    if($razon=='CITA'){
      $id='CITA_'.$id;
    }
    $sql = "SELECT SUM(cantidad) FROM `abono` WHERE razon=:id";
    
    $stmt = Conexion::conectar()->prepare($sql); 
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
  }
  
/*  public function datosAlumno($dato){
    $stmt = Conexion::conectar()->prepare("SELECT inscritos.noControl as noControl, inscritos.nombre as nombre, inscritos.licenciatura as licenciatura, inscritos.statusControl as statusControl, inscritos.statusAdmin as statusAdmin, plantel.idplantel as idplantel, plantel.nombre as nombreplantel FROM inscritos INNER JOIN plantel ON inscritos.plantel = plantel.idplantel WHERE noControl = :control AND plantel = :plantel");      
    $stmt->bindParam(":plantel", $dato["plantel"], PDO::PARAM_INT);
    $stmt->bindParam(":control", $dato["control"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
  }*/
  /*
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
  } */
 

}
