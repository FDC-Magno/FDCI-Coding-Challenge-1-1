<?php
    require 'Piglatin.php';
    $converted_word = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST['word'];
        if(empty($word)) { 
            $converted_word = '<div class="text-danger">Please enter a word</div>'; 
            return;
        }
        $pig_latin = new PigLatin($word);
        $converted_word = $pig_latin->convert();
    }
?>