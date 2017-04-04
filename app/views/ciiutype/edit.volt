<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("ciiutype/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit ciiu_type
    </h1>
</div>

{{ content() }}

{{ form("ciiutype/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldCiiuType" class="col-sm-2 control-label">Ciiu Of Type</label>
    <div class="col-sm-10">
        {{ text_field("ciiu_type", "size" : 30, "class" : "form-control", "id" : "fieldCiiuType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldSection" class="col-sm-2 control-label">Section</label>
    <div class="col-sm-10">
        {{ text_field("section", "size" : 30, "class" : "form-control", "id" : "fieldSection") }}
    </div>
</div>

{{ hidden_field("id_ciiu") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
