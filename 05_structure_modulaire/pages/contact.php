<h1>Contact</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima quo vitae fugit nesciunt nam, maxime ab dolorum laboriosam voluptates magnam error alias placeat! Dicta, vero blanditiis. Eaque illo asperiores temporibus?</p>
<section id="contact">
<form class="row g-3">
<div class="col-md-6">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" id="firstname">
  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="lastname">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="address2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city">
  </div>
  <div class="col-md-4">
    <label for="state" class="form-label">State</label>
    <?php
    $state = [
    "Auvergne-Rhône-Alpes",
    "Bourgogne-Franche-Comté",
    "Bretagne",
    "Centre-Val de Loire",
    "Corse",
    "Grand Est",
    "Hauts-de-France",
    "Ile-de-France",
    "Normandie",
    "Nouvelle-Aquitaine",
    "Occitanie",
    "Pays de la Loire",
    "Provence Alpes Côte d’Azur",
    "Guadeloupe",
    "Guyane",
    "Martinique",
    "Mayotte",
    "Réunion"
    ];
    ?>
    <select id="state" class="form-select">
      <option selected>Choose...</option>
      <?php foreach($state as $value): ?>
      <option><?php echo $value ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12 mb-3">
    <button type="submit" class="btn btn-dark">Sign in</button>
  </div>
</form>
</section>