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
        foreach ($show as $bicycle)
        {
            echo '<tr>';
            echo "<td>" . $bicycle->getBrand() . "</td>";
            echo "<td>" . $bicycle->getModel() . "</td>";
            echo "<td>" . $bicycle->getYear() . "</td>";
            echo "<td>" . $bicycle->getCategory() . "</td>";
            echo "<td>" . $bicycle->getStringGender() . "</td>";
            echo "<td>" . $bicycle->getColor() . "</td>";
            echo "<td>" . $bicycle->getWeightShow() . "</td>";
            echo "<td>" . $bicycle->getStringCondition() . "</td>";
            echo "<td>" . $bicycle->getPriceShow() . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='Bicycles/edit/" . $bicycle->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='Bicycles/delete/" . $bicycle->getId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>