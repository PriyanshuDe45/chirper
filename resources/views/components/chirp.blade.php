@props(['chirp'])

<div class="card bg-base-100 shadow mt-4">
    <div class="card-body">
        <div class="flex items-start space-x-3">

            {{-- Avatar --}}
            @if ($chirp->user)
                <div class="avatar flex-shrink-0">
                    <div class="size-10 rounded-full">
                        <img
                            src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                            alt="{{ $chirp->user->name }} avatar"
                        />
                    </div>
                </div>
            @else
                <div class="avatar placeholder flex-shrink-0">
                    <div class="bg-neutral text-neutral-content rounded-full w-10">
                        <span>A</span>
                    </div>
                </div>
            @endif

            {{-- Content --}}
            <div class="min-w-0">

                {{-- Top Row --}}
                <div class="flex items-center ">
                    <p class="font-semibold text-sm">
                        {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}
                    </p>

                    <span class="text-xs text-base-content/50">
                        ·
                    </span>

                    <p class="text-xs text-base-content/60">
                        {{ $chirp->created_at->diffForHumans() }}
                    </p>
                </div>

                {{-- Message --}}
                <p class="mt-1 text-sm leading-relaxed text-base-content">
                    {{ $chirp->message }}
                </p>

            </div>

        </div>
    </div>
</div>
