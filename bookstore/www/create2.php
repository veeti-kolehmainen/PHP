<?php 

require_once("../db_config.php");

if(isset($_POST["createRecord"])) {

    $height = filter_var($_POST["height"], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST["title"], FILTER_UNSAFE_RAW);
    $author = filter_var($_POST["author"], FILTER_UNSAFE_RAW);
    $genre = filter_var($_POST["genre"], FILTER_UNSAFE_RAW);
    $publisher = filter_var($_POST["publisher"], FILTER_UNSAFE_RAW);
    $query = "INSERT INTO books (title, author, genre, height, publisher) VALUES (:title, :author, :genre, :height, :publisher)";
    $result = $db_connection -> prepare($query);
    $result->execute([
        "title" => $title,
        "author" => $author,
        "genre" => $genre,
        "height" => $height,
        "publisher" => $publisher,
    ]);
    $rows = $result->rowCount();
    if($rows == 1) {
        header("Location: list-books.php");
    } else {
        $error_message = "Record creation failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <br>
    <div class="container">
        <?php 
        if(isset($error_message)) {
            ?>
            <div class="alert alert success">
                <strong>Error!</strong>
                <?php echo $error_message; ?>
            </div>
            <?php
        }
        ?>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" name="author">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="genre" name="genre">
                </div>
            </div>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="height" name="height">
                </div>
            </div>
            <div class="form-group row">
                <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="publisher" name="publisher">
                </div>
            </div>

            <button type="submit" name="createRecord" class="btn btn-success">Add Record</button>
        </form>
    </div>
    
</body>
</html>