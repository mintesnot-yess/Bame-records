<?php
$database = new Database;
if (isset($_SESSION['admin'])) {

    $PageTitle = 'Bame-Admin';
    $CssFile = '../assets/css/admin-style.css';
    if (isset($_GET['events'])) {
        $dashboardActive = '';
        $ArtistActive = '';
        $BookingActive = '';
        $EventActive = 'active';
        $events = $database->query("select * from events");

    } elseif (isset($_GET['artists'])) {
        $ArtistActive = 'active';
        $dashboardActive = '';
        $EventActive = '';
        $BookingActive = '';

        $artists = $database->query("select * from artists");

    } elseif (isset($_GET['studio-booking'])) {
        $ArtistActive = '';
        $dashboardActive = '';
        $EventActive = '';
        $BookingActive = 'active';
        $bookings = $database->query("SELECT * FROM `studio-booking`")->fetchAll();
        $studioFreeTimes = $database->query("SELECT * FROM `studio-free-time`")->fetchAll();

    } elseif (isset($_GET['musics'])) {
        $musics = $database->query("SELECT * FROM `musics`")->fetchAll();

    } else {
        $dashboardActive = 'active';
        $ArtistActive = '';
        $BookingActive = '';
        $EventActive = '';
        $artists = $database->query("select * from artists LIMIT 3");
        $events = $database->query("select * from events LIMIT 3 ");
        $musics = $database->query("select * from musics LIMIT 3 ");
        $bookings = $database->query("SELECT * FROM `studio-booking` LIMIT 3")->fetchAll();

        $artists_count = $database->query("SELECT COUNT(*) as count FROM artists");
        $events_count = $database->query("SELECT COUNT(*) as count FROM events");

    }

    if (isset($_POST['add-events'])) {
        $event_name = $_POST['event_name'];
        $event_image = $_FILES['event_image']['name'];
        $event_place = $_POST['place'];
        $event_link = $_POST['link'];
        $event_date = $_POST['event_date'];
        $current_date = date('Y-m-d');

        $query = "INSERT INTO `events` (  `name`, `picture`,`place`, `link`, `date`, `created_at`) VALUES ('$event_name', '$event_image', '$event_place','$event_link', '$event_date', '$current_date');";
        if ($database->query($query)) {
            move_uploaded_file($_FILES['event_image']['tmp_name'], to: 'assets/images/event/' . $_FILES['event_image']['name']);
            header(header: "location: admin?events&msg=$event_name  add successfully");
            exit();

        }

    }
    // delete data
    if (isset($_GET['delete-event'])) {
        $id = $_GET['delete-event'];
        $query = "DELETE FROM `events` WHERE `id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?events&msg=events delete successfully");
            exit();
        }
    }

    if (isset($_POST['add-artists'])) {
        $artist_name = $_POST['artist_name'];
        $artist_link = $_POST['link'];
        $artist_image = $_FILES['artist_image']['name'];
        $catagoty = $_POST['artist_catagoty'];
        $current_date = date('Y-m-d');

        $query = "INSERT INTO `artists` ( `name`, `picture`, `link`, `created_at`, `catagory`) VALUES ('$artist_name', '$artist_image', '$artist_link', '$current_date', '$catagoty')";

        if ($database->query($query)) {
            move_uploaded_file($_FILES['artist_image']['tmp_name'], to: 'assets/images/artist/' . $_FILES['artist_image']['name']);
            header(header: "location:admin?artists&msg=$artist_name add successfully");
            exit();

        }

    }
    if (isset($_POST['add-musics'])) {
        $artist_name = $_POST['artist_name'];
        $title = $_POST['title'];
        $music_link = $_POST['link'];
        $albemArt = $_FILES['albem-art']['name'];
        $music_name = $_FILES['music']['name'];
        $current_date = date('Y-m-d');

        $query = "INSERT INTO `musics` (`artist`, `title`, `albem-art`, `link`, `music`, `created-at`) VALUES ('$artist_name', '$title', '$albemArt', '$music_link', '$music_name', '$current_date');
";

        if ($database->query($query)) {

            move_uploaded_file($_FILES['albem-art']['tmp_name'], to: 'assets/music/albem-arts/' . $_FILES['albem-art']['name']);
            move_uploaded_file($_FILES['music']['tmp_name'], to: 'assets/music/music-src/' . $_FILES['music']['name']);
            header(header: "location:admin?musics&msg=$artist_name add successfully");
            exit();
        }

    }


    if (isset($_POST['add-studio-free-time'])) {
        $timeFrom = $_POST['time-from'];
        $timeTo = $_POST['time-to'];
        $current_date = date('Y-m-d');

        $query = "INSERT INTO `studio-free-time` (`free-time-1`, `free-time-2`, `created-date`) VALUES ('$timeFrom', '$timeTo', '$current_date');";

        if ($database->query($query)) {
            header(header: "location:admin?studio-booking&msg=$artist_name add successfully");
            exit();
        }

    }
    //delete artist
    if (isset($_GET['delete-artist'])) {
        $id = $_GET['delete-artist'];
        $query = "DELETE FROM `artists` WHERE `id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?artists&msg=artist delete successfully");
            exit();
        }
    }
    //delete studio free time
    if (isset($_GET['delete-studio-free-time'])) {
        $id = $_GET['delete-studio-free-time'];
        $query = "DELETE FROM `studio-free-time` WHERE `id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?studio-booking&msg= studio free time delete successfully");
            exit();
        }
    }
    //logout
    if (isset($_GET['admin-logout'])) {
        echo 'logout';
        $_SESSION['admin'] = null;
        session_destroy();
        header(header: "location: admin-login");
        exit();
    }

    include views('admin/index.php');
} else {
    header(header: "location: admin-login");
    exit();

}