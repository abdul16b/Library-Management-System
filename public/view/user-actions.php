<!DOCTYPE html>
<html lang="en">

<head>
  <title>Actions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="logo-brand.png" type="image/x-icon">
  <?php include "../includes/link.php" ?>
  <link rel="stylesheet" href="../../src/css/book-index-nav.css">
  <link rel="stylesheet" href="../../src/css/wave.css">
  <script src="../../src/js/search.js"></script>
  <link rel="stylesheet" href="../../src/css/user-actions.css">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" class="bg-header" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,256L60,229.3C120,203,240,149,360,138.7C480,128,600,160,720,165.3C840,171,960,149,1080,117.3C1200,85,1320,43,1380,21.3L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>

  <?php include "../includes/header.php" ?>

  <?php
  $borrowed = $controller->manageUserBooks($user['USCID']);

  ?>
  <div class="container mt-5   p-4">
    <h3 class="text-secondary p-4 shadow  border-bottom">Manage Borrowed Books</h3>
    <div class="container mt-5">

      <table id="manage-books" class="table mb-4 table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Book Name</th>
            <th scope="col">ISBN</th>
            <th scope="col">Issued Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Return Date</th>
            <th scope="col">Fine in(USD)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($borrowed as $borrow) {
            $issue = date("D, d M Y", strtotime($borrow['issuedDate']));
            $due = date("D, d M Y", strtotime($borrow['dueDate']));
            $return = date("D, d M Y", strtotime($borrow['returnDate']));
          ?>
            <tr>
              <td><?= $borrow['bookName'] ?></td>
              <td><?= $borrow['ISBN'] ?></td>
              <td><?= $issue ?></td>
              <td><?= $due ?></td>
              <td class="<?= $borrow['status'] == 0 ? "text-danger" : "text-dark" ?>"><?= $borrow['status'] == 0 ? "Not Yet Return" : $return ?></td>
              <td><?= $borrow['fine'] ?></td>
            </tr>
          <?php  }
          ?>

        </tbody>
      </table>

    </div>

  </div>

</body>
<script>
  $(document).ready(function() {
    $('#manage-books').DataTable();
  });
</script>

</html>