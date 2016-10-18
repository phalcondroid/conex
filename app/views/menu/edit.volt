
<a href="{{ url("menu/index") }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

{{ form("menu/edit/" ~ idMenu, "method" : "post") }}

    <table class="table table-striped">
        <tbody>
            {% for element in menuForm %}
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
