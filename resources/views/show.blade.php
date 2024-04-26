<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <table>
        <tr>
            <th>id</th>
            <th>pimg</th>
            <th>pname</th>
            <th>pprice</th>
        </tr>


@foreach ($data as $row )



        <tr>
            <td>{{ $row->id }}</td>
            <td> <img src="Product/{{ $row->pimg }}" alt="" height="200px" width="200px">  </td>
            <td>{{ $row->pname }}</td>
            <td>{{ $row->pprice }}</td>
            <td><a href="delete/{{ $row->id }}"> <button>delete</button></a></td>
            <td><a href="update/{{ $row->id }}"> <button>update</button></a></td>
        </tr>



        @endforeach
    </table>






</body>
</html>
