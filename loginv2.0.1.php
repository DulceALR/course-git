
<?php

include('conexion.php');

?>


<?php

if (isset($_POST['registrar'])) 

{

$query="SELECT * from secion WHERE usuario = '$_POST[usuario]' and contraseña = '$_POST[contraseña]' ";

$registro=mysqli_query($cnx,$query);
$datos=mysqli_num_rows($registro);


if ($datos>0) 
{
header('location:seciones.php');
}


	
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
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

	<link rel="shortcut icon" href="images/o.png" />
</head>
<body>
	<h1>Login</h1>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>Inicia Secion</h2>


			   <form  method="post" >


  <div class="inputs-w3ls">
                  <i class="fa fa-key" aria-hidden="true"></i>
                  <input type="password" name="contraseña" id="contraseña" placeholder="Password" required=""/>
                </div>


                <div class="inputs-w3ls">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" name="usuario" id="usuario" placeholder="Username" required=""/>
                </div>

              

          
          <input type="submit" value="LOGIN" name="registrar" id="registrar"  > 

                  <div class="wthree-text"> 
                    
<li class="nav-item">
      <a   class="nav-link" href="registrc.php"> <font color="#9BF7EE" align="center"> ¡No tienes una cuenta! : <font color="yellow"> Crea tu cuenta</font>  </font></a>
    </li>



                
                  </div>  
                </form>
    </div>
  </div>
  <div class="footer-w3l">
    






 </div>









</body>
</html>