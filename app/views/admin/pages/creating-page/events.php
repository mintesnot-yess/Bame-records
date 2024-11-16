  <div class="cards_contaier page-animation">
      <div class="table_container user_table">
          <div class="d-flex ai-center gap-5 margin-vertical">

              <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;"
                  class="btn d-block">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </button>
              <h3>ADD EVENTS</h3>
          </div>

          <div class="add-form ">
              <form method="post" enctype="multipart/form-data">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="event_name" required>
                  <label for="link">link</label>
                  <input type="text" id="link" name="link" required>
                  <label for="place">place</label>
                  <input type="text" id="place" name="place" required>
                  <label for="picture">picture</label>
                  <input type="file" id="picture" name="event_image" required>
                  <label for="date">date</label>
                  <input type="date" id="date" name="event_date" required>
                  <input type="submit" name="add-events" value="add">
              </form>
          </div>
      </div>
  </div>
