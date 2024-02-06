<?php
// ProjetosController.php

class ProjetosController {
    public function index() {
        // Aqui você pode adicionar a lógica do controlador
        // por exemplo, buscar dados do banco de dados e passá-los para a visualização
        
        // Inclua a visualização correspondente
        require_once 'views/projetos.php';
    }
}
