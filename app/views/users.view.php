<?php include_once 'app/views/partials/head.php'; ?>

  <h1>All Users</h1>

  <form action="/users" method="POST">
    <input type="text" name="name" />
    
    <button>Submit</button>
  </form>

  <ol style="list-style: none">
    <?php foreach($users as $user) : ?>
      <li><span><?= $user->id ?></span>.&nbsp<?= $user->name ?></li>
    <?php endforeach ?>
  </ol>

<?php include_once 'app/views/partials/footer.php'; ?>
