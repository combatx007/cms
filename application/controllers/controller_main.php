<?php
class Controller_Main extends Controller
{
    function action_index()
    {	
        echo $this->twig->render('Hello {{ name }}!', array('name' => 'Fabien'));
    }
}