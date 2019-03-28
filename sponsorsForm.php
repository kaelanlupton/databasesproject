<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Sponsor Information</h2>
    
<?php
    if(isset($_POST['submitSponsor'])){
        $selected_val = $_POST['formSponsors'];  // Storing Selected Value In Variable
        
        //echo "$selected_val <br />";
    }
    
    switch($selected_val) {
            
        case "s1": echo "$selected_val"; break;
            
        case "s2": echo "$selected_val"; break;
            
        case "s3": echo "$selected_val"; break;
            
        case "s4": echo "$selected_val"; break;
            
        case "s5": echo "$selected_val"; break;
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
</table>
</body>
</html> 
