<html>  
    <title>
        Libro de visitas
    </title>
    <head>
        <!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/z.css" media="screen"/>

        <h1 style="color:white; text-align: center "> Libro de visitas </h1>
        <link type="text/css" rel="stylesheet" href="css/z.css" media="screen"/>
    </head>
    <main class="page">
    <body>
        <!-- Añadiendo la libreria de jQuery CND -->
        <script 
            src="https://code.jquery.com/jquery-3.5.1.min.js" 
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
            crossorigin="anonymous">
        </script>
        
        <!-- Se crea archivo para trabajar con jQuery CND -->
        <script src="jcodigo.js"> </script>
        
        <a class="waves-effect waves-light btn-large" id="botonAgrega">Agregar Registro</a>   
        <a class="waves-effect waves-light btn-large" id="botonConsulta">Consultar Visitantes</a> 
        <a class="waves-effect waves-light btn-large" id="botonPag">Consultar Página Web</a> 
        <br> <br> <br> 
        <div id="formAgrega" class="container">
        <form action="validacion.php" method="post">
            <div class="row">
                <!-- Hacemos el input para la fecha --> 
                <div class="col s3">
                    <label for="Fecha" style="color:white;font-size:14pt; font-family:Verdana;">Fecha:</label>   <!-- etiqueta de fecha -->
                    <input type="date" id="Fecha" name="Fecha" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;text-align:center;" 
                        value = "<?php getDate(); ?>" 
                        min="2020-01-01" max="2095-12-31"
                    required> 
                </div>
            <br> <br> <br> <br> <br> 
                <!-- Hacemos el input para la hora -->
                <div class="col s2">
                    <label for="Hora" style="color:white;font-size:14pt; font-family:Verdana;">Hora:</label>   <!-- etiqueta de hora -->
                    <input type="time" name="Hora" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;text-align:center;" >      
                </div>
            <br> <br> <br> <br><br>
                <!-- Hacemos el select para el sexo -->
                <div class="col s4">
                    <label for="Sexo"style="color:white;font-size:14pt; font-family:Verdana;">Sexo:</label>
                    <select class="browser-default" name="Sexo" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;text-align:center;" >
                        <option value="selecion">Selecione un sexo</option>
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                </div>
            <br><br> <br> <br><br>
                <!-- Hacemos el input para el nombre -->
                <label for="Nombre" style="color:white;font-size:14pt; font-family:Verdana;">Nombre:</label>   <!-- etiqueta de nombre -->
                <input type="text" name="Nombre" minlength="5" size="50" required style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana; text-transform: capitalize;">  
            <br><br>
                <!-- Hacemos el input para la instituciòn -->
                <label for="Nombre" style="color:white;font-size:14pt; font-family:Verdana;">Instituci&oacuten de donde nos visita:</label>   <!-- etiqueta de instituciòn -->
                <input type="text" name="Institucion" minlength="5" size="80" required style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana; text-transform: capitalize;" > 
            <br><br>
                <!-- Hacemos el 1er input para el correo -->
                <label for="correo"style="color:white;font-size:14pt; font-family:Verdana;">Correo Electronico:</label>   <!-- etiqueta de 1er correo -->
                <input type="email" name="Correo1" required style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;" > 
                <!-- Hacemos el 2do input para el correo -->
                <label for="correo" style="color:white;font-size:14pt; font-family:Verdana;">Confirmar Correo Electronico:</label>   <!-- etiqueta de 2do correo -->
                <input type="email" name="Correo2" required style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;" >  
            <br><br>
                <!-- Hacemos el Select para area de visita -->
                <div class="col s4">
                    <label for="Asunto" style="color:white;font-size:14pt; font-family:Verdana;">&Aacute;rea que visita:</label>   <!-- etiqueta de area de visita -->
                    <select class= "browser-default" name="Depto" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;" >
                        <option value="seleccion">Selecione un departamento</option>
                        <option value="Laboratorio">Laboratorio</option>
                        <option value="Almacen">Almac&eacuten</option>
                        <option value="Direccion">Direcci&oacuten</option>
                        <option value="Sistemas">Sistemas</option>
                        <option value="CyC">Cr&eacutedito y Cobranza</option>
                        <option value="RH">Recursos Humanos</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            <br><br><br> <br> <br><br>
                <!-- Hacemos el TextArea para asunto -->
                <label for="Asunto" style="color:white;font-size:14pt; font-family:Verdana;">Asunto de su visita:</label>   <!-- etiqueta de asunto -->
                <br>
                <textarea id="Asunto" class="materialize-textarea" name="Asunto" rows="5" cols="80" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;" >
                    Mencione el asunto por el que nos visita
                </textarea>
            <br><br><br>
                <!-- Hacemos el input para No. de acompañantes -->
                <label for="Acompa" style="color:white;font-size:14pt; font-family:Verdana;">No. de acompa&ntilde;antes:</label>   <!-- etiqueta de acompañantes -->
                <br><div class="col s2">
                    <input type="number" id="Acomp" name="Acomp" style="background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;" >
                </div>
            <br><br><br><br><br><br>
            <label style="color:white;font-size:14pt; font-family:Verdana;">==></label>   <!-- etiqueta de enviar formulario -->
            <input type="submit" value="Registrar Visita" style="width:200px; height:30px; background-color:#9EDFF6;color:black;font-size:12pt; font-family:Verdana;text-align:center">            
            <label style="color:white;font-size:14pt; font-family:Verdana;"><==</label>   <!-- etiqueta de enviar formulario -->
            </div>
        </form>
        </div>

    </body>
    </main>
</html>
