<div class="container">

  <?php
  session_start();
  ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre Mail a bien été envoyé !
  </div>
  <?php endif; ?>


  <form method="post" action="parts/send_form.php">
    <div class="form-group row">
      <label for="name" class="col-sm-2 form-control-label">Nom</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Nom" name="name" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 form-control-label">Mail</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="email" placeholder="Mail" name="email" required="email">
      </div>
    </div>

    <div class="form-group row">
      <label for="message" class="col-sm-2 form-control-label">Message</label>
      <div class="col-sm-6">
        <textarea rows="6" name="message" class="form-control" id="message" placeholder="Votre message" required></textarea>
      </div>
    </div>


    <button class="btn btn-primary">Envoyer</button>
  </form>



</div>
<?php
unset($_SESSION['inputs']);
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>
