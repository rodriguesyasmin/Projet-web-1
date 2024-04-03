{{ include('layouts/header.php', {title: 'Ajouter timbre'}) }}
<h1>Ajouter un timbre</h1>
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
    <form method="post" class="form-pages" enctype="multipart/form-data">

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
        <label>État du timbre:
            <input type="text" name="etat" class="input-field" value="{{ timbre.etat }}">
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
            <select name="categorie_stampee_id" class="select-field">
                <option value="">Select categorie</option>
                {% for categorie in categories %}
                <option value="{{ categorie.id }}">
                    {{ categorie.nom }}
                </option>
                {% endfor %}
            </select>
        </label>
        <label>Image Principale
            <input type="file" name="image_principale" class="input-field">
        </label>
        {% if errors.image_principale is defined %}
        <span class="error">{{ errors.image_principale }}</span>
        {% endif %}

        <label>Autres images
            <input type="file" name="image_secondaire[]" multiple class="input-field">
                    </label>

        <input type="hidden" name="user_stampee_id" value="{{session.user_id}}">
        <input type="submit" class="btn" value="Ajouter le timbre">
    </form>
</div>
{{ include('layouts/footer.php') }}