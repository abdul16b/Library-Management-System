<h2>List of Books</h2><br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">BOOK ID</th>
              <th scope="col">Book Name</th>
              <th scope="col">Author</th>
              <th scope="col">Genre</th>
              <th scope="col">ISBN</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $post_data = $books->getAllData(null,"books");
            foreach ($post_data as $post) {
            ?>
              <tr>
                <td><?php echo $post["bookID"] ?></td>
                <td><?php echo $post["bookName"] ?></td>
                <td class="d-none"><?php echo $post["bookDescription"] ?></td>
                <td class="d-none"><?php echo $post["bookCover"] ?></td>
                <td><?php echo $post["author"] ?></td>
                <td><?php echo $post["category"] ?></td>
                <td><?php echo $post["ISBN"] ?></td>
                <td>
                  <button type="button" class="btn btn-primary editBook">Edit</button>
                </td>
 
              </tr>
            <?php

            }
            ?>
          </tbody>
        </table>


        
<div class="modal fade" id="editBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-4">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Update Book</h4>
            </div>
            <form action="../controller/AdminController.php" method="post">

            <div class="form-group">
                <input type="hidden" name="update_id" id="update_id">
                <label for="BookTitle">Book Name:</label>
                <input type="text" class="form-control " id="bookTitle" name="bookTitle" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="Author">Book Description:</label>
                <input type="text" class="form-control " id="bookDescription" name="bookDescription">
              </div>
              <div class="form-group">
                <label for="category">Book Cover:</label>
                <input type="text" class="form-control " id="bookCover" name="bookCover">
              </div>
              <div class="form-group">
                <label for="BookNum">Author:</label>
                <input type="text" class="form-control " id="author" name="Author">
              </div>
              <div class="form-group">
                    <label for="BookNum">Genre</label>
                    <select name="category" class="form-control">
                        <option>Choose Genre</option>
                        <?php foreach ($category as $data) { ?>
                            <option  value="<?= $data['categoryName'] ?>"><?= $data['categoryName'] ?></option>
                        <?php } ?>

                    </select>
                </div>

              <div class="form-group">
                <label for="BookNum">ISBN:</label>
                <input type="text" class="form-control " id="ISBN" name="ISBN">
              </div>

                <div class="container" style="margin-left: 50%;">
                    <button type="submit" class="btn btn-success ml-4" name="updateBook" ><i class="fa fa-share-square-o mr-2" aria-hidden="true"></i><span>Update Book
                            </span></button>
                </div>
            </form>
        </div>

    </div>
</div>