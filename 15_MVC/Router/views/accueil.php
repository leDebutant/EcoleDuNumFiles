<?php echo $header ?>
<?php if(!empty(SessionManager::isSuccessForm())): ?>
    <div class="alert alert-success">
        <strong>Validation!</strong> <?=SessionManager::getSuccessForm()?>
    </div>
<?php endif; ?>
<?php if(!empty($posts)): ?>
    <?php foreach($posts as $p): ?>
    <div id="">
        <div>
            <div class="user-post-header">
                <a href="" lambdaeverupdated="2"><?=$p->getUsername()?></a> <small>dit</small>
                <div>
                    <?= Helpers::reformatDate($p->getDatePost())?>
                    <span aria-hidden="true" class="glyphicon glyphicon-comment"></span> <?=$p->getNbComment()?>
                </div>
                <div class="user-post-header__label">
                    <a href="viewPost/<?=$p->getId()?>"><?=$p->getTitle()?></a>
                </div>
            </div>
            <div>
                <blockquote>
                    <?=Helpers::shortenText($p->getDescription())?>...
                </blockquote>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php echo $footer ?>