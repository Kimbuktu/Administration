<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('name') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="space-x-8 sm:-my-px text-center">
                        @can('administration.access')
                            <x-nav-link :href="route('administration')" :active="request()->routeIs('administration')">
                                {{ __('overview') }}
                            </x-nav-link>
                        @endcan

                        @can('administration.access.users')
                            <x-nav-link :href="route('administration.users')" :active="request()->routeIs('administration.users')">
                                {{ __('users', 0) }}
                            </x-nav-link>
                        @endcan
    
                        @can('administration.access.roles')
                            <x-nav-link :href="route('administration.roles')" :active="request()->routeIs('administration.roles')">
                                {{ __('roles', 0) }}
                            </x-nav-link>
                        @endcan

                        @can('administration.access.permissions')
                            <x-nav-link :href="route('administration.permissions')" :active="request()->routeIs('administration.permissions')">
                                {{ __('permissions', 0) }}
                            </x-nav-link>
                        @endcan

                        @can('administration.access.settings')
                            <x-nav-link :href="route('administration.settings')" :active="request()->routeIs('administration.settings')">
                                {{ __('settings', 0) }}
                            </x-nav-link>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">Willkommen in der Übersicht der Administration</h2>
                        <p class="pb-6">Diese Ansicht sollte regelmäßig überprüft werden</p>
                        <p class="md:pb-0 sm:pb-6">Hier werden dir alle <span class="px-2 rounded-lg bg-blue-500 text-white">Informationen</span>, <span class="px-2 rounded-lg bg-yellow-500 text-white">Warnungen</span> und <span class="px-2 rounded-lg bg-red-500 text-white">Fehler</span> der Anwendung angezeigt.</p>
                        <p class="md:pb-0 sm:pb-6">Sollte etwas falsch Eingestellt sein oder es zu anderen Problem kommen, wirst du hier darüber informiert.</p>
                        <p>Außerdem findest du weiter unten sämtliche Statistiken, Analysen und Reports die von der Anwendung erstellt werden.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Benachrichtigungen (0)</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
