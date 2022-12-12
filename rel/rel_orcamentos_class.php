<?php 

//Carregar o composer
require './vendor/autoload.php';

//CARREGAR DOMPDF
use Dompdf\Dompdf;

$id_orcamento = $_GET['id_orcamento'];

//ALIMENTAR OS DADOS NO RELATÓRIO
$html = utf8_encode(file_get_contents("http://localhost/KLIMAT/rel/rel_orcamentos.php?id_orcamento=".$id_orcamento));

//INICIALIZAR A CLASSE DO DOMPDF
$dompdf = new DOMPDF();

//Definir o tamanho do papel e orientação da página
$dompdf->setPaper('A4', 'portrait');

//CARREGAR O CONTEÚDO HTML
$dompdf->loadHtml(utf8_decode($html));

//RENDERIZAR O PDF
$dompdf->render();

//NOMEAR O PDF GERADO
$dompdf->stream(
'orcamento.pdf',
array("Attachment" => false)
);

 