<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel Web Page</title>
</head>
<body>
Showing All People Record
    <<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Phone</th>
                <th>Room_ID</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as People)
            <tr>
                <td>{{ $people->id }} </td>
                <td>{{ $people->name }}</td>
                <td>{{ $people->city }}</td>
                <td>{{ $people->phone }}</td>
                <td>{{ $people->room_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>