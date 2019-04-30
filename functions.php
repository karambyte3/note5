<?php 
function auth(){
    if($_SESSION['username'] == null) {
        header('Location: login.php');
        exit();
      } 
};

function createNote() {
  if (isset($_POST["create-note"])) {
    $noteName = $_POST['note-name'];
    $noteText = $_POST['note-text'];
  
    $newNote = "INSERT INTO `notes` (`note_name`, `note_text`) VALUES ('". $noteName ."', '". $noteText ."')";
    
    mysqli_query($db, $newNote);
  }
};

function showNotes($conn) {
    $sql = "SELECT * FROM `notes`";
    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
      echo '
      <div class="card-body create-note note item-hl">
            <h4 class="card-title">' .$row['note_name']. '</h4>
            <p class="card-text">' .$row['note_text']. '</p>
            <small class="text-muted">' .$row['date_created']. 'ч.</small>
            <button class="btn btn-outline-primary d-block ml-auto delete-note" name="create-note" href="#">Delete</a>
        </div>
      ';



      array_push($data, $row);
    }
    // print_r($data);
};

?>