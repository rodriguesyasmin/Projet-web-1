{{ include('layouts/header.php', {title: 'Détails du Timbre'}) }}


<section class="fiche-du-produit">
    <div class="container-img">
        <img src="{{base}}/{{ image }}" alt="" class="img-principale" />
    </div>

    <div class="description">
        <h1>{{ timbre.nom }}</h1>
        <ul>
            <li>Identifiant #<span>{{ timbre.identifiant }}</span></li>
            <li>
                Date de création
                <i class="fa-solid fa-calendar-days fa-sm"> {{ timbre.annee }}</i>
            </li>
            <li>Couleur <i class="fa-solid fa-palette fa-sm"></i> {{ timbre.couleur }}</li>
            <li>Pays d'origine <span>{{ timbre.pays }}</span></li>
            <li>Condition <span>{{ timbre.etat }}</span></li>
            <li>Dimensions <span>{{ timbre.dimensions }}</span></li>
            <li>Description <span>{{ timbre.description }}</span></li>
            <hr>
            <li>Date début <span>{{ enchere.date_heure_debut }}</span></li>
            <li>Temps restant: <span id="temp_restant_{{ timbre.id }}"></span></li>
            </li>



            <li>Offre actuelle <span>{{ enchere.prix_initial }}$</span></li>

        </ul>
        <hr />
        <form action="{{base}}/miser/store" method="post">
            <div class="achat">

                <input type="hidden" name="user_stampee_id" value="{{session.user_id}}">
                <input type="hidden" name="date_heure" value="<?php echo date('Y-m-d H:i:s'); ?>">

                <input type="hidden" name="encheres_stampee_id" value="{{enchere.id}}" />
                <input type="hidden" name="timbre_id" value="{{timbre.id}}" />

                <label for="miser">Placez une mise
                    <input type="number" min="{{ enchere.prix_initial }}" name=" montant_mise" />
                </label>
                <button type="submit" class="ajouter-panier">Miser</button>

        </form>

        <form action="{{base}}/favoris/store" method="post">
            <input type="hidden" name="user_stampee_id" value="{{session.user_id}}">
            <input type="hidden" name="encheres_stampee_id" value="{{enchere.id}}" />
            <button type="submit" style="border: none; background: none; padding: 0; cursor: pointer;">
                <i class="fa-solid fa-heart fa-2x"></i>
            </button>
        </form>
    </div>



    <hr />
    <hr />
    <h3>Certifié : <span>{{ timbre.certifie ? "Oui" : "Non" }} </span></h3>
    <h3>Categorie : <span> {{ timbre.categorie_stampee_id }}</span></h3>
    <h3>Partager : <i class="fa-solid fa-share"></i></h3>

    </div>
</section>

</section>



{{ include('layouts/footer.php') }}

<script>
    calculerTempsRestant('{{ enchere.date_heure_fin }}', '{{ timbre.id}}');
</script>