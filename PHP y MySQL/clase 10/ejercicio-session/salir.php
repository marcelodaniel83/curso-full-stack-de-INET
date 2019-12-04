<?php
    session_start();
    setcookie(session_name(),null);
    session_unset();
    session_destroy();
?>

<script>
    location.href = 'index.php';
</script>