<div class="page-header">
    <h1>
        Search company_assets
    </h1>
    <p>
        {{ link_to("companyassets/new", "Create company_assets") }}
    </p>
</div>

{{ content() }}

{{ form("companyassets/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCompanyAssets" class="col-sm-2 control-label">Id Of Company Of Assets</label>
    <div class="col-sm-10">
        {{ text_field("id_company_assets", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCompanyAssets") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCompanyAssets" class="col-sm-2 control-label">Company Of Assets</label>
    <div class="col-sm-10">
        {{ text_field("company_assets", "size" : 30, "class" : "form-control", "id" : "fieldCompanyAssets") }}
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
