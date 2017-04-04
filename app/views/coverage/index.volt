<div class="page-header">
    <h1>
        Search coverage
    </h1>
    <p>
        {{ link_to("coverage/new", "Create coverage") }}
    </p>
</div>

{{ content() }}

{{ form("coverage/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCoverage" class="col-sm-2 control-label">Id Of Coverage</label>
    <div class="col-sm-10">
        {{ text_field("id_coverage", "type" : "numeric", "class" : "form-control", "id" : "fieldIdCoverage") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCoverage" class="col-sm-2 control-label">Coverage</label>
    <div class="col-sm-10">
        {{ text_field("coverage", "size" : 30, "class" : "form-control", "id" : "fieldCoverage") }}
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
