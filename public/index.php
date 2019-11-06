<?php

use Twig\Environment;

require '../vendor/autoload.php';



$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');

$twig = new Environment($loader);


$products = ['tartiflette', 'fondue', 'raclette', 'fondue au chocolat', 'mont d\'or'];


echo $twig->render('index.html.twig', [
  'array' => $products
    ]);
