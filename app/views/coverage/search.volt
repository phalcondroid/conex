<div class="row">
    <nav>
        <ul class="pager">
            <li class="next">{{ link_to("coverage/new", "Create ") }}</li>
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
                <th>Id Of Coverage</th>
            <th>Coverage</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for coverage in page.items %}
            <tr>
                <td>{{ coverage.id_coverage }}</td>
            <td>{{ coverage.coverage }}</td>
            <td>{{ coverage.status }}</td>
            <td>{{ coverage.created_at }}</td>

                <td>{{ link_to("coverage/edit/"~coverage.id_coverage, "Edit") }}</td>
                <td>{{ link_to("coverage/delete/"~coverage.id_coverage, "Delete") }}</td>
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
                <li>{{ link_to("coverage/search", "First") }}</li>
                <li>{{ link_to("coverage/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("coverage/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("coverage/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
