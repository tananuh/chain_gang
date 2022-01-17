<h1>Edit Bicycle</h1>
<form method='post' action=''>
<div class="form-group">
        <label for="title">Title</label>
        <?php 
        echo '<input type="text" class="form-control" id="title" placeholder="Enter a Title" name="title" value="'.$task->getTitle().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Description</label>
        <?php 
        echo '<input type="text" class="form-control" id="description" placeholder="Enter a Description" name="description" value="'.$task->getdescription().'">';
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>