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
            
        case "s1": 
            //list sponsors and levels code
            echo "$selected_val";
            break;
            
        case "s2": 
            // list jobs at chosen company
            echo "$selected_val"; 
            break;
            
        case "s3": 
            // list all jobs
            echo "$selected_val"; 
            break;
            
        case "s4": 
            // add a sponsor
            echo "$selected_val"; 
            break;
            
        case "s5": 
            // delete a sponsor
            echo "$selected_val"; 
            break;
            
        default: 
            // nothing was selected
            echo("You forgot to choose an option!"); break;
    }
?>
    
</table>
</body>
</html> 
