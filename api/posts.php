<?php
// leggo i dati dal file posts.json

$postsJson = file_get_contents(__DIR__ . 'db/posts.json');

// specifico il tipo di contenuto

header('Content-Type: application/json');

echo $postsJson;

?>