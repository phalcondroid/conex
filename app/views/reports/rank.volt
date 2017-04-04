<div class="container" style="margin-top: 80px;">

    <h2>Reporte de ventas</h2>

    <div class="panel panel-default" style="margin-top : 30px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Type
                        </th>
                        <th>
                            Message
                        </th>
                        <th>
                            User
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in deals %}
                    <tr>
                        <th>
                            {{item.type}}
                        </th>
                        <th>
                            {{ item.message }}
                        </th>
                        <th>
                            {{ item.Users.name }}
                        </th>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
