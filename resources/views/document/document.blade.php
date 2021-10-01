@extends('layout.app')
<title>Document</title>

@section('content')
<div class="w-60 p-2">
    <h1 class="text-xl font-black text-center">Documents</h1>
    <div class="px-2 mt-3 flex flex-col space-y-3">
        <a href="" class="flex justify-between space-x-3 items-center shadow p-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                    clip-rule="evenodd" />
            </svg>
            <h2>Certificate of Residency</h2>
        </a>
        <a href="" class="flex justify-between space-x-3 items-center shadow p-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                    clip-rule="evenodd" />
            </svg>
            <h2>Barangay Certification</h2>
        </a>
    </div>
</div>
<div class="flex flex-grow bg-gray-500">

</div>

@endsection