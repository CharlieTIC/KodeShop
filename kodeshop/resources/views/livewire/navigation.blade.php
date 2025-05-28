<div x-data="{
    open: false,
}">
    <header class="bg-blue-900">
        <x-container class="px-4 py-5">
            <div class="flex items-center">
                {{-- Menú + Logo --}}
                <div class="flex items-center space-x-8">
                    <button class="text-3xl" x-on:click="open = true">
                        <i class="fas fa-bars text-white"></i>
                    </button>

                    <h1 class="text-white">
                        <a href="/" class="inline-flex flex-col items-end">
                            <span class="text-3xl font-semibold">
                                KodeShop
                            </span>
                            <span class="text-xs">
                                Ecommerce-cms
                            </span>
                        </a>
                    </h1>
                </div>
                <!-- Buscador productos -->
                <!-- <div class="flex-1">
                    <x-input class="w-full" placeholder="Buscar producto" />
                </div> -->

                <!-- Icono usuario y carrito alineados a la derecha -->
                <div class="flex items-center space-x-6 ml-auto">
                    <button class="text-2xl md:text-3xl">
                        <i class="fas fa-user text-white"></i>
                    </button>

                    <button class="text-2xl md:text-3xl">
                        <i class="fas fa-shopping-cart text-white"></i>
                    </button>
                </div>
            </div>
        </x-container>
    </header>

    <div x-show="open" x-on:click="open = false" style="display: none" class="fixed top-0 left-0 inset-0 bg-black bg-opacity-25 z-10">
        <div x-show="open" style="display: none" class="fixed top-0 left-0 z-20">

            <div class="flex">
                <div class="w-full md:w-80 h-screen bg-white">

                    <div class="bg-blue-900 px-4 py-3 text-white font-semibold">

                        <div class="flex justify-between items-center">
                        <span class="text-lg">
                            KodeShop MENÚ
                        </span>
                        <button  x-on:click="open = false">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                    </div>
                <div class="h-[calc(100vh-53px)] overflow-auto"> 


                    <ul>
                        @foreach ( $categorias as $categoria )
                        <li wire:mouseover="$set('categoria_id', {{ $categoria->id }})">
                            <a href="" class="flex items-center justify-between px-4 py-4 text-gray-900 hover:bg-blue-600">
                                {{ $categoria->nombre }}
                                <i class="fas-solid fa-angle-right"></i>
                            </a>
                        </li>                           
                        @endforeach
                    </ul>

                </div>
                    
                </div>

                <div class="w-80 xl:w-[57rem] pt-[53px] hidden md:block">

                    <div class="bg-white h-[calc(100vh-53px)] overflow-auto px-6 py-8">

                    <div class="mb-8 flex justify-between items-center">
                        <p class="border-b-[3px] border-black uppercase text-xl font-semibold pb-1">
                            {{$this->categoriaNombre()}}</p>

                            <a href="" class="btn btn-bluedark">
                            Ver todos
                            </a>
                    </div>

                        <ul class="grid grid-cols-1 gap-8">
                            @foreach ($this->subcategorias as $subcategoria )
                            <li>
                                <a href="" class="text-blue-900 font-semibold text-lg">
                                {{ $subcategoria->nombre }}
                                </a>

                              
                            </li>
                            @endforeach
                        </ul>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
