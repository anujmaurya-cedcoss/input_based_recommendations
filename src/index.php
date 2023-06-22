<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validations</title>
</head>

<body>
    <div class='wrapper col-8'>
        <h3 >Input Based Recommendation</h3>
        <form action='validate.php' method="post">
            <div class='form-group mx-5 row'>
                Age :
                <input type='number' name='age'>
            </div>

            <div class='form-group mx-4 row'>
                Weight :
                <input type='number' name='weight'>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4 mx-5">Submit</button>
        </form>
    </div>
    <?php
    if (isset($_GET['msg'])) {
        echo "<h5 class='text-success'>$_GET[msg]</h5>";
    }
    ?>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</html>