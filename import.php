<?php require 'header.php'; ?>

<div class="col-sm-12">
    <form action="" method="POST">
        <div class="form-group">
            <label for="csv_input">File input:</label>
            <input type="file" name="csv_input">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
</div>

<?php

if(isset($_POST['submit'])){
    $filename = $_POST['csv_input'];
    $filesize = filesize($filename);

    $f_handle = fopen($filename, "r");
?> <div class="col-sm-12"><hr> <?php
    while($file_arr = fgetcsv($f_handle, $filesize, ',')){
        $check = $file_arr[0];
        if(preg_match('/^[123456789]\d*$/', $check)) {
            echo "<p>".$file_arr[$check]."</p>";
        }else if($check=='0' || $check=='ALL'){
            echo "<p>".implode(" ", $file_arr)."</p>";
        }else if(preg_match('/^-\d+$/', $check)){
            $line_arr = array_slice($file_arr, 0, abs($check)+1);
            $line = implode(" ", $line_arr);
            echo "<p>".$line."</p>";
        }else{
            echo "<p>error</p>";
        }
        echo "<hr>";
    }
    ?> <div class="col-sm-12"> <?php
}