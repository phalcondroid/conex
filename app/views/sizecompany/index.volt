<div class="page-header">
    <h1>
        Search size_company
    </h1>
    <p>
        {{ link_to("sizecompany/new", "Create size_company") }}
    </p>
</div>

{{ content() }}

{{ form("sizecompany/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdSizeCompany" class="col-sm-2 control-label">Id Of Size Of Company</label>
    <div class="col-sm-10">
        {{ text_field("id_size_company", "type" : "numeric", "class" : "form-control", "id" : "fieldIdSizeCompany") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldSizeCompany" class="col-sm-2 control-label">Size Of Company</label>
    <div class="col-sm-10">
        {{ text_field("size_company", "size" : 30, "class" : "form-control", "id" : "fieldSizeCompany") }}
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
