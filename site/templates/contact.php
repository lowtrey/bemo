<?php snippet("header") ?>

<div class="main">
  
  <img class="featureImg" src="http://cdainterview.com/resources/contact-us.png" alt="contact us">

  <form method="post" action="<?= $page->url() ?>">

    <div class="honeypot">
        <label for="website">Website <abbr title="required">*</abbr></label>
        <input type="website" id="website" name="website">
    </div>

    <div class="formHeader">
      <h3><?= $page->company() ?></h3>
      <p><span>Toll Free</span>: <?= $page->phone() ?></p>
      <p><span>Email</span>: <?= $page->email() ?></p>
    </div>

    <label for="name">Name: *</label>
    <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
    <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>

    <label for="email">Email Address: *</label>
    <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
    <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>

    <label for="text">How Can We Help You? *</label>
    <textarea id="text" name="text" cols="38" rows="8" required>
      <?= $data['text']?? '' ?>
    </textarea>
    <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>

    <div class="formButtons">
      <input type="reset" name="reset" value="reset">
      <input type="submit" name="submit" value="Submit">
    </div>

  </form>

  <br>

  <div class="formFooter">
    <span class="noteHeader">Note</span>:
    <span class="noteBody"><?= $page->note() ?></span>
  </div>

<?php snippet("footer") ?>