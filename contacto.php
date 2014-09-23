<?php
	include 'header.php';
?>
	<section id="contacto0">
		<div id="contacto">
			<h1>Contáctenos</h1>
			<form name="contact1" id="contact1" method="post" action="php/mailSend.php">
				<label for="">Nombre: *</label> <br />
				<input name="nombre" id="nombre" type="text" required/><br /><br />
				<label for="">Dirección de correo electrónico: *</label> <br />
				<input name="correo" id="correo" type="email" placeholder="usuario@dominio.com" required/><br /><br />
				<label for="">Número de teléfono: *</label> <br />
				<input name="phone" id="phone" type="phone" required/><br /><br />
				<label for="">Asunto:</label>  <br />
				<input name="asunto" id="asunto" type="text" /><br /><br />
				<label for="">Mensaje:</label>  <br />
				<textarea name="mensaje" id="mensaje" ></textarea><br /> <br />
				<input type="submit" id="sub_contacto" name="sub_contacto" value="Enviar" ><br />
				<!--onclick="if( $('#nombre').val() != '' && $('#correo').val()!= '' && $('#asunto').val() !='' && $('#mensaje').val()!= ''){alert('Se enviara una copia a su correo.\n ¡Gracias por contactarnos!');}"-->	
			</form>
		
		</div>		
		<div id="contacto1">
			<h2>Dirección General</h2>
			<aside><a  class="icon-mail" href=""></a><label for="">direccion@fractalht.com.mx</label></aside>
			<aside><a  class="icon-phone" href=""></a><label for="">(55) 56560000</label></aside>
			<h2>Manager</h2>
			<aside><a  class="icon-mail" href=""></a><label for="">manager@fractalht.com.mx</label></aside>
			<aside><a  class="icon-phone" href=""></a><label for="">(55) 56560000</label> </aside>	
		</div>
	</section>
<?php
	include 'footer.php';	
?>	