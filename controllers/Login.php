<?php

    class Login extends Controllers{

        public function __construct() {
            parent::__construct();
        }

        public function login() {
            $data['page_id'] = 2;
            $data['page_tag'] = "Login";
            $data['page_title'] = "Pagina Login";
            $data['page_name'] = "Login";

            $this->views->getView($this,"login",$data);
        }
        
    }
    
?>