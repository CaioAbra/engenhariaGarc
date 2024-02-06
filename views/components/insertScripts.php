<?php
// Obtém o caminho da URL
$url_path = $_SERVER['REQUEST_URI'];
// Divide a URL em partes usando "/"
$path_parts = explode('/', trim($url_path, '/'));
// Dependendo do número de partes no caminho, você define diferentes caminhos
if (count($path_parts) >= 3) {
    $base_path = "../assets/";
} else {
    $base_path = "./assets/";
}
?>
<script src="<?php echo $base_path . 'lib/jquery-3.7.1.min.js'; ?>"></script>
<script src="<?php echo $base_path . 'js/index.js'; ?>"></script>
