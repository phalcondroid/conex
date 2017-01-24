<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("legal_constitution/index", "Go Back") }}</li>
            <li class="next">{{ link_to("legal_constitution/new", "Create ") }}</li>
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
                <th>Id Of Legal Of Constitution</th>
            <th>Legal Of Constitution</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for legal_constitution in page.items %}
            <tr>
                <td>{{ legal_constitution.id_legal_constitution }}</td>
            <td>{{ legal_constitution.legal_constitution }}</td>
            <td>{{ legal_constitution.status }}</td>
            <td>{{ legal_constitution.created_at }}</td>

                <td>{{ link_to("legal_constitution/edit/"~legal_constitution.id_legal_constitution, "Edit") }}</td>
                <td>{{ link_to("legal_constitution/delete/"~legal_constitution.id_legal_constitution, "Delete") }}</td>
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
                <li>{{ link_to("legal_constitution/search", "First") }}</li>
                <li>{{ link_to("legal_constitution/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("legal_constitution/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("legal_constitution/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
