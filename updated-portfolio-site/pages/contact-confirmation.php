<!DOCTYPE html>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$pagetitle = "Frequently Asked Questions";
?>
<html lang="en">
<?php include("glu3-project1/includes/meta.php"); ?>
<body>
    <?php include("glu3-project1/includes/header.php"); ?>
    <main>
        <h3>Hi <?php echo htmlspecialchars($name); ?>. Thank you for your message! We will send the answer to your email <?php echo htmlspecialchars($email); ?>.</h3>
    </main>
    <?php include("glu3-project1/includes/footer.php"); ?>
</body>
</html>
