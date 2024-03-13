<?php 

require_once( '../../include_file/db.php' );

// DELETE

function delete($conn,$table,$field,$id) {
    

    $delete = mysqli_query($conn,"DELETE FROM $table WHERE $field = '$id'");

    
    if ($delete) {
        
        return TRUE;
        
    } else {
        
        return FALSE;
        
    }
}



?>