<?php

include('SessionSecure.php');

class Test extends SessionSecure {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('testsession');
    }
	
}
?>