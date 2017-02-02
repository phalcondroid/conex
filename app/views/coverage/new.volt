<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("coverage/search", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create coverage
    </h1>
</div>

{{ content() }}

{{ form("coverage/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldCoverage" class="col-sm-2 control-label">Coverage</label>
    <div class="col-sm-10">
        {{ text_field("coverage", "size" : 30, "class" : "form-control", "id" : "fieldCoverage") }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
