<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>List category</h1>
        <a href="/admin/category/create" class="btn btn-primary">Create New</a>
        <div class="btn-group">
            <button type="button"class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                List
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/admin/product">Cellphone</a>
                <a class="dropdown-item" href="/admin/product">Laptop</a>
                <a class="dropdown-item" href="/admin/product">Accessories</a>
                <a class="dropdown-item" href="/admin/product">Smart Home Devices</a>
                <a class="dropdown-item" href="/admin/product">Case</a>
            </div>
        </div>
        <ul class="list-group">
            @foreach($categories_in_view as $item)
                <li class="list-group-item">
                    <a href="/admin/category/{{$item -> id}}">{{$item -> name}}</a>
                    <a href="/admin/category/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                    <span class="btn-delete" id="{{$item-> id}}">Delete</span>
                </li>
            @endforeach
        </ul>
    </div>
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/category/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
</body>
</html>
