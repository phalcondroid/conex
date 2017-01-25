<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("ciiu/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit ciiu
    </h1>
</div>

{{ content() }}

{{ form("ciiu/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldIdCiiuType" class="col-sm-2 control-label">Id Of Ciiu Of Type</label>
    <div class="col-sm-10">
        {{ select('id_ciiu_type', ciiuType, 'using': ['id', 'ciiu_type'], "id" : "fieldIdCiiuType") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCiiu" class="col-sm-2 control-label">Ciiu</label>
    <div class="col-sm-10">
        {{ text_field("ciiu", "size" : 30, "class" : "form-control", "id" : "fieldCiiu") }}
    </div>
</div>

{{ hidden_field("id_ciiu") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
