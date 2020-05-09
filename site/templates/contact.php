<?php snippet("header") ?>
<div class="main">
  <img class="featureImg" src="http://cdainterview.com/resources/contact-us.png" alt="contact us">
  <form action="">
    <div class="formHeader">
      <h3><?= $page->company() ?></h3>
      <p><span>Toll Free</span>: <?= $page->phone() ?></p>
      <p><span>Email</span>: <?= $page->email() ?></p>
    </div>
    <label for="name">Name: *</label>
    <input type="text" name="name" id="name">
    <label for="email">Email Address: *</label>
    <input type="text" name="email" id="email">
    <label for="question">How Can We Help You? *</label>
    <textarea name="question" id="question" cols="38" rows="8"></textarea>
    <div class="formButtons">
      <button type="reset">Reset</button>
      <button type="submit">Submit</button>
    </div>
  </form>
  <br>
  <div class="formFooter">
    <span class="noteHeader">Note</span>:
    <span class="noteBody"><?= $page->note() ?>
    </span>
  </div>

<?php snippet("footer") ?>