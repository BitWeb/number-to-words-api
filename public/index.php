<?php
/**
 * Created by IntelliJ IDEA.
 * User: tobre
 * Date: 10/01/2017
 * Time: 14:19
 */

require __DIR__ . '/../vendor/autoload.php';

use NumberToWords\NumberToWords;

$numberToWords = new NumberToWords();

$words = '';
try {
    switch (substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'))) {
        case '/number':
            $numberTransformer = $numberToWords->getNumberTransformer($_GET['locale']);
            $words = $numberTransformer->toWords($_GET['number']);
            break;
        case '/currency':
            $currencyTransformer = $numberToWords->getCurrencyTransformer($_GET['locale']);
            $words = $currencyTransformer->toWords($_GET['number'], $_GET['currency']);
            break;
    }
} catch (\InvalidArgumentException $e) {
    header('HTTP/1.1 400 ' . $e->getMessage());
}
echo $words;