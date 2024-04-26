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
    <h1>zoomm</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3"><img src="../Product/{{$row->pimg}}" alt="" class="col-md-12"></div>
        <div class="col-md-9"><h1>content</h1>
    
    <h1>{{$row->pname}}</h1>
    <h2>{{$row->pprice}}</h2>
    
    </div>
    </div>
</div>




</body>
</html>