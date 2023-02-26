<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información general') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información general del perfil") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.updateGeneral') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <input type="hidden" name="active_tab" value="1">
{{--{{ $user }}--}}
{{--        <input type="hidden" name="selected_tab" value="pestana2">--}}

        <div>
            <x-input-label for="cedula" :value="__('Cédula')" />
            <x-text-input id="cedula" name="cedula" type="text" class="mt-1 block w-full" :value="old('cedula', $user->cedula)" required autofocus autocomplete="cedula" />
            <x-input-error class="mt-2" :messages="$errors->get('cedula')" />
        </div>
        <div>
            <x-input-label for="countries_code" :value="__('País')" />
            <select id="countries_code" name="countries_code" class="mt-1 block w-full" required>
                <option value="">Seleccione un país</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ $user->countries_code == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('countries_code')" />
        </div>

        <div>
            <x-input-label for="depmun_id" :value="__('Departamento')" />
            <select id="depmun_id" name="depmun_id" class="mt-1 block w-full">
                <option value="">Seleccione un país</option>
                @foreach ($dep_mun as $dep_mun_)
                    <option value="{{ $dep_mun_->id }}" {{ $user->depmun_id == $dep_mun_->id ? 'selected' : '' }}>{{ $dep_mun_->nombre }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('depmun_id')" />
        </div>
        <div>
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', $user->direccion)" required autofocus autocomplete="direccion" />
            <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
        </div>
        <div>
            <x-input-label for="area" :value="__('Área')" />
            <select id="area" name="area" class="mt-1 block w-full" required>
                <option value="">Seleccione una opción</option>
                @foreach ($area as $a)
                    <option value="{{ $a }}" {{ $user->area == $a ? 'selected' : '' }}>{{ $a }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('area')" />
        </div>
        <div>
            <x-input-label for="lugar" :value="__('Lugar de nacimiento')" />
            <x-text-input id="lugar" name="lugar" type="text" class="mt-1 block w-full" :value="old('lugar', $user->lugar)" required autofocus autocomplete="lugar" />
            <x-input-error class="mt-2" :messages="$errors->get('lugar')" />
        </div>
        <div>
            <x-input-label for="estado_civil_id" :value="__('Estado civil')" />
            <select id="estado_civil_id" name="estado_civil_id" class="mt-1 block w-full" required>
                <option value="">Seleccione una opción</option>
                @foreach ($estado_civil as $ec)
                    <option value="{{ $ec->id }}" {{ $user->estado_civil_id == $ec->id ? 'selected' : '' }}>{{ $ec->name }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('estado_civil_id')" />
        </div>
        <div>
            <x-input-label for="sexo" :value="__('Sexo')" />
            <select id="sexo" name="sexo" class="mt-1 block w-full" required>
                <option value="">Seleccione una opción</option>
                @foreach ($sexo as $s)
                    <option value="{{ $s }}" {{ $user->sexo == $s ? 'selected' : '' }}>{{ $s }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('sexo')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated-general')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
