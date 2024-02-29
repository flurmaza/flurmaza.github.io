<!DOCTYPE html>
<?php
$first_name = $_POST["last-name"];
$last_name = $_POST["last-name"];
$email = $_POST["email"];
$medium = $_POST["medium"];
$subject = $_POST["subject_artwork"];
$pagetitle = "Support Me"
?>
<html lang="en">
<?php include("glu3-project1/includes/meta.php"); ?>
<body>
    <?php include("glu3-project1/includes/header.php"); ?>
    <main>
        <h3>Thank you for your commission, <?php echo htmlspecialchars($first_name); ?> <?php echo htmlspecialchars($last_name); ?>!</h3>

        <p>You submitted a comission for a/an <?php echo htmlspecialchars($medium); ?> artwork. The subject of the artwork is "<?php echo htmlspecialchars($subject); ?>".</p>
        <p>We will send a follow up message to your email, <?php echo htmlspecialchars($email); ?>.</p>
    </main>
    <?php include("glu3-project1/includes/footer.php"); ?>
</body>
</html>
