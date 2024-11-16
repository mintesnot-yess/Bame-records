<?php

include base_path("app/views/partials/header.php");
$current_date = date('Y-m-d');

?>
<div class="container">
    <?php include base_path("app/views/partials/nav.php"); ?>

    <main>

        <?php if (isset($_GET['all-artists'])): ?>

            <article class="card-container event-organize p-10">
                <section class="card ">
                    <div class="card-content bg-gray">
                        <h2 class="card-title">Notable Artists</h2>
                        <span class="card-description">
                            Over the 15 years. BAME Records has been home to a roster pf talented artist who have made a
                            significate impactOver the 15 years. BAME Records has been home to a roster pf talented artist
                            who have made a significate impact
                            <!-- list of events  -->
                        </span>
                        <h2 class="card-title-sub">Artist Worked With</h2>
                    </div>
                </section>

                <div id="artists" class="card-lists">
                    <?php foreach ($artists as $artist): ?>
                        <a href="<?= $artist['link'] ?>" class="card-list">
                            <img alt="Negestat " src="assets/images/artist/<?= $artist['picture'] ?>" />
                            <h3><?= $artist['name'] ?></h3>
                            <p><?= $artist['catagory'] ?></p>
                        </a>
                    <?php endforeach ?>
                </div>

                <div class="horizontal-line"></div>

            <?php elseif (isset($_GET['add-studio-booking'])): ?>
                <!-- add studio booking page -->
                <?php include base_path("views/add_studio_booking.php"); ?>
            <?php else: ?>
                <div class="content">
                    <span></span>
                    <div class="text">
                        <h1>BAME Records</h1>
                        <p>A revolutionary platform for digital music distribution.</p>
                    </div>
                    <a href="#about" class="scroll-down"><i class="fa fa-angle-double-down"></i> <span>SCROLL
                            DOWN</span></a>
                </div>

                <div class="horizontal-line"></div>

                <article id="about" class="card-container ">
                    <section class="card details-card">
                        <img src="assets/images/music-production.jpeg" alt="Card Image" />
                        <div class="card-content">
                            <h2 class="card-title">About BAME</h2>
                            <p class="card-description">
                                BAME records is a renowned music studio label based in ethiopia that has been a key player
                                in
                                the country's
                                music industry for the past 15 years..founded by surafel aklilui, bame records is knovsn for
                                its
                                dedication to
                                promoting ethiopian talent and preserving the rich musical heritage ofthe nation.
                                <span class="d-none">
                                    specializing in a diverse range of genres including traditional ethiopian music,
                                    hip-hop,
                                    and fusion, bame
                                    records has provid Specializing in a diverse Specializing in a diverse range of genres
                                    including traditional
                                    Ethiopian muBAME Rsic, jazz, hip-hop, and contemporary fusion, BAME Records prides
                                    itself on
                                    its versatility
                                    and commitment to artistic innovation.range of genres including traditional Ethiopian
                                    music,
                                    jazz, hip-hop,
                                    and contemporary fusion, BAME Records prides itself on its versatility and commitment to
                                    artistic innovation.
                                    fusion, BAME Records prides itself on its versatility and commitment to artistic
                                    innovation.
                                    ed a platform for
                                    emerging artists to showcase their creativity and reach a wider audience both locally
                                    and
                                    internationally.
                                    With state-of-the-art recording studios, production facilities. and a team of
                                    experienced
                                    professionals.BAME
                                    Records offers artists a nurturing environment to develop Their craft and produce
                                    high-quality music. The
                                    label has I significant contributions to the Ethiopian music scene.In addition to its
                                    musical endeavors. name
                                    Records is actively intoned in community engagement initiatives la aimed at supporting
                                    aspiring musicians,
                                    organizing music Workshops and promoting cultural exchange through L music.
                                </span>
                            </p>
                        </div>
                    </section>
                    <section class="card details-card">
                        <img src="assets/images/gutar.jpeg" alt="Card Image" />
                        <div class="card-content">
                            <h2 class="card-title">Mission and Vision</h2>
                            <p class="card-description">
                                Led by a dedicated team of music enthusiasts and event professions, BAME Records is
                                committed to
                                nurturing young
                                artist, providing them with a platform to showcase their talent, and creating music that
                                resonates with
                                audiences both locally and internationally . our vision is to be a leading force in shaping
                                the
                                future of
                                Ethiopian music.
                            </p>
                        </div>
                    </section>
                    <section class="card details-card">
                        <img src="assets/images/headphone-piano.png" alt="Card Image" />
                        <div class="card-content">
                            <h2 class="card-title">Genres And Specialization</h2>
                            <p class="card-description">
                                Specializing in a diverse range of genres including traditional Ethiopian music,jazz,
                                hip-hop,
                                an contemporary
                                fusion, BAM E Records prides itself on its versatility and commitment to artistic
                                innovation.
                            </p>
                        </div>
                    </section>
                </article>

                <div class="horizontal-line"></div>


                <div class="content-card">

                    <!-- music player -->
                    <div class="music bg-image">

                        <div class="music-palyer">
                            <div class="detail"><span class="artist">artist name </span> <span class="title">artist
                                    name</span></div>
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

                                <button onclick="previousMusic()"><i class="fa-solid fa-caret-left"></i></button>

                                <button class="play-audio" onclick="AudioPlayer()" class="player">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </button>

                                <button onclick=" nextMusic()">
                                    <i class="fa-solid fa-caret-right"></i>
                                </button>
                                <button class="volume">
                                    <i class="fa fa-volume-up"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="horizontal-line"></div>


                <article class="card-container  ">
                    <section class="card ">
                        <div class="card-content bg-gray">
                            <h2 class="card-title">Notable Artists</h2>
                            <span class="card-description">
                                Over the 15 years. BAME Records has been home to a roster pf talented artist who have made a
                                significate impactOver the 15 years. BAME Records has been home to a roster pf talented
                                artist
                                who have made a significate impact
                                <!-- list of events  -->
                            </span>
                            <h2 class="card-title-sub">Artist Worked With</h2>
                        </div>
                    </section>

                    <div id="artists" class="card-lists">
                        <?php foreach ($artists as $artist): ?>
                            <a href="<?= $artist['link'] ?>" class="card-list">
                                <img alt="Negestat " src="assets/images/artist/<?= $artist['picture'] ?>" />
                                <h3><?= $artist['name'] ?></h3>
                                <p><?= $artist['catagory'] ?></p>
                            </a>
                        <?php endforeach ?>
                    </div>
                    <div class="t-align-end"><a href="?all-artists" class="btn-primary">View All Artists</a></div>
                </article>


                <div class="horizontal-line"></div>
                <article class="card-container event-organize">
                    <section class="card ">
                        <div class="card-content bg-gray">
                            <h2 class="card-title">Event Organizing Expertise</h2>
                            <p class="">
                                in addition to its musical endeavors, BAME Records & Events has garnered a reputation for
                                its
                                exceptional event
                                organizing capacity. From intimate album launch parties to large-scale festivals. DAME
                                Events
                                hos curated
                                memorable experiences that have brought together music lovers from all walks of life.
                            </p>
                            <!-- list of events  -->
                        </div>
                    </section>

                    <section class="card">
                        <div class="card-content">


                            <h2 class="card-title-sub">Some events we organized</h2>
                            <ul id="events">
                                <?php foreach ($events as $event): ?>
                                    <li>
                                        <a rel="noopener" href="<?= $event['link'] ?>" target="_blank">
                                            <img src="assets/images/event/<?= $event['picture'] ?>" alt="" />
                                            <span><?= $event['name'] ?> </span>
                                        </a>
                                    </li>

                                <?php endforeach ?>
                            </ul>
                            <!-- list of events  -->
                        </div>
                    </section>
                </article>




                <article class="card-container event-organize">
                    <section class="card ">
                        <div class="card-content bg-gray">

                            <h2 class="card-title-sub">New Events</h2>
                        </div>
                    </section>

                    <div id="artists" class="card-lists">
                        <?php foreach ($new_events as $new_event):

                            if ($current_date < $new_event['date']):
                                ?>
                                <a href="<?= $new_event['link'] ?>" class="card-list">
                                    <img alt="Negestat " src="assets/images/event/<?= $new_event['picture'] ?>" />
                                    <h3> <?= $new_event['name'] ?></h3>
                                    <p> Event Date: <?= $new_event['date'] ?></p>
                                    <p> Event Place: <?= $new_event['place'] ?></p>
                                </a>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                    <!-- <div class="t-align-end"><a href="?all-artists" class="btn-primary">View All Artists</a></div> -->
                </article>




                <div class="horizontal-line"></div>

                <div class="content-card">


                    <!-- booking -->

                    <div class="layout-container">
                        <div id="form" class="card">
                            <h2>Booking Studio</h2>
                            <div class="card-text">
                                <p>Book a studio to record your music, work on your compositions </p>
                            </div>
                            <!-- if booking have a sessio  -->
                            <?php if (!isset($_SESSION['booking_success'])): ?>
                                <form method="post" id="studio-booking-form">
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <div class="flex-column">
                                                <label for="name">Date</label>
                                                <input type="date" id="date" name="date">
                                            </div>
                                            <div class="flex-column">
                                                <label for="time">Time</label>
                                                <select name="time" id="time">
                                                    <?php foreach ($studioFreeTimes as $studioFreeTime): ?>
                                                        <option
                                                            value="<?= $studioFreeTime['free-time-1'] . ' - ' . $studioFreeTime['free-time-2'] ?>">
                                                            <?= $studioFreeTime['free-time-1'] . ' - ' . $studioFreeTime['free-time-2'] ?>
                                                        </option>

                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label for="name">Full Name</label> <input minlength="3" name="name" required value="<?php isset($_POST['name']) ?? $_POST['name'] ?>
" type="text" id="name" placeholder="Enter name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="<?php isset($_POST['email']) ?? $_POST['email'] ?>" required name="email"
                                            bane type="email" id="email" placeholder="Enter email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input value="<?php isset($_POST['phone']) ?? $_POST['phone'] ?>" required type="number"
                                            name="phone" id="phone" placeholder="Enter phone number" />
                                    </div>

                                    <div class="buttons">
                                        <button name="booking_submit" type="submit">Book now</button>
                                    </div>
                                    <div class="card-text">
                                        <span class="bg-msg"></span>
                                    </div>
                                </form>
                                <div id="booking-successful">
                                    <div class="booking-successful-con">
                                        <i class="fa-solid fa-check-circle"></i>
                                        <p>Booking successful. You will receive a confirmation email shortly.</p>
                                        <a id="refresh">
                                            <i class="fa-solid fa-arrow-rotate-right"></i> page refresh
                                        </a>
                                    </div>
                                </div>
                            <?php else: ?>

                                <div class="card-text">


                                    <table id="booking-table tbody"></table>



                                    <p>
                                        <strong> <i class="fa fa-calendar" aria-hidden="true"> </i>
                                        </strong><?= $_SESSION['booking_details']['date'] ?> </strong>
                                    </p>
                                    <p>
                                        <strong> <i class="fa fa-clock" aria-hidden="true"> </i>
                                        </strong><?= $_SESSION['booking_details']['time'] ?>
                                    </p>

                                    <p>
                                        <strong> <i class="fa fa-money-bill" aria-hidden="true"> </i> </strong> $10 per hour
                                    </p>
                                    <!--  -->
                                    contacts
                                    <p>
                                        <strong> <i class="fa fa-location-arrow" aria-hidden="true"> </i> </strong>Ethiopian |
                                        Addis Ababa
                                    </p>
                                    <p>
                                        <strong> <i class="fa fa-phone" aria-hidden="true"> </i> </strong>+25194013434
                                    </p>
                                    <p>
                                        <strong> <i class="fa fa-at" aria-hidden="true"> </i> </strong>bame@gmail.com
                                    </p>

                                    <p>
                                        <a class="danger-text"
                                            href="studio-booking?delete-booking=<?= $_SESSION['booking_details']['email'] ?>">
                                            <i class="fa-solid fa-trash"></i> Delete booking
                                        </a>
                                    </p>

                                </div>
                            <?php endif ?>


                            <div class="card-text">

                            </div>

                        </div>
                    </div>

                    <!-- image transition -->
                    <div class="card">
                        <div class="image-slider">
                            <div id="studio-images" class="image-container">
                                <img src="assets/images/music-production.jpeg" alt="" />
                                <img src="assets/images/podcast.png" alt="" />
                                <img src="assets/images/The-Best-Music-Production-Podcasts-1536x1023.jpg" alt="" />
                                <img src="assets/images/LS-208_InControlRoom.jpeg" alt="" />

                            </div>
                            <div class="controls">
                                <button class="ImageChanger" onclick="StudioImageNext()"><i
                                        class="fa-solid fa-caret-left"></i></button>
                                <button class="ImageChanger" onclick="StudioImageNext()"><i
                                        class="fa fa-solid fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>


    <div class="horizontal-line"></div>

<?php endif ?>

<!-- add studio booking  -->



</main>


<?php include base_path("app/views/partials/footer.php"); ?>