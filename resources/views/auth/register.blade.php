<x-layout>

    {{-- INIZIO FORM REGISTRAZIONE --}}
    <div class="container mx-auto py-24">
        <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
        <form action="{{route('register')}}" method="POST" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
              type="text" name="name" placeholder="John Doe">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
              type="email" name="email" placeholder="john@example.com">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
              type="password" name="password" placeholder="********">
              @error('password')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
              type="password" name="password_confirmation" placeholder="********">
          </div>
          <button
            class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
            type="submit">Register
        </button>
        </form>
      </div>
    {{-- FINE FORM REGISTRAZIONE --}}

</x-layout>