{{ include('layouts/header.php', {title: 'Client'})}}
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href="{{ base }}/client/show?id={{ client.id }}">{{ client.name }}</a></td>
                <td>{{ client.address }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.zip_code }}</td>
                <td>{{ client.email }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/client/create" class="btn" >Client Create</a>
{{ include('layouts/footer.php') }}