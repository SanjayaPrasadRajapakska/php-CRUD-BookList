<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container "><!--style="max-width: 600px;":meda center krimata yodai-->
        <header class="d-flex justify-content-between my-4"><!--style="display: flex:d-fle-->
            <h3>Add New Book</h3>
            <a href="index.php" class="btn btn-primary">Back</a>
        </header>

        <form action="process.php" method="post">
            <div class="form-element my-4"><!--my-4:margin top & bottom-->
                <input type="text" name="title" placeholder="Book Title:" class="form-control">
            </div>
            <div class="form-element my-4">
                <input type="text" name="author" placeholder="Author Name:" class="form-control">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Fairy Tail">Fairy Tail</option>
                    <option value="Novel">Novel</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" name="description" placeholder="Book Description:" class="form-control">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" placeholder="Add Book:" class="btn btn-success" class="form-control">
            </div>

        </form>
    </div>





</body>

</html>