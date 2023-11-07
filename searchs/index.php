<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_Service</title>
</head>
<body>
    <h1>Search Service<h1>
        <form method ="post">
            <input type="text" name="noidung">
            <button type="submit" name="btn">Search</button>
        </form>

    <?php 
        if(isset($_POST['btn']) ){
           $noidung = $_POST['noidung'];         
        }
    ?>
    <?php 
        include "connect.php";

        if (isset($_POST['btn'])) {
        $noidung = $_POST['noidung'];
        $sql = "SELECT * FROM products WHERE name LIKE '%$noidung%' ";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo '<ul>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<li>' . $row['name'] . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Không tìm thấy sản phẩm nào.';
        }
        }
?>

</body>
</html>
