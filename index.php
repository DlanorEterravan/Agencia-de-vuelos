<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Aerolinea G2</title>
</head>
<body>
    <div class="content">
        <header>
            <div class="menu">
                <div id="imagen">
                    <img src="img/kerv.png" alt="logo">
                </div>
                <nav id="top_nav">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cursor"></i>Registrar Vuelos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-journal"></i>Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cloud-drizzle"></i>Clima</a>
                        </li>
                    </ul> 
                </nav>
            </div>
        </header>
        <section>
            <!--Instancia de la Clase-->
            <?php require("datos.php"); 
            $datos = new Datos();?>
            
            <!--pagina principal-->
        <form action="registro.php" method="POST">
            <div class="row">
                <div class="col">
                    <!--ingreso de paises-->
                    <h3>Registrar Vuelo</h3>
                    <!--opcion para ingresar el pais de origen o de salida-->
                    <h5>Desde:</h5>
                        <select name="paisesOrigen">
                            <option selected value="0">Seleccione el país </option> 
                            <option value="El Salvador"> El Salvador </option> 
                            <option value="Costa Rica"> Costa Rica </option> 
                            <option value="Mexico"> Mexico </option>
                        </select> 
                        <br>
                        <!--opcion para ingresar el pais de llegada o de destino-->
                        <h5>Hacia:</h5>
                        <select name="paisesDestino">
                            <option selected value="0">Seleccione el país </option> 
                            <option value="Guatemala"> Guatemala </option> 
                            <option value="Costa Rica"> Costa Rica </option> 
                            <option value="Mexico"> Mexico </option>
                        </select>
                </div>
                <!--ingreso de fecha-->
                <div class="col">
                <br><br>
                    <!--opcion para seleccionar la fecha en que se saldrá del pais de origen-->
                    <h5>Fecha de Salida</h5>
                    <input type="date" name="salida" placeholder="Salida" class="fecha">             
                    <br>
                    <!--opcion para seleccionar la fecha en que se regresará al pais de origen-->
                    <h5>Fecha de Regreso</h5>
                    <input type="date" name="llegada" placeholder="Llegada" class="fecha">
                </div>
            </div>
            <br>
            <!--Boton que verfifca que se haya seleccionado los datos y que muestra registros-->
            <div>
               <input type="submit" value="Registrar" name="enviar" class="btn btn-dark">              
            </div>
        </form>
        </section>
    </div>
</body>
</html>
