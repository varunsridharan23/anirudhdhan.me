<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <title>Anirudhdhan</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand font-weight-bold" href="#">Anirudhdhan</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#cricket">Cricket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gymnastics">Gymnastics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#visualediting">Visual Editing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pets">Pets</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron bg-white" style="margin: 10% auto 20% auto;">
        <img src="img/profile-pic.jpg" class="mx-auto d-block" height="150" width="150" alt="Anirudhdhan">
        <h1 class="text-center mt-3">Anirudhdhan</h1>
        <p class="lead text-muted text-center">Cricket Player, Visual Editor & Dog Lover</p>
        <p class="text-center">I have played professional cricket in the under-16 group in TNCA.
            <br>I am a photo and video editor and good at drawing.
            <br>I am a bird and animal lover.
        </p>
        <div class="text-center">
            <a class="btn btn-outline-light btn-sm text-secondary d-md-inline-block d-sm-block mx-2" href="#cricket">
                <img src="img/cricket-icon.png" style="height:20px; margin-top:-5px;"> Cricket
            </a>
            <a class="btn btn-outline-light btn-sm text-secondary d-md-inline-block d-sm-block mx-2" href="#gymnastics">
                <img src="img/gymnastics-icon.png" style="height:20px;"> Gymnastics
            </a>
            <a class="btn btn-outline-light btn-sm text-secondary d-md-inline-block d-sm-block mx-2"
               href="#visualediting">
                <img src="img/visual-editing.png" style="height:20px; margin-top:-7px;"> Visual Editing
            </a>
            <a class="btn btn-outline-light btn-sm text-secondary d-md-inline-block d-sm-block mx-2" href="#pets">
                <img src="img/dog.png" style="height:15px;"> Pets
            </a>
        </div>
    </div>
    <div data-spy="scroll" class="text-center" data-offset="0">
        <div id="cricket" class="border-top">
            <h1 class="pt-5"><img src="img/cricket-icon.png" style="height:40px;"> Cricket</h1>
            <p class="lead">I started playing cricket from the young age of 10. I have played professional cricket in
                the under-16 group in TNCA.</p>
            <div class="card-columns cricket pt-3">
				<?php
				$dir = 'img/cricket/';
				if ( $dh = opendir( $dir ) ) {
					while ( ( $file = readdir( $dh ) ) !== false ) {
						if ( $file != '.' && $file != '..' ) {
							$name = ucwords( str_replace( '.jpg', '', str_replace( "_", " ", $file ) ) );
							echo <<<IMG
<div class="card border-danger">
    <a data-fancybox="gallery" href="$dir$file"><img src="$dir$file" class="card-img-top"></a>
    <div class="card-body" style="line-height: normal !important; padding: 5px !important;">
      <small class="card-text">$name</small>
    </div>
</div>
IMG;
						}
					}
					closedir( $dh );
				}
				?>
            </div>
        </div>
        <div id="gymnastics" class="border-top">
            <h2 class="pt-5"><img src="img/gymnastics-icon.png" style="height:37px; margin-top: -7px;"> Gymnastics</h2>
            <p class="lead">I started playing cricket from the young age of 10. I have played professional cricket in
                the under-16 group in TNCA.</p>
            <div class="card-columns gymnastics pt-3">
				<?php
				$dir = 'img/gymnastics/';
				if ( $dh = opendir( $dir ) ) {
					while ( ( $file = readdir( $dh ) ) !== false ) {
						if ( $file != '.' && $file != '..' ) {
							$name = ucwords( str_replace( '.jpg', '', str_replace( "_", " ", $file ) ) );
							echo <<<IMG
<div class="card border-danger">
    <a data-fancybox="gallery" href="$dir$file"><img src="$dir$file" class="card-img-top"></a>
    <div class="card-body" style="line-height: normal !important; padding: 5px !important;">
      <small class="card-text">$name</small>
    </div>
</div>
IMG;
						}
					}
					closedir( $dh );
				}
				?>
            </div>
        </div>
        <div class="jumbotron bg-light rounded" id="visualediting">
            <h2 class="pt-5"><img src="img/visual-editing.png" style="height:37px; margin-top: -8px;"> Gymnastics</h2>
            <p>...</p>
        </div>
        <div class="jumbotron bg-light rounded" id="pets">
            <h2 class="pt-5"><img src="img/dog.png" style="height:37px; margin-top: -7px;"> Pets</h2>
            <p>...</p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>