<?php  
    //declare multi-dimensional array  
    $a = array(
        array("alix ","bob "),
        array("camila","denial")
    );  
    
      
    //display multi-dimensional array elements through foreach loop  
    foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2\n";  
        }  
    }  
?>
        
<?php  
    //declare array  
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
      
    //access array elements using foreach loop  
    foreach ($season as $element) {  
        echo "$element";  
        echo "</br>";  
    }  
?> 

<?php  
    //declare array  
    $employee = array (  
        "Name" => "Alex",  
        "Email" => "alex_jtp@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
      
    //display associative array element through foreach loop  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
?>  