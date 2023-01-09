<?php 
    define("DB_HOST" , "localhost");
    define("DB_USER" ,  "root");
    define("DB_PASSWORD" , "");
    define("DB_NAME" ,  "blog_website");
    try {
         $connection = mysqli_connect(DB_HOST , DB_USER, DB_PASSWORD ,DB_NAME);
    }catch (mysqli_sql_exception $error) {
        print_r($error->getMessage());
    }
?>