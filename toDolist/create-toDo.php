<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="handle-toDo.php" method="post" class="w-75 m-auto my-5">
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="Title">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input name="date" type="date" class="form-control" id="date">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-success" name="submit">Submit</button>
    </form>


<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>