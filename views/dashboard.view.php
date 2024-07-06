<?php
ob_start();
?>
<section class="d-flex" style="overflow: disabled">
   <aside>
      <?php include "include/sidebar.php"; ?>
   </aside>
   <main class="container h-100">

      <h1 class="text-primary display-1 text-center my-5 fw-bolder animate__animated animate__fadeInUp"><?= $title ?></h1>
         <?php if ($_GET['table'] != 'charts') : ?>
            <div class="mt-5 animate__animated animate__fadeIn p-4 px-5 shadow-lg rounded-3 bg-white">

            <table class="table">
               <?php renderTable($th, $td); ?>
            </table>
            </div>

         <?php else: ?>
            <?php include "include/graphs.php"; ?>
         <?php endif ?>

   </main>
</section>
<?php $content = ob_get_clean(); ?>