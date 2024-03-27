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
            <li>Offres actuelle <span>{{ timbre.prix }}$</span></li>
        </ul>
        <hr />
        <h3>Certifié : <span>{{ timbre.certifie ? "Oui" : "Non" }} </span></h3>
        <h3>Categorie : <span> {{ timbre.categorie_stampee_id }}</span></h3>
        <h3>Partager : <i class="fa-solid fa-share"></i></h3>
        <a href="{{ base }}/timbre/edit?id={{ timbre.id }}" class="btn block">Éditer</a>
        <form action="{{ base }}/timbre/delete" method="post">
            <input type="hidden" name="id" value="{{ timbre.id }}">
            <button class="btn block red">Supprimer</button>
        </form>
    </div>
</section>

</section>



{{ include('layouts/footer.php') }}