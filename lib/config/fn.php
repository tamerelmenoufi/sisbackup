<?php

    function Versoes($l){

        $path = "../../sisbk/versoes/".$l;
        $diretorio = dir($path);
         while($arquivo = $diretorio->read()){
            if($arquivo != '.' and $arquivo != '..'){
                echo "<li><a class=\"dropdown-item\" href=\"../sisbk/versoes/".$l.'/'.$arquivo."\">".$arquivo."</a></li>";
            }
         }
         $diretorio -> close();


    }