<div class="">
<table style="width:50%">
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Email</th>
    <th>Educacion</th>
    <th>Fecha de nacimiento</th>
  </tr>
    @foreach($users as $user)
  <tr>
    <td style="text-align: center;">{{ $user->firt_name }}</td>
    <td style="text-align: center;">{{ $user->last_name }}</td>
    <td style=" text-align: center;">{{ $user->cedula }}</td>
    <td style=" text-align: center;">{{ $user->email }}</td>
    <td style=" text-align: center;">{{ $user->education }}</td>
    <td style=" text-align: center;">{{ $user->birthday }}</td>
  </tr>
    @endforeach
</table>
</div>
