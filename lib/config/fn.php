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

         $query = "select * from versoes where dir = '{$l}' order by data desc";
         $result = mysqli_query($con, $query);
         while($d = mysqli_fetch_object($result)){
            echo "<li><a class=\"dropdown-item\" href=\"../sisbk/versoes/".$d->dir.'/'.$d->file."\" target='_blank'>Versão em ".dataBr($d->data)."</a></li>";
         }



    }

    function dataBr($d){
        list($dt, $h) = explode(" ",$d);
        list($a, $m, $d) = explode("-",$dt);

        return "{$d}/{$m}/{$a} {$h}";
    }