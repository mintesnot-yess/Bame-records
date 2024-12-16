<?php

$database = new Database;


if (isset($_GET['json'])) {
    $limit = "limit " . $_GET['json'];
    $json_data = array();
    $artists = $database->query(query: "SELECT * FROM `artists` $limit ");
    foreach ($artists as $artist) {
        $json_data[] = [
            'name' => $artist['name'],
            'picture' => $artist['picture'],
            'link' => $artist['link'],
            'catagory' => $artist['catagory'],
            'created-at' => $artist['created_at'],
        ];
    }
    echo json_encode(value: $json_data);
    exit();

}
if (isset($_GET['all_artists'])) {
    $json_data = array();
    $artists = $database->query(query: "SELECT * FROM `artists` ");
    foreach ($artists as $artist) {
        $json_data[] = [
            'name' => $artist['name'],
            'picture' => $artist['picture'],
            'link' => $artist['link'],
            'catagory' => $artist['catagory'],
            'created-at' => $artist['created_at'],
        ];
    }
    echo json_encode(value: $json_data);
    exit();

}