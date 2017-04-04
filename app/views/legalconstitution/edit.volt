<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("legalconstitution/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit legal_constitution
    </h1>
</div>

{{ content() }}

{{ form("legalconstitution/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldLegalConstitution" class="col-sm-2 control-label">Legal Of Constitution</label>
    <div class="col-sm-10">
        {{ text_field("legal_constitution", "size" : 30, "class" : "form-control", "id" : "fieldLegalConstitution") }}
    </div>
</div>

{{ hidden_field("id_legal_constitution") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
