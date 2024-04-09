<h1 style="text-align:center;">My List</h1>
<table border="1" width = "800px" cellspacing="0" cellpadding="0" style="margin: 30px auto;">
    <tr>
        <th>No</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>age</th>
        <th colspan ="2">actions</th>
    </tr>
    <?php
    $connect= mysqli_connect("localhost","root","","buntu_mike");
    
    $select = "SELECT * FROM information";
    $QUERY = mysqli_query($connect,$select);
    $x = 1;
    while($raw = mysqli_fetch_assoc($QUERY)){
        ?>

        <tr>
            <td><?php echo $x;?></td>
                <td><?php echo $raw['first_name']?></td>
                    <td><?php echo $raw['last_name']?></td>
                        <td><?php echo $raw['age']?></td>
                         <td><a href="delete.php?deleteid=<?php echo $raw['information_id']?>">delete</a></td>                          
        </tr>
        <?php
        $x ++;
    }
   
    ?>
</table>