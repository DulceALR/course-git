<?php

include('conexion.php');

?>

<?php
ob_start();

?>
      
<?php
if (isset($_POST['registrar'])) 


{
   header('location:login.php');
}


?>



<?php

ob_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Registrate </title>
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Basic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.min.js"></script>
    <script>$(document).ready(function(c) {
    $('.alert-close').on('click', function(c){
      $('.main-agile').fadeOut('slow', function(c){
        $('.main-agile').remove();
      });
    });   
  });
  </script>

  <link rel="shortcut icon" href="images/reg.png" />
</head>
<body>
  <h1>Registarte </h1>


  <div class="main-agile">
    <div class="alert-close"> </div>
    <div class="content-wthree">
    <div class="circle-w3layouts"></div>
      <h2>Ingresa tus datos</h2>

<img src="images/popo.png"  height= "100" width="100">






      <form  method="post">

 <div class="inputs-w3ls">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" name="nombre" id="nombre" placeholder="Nombre completo " required=""/>
                </div>

  <div class="inputs-w3ls">
                  <i class="fa fa-key" aria-hidden="true"></i>
                  <input type="password" name="contraseña" id="constraseña" placeholder="Password" required=""/>
                </div>


                <div class="inputs-w3ls">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" name="usuario" id="usuario" placeholder="Username" required=""/>
                </div>

            
          <input type="submit" value="Crear cuenta " name="registrar" id= "registrar"  > 

 <li class="nav-item">
      <a   class="nav-link" href="login.php"> <font color="#9BF7EE" align="center">  Inicia secion </font></a>
 

    </li>



                  <div class="wthree-text"> 
          <br>

                
                  </div>  
                </form>
    </div>
  </div>
  <div class="footer-w3l">
    


 </div>

<?php
             if (isset($_POST['registrar']))
         {
              
           if (!empty($_POST['usuario']))
           {


 
echo "bienvenido '$_POST[nombre]'";

             mysqli_query($cnx, "INSERT into secion values
               ( '$_POST[nombre]',
                '$_POST[contraseña]',
                '$_POST[usuario]' )"   );            


           }
         }
      
            ?>




</body>
</html>
  
