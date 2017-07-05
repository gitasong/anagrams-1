<?php

    class Anagram
    {
        function checkAnagram($main_word, $input_0, $input_1, $input_2)
        {
            $result_arr = [$input_0 => $input_0, $input_1 => $input_1, $input_2 => $input_2];
            $anagram_arr = [$input_0 => $input_0, $input_1 => $input_1, $input_2 => $input_2];

            $main_word_explode = str_split($main_word);
            sort($main_word_explode);
            $main_word_alph = implode($main_word_explode);

            foreach ($anagram_arr as $key => $value)
            {
                $new_value = str_split($value);
                sort($new_value);
                $value = implode("", $new_value);
                if ($value == $main_word_alph) {
                    $result_arr[$key] = true;
                } else {
                    $result_arr[$key] = false;
                }
                var_dump($main_word_alph);
                var_dump($value);
            }
            return $result_arr;
        }
    }
?>
