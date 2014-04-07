<?php
class Controller {
    
    public $model;
    public $view;
	public $twig;
	public $loader;
    
    function __construct()
    {
		$this->loader = new Twig_Loader_String();
		$this->twig = new Twig_Environment($this->loader);
    }
    
    function action_index()
    {
    }
}