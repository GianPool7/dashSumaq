<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div>
            <x-input-label for="Apellido" :value="__('apellido')" />
            <x-text-input id="Apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Tipo doc -->
        <div class="mt-4">
            <x-input-label for="tipoDoc" :value="__('tipoDoc')" />
            <x-text-input id="tipoDoc" class="block mt-1 w-full" type="text" name="tipoDoc" :value="old('tipoDoc')" required autocomplete="tipoDoc" />
            <x-input-error :messages="$errors->get('tipoDoc')" class="mt-2" />
        </div>

        <!-- Num Doc -->
        <div class="mt-4">
            <x-input-label for="numDoc" :value="__('numDoc')" />
            <x-text-input id="numDoc" class="block mt-1 w-full" type="text" name="numDoc" :value="old('numDoc')" required autocomplete="numDoc" />
            <x-input-error :messages="$errors->get('numDoc')" class="mt-2" />
        </div>

        <!-- Nacionalidad -->
        <div class="mt-4">
            <x-input-label for="nacionalidad" :value="__('nacionalidad')" />
            <x-text-input id="nacionalidad" class="block mt-1 w-full" type="text" name="nacionalidad" :value="old('nacionalidad')" required autocomplete="nacionalidad" />
            <x-input-error :messages="$errors->get('nacionalidad')" class="mt-2" />
        </div>


        <!-- Direccion -->
        <div class="mt-4">
            <x-input-label for="direccion" :value="__('direccion')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
        </div>

        <!-- Departamento -->
        <div class="mt-4">
            <x-input-label for="departamento" :value="__('departamento')" />
            <x-text-input id="departamento" class="block mt-1 w-full" type="text" name="departamento" :value="old('departamento')" required autocomplete="departamento" />
            <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
        </div>


        <!-- distrito -->
        <div class="mt-4">
            <x-input-label for="distrito" :value="__('distrito')" />
            <x-text-input id="distrito" class="block mt-1 w-full" type="text" name="distrito" :value="old('distrito')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('distrito')" class="mt-2" />
        </div>


        <!-- provincia -->
        <div class="mt-4">
            <x-input-label for="provincia" :value="__('provincia')" />
            <x-text-input id="provincia" class="block mt-1 w-full" type="text" name="provincia" :value="old('provincia')" required autocomplete="provincia" />
            <x-input-error :messages="$errors->get('provincia')" class="mt-2" />
        </div>

        <!-- genero -->
        <div class="mt-4">
            <x-input-label for="genero" :value="__('genero')" />
            <x-text-input id="genero" class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" required autocomplete="genero" />
            <x-input-error :messages="$errors->get('genero')" class="mt-2" />
        </div>

        <!-- fecha_ingreso -->
        <div class="mt-4">
            <x-input-label for="fecha_ingreso" :value="__('fecha_ingreso')" />
            <x-text-input id="fecha_ingreso" class="block mt-1 w-full" type="text" name="fecha_ingreso" :value="old('fecha_ingreso')" required autocomplete="fecha_ingreso" />
            <x-input-error :messages="$errors->get('fecha_ingreso')" class="mt-2" />
        </div>


        <!-- fecha_nacimiento -->
        <div class="mt-4">
            <x-input-label for="fecha_nacimiento" :value="__('fecha_nacimiento')" />
            <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="text" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autocomplete="fecha_nacimiento" />
            <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
        </div>

        <!-- telefono -->
        <div class="mt-4">
            <x-input-label for="telefono" :value="__('telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
