<div class="team">
    <h4>{{ $team->name }}</h4>
    @foreach ($team->employees as $employee)
        <p>{{ $employee->name }}</p>
    @endforeach
</div>
