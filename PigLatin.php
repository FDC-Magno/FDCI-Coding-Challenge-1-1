<?php

class PigLatin {
    private $word = '';
    private $suffix = 'way';
    function __construct($word) {
        $this->word = $word;
    }

    public function convert() {
        $is_the_first_letter_a_vowel = preg_match('/^[aeiou]/i', $this->word[0]);
        $converted_word = (!$is_the_first_letter_a_vowel ? substr($this->word, 1) : $this->word) . ($is_the_first_letter_a_vowel ? '' : $this->word[0]) . (!$is_the_first_letter_a_vowel ? substr($this->suffix, 1) : $this->suffix);
        return $converted_word;
    }
}
?>