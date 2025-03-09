<x-master title="Tasks">
    <h2 class="text-2xl font-semibold m-4">My Tasks : </h2>
    <div class="grid grid-cols-3">
        @foreach ($tasks as $task)
            <x-task-card :task="$task" />
        @endforeach
        <a href="{{route("tasks.create")}}" class="m-4 rounded-lg bg-gray-100 p-28 flex items-center justify-center cursor-pointer
            transition delay-150 duration-300 ease-in-out hover:-translate-y-2 shadow">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </span>
        </a>
    </div>
</x-master>