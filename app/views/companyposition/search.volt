<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("companyposition/new", "Create ") }}</li>
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
                <th>Id Of Company Of Position</th>
            <th>Position</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for company_position in page.items %}
            <tr>
                <td>{{ company_position.id_company_position }}</td>
            <td>{{ company_position.position }}</td>
            <td>{{ company_position.description }}</td>
            <td>{{ company_position.status }}</td>
            <td>{{ company_position.created_at }}</td>

                <td>{{ link_to("companyposition/edit/"~company_position.id_company_position, "Edit") }}</td>
                <td>{{ link_to("companyposition/delete/"~company_position.id_company_position, "Delete") }}</td>
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
                <li>{{ link_to("companyposition/search", "First") }}</li>
                <li>{{ link_to("companyposition/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("companyposition/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("companyposition/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
