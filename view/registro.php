<!DOCTYPE html>
<html lang="en">
<meta charset = "UTF-8" />
	
<head>
	<title>Registrarse - Master Clinician</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="../css/nivo-lightbox.css" rel="stylesheet" />
	<link href="../css/niv	o-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="../css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="../bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="../color/blue.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Horario de atencion: Lunes a Viernes. De 7:00 a.m. a 1:00 p.m. por la mañana y De 4:00 p.m. a 7:00 p.m. por la tarde.</p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Llámenos 534-6869</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="../img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Inicio</a></li>
				<li><a href="index.php">Iniciar sesión</a></li>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-xl">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					</div>
					<div class="col-xl">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Registrarse</h3>
									</div>
									<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Correo electrónico *</label>
													<input type="email" id="correo_electronico" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Contraseña *</label>
													<input type="password" id="contraseña" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Confirmar contrasena *</label>
													<input type="password" id="confirmar_contraseña" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Nombre *</label>
													<input type="text" id="nombre_completo" class="form-control" placeholder="Nombre completo" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Fecha de nacimiento *</label>
													<input type="text" id="fecha_de_nacimiento" class="form-control" placeholder="AAAA-M-DD Ej. 2000-12-01" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Genero *</label>
													<input type="text" id="genero" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Tipo de sangre *</label>
													<input type="text" id="tipo_de_sangre" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Peso *</label>
													<input type="text" id="peso" class="form-control" placeholder="En kilogramos" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Estatura *</label>
													<input type="text" id="estatura" class="form-control" placeholder="En metros" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Dirección *</label>
													<input type="text" id="direccion" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Telefono *</label>
													<input type="text" id="telefono_de_casa" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Telefono movil *</label>
													<input type="text" id="telefono_movil" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Enfermedades *</label>
													<input type="text" id="enfermedades" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Alergias *</label>
													<input type="text" id="alergias" class="form-control" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Cirugias y/o accidentes *</label>
													<input type="text" id="cirugias_y_accidentes" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="text-center">
										<div id="error">Campos obligatorios *</div>
										</div>
										
										<button type="submit" id="button" class="btn btn-primary btn-skin btn-block btn-lg">Registrate</button>
					
									
							
							</div>				
						
						</div>
						</div>
					</div>
<script>
	$("#button").click(function(){ 
	
		var correo_electronico = document.getElementById('correo_electronico').value;
		var contraseña = document.getElementById('contraseña').value;
		var confirmar_contraseña = document.getElementById('confirmar_contraseña').value;
		var nombre_completo = document.getElementById('nombre_completo').value;
		var fecha_de_nacimiento = document.getElementById('fecha_de_nacimiento').value;
		var genero = document.getElementById('genero').value;
		var tipo_de_sangre = document.getElementById('tipo_de_sangre').value;
		var peso = document.getElementById('peso').value;
		var estatura = document.getElementById('estatura').value;
		var direccion = document.getElementById('direccion').value;
		var telefono_de_casa = document.getElementById('telefono_de_casa').value;
		var telefono_movil = document.getElementById('telefono_movil').value;
		var enfermedades = document.getElementById('enfermedades').value;
		var alergias = document.getElementById('alergias').value;
		var cirugias_y_accidentes = document.getElementById('cirugias_y_accidentes').value;



		if (correo_electronico == "" || contraseña == "" || nombre_completo == "" || fecha_de_nacimiento == "" || genero == "" || tipo_de_sangre == "" || peso == "" || estatura == "" || direccion == "" || telefono_de_casa == "" || telefono_movil == "" || enfermedades == "" || alergias == "" || cirugias_y_accidentes == ""){
                $("#error").text("Favor de llenar los campos");
                $("#error").css("color","red");
			}else if(contraseña != confirmar_contraseña){
				$("#error").text("Las contaseñas no coinciden");
                $("#error").css("color","red");
			}
			else
            {
				$.post("../controller/controller_insert.php",
					{
						correo_electronico: correo_electronico,
						contraseña: contraseña,   
						nombre_completo: nombre_completo,
						fecha_de_nacimiento: fecha_de_nacimiento,
						genero: genero,
						tipo_de_sangre: tipo_de_sangre,
						peso: peso,
						estatura: estatura,
						direccion: direccion,
						telefono_de_casa:telefono_de_casa,
						telefono_movil: telefono_movil,
						enfermedades: enfermedades,
						alergias: alergias,
						cirugias_y_accidentes: cirugias_y_accidentes
					},
					function(data,status){
							

						alert(data);

					});
			}
	
	});


	
							
</script>					
				</div>		
			</div>
		</div>		
    </section>
	
	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Sobre Master Clinician</h5>
						<p>
						Master Clinician es una web app creada por los alumnos Meza Alvarez Juan y Galvan Covarrubias Victor Manuel
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Información</h5>
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Servicios</a></li>
							<li><a href="#">Médicos</a></li>
							<li><a href="#">Instalaciones</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Contacto</h5>
						<p>
						Póngase en contacto con nosotros
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Lunes - Viernes, 10am a 1pm, 4pm a 7pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> Llámenos al 534 6869
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> contacto@masterclinician.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Ubicación</h5>
						<p>Avenida Hidalgo #2111, col. Residencias, San Luis Río Colorado, Sonora</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2020 - TI3-3 UTSLRC. Todos los derechos reservados.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="../js/jquery.min.js"></script>	 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/jquery.appear.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/nivo-lightbox.min.js"></script>
    <script src="../js/custom.js"></script>


</body>
</html>
</html>