<?php include 'connect.php';
$sno = $_GET['sno'];
$query = "DELETE FROM designationdetails WHERE sno='$sno'";
$data = mysqli_query($con, $query);
if ($data) {
?>
    <script type="text/javascript">
        alert("Data Deleted Successfully");
        window.open("http://localhost/designation/index.php", "_self");
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Please try again");
    </script>
<?php
}
?>