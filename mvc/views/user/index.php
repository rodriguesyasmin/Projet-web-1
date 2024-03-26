{{ include('layouts/header.php', {title: 'User'})}}
<div>

    <h1>Bienvenue {{user.username}}</h1>
    <div>
        {% for user in user %}
        <div>
            <p><a href="{{ base }}/client/show?id={{ client.id }}">{{ user.name }}</a></p>
            <p>{{ user.username }}</p>
            <p>{{ user.privilege_id }}</p>
        </div>
        {% endfor %}
    </div>
</div>
<div>
    <a href="{{ base }}/client/create" class="btn">Client Create</a>
</div>
{% include('layouts/footer.php') %}