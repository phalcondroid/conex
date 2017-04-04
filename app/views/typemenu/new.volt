
<a href="{{ url("typemenu/index") }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

{{ form("typemenu/new", "method" : "post") }}

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>
                    Type menu
                </th>
                <td>
                    {{ typeMenuForm.render("type_menu") }}
                </td>
            </tr>
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
