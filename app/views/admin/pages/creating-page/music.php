<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex ai-center gap-5 margin-vertical">

            <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <h3>ADD MUSIC</h3>
        </div>

        <div class="add-form ">
            <form method="post" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" id="name" name="artist_name" required>
                <label for="title">Music Title</label>
                <input type="text" id="title" name="title" required>
                <label for="link">link</label>
                <input type="text" id="link" name="link" required>
                <label for="albem-art">Albem Art</label>
                <input type="file" id="albem-art" name="albem-art" required>
                <label for="music">music</label>
                <input type="file" id="music" name="music" required>
                <input type="submit" name="add-musics" value="add">
            </form>
        </div>
    </div>
</div>