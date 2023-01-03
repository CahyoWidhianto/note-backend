<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <P>
        Name : {{session('name')}} <br>
        Email : {{session('email')}}
    </P>
    <h1>List Notes</h1>
    <table>
        <thead>
            <th>No</th>
            <th>Title</th>
            <th>Notes</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach ($notes as $note)
            <tr>
                <td></td>
                <td>{{$note->n_title}}</td>
                <td>{{$note->n_note}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <form action="{{url('notes/create')}}">
            @csrf
            <tr>
                <td colspan="="2>
                    <input type="text" name="title" placeholder="Note Title">
                </td>
                <td>
                    <textarea name="note" cols="30" rows="10"></textarea>
                </td>
                <td>
                    <button type="submit">simpan</button>
                </td>
            </tr>
        </form>
    </tfoot>
    </table>
</body>
</html>