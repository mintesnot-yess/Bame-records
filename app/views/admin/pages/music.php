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
                        <a href="?delete-event=<?= $event['id'] ?>" class=" danger_btn btn1  ">delete</a>
                    </td>
                    <td>
                        <a href="?delete-event=<?= $event['id'] ?>" class=" success_btn  btn1  ">edit</a>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>