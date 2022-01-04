

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
        <table bgcolor="gray" border="3px">
            <tr>
                <td style="padding: 30px">Name</td>
                <td style="padding: 30px">Email</td>
                <td style="padding: 30px">Action</td>
            </tr>
            @foreach($data as $person)
            <tr align="center">
                <td>{{ $person->name }}</td>
                <td>{{ $person->email  }}</td>
                @if($person->usertype =='0')
                <td><a href="{{ url('/deleteusers',$person->id) }}">Delete</a></td>
                @else
                <td><a>Not Allowed</a></td>
                @endif
                    @endforeach
            </tr>
        </table>
    </div>
</div>

@include('admin.adminJS')
</body>
</html>
