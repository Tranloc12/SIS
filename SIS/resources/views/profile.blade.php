@extends('layouts.app')

@section('title', 'Profile & Records')

@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-md border border-gray-200">
        
        <!-- Tabs -->
        <div class="flex border-b">
            <a href="{{ url('/profile') }}" 
                class="flex-1 py-3 px-6 text-xl font-semibold text-white bg-gradient-to-r from-green-500 to-green-700 rounded-tl-lg rounded-tr-lg text-center">
                    Profile
            </a>
            <a href="{{ url('/personal') }}" 
               class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white border-r border-gray-200 text-center">
                Personal
            </a>
            <a href="{{ url('/documents') }}" 
               class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white rounded-tr-lg hover:bg-gray-100 transition text-center">
                Documents Centre
            </a>
        </div>

        <!-- Nội dung form -->
        <div class="p-8">
            <!-- Form gốc -->
            <div id="originalForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Left Form -->
                    <form class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-base font-medium text-gray-700">
                                First Name <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">
                        </div>

                        <div>
                            <label class="block text-base font-medium text-gray-700">
                                Last Name <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">
                        </div>
                        
                        <div>
                            <label class="block text-base font-medium text-gray-700">
                                Middle Name <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">
                        </div>
                        <div>
                        <button type="button" id="openUpdateForm"
                            class="mt-2 px-4  py-2 text-sm bg-[#ffcc00] text-black font-semibold rounded-md hover:bg-[#e6b800] transition">
                            Request Update
                        </button>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700" >
                                Profile Photo<span class="text-amber-500">*</span>
                            </label>
                            <div class="mt-2 flex justify-center items-center border-2 border-dashed border-gray-300 rounded-md h-50 w-50 bg-gray-100">
                                <svg class="h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            </div>
                            <button type="button" class="mt-2 px-6 py-2 text-sm bg-[#ffcc00] text-black font-semibold rounded-md hover:bg-[#e6b800] transition update-photo-btn">
                                Update Photo
                            </button>
                        </div>
                    </form>

                    <!-- Right Form -->
                    <form class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-base font-medium text-gray-700">
                                Student ID <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-2 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">

                            <label class="block text-base font-medium text-gray-700 mt-4">
                                Gender <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-2 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">

                            <label class="block text-base font-medium text-gray-700 mt-4">
                                Date of Birth <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-2 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">

                            <label class="block text-base font-medium text-gray-700 mt-4">
                                Programme <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-2 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">

                            <label class="block text-base font-medium text-gray-700 mt-4">
                                Intake <span class="text-amber-500">*</span>
                            </label>
                            <input type="text" class="mt-2 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Form cập nhật -->
            <div id="updateForm" class="hidden">
              <div class="border-2 border-white rounded-md shadow-lg p-6 bg-beige">
                    
                    <!-- Header -->
                    <div class="inline-block px-4 py-2 border border-green-500 rounded-md bg-green-50 mb-6">
                        <h2 class="text-lg font-semibold text-green-700">Name Update Request</h2>
                    </div>

                    <!-- Form -->
                    <form class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-l font-medium text-gray-700">First Name :</label>
                            <input type="text" class="mt-1 block w-full h-10 rounded-md bg-green-50 border border-gray-300">
                        </div>
                        <div>
                            <label class="block text-l font-medium text-gray-700">Last Name :</label>
                            <input type="text" class="mt-1 block w-full h-10 rounded-md bg-green-50 border border-gray-300">
                        </div>
                        <div>
                            <label class="block text-l font-medium text-gray-700">Middle Name :</label>
                            <input type="text" placeholder="    Passport/ID exactly" class="mt-1 block w-full h-10 rounded-md bg-green-50 border border-gray-300 italic">
                        </div>
                        <div>
                            <label class="block text-l font-medium text-gray-700">Reason for Change :</label>
                            <input type="text" placeholder="    Legal change, typo correction..." class="mt-1 block w-full h-10 rounded-md bg-green-50 border border-gray-300 italic">
                        </div>
                        <div>
                            <label class="block text-l font-medium text-gray-700">Upload Supporting Document :</label>
                            <input type="text" placeholder="    Passport/ID" class="mt-1 block w-full h-10 rounded-md bg-green-50 border border-gray-300 italic">
                        </div>

                        <!-- Checkbox -->
                        <div class="flex items-start mt-2">
                            <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                            <span class="ml-2 text-gray-700 italic">
                                I confirm that the information provided is accurate and supported by the attached official document.
                            </span>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-3 mt-4">
                            <button type="button" id="cancelUpdate"
                                class="px-4 py-2 border border-orange-400 text-orange-500 rounded-md hover:bg-orange-50">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-orange-400 text-white font-medium rounded-md hover:bg-orange-500">
                                Submit for Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="updatePhotoForm" class="hidden">
                <div class="border-2 border-gray-300 rounded-md shadow-sm p-6 bg-white">

                    <!-- Header -->
                    <div class="inline-block px-4 py-2 border border-green-500 rounded-md bg-green-50 mb-6">
                        <h2 class="text-lg font-semibold text-green-700">Profile Photo Update Request</h2>
                    </div>

                    <!-- Nội dung -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Khung upload -->
                        <div class="flex flex-col items-center justify-center">
                            <div class="flex justify-center items-center border-2 border-dashed border-gray-300 rounded-md h-60 w-80 bg-gray-50 mb-4">
                                <svg class="h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            </div>
                            <label class="block"  >
                                <input type="file" accept=".jpg,.jpeg,.png" class="hidden">
                                <span class="px-8 py-1 bg-orange-400 text-white rounded-md cursor-pointer hover:bg-orange-500">
                                    Choose File
                                </span>
                            </label>
                        </div>

                        <!-- Guidelines + Checkbox -->
                        <div>
                            <p class="font-semibold mb-2">File input with preview:</p>
                            <ul class="list-disc list-inside text-gray-600 text-sm mb-4">
                                <li class="pl-4">Accept only image files: .jpg, .jpeg, .png</li>
                                <li class="pl-4">Max file size: e.g., 5MB</li>
                            </ul>

                            <p class="font-semibold mb-2">Photo Guidelines</p>
                            <ul class="list-disc list-inside text-gray-600 text-sm">
                                <li class="pl-4">Must be clear, front-facing</li>
                                <li class="pl-4">Neutral background</li>
                                <li class="pl-4">No sunglasses or hats</li>
                                <li class="pl-4">Size: 35x45mm</li>
                            </ul>

                            <!-- Checkbox nằm ngay dưới -->
                            <div class="flex items-center mt-4">
                                <input type="checkbox"
                                    class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                                <span class="ml-2 text-gray-700">
                                    I confirm that this photo represents me and meets the required guidelines.
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" id="cancelPhotoUpdate"
                                class="px-4 py-2 border border-orange-400 text-orange-500 rounded-md hover:bg-orange-50">
                            Cancel
                        </button>
                        <button type="submit"
                                class="px-4 py-2 bg-orange-400 text-white font-medium rounded-md hover:bg-orange-500">
                            Submit for Review
                        </button>
                    </div>
                </div>
            </div>

            
                   
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const originalForm = document.getElementById("originalForm");
        const updateForm = document.getElementById("updateForm");
        const openBtn = document.getElementById("openUpdateForm");
        const cancelBtn = document.getElementById("cancelUpdate");

        openBtn.addEventListener("click", () => {
            originalForm.classList.add("hidden");
            updateForm.classList.remove("hidden");
        });

        cancelBtn.addEventListener("click", () => {
            updateForm.classList.add("hidden");
            originalForm.classList.remove("hidden");
        });
    });


    const openPhotoBtn = document.querySelector(".update-photo-btn"); 
    const updatePhotoForm = document.getElementById("updatePhotoForm");
    const cancelPhotoBtn = document.getElementById("cancelPhotoUpdate");

    openPhotoBtn.addEventListener("click", () => {
        originalForm.classList.add("hidden");
        updatePhotoForm.classList.remove("hidden");
    });

    cancelPhotoBtn.addEventListener("click", () => {
        updatePhotoForm.classList.add("hidden");
        originalForm.classList.remove("hidden");
    });
</script>
@endsection
