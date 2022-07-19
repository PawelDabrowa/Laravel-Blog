@props(['trigger'])


<div x-data="{ show: false}" x-on:click.away="show = false">
  <div x-on:click="show = !show">
    {{ $trigger}}
  </div>
  <div x-show="show" class="z-50 pb-2 mt-2 w-full absolute bg-gray-100 rounded-xl overflow-auto max-h-52" style="display: none">
    {{ $slot }}
  </div>
</div>