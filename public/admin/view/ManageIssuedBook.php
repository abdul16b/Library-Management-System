<h2 class="text-secondary mt-2 mb-4">Manage Issued Books</h2>
<table id="manage-book-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" class="d-none">ID</th>
            <th scope="col">Student Name</th>
            <th scope="col">Book Name</th>
            <th scope="col" class="d-none">ISBN</th>
            <th scope="col">Issue Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Returned Date</th>
            <th scope="col" class="d-none">Status</th>
            <th scope="col" class="d-none">Fine</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($manageissued as $book) {
            $issue = date("D, d M Y", strtotime($book['issuedDate']));
            $due = date("D, d M Y", strtotime($book['dueDate']));
            $returned = date("D, d M Y", strtotime($book['returnDate']));
        ?>
            <tr>
                <td class="d-none"><?= $book['issueBookID'] ?></td>
                <td><?= $book['username'] ?></td>
                <td><?= $book['bookName'] ?></td>
                <td class="d-none"><?= $book['ISBN'] ?></td>
                <td><?= $issue ?></td>
                <td><?= $due ?></td>
                <td class="<?= $book['status'] == 1 ? "text-dark" : "text-danger" ?>"><?= $book['status'] == 1 ? $returned : "Not yet Return" ?></td>
                <td class="d-none"><?= $book['status'] ?></td>
                <td class="d-none"><?= $book['fine'] ?></td>
                <td><a class="btn btn-info editIssued">Edit</a></td>
            </tr>
        <?php  }
        ?>

    </tbody>
</table>




<div class="modal fade" id="issueBookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-4">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Manage Issued</h4>
            </div>
            <form action="view/return.php" method="post">

                <input type="hidden" name="issuedID" id="issuedID">
                <p class="text-dark"> Student Name: <span id="issueStudName"></span></p>


                <p> Book Name: <span class=" text-dark issueBookName"></span></p>
                <p> ISBN: <span class="text-dark issueISBN"></span></p>
                <p>Issued Date: <span class="text-dark issueDate"></span></p>
                <p>Due Date: <span class="text-dark issueDueDate"></span></p>
                <p>Returned Date: <span class="text-dark issueReturnedDate"></span></p>
                <p>Fine: <input type="number" class="fineIssue" id="issueFine" name="issueFine"></p>


       

        <div id="submitReturn" class="container " style="margin-left: 50%;">
            <button type="submit" class="btn btn-success ml-4" name="returnBook"><i class="fa fa-share-square-o mr-2" aria-hidden="true"></i><span>Return Book
                </span></button>
        </div>
        </form>
        </div>
    </div>

</div>
</div>