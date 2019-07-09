<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Advisor a Banking Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Advisor a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->
	
<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" />   
    
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</head>

<!-- Body -->
<body>

<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a href="#"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>EDENRED</a>
							</h1>
						</div>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
                                @if (Route::has('login'))
                                @auth
                                    <li><a class="active" href="{{ url('/home') }}">Inicio</a></li>

                                    @else
                                    <li><a href="{{ route('login') }}" class="scroll">Iniciar sesion</a></li>
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="scroll">Registrarse</a></li>	
                                    @endif
                                    @endauth
                                @endif
                                </ul>
						
					<div class="clearfix"> </div>						
							</div>	
						</nav>
						
				</div>		
					</div>
					
			</div>
			<div class="w3l-banner-grids">
					<div class="container">
						<div class="col-md-8 slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider4">
									<li>
										<div class="w3ls-text">
											<h3>Prestaciones Alimentarias</h3>
											<p>Soluciones inteligentes pra satisfacer necesidades alimentarias y calidad de vida.
                                            Con la tarjeta ALimentación de Edenred tu personal podrá adquirir alimentos crudos o preparados en m´s de 35.000 comercios afiliados</p>
												<div class="readmore-w3">
													<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Ver más</a>
												</div>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Reconocimientos e Incentivos</h3>
											<p> Motive y promueve la productividad de tu empresa.
                                            Con la tarjeta Regalo de Edenred encontrarás una efectiva solución de motivación y fidelización para tus colboradores, clientes, proveedores y canal de distribución.</p>
												<div class="readmore-w3">
													<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Ver más</a>
												</div>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Gastos corporativos</h3>
											<p>Solución para gastos corporativos de sus colaboradores.
                                            Con las tarjetas Ticket COmbustible y Ticket Car garantizamos que el crédito cargado sea utilizado par el fin destinado, facilitando el proceso de control de gastos de tu empresa.</p>
												<div class="readmore-w3">
                                                    <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Ver más</a>
												</div>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Ideal para Fiestas Navideñas</h3>
											<p> La solución perfect para la entrega de aguinaldos en Navidad.
                                            Potente herramienta que reducirá los costos operativos, logísticos, hora/hombre, etc.
                                            Brinda a tus colaboradores comodidad y libertad de elección de productos o servicios sin restricciones en todos los comercios afiliados</p>
												<div class="readmore-w3">
													<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Ver más</a>
												</div>
										</div>
									</li>
								</ul>
							</div>
							<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
						</div>
					
						<div class="clearfix"></div>
					</div>

		</div>
	</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bannerbottom" id="about">
	<div class="container">
		<div class="serviceicons">
			<div class="col-md-3">
				<div class="service1">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
					<h3>heading</h3>
					<p>paragraph</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service1">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
					<h3>heading</h3>
					<p>paragraph</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service1">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
					<h3>heading</h3>
					<p>paragraph</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service1">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
					<h3>heading</h3>
					<p>paragraph</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="servicetext">
			<h3>Nos especializamos en diferentes ofertas de servicios</h3>
            <p>Los servicios que ofrece EDENRED están diseñados para facilitar todas tus operaciones bancarias. Así, realizarás de manera rápida y segura todos tus pagos, transferencias, giros, etc., a través de nuestros canales de atención que ponemos a tu disposición</p>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Conoce más</a>
			</div>
		</div>
	</div>
</div>
<!-- banner-bottom -->
						<!-- modal popup -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> EDENRED</h4>
										<img src="images/banner1.jpg" alt=" " class="img-responsive">
										<h5>Lorem Ipsum</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
						<!-- modal popup -->
<!-- choice -->
<div class="choice">
	<div class="col-md-6 choice-left">
	<h3>Servicios de EDENRED: Giros y Transacciones</h3>
	<p><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Emite órdenes de pago garantizadas por EDENRED</p>
	<p><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> Evita los riesgos de portar efectivo</p>
	<p><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Envía o rec ibe dinero de manera muy sencilla</p>
	<p><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Haz operaciones más faciles gracias a nuestra amplia cobertura internacional</p>
	</div>
	<div class="col-md-6 choice-right">
		<img src="images/money.jpg" alt="" />
	</div>
	<div class="clearfix"></div>
</div>
<!-- //choice -->

<!-- Team -->
<div class="team" id="team">
		<div class="container">
			<div class="title-agileits">
		<h3 class="heading-agileinfo">Equipo de Trabajo</h3>
			   </div>
			<div class="agileits_w3layouts">
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Juan Perez Perez</h5>
					<p>Gerente General</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="images/team1.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Jesus ElSinTim Palacios</h5>
					<p>Finanzas</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="images/team2.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Sebastian Sotil Soto</h5>
					<p>CEO y fundador</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="images/team3.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Victoria</h5>
				    <p>Foreign manager</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="images/team4.jpg" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>	
<!-- //Team -->	

<!--testimonials-->
<div id="testimonials" class="testimonials">
	<div class="container">
		<h3 class="heading-agileinfo">Millones de Clientes Satisfechos</h3>
		<div class="flex-slider">
			<ul id="flexiselDemo1">			
				<li>
					<div class="laptop">
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/test1.jpg" alt=" " />
						</div>
						<div class="col-md-8 team-right">
                            <p>Funciona a la perfección, ningún inconveniente hasta el momento, si me gustaría que mejoren un poco el diseño.</p>
							<div class="name-w3ls">
								<h5>Anita</h5>
								<span>--lorem ipsum</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="laptop">
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/test2.jpg" alt=" " />
						</div>
						<div class="col-md-8 team-right">
                            <p>Excelente programa, siempre lo uso, el diseño es facil de entender y hasta ahora no he tenido inconvenientes.</p>
							<div class="name-w3ls">
								<h5>Pepe</h5>
								<span>--lorem ipsum</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
			</ul>
			
		</div>

	</div>
</div>
<!--//testimonials-->

<!--count-->
<div class="count-agileits" id="stats">
	<div class="container">
		<h3 class="heading-agileinfo">Stadisticas de la Empresa</h3>
					<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='380' data-delay='.5' data-increment="1">50</div>
									<span></span>
									<h5>Empleados</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1372' data-delay='.5' data-increment="1">1245</div>
									<span></span>
									<h5>Clientes</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='156' data-delay='.5' data-increment="1">85</div>
									<span></span>
									<h5>Problemas Resueltos</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
	</div>
</div>

<!--count-->


<!--footer-->
<div class="contact-agile" id="contact">
			<div class="container">
				<h3 class="heading-agileinfo">Ponte en contacto <span>con nosotros</span></h3>
				<div class="col-md-5 contact-middle">
					<form action="#" method="post">
					<div class="form-agileinfo">
						<input type="text" name="your name" placeholder="Tu nombre" required="" />
						<input type="email" name="your email" placeholder="Tu correo" required="" />
					</div>
					<div class="form-agileits-w3layouts">
						<textarea  name="your message" placeholder="Escribe tu mensaje" required="" ></textarea>
							<input type="submit"   value="Enviar mensaje">
					</div>
					<div class="clearfix"></div>
					</form>
				</div>
				<div class="col-md-3 contact-left">
					<h4>Nuestra Dirección</h4>
                    <p>Av Victor Larco Herrera Mz B Lt 28 Dpt 502 Ur San Andres Et.V,</p>
                    <p>Trujillo La Libertad, Perú</p>
					<div class="number">
						<h4>Teléfono</h4>
                        <p>+51 (044) 285495</p>
					</div>
					<h4>Correo</h4>
					<p><a href="mailto:info@example.com">edenred@hotmail.com</a></p>
				</div>
				<div class="col-md-4 contactimg">
					<img src="images/suit1.png" alt="" />
				</div>
					<div class="clearfix"></div>
			</div>
		</div>
	
<!--/footer -->

<script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->

 <!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->
			
			
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
<!-- //Body -->
</html>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
