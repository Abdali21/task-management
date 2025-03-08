<div class="m-4 rounded-lg bg-gray-100 p-6 transition delay-150 duration-300 ease-in-out hover:-translate-y-2">
    <div class="flex flex-col space-y-2">
        <div class="mb-4 flex items-center justify-between">
            <span class="py-1 px-3 text-sm font-medium rounded-md text-gray-600
            @if($task->status === 'Completed') bg-green-100 text-green-700
            @elseif($task->status === 'Not Started') bg-gray-50 text-yellow-700
            @else bg-blue-100 @endif">
                {{$task->status}}
            </span>
            <span> 🔴 </span>
        </div>

        <div class="rounded-lg bg-white p-4 text-gray-700">
            <span>{{$task->title}}</span>
        </div>

        <div class="flex justify-between rounded-lg bg-white px-4 py-2 text-gray-600">
            <p class="text-sm"><span class="font-semibold">End Date : </span>{{$task->due_date}}</p>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </span>
        </div>

        <div class="flex justify-between rounded-lg bg-white px-4 py-2 text-gray-600">
            <p class="text-sm"><span class="font-semibold">Assigned By :</span> {{$task->profile->name}}</p>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </span>
        </div>

        <div class="mt-2 flex items-center space-x-2">
            <a class="w-full text-center rounded-md bg-blue-500 p-2 text-white hover:bg-blue-600"
                href="{{route("tasks.edit", $task->id)}}">
                Edit
            </a>
            <form method="POST" class="w-full text-center rounded-md bg-red-500 p-2 text-white hover:bg-red-600" action="{{route("tasks.destroy", $task->id)}}">
                @csrf
                @method("delete")
                <button  onclick="return confirm('Are you sure do you want to remove this task ?')">Delete</button>
            </form>
        </div>
    </div>
</div>