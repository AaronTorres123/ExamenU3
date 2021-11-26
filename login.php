<?php 
	include ("con_db.php");
	if(isset($_POST['Ingresar'])){
		if( strlen($_POST['email'])>=1 && strlen($_POST['password'])>=1){
			$email=trim('email');
			$pass=trim($_POST['password']);
			$consulta1="SELECT email, pass from registro WHERE email=$email";
			$resultado=mysqli_query($conexion, $consulta1);

			if($resultado){
				?>
				<h3 cla ss="ok" href="index.html">Ingresaste correctamente!</h3>
				
				<?php 
			}else{	
				?>
				<h3 class="bad">¡Ha ocurrido un Error!</h3>
				<?php
			}
		}else{
			?>
			<h3 class="bad">¡Por favor completa los campos!</h3>
			<?php 
		}
	}

 ?>