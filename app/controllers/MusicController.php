<?php

$database = new Database;


if (isset($_GET['json'])) {
    $limit = "limit " . $_GET['json'];
    $json_data = array();
    $musics = $database->query(query: "SELECT * FROM `musics` ORDER BY `musics`.`created-at` DESC ");
    foreach ($musics as $music) {
        $json_data[] = [
            'artist' => $music['artist'],
            'title' => $music['title'],
            'albem_art' => $music['albem-art'],
            'music' => $music['music'],
            'link' => $music['link'],
            'created-at' => $music['created-at'],
        ];
    }
    echo json_encode(value: $json_data);
    exit();

}