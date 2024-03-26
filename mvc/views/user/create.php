{{ include('layouts/header.php', {title: 'Registration'})}}
<h1>Créer une compte</h1>
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
    <form method="post" class="form-pages">

        <label>Nom :
            <input type="text" name="nom" value="{{ user.nom}}">
        </label>
        <label>Courriel:
            <input type="email" name="email" value="{{ user.email}}">
        </label>
        <label>Mot de Passe:
            <input type="text" name="mot_de_passe">
        </label>
        <label>Pays de naissance
            <select name="pays_de_naissance">
                <option value="">Sélectionnez le pays</option>
                <option value="Algerie">Algérie</option>
                <option value="Argentine">Argentine</option>
                <option value="Australie">Australie</option>
                <option value="Bresil">Brésil</option>
                <option value="Canada">Canada</option>
                <option value="Chine">Chine</option>
                <option value="France">France</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Inde">Inde</option>
                <option value="Indonesie">Indonésie</option>
                <option value="Italie">Italie</option>
            </select>
        </label>
        <label>Privilege </label>
        <select name="privilege_stampee_id">
            <option value="">Select Privilege</option>
            {% for privilege in privileges %}
            <option value="{{ privilege.id }}" {% if privilege.id == user.privilege_id %} selected {% endif %}>
                {{ privilege.privilege }}
            </option>
            {% endfor %}
        </select>


        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php')}}