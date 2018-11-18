<link rel="stylesheet" href="css/style.css">
<?php include "include/header.php"; ?>
<div class="divider"><span></span></div>
  <div class="divider"><span></span></div>
        <body>
            <div id="webpage"> 
            <section>
                <div class="container">
                    <h2>Artículo 74</h2>
                    <h3>Fracción XX.-Trámites</h3>
                    <br><br><hr style="margin-top: -25px; border-style: double; border-color: #800080;">
                    <div id="dvVista">
                        <h4><span data-tooltip="Trimestral, información del año en curso">Trámites</span></h4><h5><i class="fas fa-arrow-alt-circle-right"></i> Año: 2018</h5>
                            <table class="tab-lista" align="center" width="80%">
                                                                <thead>
                                        <tr>
                                            <th>DEPENDENCIA / ENTIDAD</th>
                                            <th>Trimestre 1</th><th>Trimestre 2</th><th>Trimestre 3</th><th>Trimestre 4</th>                                        </tr>
                                    </thead>
                                                                <tbody>
                                                                            <tr>
                                            <td>Oficina de presidencia</td>
                                            <td><a target="_blank" href="documentos/20/1trimestre.xlsx"><img src="images/excel.png" style="width: 30px;"></a></td><td><a target="_blank" href="documentos/20/2trimestre.xlsx"><img src="images/excel.png" style="width: 30px;"></a></td><td><a target="_blank" href="documentos/20/3trimestre.xlsx"><img src="images/excel.png" style="width: 30px;"></a></td><td></td>                                        </tr>
                                                                        </tbody>
                                </table>

                                                <div style="width: 100%; height: 35px;"></div>
                        <p style="font-weight: bold; font-size: 10pt;">Fuente de la Información: Oficina de presidencia</p>
                        <!-- <p style="font-weight: bold; font-size: 10pt;">Fuente de la Información: Coordinación General de la Unidad de Transparencia.</p>-->
                    </div>

                </div>
                <br>

            </section>
            <!-- FOOTER -->
<?php include "include/footer.php"; ?>

    <!--Start js-->    
    <script src="js/jquery.min.js"></script> <!--Jquery-->
    <script src="js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="js/scroolto.js"></script> <!--Scrool To-->
    <script src="js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/jquery.inview.min.js"></script> <!--inview-->
    <script src="js/menu/hoverIntent.js"></script> <!--superfish-->
    <script src="js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/menu/tinynav.min.js"></script> <!--tinynav-->
    <script src="js/jquery.parallax-1.1.3.js"></script> <!--parallax-->
    <script src="js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="js/settings.js"></script> <!--settings-->
    <!--End js-->
    
    <script type='text/javascript'>
        /* <![CDATA[ */
        

        //start parallax
        jQuery(document).ready(function() {
            $('.header-page').parallax("100%", 0.1);
        });
        //end parallax
        
        
        //start accordion
        $(document).ready(function() {
            $( ".accordion" ).accordion();
        });
        //end accordion
        
        
        //start tooltip
        $(document).ready(function() {
            $( ".tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
        });
        //end tooltip
        

        /* ]]> */
    </script>
        </body>
</html>