<?php 
include_once('config.php');

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "Update users SET name='$name', email='$email', mobile='$mobile' where id = '$id'");

    header("Location: index.php");
};

?>

<?php 
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "select * from users where id = '$id'");

    while ($user_data = mysqli_fetch_array($result)){
        $name = $user_data['name'];
        $email = $user_data['email'];
        $mobile = $user_data['mobile'];

    };
?>

<html>
<head>
    <title>Edit From</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <form class="form-group mt-5" name="update_user" method="post" action="edit.php">
        <table class="table table-striped" border="1">
            <tr>
                <td>Name</td>
                <td><input type="text" class="form-control" name="name" value="<?=$name?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" name="email" value="<?=$email?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" class="form-control" name="mobile" value="<?=$mobile?>"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="id" value="<?=$id?>"></td>
                <td><input type="submit" class="btn btn-secondary float-right" value="Submit" name="update"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>