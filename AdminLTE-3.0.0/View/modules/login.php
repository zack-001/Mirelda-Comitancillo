
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>CLINICA</b> DENTAL</a>
  </div>
  <!-- /.login-logo -->
  <div  style=" flex-flow: row;">


     <div class="card"  style=" flex-flow: row; width: 700px" >  
    <img src="../View/images/b4.jpg" alt=" " />
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesión para comenzar</p>
      
      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Nick" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-shield"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        <!--  <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
   -->

      <p class="mb-1">
        <a href="#"></a>
      </p>
      <p class="mb-0">
        <a href="../" class="text-center">Regresar a página principal</a>
      </p> 
    </div>
    <!-- /.login-card-body -->
  </div>

  </div>
  
</div>

  <?php

$ingreso = new DentalAdmin();
//$ingreso -> registroUser(); 
$ingreso -> accesoUser();
//$ingreso -> idCliente();


if(isset($_GET["action"])){
  if($_GET["action"] == "fallo"){
        echo '<script>alert("Datos incorrectos");</script>';
      echo '<script> window.location="login";</script>';
    } 
   
 } 