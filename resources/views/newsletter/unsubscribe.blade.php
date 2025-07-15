<x-layouts.marketing>
    {{-- Der Slot für den Seitentitel im Browser-Tab --}}
    <x-slot name="title">
        {{ __('newsletter.unsubscribe_title') }}
    </x-slot>

    <x-container>
        <div class="max-w-xl mx-auto my-20">
            
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">{{ __('newsletter.unsubscribe_title') }}</h1>
                <p class="mt-3 text-lg leading-7 text-zinc-600">{{ __('newsletter.unsubscribe_intro') }}</p>
            </div>
            
            {{-- Zeigt eine Erfolgsmeldung nach der Abmeldung an --}}
            @if (session('status'))
                <div class="p-4 mt-8 text-green-800 bg-green-100 border-l-4 border-green-400 rounded-md" role="alert">
                    <p class="font-bold">{{ __('Success') }}</p>
                    <p>{{ session('status') }}</p>
                </div>
            @else

            {{-- Das eigentliche Formular --}}
            <form action="{{ route('newsletter.process_unsubscribe') }}" method="POST" class="mt-10 space-y-6">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="token" value="{{ $request->token }}">

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-zinc-900">{{ __('newsletter.your_email') }}</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" class="form-input w-full" required placeholder="your.email@example.com">
                        @error('email')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div>
                    <label for="reason" class="block text-sm font-medium leading-6 text-zinc-900">{{ __('newsletter.unsubscribe_reason') }}</label>
                    <div class="mt-2">
                        <select id="reason" name="reason" class="form-select w-full">
                            <option value="too_frequent">{{ __('newsletter.reasons.too_frequent') }}</option>
                            <option value="irrelevant">{{ __('newsletter.reasons.irrelevant') }}</option>
                            <option value="no_longer_interested">{{ __('newsletter.reasons.no_longer_interested') }}</option>
                            <option value="prefer_other_channels">{{ __('newsletter.reasons.prefer_other_channels') }}</option>
                            <option value="other">{{ __('newsletter.reasons.other') }}</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="other_reason" class="block text-sm font-medium leading-6 text-zinc-900">{{ __('newsletter.reasons.other_text') }}</label>
                    <div class="mt-2">
                        <textarea id="other_reason" name="other_reason" rows="3" class="form-textarea w-full"></textarea>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 gap-x-4">
                    {{-- Jetzt funktionieren die Komponenten, weil das CSS geladen wird --}}
                    <x-button tag="a" href="{{ url('/') }}" color="secondary">
                        {{ __('buttons.cancel') }}
                    </x-button>
                    <x-button type="submit">
                        {{ __('buttons.unsubscribe_now') }}
                    </x-button>
                </div>
            </form>

            @endif
        </div>
    </x-container>
</x-layouts.marketing>