
<style>			
.container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}
.video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
            
            
            <div style="position:absolute; height:auto; width:100%">
	  		
            <div class="container">
				<iframe src="//www.youtube.com/embed/JCDjsTSWmoo" 
frameborder="0" allowfullscreen class="video"></iframe>
			</div>
            
            <div class="estrellas" style="height:8%; width:100%; position:relative; float:left">
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
                </script>
            </div>
            
            </div>

