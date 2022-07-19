@if (session()->has('success'))
  <p x-data="{ show: true }" x-show="show"  x-init="setTimeout(() => show = false, 3000)"
      class="fixed bottom-3 right-3 bg-blue-500 text-white text-sm py-2 px-4 rounded-xl">
      {{ session()->get('success') }}
  </p>
@endif