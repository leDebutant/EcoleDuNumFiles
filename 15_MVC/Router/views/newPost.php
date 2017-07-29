<?php echo $header ?>
    <h2>Nouveau Poste</h2>
    <p>
        Écrivez votre histoire
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
    <form action="serviceNewPost" method="post">
        <input type="hidden" name="poster" value="<?= SessionManager::getMyId()?>" />
        <div class="form-groups">
            <label>Title:</label>
            <input class="form-control" type="text" name="title" value="<?= SessionManager::getSessionTitle() ?>" />
        </div>
        <div class="form-groups">
            <label>Description:</label>
            <textarea class="form-control" name="description"><?= SessionManager::getSessionDescription() ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Poster</button>
    </form>
<?php echo $footer ?>