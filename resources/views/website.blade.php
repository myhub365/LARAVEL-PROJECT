<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<h1>MY WEBSITE</h1>


<div class="container">
    <div class="row">




@foreach($data as $row)
        <div class="col-md-4">
<a href="zoom/{{ $row->id }}">
<h1>{{$row->pname }}</h1>
<h1>{{$row->pprice }}</h1>
<img src="Product/{{$row->pimg }}" alt="" class="col-md-12">
</a>
        </div>

@endforeach





    </div>
</div>


    
</body>
</html>