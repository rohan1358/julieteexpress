<?php
// error_reporting(0);
include '../koneksi.php';

$records_per_page = 10;

require_once '../vendor/stefangabos/zebra_pagination/Zebra_Pagination.php';

$pagination = new Zebra_Pagination();

$sql = '
    SELECT
        *
    FROM
    table_kemitraan
    LIMIT
        ' . (($pagination->get_page() - 1) * $records_per_page) . ', ' . $records_per_page . '
';

$result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

// fetch the total number of records in the table
$rows = mysqli_fetch_assoc(mysqli_query($koneksi, 'SELECT count(*) as count_row FROM table_kemitraan'));

// pass the total number of records to the pagination class
$pagination->records($rows['count_row']);

// records per page
$pagination->records_per_page($records_per_page);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitra</title>
    <link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <table class="table table-bordered">
        <tr style="color:#FFF; background:#000">
            <td>Nama</td>
            <td>No Telp</td>
            <td>Email</td>
            <td>Alamat</td>
        </tr>
        <?php $index = 0; while ($row = mysqli_fetch_assoc($result)): ?>
        <tr<?php echo $index++ % 2 ? ' class="even"' : ''; ?>>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_telp']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php

// render the pagination links
$pagination->render();
?>
    
<script src="../vendor/stefangabos/zebra_pagination/public/javascript/zebra_pagination.js"></script>
</body>
</html>