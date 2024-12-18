<div class="cards_contaier page-animation">
    <a href="?artists" class="card user">
        <i class="fa fa-user" aria-hidden="true"></i>
        <div class="card_text">
            <h1>Artist</h1>
            <small>
                <?php
                foreach ($artists_count as $artists_counter) {
                    echo $artists_counter['count'];
                }
                ?> artists
            </small>
        </div>
    </a>

    <a href="?events" class="card musics">
        <i class="fa fa-calendar-alt" aria-hidden="true"></i>

        <div class="card_text">
            <h1>Events</h1>

            <?php
            foreach ($events_count as $events_counter) {
                echo $events_counter['count'];
            }
            ?>
            events</small>
        </div>
    </a>
    <a href="?studio-booking" class="card musics">
        <i class="fa fa-calendar-check" aria-hidden="true"></i>

        <div class="card_text">
            <h1>Studio Booking</h1>

            Booking </small>
        </div>
    </a>
</div>

<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <header>
            <h1>Latest Events</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <img class=" user-img-border-10 " src="assets/images/event/<?= $event['picture'] ?>" />
                            <span>
                                <a href="<?= $event['link'] ?>" target="_blank"> <?= $event['name'] ?></a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents "><?= $event['date'] ?></div>
                    </td>
                </tr><?php endforeach; ?>
                <td><a class="link" href="?events"> show more </a></td>
            </tbody>
        </table>
    </div>
    <div class="table_container user_table">
        <header>
            <h1>Artists</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>auth</th>

                    <th>date</th>
                </tr>
            </thead>

            <tbody>


                <?php foreach ($artists as $artist): ?>
                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <img class="user-img-border-10 " src="assets/images/artist/<?= $artist['picture'] ?>" />
                            <span>
                                <a href="<?= $artist['link'] ?>" target="_blank"> <?= $artist['name'] ?></a>
                                <p> <?= $artist['catagory'] ?></p>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents "><?= $artist['created_at'] ?></div>
                    </td>
                </tr><?php endforeach; ?>
                <td><a class="link" href="?artists"> show more </a></td>
            </tbody>
        </table>
    </div>
    <div class="table_container user_table">
        <header>
            <h1>Studio Booking</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>user</th>
                    <th>date</th>
                    <th>time</th>
                </tr>
            </thead>

            <tbody>


                <?php foreach ($bookings as $booking): ?>


                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <i class="fa fa-calendar-check" aria-hidden="true"></i>
                            <span>
                                <a href="mileto:<?= $booking['email'] ?>" target="_blank">
                                    <?= $booking['name'] ?></a>
                                <p> <?= $booking['email'] ?></p>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents "><?= $booking['date'] ?></div>
                    </td>
                    <td>
                        <div class=" contents "><?= $booking['time'] ?></div>
                    </td>
                </tr>




                <?php endforeach; ?>
                <td><a class="link" href="?studio-booking"> show more </a></td>
            </tbody>
        </table>
    </div>
</div>




<div class="cards_contaier page-animation">

    <div class="table_container user_table content-card ">


        <div class="music bg-image"
            style="background: url(&quot;assets/music/albem-arts/negestat1.jpg&quot;) center center / cover;">

            <div class="music-palyer">
                <div class="detail"><span class="artist">Negestst</span> <span class="title">ere</span></div>
                <section>
                    <div class="time"><span id="current-time">00:15</span> - <span id="duration">02:57</span>
                    </div>

                    <div class="slider">
                        <input type="range" min="0" max="100" value="0">
                        <div class="progress-bar" style="width: 8.72263%;"></div>
                    </div>

                </section>

                <div class="controls">
                    <audio src="assets/music/music-src/Negestat - Eree (Official Music Video).mp3" id="audio"></audio>

                    <button onclick="previousMusic()"><i class="fa-solid fa-caret-left"></i></button>

                    <button class="play-audio" onclick="AudioPlayer()"><i class="fa fa-pause"
                            aria-hidden="true"></i></button>

                    <button onclick=" nextMusic()">
                        <i class="fa-solid fa-caret-right"></i>
                    </button>
                    <button class="volume" style="flex: 1 1 0%;">
                        <i class="fa fa-volume-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="table_container user_table">





        <div class="d-flex gap-5 margin-vertical">

            <a href="?add-musics" type="submit"
                style="display:block; color: #fff;width: fit-content;text-decoration: none" class="btn d-block">
                <i class="fa  fa-plus" aria-hidden="true"></i> add music
            </a>
        </div>









        <header>
            <h1>Recently songs</h1>
        </header>

        <table>
            <thead>
                <tr>
                    <th>artist</th>
                    <th>created-date</th>
                    <th>__</th>
                </tr>
            </thead>

            <tbody>


                <?php foreach ($musics as $music): ?>


                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <img class="user-img-border-10 " src="assets/music/albem-arts/<?= $music['albem-art'] ?>" />
                            <span>
                                <a href="<?= $music['link'] ?>" target="_blank">
                                    <?= $music['artist'] ?></a>
                                <p> <?= $music['title'] ?></p>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents "><?= $music['created-at'] ?></div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <div class="btn">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                <td><a class="link" href="?musics"> show more </a></td>
            </tbody>
        </table>
    </div>


</div>