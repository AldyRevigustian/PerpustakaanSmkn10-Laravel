<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table  colspan=10>
        <tr>
            <th>
                Visitor Id
            </th>
            <th>
                Member Id
            </th>
            <th>
                Member Name
            </th>
            <th>
                Institution
            </th>
            <th>
                Created At
            </th>
        </tr>
        @foreach ($visitor as $v)
            <tr>
                <td>
                    {{ $v->visitor_id }}
                </td>
                <td>
                    {{ $v->member_id }}
                </td>
                <td>
                    {{ $v->member_name }}
                </td>
                <td>
                    {{ $v->institution }}
                </td>
                <td>
                    {{ $v->checkin_date }}
                </td>
            </tr>
        @endforeach
    </table>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="member_name" placeholder="member_name">
        <input type="text" name="member_id" placeholder="member_id">
        <input type="text" name="institution" placeholder="institution">

        <button type="submit">Submit</button>
    </form>
</body>

</html>
