<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Nome Completo" />
            <x-text-input id="name" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone (WhatsApp) -->
        <div class="mt-4">
            <x-input-label for="phone" value="Telefone / WhatsApp" />
            <x-text-input id="phone" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Registration Address -->
        <div class="mt-4">
            <x-input-label for="registration_address" value="Endereço de Cadastro (Rua, Número, Bairro, CEP, Cidade-UF)" />
            <x-text-input id="registration_address" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="text" name="registration_address" :value="old('registration_address')" required />
            <x-input-error :messages="$errors->get('registration_address')" class="mt-2" />
        </div>

        <!-- Shipping Address -->
        <div class="mt-4">
            <x-input-label for="shipping_address" value="Endereço de Entrega (Se for diferente)" />
            <x-text-input id="shipping_address" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="text" name="shipping_address" :value="old('shipping_address')" required />
            <x-input-error :messages="$errors->get('shipping_address')" class="mt-2" />
        </div>

        <!-- Billing Address -->
        <div class="mt-4">
            <x-input-label for="billing_address" value="Endereço de Cobrança (Se for diferente)" />
            <x-text-input id="billing_address" class="block mt-1 w-full border-gray-300 focus:border-peach focus:ring-peach rounded-md shadow-sm" type="text" name="billing_address" :value="old('billing_address')" required />
            <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
