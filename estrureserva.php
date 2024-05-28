<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas / D'eventos</title>
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class=" m-0 display-4 fa text-white service-icon">D'eventos</h1>
                                <h1 class="text-primary">Haga su reserva con los mejores.</h1>
                                <h1 class=""></h1>
                            </div>
                            <?php
                            include("db.php");
                            include("validar.php");
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                   
                    <form action="modireserva2.php" method="post">
                    <label  class="text-primary text-uppercase mb-4 "for="usuario">Usuario:</label><br>
                      <input  type="text" id="usuario" name="usuario"><br>
                      
                      <label class="text-primary text-uppercase mb-4 "or="gmail">gmail:</label><br>
                      <input type="text" id="gmail" name="gmail"><br>

                      <label class="text-primary text-uppercase mb-4 "for="t_resereva">Tipo de reserva:</label><br>
                      <input type="text" id="t_resereva" name="t_resereva"><br>

                      <label class="text-primary text-uppercase mb-4 "for="t_decoracion">Tipo de decoracion:</label><br>
                      <input type="text" id="usuario" name="usuario"><br>

                      <label class="text-primary text-uppercase mb-4 "for="direccion">Dirección:</label><br>
                      <input type="text" id="direccion" name="direccion"><br><br>

                      <label class="text-primary text-uppercase mb-4 "for="fecha">Fecha:</label><br>
                      <input type="date" id="fecha" name="fecha"><br><br>
    
                      <label class="text-primary text-uppercase mb-4 "for="hora">Hora:</label><br>
                      <input type="time" id="hora" name="hora"><br><br>

                      
  
                      <style>

                      .btn {
        
                       background-color: peru; 
                       border: none; 
                       color: white; 
                       padding: 10px 20px; 
                       text-align: center; 
                       text-decoration: none; 
                       display: inline-block; 
                       font-size: 16px; 
                       margin: 4px 2px; 
                       cursor: pointer; 
                     }
                     input[name="btnreserva"] {
                      }
                      </style>
                     <input name="btnreserva" class="btn" type="submit" value="Modificar Reserva">


                    </form>
                    <form action="estrureserva.php" method="post">
                      
                      <style>
                        
                    

                      .btn {
        
                       background-color: peru; 
                       border: none; 
                       color: white; 
                       padding: 10px 20px; 
                       text-align: center; 
                       text-decoration: none; 
                       display: inline-block; 
                       font-size: 16px; 
                       margin: 4px 2px; 
                       cursor: pointer; 
                     }
                     input[name="btnreserva"] {
                      }
                      </style>
                     <input name="btnreserva" class="btn" type="submit" value="Guardar Reserva">


                     </form>
                    <form action="index.html" method="post">
                      
                      <style>

                      .btn {
        
                       background-color: peru; 
                       border: none; 
                       color: white; 
                       padding: 10px 20px; 
                       text-align: center; 
                       text-decoration: none; 
                       display: inline-block; 
                       font-size: 16px; 
                       margin: 4px 2px; 
                       cursor: pointer; 
                     }
                     input[name="btnregresarindex"] {
                      }
                      </style>
                     <input name="btnregresarindex" class="btn" type="submit" value="Regresar">


                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>