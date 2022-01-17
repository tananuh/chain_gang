<h1>Bicycle</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="Bicycles/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new bicycle</a>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Category</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Weight</th>
            <th>Condition</th>
            <th>Price</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($show as $Bicycle)
        {
            echo '<tr>';
            echo "<td>" . $Bicycle['brand'] . "</td>";
            echo "<td>" . $Bicycle['model'] . "</td>";
            echo "<td>" . $Bicycle['year'] . "</td>";
            echo "<td>" . $Bicycle['category'] . "</td>";
            echo "<td>" . $Bicycle['gender'] . "</td>";
            echo "<td>" . $Bicycle['color'] . "</td>";
            echo "<td>" . $Bicycle['weight'] . "</td>";
            echo "<td>" . $Bicycle['condition_id'] . "</td>";
            echo "<td>" . $Bicycle['price'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='Bicycles/edit/" . $Bicycle["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='Bicycles/delete/" . $Bicycle["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>