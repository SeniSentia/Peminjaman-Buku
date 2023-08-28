<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                
                <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="Nama Lengkap" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="Email" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
            
                <x-jet-input id="password" placeholder="Password" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
              
                <x-jet-input id="password_confirmation" placeholder="Tulis Ulang Password" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Saya setuju dengan syarat dan ketentuan', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <input type="submit" class="w-full mt-1 bg-yellow-400 rounded-lg py-3 px-4 text-white " style="background:orange;text-align:center" value="DAFTAR">
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Klik Untuk Masuk') }}
                </a>

             
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
