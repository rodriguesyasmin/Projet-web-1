{{ include('layouts/header.php', {title: 'Détails du Timbre'}) }}


<section class="fiche-du-produit">
    <div class="container-img">
        <img src="{{base}}/{{img}}" alt="" class="img-principale" />
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
        <div class="achat">
            <label for="miser">Placez une mise
                <input type="number" class="miser" name="miser" id="" />
            </label>
            <button class="ajouter-panier">Miser</button>
            <a href=""><i class="fa-solid fa-heart fa-2x"></i></a>
        </div>
        <hr />
        <hr />
        <h3>Certifié : <span>{{ timbre.certifie ? "Oui" : "Non" }} </span></h3>
        <h3>Categorie : <span> {{ timbre.categorie_stampee_id }}</span></h3>
        <h3>Partager : <i class="fa-solid fa-share"></i></h3>

        <!-- <a href="{{ base }}/timbre/edit?id={{ timbre.id }}" class="btn block">Éditer</a>
        <form action="{{ base }}/timbre/delete?id={{ timbre.id }}" method="get">
            <input type="hidden" name="id" value="{{ timbre.id }}">
            <button class="btn block red">Supprimer</button>
        </form> -->
    </div>
</section>

</section>



{{ include('layouts/footer.php') }}

<script>
calculerTempsRestant('{{ enchere.date_heure_fin }}', '{{ timbre.id}}');
</script>