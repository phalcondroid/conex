<div class="page-header">
    <h1>
        Search event_type
    </h1>
    <p>
        {{ link_to("event_type/new", "Create event_type") }}
    </p>
</div>

{{ content() }}

{{ form("event_type/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdEventType" class="col-sm-2 control-label">Id Of Event Of Type</label>
    <div class="col-sm-10">
        {{ text_field("id_event_type", "type" : "numeric", "class" : "form-control", "id" : "fieldIdEventType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEventType" class="col-sm-2 control-label">Event Of Type</label>
    <div class="col-sm-10">
        {{ text_field("event_type", "size" : 30, "class" : "form-control", "id" : "fieldEventType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldStatus" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
        {{ text_field("status", "type" : "numeric", "class" : "form-control", "id" : "fieldStatus") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCreatedAt" class="col-sm-2 control-label">Created</label>
    <div class="col-sm-10">
        {{ text_field("created_at", "size" : 30, "class" : "form-control", "id" : "fieldCreatedAt") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Search', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
