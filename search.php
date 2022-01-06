<?php
$books="";
if (file_exists('books.json')){
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}
$author=$_POST['search'];
$result=array();
foreach ($books as $book){
    if($book['author']== $author){
        array_push($result,$book);
    }
}
//print_r($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<h1 class="title">
    Search Result for "<?php echo $author?>"
</h1>
<div class="container-fluid">
<div class="create-btn">
    <a href="index.php">
        <button class="btn btn-primary create-btn">Back</button>
    </a>
</div>
</div>
<br>
<br>
<table class="table table-striped">
    <tr>
        <?php foreach (array_values($books)[0] as $key => $alue): ?>
            <th><?php echo strtoupper($key) ?></th>
        <?php endforeach; ?>
        <th>Action</th>
    </tr>
    <?php foreach ($result as $key => $book): ?>
        <tr>
            <?php foreach ($book as $value):
//                  if($value==1 || $value==0):
//                  ?>
                <!--                    <td>--><?php //echo $value ? "Yes": "No" ?><!--</td>-->
                <!--              --><?php //else: ?>
                <!--                  <td>--><?php //echo $value ?><!--</td>-->
                <!--              --><?php //endif ?>

                <td><?php echo $value ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>

