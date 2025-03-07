<nav class="flex items-center justify-around bg-blue-500 py-2 text-white">
    <div>
        <a href="{{route("home")}}">
            Task Management
        </a>
    </div>
    <div class="flex items-center space-x-16">
        <a href="{{route("tasks.create")}}">Add Task</a>
        <a href="{{route("tasks.index")}}">All Tasks</a>
         @auth
             <a href="{{route("login.logout")}}">
             Logout
             </a>
         @endauth
         @guest
           <div class="flex items-center space-x-4">
            <a href="{{route("login.show")}}">
                Login
            </a>
            <a href="{{route("profiles.create")}}">
                Register
            </a>
           </div>
         @endguest
    </div>
</nav>