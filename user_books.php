<?php
session_start();
include_once("php/dbconnection.php");
if (!isset($_SESSION["priv"])) {
    header("Location: index.php?error=2");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style1.css">

    <title>User Books</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="panel.php">Biblioteka - Library</a>
                        <a href="./php/logout.php" class="navbar-item">Logout</a>
                    </nav>
                </header>

                <div class="container">
                    <div class="card translucent-card text-white">
                        <div class="card-header translucent-card">Lista knjiga / List of Books</div>
                        <div class="card-body translucent-card">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ISBN</th>
                                        <th>Author</th>
                                        <th>Ime / Name</th>
                                        <th>Zanr / Genre</th>
                                        <th>Godina / Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $statement = $mysqli->prepare("SELECT * FROM books WHERE user_id = ?");
                                    $user_id = $_SESSION["id"];
                                    $statement->bind_param('i', $user_id);
                                    $statement->execute();
                                    $result = $statement->get_result();

                                    if (!$result) {
                                        die('Database connection error!');
                                    }

                                    while ($books = $result->fetch_assoc()) {

                                    
                                    ?>

                                        <tr>
                                            <td><?php echo $books['id'] ?></td>
                                            <td><?php echo $books['isbn'] ?></td>
                                            <td><?php echo $books['autor'] ?></td>
                                            <td><?php echo $books['name'] ?></td>
                                            <td><?php echo $books['genre'] ?></td>
                                            <td><?php echo $books['year'] ?></td>
                                            <td>
                                                <?php
                                               if($_SESSION['priv'] === 0) 
                                                    echo '
                                                    <form method="post" action="php/return_book.php">
                                                        <input type="hidden" name="book_id" value="' . $books['id'] . '">
                                                        <button type="submit" class="btn btn-primary">Vrati / Return</button>
                                                    </form>';
                                                
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer translucent-card">
                            <?php
                           
                            if ($_SESSION['priv'] === 0) {
                                echo '
                            
                                <a id="add-book-btn" href="panel.php" class="btn btn-primary">Nazad / Back</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
