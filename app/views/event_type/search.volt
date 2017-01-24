<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("event_type/index", "Go Back") }}</li>
            <li class="next">{{ link_to("event_type/new", "Create ") }}</li>
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
                <th>Id Of Event Of Type</th>
            <th>Event Of Type</th>
            <th>Status</th>
            <th>Created</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for event_type in page.items %}
            <tr>
                <td>{{ event_type.id_event_type }}</td>
            <td>{{ event_type.event_type }}</td>
            <td>{{ event_type.status }}</td>
            <td>{{ event_type.created_at }}</td>

                <td>{{ link_to("event_type/edit/"~event_type.id_event_type, "Edit") }}</td>
                <td>{{ link_to("event_type/delete/"~event_type.id_event_type, "Delete") }}</td>
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
                <li>{{ link_to("event_type/search", "First") }}</li>
                <li>{{ link_to("event_type/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("event_type/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("event_type/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
