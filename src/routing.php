<?php

//var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$pathURL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/home' === $pathURL) {
    require '../src/Views/home.php';
} elseif ('/show' === $pathURL) {
    require '../src/Views/show.php';
} elseif ('/edit' === $pathURL) {
    require '../src/Views/edit.php';
} elseif ('/delete' === $pathURL) {
    require '../src/Views/delete.php';
} else {
    echo "Cette page n'existe pas";
}
