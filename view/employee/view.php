<!-- <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>
<a href="index.php?action=delete"><i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>
<a href="index.php?action=update "><i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a> -->

<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
            
        </div>
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Student Name</th>
            <th class="sort text-center" data-sort="age">Age</th>
            <th class="sort text-center" data-sort="salary">Salary</th>
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
            <tbody class="list">
            <?php
                if($data['employee_data']!=""){// if no data no need loop
                    $i = 1;
                    foreach ($data['employee_data'] as $row) :
                        ?>
                        <tr class="text-center">
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['firstname'].''.$row['lastname'];?></td>
                            <td><?php echo $row['age']?></td>
                            <td><?php echo $row['salary']?></td>
                            <td>
                                <a href ="index.php ?action=detail&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-eye-open" style='color:green;'></i></a>
                                <a href ="index.php ?action=update&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href ="index.php ?action=delete&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-trash" style='color:red;'></i></a>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    endforeach;
                }
            ?>
</tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>