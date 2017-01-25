<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("servicetype/new", "Create ") }}</li>
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
                <th>Id Of Service Of Type</th>
            <th>Service Of Type</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for service_type in page.items %}
            <tr>
                <td>{{ service_type.id_service_type }}</td>
            <td>{{ service_type.service_type }}</td>
            <td>{{ service_type.status }}</td>
            <td>{{ service_type.created_at }}</td>

                <td>{{ link_to("servicetype/edit/"~service_type.id_service_type, "Edit") }}</td>
                <td>{{ link_to("servicetype/delete/"~service_type.id_service_type, "Delete") }}</td>
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
                <li>{{ link_to("servicetype/search", "First") }}</li>
                <li>{{ link_to("servicetype/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("servicetype/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("servicetype/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
