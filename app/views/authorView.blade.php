<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-striped">
    <tr><td>ID</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    @for($i=0;$i<=$response.length+1;$i++)

       <tr>
        <td>{{$response[$i]['id']}}</td>
        <td>{{$response[$i]['name']}}</td>
        <td>{{$response[$i]['email']}}</td>
    </tr>

    @endfor
</table>

</body>
</html>





