<?= $header ?>

<h2>Login</h2>
<p>
    Connectez-vous
</p>
<form action="loginService" method="post">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" type="text" name="username" value=""/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password" value="" />
    </div>

    <button class="btn btn-primary" type="submit">Login</button>

</form>

<?= $footer ?>
