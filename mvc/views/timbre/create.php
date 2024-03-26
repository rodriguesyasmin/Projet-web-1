{{ include('layouts/header.php', {title: 'Client Create'}) }}
<h1>Ajouter un timbre</h1>
<div class="container">

    <form method="post" class="form-pages">

        <label>Identifiant unique:
            <input type="text" name="identifiant" class="input-field" value="{{ timbre.identifiant }}">
        </label>
        <label>Nom:
            <input type="text" name="nom" class="input-field" value="{{ timbre.nom }}">
        </label>
        <label>Description:
            <input type="text" name="description" class="input-field" value="{{ timbre.description }}">
        </label>
        <label>Année:
            <input type="text" name="annee" class="input-field" value="{{ timbre.annee }}">
        </label>
        <label>Prix Initial:
            <input type="text" name="prix" class="input-field" value="{{ timbre.prix }}">
        </label>
        <label>Condition:
            <input type="text" name="condition" class="input-field" value="{{ timbre.condition }}">
        </label>
        <label>Pays:
            <input type="text" name="pays" class="input-field" value="{{ timbre.pays }}">
        </label>
        <label>Certifié:
            <select name="certifie" class="select-field">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </label>
        <label>Couleur:
            <input type="text" name="couleur" class="input-field" value="{{ timbre.couleur }}">
        </label>
        <label>Dimensions:
            <input type="text" name="dimensions" class="input-field" value="{{ timbre.dimensions }}">
        </label>
        <label>Categorie
            <select name="categorie_stampee" class="select-field">
                <option value="">Select Privilege</option>
                {% for categorie in categories %}
                <option value="{{ categorie.id }}">
                    {{ categorie.nom }}
                </option>
                {% endfor %}
            </select>
        </label>
        <label>Enchères ID:
            <input type="text" name="encheres_stampee_id" class="input-field" value="{{ timbre.encheres_stampee_id }}">
        </label>
        <input type="submit" class="btn" value="Ajouter le timbre">
    </form>
</div>
{{ include('layouts/footer.php') }}