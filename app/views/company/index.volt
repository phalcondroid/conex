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

            </th>
            <th>

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
                    <a href="{{ url('company/edit/' ~ item.getIdCompany()) }}" class="btn btn-warning pull-right">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('company/delete/' ~ item.getIdCompany()) }}" class="btn btn-danger pull-right">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
