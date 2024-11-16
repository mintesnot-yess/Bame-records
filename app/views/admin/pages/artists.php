 <div class="cards_contaier page-animation">
     <div class="table_container user_table">
         <div class="d-flex gap-5 margin-vertical">

             <a href="/admin" style="display:block; color: #fff;width: fit-content;" class="btn d-block">
                 <i class="fa fa-arrow-left" aria-hidden="true"></i>
             </a>

             <a href="?add-artist" type="submit"
                 style="display:block; color: #fff;width: fit-content;text-decoration: none" class="btn d-block">
                 <i class="fa  fa-plus" aria-hidden="true"></i> add artists
             </a>
         </div>
         <header>
             <h1> Artists</h1>
         </header>
         <table>
             <thead>
                 <tr>
                     <th>auth</th>
                     <th>date</th>
                     <th>options</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($artists as $artist): ?>
                 <tr id="45 ">
                     <td>
                         <div class=" contents ">
                             <img class=" user-img-border-10 " src="../assets/images/artist/<?=$artist['picture']?>" />
                             <span>
                                 <a href="<?=$artist['link']?>" target="_blank"> <?=$artist['name']?></a>
                             </span>
                         </div>
                     </td>
                     <td>
                         <div class="contents"><?=$artist['created_at']?></div>
                     </td>
                     <td>
                         <a href="?delete-artist=<?=$artist['id']?>" class=" danger_btn btn1  ">delete</a>
                     </td>
                 </tr><?php endforeach;?>
             </tbody>
         </table>
     </div>
 </div>