<x-master title="tasks">
    <h2 class="text-2xl font-semibold my-4">My Tasks :</h2>
    <table class="border-collapse border border-gray-400 w-full">
        <thead>
            <tr>
                <th class="border border-gray-300 py-2">
                    Task
                </th>
                <th class="border border-gray-300 py-2">
                    Status
                </th>
                <th class="border border-gray-300 py-2">
                    Due Date
                </th>
                <th class="border border-gray-300 py-2">
                    Operations
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <td class="border border-gray-300 p-2">
                            - {{$task->title}}
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                       <span class="py-1 px-4 rounded-md bg-gray-300">
                          {{$task->status}}
                       </span>
                    </td>
                    <td class="border border-gray-300 p-2 text-center">
                        {{$task->due_date ?? "No Date"}}
                    </td>
                    <td class="flex items-center justify-center space-x-4 border border-gray-300 p-2">
                        <a href="{{route("tasks.edit", $task->id)}}">
                            <span class="px-6 py-1 bg-blue-500 text-white rounded-md">
                               Edit
                            </span>
                        </a>
                        <form method="post" action="{{route("tasks.destroy", $task->id)}}">
                            @method("delete")
                            @csrf
                            <button class="px-6 py-1 bg-red-500 text-white rounded-md cursor-pointer">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-master>