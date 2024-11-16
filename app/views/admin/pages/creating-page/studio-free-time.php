<div class="cards_contaier page-animation">
    <div class="table_container user_table">
        <div class="d-flex ai-center gap-5 margin-vertical">

            <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <h3>ADD STUDIO FREE TIME</h3>
        </div>

        <div class="add-form ">
            <form method="post" enctype="multipart/form-data">
                <div class="d-flex" style=" gap:5px">
                    <input type="time" id="date" name="time-from" required>
                    <span> _ </span>
                    <input type="time" id="date" name="time-to" required>
                </div>
                <input type="submit" name="add-studio-free-time" value="add">
            </form>
        </div>
    </div>
</div>