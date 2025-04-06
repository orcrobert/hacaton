@auth
<x-layout>
    @foreach ($tasks as $task)
        <div>
            <a href="/task/{{ $task->id }}">
                Category: {{ $task->category->name }}<br>
                Title: {{ $task->title }}<br>
                Description: {{ $task->description }}<br>
                Deadline: {{ $task->deadline }}<br>
                
            </a>
            <a href="/task/{{ $task->id }}/edit" >Edit task</a>
            <br>
            <br>
        </div>
    @endforeach

    <div>
        {{ $tasks->links() }}
    </div>
</x-layout>
@endauth

@guest
    <h1>Login to see tasks!</h1>
@endguest