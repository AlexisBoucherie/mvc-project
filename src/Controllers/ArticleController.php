<?php

class ArticleController
{
    /**
     * @return void
     */
    public function home():void
    {
        require '../src/Views/home.php';
    }

    /**
     * @return void
     */
    public function show():void
    {
        require '../src/Views/show.php';
    }

    /**
     * @return void
     */
    public function edit():void
    {
        require '../src/Views/edit.php';
    }

    /**
     * @return void
     */
    public function delete():void
    {
        require '../src/Views/delete.php';
    }
}