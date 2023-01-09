<!DOCTYPE html>
<html>

	<table>
        <thead>
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $s)
            <tr>
                <td>{{ $s->NIM }}</td>
                <td>{{ $s->Name }}</td>
                <td>{{ $s->Score }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>
