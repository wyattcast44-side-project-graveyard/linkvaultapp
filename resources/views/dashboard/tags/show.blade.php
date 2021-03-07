<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">{{ $tag->name }} ({{ $tag->links_count }})</h2>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            @forelse ($links as $link)
                @include('dashboard.links.partials.link')
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>