<x-master title="Add Task">
   <form method="POST" action="{{route("tasks.store")}}">
    @csrf
    <div>
        <input type="text" placeholder="enter your task" name="title">  
        @error('title')
        {{$message}}
    @enderror  
    </div>
    <div>
        <select name="status">
            <option value="#">Choose one</option>
            <option value="Not Started">Not Started</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed"> Completed</option>
        </select>
        @error('status')
            {{$message}}
        @enderror
    </div>
    <div>
        <input type="date" name="due_date">
    </div>
    <button type="submit">
        submit
    </button>
   </form>
</x-master>