<?php
    session_start();
    require 'header.php';
        if(isset($_POST['submit'])) {
            $login = 'admin';
            $password = 'admin';

            if (($_POST['f_user'] == $login) && ($_POST['f_password'] == $password)){
                $_SESSION['user'] = $login;
                header('Location: contact.php');
            }
            else{
                session_destroy();
                header('Location: admin.php');
            }
        }
?>

<div class="col-sm-4">
    <form action="" method="post">
        <div class="form-group">
            <label for="f_user">Login:</label>
            <input type="text" class="form-control" name="f_user" placeholder="login" >
        </div>
        <div class="form-group">
            <label for="f_password">Password:</label>
            <input type="password" class="form-control" name="f_password" placeholder="password" >
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
</div>