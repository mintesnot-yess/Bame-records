<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex ai-center gap-5 margin-vertical">

            <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <h3>EDIT MUSICS</h3>
        </div>

        <div class="add-form ">
            <form method="post">
                <?php foreach ($musics as $music): ?>
                    <label for="name">artist name</label>
                    <input type="text" id="name" name="artist" value="<?= $music['artist'] ?>">
                    <input type="hidden" name="id" value="<?= $music['id'] ?>">
                    <label for="title">title</label>
                    <input type="text" id="title" name="title" value="<?= $music['title'] ?>">
                    <label for="link">link</label>
                    <input type="text" id="link" name="link" value="<?= $music['link'] ?>">
                    <input type="submit" name="edit-music" value="save">

                <?php endforeach ?>
            </form>
        </div>
    </div>
</div>