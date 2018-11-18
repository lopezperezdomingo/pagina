$(document).ready(function () {//CUANDO EL DOCUMENTO ESTA LISTO
    /*ENVIO DE DATOS ATRAVES DE AJAX*/
    $('.formSecciones').submit(function (evt) {
        evt.preventDefault()//EVITAR CARGAR LA PAGINA CUANDO SE ESTE ENVIANDO LOS DATOS
        var misDatos=new FormData($(this)[0]);
        $.ajax({
            type: 'POST',
            url:'../config/actions.php',
            contentType:false,
            processData: false,
            data:misDatos,
            success: function (data, textStatus, jqXHR) {
                alert('LA SECCION SE HA GUARDADO');
                location.href='../secciones';
            },error: function (jqXHR, textStatus, errorThrown) {
                
            }
        })
    })
});