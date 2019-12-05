<?php include_once 'views/partials/head.php'; ?>

  <form action="/names" method="POST">
    <input type="text" name="name" />
    
    <button>Submit</button>
  </form>

  <ol style="list-style: none">
    <?php foreach($users as $user) : ?>
      <li><span><?= $user->id ?></span>.&nbsp<?= $user->name ?></li>
    <?php endforeach ?>
  </ol>

<?php include_once 'views/partials/footer.php'; ?>
