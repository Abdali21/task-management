<nav class="flex items-center justify-between bg-blue-600 px-8 py-3 text-white shadow-lg">
    <!-- Logo / Brand -->
    <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
        <a href="{{route('home')}}" class="text-xl  hover:text-gray-300 transition">
            Task Management
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-8">
        <a href="{{route('tasks.create')}}" class="hover:text-gray-300 transition">Add Task</a>
        <a href="{{route('tasks.index')}}" class="hover:text-gray-300 transition">All Tasks</a>

        @auth
        <!-- Profile Dropdown -->
            <span class="cursor-pointer flex items-center space-x-2 relative" id="profile">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A8.967 8.967 0 0112 15a8.967 8.967 0 016.879 2.804M12 12a4 4 0 100-8 4 4 0 000 8z">
                    </path>
                </svg>
                <span>My Profile</span>
            </span>
            <div id="popup"
                class="absolute right-0 top-12 w-42 bg-gray-700 text-white rounded-md shadow-lg p-3 hidden space-y-2">
                <p class="font-semibold">{{ auth()->user()->name }}</p>
                <p class="text-sm text-gray-300">{{ auth()->user()->email }}</p>
                <a href="{{route('login.logout')}}"
                    class="block text-center bg-red-500 px-4 py-2 rounded-md hover:bg-red-600 transition">
                    Logout
                </a>
            </div>
        @endauth

        @guest
        <!-- Auth Links -->
        <div class="flex items-center space-x-4">
            <a href="{{route('login.show')}}"
                class="px-4 py-2 border border-white rounded-md hover:bg-white hover:text-blue-600 transition">
                Login
            </a>
            <a href="{{route('profiles.create')}}"
                class="px-4 py-2 bg-green-500 rounded-md hover:bg-green-600 transition">
                Register
            </a>
        </div>
        @endguest
    </div>
</nav>
 