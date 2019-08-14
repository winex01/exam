<?php 
  require_once('class/Notice.php');

  $notices = new Notice();



?>




<?php include_once('layouts/header.php') ?>
<?php include_once('layouts/jumbotron.php') ?>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($notices->all() as $notice): ?>

        <h2><?= $notice['title'] ?></h2>
        <p>
            <?= $notice['message'] ?>
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

      <?php endforeach; ?>
    </div>
  </div>
  <hr>
</div> <!-- /container -->

    

