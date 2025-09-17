@extends('layouts.app')

@section('title', 'Personal Information')

@section('content')

<div class="max-w-5xl mx-auto mt-8">
    <div class="flex border-b">
        <a href="{{ url('/profile') }}" class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white border-r border-gray-200 text-center">Profile</a>
        <a href="{{ url('/personal') }}" class="flex-1 py-3 px-6 text-xl font-semibold text-white bg-gradient-to-r from-green-500 to-green-700 rounded-tl-lg rounded-tr-lg text-center">Personal</a>
        <a href="{{ url('/documents') }}" class="flex-1 py-3 px-6 text-xl font-semibold text-gray-600 bg-white border-r border-gray-200 text-center">Documents Centre</a>
    </div>

    <div class="bg-white p-8 rounded-b-lg shadow-md border border-gray-200">
        
        <div id="allOtherForms">

            {{-- Contact Info Section --}}
            <form class="mb-8" id="originalContactForm">
                <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">Contact Info</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div class="col-span-2">
                        <label class="block text-base text-gray-700">Email <span class="text-amber-500">*</span></label>
                        <input type="email" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div class="col-span-1">
                        <label class="block text-base text-gray-700">Phone Number <span class="text-amber-500">*</span></label>
                        <input type="tel" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div class="col-span-1">
                <label class="block text-l text-gray-700">Permanent Address <span class="text-amber-500">*</span></label>
                <div class="relative">
                    <div id="addressInputContainer">
                        <div class="relative">
                            <input id="permanentAddressTextarea" class="mt-1 block w-full h-12 text-5 rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50" placeholder="  Address: ST.353,s/k Street"></input>
                            
                            <button type="button" id="showAddressDetailsBtn" class="absolute left-1/2 transform -translate-x-1/2 translate-y-2 w-6 h-6 flex items-center justify-center">
                                <svg class="h-6 w-6 text-[#216c42]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div id="addressDetails" class="hidden mt-1 space-y-2 text-base rounded-md bg-[#F6FEF8] border border-gray-300 p-4">
                            <p class="text-sm">Address :St.353, S/K Boueng Kak 1 Street</p>
                            <p class="text-sm">City : Phnom Penh</p>
                            <p class="text-sm">State/Province : Phnom Penh</p>
                            <p class="text-sm">Postal /ZIP Code : 021404</p>
                            <p class="text-sm">Country : Cambodia</p>
                            <div class="flex justify-center mt-2">
                                <button type="button" id="hideAddressDetailsBtn" class="w-6 h-6 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-[#216c42] transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" id="showContactFormBBtn" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">Request Update</button>
                </div>
            </form>

            {{-- ID/Passport Information Section --}}
            <form class="mb-8">
                <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">ID/ Passport Information</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-base text-gray-700">Document Type <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Issue Date <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Country of Issue <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Expiry Date <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" id="showIdPassportFormBBtn" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">Request Update</button>
                </div>
            </form>

            {{-- Visa Information Section --}}
            <form class="mb-8">
                <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">VISA INFORMATION</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-base text-gray-700">Visa Number <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Issue Date <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Country of Issue <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Expiry Date <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-700"><i>Your visa will expire in 45 days. Please upload an updated document</i> <span class="text-amber-500">!</span></label>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" id="showVisaFormBBtn" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">Request Update</button>
                </div>
            </form>

            {{-- Emergency Contact Section --}}
            <form class="mb-8">
                <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">Emergency Contact</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-base text-gray-700">Name <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Phone <span class="text-amber-500">*</span></label>
                        <input type="tel" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Relationship <span class="text-amber-500">*</span></label>
                        <input type="text" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-base text-gray-700">Email <span class="text-amber-500">*</span></label>
                        <input type="email" class="mt-1 block w-full h-12 text-base rounded-md bg-[#F6FEF8] border border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" id="showEmergencyFormBBtn" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">Request Update</button>
                </div>
            </form>
        </div>

        {{-- Form B: Contact Info Update Request (ẩn ban đầu) --}}
        <div id="contactFormB" class="hidden relative p-8 rounded-lg shadow-md border border-gray-200">
            <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">Contact Info Update Request</h3>
                </div>
            <form id="contactFormBInner" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>
                    <label class="block text-base text-gray-700">New Email Address :</label>
                    <input type="email" placeholder="   To change it" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Reason for Change :</label>
                    <input type="text" placeholder="    I moved to a new address recently" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">New Phone Number :</label>
                    <input type="tel" placeholder="   Phone code and phone number" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Upload your Documents :</label>
                    <input type="text" placeholder="   Upload your supporting documents" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-1">
                    <label class="block text-base text-gray-700 mb-2">New Permanent Address :</label>
                    <input type="text" placeholder="   Address :" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                    <input type="text" placeholder="   City :" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                    <input type="text" placeholder="   State/Province :" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                    <input type="text" placeholder="   Postal Code/ZIP Code :" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                    <input type="text" placeholder="   Country Region :" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <div class="flex items-start mt-2">
                        <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <span class="ml-2 text-gray-700 italic">
                            I confirm the information provided is accurate to the best of my knowledge.
                        </span>
                    </div>
                </div>
                <div class="col-span-2 flex justify-end space-x-4 mt-4">
                    <button type="button" id="cancelContactFormB" class="px-6 py-2 text-base bg-transparent text-amber-500 font-bold rounded-lg border-2 border-amber-500 hover:bg-amber-50 transition">
                        Cancel
                    </button>
                    <button type="button" id="submitContactFormB" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">
                        Submit for Review
                    </button>
                </div>
                <div id="contactSuccessPopup" class="hidden absolute inset-0 bg-white/50 flex items-center justify-center rounded-lg">
                    <div class="py-12 px-24 w-3/4 shadow-lg rounded-md bg-white text-center">
                        <div class="flex flex-col items-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">Your contact info update request has been submitted and is pending review.</h5>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">You will be notified once it's approved or if more info is needed.</h5>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- Form B: ID/Passport Document Update Request (ẩn ban đầu) --}}
        <div id="idPassportFormB" class="hidden relative p-8 rounded-lg shadow-md border border-gray-200">
            <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">ID/ Passport Document Update Request</h3>
                </div>
            <form id="idPassportFormBInner" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>
                    <label class="block text-base text-gray-700">Document Type :</label>
                    <input type="text" placeholder="  Passport / National ID" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Issue Date :</label>
                    <input type="text" placeholder="  DD/MM/YYYY" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">New Document Number :</label>
                    <input type="text" placeholder="   Passport / National ID" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Expiry Date :</label>
                    <input type="text" placeholder="   DD/MM/YYYY" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Upload Document :</label>
                    <div class="mt-1 block w-full h-24 text-base rounded-md border-2 border-dashed border-gray-300 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="mt-2 block text-sm font-medium text-gray-900">Choose File</span>
                            <p class="text-xs text-gray-500">File format: PDF only. Max size: 5MB</p>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-base text-gray-700">Country of issue :</label>
                    <input type="text" placeholder="   Passport renewed" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <div class="flex items-start mt-2">
                        <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <span class="ml-2 text-gray-700 ">
                            I confirm that the above information is accurate and supported by the uploaded document
                        </span>
                    </div>
                </div>
                <div class="col-span-2 flex justify-end space-x-4 mt-4">
                    <button type="button" id="cancelIdPassportFormB" class="px-6 py-2 text-base bg-transparent text-amber-500 font-bold rounded-lg border-2 border-amber-500 hover:bg-amber-50 transition">
                        Cancel
                    </button>
                    <button type="button" id="submitIdPassportFormB" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">
                        Submit for Review
                    </button>
                </div>
                <div id="idPassportSuccessPopup" class="hidden absolute inset-0 bg-white/50 flex items-center justify-center rounded-lg">
                    <div class="py-12 px-24 w-3/4 shadow-lg rounded-md bg-white text-center">
                        <div class="flex flex-col items-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">Your ID/Passport update request has been submitted and is pending review.</h5>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">You will be notified once it's approved or if more info is needed.</h5>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- Form B: Visa Document Update Request (ẩn ban đầu) --}}
        <div id="visaFormB" class="hidden relative p-8 rounded-lg shadow-md border border-gray-200">
            
            <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">Visa Document Update Request</h3>
                </div>
            <form id="visaFormBInner" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div class="col-span-2">
                    <label class="block text-base text-gray-700">Visa Number :</label>
                    <input type="text" placeholder="  123456789" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <label class="block text-base text-gray-700">Country of Issue :</label>
                    <input type="text" placeholder="  INDO" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Visa Issue Date :</label>
                    <input type="text" placeholder="  DD/MM/YYYY" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Visa Expiry Date :</label>
                    <input type="text" placeholder="  DD/MM/YYYY" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Upload Document :</label>
                    <div class="mt-1 block w-full h-24 text-base rounded-md border-2 border-dashed border-gray-300 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="mt-2 block text-sm font-medium text-gray-900">Choose File</span>
                            <p class="text-xs text-gray-500">File format: PDF only. Max size: 5MB</p>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-base text-gray-700">Reason for Update :</label>
                    <input type="text" placeholder="  New visa issued" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <div class="flex items-start mt-2">
                        <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <span class="ml-2 text-gray-700 ">
                            I confirm that the document uploaded is valid and issued by an official immigration authority
                        </span>
                    </div>
                </div>
                <div class="col-span-2 flex justify-end space-x-4 mt-4">
                    <button type="button" id="cancelVisaFormB" class="px-6 py-2 text-base bg-transparent text-amber-500 font-bold rounded-lg border-2 border-amber-500 hover:bg-amber-50 transition">
                        Cancel
                    </button>
                    <button type="button" id="submitVisaFormB" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">
                        Submit for Review
                    </button>
                </div>
                <div id="visaSuccessPopup" class="hidden absolute inset-0 bg-white/50 flex items-center justify-center rounded-lg">
                    <div class="py-12 px-24 w-3/4 shadow-lg rounded-md bg-white text-center">
                        <div class="flex flex-col items-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">Your visa update request has been submitted and is under review.</h5>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- Form B: Emergency Contact Update Request (ẩn ban đầu) --}}
        <div id="emergencyFormB" class="hidden relative p-8 rounded-lg shadow-md border border-gray-200">

            <div class="py-2 px-4 border-2 border-green-500 rounded-tr-2xl rounded-br-2xl inline-block">
                    <h3 class="text-xl font-bold text-green-700">Emergency Contact Update Request</h3>
                </div>
            <form id="emergencyFormBInner" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>
                    <label class="block text-base text-gray-700">Full Name :</label>
                    <input type="text" placeholder="   Text input" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Phone Number :</label>
                    <input type="tel" placeholder="   086 XXX XXX" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Relationship to You :</label>
                    <input type="text" placeholder="   Parent, Sibling, Spouse, Guardian, Friend, Other" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div>
                    <label class="block text-base text-gray-700">Email Address :</label>
                    <input type="email" placeholder="   Axxxx@gmail.com" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <label class="block text-base text-gray-700">Reason for Update :</label>
                    <input type="text" placeholder="   Contact change, correction, new guardian" class="mt-1 block w-full h-12 rounded-md bg-[#F6FEF8] border border-gray-300 italic text-sm-b">
                </div>
                <div class="col-span-2">
                    <div class="flex items-start mt-2">
                        <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <span class="ml-2 text-gray-700 ">
                            I confirm that the information provided is accurate and up to date.
                        </span>
                    </div>
                </div>
                <div class="col-span-2 flex justify-end space-x-4 mt-4">
                    <button type="button" id="cancelEmergencyFormB" class="px-6 py-2 text-base bg-transparent text-amber-500 font-bold rounded-lg border-2 border-amber-500 hover:bg-amber-50 transition">
                        Cancel
                    </button>
                    <button type="button" id="submitEmergencyFormB" class="px-6 py-2 text-base bg-[#ffcc00] text-black font-bold rounded-lg hover:bg-[#e6b800] transition">
                        Submit for Review
                    </button>
                </div>
                <div id="emergencySuccessPopup" class="hidden absolute inset-0 bg-white/50 flex items-center justify-center rounded-lg">
                    <div class="py-12 px-24 w-3/4 shadow-lg rounded-md bg-white text-center">
                        <div class="flex flex-col items-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="text-m leading-6 font-medium text-gray-900 mt-2">Your emergency contact update request has been submitted and is pending review.</h5>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const allOtherForms = document.getElementById("allOtherForms"); 
        const contactFormB = document.getElementById("contactFormB");
        const idPassportFormB = document.getElementById("idPassportFormB");
        const visaFormB = document.getElementById("visaFormB");
        const emergencyFormB = document.getElementById("emergencyFormB");
        const addressInputContainer = document.getElementById("addressInputContainer");
        const permanentAddressTextarea = document.getElementById("permanentAddressTextarea");
        const showAddressDetailsBtn = document.getElementById("showAddressDetailsBtn");
        const addressDetails = document.getElementById("addressDetails");
        const hideAddressDetailsBtn = document.getElementById("hideAddressDetailsBtn");
            
        // Popups for forms
        const contactSuccessPopup = document.getElementById("contactSuccessPopup");
        const idPassportSuccessPopup = document.getElementById("idPassportSuccessPopup");
        const visaSuccessPopup = document.getElementById("visaSuccessPopup");
        const emergencySuccessPopup = document.getElementById("emergencySuccessPopup");

        // Buttons to show Form B
        const showContactFormBBtn = document.getElementById("showContactFormBBtn");
        const showIdPassportFormBBtn = document.getElementById("showIdPassportFormBBtn");
        const showVisaFormBBtn = document.getElementById("showVisaFormBBtn");
        const showEmergencyFormBBtn = document.getElementById("showEmergencyFormBBtn");

        // Cancel and Submit buttons for Contact Form B
        const cancelContactFormBBtn = document.getElementById("cancelContactFormB");
        const submitContactFormBBtn = document.getElementById("submitContactFormB");

        // Cancel and Submit buttons for ID/Passport Form B
        const cancelIdPassportFormBBtn = document.getElementById("cancelIdPassportFormB");
        const submitIdPassportFormBBtn = document.getElementById("submitIdPassportFormB");

        // Cancel and Submit buttons for Visa Form B
        const cancelVisaFormBBtn = document.getElementById("cancelVisaFormB");
        const submitVisaFormBBtn = document.getElementById("submitVisaFormB");

        // Cancel and Submit buttons for Emergency Form B
        const cancelEmergencyFormBBtn = document.getElementById("cancelEmergencyFormB");
        const submitEmergencyFormBBtn = document.getElementById("submitEmergencyFormB");

        function hideAllForms() {
            allOtherForms.classList.add("hidden");
            contactFormB.classList.add("hidden");
            idPassportFormB.classList.add("hidden");
            visaFormB.classList.add("hidden");
            emergencyFormB.classList.add("hidden");
            if (contactSuccessPopup) contactSuccessPopup.classList.add("hidden");
            if (idPassportSuccessPopup) idPassportSuccessPopup.classList.add("hidden");
            if (visaSuccessPopup) visaSuccessPopup.classList.add("hidden");
            if (emergencySuccessPopup) emergencySuccessPopup.classList.add("hidden");
        }

        function showAllForms() {
            allOtherForms.classList.remove("hidden");
            contactFormB.classList.add("hidden");
            idPassportFormB.classList.add("hidden");
            visaFormB.classList.add("hidden");
            emergencyFormB.classList.add("hidden");
            if (contactSuccessPopup) contactSuccessPopup.classList.add("hidden");
            if (idPassportSuccessPopup) idPassportSuccessPopup.classList.add("hidden");
            if (visaSuccessPopup) visaSuccessPopup.classList.add("hidden");
            if (emergencySuccessPopup) emergencySuccessPopup.classList.add("hidden");
        }
        
        function showSuccessPopup(popupElement) {
            popupElement.classList.remove("hidden");
            setTimeout(() => {
                popupElement.classList.add("hidden");
                showAllForms();
            }, 3000); 
        }

         if (showAddressDetailsBtn) {
        showAddressDetailsBtn.addEventListener("click", () => {
            addressInputContainer.classList.add("hidden");
            
            addressDetails.classList.remove("hidden");
        });
    }

    if (hideAddressDetailsBtn) {
        hideAddressDetailsBtn.addEventListener("click", () => {
            addressDetails.classList.add("hidden");
            
            addressInputContainer.classList.remove("hidden");
        });
    }

        
        if (showContactFormBBtn) {
            showContactFormBBtn.addEventListener("click", () => {
                hideAllForms();
                contactFormB.classList.remove("hidden");
            });
        }
        
        if (cancelContactFormBBtn) {
            cancelContactFormBBtn.addEventListener("click", () => {
                showAllForms();
            });
        }

        if (submitContactFormBBtn) {
            submitContactFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showSuccessPopup(contactSuccessPopup);
            });
        }

     
        if (showIdPassportFormBBtn) {
            showIdPassportFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                hideAllForms();
                idPassportFormB.classList.remove("hidden");
            });
        }

        if (cancelIdPassportFormBBtn) {
            cancelIdPassportFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showAllForms();
            });
        }

        if (submitIdPassportFormBBtn) {
            submitIdPassportFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showSuccessPopup(idPassportSuccessPopup);
            });
        }

       
        if (showVisaFormBBtn) {
            showVisaFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                hideAllForms();
                visaFormB.classList.remove("hidden");
            });
        }

        if (cancelVisaFormBBtn) {
            cancelVisaFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showAllForms();
            });
        }

        if (submitVisaFormBBtn) {
            submitVisaFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showSuccessPopup(visaSuccessPopup);
            });
        }

        
        if (showEmergencyFormBBtn) {
            showEmergencyFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                hideAllForms();
                emergencyFormB.classList.remove("hidden");
            });
        }

        if (cancelEmergencyFormBBtn) {
            cancelEmergencyFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showAllForms();
            });
        }

        if (submitEmergencyFormBBtn) {
            submitEmergencyFormBBtn.addEventListener("click", (event) => {
                event.preventDefault();
                showSuccessPopup(emergencySuccessPopup);
            });
        }
    });
</script>
@endsection
