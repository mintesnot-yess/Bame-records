<?php
$database = new Database;

$PageTitle = 'BAME-ADMIN-LOGIN';
$CssFile = '../assets/css/admin-style.css';
if (isset($_SESSION['admin'])) {
    header("location:admin");
    exit();

} else {
    if (isset($_POST['login'])) {
        if (empty($_POST['email'])) {
            $error = 'check email ';
        } elseif (empty($_POST['password'])) {
            $error = 'check password';
        } else {
            //instert device information

            $device_id = $_SERVER['REMOTE_ADDR'];
            $device_type = $_SERVER['HTTP_USER_AGENT'];
            $last_login = date('Y-m-d H:i:s');
            //admin id
            $admin_id = $_POST['email'];

            $query = "INSERT INTO `device_info` ( `device_id`, `device_type`, `last_login`, `admin-email`)
            VALUES ( '$device_id', '$device_type', '$last_login', '$admin_id');";
            $database->query($query);
            //check admin email and password from database
            $admin = $database->query("select * from admin_ where email = :email", ['email' => $_POST['email']])->fetchAll();

            foreach ($admin as $admins) {
                $admins_email = $admins['email'];
                $admins_pass = $admins['password'];
            }

            if ($admins_email == $_POST['email']) {
                if (password_verify($_POST['password'], $admins_pass)) {
                    $_SESSION['admin'] = $admins['email'];
                    session_regenerate_id(true);
                    header("location:/admin");
                } else {
                    $error = 'check password';
                }
            } else {
                $error = 'check email or password';
            }
        }
    }

    include views(path: 'admin/auth/login.php');

}
