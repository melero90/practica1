<?php

    function conectar($conectar)
    {
        $link='';
        if($conectar == 1)
        {
            $link = mysql_connect('127.2.171.2','admineh9l6U3','pvMhbL9NBZPy')
            or die('No se pudo conectar a la base de datos.');
            mysql_select_db('x26498871')
            or die('Error al tratar de selecccionar la base de datos.');
            //if($link){echo'conectando...<br />';}
        }
        if($conectar == 0)
        {
            $link = mysql_connect('127.2.171.2','admineh9l6U3','pvMhbL9NBZPy');
            mysql_close($link);
            echo'cerrado';
        }
    }
?> 
