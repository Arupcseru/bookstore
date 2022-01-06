<?php
    $books="";
    if (file_exists('books.json')){
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    }
    else{
        $books=arrar();
    }
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
      Book Store
  </h1>
  <div class="container-fluid">
      <div class="row">
          <div class="col">
              <form class="row g-5 justify-content-md-center" action="search.php" method="post">
                  <div class="col-auto">
                      <label class="" style="font-size: large;">Search by Author : </label>
                  </div>
                  <div class="col-auto">
                      <input type="text" class="form-control" name="search" placeholder="Author Name" />
                  </div>
                  <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-3">Search</button>
                  </div>
              </form>
          </div>

          <div class="create-btn col">
              <a href="create.php">
                  <button class="btn btn-primary create-btn  ">Add Entry</button>
              </a>
          </div>
      </div>
  </div>

  <table class="table table-striped">
      <tr>
          <?php foreach (array_values($books)[0] as $key => $value): ?>
          <th><?php echo strtoupper($key) ?></th>
          <?php endforeach; ?>
          <th class="text-center">Action</th>
      </tr>
      <?php foreach ($books as $key => $book): ?>
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

              <td class="text-center">
                  <a href="<?php echo 'delete.php?' . 'id=' . $key; ?>" onclick="return confirm('Are you sure?')">
                      <button class="btn btn-danger">Delete</button>
                  </a>
              </td>
          </tr>
      <?php endforeach; ?>

  </table>
  </body>
</html>
