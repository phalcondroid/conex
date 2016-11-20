<a href="{{ url("deals/index")}}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Mis mensajes</h1>

<table class="table">
    <thead>
        <tr>
            <th>
                Menssage
            </th>
            <th>
                Fecha
            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in messages %}
            <tr>
                <th>
                    {{ item.message }}
                </th>
                <th>
                    {{ item.created_at }}
                </th>
            </tr>
        {% endfor %}
    </tbody>
</table>
