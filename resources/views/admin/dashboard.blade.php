<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Users Management
    </h2>

    <center>
      <a href="{{ route('users.index') }}">
        <button type="button" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" >
          View User
        </button>
      </a></center>
  </x-slot>

  
</x-app-layout>