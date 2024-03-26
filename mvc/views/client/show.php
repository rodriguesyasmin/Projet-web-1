{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Show</h2>
        <hr>
        <p><strong>Name:</strong> {{ client.name }}</p>
        <p><strong>Address:</strong> {{ client.address }}</p>
        <p><strong>Zip Code:</strong> {{ client.zip_code }}</p>
        <p><strong>Phone:</strong> {{ client.phone }}</p>
        <p><strong>Email:</strong> {{ client.email }}</p>
        <a href="{{base}}/client/edit?id={{client.id}}" class="btn block">Edit</a>
        <form action="{{base}}/client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}