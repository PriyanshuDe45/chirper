@props(['chirp'])

<div class="card bg-base-100 shadow mt-4">
    <div class="card-body">
        <div class="flex items-start space-x-3">



            {{-- Avatar --}}
            @if ($chirp->user)
                <div class="avatar flex-shrink-0">
                    <div class="avatar">
                        <div class="size-10 rounded-full">
                            <img src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}?vibe=ocean"
                                 alt="{{ $chirp->user->name }}'s avatar" class="rounded-full" />
                        </div>
                    </div>
                </div>
            @else
                <div class="avatar flex-shrink-0">
                    <div class="avatar">
                        <div class="size-10 rounded-full">
                            <img src="https://avatars.laravel.cloud/vibe=ocean"
                                 class="rounded-full" />
                        </div>
                    </div>
                </div>
            @endif

            {{-- Content --}}
            <div class="min-w-0">

                {{-- Top Row --}}
                <div class="flex items-center space-x-1">
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
