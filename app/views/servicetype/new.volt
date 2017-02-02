<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("servicetype/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create service_type
    </h1>
</div>

{{ content() }}

{{ form("servicetype/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldServiceType" class="col-sm-2 control-label">Service Of Type</label>
    <div class="col-sm-10">
        {{ text_field("service_type", "size" : 30, "class" : "form-control", "id" : "fieldServiceType") }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
