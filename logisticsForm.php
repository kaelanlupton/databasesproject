<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Logistics Information</h2>

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
<?php
    if(isset($_POST['submitLogistics'])){
        $selected_val = $_POST['formLogistics'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
>>>>>>> 19f28406b8c1d525b59d6c1797be3fcef88c4f1a
    }
    
    switch($selected_val) {
            
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
        case "l1": 
            // display schedule for a chosen day
            echo "$selected_val";
            break;
            
        case "l2": 
            // display students in a chosen hotel room
            echo "$selected_val"; 
            break;
            
        case "l3": 
            // display conference intake
            echo "$selected_val"; 
            break;
            
        case "l4": 
            // change session day/time/location
            echo "$selected_val"; 
>>>>>>> 19f28406b8c1d525b59d6c1797be3fcef88c4f1a
            break;
            
        default: 
            // nothing was selected
            echo("You forgot to choose an option!"); break;
    }
?>
    
<<<<<<< HEAD
=======
=======
        case "l1": echo "$selected_val"; break;
            
        case "l2": echo "$selected_val"; break;
            
        case "l3": echo "$selected_val"; break;
            
        case "l4": echo "$selected_val"; break;
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
=======

<?php ?>
>>>>>>> d36e9df6ab2325a49123a0e981537677168334c7
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
>>>>>>> 19f28406b8c1d525b59d6c1797be3fcef88c4f1a
</table>
</body>
</html> 