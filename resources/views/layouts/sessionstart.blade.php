<?php
session_start();
    if (empty($_SESSION['user'])){
        if (empty($_SESSION['user'])){
            redirect()->route('/');
        }
        else{
            $users = $_SESSION['user'];
            redirect()->route('home',$users);
        }
    }
    else{
        redirect()->route('/');
    }
?>

