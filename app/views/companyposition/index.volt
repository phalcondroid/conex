<div class="page-header">
    <h1>
        Search company_position
    </h1>
    <p>
        {{ link_to("companyposition/new", "Create company_position") }}
    </p>
</div>

{{ content() }}

{{ form("companyposition/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCompanyPosition" class="col-sm-2 control-label">Id Of Company Of Position</label>
    <div class="col-sm-10">
        {{ text_field("id_company_position", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCompanyPosition") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPosition" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-10">
        {{ text_field("position", "size" : 30, "class" : "form-control", "id" : "fieldPosition") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        {{ text_area("description", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldDescription") }}
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
