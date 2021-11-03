<?php
// Initialize empty movies array
$instrument = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'music_shop');
echo "connected";
// Did I connect successfully ? 
if ($conn) {

    // 2. Prepare the query


    $query = 'SELECT * FROM instruments ';


    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $instruments = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Pb with connection !';
}
?>

<?php foreach ($instruments as $instrument) :/* ?>

<hr>


<p>
        <strong>name :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['name']; ?>
        </p>
        <hr>
    <p>
    <strong> brand_name':</strong>
    <!-- Same thing as echo -->
    <?= $instrument['brand_name']; ?>
    </p>
    <hr>
    <p>
    <strong>price :</strong>
    <!-- Same thing as echo -->
    <?= $instrument['price']; ?>
    </p>
    <hr>
    <p>
        <strong>photo :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['photo']; ?>
        </p>
        <hr>
        <p>
        <strong>type :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['type']; ?>
        </p>
        <hr>
        <p>
        <strong>description :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['description']; ?>
        </p>
        <hr>*/
?>


    <table border="1">
        <tr>
            <th>name</th>
            <th>brand_name</th>
            <th>price</th>
            <th>$photo</th>
            <th>type</th>
            <th>description</th>
        </tr>
        <tr>
            <td>$instrument['name']</td>
            <td> <?= $instrument['brand_name']; ?></td>
            <td> <?= $instrument['price']; ?></td>
            <td><?= $instrument['photo']; ?></td>
            <td><?= $instrument['type']; ?></td>
            <td><?= $instrument['description']; ?></td>
        </tr>
    </table>
<?php endforeach; ?>