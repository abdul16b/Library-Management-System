<h2 class="text-secondary mt-2">Manage Students</h2>
<table id="manage-students-table" class="table mb-4 table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">USCID</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($students as $student) {
        ?>
            <tr>
                <td><?= $student['username'] ?></td>
                <td><?= $student['USCID'] ?></td>
                <td><?= $student['email'] ?></td>
                <td class="<?= $student['status'] == 1 ? "text-success" : "text-danger" ?>"><?= $student['status'] == 1 ? "Active" : "Blocked" ?></td>

                <td><a class="btn btn-warning statusStudent" data-status="<?= $student['status'] ?>" data-id="<?= $student['userID'] ?>">
                        <?= $student['status'] == 1 ? "Deactivate" : "Activate" ?></td>
            </tr>
        <?php  }
        ?>

    </tbody>
</table>



<div class="modal fade" id="statusStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  p-4">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Are you sure to update the status</h4>
            </div>
            <form action="../controller/AdminController.php" method="post">

                <input type="hidden" class="form-control form-control-sm" id="userID" name="id">
              
                <input type="hidden" class="form-control form-control-sm" id="userStatus" name="status">


                <div class="container" style="margin-left: 50%;">
                    <button type="submit" class="btn btn-success ml-4 mt-2" name="updateStudentStatus" id="addCategory"><i class="fa fa-share-square-o mr-2" aria-hidden="true"></i><span>Update Status
                            </span></button>
                </div>
            </form>
        </div>

    </div>
</div>