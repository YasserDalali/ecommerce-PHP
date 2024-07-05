<?php
ob_start();
?>
   <h2>Hello, <?= $id ?></h2>
<?php $content = ob_get_clean(); ?>