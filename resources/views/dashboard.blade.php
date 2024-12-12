<x-app-layout>
  <!--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
-->
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gradient-to-r from-blue-500 via-green-400 to-pink-500 text-gray-900">
    <div class="bg-gradient-to-r from-blue-500 via-green-400 to-pink-500 text-white">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative flex flex-col items-center justify-center selection:bg-yellow-400 selection:text-black">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-3 items-center gap-2 py-10 lg:grid-cols-5">
                    <div class="flex justify-start lg:col-span-1">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-white" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content -->
                        </svg>
                    </div>
                    
                    <div class="flex justify-center lg:col-span-3">
                        <a href="#event" class="scroll-link rounded-md px-4 py-2 bg-yellow-400 text-black transition hover:bg-yellow-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-400">
                            Event
                        </a>
                    </div>

                    <div class="flex justify-end lg:col-span-1">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-yellow-400 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-yellow-400 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>
        
                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-yellow-400 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </header>

                <main class="mt-6">
                    <!-- Hero Section -->
                    <section class="bg-cover bg-center h-56 bg-blue-400">
                        <div class="flex items-center justify-center h-full bg-gray-900 bg-opacity-50">
                            <div class="text-center">
                                <h1 class="text-white text-4xl font-bold">
                                    Make a Difference Today
                                </h1>
                                <p class="text-white mt-4 text-xl">
                                    Your donations and volunteer work can help feed families and support communities in need.
                                </p>
                            </div>
                        </div>
                    </section>

 <!-- Donation Section -->
<section class="container mx-auto px-6 py-20 text-gray-800" id="donate">
  <h2 class="text-3xl font-bold text-center text-gray-900">How You Can Help</h2>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img alt="Cash Donation" class="w-full h-96 object-cover cursor-pointer" src="https://storage.googleapis.com/a1aa/image/NoglJ6lXyBLVGRNdDjavwrIdl0tZjXPYTj9uB0ppfPMDvu8JA.jpg" id="cashImage" />
      <div class="p-6">
        <h3 class="text-xl font-bold">Cash Donation</h3>
        <p class="mt-4">Your monetary contributions enable us to provide essential services to those in need.</p>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img alt="Food Donation" class="w-full h-96 object-cover cursor-pointer" src="https://storage.googleapis.com/a1aa/image/PTvXHtrvVUbFDNqB5c4jRosLzNQGXfH6tlfz9sSKHZhEe6ynA.jpg" id="foodImage" />
      <div class="p-6">
        <h3 class="text-xl font-bold">Food Donation</h3>
        <p class="mt-4">Donate non-perishable food items to help feed families in need.</p>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img alt="Clothes Donation" class="w-full h-96 object-cover cursor-pointer" src="https://storage.googleapis.com/a1aa/image/RL9hDtkB7r4faaAJxdBe6aUv46yHfK4bigKNdH7jIqoH86ynA.jpg" id="clothesImage" />
      <div class="p-6">
        <h3 class="text-xl font-bold">Clothes Donation</h3>
        <p class="mt-4">Donate new or gently used clothes to help those in need.</p>
      </div>
    </div>
  </div>
</section>

<!-- Cash Donation Form -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" id="cashForm">
  <div class="bg-white p-8 rounded-lg shadow-lg text-gray-900 max-w-lg w-full">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Cash Donation</h2>
    <form id="cashFormSubmit">
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Address:</label>
        <input class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg" type="text" placeholder="Enter your address" required />
      </div>
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Amount:</label>
        <input class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg" type="number" placeholder="Enter donation amount" required />
      </div>
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Select type:</label>
        <select class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg">
          <option>Cash</option>
          <option>Online</option>
        </select>
      </div>
      <button type="submit" class="mt-4 bg-red-500 text-white px-6 py-3 rounded text-lg hover:bg-red-600">Donate</button>
      <button type="button" id="closeCashForm" class="mt-4 bg-gray-500 text-white px-6 py-3 rounded text-lg hover:bg-gray-600">Close</button>
    </form>
  </div>
</div>

<!-- Food Donation Form -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" id="foodForm">
  <div class="bg-white p-8 rounded-lg shadow-lg text-gray-900 max-w-lg w-full">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Food Donation</h2>
    <form id="foodFormSubmit">
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Address:</label>
        <input class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg" type="text" placeholder="Enter your address" required />
      </div>
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Select food type:</label>
        <select class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg">
          <option>Vegetables</option>
          <option>Can Goods</option>
          <option>Snacks</option>
        </select>
      </div>
      <button type="submit" class="mt-4 bg-red-500 text-white px-6 py-3 rounded text-lg hover:bg-red-600">Donate</button>
      <button type="button" id="closeFoodForm" class="mt-4 bg-gray-500 text-white px-6 py-3 rounded text-lg hover:bg-gray-600">Close</button>
    </form>
  </div>
</div>

<!-- Clothes Donation Form -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" id="clothesForm">
  <div class="bg-white p-8 rounded-lg shadow-lg text-gray-900 max-w-lg w-full">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Clothes Donation</h2>
    <form id="clothesFormSubmit">
      <div class="mb-6">
        <label class="block text-left text-gray-800 font-medium text-lg">Address:</label>
        <input class="w-full p-4 border border-gray-400 rounded focus:border-red-500 focus:ring focus:ring-red-200 focus:outline-none text-lg" type="text" placeholder="Enter your address" required />
      </div>
      <button type="submit" class="mt-4 bg-red-500 text-white px-6 py-3 rounded text-lg hover:bg-red-600">Donate</button>
      <button type="button" id="closeClothesForm" class="mt-4 bg-gray-500 text-white px-6 py-3 rounded text-lg hover:bg-gray-600">Close</button>
    </form>
  </div>
</div>

<!-- Donation Records Table -->
<section class="container mx-auto px-6 py-20 text-gray-800">
  <h2 class="text-3xl font-bold text-center text-gray-900">Donation Records</h2>
  <table class="min-w-full table-auto mt-8 border-collapse">
    <thead>
      <tr>
        <th class="px-4 py-2 border border-gray-300">Donation Type</th>
        <th class="px-4 py-2 border border-gray-300">Donation Address</th>
        <th class="px-4 py-2 border border-gray-300">Amount/Food Type</th>
        <th class="px-4 py-2 border border-gray-300">Payment Type (if Cash)</th>
      </tr>
    </thead>
    <tbody id="donationRecords"></tbody>
  </table>
</section>

<!-- Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Show the corresponding donation form
  const donationForms = {
    cash: "cashForm",
    food: "foodForm",
    clothes: "clothesForm",
  };

  Object.keys(donationForms).forEach((type) => {
    document.getElementById(`${type}Image`).addEventListener("click", function () {
      document.getElementById(donationForms[type]).classList.remove("hidden");
    });
  });

  // Close forms
  Object.keys(donationForms).forEach((type) => {
    document.getElementById(`close${type.charAt(0).toUpperCase() + type.slice(1)}Form`)
      .addEventListener("click", function () {
        document.getElementById(donationForms[type]).classList.add("hidden");
      });
  });

  // Handle form submissions
  const handleFormSubmission = (formId, donationType, getDataCallback) => {
    document.querySelector(`#${formId}Submit`).addEventListener("submit", function (event) {
      event.preventDefault();

      // Collect data from the form
      const formData = getDataCallback(event.target);

      // Validate the form data (basic example)
      if (!formData.donation_address) {
        alert("Donation address is required!");
        return;
      }

      // Update the donation records table
      const donationTable = document.getElementById("donationRecords");
      const newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td class="px-4 py-2 border border-gray-300">${donationType}</td>
        <td class="px-4 py-2 border border-gray-300">${formData.donation_address}</td>
        <td class="px-4 py-2 border border-gray-300">${formData.amount || formData.food_type || "N/A"}</td>
        <td class="px-4 py-2 border border-gray-300">${formData.payment_type || "N/A"}</td>
      `;
      donationTable.appendChild(newRow);

      // Send the data to the server
      fetch("/submit-donation", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ donation_type: donationType, ...formData }),
      })
        .then((response) => response.json())
        .then((data) => {
          alert("Donation successful!");
          document.getElementById(formId).classList.add("hidden");
        })
        .catch((error) => console.error("Error:", error));
    });
  };

  // Define data collection for each form
  handleFormSubmission("cashForm", "Cash", (form) => ({
    donation_address: form.querySelector('input[type="text"]').value,
    amount: form.querySelector('input[type="number"]').value,
    payment_type: form.querySelector('select').value,
  }));

  handleFormSubmission("foodForm", "Food", (form) => ({
    donation_address: form.querySelector('input[type="text"]').value,
    food_type: form.querySelector('select').value,
  }));

  handleFormSubmission("clothesForm", "Clothes", (form) => ({
    donation_address: form.querySelector('input[type="text"]').value,
  }));
});

</script>

</body>

</html>





  <!-- Volunteer Section -->
  <section class="text-black" id="volunteer">
   <div class="container mx-auto px-6">
    <h2 class="text-black text-3xl font-bold text-center">
     Join Us as a Volunteer
    </h2>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Community Meal Prep Day -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers preparing meals in a kitchen" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/iBlyZLiAP4qjHVK5Y1OLDQtudggN7mRSWoUBiSZ9sZAxlXeJA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Community Meal Prep Day
        </h4>
        <p class="mt-4">
         Join us for a hands-on volunteer event where we'll prepare and package nutritious meals for local families in need. No experience is necessary—just bring your enthusiasm to help fight hunger in our community!
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
      <!-- Harvest for Hunger -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers harvesting produce at a farm" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/9OlwGbTi3mI7JZGCWwFGeXJG7X6PRAb16Ncs00nL6f5HXeynA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Harvest for Hunger
        </h4>
        <p class="mt-4">
         Volunteer at a local farm or community garden to harvest fresh produce that will be donated to food banks and shelters.
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
      <!-- Food Drive Sorting Day -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers sorting food donations" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/lW1xzfH2Eevh3Ek6nC8BeCROzefDq2faf9jsAdeKjRUSFXeynA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Food Drive Sorting Day
        </h4>
        <p class="mt-4">
         Help sort and organize donated food items at a local food pantry to ensure families receive what they need.
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
      <!-- Soup Kitchen Serve & Smile -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers serving food at a soup kitchen" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/NZGyceXHmyziT6xJ2QV2kT8RvhcmkcyICe7sHRRl08dJXeynA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Soup Kitchen Serve &amp; Smile
        </h4>
        <p class="mt-4">
         Join us in preparing and serving warm meals at a local soup kitchen while spreading kindness and positivity.
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
      <!-- Bake for a Cause -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers baking treats" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/XkedIJbbYMxzMCND8oPnFRFzl5yRe4baKDG0mZmavlqKXeynA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Bake for a Cause
        </h4>
        <p class="mt-4">
         Participate in a group baking session to create homemade treats and bread for distribution to food-insecure individuals.
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
      <!-- Food Pantry -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
       <img alt="Image of volunteers sorting and packing food at a food pantry" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/FMNM25gnH1JPJBbnyJUA4kPyypb4BC65PTybZ47f9eRb1fynA.jpg" width="600"/>
       <div class="p-6">
        <h4 class="text-xl font-bold">
         Food Pantry
        </h4>
        <p class="mt-4">
         Join us for a community food pantry event where volunteers are needed to help sort, pack, and distribute food to those in need. It's a great opportunity to give back and make a difference in your local community. Volunteers of all ages and backgrounds are welcome!
        </p>
        <button class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
         Join
        </button>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <script>
   document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('eventList').classList.add('hidden');
        });
  </script>
 

                        <br><br>
                        <section id="event">
                            <h2 class="text-white text-3xl font-bold text-center my-10">
                                Calendar For Upcoming Events
                            </h2>
                            <div class="container1">

                                <div class="left">
                    
                                    <div class="calendar">
                    
                                        <div class="month">
                    
                                            <i class="fas fa-angle-left prev"></i>
                    
                                            <div class="date">december 2015</div>
                    
                                            <i class="fas fa-angle-right next"></i>
                                        </div>
                    
                                        <div class="weekdays">
                                            <div>Sun</div>
                                            <div>Mon</div>
                                            <div>Tue</div>
                                            <div>Wed</div>
                                            <div>Thu</div>
                                            <div>Fri</div>
                                            <div>Sat</div>
                                        </div>
                    
                                        <div class="days"></div>
                                        <div class="goto-today">
                                            <div class="goto">
                    
                                            <input type="text" placeholder="mm/yyyy" class="date-input" />
                                            <button class="goto-btn">Go</button>
                    
                                            </div>
                    
                                            <button class="today-btn">Today</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                        
                                    <div class="today-date">
                        
                                        <div class="event-day">wed</div>
                                        
                                        <div class="event-date">12th december 2022</div>
                                    </div>
                                    <div class="events"></div>
                        
                                    <div class="add-event-wrapper">
                                        <div class="add-event-header">
                        
                                            <div class="title">Add Event</div>
                        
                                            <i class="fas fa-times close"></i>
                                        </div>
                                        <div class="add-event-body">
                        
                                            <div class="add-event-input">
                        
                                                <input type="text" placeholder="Event Name" class="event-name" />
                                            </div>
                                            <div class="add-event-input">
                                                <input
                                                    type="text"
                                                    placeholder="Event Time From"
                                                    class="event-time-from"
                                                />
                                            </div>
                                            <div class="add-event-input">
                                                <input
                                                    type="text"
                                                    placeholder="Event Time To"
                                                    class="event-time-to"
                                                />
                                            </div>
                                        </div>
                                        <div class="add-event-footer">
                                            <button class="add-event-btn">Add Event</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="add-event">
                        
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                    
                            <script src="{{ asset('scripts/calendar.js') }}"></script>
                        </section>
                   
                </div>
            </div>
        </div>
    </body>
</html>

</x-app-layout>
