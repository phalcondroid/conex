
<a href="{{ url("menu/index") }}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

{{ form("menu/edit/" ~ idMenu, "method" : "post") }}

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>
                    Type menu
                </th>
                <td>
                    {{ menuForm.render("id_type_menu") }}
                </td>
            </tr>
            <tr>
                <th>
                    Role
                </th>
                <td>
                    {{ menuForm.render("id_role") }}
                </td>
            </tr>
            <tr>
                <th>
                    Controller
                </th>
                <td>
                    {{ menuForm.render("name") }}
                </td>
            </tr>
            <tr>
                <th>
                    Label
                </th>
                <td>
                    {{ menuForm.render("label") }}
                </td>
            </tr>
            <tr>
                <th>
                    Action default
                </th>
                <td>
                    {{ menuForm.render("default") }}
                </td>
            </tr>
            <tr>
                <th>
                    Logo
                </th>
                <td>
                    {{ menuForm.render("logo") }}
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
