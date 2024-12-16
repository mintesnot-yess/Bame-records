<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex gap-5 margin-vertical">
            <a href="/admin" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a href="?add-events" type="submit"
                style="display:block; color: #fff;width: fit-content;text-decoration: none" class="btn d-block">
                <i class="fa  fa-plus" aria-hidden="true"></i> add events
            </a>
        </div>
        <header>
            <h1> Events</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>place</th>
                    <th>date</th>
                    <th>_</th>
                    <th>_</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr id="45 ">
                    <td>
                        <div class=" contents ">
                            <img class=" user-img-border-10 " src="../assets/images/event/<?= $event['picture'] ?>" />
                            <span>
                                <a href="<?= $event['link'] ?>" target="_blank"> <?= $event['name'] ?></a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=" contents "><?= $event['place'] ?></div>
                    </td>
                    <td>
                        <div class=" contents "><?= $event['date'] ?></div>
                    </td>
                    <td>
                        <a href="?edit-events=<?= $event['id'] ?>" class=" btn  ">
                            <i class="fa fa-edit    "></i>

                        </a>
                    </td>
                    <td>
                        <a href="?delete-event=<?= $event['id'] ?>" class=" btn  ">
                            <i class="fa fa-trash-alt    "></i>

                        </a>
                    </td>
                </tr><?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>