<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: index.php");
?>

</body>
<!-- <script type="text/javascript">
    localStorage.clear();
</script> -->
</html>