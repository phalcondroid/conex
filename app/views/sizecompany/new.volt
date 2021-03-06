<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("sizecompany/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create size_company
    </h1>
</div>

{{ content() }}

{{ form("sizecompany/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldSizeCompany" class="col-sm-2 control-label">Size Of Company</label>
    <div class="col-sm-10">
        {{ text_field("size_company", "size" : 30, "class" : "form-control", "id" : "fieldSizeCompany") }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
