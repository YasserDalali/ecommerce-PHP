<?php
ob_start();

?>
<section class="d-flex">
<aside>
   <?php include "include/sidebar.php"; ?>
</aside>
<main class="container h-100">    
   
<h1 class="text-center mt-4"><?= $title ?></h1>

   <h2>Hello, <?= $id ?></h2>

   <table class="table table-bordered">
      <?php renderTable($th, $td);; ?>
   </table>
   </main>
</section>
<?php $content = ob_get_clean(); ?>