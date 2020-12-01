<?php

    class Alerta extends Controllers{

        public function __construct() {
            parent::__construct();
        }

        public function alerta() {
            $data['page_id'] = 2;
            $data['page_tag'] = "Alerta";
            $data['page_title'] = "Pagina Alerta";
            $data['page_name'] = "Alerta";

            $this->views->getView($this,"alerta",$data);
        }
        
    }
    
?>