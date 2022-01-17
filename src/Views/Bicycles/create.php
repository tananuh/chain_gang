<h1>Create bicycle</h1>
<form method='post' action=''>
    <div class="form-group">
        <label for="title">Brand</label>
        <input type="text" class="form-control" id="brand" placeholder="Enter a Brand" name="brand">
    </div>

    <div class="form-group">
        <label for="title">Model</label>
        <input type="text" class="form-control" id="model" placeholder="Enter a Model" name="model">
    </div>

    <div class="form-group">
        <label for="title">Year</label>
        <input type="text" class="form-control" id="year" placeholder="Enter a Year" name="year">
    </div>

    <div class="form-group">
        <label for="title">Category</label>
        <input type="text" class="form-control" id="category" placeholder="Enter a Category" name="category">
    </div>

    <div class="form-group">
        <label for="title">Gender</label>
        <select class="form-control" id="gender" name="gender">
            <option value = "1">Mens</option>
            <option value = "2">Womans</option>
            <option value = "3">Unisex</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Color</label>
        <input type="text" class="form-control" id="color" placeholder="Enter a Color" name="color">
    </div>

    <div class="form-group">
        <label for="title">Weight</label>
        <input type="text" class="form-control" id="weight" placeholder="Enter a weight" name="weight">
        <select class="form-control" id="weight_type" name="weight_type">
            <option value = "1">Kg</option>
            <option value = "2">Lbs</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Condition</label>
        <select class="form-control" id="condition_id" name="condition_id">
            <option value = "1">Beat up</option>
            <option value = "2">Decent</option>
            <option value = "3">Good</option>
            <option value = "4">Great</option>
            <option value = "5">Like New</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter a price" name="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>