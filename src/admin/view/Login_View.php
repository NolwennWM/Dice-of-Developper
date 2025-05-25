<style>
    body
    {
        background-color: lightslategray;
        min-height: 100dvh;
    }
    .form-group.age
    {
        position: absolute;
        left: -100%;
    }
</style>

<form action="/admin/login/signin" method="post">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" autofocus>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    <?php 
        $this->security->set_csrf();
        $this->security->set_honey_pot(groupClass:"form-group age");
     ?>
    <button type="submit">Connexion</button>
</form>