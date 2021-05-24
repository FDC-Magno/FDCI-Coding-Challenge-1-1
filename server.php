<?php
    //include the PagLatin class
    require 'Piglatin.php';
    $converted_word = "";
    $word= "";

    //checks if the request is post
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST['word'];
        //checks if the word input is empty
        if(empty($word)) { 
            $converted_word = '<div class="text-danger">Please enter a word</div>'; 
            return;
        }
        $pig_latin = new PigLatin($word);
        //convert word array to piglatin
        $converted_word = $pig_latin->convert();
    }
?>