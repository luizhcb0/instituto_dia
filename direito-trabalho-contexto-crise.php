<?php
$var="Almir Pazzianotto : Palestra Direito do Trabalho em um Contexto de Crise";
?>

<!DOCTYPE html>
<html>


<head>
	<title>Instituto DIA</title>
	<!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->
	<link rel="icon" href="img/logo.ico">
<meta charset="UTF-8">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


</head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=157582347643146";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<section class="header">
	<div id="azul"></div>
	<div id="branco"></div>
	<div id="logo">
		<a href="index"><img src="img/logo_menor.png"></a>
	</div>
</section>

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="158" role="navigation">
      <div class="container-fluid">
      		<div id="linkedin_icon">
				<a target="_blank" href="http://www.linkedin.com/company/10913462?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10913462%2Cidx%3A2-1-2%2CtarId%3A1478792619694%2Ctas%3Ainstituto%20duc"><img src="img/linkedin_icon.png"></a>
			</div>
			<div id="twitter_icon">
				<a target="_blank" href="http://twitter.com/DiaContato"><img src="img/twitter_icon.png"></a>
			</div>
			<div id="fb_icon">
				<a target="_blank" href="http://www.facebook.com/institutodia/"><img src="img/fb_icon_fb.png"></a>
			</div>
			<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index">Home</a></li>
						<li class="dropdown">
          		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional<span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="quem_somos">Quem somos</a></li>
            		<li><a href="equipe">Equipe</a></li>
          		</ul>
        		</li>
						<li class="active"><a href="cursos">Cursos e Palestras</a></li>
            <li><a href="noticias">Notícias</a></li>
						<li><a href="videos">Vídeos</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>



	<section class="container-fluid" id="content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="panel_boots panel-default box">
  				<div class="panel-heading curso_titulo">
    				<h3 class="panel-title"><b><?php echo $var ?></b></h3>
  				</div>
  				<div class="panel-body curso_body">


						<div class="row">
							<div class="col-sm-8 curso_text">
								<p><b>Almir Pazzianotto</b><br></p>
								<p>Ministro do Tribunal Superior do Trabalho, onde permaneceu até março de 2002, quando se aposentou.
									No Tribunal Superior do Trabalho ocupou os cargos de Corregedor-Geral, Vice-Presidente e Presidente.</p>
									<p>Elegeu-se deputado estadual, pelo MDB, em 1974 e se reelegeu em 1978 e 1982. Em 1983, escolhido pelo
										Governador Franco Montoro, assumiu a direção da Secretaria de Estado das Relações de Trabalho. No início de
										1985, chefiou o Ministério do Trabalho.</p>
									<p>Atualmente, retomou as atividades de advocacia e consultoria.</p>
									<p>É autor de livros, dezenas de artigos publicados em revistas especializadas e jornais de grande circulação, pareceres e arrazoados jurídicos.</p><br>
							</div>

							<div class="col-sm-4 curso_img">
								<img src="img/almir-pazzianotto.jpg">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 curso_label_container">
								<div class="curso_label">

								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 curso_text">
								<p><b>CARGA HORÁRIA:</b><br>
								1:30 hora</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12" style="color:#05589c;">
								<br> <h4>Nossas palestras In-Company são formatadas de acordo com a demanda de clientes.<br>Preencha o Formulário para mais informações.</h4>
							</div>
						</div>

						<div class="row">
								<form class="" action="form_palestra.php" method="post">
									<input type="hidden" name="var" value="<?php echo $var; ?>"/>
									<div class="col-sm-12 inscricao">
										<button type="submit" class="btn btn-primary">Formulário</button>
									</div>
								</form>
						</div>
  				</div>
				</div>
			</div>
		</div>
	</section>


	<?php 
	readfile("footer.php");
	?>

</body>
</html>
