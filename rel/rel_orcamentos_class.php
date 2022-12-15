<?php
require_once '../dompdf/autoload.php';
// referenciando o namespace do dompdf

use Dompdf\Dompdf;
use Dompdf\Options;

$id_orcamento = $_GET['id_orcamento'];

//ALIMENTAR OS DADOS NO RELATÓRIO
//lendo o arquivo HTML correspondente
$html = utf8_encode(file_get_contents("http://localhost/KLIMAT/rel/rel_orcamentos.php?id_orcamento=".$id_orcamento));
// instanciando o dompdf
$dompdf = new Dompdf((array('enable_remote' => true)));


//inserindo o HTML que queremos converter
$dompdf->loadHtml(utf8_decode($html));

// Definindo o papel e a orientação

$dompdf->setPaper('A4','portrait');

// Renderizando o HTML como PDF

$dompdf->render();
// Enviando o PDF para o browser
$dompdf->stream('relatorioOrcamento.pdf',
array("Attachment" => false));
?>