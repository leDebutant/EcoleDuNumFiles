<?php echo $header ?>
<h2>Incription Utilisateur</h2>
<p>
    Inscrivez-vous
</p>
<?php if(!empty(SessionManager::isErrorForm())): ?>
    <div class="alert alert-danger">
        <strong>Erreur!</strong> <?=SessionManager::getErrorsForm()?>
    </div>
<?php endif; ?>
<?php if(!empty(SessionManager::isSuccessForm())): ?>
    <div class="alert alert-success">
        <strong>Validation!</strong> <?=SessionManager::getSuccessForm()?>
    </div>
<?php endif; ?>

<form action="serviceSignup" method="post">
    <div class="form-groups">
        <label>Username</label>
        <input class="form-control" type="text" name="username" value="<?= SessionManager::getUsernameField() ?>" />
    </div>
    <div class="form-groups">
        <label>password</label>
        <input class="form-control" type="text" name="password" value="<?= SessionManager::getPasswordField() ?>" />
    </div>
    <div class="form-groups">
        <label>email</label>
        <input class="form-control" type="text" name="email" value="<?= SessionManager::getEmailField() ?>" />
    </div>
    <button class="btn btn-primary" type="submit">S'enregistrer</button>
</form>
<?php echo $footer ?>