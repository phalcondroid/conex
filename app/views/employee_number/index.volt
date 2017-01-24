<div class="page-header">
    <h1>
        Search employee_number
    </h1>
    <p>
        {{ link_to("employee_number/new", "Create employee_number") }}
    </p>
</div>

{{ content() }}

{{ form("employee_number/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdEmployeeNumber" class="col-sm-2 control-label">Id Of Employee Of Number</label>
    <div class="col-sm-10">
        {{ text_field("id_employee_number", "type" : "numeric", "class" : "form-control", "id" : "fieldIdEmployeeNumber") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEmployeeNumber" class="col-sm-2 control-label">Employee Of Number</label>
    <div class="col-sm-10">
        {{ text_field("employee_number", "size" : 30, "class" : "form-control", "id" : "fieldEmployeeNumber") }}
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
