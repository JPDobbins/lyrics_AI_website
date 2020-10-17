<?php

    function answer_question($question, $test_num_1, $test_num_2) {

        if ($question == 1) {
            if (is_float($test_num_1)) {
                return "$test_num_1 is not an integer";
            }
            else {
                return "$test_num_1 is an integer";
            }
        }

        else if ($question == 2) {
            if (is_float($test_num_1)) {
                return "$test_num_1 is not an integer";
            }
            else {
                return "$test_num_1 is an integer";
            }
        }

        else if ($question == 3) {
            if (is_float($test_num_1)) {
                return "$test_num_1 is a float";
            }
            else {
                return "$test_num_1 is not a float";
            }
        }

        else if ($question == 4) {
            return (int)$test_num_1 + (int)$test_num_2;
        }

        else {
            return "Invalid question number, please choose a value between 1 and 4";
        }
    }

    echo answer_question(4, "245", "77");


?>