<?php

    function Versoes($l){

        $path = "../../../sisbk/versoes/".$l;
        $diretorio = dir($path);
         while($arquivo = $diretorio -> read()){
        //     if($arquivo != '.' and $arquivo != '..'){
        //         echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
        //     }
         }
         $diretorio -> close();


    }