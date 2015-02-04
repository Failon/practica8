<?php
	Class chome extends Controller{
		function __construct($params){
			parent::__construct($params);
			$this->model = new mhome;					
		}
			function home(){
				$this->loader->vista('home.php',$this->model->Info());
				
			}
	}