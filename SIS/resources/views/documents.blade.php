@extends('layouts.app')

@section('title', 'Documents Centre')

@section('content')
<div class="max-w-5xl mx-auto mt-8">
    <div class="flex border-b">
        <a href="{{ url('/profile') }}" 
           class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white border-r border-gray-200 hover:bg-gray-100 transition text-center">
            Profile
        </a>
        <a href="{{ url('/personal') }}" 
           class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white border-r border-gray-200 hover:bg-gray-100 transition text-center">
            Personal
        </a>
        <a href="{{ url('/documents') }}" 
           class="flex-1 py-3 px-6 text-xl font-semibold text-white bg-gradient-to-r from-green-500 to-green-700 rounded-tl-lg rounded-tr-lg text-center">
            Documents Centre
        </a>
    </div>

    <div class="bg-white p-6 rounded-b-lg shadow-md border border-gray-200">
        <div class="overflow-x-auto">
            <table class="w-full border-white border-gray-200">
                <thead>
                    <tr class="text-left text-black font-semibold bg-gradient-to-r from-yellow-500 via-yellow-400 to-green-500">
                        <th class="py-3 px-4">Document Type</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 ">Expiry</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-t">
                        <td class="py-3 px-4">Passport</td>
                        <td class="py-3 px-4 flex items-center space-x-2">
                            <span class="text-green-600">✔</span>
                            <span>Verified</span>
                        </td>
                        <td class="py-3 px-4">12/12/2026</td>
                        <td class="py-3 px-4 space-y-1">
                            <a href="#" class="text-green-700 hover:underline">Download</a><br>
                            <a href="#" class="text-green-700 hover:underline">Request Replacement</a>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Visa</td>
                        <td class="py-3 px-4 flex items-center space-x-2">
                            <span class="text-yellow-500">⚠</span>
                            <span>Expiring</span>
                        </td>
                        <td class="py-3 px-4">01/08/2025</td>
                        <td class="py-3 px-4">
                            <a href="#" class="text-green-700 hover:underline">Request Update</a>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">Academic Transcript</td>
                        <td class="py-3 px-4">
                            <span class="text-green-600">✔</span>
                        </td>
                        <td class="py-3 px-4">—</td>
                        <td class="py-3 px-4">
                            <a href="#" class="text-green-700 hover:underline">Download</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   <div class="mt-10">
    <div class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white px-4 py-2 rounded-t-lg font-semibold m-1"> Include color tags: </div>

    <div class="bg-white border border-gray-200 shadow-md p-4 rounded-b-lg">
        <div class="flex justify-between items-center flex-wrap">
            <div class="flex items-center gap-2">
                <span class="text-green-600">✔</span> Verified
            </div>
            <div class="flex items-center gap-2">
                <span class="text-yellow-500">⚠</span> Expiring soon
            </div>
            <div class="flex items-center gap-2">
                <span class="text-red-600">✖</span> Missing
            </div>
            <div class="flex items-center gap-2">
                <span class="text-yellow-700">⏳</span> Under Review
            </div>
        </div>
    </div>
</div>
</div>
@endsection
