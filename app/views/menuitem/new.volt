
<a href="{{ url("menuitem/index/" ~ id_menu) }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

{{ form("menuitem/new", "method" : "post") }}

    {{ hidden_field("", "name" : "id_menu", "value" : id_menu) }}

    <table class="table table-striped">
        <tbody>
            {% for element in menuItemForm %}
                <tr>
                    <th>
                        {{ element.getLabel() }}
                    </th>
                    <td>
                        <input type="text" class="form-control" name="{{ element.getName() }}" >
                    </td>
                </tr>
            {% endFor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align:center">
                    <button type="submit" class="btn btn-success">
                        <i class=" glyphicon glyphicon-floppy-disk"></i>
                        &nbsp;
                        Guardar
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
{{ end_Form() }}
