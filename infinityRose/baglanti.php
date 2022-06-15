<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=infinity;charset=utf8", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}// veri tabanı bağlantısı için

?>

