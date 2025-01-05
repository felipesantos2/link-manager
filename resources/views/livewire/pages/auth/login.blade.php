<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.auth')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>


<div class="min-h-screen flex flex-row-reverse sm:justify-center items-center pt-6 sm:pt-0 bg-primary px-5">
    <div class="basis-1/2 flex">
        <div class="px-20 flex w-full h-full flex-col align-center">
            {{-- <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-60 h-20 fill-current" />
                </a>
            </div> --}}

            <div class="mt-6 py-4 overflow-hidden sm:rounded-lg">
                <h2 class="text-2xl my-4 font-semibold"> Acessar Conta </h2>
                {{-- <span class="border-b bg-second p-0.5 -rotate-180 inline-block w-7"></span> --}}
                <div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form wire:submit="login">
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('E-mail')" c class="text-white" />
                            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full bg-input rounded-xl border-none" type="email"
                                name="email" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class="text-white" />

                            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full bg-input rounded-xl border-none"
                                type="password" name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember" class="inline-flex items-center">
                                <input wire:model="form.remember" id="remember" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}" wire:navigate>
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button type="submit" class="ms-3 bg-second px-5 py-3 rounded-">
                                {{ __('Acessar Conta') }}
                            </x-primary-button>
                        </div>

                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}" wire:navigate>
                            {{ __('Não tem cadastro? Criar conta') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="basis-1/2">
        <img class="p-5" src="{{ Vite::asset('resources/images/banner.png') }}" alt="banner" srcset="">
     </div>
</div>


























    {{-- <div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div> --}}
