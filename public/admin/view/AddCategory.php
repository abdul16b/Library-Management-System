<div class=" login-form col-sm-6">
    <div class="card-body">
        <h3 class="card-title text-center text-secondary">Add Category Here</h3>
        <hr class="text-secondary">
        <div class="card-text">
            <form action="../controller/AdminController.php" method="post">
                <div class="form-group">
                    <label for="BookTitle">Category Name:</label>
                    <input type="text" class="form-control form-control-sm" name="title"aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="Author">Category Description:</label>
                    <input type="text" class="form-control form-control-sm" name="description">
                </div>
                <div class="form-group">
                    <label for="category">Category Cover:</label>
                    <input type="text" class="form-control form-control-sm" name="cover">
                </div>

                <div class="container" style="margin-left: 50%;">
                    <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                    <button type="submit" class="btn btn-success ml-4" name="addCategory"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i><span>Add
                            Category</span></button>
                </div>
            </form>
        </div>
    </div>
</div>