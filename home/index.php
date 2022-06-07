<?php
    include("../lib/config/includes.php");

    $query = "select * from tarefas where data <= NOW() order by data desc limit 100";
    $result = mysqli_query($con, $query);
?>
<div class="container">
    <div class="row">
        <div clas="col">
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
                    ?>
                    <tr>
                        <td><?=$d->local?></td>
                        <td><?=$d->data?></td>
                        <td>
                            <?=Versoes(md5($d->local))?>
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