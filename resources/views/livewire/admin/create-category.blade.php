<div>
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear nueva categoría
        </x-slot>

        <x-slot name="description">
            Complete la información necesaria para poder crear una nueva categoría
        </x-slot>

        <x-slot name="form">
            <div class="col-span-4 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>

                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1" />

                <x-jet-input-error for="createForm.name" />
            </div>

            <div class="col-span-4 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>

                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div>

            <div class="col-span-4 sm:col-span-4">
                <x-jet-label class="mb-1">
                    Marcas
                </x-jet-label>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($brands as $brand)
                        
                        <x-jet-label>
                            <x-jet-checkbox
                            wire:model.defer="createForm.brands"
                            name="brands[]"
                            value="{{$brand->id}}" />
                            {{$brand->name}}
                        </x-jet-label>

                    @endforeach
                </div>
                <x-jet-input-error for="createForm.brands" />
            </div>

            <div class="col-span-4 sm:col-span-4">
                <x-jet-label>
                    Imagen
                </x-jet-label>

                <input wire:model="createForm.image" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                <x-jet-input-error for="createForm.image" />
            </div>
        </x-slot>


        <x-slot name="actions">

            <x-jet-action-message class="mr-3" on="saved">
                Categoría creada
            </x-jet-action-message>

            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-jet-action-section>
        <x-slot name="title">
            Lista de categorías
        </x-slot>

        <x-slot name="description">
            Aquí encontrará todas las categorías agregadas
        </x-slot>

        <x-slot name="content">

            <table class="text-principal">
                <thead class="border-b border-fondo">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2 text-center">Acción</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-separador">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="py-2">
                                <a href="{{route('admin.categories.show', $category)}}" class="uppercase underline hover:text-blue-600">
                                    {{$category->name}}
                                </a>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-separador">
                                    <a class="pr-4 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$category->slug}}')">Editar</a>
                                    <a class="pl-4 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteCategory', '{{$category->slug}}')">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </x-slot>
    </x-jet-action-section>

    <x-jet-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <div class="space-y-3">

                <div>
                    @if ($editImage)
                        <img class="w-full h-64 object-cover object-center" src="{{$editImage->temporaryUrl()}}" alt="">
                    @else
                        <img class="w-full h-64 object-cover object-center" src="{{Storage::url($editForm['image'])}}" alt="">
                    @endif
                </div>

                <div>
                    <x-jet-label>
                        Nombre
                    </x-jet-label>

                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />

                    <x-jet-input-error for="editForm.name" />
                </div>

                <div>
                    <x-jet-label>
                        Slug
                    </x-jet-label>

                    <x-jet-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                    <x-jet-input-error for="editForm.slug" />
                </div>

                <div class="col-span-6 ">
                    <x-jet-label>
                        Marcas
                    </x-jet-label>

                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ($brands as $brand)
                            
                            <x-jet-label>
                                <x-jet-checkbox
                                wire:model.defer="editForm.brands"
                                name="brands[]"
                                value="{{$brand->id}}" />
                                {{$brand->name}}
                            </x-jet-label>

                        @endforeach
                    </div>
                    <x-jet-input-error for="editForm.brands" />
                </div>

                <div>
                    <x-jet-label>
                        Imagen
                    </x-jet-label>

                    <input wire:model="editImage" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                    <x-jet-input-error for="editImage" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>