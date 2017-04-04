{{ form(type, "method" : "post") }}
    <table class="table table-striped">
        <tbody>
            {% for element in roleForm %}
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
