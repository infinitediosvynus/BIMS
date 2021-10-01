@extends('layout.app')
<title>Dashboard</title>
@section('content')
<div class="w-60 p-2">
    <h1 class="text-xl font-black text-center">Dashboard</h1>
    <div class="px-2 mt-3 space-y-3">
        <a href="" class="flex justify-between items-center shadow p-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
            <h2>Residents</h2>
            <span>1000000</span>
        </a>
        </a>
    </div>
</div>
<div class="flex flex-grow bg-gray-500">
    <h2>Notifications</h2>
</div>
@endsection