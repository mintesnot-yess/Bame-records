<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex gap-5 margin-vertical">
            <a href="/admin" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
        </div>
        <!-- #region -->
        <header>
            <h2> Studio Booking</h2>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Booking date</th>
                    <th>time</th>
                    <th>user name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>clreated date</th>
                </tr>
            </thead>

            <?php foreach ($bookings as $booking): ?>

            <tbody>
                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <i class="fas fa-calendar-check    "></i>
                            <span>
                                <?= $booking['date'] ?>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <?= $booking['time'] ?>
                        </div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <?= $booking['name'] ?>
                        </div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <?= $booking['email'] ?>
                        </div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <?= $booking['phone'] ?>
                        </div>
                    </td>
                    <td>
                        <div class=" contents ">
                            <?= $booking['created-date'] ?>
                        </div>
                    </td>

            </tbody>
            <?php endforeach ?>

        </table>
    </div>
</div>
<div class="cards_contaier page-animation">

    <div class="table_container user_table">
        <div class="d-flex gap-5 margin-vertical">

            <a href="?add-studio-free-time" type="submit"
                style="display:bloc; color: #fff;width: fit-content;text-decoration: none" class="btn d-block">
                <i class="fa  fa-plus" aria-hidden="true"></i> ADD STUDIO FREE TIME
            </a>

        </div>
        <header>
            <h1> STUDIO FREE TIME</h1>
        </header>


        <table>
            <thead>
                <tr>
                    <th>times</th>
                    <th>__</th>

                </tr>
            </thead>

            <?php foreach ($studioFreeTimes as $studioFreeTime): ?>
            <tbody>
                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <i class="fas fa-clock    "></i>
                            <span>
                                <?= $studioFreeTime['free-time-1'] ?>
                            </span>_
                            <span>
                                <?= $studioFreeTime['free-time-2'] ?>
                            </span>
                        </div>
                    </td>

                    <td>
                        <div class=" contents ">
                            <span>
                                <a href="?delete-studio-free-time= <?= $studioFreeTime['id'] ?>" class="btn">
                                    <i class="fa fa-trash-alt    "></i>

                                </a>
                            </span>
                        </div>
                    </td>
                </tr>

                <!-- #region -->


            </tbody>


            <?php endforeach ?>



        </table>
    </div>
</div>