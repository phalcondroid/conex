<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("employeenumber/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Of Employee Of Number</th>
            <th>Employee Of Number</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for employee_number in page.items %}
            <tr>
                <td>{{ employee_number.id_employee_number }}</td>
            <td>{{ employee_number.employee_number }}</td>
            <td>{{ employee_number.status }}</td>
            <td>{{ employee_number.created_at }}</td>

                <td>{{ link_to("employeenumber/edit/"~employee_number.id_employee_number, "Edit") }}</td>
                <td>{{ link_to("employeenumber/delete/"~employee_number.id_employee_number, "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("employeenumber/search", "First") }}</li>
                <li>{{ link_to("employeenumber/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("employeenumber/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("employeenumber/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
