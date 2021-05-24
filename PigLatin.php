<?php
/**
 * A class that helps convert an array of words into piglatin
 * @author fdc-juno
 * @param Array $words
 * @return String $converted_word
 */
class PigLatin {
    private $words = [];
    private $suffix = 'way';

    //instantiate words to prevent null entities
    function __construct($words) {
        $this->words = explode(" ", $words);
    }

    //piglatin converter
    public function convert() {
        $converted_word = [];
        foreach ($this->words as $word) {
            //checks if the first letter is a vowel or not
            $pos = strcspn(strtolower($word), "aeiou"); 
            $converted_word[] = substr($word, $pos) . ($pos == 0 ? '' : substr($word, 0, $pos)) . ($pos > 0 ? substr($this->suffix, 1) : $this->suffix);
        }
        return join(" ", $converted_word);
    }
}
?>