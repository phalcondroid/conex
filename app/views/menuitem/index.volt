<a href="{{ url("menu/index") }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<a href="{{ url("menuitem/new/" ~ id_menu) }}" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Menú item</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Label
            </th>
            <th>
                Logo
            </th>
            <th>
                Habilitado
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
        {% for item in menuitem %}
            <tr>
                <td>
                    {{ item.menu_item }}
                </td>
                <td>
                    {{ item.label }}
                </td>
                <td>
                    {{ item.logo }}
                </td>
                <td>
                    {% if item.status == 1 %}

                        {{ form("menuitem/available", "method" : "post") }}
                            {{ hidden_field("", "value" : id_menu,  "name" : "id_menu") }}
                            {{ hidden_field("", "value" : item.id_menu_item,  "name" : "id") }}
                            {{ hidden_field("", "value" : 0,  "name" : "value") }}
                            <button class="btn btn-success" type="submit">
                                Si
                            </button>
                        {{ end_form() }}

                    {% else %}

                        {{ form("menuitem/available", "method" : "post") }}
                            {{ hidden_field("", "value" : id_menu,  "name" : "id_menu") }}
                            {{ hidden_field("", "value" : item.id_menu_item,  "name" : "id") }}
                            {{ hidden_field("", "value" : 1,  "name" : "value") }}
                            <button class="btn btn-danger" type="submit">
                                No
                            </button>
                        {{ end_form() }}

                    {% endif %}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ url("menuitem/edit/" ~ id_menu ~ "/" ~ item.id_menu_item) }}">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{ url("menuitem/delete/" ~ id_menu ~ "/" ~ item.id_menu_item) }}">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
