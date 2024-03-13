<?php
session_start();
require_once( 'include_file/db.php' );

if (isset($_POST['login'])) {

    // escape variables for security
    $username = $connect->real_escape_string( $_POST['username']);
    $password = $connect->real_escape_string(md5($_POST['password']));

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $connect->query( $sql );
    // $row = $result->fetch_object();

    if( $result->num_rows > 0 ) {
        echo 'You are logged in!';
        $admin_info = $result->fetch_object();
        // echo '<pre>' . print_r( $row, TRUE ) . '</pre>'; exit;
        $_SESSION['admin'] = $admin_info->id;
        // header( 'Location: admin/list_users.php' );
        header( 'Location: admin/index.php' );
    }else{
        $_SESSION['error'] = 'Given Username or Password is incorrect.';
        header( 'Location: index.php' );
    }

    exit;
    
}
?>