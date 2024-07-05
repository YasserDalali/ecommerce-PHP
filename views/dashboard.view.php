<?php
ob_start();
?>
   <h2>Hello, <?= $id ?></h2>

   <table class="table table-bordered">
      <?php renderTable($th, $td);; ?>
   </table>
<?php $content = ob_get_clean(); ?>