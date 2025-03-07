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
            <div class="relative">
                <span class="cursor-pointer" id="profile">
                   My Profile
                </span>
                <div id="popup" class="flex flex-col space-y-2 absolute top-8 bg-gray-400 p-2 hidden">
                    <p>{{auth()->user()->name}}</p>
                    <p>{{auth()->user()->email}}</p>
                    <a class="px-4 py-1 bg-gray-500 hover:bg-gray-600 w-full" href="{{route("login.logout")}}">
                        Logout
                    </a>
                </div>
            </div>
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