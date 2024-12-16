<aside>
    <ul class="un_aside">
        <a href="/" class="logo"> <img src="../assets/favicon.png" alt="" /> </a>
    </ul>

    <ul class="admin">
        <a style="width: 90%;text-decoration:none;" href="admin">
            <button title="Dashboard" class="side_nav  <?= $dashboardActive ?> "><i class="fas fa-dashboard"></i> <span>
                    Dashboard
                </span></button>
        </a>

        <a href="?events" style="width: 90%;text-decoration:none;">
            <button title="Events" class="side_nav
             <?= $EventActive ?> ">
                <i class="fa fa-calendar-alt" aria-hidden="true"></i> <span> Events </span>
            </button>
        </a>

        <a style="width: 90%;text-decoration:none;" href="?artists">
            <button title="Artists" class="side_nav <?= $ArtistActive ?>   ">
                <i class="fa fa-user" aria-hidden="true"></i> <span> Artists </span>
            </button>
        </a>
        <a style="width: 90%;text-decoration:none;" href="?musics">
            <button title="musics" class="side_nav <?= $MusicActive ?>   ">
                <i class="fa fa-music" aria-hidden="true"></i> <span> Musics </span>
            </button>
        </a>
        <a style="width: 90%;text-decoration:none;" href="?studio-booking">
            <button title="studio booking" class="side_nav  <?= $BookingActive ?>    ">
                <i class="fa fa-calendar" aria-hidden="true"></i> <span> Studio Booking </span>
            </button>
        </a>
    </ul>

    <ul class="admin">
        <a style="width: 90%;text-decoration:none;" href="?admin-logout">
            <button title="log out" class="side_nav">
                <i class="fa fa-sign-out" aria-hidden="true"></i> <span> Log Out </span>
            </button>
        </a>
    </ul>
</aside>