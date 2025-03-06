<x-master title="Add Task">
    <div class="h-screen flex justify-center items-center ">
        <form method="POST" action="{{route("tasks.store")}}" class="bg-gray-100 p-6 w-96">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">Create Task :</h2>
            <div class="flex flex-col space-y-2 mb-4">
                <label>Task :</label>
                <input type="text" placeholder="Create your task" name="title" class="p-2 border border-gray-300">
                @error('title')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror      
            </div>

            <div class="flex flex-col space-y-2 mb-4">
                <label>Status : </label>
                <select name="status" class="p-2 border border-gray-300">
                    <option value="#">Choose your status task</option>
                    <option value="Not Started">Not Started</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed"> Completed</option>
                </select>
                @error('status')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror
            </div>

            <div class="flex flex-col space-y-2 mb-4">
                <label>Due Date :</label>
                <input type="date" name="due_date" class="p-2 border border-gray-300">
                @error('due_date')
                    <span class="text-red-500 mt-1">
                        {{$message}}
                    </span>
                @enderror
            </div>

            <button type="submit" class="w-full text-white py-2 px-4 bg-blue-500 hover:bg-blue-600">
                Create
            </button>
        </form>
    </div>
</x-master>