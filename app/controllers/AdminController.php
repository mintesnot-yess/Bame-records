<?php
session_start();

$database = new Database;
if (isset($_SESSION['admin'])) {

    $PageTitle = 'Bame-Admin';
    $CssFile = '../assets/css/admin-style.css';
    if (isset($_GET['events'])) {
        $dashboardActive = '';
        $ArtistActive = '';
        $BookingActive = '';
        $EventActive = 'active';
        $MusicActive = '';

        $events = $database->query("select * from events");

    } elseif (isset($_GET['artists'])) {
        $ArtistActive = 'active';
        $dashboardActive = '';
        $EventActive = '';
        $BookingActive = '';
        $MusicActive = '';

        $artists = $database->query("select * from artists");

    } elseif (isset($_GET['studio-booking'])) {
        $ArtistActive = '';
        $dashboardActive = '';
        $EventActive = '';
        $BookingActive = 'active';
        $MusicActive = '';

        $bookings = $database->query("SELECT * FROM `studio-booking`")->fetchAll();
        $studioFreeTimes = $database->query("SELECT * FROM `studio-free-time`")->fetchAll();

    } elseif (isset($_GET['musics'])) {
        $musics = $database->query("SELECT * FROM `musics`")->fetchAll();
        $MusicActive = 'active';
        $ArtistActive = '';
        $dashboardActive = '';
        $EventActive = '';
        $BookingActive = '';

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
            header(header: "location:admin?studio-booking&msg=studio free time add successfully");
            exit();
        }

    }
    // edit artist
    if (isset($_GET['edit-artist'])) {
        $id = $_GET['edit-artist'];
        $artists = $database->query("SELECT * FROM `artists` WHERE id = $id;");
    }

    if (isset($_POST['edit-artist'])) {
        $id = $_POST['artist-id'];
        $name = $_POST['artist-name'];
        $link = $_POST['link'];
        $catagory = $_POST['artist_catagoty'];
        $query = "UPDATE `artists` SET `name` = '$name', `link` = '$link', `catagory` = '$catagory' WHERE `artists`.`id` = $id;";
        if ($database->query($query)) {
            header(header: "location:admin?artists&msg=$name edit successfully");
            exit();
        }
    }

    // ------------------------------------------

    // edit events
    if (isset($_GET['edit-events'])) {
        $id = $_GET['edit-events'];
        $events = $database->query("SELECT * FROM `events` WHERE id = $id;");
    }

    if (isset($_POST['edit-events'])) {
        $id = $_POST['event-id'];
        $name = $_POST['event-name'];
        $link = $_POST['link'];
        $place = $_POST['place'];
        $date = $_POST['event-date'];


        $query = "UPDATE `events` SET `name` = '$name', `place` = '$place', `link` = '$link', `date` = '$date' WHERE `events`.`id` = $id;
";
        if ($database->query($query)) {
            header(header: "location:admin?events&msg=$name edit successfully");
            exit();
        }
    }

    // ------------------------------------------

    // edit music
    if (isset($_GET['edit-music'])) {
        $id = $_GET['edit-music'];
        $musics = $database->query("SELECT * FROM `musics` WHERE id = $id;");
    }

    if (isset($_POST['edit-music'])) {
        $id = $_POST['id'];
        $artist_name = $_POST['artist'];
        $title = $_POST['title'];
        $link = $_POST['link'];

        $query = "UPDATE `musics` SET `artist` = '$artist_name', `title` = '$title ', `link` = '$link' WHERE `musics`.`id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?musics&msg=$artist_name  edit successfully");
            exit();
        }
    }

    // ------------------------------------------




    //delete artist
    if (isset($_GET['delete-artist'])) {
        $id = $_GET['delete-artist'];
        $query = "DELETE FROM `artists` WHERE `id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?artists&msg=artist delete successfully");
            exit();
        }
    }
    //delete music
    if (isset($_GET['delete-music'])) {
        $id = $_GET['delete-music'];
        $query = "DELETE FROM `musics` WHERE `id` = $id";
        if ($database->query($query)) {
            header(header: "location:admin?musics&msg=music delete successfully");
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