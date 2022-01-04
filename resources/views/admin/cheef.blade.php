<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')
</head>
<body>
<br><br>
<hr>
<div class="container-scroller">
    @include('admin.navbar')

    <form action="{{ url('/uploadcheef') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input style="color: black" type="text" name="name" required placeholder="Enter name of cheefs">
        </div>
        <div>
            <label>Speciality</label>
            <input style="color: black" type="text" name="speciality" required placeholder="Enter his speciality">
        </div>
        <div>
            <input type="file" name="image" required>
        </div>
        <div>
            <input class="btn btn-success" type="submit" value="save">
        </div>
        <br>
        <hr>
    <table bgcolor="black">
        <tr>
            <th style="padding:30px;" >Chef's Name</th>
            <th style="padding:30px;" >Speciality</th>
            <th style="padding:30px;" >Image</th>
            <th style="padding:30px;" >Action1</th>
            <th style="padding:30px;" >Action2</th>
        </tr>
        @foreach($data as $show)
        <tr align="center">
            <td>{{ $show->name }}</td>
            <td>{{ $show->speciality }}</td>
            <td height="100" width="100"><img src="/chefimage/{{$show->image}}"></td>
            <td><a href="{{ url('/updatechef',$show->id) }}">Update</a></td>
            <td><a href="{{ url('/deletechef',$show->id) }}">Delete</a></td>

        </tr>
        @endforeach
    </table>
    </form>

</div>
<br><br>
<hr>
@include('admin.adminJS')
</body>
</html>
