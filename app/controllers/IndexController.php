<?php
session_start();
$database = new Database;

$PageTitle = 'BAME-RECORDS';
$CssFile = 'assets/css/style.css';
$artists = $database->query("select * from artists LIMIT 8 ");
$events = $database->query("select * from events");
$new_events = $database->query("select * from events ");
if (isset($_GET['all-artists'])) {
    $artists = $database->query("select * from artists");
}
$current_date = date('Y-m-d');
$studioFreeTimes = $database->query("SELECT * FROM `studio-free-time`");
include views('index.view.php');