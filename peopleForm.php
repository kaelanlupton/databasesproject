<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>People Information</h2>

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
    }
    
    switch($selected_val) {
            
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
    
<?php ?>
</table>
</body>
</html> 