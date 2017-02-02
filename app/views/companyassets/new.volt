<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("companyassets/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create company_assets
    </h1>
</div>

{{ content() }}

{{ form("companyassets/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldCompanyAssets" class="col-sm-2 control-label">Company Of Assets</label>
    <div class="col-sm-10">
        {{ text_field("company_assets", "size" : 30, "class" : "form-control", "id" : "fieldCompanyAssets") }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
