<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>People Information</h2>

<?php
    if(isset($_POST['submitPeople'])){
        $selected_val = $_POST['formPeople'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
    
    switch($selected_val) {
            
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
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
<?php ?>
</table>
</body>
</html> 