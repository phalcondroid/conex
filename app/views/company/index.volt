<a href="{{ url("company/new")}}" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Nombre empresa
            </th>
            <th>
                Ver
            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in companies %}
            <tr>
                <td>
                    {{ item.name }}
                </td>
                <td>
                    <a href="{{ url('company/view' ~ item.id_company) }}" class="btn btn-success">
                        <i class="glyphicon glyphicon-eye"></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
