<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br>
<hr>
    <div class="container-scroller">
     @include('admin.navbar')
    <div class="container">
        <br><br><br>
        <h1>Customer Order</h1>
            <form action="{{ url('/search') }}" method="GET" enctype="multipart/form-data">
                @csrf
                <input type="text" name="search" style="color: blue;">
                <input type="submit" value="search" class="btn btn-success">
            </form>
        <br>
    <table bgcolor="black">
         <tr>
                <td style="padding: 30px;">Name</td>
                <td style="padding: 30px;">Phone</td>
                <td style="padding: 30px;">Adress</td>
                <td style="padding: 30px;">Food Name</td>
                <td style="padding: 30px;">quantity</td>
                <td style="padding: 30px;">price</td>
                <td style="padding: 30px;">total price</td>
            </tr>
        <div id="result">
        @foreach($data as $show)
            <tr align="center">
                <td style="padding: 30px;">{{ $show->user_name }}</td>
                <td style="padding: 30px;">{{ $show->user_phone }}</td>
                <td style="padding: 30px;">{{ $show->user_address }}</td>
                <td style="padding: 30px;">{{ $show->food_name }}</td>
                <td style="padding: 30px;">{{ $show->quantity }}</td>
                <td style="padding: 30px;">{{ $show->price }}$</td>
                <td style="padding: 30px;">{{ $rest=$show->price * $show->quantity }}$</td>
            </tr>
            @endforeach
    </div>
        </table>
    </div>
</div>

<br>
<hr>
@include('admin.adminJS')
</body>
</html>
