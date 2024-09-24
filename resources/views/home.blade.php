@extends('layouts.user')
 
@section('title', 'ARCHILAND INTI PERKASA')
 
@section('contents')
<header class="bg-white shadow">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Home
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('public_asset/image/rumah.png')}}" alt="..." />
            </div>
        </div>
    </div>
</main>
@endsection