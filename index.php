<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#cuadro_camara {
		background-color: #444;
		padding-left: 30px;
		padding-top:20px;
	}
	#titulo_camara {
	background-color: #666;
	color:#FFF;
	padding-left: 30px;
	font-size: 14px;
	text-align:center;
	}
	.botones_cam {
		background-color:#FFF;
		color:#333;
		font-family: "Comic Sans MS", cursive;
		font-size:14px;
		margin-top:10px;
		width:100px;
		height:40px;
	}
	.formulario {
		color: #FFF;
	}
	
	</style>
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="webcam.js"></script>
    <script language="JavaScript">
		webcam.set_api_url( 'test.php' );//PHP adonde va a recibir la imagen y la va a guardar en el servidor
		webcam.set_quality( 90 ); // calidad de la imagen
		webcam.set_shutter_sound( true ); // Sonido de flash
	</script>
		<script language="JavaScript">
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function do_upload() {
			// subir al servidor
			document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor...</h1>';
			webcam.upload();
		}
		
		function do_upload_1() {
			// subir al servidor
			document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor 1...</h1>';
			webcam.upload_1();
		}
		function do_upload_2() {
			// subir al servidor
			document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor 2...</h1>';
			webcam.upload_2();
		}
		function do_upload_3() {
			// subir al servidor
			document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor  3...</h1>';
			webcam.upload_3();
		}




		function my_completion_handler(msg) {
			
			if (msg.match(/(http\:\/\/\S+)/)) {
				var image_url = RegExp.$1;//respuesta de text.php que contiene la direccion url de la imagen
				
				// Muestra la imagen en la pantalla
				document.getElementById('upload_results').innerHTML = 
					'<img src="' + image_url + '">'+
					'<form action="gestion_foto.php" method="post">'+
					'<input type="hidden" name="id_foto" id="id_foto" value="' + image_url + '"  /><br>'+
					'<label>Nombre </label><input type="text" name="nombre_foto" id="nombre_foto"/>'+
					'<label>Descripcion </label><input type="text" name="des" id="des"/>'+
				    '<input type="submit" name="button" id="button" value="Enviar" /></form>'
					;
				// reset camera for another shot
				webcam.reset();
			}
			else alert("PHP Error: " + msg);
		}
	</script>
<div align="left" id="cuadro_camara">    

<table width="100%" height="144"><tr>
<td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
	</form>
	
	</td>
    <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html(320, 240) );//dimensiones de la camara
	</script>
    </td>  
     <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html_1(320, 240) );//dimensiones de la camara
	</script>
    </td>
    <td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure_1()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze_1()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload_1()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
	</form>
	
	</td>

	<tr>
		<td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure_2()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze_2()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload_2()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
	</form>
	
	</td>
    <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html_2(320, 240) );//dimensiones de la camara
	</script>
    </td>  
     <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html_3(320, 240) );//dimensiones de la camara
	</script>
    </td>
    <td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure_3()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze_3()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload_3()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
	</form>
	
	</td>
	</tr>
    <td width=411>
	    <div id="upload_results" class="formulario" > </div>
  </td></tr></table><br /><br />
</div>



<br />
<br />
<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();//Galeria jquery
    });
    </script>
    <style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #444;
		width: 100%;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 5px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 5px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
    
    <div id="gallery">
    <ul>
  <?php  
  
  include("clase_conexion.php");
  $consulta="select * from fotos order by id_foto desc";
  $busca_fotos=mysql_query($consulta,$c);
  while($ro=mysql_fetch_array($busca_fotos)){
   $url=$ro['id_foto'];  
   $nombre=$ro['nombre']; 
     $des=$ro['des'];
     echo "<li>
	 
            <a href=\"fotos/".$url.".jpg\" title=\"$nombre - $des\">

                <img src=\"fotos/".$url.".jpg\" width=\"150\" height=\"120\" alt=\"\" />

            </a>
        </li>";
  }
?>    
    </ul>
</div>