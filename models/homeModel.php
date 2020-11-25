<?php

    class homeModel {
        public function _construct() {
            //echo "Mensaje desde modelo home";
        }

        public function getAlerta($params) {
            return "Datos de alerta: ".$params;
        }
    }
?>
