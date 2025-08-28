<form action="/admin/login/signin" method="post" class="login-form">
    <span class="flash success">{{success}}</span>

    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" autofocus>
        <span class="flash error">{{email}}</span>
    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">
        <span class="flash error">{{password}}</span>
    </div>
    <?php 
        $security->set_csrf();
        $security->set_honey_pot(groupClass:"form-group age");
     ?>
    <span class="flash error">{{security}}</span>
    <button type="submit">Connexion</button>
</form>