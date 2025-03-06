@if (session()->has("success"))
    <div class="p-2 bg-green-500 text-white">
        {{session("success")}}
    </div>
@endif
