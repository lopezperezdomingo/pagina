var ww = document.body.clientWidth;

    // cada vez que se mueva el scroll del navegador se ejecutara
    // este evento
    $(document).scroll(function(){
        // si la posicion del scroll es superior a 55 pixels...
        if($(window).scrollTop()>240 && ww > 769){
            // indicamos que el header tiene una posicion fija a -47 pixels

            $(".menu-container").css({"position":"fixed", "top":5, "left":"15%", "z-index":10001});
            $("#menu-fixed-logo").css({"Display":"none","display":"block", "left":"5%", "position":"fixed", "top":5, "z-index":10001, "height":52});
            $("#menu-fixed").css({"position":"fixed","display":"block", "top":0, "height":60, "width":"100%", "z-index":10000, });
            // definimos el margen superior al contenido cuando queda fijado
        }else{
            $(".menu-container").css({"position":"inherit", "top":"inherit"});
            $("#menu-fixed").css({"display":"none"});
            $("#menu-fixed-logo").css({"display":"none"});
        }
    });

    // JavaScript Document
    function mensaje(msj){
         alert(msj)
         }
    function mensaje2(msj){
         alert(msj);
         document.getElementById("inscribirse").reset();
         }
     function mensaje_act(msj){
         alert(msj);
         document.getElementById("commentForm").reset();
         location.reload();
         }
         
function calificar(calificacion,id){
    $.ajax({
            url:'admin/php/rating.php',
            type:'post',
            data:"submit=&calificacion="+calificacion+"&id="+id,
            success:function(datos){
            if(datos != "1"){   
               alert(datos);               
               location.reload();
                }
            }
        });
    return false;
}

function calificar2(calificacion,id){
    $.ajax({
            url:'../../admin/php/rating2.php',
            type:'post',
            data:"submit=&calificacion="+calificacion+"&id="+id,
            success:function(datos){
            if(datos != "1"){   
               alert(datos);               
                }
            }
        });
    return false;
}

function llamaralancla(ancla){
    document.location.href = "#"+ancla;
    }