<?php

require 'Controllers/ArticleController.php';

//var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$pathURL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$articleController = new articleController();


if ('/home' === $pathURL) {
    $articleController->home();
} elseif ('/show' === $pathURL) {
    $articleController->show();
} elseif ('/edit' === $pathURL) {
    $articleController->edit();
} elseif ('/delete' === $pathURL) {
    $articleController->delete();
} else {
    echo "<h1>Cette page n'existe pas</h1>";
}
