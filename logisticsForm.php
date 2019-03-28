<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Logistics Information</h2>

<!-- this is where you make changes - each function is called for each respective place in the code later on, so you don't need to change anything else at all-->

<?php
function displaySchedule(){
    echo "sched";
}
    
function displayHotel(){
    echo "display students in a chosen hotel room";
}
    
function displayIntake(){
    echo "$$$$$$";
}
    
function changeSessionInfo(){
    echo "change day time location etc";
}
    
?>
    
<!-- no touchey below this -->

<?php
    if(isset($_POST['submitLogistics'])){
        $selected_val = $_POST['formLogistics'];  // Storing Selected Value In Variable
    }
    
    switch($selected_val) {
            
        case "l1": 
            echo "$selected_val";
            displaySchedule();
            break;
            
        case "l2": 
            echo "$selected_val"; 
            displayHotel();
            break;
            
        case "l3": 
            echo "$selected_val"; 
            displayIntake();
            break;
            
        case "l4": 
            echo "$selected_val"; 
            changeSessionInfo();
            break;
            
        default: 
            // nothing was selected
            echo("You forgot to choose an option!"); break;
    }
?>
    
</table>
</body>
</html> 