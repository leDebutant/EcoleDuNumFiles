<?= $header ?>
    <h2>Login</h2>
    <p>
        Connectez-vous
    </p>
    <form action="newProductService" method="post">
        <div class="form-group">
            <label>Produit</label>
            <input class="form-control" type="text" name="nom" value=""/>
        </div>
        <div class="form-group">
            <label>description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Prix</label>
            <input class="form-control" type="text" name="prix" value="" />
        </div>
        <div class="form-group">
            <label>Couleur</label>
            <input class="form-control" type="text" name="couleur" value="" />
        </div>

        <button class="btn btn-primary" type="submit">Poster nouveau Produit</button>

    </form>
<?= $footer ?>