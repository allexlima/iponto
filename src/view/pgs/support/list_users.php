<h3 class="display-5">Employees</h3>
<br>

<table class="table table table-striped">
    <thead>
        <tr> <th>Name</th> <th>Email</th> <th>Post</th> <th>Actions</th> </tr>
    </thead>

    <tbody>
        <?php
            foreach ($i_colab->get_all() as $key => $value){
                echo "<tr>";
                    echo "<td>".$value['colab_nome']."</td>";
                    echo "<td>".$value['colab_email']."</td>";
                    echo "<td>".$value['colab_funcao']."</td>";
                    echo "<td><button type='button' onclick='if(confirm(\"Are you sure you want to delete this entry?\")) window.location.href = \"?pg=delete&id=".$value['colab_id']."\"' class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></button>";
                    echo " <button type='button' onclick='if(confirm(\"Are you sure you want to reset the password of this entry to 123?\")) window.location.href = \"?pg=update&id=".$value['colab_id']."\"' class='btn btn-info btn-sm'><i class='fas fa-key'></i></button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
