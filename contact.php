<?php
    session_start();
    require 'header.php';

    $filename = 'txt\contact.txt';
    $loaded_messages = [];

    if($length = filesize($filename)) {
        $f_handle = fopen($filename, 'r');
        $serialized = fread($f_handle, $length);
        $loaded_messages = unserialize($serialized);
        fclose($f_handle);
    }

    if(isset($_POST['submit']))
    {
        $title = $_POST["f_title"];
        $email = $_POST["f_mail"];
        $content = $_POST["f_message"];

        $message = [
            "title" => $title,
            "f_mail" => $email,
            "f_message" => $content,
        ];

        setcookie('f_mail', $email, time() + 20);

        array_push($loaded_messages, $message);

        $f_handle = fopen($filename, 'w');
        fwrite($f_handle, serialize($loaded_messages));
        fclose($f_handle);

        header('Location: contact.php');
    }

    if(isset($_SESSION['user'])) {
?>
        <div class="col-md-6">
        <?php
            foreach($loaded_messages as $message){ ?>
                <h4>Title: <?php echo $message['title']; ?></h4>
                <h6>Mail: <?php echo $message['f_mail']; ?></h6>
                <p><?php echo $message['f_message']; ?></p>
                <hr>
        <?php }
    }else {
        ?>
        </div>
        <div class="col-md-6">
            <body>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" name="is_clicked" value="true">
                    <label for="f_title">Post title</label>
                    <input type="text" class="form-control" name="f_title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="f_mail">Email</label>
                    <input type="email" class="form-control" name="f_mail" placeholder="Email" value="<?php if(isset($_COOKIE['f_mail'])){ echo $_COOKIE['f_mail']; } ?>">
                </div>
                <div class="form-group">
                    <label for="f_message">Message</label>
                    <textarea class="form-control" rows="5" name="f_message" placeholder="Message text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    <?php
    }
    session_destroy();
?>

<?php require 'footer.php'; ?>