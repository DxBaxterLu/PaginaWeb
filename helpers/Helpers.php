<?php

    //Devuelve URL pagina
    function base_url() {
        return BASE_URL;
    }

    /* Funcion devuelve url de assets en nombre con mayuscula Ejem: Assets la A es mayus ---- solo para hosts
    Esto se debe cambiar en la vista ejem: <?= echo media(); ?>img/ilustracion2.svg
    el <?= es como <?php echo*/
    function media() {
        return BASE_URL."/Assets";
    }

    //Muestra info formateada
    function dep($data) {
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('<pre>');
        return $format;
    }

    //Elimina Exceso de espacios entre palabras
    function strClean($strCadena) {
        $string = preg_replace(['/\s+/','/^\s|\s$/'], [' ',''], $strCadena);
        $string = trim($string);
        $string = stripslashes($string);
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("<script trype=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM", "",$string);
        $string = str_ireplace("INSERT INTO", "",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM", "",$string);
        $string = str_ireplace("DROP TABLE", "",$string);
        $string = str_ireplace("OR '1'='1'", "",$string);
        $string = str_ireplace('OR "1"="1"', "",$string);
        $string = str_ireplace('OR ´1´=´1´', "",$string);
        $string = str_ireplace("is NULL; --", "",$string);
        $string = str_ireplace("is NULL; --", "",$string);
        $string = str_ireplace("LIKE '", "",$string);
        $string = str_ireplace('LIKE "', "",$string);
        $string = str_ireplace("LIKE ´", "",$string);
        $string = str_ireplace("OR 'a'='a", "",$string);
        $string = str_ireplace('OR "a"="a', "",$string);
        $string = str_ireplace("OR ´a´=´a", "",$string);
        $string = str_ireplace("OR ´a´=´a", "",$string);
        $string = str_ireplace("--", "",$string);
        $string = str_ireplace("^", "",$string);
        $string = str_ireplace("[", "",$string);
        $string = str_ireplace("]", "",$string);
        $string = str_ireplace("==", "",$string);

        return $string;
    }

    //Genera Password
    function passGenerator($Length = 10) {
        $pass = "";
        $longitudPass = $Length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena = strlen($cadena);

        for($i = 1; $i <= $longitudPass; $i++) {
            $pos =rand(0, $longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }

    //Genera un token
    function token() {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }

    //fromato valor monetaria
    function formatMoney($cantidad) {
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }

?>