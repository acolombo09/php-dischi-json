<?php
// leggo i dati dal file posts.json

$posts = file_get_contents(__DIR__ . '/../db/posts.json');

// specifico il tipo di contenuto

// header('Content-Type: application/json');
// header("Access-Control-Allow-Origin: http://127.0.0.1:5500/");
// header("Access-Control-Allow-Headers: X-Requested-With");

echo $posts;

?>