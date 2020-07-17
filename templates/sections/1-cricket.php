<div id="cricket" class="border-top">

	<h1 class="pt-5"><img src="assets/img/cricket-icon.png" style="height:40px;"> Cricket</h1>

	<p class="lead">I started playing cricket from the young age of 10. I have played professional cricket in
		the under-16 group in TNCA.</p>

	<div class="card-columns cricket pt-3">
		<?php
		$dir = 'assets/img/cricket/';
		if ( $dh = opendir( $dir ) ) {
			while ( ( $file = readdir( $dh ) ) !== false ) {
				if ( $file != '.' && $file != '..' ) {
					$name = ucwords( str_replace( '.jpg', '', str_replace( '_', ' ', $file ) ) );
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