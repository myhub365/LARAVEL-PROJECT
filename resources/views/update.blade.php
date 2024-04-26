<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="\edit" method="post" enctype="multipart/form-data">

    @csrf
<input type="hidden" name="id" value="{{ $row->id }}">


  <div class="container">
    <h1>update</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <img src="../Product/{{ $row->pimg }}" alt="">

    <label for="email"><b>Product Image</b></label>
    <input type="file" placeholder="Enter " name="pimg" id="email" required value="{{ $row->pimg }}">
<br>
<br>
<br>
    <label for="psw"><b>Product Name</b></label>
    <input type="text" placeholder="Enter " name="pname" id="psw" required value="{{ $row->pname }}">

    <label for="psw"><b>Product Price</b></label>
    <input type="number" placeholder="Enter " name="pprice" id="psw" required value="{{ $row->pprice }}">


    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
