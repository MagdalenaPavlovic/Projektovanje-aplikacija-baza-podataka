<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style1.css">

    <title>Add a Book</title>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="index.php">Biblioteka - Library </a>
                        <a href="./php/logout.php" class="navbar-item">Odjavi se / Logout</a>
                    </nav>
                </header>


    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">

                <div class="card translucent-card text-white">
                    <div class="card-header">Add a Book</div>
                    <div class="card-body">
                        <p class="card-text">

                        <form action="php/add_book.php" method="post">
    <div class="form-group">
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" class="form-control" placeholder="Input ISBN" required>
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" class="form-control" placeholder="Input author" required>
    </div>
    <div class="form-group">
        <label for="name">Ime / Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Book title" required>
    </div>
    <div class="form-group">
        <label for="genre">Zanr / Genre:</label>
        <select name="genre" class="form-control" required>
            <option value="" selected disabled>Select Genre</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Science Fiction">Science Fiction</option>
            <option value="Mystery">Mystery</option>
            <option value="Romance">Romance</option>
            <option value="Novel">Novel</option>
            <option value="Other">Other</option>
        </select>
    </div>
                         <div class="form-group">
                         <label for="year">Godina / Year:</label>
                             <input type="number" name="year" class="form-control" placeholder="Input year" required>
                            </div>
                                <button type="submit" class="btn btn-primary">Povtrdi / Submit</button>
                                <a id="back-btn" href="panel.php" class="btn btn-primary">Nazad /Back</a>
                            </form>
                        </p>
                    </div>
                    <div class="card-footer">
                        <?php

                        if(isset($_REQUEST["success"]))
                            if($_REQUEST["success"] == 1){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Book successfully added!';
                                echo '</div>';
                            }
                        
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-4">

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