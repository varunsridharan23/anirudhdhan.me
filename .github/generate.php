<?php
ob_start();
require_once __DIR__ . '/../index.php';
$html = ob_get_clean();

file_put_contents( __DIR__ . '../output_html/index.html', $html );