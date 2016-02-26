
      		<div style="position:absolute; height:100%; width:100%; overflow:hidden">
	  		<img id="im1" src="imagenes/galeria/fuze.png" width="100%" style="position:relative; float:left"/>
            <div class="estrellas" style="height:20%; width:100%; position:fixed; bottom:0px; background-color:#FFFFFF">
            	<div style="position:absolute; width:100%; height:100%;">
       	    		<img id="ee1a" class="es2" src="imagenes/estrella2.png" style="position:absolute; left:10%; height:10px; opacity:0; cursor:pointer"/>
                    <img id="ee2a" class="es2" src="imagenes/estrella2.png" style="position:absolute; left:28%; height:10px; opacity:0; cursor:pointer"/> 
                    <img id="ee3a" class="es2" src="imagenes/estrella2.png" style="position:absolute; left:46%; height:10px; opacity:0; cursor:pointer"/> 
                    <img id="ee4a" class="es2" src="imagenes/estrella2.png" style="position:absolute; left:64%; height:10px; opacity:0; cursor:pointer"/> 
                    <img id="ee5a" class="es2" src="imagenes/estrella2.png" style="position:absolute; left:82%; height:10px; cursor:pointer"/>
                    
                    <img id="ee1" class="es2" src="imagenes/estrella.png" style="position:absolute; left:10%; height:10px; cursor:pointer"/>
                    <img id="ee2" class="es2" src="imagenes/estrella.png" style="position:absolute; left:28%; height:10px; cursor:pointer"/> 
                    <img id="ee3" class="es2" src="imagenes/estrella.png" style="position:absolute; left:46%; height:10px; cursor:pointer"/> 
                    <img id="ee4" class="es2" src="imagenes/estrella.png" style="position:absolute; left:64%; height:10px; cursor:pointer"/> 
                    <img id="ee5" class="es2" src="imagenes/estrella.png" style="position:absolute; left:82%; height:10px; cursor:pointer; opacity:0"/>  
                </div>
                
                <script>
                	$('#ee1').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '0')
						$('#ee3').css('opacity', '0')
						$('#ee4').css('opacity', '0')
						$('#ee5').css('opacity', '0')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '1')
						$('#ee3a').css('opacity', '1')
						$('#ee4a').css('opacity', '1')
						$('#ee5a').css('opacity', '1')
					})
					$('#ee1').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '0')
						$('#ee3').css('opacity', '0')
						$('#ee4').css('opacity', '0')
						$('#ee5').css('opacity', '0')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '1')
						$('#ee3a').css('opacity', '1')
						$('#ee4a').css('opacity', '1')
						$('#ee5a').css('opacity', '1')
					})
					$('#ee2').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '1')
						$('#ee3').css('opacity', '0')
						$('#ee4').css('opacity', '0')
						$('#ee5').css('opacity', '0')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '0')
						$('#ee3a').css('opacity', '1')
						$('#ee4a').css('opacity', '1')
						$('#ee5a').css('opacity', '1')
					})
					$('#ee3').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '1')
						$('#ee3').css('opacity', '1')
						$('#ee4').css('opacity', '0')
						$('#ee5').css('opacity', '0')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '0')
						$('#ee3a').css('opacity', '0')
						$('#ee4a').css('opacity', '1')
						$('#ee5a').css('opacity', '1')
					})
					$('#ee4').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '1')
						$('#ee3').css('opacity', '1')
						$('#ee4').css('opacity', '1')
						$('#ee5').css('opacity', '0')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '0')
						$('#ee3a').css('opacity', '0')
						$('#ee4a').css('opacity', '0')
						$('#ee5a').css('opacity', '1')
					})
					$('#ee5').mouseover(function(){
						$('#ee1').css('opacity', '1')
						$('#ee2').css('opacity', '1')
						$('#ee3').css('opacity', '1')
						$('#ee4').css('opacity', '1')
						$('#ee5').css('opacity', '1')
						$('#ee1a').css('opacity', '0')
						$('#ee2a').css('opacity', '0')
						$('#ee3a').css('opacity', '0')
						$('#ee4a').css('opacity', '0')
						$('#ee5a').css('opacity', '0')
					})
					
	  $('#im1').click(function(){
		 $('#votacion').css('z-index', '0')
		 $('#galeria').css('z-index', '0')
		 $('#log').css('z-index', '0')
		 $('#login').css('z-index', '0')
		 $('#ubicacion').css('z-index', '0')
		 $('#retroalimentacion').css('z-index', '1')
		 $('#monedero').css('z-index', '0')
		 $('#canje').css('z-index', '0')
		 $('#mapas').css('z-index', '0')
		 $('#mapas_grande').css('z-index', '0')
		 $('#localizador').css('z-index', '0')
		 $('#codigo').css('z-index', '0')
		  
		 $('#retroalimentacion').show()
		 $('#retroalimentacion').css('margin-left', '100%')
		 $('#retroalimentacion').animate({marginLeft:'0%'}, 500)
		 $('#titulo_seccion').html('Retroalimentacion')
		 at=3
      })
					
                </script>
            </div>

            </div>

