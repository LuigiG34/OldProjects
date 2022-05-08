<center><h2 class="display-6 mt-2 mb-2 p-4">Stagiaire</h2></center>


<select class="mb-2 p-2" id="gender" name="gender">
    <option value="" disabled selected="">Mr/Mme/Mlle :</option>
	<option value="Monsieur" selected>Monsieur</option>
	<option value="Madame">Madame</option>
	<option value="Mademoiselle">Mademoiselle</option>
</select><br><br>

<div class="row">
<div class="col">
	<!--Stagiaire Data-->
	<input  value="<?php //echo $USER->lastname; ?>" type="text" name="lname" placeholder="Nom..." class="form-control mb-2" required>
</div>
<div class="col">
	<input value="<?php //echo $USER->firstname; ?>" type="text" name="fname" placeholder="Prénom..." class="form-control mb-2" required>
</div>
</div>

<div class="row">
	<div class="col">
	<input type="tel" name="telephone" placeholder="Téléphone..." class="form-control mb-2" required>
</div>
<div class="col">
	<input type="tel" name="portable" placeholder="Portable..." class="form-control mb-2" required>
</div>
</div>

<!-- DATE STAGE -->
<center><h2 class="display-6 mt-2 mb-2 p-4">Date du stage</h2></center>
<div class="text-center">

<label for="sdate">Du :</label>
<input type="date" id="date" name="sdate" id="sdate" min="2021-01-01" max="2050-01-01">

<label for="edate">au :</label>
<input type="date" id="date" name="edate" id="edate" min="2021-01-01" max="2050-01-01"><br><br>
</div>
