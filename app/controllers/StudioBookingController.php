<?php
session_start();
 $database = new Database;

$current_date = date('Y-m-d');

// booking form sumit
if (isset($_POST['booking_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $create_date = $current_date;
    // validate form input
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time)) {
        echo "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } elseif ($date < $current_date) {
        echo "Date can't be in the past";

    } else {
        $query = "INSERT INTO `studio-booking` (`name`, `email`, `phone`, `date`, `time`, `created-date`) VALUES ( '$name', '$email', '$phone', '$date', '$time', '$create_date');
";
        if ($database->query($query)) {
            $_SESSION['booking_success'] = true;
            $_SESSION['booking_details'] = [
                'email' => $email,
                'date' => $date,
                'time' => $time,
                'created-date' => $create_date,
            ];
            echo "Booking successful";
            exit();
        }
    }

}




// send to json
if (isset($_GET['json'])) {
    $json_data = array();
    $userEmail = $_SESSION['booking_details']['email'];
    $bookings = $database->query("SELECT * FROM `studio-booking` WHERE `email` = '$userEmail'");
    foreach ($bookings as $booking) {
        $json_data[] = [
            'name' => $booking['name'],
            'email' => $booking['email'],
            'phone' => $booking['phone'],
            'date' => $booking['date'],
            'time' => $booking['time'],
            'created-date' => $booking['created-date'],
        ];
    }
    echo json_encode(value: $json_data);
    exit();
}



// delete book using $_GET['delete-book']
if (isset($_GET['delete-booking'])) {

    $email = $_GET['delete-booking'];
    $query = "DELETE FROM `studio-booking` WHERE `email` = '$email'";
    if ($database->query($query)) {
        // delete everything in sesstion
        $_SESSION = array();
        session_destroy();
        header(header: "location:/#form");
        exit();
    }
}
