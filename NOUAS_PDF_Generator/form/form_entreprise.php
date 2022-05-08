<center><h2 class="display-6 mt-2 mb-2 p-4">L'entreprise</h2></center>

<div class="row">
	<div class="col">
			<!-- Nom de l'entreprise -->
			<input type="text" name="entreprise" placeholder="Nom de l'entreprise..." class="form-control mb-2" required>
	</div>
	<div class="col">
			<!-- Raison sociale -->
			<input type="text" name="r_sociale" placeholder="Raison sociale de l'entreprise..." class="form-control mb-2" required>
		</div>
</div>

			
<div class="row">
	<div class="col">
			<!-- N°SIRET -->
			<input type="text" name="n_siret" placeholder="N°SIRET..." class="form-control mb-2" required>
	</div>

	<div class="col">
			<!-- Code APE -->
			<input type="text" name="code_ape" placeholder="Code APE..." class="form-control mb-2" required>
	</div>
</div>

<div class="row">
	<div class="col">
			<!-- Représenté par -->
			<input type="text" name="representant" placeholder="Représenté par..." class="form-control mb-2" required>
	</div>
	<div class="col">
			<!-- en qualité de -->
			<input type="text" name="qualite" placeholder="En qualité de..." class="form-control mb-2" required>
	</div>	
</div>

<div class="row">
	<div class="col">
			<!-- Téléphone -->
			<input type="tel" name="phone" placeholder="Numéro de téléphone..." class="form-control mb-2" required>
	</div>
	<div class="col">
			<!-- Adresse mail -->
			<input type="email" name="email" placeholder="Adresse mail..." class="form-control mb-2" required>
		</div>
</div>
			<!-- Adresse -->
			<input type="text" name="adresse1" placeholder="Adresse..." class="form-control mb-2" required>

			<!-- CODE POSTAL-->
<div class="row">
	<div class="col">
			<!-- VILLE -->
			<label for="ville1">Ville :</label>
			<input class="form-control mb-2" name="ville1" id="ville1" required>
	</div>

<div class="col">
			<!-- CODE POSTAL-->
			<label for="postal1">Code Postale :</label>
			<select name="postal1" id="postal1" class="form-control mb-2" required>	</select>
			<div id="error-message1" style="display: none; color: red;"></div>
	</div>
</div>

		<center><h2 class="display-6 mt-2 mb-2 p-4">Lieu de réalisation de stage</h2></center>

			<!-- Adresse -->
			<input type="text" name="adresse2" placeholder="Adresse..." class="form-control mb-2" required>


<div class="row">
	<div class="col">
			<!-- VILLE -->
			<label for="ville2">Ville :</label>
			<input class="form-control mb-2" name="ville2" id="ville2" required>
	</div>

<div class="col">
			<!-- CODE POSTAL-->
			<label for="postal2">Code Postale :</label>
			<select name="postal2" id="postal2" class="form-control mb-2" required>	</select>
			<div id="error-message2" style="display: none; color: red;"></div>
	</div>
</div>