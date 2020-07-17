</div>
<?php
global $github_sha;
$now = new \DateTime( 'now', new DateTimeZone( 'Asia/Kolkata' ) );
?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>

<!--  Triggered By Github SHA : <?php echo ( isset( $github_sha ) && ! empty( $github_sha ) ) ? $github_sha : ''; ?> -->