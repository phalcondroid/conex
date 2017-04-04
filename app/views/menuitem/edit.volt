
<a href="{{ url("menuitem/index/" ~ idMenu) }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Editar menu item</h1>

<br>

{{ form("menuitem/edit/" ~ idMenu ~ "/" ~ idMenuItem, "method" : "post") }}

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>
                    Name menu item
                </th>
                <td>
                    {{ menuItemForm.render("menu_item") }}
                </td>
            </tr>
            <tr>
                <th>
                    Label
                </th>
                <td>
                    {{ menuItemForm.render("label") }}
                </td>
            </tr>
            <tr>
                <th>
                    Logo
                </th>
                <td>
                    {{ menuItemForm.render("logo") }}
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
