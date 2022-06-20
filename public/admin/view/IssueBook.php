
<h2 class="text-secondary"> Issue a New Book</h2>
<div class="panel-body">
    <form action="view/issue.php" method="POST">

        <div class="form-group">
            <label>Student id<span style="color:red;">*</span></label>
            <input class="form-control  w-50" type="text" name="studentid" id="studentid" onBlur="getstudent()" autocomplete="off" required />
        </div>

        <div class="form-group">
            <span id="get_student_name" style="font-size:16px;"></span>
        </div>
        <div class="form-group">
            <label>ISBN Number<span style="color:red;">*</span></label>
            <input class="form-control w-50" type="text" name="bookid" id="bookid" onBlur="getbook()" required="required" />
        </div>

        <div class="form-group">
            <select class="form-control  w-50" name="bookdetails" id="get_book_name" readonly>
            </select>
        </div>
        <button type="submit" class="btn btn-success ml-4" name="bookIssue"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i><span>
                            Issue Book</span></button>
    </form>
</div>

