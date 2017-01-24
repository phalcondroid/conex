<div class="page-header">
    <h1>
        Search ciiu
    </h1>
    <p>
        {{ link_to("ciiu/new", "Create ciiu") }}
    </p>
</div>

{{ content() }}

{{ form("ciiu/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCiiu" class="col-sm-2 control-label">Id Of Ciiu</label>
    <div class="col-sm-10">
        {{ text_field("id_ciiu", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCiiu") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldIdCiiuType" class="col-sm-2 control-label">Id Of Ciiu Of Type</label>
    <div class="col-sm-10">
        {{ text_field("id_ciiu_type", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCiiuType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCiiu" class="col-sm-2 control-label">Ciiu</label>
    <div class="col-sm-10">
        {{ text_field("ciiu", "size" : 30, "class" : "form-control", "id" : "fieldCiiu") }}
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
