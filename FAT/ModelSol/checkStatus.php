<?php
    $bookQuery = $_POST["title"];
    
    $servername = 'localhost';
    $username = 'sample';
    $password = 'daphna';
    $dbname = 'libDB';
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
        
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
    }
    echo "Connected successfully<br>";

 // Create database
    $sql = "CREATE DATABASE libDB";
    if ($conn->query($sql) === TRUE) {
    echo "Database libDB created successfully<br>";

    } else {
    echo "Error creating database: " . $conn->error."<br>";
    }
    $conn = new mysqli($servername, $username, $password,$dbname);
    $sql = "CREATE TABLE bookList (
        BookTitle VARCHAR(50) PRIMARY KEY,
        STAT VARCHAR(30) NOT NULL
        )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table bookList created successfully in libDB <br>";
    } else {
      echo "Error creating table: " . $conn->error."<br>";
    }
    $sql = "INSERT INTO bookList (BookTitle,STAT)
    VALUES ('Sapiens', 'Available')";
    if (mysqli_query($conn,$sql) === TRUE) {
        echo "New record created successfully<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error."<br>";
      }
    $sql = "INSERT INTO bookList (BookTitle,STAT)
    VALUES ('The C Programming Language', 'Issued')";
    if (mysqli_query($conn,$sql) === TRUE) {
        echo "New record created successfully<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error."<br>";
      }
    $sql = "INSERT INTO bookList (BookTitle,STAT)
    VALUES ('Oath of Vayuputras', 'Issued')";
    if (mysqli_query($conn,$sql) === TRUE) {
        echo "New record created successfully<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error."<br>";
      }
    $sql = "INSERT INTO bookList (BookTitle,STAT)
    VALUES ('CLRS', 'Available')";

if (mysqli_query($conn,$sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error."<br>";
  }

    $sql="SELECT * FROM bookList WHERE BookTitle = '".$bookQuery."'";
    $result = mysqli_query($conn,$sql);
    $book_status = mysqli_fetch_array($result);
    if(!$book_status)
        echo "Sorry we do not have this title";
    else{
    if($book_status["STAT"]=="Available")
        echo "Happy reading...<br>";
    else if($book_status["STAT"]=="Issued")
        echo "Sorry...Please wait<br>";
    }
?>