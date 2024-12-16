<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex ai-center gap-5 margin-vertical">

            <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <h3>EDIT EVENTS</h3>
        </div>

        <div class="add-form ">
            <form method="post">
                <?php foreach ($events as $event): ?>

                <label for="name">Name</label>
                <input type="text" id="name" name="event-name" value="<?= $event['name'] ?>">
                <input type="hidden" name="event-id" value="<?= $event['id'] ?>">
                <label for="link">link</label>
                <input type="text" id="link" name="link" value="<?= $event['link'] ?>">
                <label for="place">place</label>
                <input type="text" id="place" name="place" value="<?= $event['place'] ?>">
                <label for="date">date</label>
                <input type="date" id="date" value="<?= $event['date'] ?>" name="event-date">
                <input type="submit" name="edit-events" value="save">

                <?php endforeach ?>
            </form>
        </div>
    </div>
</div>