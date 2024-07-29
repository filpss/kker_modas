<?php

/**
 * Aqui eu defini uma constante chamada BASE_PATH que guarda o caminho raiz do projeto como uma string.
 * Ou seja, BASE_PATH = C:\workspaces\projetos\kker_modas (No meu caso).
 * Com isso em mãos, consigo usa-la para incrementar conteúdos de outros arquivos.
 * ex: include BASE_URL . '/src/views/header.php'
 */

define('BASE_PATH', realpath(dirname(__FILE__) . '../..'));