<?php
  function sanitize($inputData){
       
        $inputData = trim($inputData);

        $inputData = strip_tags($inputData);
    
       
        $inputData = htmlspecialchars($inputData, ENT_QUOTES, 'UTF-8');
    
        return $inputData;
  }
?>