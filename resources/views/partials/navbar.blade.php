<nav class="flex items-center justify-around bg-blue-500 py-2 text-white">
    <div>
        <a href="{{route("home")}}">
            Task Management
        </a>
    </div>
    <div class="flex items-center space-x-16">
        <a href="{{route("tasks.create")}}">Add Task</a>
        <a href="{{route("tasks.index")}}">All Tasks</a>
        <a href="{{route("login.show")}}">
            Login
        </a>
    </div>
</nav>