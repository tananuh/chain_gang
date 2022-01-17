<h1>Edit Bicycle</h1>
<form method='post' action=''>
<div class="form-group">
        <label for="title">Brand</label>
        <?php 
        echo '<input type="text" class="form-control" id="brand" placeholder="Enter a Brand" name="brand" value="'.$show->getBrand().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Model</label>
        <?php 
        echo '<input type="text" class="form-control" id="model" placeholder="Enter a Model" name="model" value="'.$show->getModel().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Year</label>
        <?php 
        echo '<input type="text" class="form-control" id="year" placeholder="Enter a Year" name="year" value="'.$show->getYear().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Category</label>
        <?php 
        echo '<input type="text" class="form-control" id="category" placeholder="Enter a Category" name="category" value="'.$show->getCategory().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Gender</label>
        <?php 
        echo '<select class="form-control" id="gender" name="gender" value="'.$show->getGender().'">

            <option value = "1">Mens</option>
            <option value = "2">Womans</option>
            <option value = "3">Unisex</option>
        </select>';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Color</label>
        <?php 
        echo '<input type="text" class="form-control" id="color" placeholder="Enter a Color" name="color" value="'.$show->getColor().'">';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Weight</label>
        <?php 
        echo '<input type="text" class="form-control" id="weight" placeholder="Enter a weight" name="weight" value="'.$show->getWeight().'">
        <select class="form-control" id="weight_type" name="weight_type" value=1">
            <option value = "1">Kg</option>
            <option value = "2">Lbs</option>
        </select>';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Condition</label>
        <?php 
        echo '<select class="form-control" id="condition_id" name="condition_id" value="'.$show->getCondition_id().'">
            <option value = "1">Beat up</option>
            <option value = "2">Decent</option>
            <option value = "3">Good</option>
            <option value = "4">Great</option>
            <option value = "5">Like New</option>
        </select>';
        ?>
    </div>

    <div class="form-group">
        <label for="title">Price</label>
        <?php 
        echo '<input type="text" class="form-control" id="price" placeholder="Enter a price" name="price" value="'.$show->getPrice().'">';
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>