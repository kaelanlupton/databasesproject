<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>People Information</h2>

<<<<<<< HEAD
<!-- this is where you make changes - each function is called for each respective place in the code later on, so you don't need to change anything else at all-->
    
<?php
function displaySCMembers(){
    echo "display sc members";
}
    
function displayConferenceAttendees(){
    echo "display conference attendees";
}
    
function addAttendee(){
    echo "add attendee";
}
    
?>
    
<!-- no touchey below this -->

<?php
    if(isset($_POST['submitPeople'])){
        $selected_val = $_POST['formPeople'];  // Storing Selected Value In Variable
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
<?php
    if(isset($_POST['submitPeople'])){
        $selected_val = $_POST['formPeople'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
>>>>>>> 19f28406b8c1d525b59d6c1797be3fcef88c4f1a
    }
    
    switch($selected_val) {
            
<<<<<<< HEAD
        case "p1":  
            echo "$selected_val"; 
            displaySCMembers();
            break;
            
        case "p2": 
            echo "$selected_val";
            displayConferenceAttendees();
            break;
            
        case "p3": 
            echo "$selected_val"; 
            addAttendee();
            break;
            
        default: 
            echo("You forgot to choose an option!"); break;
    }
?>
    
=======
<<<<<<< HEAD
        case "p1": 
            // display members of particular subcommittees 
            echo "$selected_val"; 
            break;
            
        case "p2": 
            // display all conference attendees as three lists (students, pros, spons)
            echo "$selected_val"; 
            break;
            
        case "p3": 
            // add an attendee
            echo "$selected_val"; 
            break;
=======
        case "p1": echo "$selected_val"; break;
            
        case "p2": echo "$selected_val"; break;
            
        case "p3": echo "$selected_val"; break;
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
<<<<<<< HEAD
=======
=======

>>>>>>> d36e9df6ab2325a49123a0e981537677168334c7
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
>>>>>>> 19f28406b8c1d525b59d6c1797be3fcef88c4f1a
<?php ?>
</table>
</body>
</html> 