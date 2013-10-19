<?php
session_start();	
session_destroy();
echo "<script>alert('Ha cerrado la sesión. Vuelva pronto!');</script>";
header("Location: index.php");
?>