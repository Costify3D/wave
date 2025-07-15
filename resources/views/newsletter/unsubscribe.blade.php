<!-- Dieses Template erweitert Ihr Haupt-Layout, z.B. @extends('theme::layouts.marketing') -->

<h1>{{ __('newsletter.unsubscribe_title') }}</h1>
<p>{{ __('newsletter.unsubscribe_intro') }}</p>

<form action="{{ route('newsletter.process_unsubscribe') }}" method="POST">
    @csrf
    <!-- Wir übergeben die User-ID und den Token versteckt mit -->
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <input type="hidden" name="token" value="{{ $request->token }}">

    <div>
        <label for="email">{{ __('newsletter.your_email') }}</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label>{{ __('newsletter.unsubscribe_reason') }}</label>
        <select name="reason">
            <option value="too_frequent">{{ __('newsletter.reasons.too_frequent') }}</option>
            <option value="irrelevant">{{ __('newsletter.reasons.irrelevant') }}</option>
            <option value="no_longer_interested">{{ __('newsletter.reasons.no_longer_interested') }}</option>
            <option value="prefer_other_channels">{{ __('newsletter.reasons.prefer_other_channels') }}</option>
            <option value="other">{{ __('newsletter.reasons.other') }}</option>
        </select>
    </div>

    <div>
        <label for="other_reason">{{ __('newsletter.reasons.other_text') }}</label>
        <textarea name="other_reason" id="other_reason"></textarea>
    </div>

    <button type="submit">{{ __('buttons.unsubscribe_now') }}</button>
    <a href="{{ route('home') }}">{{ __('buttons.cancel') }}</a>
</form>