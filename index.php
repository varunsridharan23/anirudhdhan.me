<?php
require_once __DIR__ . '/templates/header.php';
require_once __DIR__ . '/templates/menu.php';
require_once __DIR__ . '/templates/about-me.php';
?>

	<div data-spy="scroll" class="text-center" data-offset="0">
		<?php
		$paths = glob( __DIR__ . '/templates/sections/*.php' );
		foreach ( $paths as $path ) {
			require_once $path;
		}
		?>
	</div>
<?php

require_once __DIR__ . '/templates/footer.php';
