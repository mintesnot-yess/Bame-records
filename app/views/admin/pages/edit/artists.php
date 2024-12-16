<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex ai-center gap-5 margin-vertical">

            <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <h3>EDIT ARTISTS</h3>
        </div>

        <div class="add-form ">
            <form method="post">
                <?php foreach ($artists as $artist): ?>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="artist-name" value="<?= $artist['name'] ?>" required>
                    <input type="hidden" name="artist-id" value="<?= $artist['id'] ?>">
                    <label for="link">link</label>
                    <input type="text" id="link" name="link" value="<?= $artist['link'] ?>" required>
                    <label for="catagoty">artist catagoty</label>
                    <input type="text" id="catagoty" name="artist_catagoty" value="<?= $artist['catagory'] ?>" required>
                    <input type="submit" name="edit-artist" value="save">
                <?php endforeach ?>
            </form>
        </div>
    </div>
</div>