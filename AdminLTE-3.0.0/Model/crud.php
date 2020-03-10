<?php

require_once "conexion.php"; 

class Datos extends Conexion{
  public function GetLastID($idcita, $tratamiento){
    $stmt = Conexion::conectar()->prepare("SELECT idValoracion from valoracion WHERE idcita=$idcita AND idTipoTratamieto= $tratamiento");  
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function AddReceta($idValoracion, $datos){
	$stmt = Conexion::conectar()->prepare("INSERT INTO receta(medicamento,descripcion,notas,idValoracion) VALUES(:medicamento, :descripcion, :notas, $idValoracion)");
	$stmt->bindParam(":medicamento", $datos[0], PDO::PARAM_STR);
	$stmt->bindParam(":descripcion", $datos[1], PDO::PARAM_STR);
	$stmt->bindParam(":notas", $datos[2], PDO::PARAM_STR);
	if ($stmt->execute()) {
        return "success";
        }
      else {
        return "error";
      }
    $stmt->close();

  }

  public function consultalistadoTratamientoUser($idcita){
		$sql = "SELECT valoracion.idValoracion, valoracion.organosDentarios, valoracion.total, valoracion.fecha, tipotratamiento.descripcion \n"
    . "FROM valoracion JOIN tipotratamiento \n"
    . "ON valoracion.idTipoTratamieto= tipotratamiento.idTipoTratamiento\n"
    . "WHERE idcita=$idcita";
    $stmt = Conexion::conectar()->prepare($sql); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function consultalistadoRecetasTratamiento($valoracion){
		$sql = "SELECT * FROM receta\n"
    . "WHERE idValoracion=$valoracion";
    $stmt = Conexion::conectar()->prepare($sql); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }


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

  public function ValidarUser($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario  WHERE nick = :nick AND pass = :pass ");  
    $stmt->bindParam(":nick", $datosModel["email"], PDO::PARAM_STR);
    $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function idCliente($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM cliente  WHERE idUsuario = :id");  
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function consultaNickcliente($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT nick FROM usuario  WHERE nick = :nick");  
    $stmt->bindParam(":nick", $datosModel["nick"], PDO::PARAM_STR);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function guardaUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("INSERT INTO usuario (nick, pass, nombre, tipo) VALUES(:nick, :pass, :nombre, :tipo)");

    $stmt->bindParam(":nick", $datosModel["nick"], PDO::PARAM_STR);
    $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $datosModel["tipo"], PDO::PARAM_STR);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function buscaid($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT idUsuario FROM usuario  WHERE nick = :nick");  
    $stmt->bindParam(":nick", $datosModel["nick"], PDO::PARAM_STR);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function guardaCliente($datosModel){
  
  $stmt = Conexion::conectar()->prepare("INSERT INTO cliente (nombre, nombreTutor, fecha_ingreso, edad, sexo, direccion, telefono, alergias, tipoSangre, telefonoTutor, parentezco, idUsuario) VALUES(:nombre, :tutor, :fechaingreso, :edad, :sexo, :direccion, :telefono, :alergias, :sangre, :telfonotutor, :parentesco, :id)");

    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_INT);
    $stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datosModel["sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":alergias", $datosModel["alergias"], PDO::PARAM_STR);
    $stmt->bindParam(":sangre", $datosModel["sangre"], PDO::PARAM_STR);
    $stmt->bindParam(":parentesco", $datosModel["parentesco"], PDO::PARAM_STR);
    $stmt->bindParam(":tutor", $datosModel["tutor"], PDO::PARAM_STR);
    $stmt->bindParam(":fechaingreso", $datosModel["fechaingreso"], PDO::PARAM_STR);
    $stmt->bindParam(":telfonotutor", $datosModel["telfonotutor"], PDO::PARAM_INT);
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }



  public function updateCliente($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE cliente  SET  nombre = :nombre, edad = :edad, sexo = :sexo, direccion = :direccion, telefono = :telefono, alergias = :alergias, tipoSangre = :sangre WHERE idUsuario = :id");

    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_INT);
    $stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datosModel["sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":alergias", $datosModel["alergias"], PDO::PARAM_STR);
    $stmt->bindParam(":sangre", $datosModel["sangre"], PDO::PARAM_STR);
   // $stmt->bindParam(":parentesco", $datosModel["parentesco"], PDO::PARAM_STR);
   // $stmt->bindParam(":hoy", $datosModel["hoy"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }
  public function updateFechaCita($datosModel){
  
    $stmt = Conexion::conectar()->prepare("UPDATE cita  SET  prox_cita = :prox_cita WHERE idCita = :id");
  
      $stmt->bindParam(":prox_cita", $datosModel["prox_cita"], PDO::PARAM_STR);
      $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
     
      if ($stmt->execute()) {
        return "success";
        }
      else {
        return "error";
      }
      $stmt->close();
    }
   
  

   public function refreshupdateUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE usuario  SET  nombre = :nombre, pass = :pass WHERE idUsuario = :idUsuario");

    $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->bindParam(":idUsuario", $datosModel["idUsuario"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
   // $stmt->bindParam(":sexo", $datosModel["sexo"], PDO::PARAM_STR);
   // $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
   /// $stmt->bindParam(":alergias", $datosModel["alergias"], PDO::PARAM_STR);
   // $stmt->bindParam(":sangre", $datosModel["sangre"], PDO::PARAM_STR);
   // $stmt->bindParam(":parentesco", $datosModel["parentesco"], PDO::PARAM_STR);
   // $stmt->bindParam(":hoy", $datosModel["hoy"], PDO::PARAM_STR);
   // $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function refreshupdateCliente($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE cliente  SET  nombre = :nombre, edad = :edad, sexo = :sexo, direccion = :direccion, telefono = :telefono, alergias = :alergias, tipoSangre = :sangre WHERE idUsuario = :idUsuario");

    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_INT);
    $stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_INT);
    $stmt->bindParam(":sexo", $datosModel["sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":alergias", $datosModel["alergias"], PDO::PARAM_STR);
    $stmt->bindParam(":sangre", $datosModel["sangre"], PDO::PARAM_STR);
   // $stmt->bindParam(":parentesco", $datosModel["parentesco"], PDO::PARAM_STR);
   // $stmt->bindParam(":hoy", $datosModel["hoy"], PDO::PARAM_STR);
    $stmt->bindParam(":idUsuario", $datosModel["idUsuario"], PDO::PARAM_INT);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function updateUser($datosModel){
  
  $stmt = Conexion::conectar()->prepare("UPDATE usuario  SET  nombre = :nombre WHERE idUsuario = :id");

    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
   
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function consultalistadolistadoClientes($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT $tabla.idCliente as idCliente, $tabla.nombre as nombre, $tabla.edad as edad, $tabla.sexo as sexo, $tabla.direccion as direccion, $tabla.telefono as telefono, $tabla.alergias as alergias, $tabla.tipoSangre as tipoSangre, usuario.idUsuario as idUsuario, usuario.nick as nick, usuario.pass as pass FROM $tabla INNER JOIN usuario ON $tabla.idUsuario = usuario.idUsuario "); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function deleteCliente($datosModel){  
  $stmt = Conexion::conectar()->prepare("DELETE FROM cliente WHERE idCliente = :idCliente");
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_STR);
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


  public function deleteUser($datosModel){  
  $stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE idUsuario = :idUsuario");
    $stmt->bindParam(":idUsuario", $datosModel["idUsuario"], PDO::PARAM_STR);
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


  public function altaProgramacionCitas($datosModel){  
  $stmt = Conexion::conectar()->prepare("INSERT INTO cita (idCliente, fecha, prox_cita, total_pagar, observaciones, estado) VALUES(:idCliente, :fecha_cita, :fecha_prox_cita, :costo_cita, :observaciones, :estado)");
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
    $stmt->bindParam(":fecha_cita", $datosModel["fecha_cita"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha_prox_cita", $datosModel["fecha_prox_cita"], PDO::PARAM_STR);
    $stmt->bindParam(":costo_cita", $datosModel["costo_cita"], PDO::PARAM_INT);
    $stmt->bindParam(":observaciones", $datosModel["observaciones"], PDO::PARAM_STR);
    $stmt->bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function agregaValoracion($datosModel){  
  $stmt = Conexion::conectar()->prepare("INSERT INTO valoracion (idTipoTratamieto, organosDentarios, cantidad, total, idcita, fecha) VALUES(:idtratamiento, :organosDentarios, :cantidad, :total, :idcita, :fecha)");
    $stmt->bindParam(":idtratamiento", $datosModel["idtratamiento"], PDO::PARAM_INT);
    $stmt->bindParam(":organosDentarios", $datosModel["organosDentarios"], PDO::PARAM_STR);
    $stmt->bindParam(":idcita", $datosModel["idcita"], PDO::PARAM_INT);
    $stmt->bindParam(":total", $datosModel["total"], PDO::PARAM_INT);
    $stmt->bindParam(":cantidad", $datosModel["cantidad"], PDO::PARAM_INT);
    $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }

  public function buscacuenta($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT total_adecuado FROM edocuenta  WHERE cliente_idCliente = :idcliente");  
    $stmt->bindParam(":idcliente", $datosModel["idcliente"], PDO::PARAM_INT);
  //  $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }
  public function addEdoCuenta($datosModel){  
    $stmt = Conexion::conectar()->prepare("INSERT INTO edocuenta (total_adecuado, cliente_idCliente) VALUES(:total, :idcliente)"); 
      $stmt->bindParam(":total", $datosModel["total"], PDO::PARAM_INT);
      $stmt->bindParam(":idcliente", $datosModel["idcliente"], PDO::PARAM_STR);   
      if ($stmt->execute()) {
        return "success";
        }
      else {
        return "error";
      }
      $stmt->close();
    }
  /*public function actualizaCuenta($datosModel){  
  $stmt = Conexion::conectar()->prepare("INSERT INTO edocuenta (total_adecuado, cliente_idCliente, tratamiento) VALUES(:total, :idcliente, :descripcion)");
    $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);   
    $stmt->bindParam(":total", $datosModel["total"], PDO::PARAM_INT);
    $stmt->bindParam(":idcliente", $datosModel["idcliente"], PDO::PARAM_STR);   
    if ($stmt->execute()) {
      return "success";
      }
    else {
      return "error";
    }
    $stmt->close();
  }*/
  public function actualizaCuenta($datosModel){  
    $stmt = Conexion::conectar()->prepare("UPDATE edocuenta SET total_adecuado=:total WHERE cliente_idCliente= :idcliente");
      $stmt->bindParam(":total", $datosModel[total], PDO::PARAM_INT);
      $stmt->bindParam(":idcliente", $datosModel[idcliente], PDO::PARAM_INT);   
      if ($stmt->execute()) {
        return "success";
        }
      else {
        return "error";
      }
      $stmt->close();
    }


  public function consultaIngresos($datosModel){  
  $stmt = Conexion::conectar()->prepare("SELECT SUM(total_pagar) as total FROM cita  WHERE fecha = :fecha");
    $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);   
  //  $stmt->bindParam(":total", $datosModel["total"], PDO::PARAM_INT);
  //  $stmt->bindParam(":idcliente", $datosModel["idcliente"], PDO::PARAM_INT);   
   $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
  }
  public function consultaCostoTotal($datosModel){  
    $stmt = Conexion::conectar()->prepare("SELECT SUM(total_pagar) as total FROM cita  WHERE idcita = :idcita");
    $stmt->bindParam(":idcita", $datosModel["idcita"], PDO::PARAM_INT);   

     $stmt->execute();
      return $stmt->fetch();
      $stmt->close();
    }

  public function consultaCliente($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT cliente.idCliente as idCliente FROM cliente  WHERE idUsuario = :iduser");  
    $stmt->bindParam(":iduser", $datosModel["iduser"], PDO::PARAM_INT);
   // $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();

  }

  public function consultaCitas($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM cita  WHERE idCliente = :idCliente");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
   // $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  
  public function consultaedocuentasUser($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM edocuenta  WHERE   cliente_idCliente = :idCliente");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
   // $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();

  }

  public function consultaAbonoUser($datosModel){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM abono  WHERE   idcliente = :idCliente");  
    $stmt->bindParam(":idCliente", $datosModel["idCliente"], PDO::PARAM_INT);
   // $stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
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
