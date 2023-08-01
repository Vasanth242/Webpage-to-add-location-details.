<?php include 'connect.php'; ?>

<html>

<head>
    <title>Designation Details</title>
    <link rel='stylesheet' type='text/css' href='style.css' />
</head>

<body>
    <div class="element">
        <form action="" method="POST">
            <input type="text" name="designationname" placeholder="Designation Name"><br>
            <input type="submit" name="add_btn" value="Add">

        </form>
        <table border="1px" cellpadding="o" cellspacing="10px">
            <tr>
                <th>Designation Name</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            $query = "SELECT * FROM designationdetails";
            $data = mysqli_query($con, $query);
            $result = mysqli_num_rows($data);
            if ($result) {

                while ($row = mysqli_fetch_array($data)) {
            ?>
                    <tr>
                        <td><?php echo $row['designationname']; ?></td>
                        <td><a href="update.php?sno=<?php echo $row['sno']; ?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure, you want to delete')" href="delete.php?sno=<?php echo $row['sno']; ?>">Delete</a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td>No Record Found</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <?php
    if (isset($_POST['add_btn'])) {
        $designationname = $_POST['designationname'];

        $query = "INSERT INTO designationdetails (designationname) VALUES ('$designationname')";
        $data = mysqli_query($con, $query);
        if ($data) {
    ?>
            <script type="text/javascript">
                alert("Data Saved Successfully");
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
</body>

</html>