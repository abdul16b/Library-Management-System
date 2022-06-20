<div class="container">
          <div class="row">
            <div class="col-md-4  p-2">
              <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers"><?= $countCategory ?></span>
                <span class="count-name">Categories</span>
              </div>
            </div>

            <div class="col-md-4 p-2">
              <div class="card-counter danger">
                <i class="fa fa-book"></i>
                <span class="count-numbers"><?= $countBook ?></span>
                <span class="count-name">Books</span>
              </div>
            </div>

            <div class="col-md-4  p-2">
              <div class="card-counter success">
                <i class="fa fa-users"></i>
                <span class="count-numbers"><?= $books->getAllStudents("count") ?></span>
                <span class="count-name">Students</span>
              </div>
            </div>

            <div class="col-md-4  p-2">
              <div class="card-counter warning">
                <i class="fa fa-book"></i>
                <span class="count-numbers"><?= $countAllIssued ?></span>
                <span class="count-name">Times Book Borrowed</span>
              </div>
            </div>

            <div class="col-md-4  p-2">
              <div class="card-counter info">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers"><?= $countReturnedBook ?></span>
                <span class="count-name">Times Book Returned</span>
              </div>
            </div>

            <div class="col-md-4  p-2">
              <div class="card-counter danger">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers"><?= $countNotReturnedBook ?></span>
                <span class="count-name">Times Book Not Returned</span>
              </div>
            </div>

          </div>
        </div>
