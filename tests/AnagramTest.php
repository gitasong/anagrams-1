<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testCheckAnagramOneLetterVsOneLetter()
        {
            // Arrange
            $test_anagram = new Anagram;
            $main_word = "A";
            $input_0 = "T";
            $input_1 = "";
            $input_2 = "";

            // Act
            $result = $test_anagram->checkAnagram($main_word, $input_0, $input_1, $input_2);

            // Assert
            $this->assertEquals([$input_0 => false, $input_1 => false, $input_2 => false], $result);
        }
        function testCheckAnagramMultiLetter()
        {
            // Arrange
            $test_anagram = new Anagram;
            $main_word = "ON";
            $input_0 = "NO";
            $input_1 = "";
            $input_2 = "";

            // Act
            $result = $test_anagram->checkAnagram($main_word, $input_0, $input_1, $input_2);

            // Assert
            $this->assertEquals([$input_0 => true, $input_1 => false, $input_2 => false], $result);
        }
    }
?>
