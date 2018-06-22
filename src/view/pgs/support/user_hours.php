<div class="tab-pane fade" id="user-hours" role="tabpanel" aria-labelledby="pills-user-hours-tab">

    <div class="jumbotron mb-5">
        <h3 class="display-5">Select an user</h3>
        <hr class="my-4">

        <form method="get" action="?">

            <div class="form-group col-md-13">
              <label for="inputUserId">User</label>
              <select id="inputUserId" name="see_user" class="form-control">
                <option value="0">Choose...</option>
                <?php
                    foreach ($i_colab->get_all() as $key => $value){
                        echo "<option value='".$value['colab_id']."'";
                        echo ((@$_GET['see_user'] == $value['colab_id']) ? "selected":"")." >";
                        echo $value['colab_nome']."</option>";
                    }
                ?>
              </select>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Set</button>

        </form>

    </div>

    <h3 class="display-5">History</h3>
    <br>

    <table class="table table table-striped">
        <thead>
            <tr> <th>Check in</th> <th>Check out</th> <th>Worked hours</th> </tr>
        </thead>

        <tbody>
            <?php
                foreach ($i_ponto->get_all(@$_GET['see_user']) as $key => $value){
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

</div>
