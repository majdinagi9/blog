<?php 


function userOnly($redirect = '/index.php'){
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = 'You need to login first';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect );
        exit(0);
    }

}
function adminOnly($redirect = '/index.php'){

    if(empty($_SESSION['admin']) || empty($_SESSION['id'])){
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect );
        exit(0);
    }
}
function guestOnly($redirect = '/index.php'){
    if(isset($_SESSION['id'])){

        header('location: ' . BASE_URL . $redirect );
        exit(0);
    }

}
