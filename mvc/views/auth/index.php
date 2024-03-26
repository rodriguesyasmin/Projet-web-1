{{ include('./layouts/header.php', {title: 'Accueil'})}}
<div class="container">
    {% if errors is defined %}
    <div class="error">
        <ul>
            {% for error in errors %}
            <li>{{ error }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form method="post">
        <h2>Login</h2>
        <label>Email:
            <input type="email" name="email" value="{{ user.email}}">
        </label>
        <label>Mot de passe:
            <input type="password" name="mot_de_passe">
        </label>
        <input type="submit" class="btn" value="Login">
    </form>
</div>
{{ include('layouts/footer.php')}}