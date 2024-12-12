@extends('layouts.app')

@section('content')
<section class="container mx-auto px-6 py-20 text-gray-800" id="donate">
  <h2 class="text-3xl font-bold text-center text-gray-900">How You Can Help</h2>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img alt="Food Donation" class="w-full h-96 object-cover"
        src="{{ asset('images/food-donation.jpg') }}" />
      <div class="p-6">
        <h3 class="text-xl font-bold">Food and Money Donation</h3>
        <p class="mt-4">
          Donate non-perishable food items to help feed families in need. Your monetary contributions enable us to provide essential services to those in need.
        </p>
        <button class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded" id="donateButton">Donate</button>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img alt="Monetary Donation" class="w-full h-96 object-cover"
        src="{{ asset('images/monetary-donation.jpg') }}" />
      <div class="p-6">
        <h3 class="text-xl font-bold">Every Contribution Counts</h3>
        <p class="mt-4">
          Every donation, whether money or food, is carefully distributed to ensure maximum impact for those in need.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Modal Donation Interface -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" id="donationModal">
  <div class="bg-white p-6 rounded-lg shadow-lg text-center">
    <h2 class="text-xl font-bold mb-4">Choose Donation Type</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-gray-100 p-4 rounded-lg cursor-pointer hover:bg-gray-200 text-gray-900" id="cashOption">
        <img alt="Cash Donation" class="w-full h-40 object-cover mb-2"
          src="{{ asset('images/cash-donation.jpg') }}" />
        <h3 class="text-lg font-bold text-gray-800 hover:text-black">Cash</h3>
      </div>
      <div class="bg-gray-100 p-4 rounded-lg cursor-pointer hover:bg-gray-200 text-gray-900" id="foodOption">
        <img alt="Food Donation" class="w-full h-40 object-cover mb-2"
          src="{{ asset('images/food-donation-option.jpg') }}" />
        <h3 class="text-lg font-bold text-gray-800 hover:text-black">Food</h3>
      </div>
      <div class="bg-gray-100 p-4 rounded-lg cursor-pointer hover:bg-gray-200 text-gray-900" id="clothesOption">
        <img alt="Clothes Donation" class="w-full h-40 object-cover mb-2"
          src="{{ asset('images/clothes-donation.jpg') }}" />
        <h3 class="text-lg font-bold text-gray-800 hover:text-black">Clothes</h3>
      </div>
    </div>
    <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded" id="closeModal">Close</button>
  </div>
</div>

<!-- Donation Forms -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" id="cashForm">
  <div class="bg-white p-6 rounded-lg shadow-lg text-gray-900">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Cash Donation</h2>
    <form method="POST" action="{{ route('donate.cash') }}">
      @csrf
      <div class="mb-4">
        <label class="block text-left text-gray-800 font-medium">Address:</label>
        <input
          class="w-full p-2 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none"
          type="text"
          name="address"
          placeholder="Enter your address"
        />
      </div>
      <div class="mb-4">
        <label class="block text-left text-gray-800 font-medium">Amount:</label>
        <input
          class="w-full p-2 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none"
          type="number"
          name="amount"
          placeholder="Enter donation amount"
        />
      </div>
      <div class="mb-4">
        <label class="block text-left text-gray-800 font-medium">Select type:</label>
        <select
          class="w-full p-2 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none"
          name="type"
        >
          <option value="cash">Cash</option>
          <option value="online">Online</option>
        </select>
      </div>
      <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Donate</button>
      <button
        class="mt-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600"
        id="closeCashForm"
        type="button"
      >
        Close
      </button>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
  // Your JavaScript code here
</script>
@endsection
