<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("size_company/index", "Go Back") }}</li>
            <li class="next">{{ link_to("size_company/new", "Create ") }}</li>
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
                <th>Id Of Size Of Company</th>
            <th>Size Of Company</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for size_company in page.items %}
            <tr>
                <td>{{ size_company.id_size_company }}</td>
            <td>{{ size_company.size_company }}</td>
            <td>{{ size_company.status }}</td>
            <td>{{ size_company.created_at }}</td>

                <td>{{ link_to("size_company/edit/"~size_company.id_size_company, "Edit") }}</td>
                <td>{{ link_to("size_company/delete/"~size_company.id_size_company, "Delete") }}</td>
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
                <li>{{ link_to("size_company/search", "First") }}</li>
                <li>{{ link_to("size_company/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("size_company/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("size_company/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
