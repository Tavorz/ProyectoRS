<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Bienvenido al Super Sistema de Bitacoras</title>
			<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
			<link href="" rel="stylesheet" type="text/css" media="all" />
			<link href="<?php echo base_url('css/fonts.css') ?>" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilo.css'); ?>">			
		</head>
		<body>
			<div id="page" class="container">
				<div id="header">
					<div id="logo">
						<a href="index.html"> <img src="<?php echo base_url('images/itm.png'); ?>" alt="" /></a>
						<h1>Sistema de Control de Bitacoras</h1>
					</div>
					<div id="menu">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="http://www.itmorelia.edu.mx" target="_blank">ITM Oficial</a></li>
							<li><a href="proximas_juntas.html">Próximas Juntas</a></li>
							<li class="current_page_item"><a href="#title">Iniciar Sesión</a></li>
						</ul>
					</div>
				</div>
				<div id="main">
					<div id="banner">
						<img src="<?php echo base_url('images/itm2.png'); ?>" alt="" class="image-full" />
					</div>
					<div id="featured">
						<div class="title">
							<h2>Iniciar Sesión</h2>
						</div>
			            <div id="container">

							<?php echo validation_errors(); ?>
							<?php echo form_open('verifylogin'); ?>
							  <table width="100%" border="0">
							    <tr>
							      <td><div align="right">Usuario</div></td>
							      <td><label for="correo"></label>
						            <div align="left">
						              <input type="textfield" size="20" id="correo" name="correo"/>
				                  </div></td>
						        </tr>
							    <tr>
							      <td><div align="right">Contraseña</div></td>
							      <td><label for="password"></label>
						            <div align="left">
						              <input type="password" size="20" id="passowrd" name="password"/>
				                  </div></td>
						        </tr>
							    <tr>
							      <td colspan="2"><input type="submit" name="button" id="button" value="          Iniciar Sesión          " /></td>
						        </tr>
						      </table>
							</form>
			            </div>
					</div>
					<div id="copyright">
						<span>&copy; Derechos Reservados Instituto Tecnológico de Morelia</span>
					</div>
				</div>
			</div>
		</body>
	</html>

