<x-dropdown >
    <x-slot name="trigger" >
        <button class="py-2 pl-3 pr-9 text-left text-sm font-semibold w-full relative">
          
            {{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
            <x-icon name='down-arrow' class="absolute pointer-events-none" style="top: 9px; right: 0;"/>
        </button>
    </x-slot>

<x-dropdown-item href="/">All</x-dropdown-item>

    @foreach($categories as $category)
    <x-dropdown-item 
         href="/?categories/{{$category->slug}}&{{ http_build_query(request()->excerpt('category','page'))}}"
         :active="isset($currentCategory) && $currentCategory->id === $category->id "
        >{{ucwords($category->name)}}</x-dropdown-item>
    @endforeach

</div>
</x-dropdown >
