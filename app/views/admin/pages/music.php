<div class="cards_contaier page-animation">

    <div class="table_container user_table">
        <div class="d-flex gap-5 margin-vertical">
            <a href="/admin" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a href="?add-musics" type="submit"
                style="display:block; color: #fff;width: fit-content;text-decoration: none" class="btn d-block">
                <i class="fa  fa-plus" aria-hidden="true"></i> add musics
            </a>
        </div>
        <header>
            <h1> musics</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>artist</th>
                    <th>created-at</th>
                    <th>__</th>
                    <th>__</th>
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
                            <div onclick="play_up(this)" title="click to open "
                                data-youtube-link="<?= $music['link'] ?>" data-title="<?= $music['title'] ?>"
                                data-music_sours="<?= $music['music'] ?>" data-image="<?= $music['albem-art'] ?>"
                                data-artist="<?= $music['artist'] ?>" class="btn">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a title=" edit " href="?edit-music=<?= $music['id'] ?>" class="btn">
                            <i class="fa fa-edit    "></i>

                        </a>
                    </td>
                    <td>
                        <a href="?delete-music=<?= $music['id'] ?>" class="btn ">
                            <i class="fa fa-trash-alt    "></i>


                        </a>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
    <div class="table_container user_table content-card ">
        <!-- music player -->
        <div class="music bg-image">

            <div class="music-palyer">
                <div class="detail"><span class="artist">artist name </span> <span class="title">music title
                    </span></div>
                <section>
                    <div class="time"><span id="current-time">0:00</span> - <span id="duration">0:00</span>
                    </div>

                    <div class="slider">
                        <input type="range" min="0" max="100" value="0" />
                        <div class="progress-bar"></div>
                    </div>

                </section>

                <div class="controls">
                    <audio src="" id="audio"></audio>

                    <button class="previousMusicBtn"><i class="fa-solid fa-caret-left"></i></button>

                    <button class="play-audio" onclick="AudioPlayer()" class="player">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </button>

                    <button class="NextMusicBtn">
                        <i class="fa-solid fa-caret-right"></i>
                    </button>
                    <button class="volume">
                        <i class="fa fa-volume-up"></i>
                    </button>
                </div>
            </div>

            <a href="" class="youtube-link">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                <span>
                    Watch on YouTube
                </span>
            </a>
        </div>


    </div>

</div>