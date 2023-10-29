<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$sSQL = "SELECT * FROM Filiados WHERE 1=1";

$aParams = [];

$sPesquisa =  $_GET['pesquisar_filiado'] ?? "";
if (!empty($sPesquisa)) {
    $sSQL .= " AND filiado_nome LIKE ?";
    $aParams[] = "%{$sPesquisa}%";
}

$sMes = $_GET['pesquisar_filiado_mes'] ?? "";


if (!empty($sMes)) {
    $sSQL .= " AND filiado_data_nascimento LIKE ?";
    $aParams[] = "%{$sMes}%";
}

// Resultados a serem exibidos por página
$resultadosPorPagina = 5;
// Total de resultados no banco de dados
$totalResultados = $db->query($sSQL, $aParams)->count();
// Cálculo do total de páginas
$totalPaginas = ceil($totalResultados / $resultadosPorPagina);

if (!isset($_GET['page']) || $_GET['page'] < 1) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

// Determina o numero inicial de resultados a serem mostrados
$primeiraPagina = ($page - 1) * $resultadosPorPagina;

$sResultadosPorPagina = $_GET['page'] ?? $page ?? "";
if (!empty($sResultadosPorPagina)) {
    $sSQL .= " LIMIT {$primeiraPagina}, {$resultadosPorPagina}";
} 

$filiado_pesquisa = $db->query($sSQL, $aParams)->get();


view("cadastro/index.view.php", [
    'heading' => 'Filiados Cadastrados',
    'filiados' => $filiado_pesquisa,
    'totalPaginas' => $totalPaginas,
    'page' => $page
]);