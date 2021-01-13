<?php  
	$active = "HOME";
	include('php/init.php');
?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Haller | Incio</title>
		<meta name="description" content="APYM">

		<link rel="shortcut icon" type="image/png" href=""/>
		<link rel="stylesheet" href="<?php echo $direction; ?>/assets/resources/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $direction; ?>/css/custom.css">
	</head>
	<body style="margin: 0;" class="body_inicio">	
		<div class="container" style="">
			<div class="d-flex flex-row" style="height: 100%">
				<div class="align-self-center p-2 w-100">

					<div class="row">
						<div class="col-md-4">
							<div class="card" style="width: 18rem; margin: 0 auto;">
								<img src="assets/images/card_instituto.jpg" class="card-img-top" alt="...">
								<div class="card-body card-top">
									<h5 class="card-title">Instituto Rafael Haller</h5>
									<p class="card-text">Maternal, Preescolar, 1st English, Primaria, Secundaria, Preparatoria</p>
									<a href="<?php echo $direction; ?>/instituto" class="btn btn-primary btn-into">Entrar</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card" style="width: 18rem; margin: 0 auto;">
								<img src="assets/images/card_universidad.jpg" class="card-img-top" alt="...">
								<div class="card-body card-top">
									<h5 class="card-title">Centro Universitario Haller</h5>
									<p class="card-text">Derecho, Turismo, Gastronomía, Mercadotecnia, Ciencias de la Educación, Administración de Empresas, Comercio Internacional y Aduanas</p>
									<a href="<?php echo $direction; ?>/universidad" class="btn btn-primary btn-into">Entrar</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card" style="width: 18rem; margin: 0 auto;">
								<img src="assets/images/card_sobrecargo.jpg" class="card-img-top" alt="...">
								<div class="card-body card-top">
									<h5 class="card-title">Sobrecargo de Aviación Haller</h5>
									<p class="card-text">Emprende tu vuelo con nosotros. Curso de sobrecargo de Aviación reconocido por la AFAC F-170</p>
									<a href="<?php echo $direction; ?>/sobrecargo" class="btn btn-primary btn-into">Entrar</a>
								</div>
							</div>
						</div>
					</div>




				</div>
			</div>
		</div>

	
		<style>
			@font-face {
			  font-family: 'luminari';
			  src: url('css/fonts/Luminari-Regular.ttf');
			}

			.barra_inicio{
				max-height: 50%;
			    width: 100%;
			}
			.titulo_inicio{
				position: absolute;
			    top: 10px;
			    width: 100%;
			    height: 40%;
			}
			.body_inicio{				
				margin: 0;
				background-size:cover;
				background-image: url('assets/images/bg-inicio2.jpg');
			    background-repeat: no-repeat;
			    background-attachment: fixed;
			    background-position: center; 
			}
			.div_escudos{
				    height: 350px;
			    width: 50%;
			    /* margin-top: 185px; */
			    /* border: 2px solid; */
			    position: fixed;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}

			.cont_escudos{
				float: left;
    			width: 50%;
    			text-align: center;
			}
			.div_escudos div img{
    			width: 75%;
			}

			.back{
				border: 2px solid;
			    padding: 7% 25px;
			    background: #00245a;
			}
			.p_tit{
			    font-family: Myriad;
		        font-size: 20px;
		        color: #fff;
		        padding: 0 !important;
		        margin: 0 !important;
			}
			.p_tit2{
			    font-family: Myriad;
		        font-size: 30px;
		        color: #fff;
			}
			.p_subtit{
				font-family: Myriad;
			    font-size: 20px;
			    color: #000000;
			}
			.p_text{
				font-family: Myriad;
			    font-size: 25px;
			    color: #a0001c;
			}

			.fa-circle{
				font-size: 14px;
			    color: red;
			    margin: 0px 16px 0 0;
			    display: none;
			}
			.btn-into{
				position: absolute;
			    bottom: 10px;
			    left: calc(50% - 35px)
			}
			

		</style>

		<script src="<?php echo $direction; ?>/assets/resources/jquery-3.3.1.slim.min.js" ></script>
		<script src="<?php echo $direction; ?>/assets/resources/bootstrap.min.js"></script>
		<script src="<?php echo $direction; ?>/assets/resources/popper.min.js" ></script>
		<script src="<?php echo $direction; ?>/assets/resources/jquery.flip.min.js"></script>

		<script>
			$( document ).ready(function() {
				maxHeight = 0;
			    $(".card-top").each(function(){
			    	if($(this).height() > maxHeight)
			    		maxHeight = $(this).height();
			    });
			    $(".card-top").height(maxHeight+30);
			});
		</script>
	</body>

</html>
