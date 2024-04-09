<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit doc</title>

</head>
<body>
    <div class ='all'>
        <fieldset>
            <form action="" method='POST'>
                <h1>update information</h1>
                <?php
                $edit=$_GET['edit'];
                  $connect= mysqli_connect("localhost","root","","buntu_mike");
    
    $select = "SELECT * FROM information";
    $QUERY = mysqli_query($connect,$select);
    $x = 1; 
    while($raw = mysqli_fetch_assoc($QUERY)){



        header("location:select.php")
        ?>

            </form>
        </fieldset>
</div>

    
</body>
</html>