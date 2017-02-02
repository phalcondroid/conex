<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("eventtype/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit event_type
    </h1>
</div>

{{ content() }}

{{ form("eventtype/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldEventType" class="col-sm-2 control-label">Event Of Type</label>
    <div class="col-sm-10">
        {{ text_field("event_type", "size" : 30, "class" : "form-control", "id" : "fieldEventType") }}
    </div>
</div>

{{ hidden_field("id_event_type") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
