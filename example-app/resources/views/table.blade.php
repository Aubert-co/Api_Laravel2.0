<table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Age</th>
                <th>Pet</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($values as $value)
            <tr >
                <td><input type="checkbox" onclick="onlyOneCheck( '{{$value->id}}',this.checked )" id="check" value="{{$value->id}}"></td>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->pet}}</td>
                <td>
                    <i class="material-icons" id="delete_icons" onclick="Delete( '{{ $value->id }} ')">delete</i>
                    <i class="material-icons" id="edit_icons" onclick="Edit('{{$value->id}}','{{$value->name}}','{{$value->age}}','{{$value->pet}}' )">edit</i>

                </td>
            </tr>
        @endforeach

        </tbody>
</table>

