<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Explorez Lord Stampee pour l'achat et la vente de timbres rares. Collection unique, histoires à travers images et designs. Idéal pour passionnés et amateurs." />
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset }}/assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <header>
        <div class="header-container">
            <a href="{{base}}"><img src="{{ asset }}/assets/img/logos/logoLord.png" alt="logos" /></a>
            <form action="/" method="get">
                <label for="recherche" class="sr-only">Rechercher :</label>
                <input type="text" id="recherche" name="recherche" placeholder="Rechercher" />
                <button type="submit" name="recherche" class="search-button">
                    <i class="fa-solid fa-magnifying-glass" role="img" aria-label="icon de recherche"></i>
                </button>
            </form>
            <div class="icon-container">
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <nav class="nav-liens">
            <ul>
                <li><i class="fa-solid fa-bars icon-menu"></i></li>
                <li><a href="{{base}}">Accueil</a></li>
                <li><a href="{{base}}/catalogue">Catalogue</a></li>
                <li><a href="{{base}}/contact">Contact</a></li>
                <li><a href="{{base}}/user/create">Devenir Membre</a></li>
                <li><a href="{{base}}mission">À propos</a></li>
                {% if guest is empty %}
                <li>

                    <a href="{{base}}/logout">Logout
                    </a>
                </li>
                {% else %}

                <li>
                    <a href="{{base}}/login">Login
                    </a>
                </li>
                {% endif %}

            </ul>
        </nav>
        {% if guest is empty %}
        Hello xfgxdg {{ session.nom }}!
        {% endif%}
    </header>


    <body>
        <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{ asset }}/css/style.css">
</head>
<body>
    <nav>
        <ul>
            
            <li><a href="{{base}}/client">Clients</a></li>
            {% if session.privilege_id == 1 %}
                <li><a href="{{base}}/user/create">Users</a></li>
            {% endif %}
            {% if guest %}
            <li><a href="{{base}}/login">Login</a></li>
            {% else %}
            <li><a href="{{base}}/logout">Logout</a></li>
            {% endif %}
        </ul>
    </nav>
    <main>
        {% if guest is empty %}
            Hello {{ session.user_name }}!
        {% endif%} -->