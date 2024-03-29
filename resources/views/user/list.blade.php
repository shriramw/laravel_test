<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                   <table>
                    <tbody>
                        <tr>
                            <th>
                                Sr. No
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone 
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->phone }}
                            </td>
                            <td>
                                Edit | Delete
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
