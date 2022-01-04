<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.admincss')
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')

    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color: blue;" type="text" name="nameF" value="{{ $data->name }}" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color: blue;" type="number" name="price" value="{{ $data->price }}" required>
            </div>

            <div>
                <label>Description</label>
                <input style="color: blue;" type="text" name="description" value="{{ $data->description }}" required>
            </div>

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/{{ $data->image }}" alt="">
            </div>

            <div>
                <label>New image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <input class="btn btn-success" type="submit" name="submit" value="Save">
                {{--                <input class="btn btn-primary" type="submit" name="submit" value="Update">--}}
            </div>
        </form>

        <hr>
        <br>
        <div>
</div>
@include('admin.adminJS')
</body>
</html>
