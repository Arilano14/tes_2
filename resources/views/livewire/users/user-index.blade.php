<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage All Users') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        @if (session('success'))
            <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        <a href="{{ route("users.create")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Create User
        </a>
        <div class="overflow-x-auto p-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class=" text-gray-700 bg-gray-50 dark:bg-zinc-700 dark:text-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="odd:bg-white odd:dark:bg-zinc-800 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-zinc-700 border-gray-200">
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{$user -> id}}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{$user -> name}}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{$user -> email}}</td>
                        <td class="px-6 py-2">
                            <a href="{{ route('users.show', $user->id) }}" 
                            class="font-medium text-green-600 dark:text-green-500 hover:underline">
                            Show
                            </a>

                            <a href="{{ route('users.edit', $user->id) }}" 
                            class="px-6 font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                            Edit
                            </a>

                            <a href="#" 
                            wire:click.prevent="delete({{ $user->id }})" 
                            onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()" 
                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                            Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
