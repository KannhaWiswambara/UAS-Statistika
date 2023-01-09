<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h2 class="text-center text-black">Student Data</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">GPA</th>
            </tr>
		</thead>
		<tbody>
        @foreach ($students as $s)
        <tr>
            <td>{{ $s->student_id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->gpa }}</td>
          </tr>
        @endforeach
		</tbody>
	</table>
</body>
</html>
