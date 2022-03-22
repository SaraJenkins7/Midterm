<?php include('../view/header.php') ?>

<section>
    <header>
        <h1>Zippy's Used Autos</h1>
        <form action="." method="GET" id="vehicle_list_header">
            <input type="hidden" name="action" value="list_vehicles">
            <select name="type_id">
                <option value="0">View All Types</option>
                <?php foreach($vehicles as $vehicle) : ?>
                    <?php if($type_id == $vehicle['type_id']){ ?>
                        <option value="<?= $vehicle['type_id'] ?>"></option>
                        <?php } else { ?>
                        <option value="<?= $vehicle['type_id'] ?>"></option>
                        <?php } ?>
                        <option value="<?= $vehicle['type'] ?>"></option>
                <?php endforeach; ?>
            </select> 
            <select name="class_id">
                <option value="0">View All Classes</option>
                <?php foreach($vehicles as $vehicle) : ?>
                    <?php if($class_id == $vehicle['class_id']){ ?>
                        <option value="<?= $vehicle['class_id'] ?>"></option>
                        <?php } else { ?>
                        <option value="<?= $vehicle['class_id'] ?>"></option>
                        <?php } ?>
                        <option value="<?= $vehicle['class'] ?>"></option>
                <?php endforeach; ?>
            </select>
            <select name="make_id">
                <option value="0">View All Makes</option>
                <?php foreach($vehicles as $vehicle) : ?>
                    <?php if($make_id == $vehicle['make_id']){ ?>
                        <option value="<?= $vehicle['make_id'] ?>"></option>
                        <?php } else { ?>
                        <option value="<?= $vehicle['make_id'] ?>"></option>
                        <?php } ?>
                        <option value="<?= $vehicle['make'] ?>"></option>
                <?php endforeach; ?>
            </select>
        </form>
    </header>
    <main>
        <h1>Zippy's Inventory</h1>
        <p>Sort By:
            <input type="radio" id="price" name="sort" value="Price">
            <label for="price">Price</label>
            <input type="radio" id="year" name="sort" value="Year">
            <label for="year">Year</label>
            <button>Submit</button>
        </p>
        <br>
        <table>
            <tr>
                <th>Year</th>
                <th>Make</th>
                <th>Model</th>
                <th>Type</th>
                <th>Class</th>
                <th>Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td><?php echo $vehicle['year']; ?></td>
                <td><?php echo $vehicle['make_id']; ?></td>
                <td><?php echo $vehicle['model']; ?></td>
                <td><?php echo $vehicle['type_id']; ?></td>
                <td><?php echo $vehicle['class_id']; ?></td>
                <td><?php echo $vehicle['price']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_vehicle">
                    <input type="hidden" name="model" value="<?php echo $vehicles['model']; ?>">
                    <input type="hidden" name="year" value="<?php echo $vehicles['year']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <p>
            <a href="add_vehicle.php">Add Vehicle</a>
            <a href="vehicle_list.php">View Full Vehicle List</a>
            <a href="make_list.php">View/Edit Vehicle Makes</a>
            <a href="class_list.php">View/Edit Vehicle Classes</a>
            <a href="type_list.php">View/Edit Vehicle Types</a>
        </p>
    </main>
</section>
<?php include '../view/footer.php'; ?>