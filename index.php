<?php

require __DIR__ . '/vendor/autoload.php';

$slugifier = new \Slug\Slugifier();

$titulo = 'Produto incrível com várias cores disponíveis';

$slug = $slugifier->slugify($titulo);

echo "<p>Título original".$titulo."<p>";

echo "<p>URL do produto (slug): ".$slug."<p>";