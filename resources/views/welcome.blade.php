<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css">
</head>

<style>

</style>

<body>
    <div class="content" style="display: flex;
    flex-direction: column;
    align-items: center;">

        <table class="table table-bordered" style="display: flex;
        flex-direction: column;
        align-items: center;">

           <tr>
                <th class="col">
                    ID
                </th >
                <th class="col">
                    Member Id
                </th>
                <th class="col">
                    Member Name
                </th>
                <th class="col">
                    Institution
                </th>
                <th class="col">
                    Created At
                </th>
            </tr>
            @foreach ($visitor as $v)
                <tr>

                    <td>
                        {{ $v->visitor_id }}
                    </td>
                    <td>
                        {{ $v->member_id == null ? '-' : $v->member_id }}
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

        <form action="{{ route('store') }}" method="POST" style="display: flex; gap:10px; ">
            @csrf
            <select id="select">
                <option value="member" selected disabled>Choose Type</option>
                <option value="member">Member</option>
                <option value="non">Non Member</option>
            </select>

            <div id="select-option" hidden>
                <select name="member_id" id="select-id" style="width: 200px">
                    <option value="member" selected>Select Member</option>
                    @foreach ($member as $u)
                        <option value="{{ $u->member_id }}">{{ $u->member_id }} | {{ $u->member_name }}</option>
                    @endforeach
                </select>
            </div>

            <input type="text" name="member_name" placeholder="Member Name" id="member_name" hidden>
            <input type="text" name="institution" placeholder="Institution" hidden id="institution">

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('#select-id').select2({})
</script>

<script>
    let select = document.getElementById('select')
    select.addEventListener('input', () => {
        console.log(select.value);
        if (select.value == 'member') {
            document.getElementById('member_name').hidden = true

            document.getElementById('select-option').hidden = false

            document.getElementById('institution').hidden = true
        } else {
            document.getElementById('member_name').hidden = false

            document.getElementById('select-option').hidden = true

            document.getElementById('institution').hidden = false

        }
    })
</script>
