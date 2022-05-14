<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <title>Administración de casas </title>

    

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto" style="max-width: 350px; padding-top: 40px" >
  <form>
    <h1 class="h3 mb-3 fw-normal">INICIAR SESIÓN</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo electrónico</label>
    </div>
    <div class="form-floating" style="position: relative">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" >
      <label for="floatingPassword">Contraseña</label>
       <button id="show_password" type="button" class="btn btn-dark" onclick="mostrarPassword()" style="position: absolute; right: 5px; top:15px">
        <span class="fa fa-eye-slash icono" style="color:#FFF"></span>
      </button>

    </div>

    <div class="checkbox mb-3">
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>

    
  

</body>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        function mostrarPassword(){
          var password = document.getElementById("floatingPassword");
                    
            if(password.type == "password"){
                password.type = "text";
                $('.icono').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                password.type = "password";
                $('.icono').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
      </script>


</html>