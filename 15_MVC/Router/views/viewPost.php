<?= $header ?>

<div class="container">
    <img src="https://www.gravatar.com/avatar/<?=Helpers::gravatar($post->getEmailUser())?>" alt="..." class="img-circle pull-left">
    <div >
        <h4><?= $post->getUsername()?></h4>
        <h3><?= $post->getTitle()?></h3>
        <p><?= $post->getDescription()?></p>
    </div>
</div>
<h3>Réponses:</h3>
<div class="row">
    <?php if(!empty($comments)):?>
    <?php foreach($comments as $c):?>
    <div class="col-sm-1">
        <div class="thumbnail">
            <img src="https://www.gravatar.com/avatar/<?=Helpers::gravatar($c->getEmail())?>" class="img-responsive user-photo">
        </div>
    </div>

    <div class="col-sm-11">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><?=$c->getUsername()?></strong> <span class="text-muted">A commenté il y a <?=Helpers::time_elapsed_string($c->getDateCom())?></span>
            </div>
            <div class="panel-body">
                <?=$c->getComment()?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <?php endif;?>
</div>
<!-- le formulaire pour poster des commentaires -->
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
    <form action="../serviceComment" method="post">
        <div class="form-groups">
            <label>Répondre:</label>
            <input name="commentator_id" value="<?= SessionManager::getMyId()?>" type="hidden" />
            <input name="subjet_id" value="<?=$post->getId()?>" type="hidden" />
            <textarea name="comment" class="form-control"><?=SessionManager::getSessionComment()?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Répondre</button>
    </form>
<?= $footer ?>