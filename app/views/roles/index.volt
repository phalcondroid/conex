<a href="{{ url("roles/new")}}" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Administration Roles</h1>

<br><br>

{{ content() }}

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Dirección por defecto
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in roles %}
            <tr>
                <td>
                    {{ item.profile }}
                </td>
                <td>
                    {{ item.default_redirect }}
                </td>
                <td>
                    <a class="btn btn-warning pull-right" href="{{ url("roles/edit/" ~ item.id_role) }}">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    {{ form("roles/delete", "method" : "post") }}
                        {{ hidden_field("", "value" : item.id_role,  "name" : "value") }}
                        <button class="btn btn-danger pull-right" type="submit">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    {{ end_form() }}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
