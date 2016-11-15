<a href="{{ url("user/new")}}" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>User administration</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Role
            </th>
            <th>
                User
            </th>
            <th>
                Name
            </th>
            <th>
                Identify
            </th>
            <th>
                Mobile Phone
            </th>
            <th>
                Address
            </th>
            <th>
                Country
            </th>
            <th>
                City
            </th>
            <th>
                Birthday
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
        {% for item in users %}
            <tr>
                <td>
                    {{ item.Role.profile }}
                </td>
                <td>
                    {{ item.user }}
                </td>
                <td>
                    {{ item.name }}
                </td>
                <td>
                    {{ item.identify }}
                </td>
                <td>
                    {{ item.mobile_phone }}
                </td>
                <td>
                    {{ item.address }}
                </td>
                <td>
                    {{ item.country }}
                </td>
                <td>
                    {{ item.city }}
                </td>
                <td>
                    {{ item.birthday }}
                </td>
                <td>
                    <a href="{{ url("user/edit/" ~ item.id_users )}}" class="btn btn-warning">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ url("user/delete/" ~ item.id_users )}}" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        {% endFor %}
    </tbody>
</table>
