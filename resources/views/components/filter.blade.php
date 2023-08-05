@props(['bookfilter'])
@php
    $displayedCategories = [];
@endphp
<div >
    <div class="relative inline-block text-left">
        <div>
            <button type="button" class="h-14 pt-4 top-4 inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
                Filter
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="menu-dropdown" style="display: none;">
            <div class="py-1" role="none">
                @foreach ($bookfilter as $book)
                    @if (!in_array($book['category'], $displayedCategories))
                        <a href="/?category={{ $book['category'] }}" class="text-gray-700 block px-4 py-2 text-base" role="menuitem" tabindex="-1" id="menu-item-2">{{ $book['category'] }}</a>
                        @php
                            $displayedCategories[] = $book['category'];
                        @endphp
                    @endif
                @endforeach
                <a href="/" class="text-gray-700 block px-4 py-2 text-base" role="menuitem" tabindex="-1" id="menu-item-2">clear</a>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('menu-dropdown');
        if (dropdown.style.display === 'none') {
            dropdown.style.display = 'block';
        } else {
            dropdown.style.display = 'none';
        }
    }
</script>
