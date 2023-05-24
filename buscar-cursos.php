<?php

require 'vendor/autoload.php';

use Alura\BuscadorCursos\SearchCourses;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$searchCourses = new SearchCourses($client, $crawler);

$courses = $searchCourses->search("/cursos-online-programacao/php");

foreach ($courses as $course) {
  echo $course . PHP_EOL;
}