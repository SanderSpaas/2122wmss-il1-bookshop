<?php

require_once('../vendor/autoload.php');
require_once('../config/database.php');
require_once('../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection
$connection = \Services\DatabaseConnector::getConnection();

// @TODO Bootstrap Twig 
$loader = new \Twig\Loader\FileSystemLoader(__DIR__ . '/../resources/templates');
$twig = new Twig\Environment($loader, [
    'cache' => __DIR__ . '/../storage/cache',
    'auto_reload' => true
]);
$id = isset($_GET['topic']) ? (int) $_GET['topic'] : ''; // The id of the task passed by the URL

if($id > 5){
    $id = '';
}
//alle boeken uit de database gaan halen
if ($id) {
    $bookfetch = $connection->prepare('SELECT * FROM books right JOIN users ON books.user_id = users.user_id right JOIN topics ON books.topic_id = topics.topic_id where topics.topic_id=:id ORDER BY title ASC;');
    $bookfetch->bindValue("id", $id);
    $bookfetch = $bookfetch->executeQuery();
    $books = $bookfetch->fetchAllAssociative();
} else {
    $bookfetch = $connection->prepare('SELECT * FROM books right JOIN users ON books.user_id = users.user_id right JOIN topics ON books.topic_id = topics.topic_id ORDER BY title ASC;');
    $bookfetch = $bookfetch->executeQuery();
    $books = $bookfetch->fetchAllAssociative();
}


print_r($books);

$variables = [
    'books' => $books,
];

// render template
$template = $twig->load('index.twig');
echo $template->render($variables);
