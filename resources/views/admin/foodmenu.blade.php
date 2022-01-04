<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color: blue;" type="text" name="nameF" placeholder="write name" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color: blue;" type="number" name="price" placeholder="price" required>
            </div>
            <div>
                <label>Image</label>
                <input style="color: blue;" type="file" name="image" placeholder="put image" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color: blue;" type="text" name="description" placeholder="description" required>
            </div>
            <br>
            <div>
                <input class="btn btn-success" type="submit" name="submit" value="Save">
            </div>
        </form>

        <hr>
        <br>
        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">ID</th>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th height="200" width="200" style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>

                </tr>
                @foreach($data as $show)
                <tr align="center">
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->name }}</td>
                    <td>{{ $show->price }}</td>
                    <td>{{ $show->description }}</td>
                    <td><img height="200" width="200" src="/foodimage/{{ $show->image }}" alt=""></td>
                    <td><a href="{{ url('/deletemenu',$show->id) }}">Delete</a></td>
                    <td><a href="{{ url('/updateview',$show->id) }}">Update</a></td>
                </tr>
                @endforeach
            </table>


            </div>
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{ $data->links() }}
    </div>
    <br><br><br>
@include('admin.adminJS')
</body>
</html>
