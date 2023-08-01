<?php include 'connect.php';
$sno = $_GET['sno'];
$select = "SELECT * FROM designationdetails WHERE sno='$sno'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">
        <input value="<?php echo $row['designationname'] ?>" type="text" name="designationname" placeholder="designationname"><br>
        <input type="submit" name="update_btn" value="Update">
        <link rel='stylesheet' type='text/css' href='style.css' />
    </form>
</div>
<?php
if (isset($_POST['update_btn'])) {
    $designationname = $_POST['designationname'];

    $update = "UPDATE designationdetails SET designationname ='$designationname' WHERE sno='$sno'";
    $data = mysqli_query($con, $update);
    if ($data) {
?>
        <script type="text/javascript">
            alert("Data Updated Successfully");
            window.open("http://localhost/designation/index.php", "_self");
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please try again");
        </script>
<?php        }
}
?>