<?php
    include("../lib/config/includes.php");

    $query = "select * from tarefas where data <= NOW() order by data desc limit 100";
    $result = mysqli_query($con, $query);
?>
<div class="container">
    <div class="row">
        <div clas="col">
            <a href="?sair=1" class="btn btn-danger" style="margin:20px;">Sair</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Arquivo</th>
                        <th>Data</th>
                        <th>Versões</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($d = mysqli_fetch_object($result)){


                        $pos = strripos($d->local, '/');
                        $local = substr($d->local, ($pos + 1), strlen($d->local));

                    ?>
                    <tr>
                        <td><?=$local?></td>
                        <td><?=$d->data?></td>
                        <td>
                            <?php
                                $l = md5($d->local);
                            ?>
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?=Versoes($l)?>
                                <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                            </ul>

                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>