<?php

function is_input_empty($personCount, $startDate){
    if(empty($personCount) || empty($startDate) ) {
        return true;
    }
    else {
        return false;
    }
}