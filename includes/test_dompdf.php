<?php
//set_include_path(get_include_path()."dompdf");
//require_once "dompdf_config.inc.php";
//$dompdf = new DOMPDF();

// Include autoloader
require_once 'application/libraries/dompdf/autoload.inc.php';
require_once 'application/libraries/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'application/libraries/dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'application/libraries/dompdf/lib/html5lib/Parser.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$options->set('isHtml5ParserEnabled', TRUE);

// Instantiate and use the dompdf class
$dompdf = new Dompdf($options);//();

// Load HTML content
//$dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>');
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portriat');//landscape, portriat
// ‘letter’, ‘legal’, ‘A4’, etc.

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
///$dompdf->stream();

//Preview the generate PDF in browser 1=download, 0=preview
$filename = 'result';
$dompdf->stream($filename.time(), array("Attachment"=>1));

//Save generated PDF to server
//$output = $dompdf->output();
//file_put_contents("file".time().".pdf", $output);

?>