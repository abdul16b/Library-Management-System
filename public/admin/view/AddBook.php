<div class=" login-form col-sm-6">
    <div class="card-body">
        <h3 class="card-title text-center text-secondary">Add Books Here</h3>
        <hr class="text-secondary">
        <div class="card-text">
            <form action="../controller/AdminController.php" method="POST">
                <div class="form-group">
                    <label for="BookTitle">Book Name:</label>
                    <input type="text" class="form-control " required id="BookTitle" name="bookTitle" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="Author">Book Description:</label>
                    <input type="text" class="form-control " required id="Author" name="bookDescription">
                </div>
                <div class="form-group">
                    <label for="category">Book Cover:</label>
                    <input type="text" class="form-control" required id="category" name="bookCover">
                </div>
                <div class="form-group">
                    <label for="BookNum">Author:</label>
                    <input type="text" class="form-control " required  name="Author">
                </div>
                <div class="form-group">
                    <label for="BookNum">Genre</label>
                    <select name="category" class="form-control">
                        <option>Choose Genre</option>
                        <?php foreach ($category as $data) { ?>
                            <?= $data['categoryName'] ?>
                            <option value="<?= $data['categoryName'] ?>"><?= $data['categoryName'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="BookNum">ISBN:</label>
                    <input type="text" class="form-control "  name="ISBN">
                </div>


                <div class="container" >
                    <input type="submit" class="btn btn-success float-right" value="Add Now" id="add" name="addbook">

                </div>
            </form>
        </div>
    </div>
</div>