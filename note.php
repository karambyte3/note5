<?php 
$title = "Notes";
include("templates/main/head.php"); 
include("functions.php");
// If user is not logged redirect him to login.php
auth();
createNote();

?>

        <div class="card-body create-note">
            <h4 class="card-title">Create new note</h4>
            <hr>
            <form class="form-group mb-0" method="POST" action="note.php">
                <label for="note-name">Note name</label>
                <input class="form-control" type="text" id="note-name" name="note-name" placeholder="Example: party">
                <label for="note-text">Note text</label>
                <textarea class="form-control" id="note-text" name="note-text" rows="3"
                    placeholder="Example: should buy grass for tommor..."></textarea>
                <input name="create-note" type="submit" class="btn btn-outline-primary d-block ml-auto mt-2"
                    value="Create">
            </form>
        </div>
    </div>

    <div class="d-flex flex-wrap row-hl">
    <?php showNotes($db); ?>
    </div>






<?php 
include("templates/main/footer.php")
?>