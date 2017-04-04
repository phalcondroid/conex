<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("companyposition/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit company_position
    </h1>
</div>

{{ content() }}

{{ form("companyposition/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

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

{{ hidden_field("id_company_position") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
