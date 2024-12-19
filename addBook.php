<?php
session_start();
include('database.php');

if (isset($_POST['addBook'])) {


    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }

    $title = htmlspecialchars($_POST['title']);
    $author_ids = $_POST['AuthorName']; 
    $cover = htmlspecialchars($_POST['cover']);
    $description = htmlspecialchars($_POST['description']);
    $rating = htmlspecialchars($_POST['rating']); 
    $id = $_POST['id'];

    $query = "INSERT INTO books (title, cover_url, description, rating, isbn) VALUES (?, ?, ?, ?, ?);";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssssi", $title, $cover, $description, $rating, round(microtime(true) * 1000));

    if ($stmt->execute()) {
        $book_id = $connection->insert_id;

        $query = "INSERT INTO book_authors (book_id, author_id) VALUES (?, ?)";
        $stmt = $connection->prepare($query);

        foreach ($author_ids as $author_id) {
            $stmt->bind_param("ii", $book_id, $author_id);
            $stmt->execute();
        }

        header("location:authorHome.php?id=" . $id);
    } else {
        error_log("Error: " . $stmt->error); 
        echo "An error occurred, please try again later."; 
    }

    $stmt->close();
    $connection->close(); 
}
?>
