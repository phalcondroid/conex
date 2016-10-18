<a href="{{ url("menu/new")}}" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Administration Menus</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Tipo
            </th>
            <th>
                Rol
            </th>
            <th>
                Name
            </th>
            <th>
                Label
            </th>
            <th>
                Menu item
            </th>
            <th>
                #
            </th>
            <th>
                #
            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in menus %}
            <tr>
                <td>
                    {{ item.TypeMenu.type_menu }}
                </td>
                <td>
                    {{ item.Role.profile }}
                </td>
                <td>
                    {{ item.name }}
                </td>
                <td>
                    {{ item.label }}
                </td>
                <td>
                    {{ form("menuitem/index", "method" : "post") }}
                        {{ hidden_field("", "value" : item.id_menu,  "name" : "value") }}
                        <button class="btn btn-info" type="submit">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </button>
                    {{ end_form() }}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ url("menu/edit/" ~ item.id_menu) }}">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    {{ form("menu/delete", "method" : "post") }}
                        {{ hidden_field("", "value" : item.id_role,  "name" : "value") }}
                        <button class="btn btn-danger" type="submit">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    {{ end_form() }}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
