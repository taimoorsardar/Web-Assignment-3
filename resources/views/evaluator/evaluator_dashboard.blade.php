<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evalutor Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" id="admin-dashboard">
                    {{ __("You're logged in as Evaluator!")}}
                </div>
            </div>
        </div>
    </div>

    <style>
        #admin-dashboard {
            background-color: #fff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 24px;
            font-size: 1.25rem;
            font-weight: 500;
            color: #333;
        }
    </style>
</x-app-layout>
