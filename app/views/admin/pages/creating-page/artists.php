     <div class="cards_contaier page-animation">
         <div class="table_container user_table">
             <div class="d-flex ai-center gap-5 margin-vertical">

                 <button onclick="historyBack()" style="display:block; color: #fff;width: fit-content;"
                     class="btn d-block">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                 </button>
                 <h3>ADD ARTIST</h3>
             </div>

             <div class="add-form ">
                 <form method="post" enctype="multipart/form-data">
                     <label for="name">Name</label>
                     <input type="text" id="name" name="artist_name" required>
                     <label for="link">link</label>
                     <input type="text" id="link" name="link" required>
                     <label for="picture">picture</label>
                     <input type="file" id="picture" name="artist_image" required>
                     <label for="catagoty">artist catagoty</label>
                     <input type="text" id="catagoty" name="artist_catagoty" required>
                     <input type="submit" name="add-artists" value="add">

                 </form>
             </div>
         </div>
     </div>
