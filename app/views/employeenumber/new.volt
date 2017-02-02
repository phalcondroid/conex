<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("employeenumber/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create employee_number
    </h1>
</div>

{{ content() }}

{{ form("employeenumber/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldEmployeeNumber" class="col-sm-2 control-label">Employee Of Number</label>
    <div class="col-sm-10">
        {{ text_field("employee_number", "size" : 30, "class" : "form-control", "id" : "fieldEmployeeNumber") }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
