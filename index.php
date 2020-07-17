<?php
require_once __DIR__.'/templates/header.php';
require_once __DIR__.'/templates/menu.php';
?>



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
