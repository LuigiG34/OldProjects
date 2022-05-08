<center><h2 class="display-6 mb-2 mt-2 p-4">Objectifs</h2></center>
<div class="row text-center">
	<div class="col">
			<!-- CHECKBOX OBJECTIFS -->
			<input type="radio" id="objectifs" name="objectifs[]" value="Découverte du Métier">
			<label class="mb-2 p-2" for="objectifs">Découverte du Métier</label><br>
	</div>
	<div class="col">
			<input type="radio" id="objectifs" name="objectifs[]" value="Validation du Projet Professionnel">
			<label class="mb-2 p-2" for="objectifs">Validation du Projet Professionnel</label><br>
	
	</div>
</div>
<center><h2 class="display-6 mt-2 mb-2 p-4">Poste occupé</h2></center>
			<!--POSTE OCCUPE-->
			<input type="text" name="poste" placeholder="Poste occupé..." class="form-control mb-2" required>

<center><h2 class="display-6 mb-2 mt-2 p-4">Tâches à réaliser lors du stage</h2></center>
			<!--TACHES A REALISER-->
			<input type="text" name="tache1" placeholder="Tâches à réaliser..." class="form-control mb-2" required>
			<input type="text" name="tache2" placeholder="Tâches à réaliser..." class="form-control mb-2" required>
			<input type="text" name="tache3" placeholder="Tâches à réaliser..." class="form-control mb-2" required>
			<input type="text" name="tache4" placeholder="Tâches à réaliser..." class="form-control mb-2" required>

<center><h2 class="display-6 mb-2 mt-2 p-4">Tuteur</h2></center>
			<!-- TUTEUR -->
			<input type="text" name="tname" placeholder="Nom + Prénom..." class="form-control mb-2" required>
			<input type="text" name="tfonction" placeholder="Fonction..." class="form-control mb-2" required>
			<input type="tel" name="tphone" placeholder="Numéro de téléphone..." class="form-control mb-2" required>
			<!-- DATE -->
<label class="mb-2 mt-2 p-4" for="tdate">Fait à Montpellier le ...</label>
			<input type="date" id="tdate" name="tdate" min="2021-01-01" max="2050-01-01">
