<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
  <?= css('assets/app.css') ?>
  <title>Happy Birthday Franky!</title>
</head>
<body>
  <header>
    <img class="soccerdani" src="<?= $page->image('soccer-dani.jpeg')->crop(600,600)->url() ?>" alt="soccer dani">
    <h1>Franky's super sweet <strike>16</strike> 30</h1>
  </header>
  <div class="plakat">
    <?= $page->text()->kirbytext() ?>
    <img src="<?= $site->url() . "/assets/friends.jpg" ?>" alt="friends">
  </div>
  <main>
    <div class="polaroids">
    <?php foreach ($pages->files() as $foto): ?>
      <div class="polaroid">
        <img src="<?= $foto->crop(600,600)->url() ?>" alt="">
      </div>
    <?php endforeach ?>
    </div>
  </main>
  <div class="entry">
    <div class="entry__text">
      <p>Sind Sie 30 Jahre oder älter?</p>
      <div class="btn-group">
        <button class="closebtn">Drauf geschissen!</button>
      </div>
    </div>

  </div>
  <?= js('assets/app.js') ?>
</body>
</html>