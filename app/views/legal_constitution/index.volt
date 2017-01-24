<div class="page-header">
    <h1>
        Search legal_constitution
    </h1>
    <p>
        {{ link_to("legal_constitution/new", "Create legal_constitution") }}
    </p>
</div>

{{ content() }}

{{ form("legal_constitution/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdLegalConstitution" class="col-sm-2 control-label">Id Of Legal Of Constitution</label>
    <div class="col-sm-10">
        {{ text_field("id_legal_constitution", "type" : "numeric", "class" : "form-control", "id" : "fieldIdLegalConstitution") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldLegalConstitution" class="col-sm-2 control-label">Legal Of Constitution</label>
    <div class="col-sm-10">
        {{ text_field("legal_constitution", "size" : 30, "class" : "form-control", "id" : "fieldLegalConstitution") }}
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
