<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Sponsor Information</h2>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
    
<?php
    if(isset($_POST['submitSponsor'])){
        $selected_val = $_POST['formSponsors'];  // Storing Selected Value In Variable
        
        //echo "$selected_val <br />";
    }
    
    switch($selected_val) {
            
<<<<<<< HEAD
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
    
=======
        case "s1": echo "$selected_val"; break;
            
        case "s2": echo "$selected_val"; break;
            
        case "s3": echo "$selected_val"; break;
            
        case "s4": echo "$selected_val"; break;
            
        case "s5": echo "$selected_val"; break;
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
=======


<?php ?>
>>>>>>> d36e9df6ab2325a49123a0e981537677168334c7
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
</table>
</body>
</html> 
