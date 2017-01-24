<div class="page-header">
    <h1>
        Search ciiu_type
    </h1>
    <p>
        {{ link_to("ciiu_type/new", "Create ciiu_type") }}
    </p>
</div>

{{ content() }}

{{ form("ciiu_type/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCiiu" class="col-sm-2 control-label">Id Of Ciiu</label>
    <div class="col-sm-10">
        {{ text_field("id_ciiu", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCiiu") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCiiuType" class="col-sm-2 control-label">Ciiu Of Type</label>
    <div class="col-sm-10">
        {{ text_field("ciiu_type", "size" : 30, "class" : "form-control", "id" : "fieldCiiuType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldSection" class="col-sm-2 control-label">Section</label>
    <div class="col-sm-10">
        {{ text_field("section", "size" : 30, "class" : "form-control", "id" : "fieldSection") }}
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
