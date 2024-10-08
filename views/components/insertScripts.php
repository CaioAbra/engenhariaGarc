<?php
// Verifica se o ambiente é localhost ou servidor de produção
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $base_path = './assets/';
} else {
    $base_path = '../assets/';
}
?>
<script src="<?php echo $base_path . 'lib/jquery-3.7.1.min.js'; ?>"></script>
<script src="<?php echo $base_path . 'lib/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo $base_path . 'lib/bootstrap-4.6.2-dist/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo $base_path . 'lib/popper.min.js'; ?>"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo $base_path . 'js/index.js'; ?>"></script>
