

{{ form("products/edit/" ~ idProduct, "method" : "post", "enctype" : "multipart/form-data", "id": "edit_form") }}
    <h2>Edición de producto</h2>
    <a href="{{ url("services/index") }}" class="btn btn-danger pull-right">
        <i class="glyphicon glyphicon-share-alt"></i>
        Volver
    </a>
    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th style="width : 40%;">
                            Imagen
                        </th>
                        <th>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        {{ image(product.logo, "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="image" value="" id="image">
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            <input type="text" name="name" class="form-control" value="{{product.name}}" id="name">
                        </th>
                    </tr>
                    <tr>
                        <th>Empresa</th>
                        <th>
                             <select class="form-control" name="company" id="company" required>
                                <option value="">......</option>
                                {% for item in companies %}
                                    {% set selected = "" %}
                                    {% if item.id_company == product.id_company %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{selected}} value="{{ item.id_company }}">
                                        {{ item.name }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo de producto
                        </th>
                        <th>
                            <select class="form-control" name="productType" id="productType" required>
                                <option value="">......</option>
                                {% for item in productType %}
                                    {% set selected = "" %}
                                    {% if item.id_product_type == product.id_product_type %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{selected}} value="{{ item.id_product_type }}">
                                        {{ item.product_type }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Capacidad de producción
                        </th>
                        <th>
                            <select class="form-control" name="productCapacity" id="productCapacity" required>
                                <option value="">......</option>
                                {% for item in productCapacity %}
                                    {% set selected = "" %}
                                    {% if item.id_product_capacity == product.id_product_capacity %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{selected}} value="{{ item.id_product_capacity }}">
                                        {{ item.product_capacity }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea name="description" id="description" rows="10" cols="40" required>{{product.description}}</textarea>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <button type="submit" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Actualización
                            </button>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{{ end_form() }}

<script>
$(function () {
    $("#description").jqte();
    $('#edit_form').validate();
});
</script>
