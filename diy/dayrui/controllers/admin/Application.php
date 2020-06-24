<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/* v3.1.0  */
	
class Application extends M_Controller {

	/**
     * 管理
     */
    public function index() {
		$this->template->display('main.html');
    }

}