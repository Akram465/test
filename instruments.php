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

<?php foreach ($instruments as $instrument) : ?>

    <hr>


    <p>
        <strong>name :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['name']; ?>
    </p>

    <p>
        <strong> brand_name':</strong>
        <!-- Same thing as echo -->
        <?= $instrument['brand_name']; ?>
    </p>

    <p>
        <strong>price :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['price']; ?>
    </p>
    <p>
        <strong>photo :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['photo']; ?>
    </p>
    <p>
        <strong>type :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['type']; ?>
    </p>
    <p>
        <strong>description :</strong>
        <!-- Same thing as echo -->
        <?= $instrument['description']; ?>
    </p>



<?php endforeach; ?>