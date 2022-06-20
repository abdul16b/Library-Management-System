<h2>List of Categories</h2><br>
<table id="manage-category" class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($category as $category) {
        ?>
            <tr>
                <td><?= $category['categoryID'] ?></td>
                <td><?= $category['categoryName'] ?></td>
                <td><?= $category['categoryDescription'] ?></td>
                <td class="<?= $category['status'] == 1 ? "text-success" : "text-danger" ?>"><?= $category['status'] == 1 ? "Active" : "Blocked" ?></td>
                <td><a class="btn btn-success editCategory" data-description="<?= $category['categoryDescription'] ?>" data-cover="<?= $category['categoryCover'] ?>" data-name="<?= $category['categoryName'] ?>" data-id="<?= $category['categoryID'] ?>">Update</a>
                    <a class="btn btn-warning statusCategory" data-status="<?= $category['status'] ?>" data-id="<?= $category['categoryID'] ?>">
                        <?= $category['status'] == 1 ? "Deactivate" : "Activate" ?>
                </td>
            </tr>

        <?php

        }
        ?>
    </tbody>
</table>

<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  p-4">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Update Category</h4>
            </div>
            <form action="../controller/AdminController.php" method="post">

                <input type="hidden" class="form-control form-control-sm" id="catID" name="id">
                <div class="form-group">
                    <label for="BookTitle">Category Name:</label>
                    <input type="text" class="form-control form-control-sm" id="catName" name="title" id="BookTitle" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="Author">Category Description:</label>
                    <input type="text" class="form-control form-control-sm" id="catDescription" name="description">
                </div>
                <div class="form-group">
                    <label for="category">Category Cover:</label>
                    <input type="text" class="form-control form-control-sm" id="catCover" name="cover">
                </div>


                <div class="container" style="margin-left: 50%;">
                    <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                    <button type="submit" class="btn btn-success ml-4" name="updateCategory" ><i class="fa fa-share-square-o mr-2" aria-hidden="true"></i><span>Update Category
                            </span></button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="modal fade" id="statusCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  p-4">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Are you sure to update the status</h4>
            </div>
            <form action="../controller/AdminController.php" method="post">

                <input type="hidden" class="form-control form-control-sm" id="statusID" name="id">
              
                <input type="hidden" class="form-control form-control-sm" id="catStatus" name="status">


                <div class="container" style="margin-left: 50%;">
                    <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                    <button type="submit" class="btn btn-success ml-4 mt-2" name="updateCategoryStatus" ><i class="fa fa-share-square-o mr-2" aria-hidden="true"></i><span>Update Status
                            </span></button>
                </div>
            </form>
        </div>

    </div>
</div>