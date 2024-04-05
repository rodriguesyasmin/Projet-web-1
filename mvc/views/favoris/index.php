{{ include('layouts/header.php', {title: ' Favoris'}) }}

{% if errors is defined %}
<div class="error">
    <ul>
        {% for error in errors %}
        <li>{{ error }}</li>
        {% endfor %}
    </ul>
</div>
{% endif %}
</div>

{% if favoris %}
<h1>Mes favoris</h1>
<table class="table-mes-produits">
    <div class="container">

        <tr>
            <th>Enchère</th>
            <th>Nom</th>
            <th>annee</th>
            <th>identifiant</th>
        </tr>

        {% for favoris in favoris%}
        <tr>
            <td><a href="{{ base }}/enchere/show?id={{favoris.timbre_stampee_id}}">{{ favoris.encheres_stampee_id }}</a>
            </td>
            <td>{{ favoris['nom'] }}</td>
            <td>{{ favoris['annee'] }}</td>
            <td>{{ favoris['identifiant'] }}</td>
        </tr>
        {% endfor %}
</table>
{% else %}
<p> Vous n'avez pas encore faite une favoris </p>
{% endif %}


{{ include('layouts/footer.php') }}