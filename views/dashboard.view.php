<?php
ob_start();
?>
<section class="d-flex" style="overflow: disabled">
<aside>
   <?php include "include/sidebar.php"; ?>
</aside>
<main class="container h-100">    
   
<h1 class="text-center mt-4 animate__animated animate__fadeInUp"><?= $title ?></h1>
   <table class="table mt-5 animate__animated animate__fadeIn">
      <?php if($_GET['table'] != 'charts'): ?>
      <?php renderTable($th, $td); ?>
   </table>

      <?php else: ?>
         <?php include "include/graphs.php"; ?>
      <?php endif ?>
   </main>
</section>
<?php $content = ob_get_clean(); ?>