<?php
    function feedbackCheck($processor,$data){
        $newData    = array_map('cleanOutput', $data);
        $returnData = dbSanitize($newData);
        return $returnData;
    }

    function cleanOutput($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
?>