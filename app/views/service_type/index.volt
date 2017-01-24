<div class="page-header">
    <h1>
        Search service_type
    </h1>
    <p>
        {{ link_to("service_type/new", "Create service_type") }}
    </p>
</div>

{{ content() }}

{{ form("service_type/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdServiceType" class="col-sm-2 control-label">Id Of Service Of Type</label>
    <div class="col-sm-10">
        {{ text_field("id_service_type", "type" : "numeric", "class" : "form-control", "id" : "fieldIdServiceType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldServiceType" class="col-sm-2 control-label">Service Of Type</label>
    <div class="col-sm-10">
        {{ text_field("service_type", "size" : 30, "class" : "form-control", "id" : "fieldServiceType") }}
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
