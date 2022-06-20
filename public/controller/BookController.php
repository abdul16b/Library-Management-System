<?php
include '../controller/StudentController.php';
class Book extends Students
{

  

    public function filterByCategory($category)
    {
    }

    public function returnBook($issueBookID)
    {
        if (mysqli_query($this->connect(), "update issuedBook set status='1' where issueBookID='" . $issueBookID . "'")) {
            return true;
        }
    }

    public function calculateFine()
    {

        $sql = "UPDATE issuedBook
        SET fine = CASE WHEN DATEDIFF(issuedDate,dueDate)>2 
                        THEN (DATEDIFF(issuedDate ,dueDate )) *10
                        ELSE 0 
                        END";
        $query = mysqli_query($this->connect(), $sql);
    }

    public function addBook($bookName, $bookDescription, $bookCover, $author, $category, $ISBN)
    {
        $bookDescription = mysqli_real_escape_string($this->connect(), $bookDescription);
        $sql = "INSERT INTO books (bookName, bookDescription, bookCover,author,category,ISBN)VALUES('" . $bookName . "','" . $bookDescription . "','" . $bookCover . "','" . $author . "','" . $category . "','" . $ISBN . "')";
        if (mysqli_query($this->connect(), $sql)) {
            return true;
        }
    }

    public function updateBook($bookName, $bookDescription, $bookCover, $author, $category, $ISBN, $id)
    {
        $bookDescription = mysqli_real_escape_string($this->connect(), $bookDescription);
        $sql = "UPDATE books SET bookName = '$bookName', bookDescription = '$bookDescription', bookCover = '$bookCover', author = '$author', category = '$category', ISBN = '$ISBN' WHERE bookID = $id";
        if (mysqli_query($this->connect(), $sql)) {
            return true;
        }
    }

    public function getAllData($type, $tableName)
    {
        $query = mysqli_query($this->connect(), "SELECT * FROM $tableName");
        $result = array();
        $count = 0;
        while ($record = mysqli_fetch_array($query)) {
            $result[] = $record;
            $count++;
        }
        return $type == "count" ? $count : $result;
    }

    public function getAllStudents($type)
    {
        $query = mysqli_query($this->connect(), "SELECT * FROM users where type=0");
        $result = array();
        $count = 0;
        while ($record = mysqli_fetch_array($query)) {
            $result[] = $record;
            $count++;
        }
        return $type == "count" ? $count : $result;
    }


    public function getAllBooks()
    {
        $sql = "SELECT  books.bookID,books.bookName,books.bookCover, books.bookDescription, books.author, category.categoryName FROM books INNER JOIN category ON category.categoryName=books.category";

        $data = array();
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getDataBy($id)
    {
        $query = mysqli_query($this->connect(), "SELECT * FROM issuedBook where USCID='" . $id . "'");
        return mysqli_num_rows($query);
    }

    public function countNotReturn($id)
    {
        return mysqli_num_rows(mysqli_query($this->connect(), "SELECT * FROM issuedBook where USCID='" . $id . "' and status=0"));
    }

    public function countBook($mode)
    {
        return mysqli_num_rows(mysqli_query($this->connect(), "SELECT * FROM issuedBook where status=$mode"));
    }

    public function countIssuedBook()
    {
        return mysqli_num_rows(mysqli_query($this->connect(), "SELECT * FROM issuedBook"));
    }

    public function manageUserBooks($studentID)
    {
        $sql = "SELECT users.username,issuedBook.issuedDate,issuedBook.issueBookID, issuedBook.dueDate,issuedBook.returnDate, issuedBook.fine,issuedBook.status,books.bookName,books.ISBN, issuedBook.status
        FROM users
        INNER JOIN issuedBook ON issuedBook.USCID = users.USCID
        INNER JOIN books ON issuedBook.bookID = books.bookID WHERE users.USCID='" . $studentID . "' ORDER BY issuedBook.issueBookID DESC";
        $data = array();
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function manageUserBooksAdmin()
    {
        $sql = "SELECT users.username,issuedBook.issuedDate,issuedBook.issueBookID, issuedBook.dueDate,issuedBook.returnDate, issuedBook.fine,issuedBook.status,books.bookName,books.ISBN, issuedBook.status
        FROM users
        INNER JOIN issuedBook ON issuedBook.USCID = users.USCID
        INNER JOIN books ON issuedBook.bookID = books.bookID ORDER BY issuedBook.issueBookID DESC";
        $data = array();
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }



    public function addCategory($categoryName, $categoryDescription, $categoryCover)
    {
        $sql  = "INSERT INTO `category` (categoryName, categoryDescription, categoryCover,status) VALUES ('$categoryName','$categoryDescription','$categoryCover','1')";
        $result = $this->connect()->query($sql);
        return $result;
    }


    public function updateCategory($categoryID, $categoryName, $categoryDescription, $categoryCover)
    {
        $sql = "UPDATE category SET categoryName = '$categoryName', categoryDescription = '$categoryDescription', categoryCover = '$categoryCover' WHERE categoryID = $categoryID ";
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function updateCategoryStatus($categoryID, $status)
    {
        $categoryStatus = $status == 1 ? 0 : 1;
        $sql = "UPDATE category SET status = '$categoryStatus' WHERE categoryID = $categoryID ";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function updateStudentStatus($userID, $status)
    {
        $studStatus = $status == 1 ? 0 : 1;
        $sql = "UPDATE users SET status = '$studStatus' WHERE userID = $userID ";
        $result = $this->connect()->query($sql);
        if ($result) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->connect()->error;
        }
    }
}
