<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List category</h1>
    <ul>
        <li>
            <a href="/admin/product/create">Create New</a>
        </li>
        <li>
            <a href="/admin/product">List</a>
        </li>
    </ul>
    <ul>
        @foreach($list_obj as $item)
            <li>
                <a href="/admin/product/{{$item -> id}}">{{$item -> name}}</a>
                <a href="/admin/product/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                <span class="btn-delete" id="{{$item-> id}}">Delete</span>
            </li>
        @endforeach
    </ul>
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/product/" + currentId, true);
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