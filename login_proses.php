<?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == 'tari' && $password == 'tari')
        {
            echo "anda berhasil login";
        }
        else
        {
            echo "password anda salah";
        }
 
?>