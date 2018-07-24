<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-primary">Create category</h1>
    <ul>
        <li>
            <a href="/admin/category/create">Create New</a>
        </li>
        <li>
            <a href="/admin/category">List</a>
        </li>
    </ul>
    <div class="form-group">
        <form action="/admin/category" method="post">
            {{csrf_field()}}
            <div>
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description">
            </div>
            <div>
                <input type="submit" value="Save" class="btn-primary">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
