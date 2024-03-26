{{ include('./layouts/header.php', {title: 'Accueil'})}}
<main>
    <section class="hero-banner">
        <img src="{{ asset }}/assets/img/hero-banner/hero-banner.png" alt="" />
        <div class="text-container">
            <h1>Explorez le Monde des Enchères de Timbres avec Stampee</h1>
            <p>
                Lord Reginald Stampee, Duc de Worcestershear, est une personnalité
                de renom dans le domaine de la philatélie britannique. Il est né en
                1945 au sein d'une famille aristocratique et a découvert sa passion
                pour les timbres dès son plus jeune âge, grâce à son grand-père qui
                lui a offert sa première collection de timbres.
            </p>

            <div class="btn-decouvrir">
                <a href="catalogue.html"><button class="decouvrir-encheres">
                        Découvrir les Enchères
                    </button></a>
            </div>
        </div>
    </section>
    <section class="container-timbres">
        <h1>Enchères actives</h1>
        <div class="carrousel">
            <i class="fa-solid fa-chevron-left fa-2x"></i>
            <div class="carrousel__card">
                <div class="carrousel__title">
                    <h2>Titre</h2>
                </div>
                <div class="carrousel__image">
                    <a href="produit.html"><img src="{{ asset }}/assets/img/stamp/san-francisco.webp" alt="" /></a>
                </div>
                <div class="carrousel__id">Id:<small>878787878</small></div>
                <div class="carrousel__prix">Offre actuelle: <small>8950$</small></div>
                <div class="hourglass">
                    <div class="carrousel__temps">
                        Temps restant: <small> 6h39min</small>
                    </div>
                    <i class="fa-regular fa-hourglass-half"></i>
                </div>
            </div>
            <div class="carrousel__card invisible">
                <div class="carrousel__title">
                    <h2>Titre</h2>
                </div>
                <div class="carrousel__image">
                    <a href="produit.html"><img src="{{ asset }}/assets/img/stamp/usa.webp"
                            alt="timbre forbidden city" /></a>
                </div>
                <div class="carrousel__id">Id:<small>878787878</small></div>
                <div class="carrousel__prix">Offre actuelle: <small>8950$</small></div>
                <div class="hourglass">
                    <div class="carrousel__temps">
                        Temps restant: <small> 6h39min</small>
                    </div>
                    <i class="fa-regular fa-hourglass-half"></i>
                </div>
            </div>
            <div class="carrousel__card ">
                <div class="carrousel__title">
                    <h2>Titre</h2>
                </div>
                <div class="carrousel__image">
                    <a href="produit.html"><img src="{{ asset }}/assets/img/stamp/parthenon.webp"
                            alt="timbre czech-republic" /></a>
                </div>
                <div class="carrousel__id">Id:<small>878787878</small></div>
                <div class="carrousel__prix">Offre actuelle:<small>8950$</small></div>
                <div class="hourglass">
                    <div class="carrousel__temps">
                        Temps restant: <small> 6h39min</small>
                    </div>
                    <i class="fa-regular fa-hourglass-half"></i>
                </div>
            </div>
            <i class="fa-solid fa-chevron-right fa-2x"></i>
        </div>
    </section>
    <section class="participez-encheres">
        <div class="participez">
            <h2>
                Participez à nos enchères de timbres exclusives dès maintenant
            </h2>
            <p>
                Lord Reginald Stampee, Duc de Worcestershear, est une personnalité
                de renom dans le domaine de la philatélie britannique. Il est né en
                1945 au sein d'une famille aristocratique et a découvert sa passion
                pour les timbres dès son plus jeune âge, grâce à son grand-père qui
                lui a offert sa première collection de timbres. faites partie de
                l'histoire philatélique.
            </p>
        </div>
        <div class="decouvrir">
            <img src="assets/img/stamp/czech-republic.webp" alt="timbre czech-republic" />
            <a href="catalogue.html"><button class="decouvrir-encheres">
                    Découvrir les Enchères
                </button></a>
        </div>
    </section>
</main>

{{ include('layouts/footer.php')}}