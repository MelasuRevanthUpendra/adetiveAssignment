<?php require "connection.php";?>
<?php
$name=$_POST['name'];
$color=$_POST['color'];
$inputs = "insert into inputs(name,color) values ('$name','$color')";
$input_details = mysqli_query($con, $inputs) or die(mysqli_error($con));?>

<script>
//alert("Given data is inserted successfully");
</script>
<?php
//header ("Location: index.php");
?>