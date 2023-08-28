<x-guest-layout>
    
    <x-jet-authentication-card>
        <x-slot name="logo">
        
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        
        <img src="/assets/login.png" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 flex items-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                
                <x-jet-input id="email" placeholder="Email" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                
                <x-jet-input id="password" placeholder="Password" class="block mt-1 w-full bg-gray-200 rounded-lg py-3 px-4" type="password" name="password" required autocomplete="current-password" />
            </div> 

            <div class="mt-4">
            
                <input type="submit" class="w-full mt-1 bg-yellow-400 rounded-lg py-3 px-4 text-white " style="background:orange;text-align:center" value="MASUK">
                   
                
            </div>
        </form>

        @if (Route::has('password.request'))
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Klik Untuk Daftar') }}
                </a>
            </div>
        @endif
    </x-jet-authentication-card>
</x-guest-layout>
