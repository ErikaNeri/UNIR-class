$(document).ready(function(){
    //Esconder el formulario al abrir la pagina
    $('#formAgrega').hide();

    //Desplegar el formulario si dan clic en el primer boton
    $("#botonAgrega").click(function(){
        $("#formAgrega").slideDown();
        //$('#formAgrega').show();
      });

    //Si dan clic en el segundo boton los llevara a hacer una vista de la consulta a la BD
    $('#botonConsulta').click(function(){
        document.location.href = 'validacion.php'
    });
    
    //Si dan clic en el 3er boton los redirige a la página web de la empresa
    $('#botonPag').click(function(){
        url = "https://www.caltechnix.com.mx";
        $(location).attr('href',url);
    });
});

       