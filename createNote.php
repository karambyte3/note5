<?php 


if (isset($_POST["create-note"])) {
    $noteName = $_POST['note-name'];
    $noteText = $_POST['note-text'];

    $newNote = "INSERT INTO `notes` (`note_name`, `note_text`) VALUES ('". $noteName ."', '". $noteText ."')";
    
    mysqli_query($db, $newNote);
}

?>