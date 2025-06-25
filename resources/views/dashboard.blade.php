<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
	<div class="mt-6 border-t pt-4">
	    @hasrole('Admin')
	        <p class="font-semibold">Panel de Administrador:</p>
	        <a href="{{ route('admin.test') }}" class="text-indigo-600 hover:text-indigo-900">
	            &rarr; Ir a la página de prueba de Admin
        	</a>
	    @endhasrole
	</div>
    </div>
</x-app-layout>
