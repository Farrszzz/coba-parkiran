<!doctype html>
<html>
<div class="row">
<div class="col s12">
<br/>
<a href="/create"><button class="btn waves-effect orange white-text">Tambah Data</button></a> <br>
<div class="card-panel white-text blue">
<h3>Daftar User</h3>
</br>
<table>
<tr>
<td>ID</td>
<td>UserName</td>
<td>Role</td>
<td>Mall</td>
<td>Action</td>
</tr>
</thead>
@foreach($data as $usr)
<tr>
<td>
{{$usr->id_user}}
</td>
<td>
{{$usr->username}}
</td>
<td>
{{$usr->role}}
</td>
<td>
{{$usr->mall}}
</td>
<td>
<a href="/user/delete/{{$usr->id_user}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn waves-effect red white-text">Hapus</button></a>
<a href="/user/edit/{{$usr->id_user}}"><button class="btn waves-effect orange white-text">Edit</button></a>
</td>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
