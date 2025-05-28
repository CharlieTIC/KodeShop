<x-admin-layout :breadcrums="[
    [
        'name' => 'Dashboard',
        'route' => route('dashboard'),
    ],
    [
        'name' => 'Portadas',
    ],
]">

<x-slot name="action">

    <a href="{{ route('covers.create') }}" class="btn btn-blue">Nueva portada</a>
</x-slot>

</x-admin-layout>
