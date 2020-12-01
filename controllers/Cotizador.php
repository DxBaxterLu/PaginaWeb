<?php

    class Cotizador extends Controllers{

        public function __construct() {
            parent::__construct();
        }

        public function cotizador() {
            $data['page_id'] = 3;
            $data['page_tag'] = "Cotizador";
            $data['page_title'] = "Pagina Cotizador";
            $data['page_name'] = "Cotizador";

            $this->views->getView($this,"cotizador",$data);
        }
        
    }
    
?>