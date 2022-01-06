
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<h1 class="title"> Enter book information</h1>

<div class="form-container">
    <form action="save.php" method="get">
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="fname">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <p>Available:</p>
        <input type="radio" id="available" name="available" value="true">
        <label for="html">Available</label><br>
        <input type="radio" id="not available" name="available" value="false">
        <label for="css">Not Available</label><br>

        <label for="lname"> Pages:</label><br>
        <input type="text" id="page" name="page">

        <label for="lname"> ISBN:</label><br>
        <input type="text" id="isbn" name="isbn">

        <input type="submit" value="Submit">
    </form>

</div>

</body>
</html>

