<?php

include 'vendor/autoload.php';

use Src\Config\Usuario as UsuarioConfig;
use Dompdf\Dompdf;

$us1 = new UsuarioConfig();

$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();