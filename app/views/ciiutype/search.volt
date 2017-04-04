<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("ciiutype/new", "Create ") }}</li>
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
                <th>Id Of Ciiu</th>
            <th>Ciiu Of Type</th>
            <th>Section</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for ciiu_type in page.items %}
            <tr>
                <td>{{ ciiu_type.id_ciiu }}</td>
            <td>{{ ciiu_type.ciiu_type }}</td>
            <td>{{ ciiu_type.section }}</td>
            <td>{{ ciiu_type.status }}</td>
            <td>{{ ciiu_type.created_at }}</td>

                <td>{{ link_to("ciiutype/edit/"~ciiu_type.id_ciiu, "Edit") }}</td>
                <td>{{ link_to("ciiutype/delete/"~ciiu_type.id_ciiu, "Delete") }}</td>
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
                <li>{{ link_to("ciiutype/search", "First") }}</li>
                <li>{{ link_to("ciiutype/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("ciiutype/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("ciiutype/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
