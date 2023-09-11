<html>

<style>
        div {
            height: 200px;
            width: 400px;

            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -200px;
        }
</style>
<div>


<?php

if(!(isset($_GET['serial']) && isset($_GET['model']))){
    die('Missing Parameters');
}

$serial = $_GET['serial'];
$model = $_GET['model'];

$code = $serial;

require 'vendor/autoload.php';

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode($code, $generator::TYPE_CODE_128, 3, 300);

?>
<br />
<a href="./">Go Back</a>
</div>
</html>