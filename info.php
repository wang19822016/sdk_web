<?php 
//error_reporing(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
require __DIR__ . '/application/libraries/PHPExcel-1.8/PHPExcel/IOFactory.php';

//$type = PHPExcel_IOFactory::identity(__DIR__ . '/upload/appsflyerSDK.xlsx');
$reader = PHPExcel_IOFactory::createReaderForFile(__DIR__ . '/upload/appsflyerSDK.xlsx');

echo "error";

?>
