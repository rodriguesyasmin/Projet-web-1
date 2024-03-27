{{ include('layouts/header.php', {title: 'Client'})}}
<h1>Timbres</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Année</th>
            <th>Prix</th>
            <th>Etat</th>
            <th>Pays</th>
            <th>Certifié</th>
            <th>Couleur</th>
            <th>Dimensions</th>
            <th>Catégorie</th>
        </tr>
    </thead>
    <tbody>
        {% for timbre in timbres %}
        <tr>
            <td><a href="{{ base }}/timbre/show?id={{ timbre.id }}">{{ timbre.nom }}</a>
            <td>{{ timbre.description }}</td>
            <td>{{ timbre.annee }}</td>
            <td>{{ timbre.prix }}</td>
            <td>{{ timbre.etat }}</td>
            <td>{{ timbre.pays }}</td>
            <td>{{ timbre.certifie ? "Oui" : "Non" }}</td>
            <td>{{ timbre.couleur }}</td>
            <td>{{ timbre.dimensions }}</td>
            <td>{{ timbre.categorie_stampee_id }}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<a href="{{ base }}/client/create" class="btn">Client Create</a>
{{ include('layouts/footer.php') }}