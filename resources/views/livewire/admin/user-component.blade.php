<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-titulo2 leading-tight">
            Usuarios
        </h2>
    </x-slot>

    <div class="container py-12">
        <x-table-responsive>

            <div class="px-6 py-4">
                <x-jet-input wire:model="search" type="text" class="w-full" placeholder="Escriba algo para filtrar"/>
            </div>

            @if (count($users))
                <table class="min-w-full divide-y divide-fondo">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-principal uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-principal uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-principal uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-principal uppercase tracking-wider">
                                Rol
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-fondo">

                        @foreach ($users as $user)
                            <tr wire:key="{{$user->email}}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-titulo2">
                                        {{ $user->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-titulo2">
                                        {{ $user->name }}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-titulo2">
                                        {{ $user->email }}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-principal">
                                    @if (count($user->roles))
                                        Admin
                                    @else
                                        No tiene rol
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <label>
                                        <input {{count($user->roles) ? 'checked' : ''}} value="1" type="radio" name="{{ $user->email }}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        Si
                                    </label>
                                    <label class="ml-2">
                                        <input {{count($user->roles) ? '' : 'checked'}} value="0" type="radio" name="{{ $user->email }}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        No
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No coincide ningun registro
                </div>
            @endif

            @if ($users->hasPages())
                <div class="px-6 py-4">
                    {{ $users->links() }}
                </div>
            @endif

        </x-table-responsive>
    </div>
</div>
