<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Logistics Information</h2>

<<<<<<< HEAD
<?php
    if(isset($_POST['submitLogistics'])){
        $selected_val = $_POST['formLogistics'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
    
    switch($selected_val) {
            
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
</table>
</body>
</html> 