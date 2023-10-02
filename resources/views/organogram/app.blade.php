
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Organogram Example</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
}

.organogram {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.department {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
}

.team {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
}

.employee {
    background-color: #f0f0f0;
    padding: 5px;
    margin: 5px;
}

</style>
<body>
    <div class="organogram">
        <div class="department">
            <h3>CEO Office</h3>
            <div class="team">
            <div class="department">
    <h3>{{ $department->name }}</h3>
    @foreach ($department->teams as $team)
        @include('organogram.team', ['team' => $team])
    @endforeach
    @foreach ($department->children as $child)
        @include('organogram.department', ['department' => $child])
    @endforeach
</div>
<div class="container">
        @foreach ($rootDepartments as $department)
            @include('organogram.department', ['department' => $department])
        @endforeach
    </div>
    <div class="team">
    <h4>{{ $team->name }}</h4>
    @foreach ($team->employees as $employee)
        <p>{{ $employee->name }}</p>
    @endforeach
</div>

            </div>
        </div>
    </div>
</body>
</html>
