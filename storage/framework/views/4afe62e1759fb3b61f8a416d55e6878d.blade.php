<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Traits\HasConfigs;

?>


        <x-auth::elements.container>
            <x-auth::elements.heading
                :text="($language->passwordConfirm->headline ?? 'No Heading')"
                :description="($language->passwordConfirm->subheadline ?? 'No Description')"
                :show_subheadline="($language->passwordConfirm->show_subheadline ?? false)"
            />
            <form wire:submit="confirm" class="space-y-5">
                <x-auth::elements.input :label="config('devdojo.auth.language.passwordConfirm.password')" type="password" id="password" name="password" data-auth="password-input" autofocus="true" wire:model="password" autocomplete="current-password" />
                <x-auth::elements.button type="primary" rounded="md" data-auth="submit-button" submit="true">{{config('devdojo.auth.language.passwordConfirm.button')}}</x-auth::elements.button>
            </form>
        </x-auth::elements.container>
    