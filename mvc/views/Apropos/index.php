{{ include('layouts/header.php', {title: ' Mission'}) }}
<main>
    <div class="contenu-mission">
        <h1>Mission de Stampee</h1>

        <div class="mission-photo">
            <div class="textes-mission">
                <p>
                    Bienvenue sur Stampee, la plateforme d'enchères de timbres créée
                    par <em>Lord Reginald Stampee</em>, duc de Worcessteshear,
                    passionné de philatélie depuis l'enfance. Reginald, aristocrate
                    fasciné par les timbres postaux depuis sa jeunesse, est devenu un
                    collectionneur renommé. Il a fondé Stampee pour partager sa
                    passion avec le monde, créant un espace de vente aux enchères et
                    de partage pour les amateurs de timbres.
                </p>
                <p>
                    Stampee, plus qu'un site d'enchères, est un refuge où tradition et
                    innovation se rencontrent. Lord Stampee aspire à inspirer une
                    nouvelle génération de collectionneurs, élevant la philatélie à de
                    nouvelles hauteurs et enchantant les cœurs à travers le monde.
                </p>

                <div class="valeurs">
                    <hr />
                    <h2>Nos Valeurs</h2>

                    <ul>
                        <li>
                            <strong>Tradition:</strong> Perpétuer la tradition et la
                            passion des timbres, en offrant une collection soigneusement
                            sélectionnée qui incarne l'essence même de la philatélie.
                        </li>
                        <li>
                            <strong>Intégrité:</strong> Agir avec intégrité, transparence
                            et honnêteté dans toutes nos transactions, garantissant aux
                            collectionneurs une confiance totale dans l'authenticité et la
                            valeur de chaque timbre proposé.
                        </li>
                        <li>
                            <strong>Innovation:</strong> Innover de manière responsable en
                            introduisant des fonctionnalités modernes et des services
                            novateurs qui complètent et enrichissent l'expérience d'achat
                            et d'enchères, tout en préservant l'héritage philatélique.
                        </li>
                        <li>
                            <strong>Diversité:</strong> Célébrer la diversité culturelle à
                            travers nos timbres, offrant une variété qui reflète la
                            richesse du monde, permettant ainsi à chaque collectionneur de
                            trouver des trésors uniques qui résonnent avec leur propre
                            histoire.
                        </li>
                    </ul>
                </div>
            </div>

            <img class="img-lord" src="{{ asset }}/assets/img/lord/lordStampee (2).png" alt="" />
        </div>

        <div>
            <hr />
            <h2>Équipe</h2>

            <div class="team">
                <div class="employee">
                    <img src="{{ asset }}/assets/img/teams/stephan.webp" alt="employee" />
                    <h3>Stephan</h3>
                    <p>Philatéliste</p>
                </div>
                <div class="employee">
                    <img src="{{ asset }}/assets/img/teams/Michel.webp" alt="employee" />
                    <h3>Michel</h3>
                    <p>Responsable des Ventes</p>
                </div>
                <div class="employee">
                    <img src="{{ asset }}/assets/img/teams/Lynda.webp" alt="employee" />
                    <h3>Lynda</h3>
                    <p>Ressources Humaines</p>
                </div>

                <div class="employee">
                    <img src="{{ asset }}/assets/img/teams/catherine.webp" alt="employee" />
                    <h3>Catherine</h3>
                    <p>Philatéliste</p>
                </div>
            </div>

            <div class="invitation">
                <p>
                    Sur Stampee, nous ne sommes pas simplement une plateforme
                    d'enchères, mais une communauté dynamique de philatélistes.
                    Revenez:
                </p>
                <a href="inscription" class="inscription">Inscrivez-vous</a>
            </div>
        </div>
    </div>
</main>

{{ include('layouts/footer.php') }}