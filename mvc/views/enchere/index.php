{{ include('./layouts/header.php', {title: 'Accueil'})}}
<main class="catalogue-main">
    <h1>CATALOGUE</h1>
    <div class="contenu-catalogue">
        <aside class="filters">
            <div class="contenu-filter">

                <h2>COLLECTIONS</h2>
                <ul>
                    <li>Collection du Lord</li>
                    <li>Collection rare</li>
                    <li>Collection Stampee</li>
                    <li>Collection commémorative</li>
                </ul>
                <h2 class="meilleurs-ventes">MEILLEURS VENTES</h2>
                <h2>Filtrer par prix</h2>
                <div class="min-max">
                    <label for="min-input">Min:</label>
                    <input type="number" id="min-input" name="minNumber" placeholder="" />

                    <label for="max-input">Max:</label>
                    <input type="number" id="max-input" name="maxNumber" placeholder="" />
                </div>
            </div>

            <div class="subscribeButton">
                <label for="emailInput">Abonnez-vous à l'infolettre</label>
                <input type="email" id="emailInput" placeholder="Courriel" />
                <button id="subscribeButton">Enter</button>
            </div>
        </aside>
        <section class="catalogue">
            <section class="grid-cards catalogue-encheres">
                {% for timbre in data %} <div class="card">
                    <div class="card__title">
                        <h2>{{timbre['timbre'].nom}}</h2>
                    </div>
                    <div class="card__image">
                        <a href="{{ base }}/enchere/show?id={{ timbre['id'] }}"><img src="{{base}}/{{timbre['image']}}" alt="Photo timbre usa" /></a>
                    </div>

                    <div class="card__prix">Offre actuelle: <small>{{timbre['enchere']}}$</small></div>
                    <div class="hourglass">
                        <div class="card__temps">
                            Temps restant: <small> 23h21min</small>
                        </div>
                        <i class="fa-regular fa-hourglass-half"></i>
                    </div>
                </div> {% endfor %}

            </section>
        </section>
    </div>
    <div class="plus-timbres">Plus de timbres</div>
</main>


{{ include('layouts/footer.php')}}