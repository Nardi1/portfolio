<div class="padd100">
<div class="hidden-sm hidden-md hidden-lg" style="padding-top:150px"></div>
<div class="container">
  <div class="col-sm-6">
    <h2 class="titre-contact">Laissez moi un message</h2>
  <?php
  session_start();
  ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre Mail a bien été envoyé !
  </div>
  <?php endif; ?>
    <form action="parts/send_form.php" method="post">
      <div class="form-group row">
        <label class="col-sm-12 form-control-label" for="name">Nom</label>
        <div class="col-sm-12">
          <input class="form-control" id="name" name="name" placeholder="Nom" required="" type="text">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-12 form-control-label" for="email">Mail</label>
        <div class="col-sm-12">
          <input class="form-control" id="email" name="email" placeholder="Mail" required="email" type="text">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-12 form-control-label" for="message">Message</label>
        <div class="col-sm-12">
          <textarea class="form-control" id="message" name="message" placeholder="Votre message" required="" rows="6"></textarea>
        </div>
      </div>
      <div class="col-sm-7 text-right">
        <button class="btn btn-primary">Envoyer</button>
      </div>
    </form>
  </div><!--end col 8-->
  <div class="col-sm-offset-1 col-md-5">
    <div class="row">
      <div class="col-md-12">
          <h2 class="titre-contact">Informations</h2>
        <div class="">
          <h5> Adresse</h5>
          <p>30 rue des Tours, 31670 Labège - France</p>
          <h5>Email</h5>
          <p>contact@jixart.fr</p>
          <h5>Téléphone</h5>
          <p>06 07 08 09 10</p>
        </div>
      </div>
    </div>
  </div><!--end col 5-->
</div><!--end container-->
<?php
unset($_SESSION['inputs']);
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>