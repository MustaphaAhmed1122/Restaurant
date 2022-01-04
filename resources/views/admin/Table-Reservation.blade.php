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

    <div style="position: relative; top: 70px ; right: -150px;">
        <table bgcolor="gray" border="1px">
            <tr>
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">email</th>
                <th style="padding: 30px;">phone</th>
                <th style="padding: 30px;">date</th>
                <th style="padding: 30px;">time</th>
                <th style="padding: 30px;">message</th>
            </tr>
            @foreach($data as $show)
            <tr align="center">
                <td>{{ $show->name }}</td>
                <td>{{ $show->email }}</td>
                <td>{{ $show->	phone }}</td>
                <td>{{ $show->date }}</td>
                <td>{{ $show->time }}</td>
                <td>{{ $show->	message }}</td>
            </tr>
        </table>
        @endforeach

    </div>
</div>
@include('admin.adminJS')
</body>
</html>
