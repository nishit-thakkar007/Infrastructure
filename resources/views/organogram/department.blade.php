<div class="department">
    <h3>{{ $department->name }}</h3>
    @foreach ($department->teams as $team)
        @include('organogram.team', ['team' => $team])
    @endforeach
    @foreach ($department->children as $child)
        @include('organogram.department', ['department' => $child])
    @endforeach
</div>
