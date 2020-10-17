<?php


    function answer_question($question) {
        $phrase_12346 = "Humpty dumpty sat on the wall";
        $phrase_5 = "--Humpty dumpty sat on the wall--";
        if ($question == 1) {
            echo "Phrase has " . strlen($phrase_12346) . " characters";
        }
        else if ($question == 2) {
            echo "Phrase has " . str_word_count($phrase_12346);
        }
        else if ($question == 3) {
            echo " Word 'sat' has index position " . strpos($phrase_12346, "sat"). " in the phrase";
        }
        else if ($question == 4) {
            echo "Our origional phrase was " . $phrase_12346 . ". Our new phrase is " . str_replace("wall", "fence", $phrase_12346);
        }
        else if ($question == 5) {
            $new_string = rtrim($phrase_5, '-');
            $reversed_string = strrev($new_string); 
            echo strrev(rtrim($reversed_string, "-"));

        }
        else if ($question == 6) {
            echo "Our new phrase is: ". strtoupper($phrase_12346);
        }
        else {
            echo "Invalid question value, please choose a value between 1 and 6";
        }
    }


    answer_question(5);

?>