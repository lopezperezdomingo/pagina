var ww = document.body.clientWidth;

    $(document).ready(function(){

        $('.accordion-header').toggleClass('inactive-header');
        
        //Set The Accordion Content Width
        /*var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({'width' : contentwidth });*/
        
        //Open The First Accordion Section When Page Loads
        //$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
        //$('.accordion-header-link').first().toggleClass('active-header-link');
        //$('.accordion-content').first().slideDown().toggleClass('open-content');
        
        // The Accordion Effect
        $('.accordion-header').click(function () {
            if($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
            
            else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });

        $('.popup-link').magnificPopup({
            type: 'ajax',
            //delegate: 'a',
            //showCloseBtn: true,
            closeBtnInside: true,
            fixedContentPos: true,
            alignTop: true,
            callbacks: {
                open: function () {   
                },
                beforeClose: function () {
                    this.content.addClass('light-speed-out');
                },
                close: function () {
                    this.content.removeClass('light-speed-out');
                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1]
            },
            overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });

        $('.popup-img').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });        

    });

    // cada vez que se mueva el scroll del navegador se ejecutara
    // este evento
    $(document).scroll(function(){
        // si la posicion del scroll es superior a 55 pixels...
        if($(window).scrollTop()>240 && ww > 769){
            // indicamos que el header tiene una posicion fija a -47 pixels

            $(".menu-container").css({"position":"fixed", "top":3, "left":"0", "z-index":1001});
            $("#menu-fixed-logo").css({"Display":"none","display":"block", "right":"5%", "position":"fixed", "top":5, "z-index":1001, "height":52});
            $("#menu-fixed").css({"position":"fixed","display":"block", "top":0, "height":60, "width":"100%", "max-width":"100%", "z-index":1000, });

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