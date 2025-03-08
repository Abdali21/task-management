<x-master title="Add Task">
    <div class="flex justify-center items-center h-screen">
        <form method="POST" action="{{route("tasks.update", $task->id)}}" class="p-6 w-96 rounded-lg bg-gray-100">
            @csrf
            @method("PUT")
            <h2 class="text-2xl font-semibold mb-4">Edit Task</h2>

            <div class="mb-4 flex flex-col space-y-2">
                <label>Task :</label>
                <input type="text" class="p-2 w-full bg-gray-50" placeholder="enter your task" name="title"
                    value="{{old("title", $task->title)}}">
                @error('title')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror         
            </div>

            <div class="mb-4 flex flex-col space-y-2">
                <label>Status : </label>
                <select name="status"class="p-2 w-full bg-gray-50">
                    <option value="Not Started">Not Started</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select>
                @error('status')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror
            </div>

            <div class="mb-4 flex flex-col space-y-2">
                <label>Due Date :</label>
                <input type="date" name="due_date" value="{{old("due_date", $task->due_date)}}"
                class="p-2 w-full bg-gray-50">
                @error('due_date')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror         
            </div>

            <button type="submit" class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-white w-full">
                Edit
            </button>
        </form>
    </div>
</x-master>