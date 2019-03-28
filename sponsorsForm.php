<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Sponsor Information</h2>
    
<!-- this is where you make changes - each function is called for each respective place in the code later on, so you don't need to change anything else at all-->
    
<?php
function listSponsors(){
    echo "list sponsors";
}
    
function listJobsChosenCompany(){
    echo "jobs by comapny";
}
    
function listAllJobs(){
    echo "all jobns";
}
    
function addSponsor(){
    echo "add sponsor";
}
    
function deleteSponsor(){
    echo "delete a bitch";
}
    
?>

<!-- no touchey below this -->
<?php
    if(isset($_POST['submitSponsor'])){
        $selected_val = $_POST['formSponsors'];  // Storing Selected Value In Variable  
    }
    
    switch($selected_val) {
            
        case "s1": 
            echo "$selected_val";
            listSponsors();
            break;
            
        case "s2": 
            echo "$selected_val";
            listJobsChosenCompany();
            break;
            
        case "s3": 
            echo "$selected_val";
            listAllJobs();
            break;
            
        case "s4": 
            echo "$selected_val";
            addSponsor();
            break;
            
        case "s5": 
            echo "$selected_val";
            deleteSponsor();
            break;
            
        default: 
            // nothing was selected
            echo("You forgot to choose an option!"); break;
    }
?>
    
</table>
</body>
</html> 
