<?php

/**
 * Generic Helper to count how many vowels are in a given string.
 *
 * @param string $string
 * @param string $type
 * @return int
 */
    function count_phonemes(string $string, string $type = 'vowels') : int {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        $string = strtolower($string);

        for ($i = 0; $i < strlen($string); $i++) {
            $isVowel = in_array($string[$i], $vowels);

            if (($type === 'vowels' && $isVowel) || ($type === 'consonants' && !$isVowel)) {
                $count++;
            }
        }

        return $count;
    };
