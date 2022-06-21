<?php

    function Versoes($l){

        // $path = "../../sisbk/versoes/".$l;
        // $diretorio = dir($path);
        //  while($arquivo = $diretorio->read()){
        //     if($arquivo != '.' and $arquivo != '..'){
        //         echo "<li><a class=\"dropdown-item\" href=\"../sisbk/versoes/".$l.'/'.$arquivo."\" target='_blank'>Versão em ".date("d/m/Y H:i:s", filemtime($path.'/'.$arquivo))."</a></li>";
        //     }
        //  }
        //  $diretorio -> close();

         global $con;

         echo $query = "select * from versoes where dir = '{$l}' order by data desc";
         $result = mysqli_query($query);
         while($d = mysqli_fetch_object($result)){
            echo "<li><a class=\"dropdown-item\" href=\"../sisbk/versoes/".$d->dir.'/'.$d->file."\" target='_blank'>Versão em ".$d->data."</a></li>";
         }



    }