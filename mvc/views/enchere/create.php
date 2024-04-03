{{ include('layouts/header.php', {title: ' Mettre aux encheres'}) }}

<body>

    <form method="post" class="form-pages">
        <label>Timbres à mettre à l'enchère
            <select name="timbre_stampee_id">
                <option value="">Choisir timbre</option>
                {% for timbre in timbres %}
                <option value="{{ timbre.id }}">{{ timbre.nom }}</option>
                {% endfor %}
            </select>
        </label>
        <label for="prix_initial">Prix de départ
            <input type="number" step="0.01" name="prix_initial" placeholder="0,00 CAD">
        </label>

        <label>Date de début
            <input type="datetime-local" name="date_heure_debut">
        </label>
        <label>Date de fin
            <input type="datetime-local" name="date_heure_fin">
        </label>
        <input type="hidden" name="coup_de_coeur" value="0">
        <input type="hidden" name="status_id" value="1">
        <input type="submit" class="btn" value="Publier l'enchère">
    </form>
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
    </div>
    {{ include('layouts/footer.php') }}