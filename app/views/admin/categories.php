<?php $this->view("inc/header", $data); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Categories - Admin</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <button class="btn btn-primary" onclick="displayForm()">Ajouter Catégorie</button>
        </div>
        <div class="col-8 hide">
            <form action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de la catégorie : </label>
                    <input type="text" name='name' class="form-control">
                </div>
                <button class="btn btn-primary">Valider</button>
            </form>

        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>