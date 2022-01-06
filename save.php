<?php
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);
print_r($_GET);
echo "<br>";
// print_r($books);
// echo "<br>";
if (isset($_GET['title'])){
    $new_book=array($_GET);
// print_r($new_book);
// echo "<br>";
    $books = array_merge($books,$new_book);
// var_dump($books);
// print_r($books);
    $booksJson = json_encode($books);
// var_dump($booksJson);
    file_put_contents(__DIR__ . '/books.json', $booksJson);
}



// $looking = isset($_GET['title']) || isset($_GET['author']);

header('Location: index.php');
exit();
?>