{{ include('layouts/header.php', {title: 'User'})}}
<div>


    <div>
        {% for user in users %}
        <div>
            <h1>Bienvenue, {{user.nom}}</h1>

            <p><a href="{{ base }}/client/show?id={{ client.id }}">{{ user.nom }}</a></p>

            <p>{{ user.email }}</p>
        </div>

    </div>
</div>
<div>
    <a href="{{ base }}/user/delete?id={{ user.id }}" class="btn">Effacer compte</a>
    {% endfor %}
</div>
{{ include('layouts/footer.php')}}