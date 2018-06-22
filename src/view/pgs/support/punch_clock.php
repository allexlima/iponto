<div class="jumbotron mb-5">
    <h3 class="display-5">Time Clock</h3>
    <hr class="my-4">

    <?php if(!$i_ponto->is_locked($_SESSION['user_id'])){ ?>

    <p>You can <b>check in</b> right now for <b><?php echo date("F j, Y, g:i:s a"); ?></b></p>
    <button type="button" class="btn btn-success btn-lg btn-block" onclick="if(confirm('Are you sure you want to check in right now?')) window.location.href='?pg=checkin'">Check in</button>

    <?php }else{ ?>

        <p>You can <b>check out</b> right now for <b><?php echo date("F j, Y, g:i:s a"); ?></b></p>
        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="if(confirm('Are you sure you want to check out right now?')) window.location.href='?pg=checkout'">Check out</button>

    <?php } ?>

</div>

<h3 class="display-5">History</h3>
<br>

<table class="table table table-striped">
    <thead>
        <tr> <th>Check in</th> <th>Check out</th> <th>Worked hours</th> </tr>
    </thead>

    <tbody>
        <?php
            foreach ($i_ponto->get_all($_SESSION['user_id']) as $key => $value){
                echo "<tr>";
                    echo "<td>".date("F j, Y, g:i:s a", strtotime($value['ponto_inicio']))."</td>";
                    echo "<td>".date("F j, Y, g:i:s a", strtotime($value['ponto_fim']))."</td>";
                    echo "<td>".$value['hours']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>




<br>
