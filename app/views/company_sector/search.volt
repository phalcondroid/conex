<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("company_sector/index", "Go Back") }}</li>
            <li class="next">{{ link_to("company_sector/new", "Create ") }}</li>
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
                <th>Id Of Company Of Sector</th>
            <th>Company Of Sector</th>
            <th>Created</th>
            <th>Status</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for company_sector in page.items %}
            <tr>
                <td>{{ company_sector.id_company_sector }}</td>
            <td>{{ company_sector.company_sector }}</td>
            <td>{{ company_sector.created_at }}</td>
            <td>{{ company_sector.status }}</td>

                <td>{{ link_to("company_sector/edit/"~company_sector.id_company_sector, "Edit") }}</td>
                <td>{{ link_to("company_sector/delete/"~company_sector.id_company_sector, "Delete") }}</td>
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
                <li>{{ link_to("company_sector/search", "First") }}</li>
                <li>{{ link_to("company_sector/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("company_sector/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("company_sector/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
