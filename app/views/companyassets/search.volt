<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("companyassets/new", "Create ") }}</li>
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
                <th>Id Of Company Of Assets</th>
            <th>Company Of Assets</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for company_asset in page.items %}
            <tr>
                <td>{{ company_asset.id_company_assets }}</td>
            <td>{{ company_asset.company_assets }}</td>
            <td>{{ company_asset.status }}</td>
            <td>{{ company_asset.created_at }}</td>

                <td>{{ link_to("companyassets/edit/"~company_asset.id_company_assets, "Edit") }}</td>
                <td>{{ link_to("companyassets/delete/"~company_asset.id_company_assets, "Delete") }}</td>
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
                <li>{{ link_to("companyassets/search", "First") }}</li>
                <li>{{ link_to("companyassets/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("companyassets/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("companyassets/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
