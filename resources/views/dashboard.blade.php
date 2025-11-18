<x-layouts.app :title="__('Dashboard')">
    <div class="p-4 mx-auto max-w-screen-2xl md:p-6">
        <div class="grid grid-cols-12 gap-4 md:gap-6">
            <div class="col-span-12">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
            </div>
            <div class="col-span-12 xl:col-span-7">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Total Users</h3>
                        <p class="text-3xl font-bold text-blue-600">{{ \App\Models\User::count() }}</p>
                    </div>
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Total Orders</h3>
                        <p class="text-3xl font-bold text-green-600">{{ \App\Models\Order::count() }}</p>
                    </div>
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Total Tickets</h3>
                        <p class="text-3xl font-bold text-purple-600">{{ \App\Models\Ticket::count() }}</p>
                    </div>
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Revenue</h3>
                        <p class="text-3xl font-bold text-yellow-600">Rp{{ number_format(\App\Models\Order::sum('total_harga'), 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-5">
                <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Activity</h3>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">New user registered</span>
                            <span class="text-xs text-gray-500">2 hours ago</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Order placed</span>
                            <span class="text-xs text-gray-500">4 hours ago</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Ticket created</span>
                            <span class="text-xs text-gray-500">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Users</h3>
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-50 dark:bg-gray-800">
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900 dark:text-white">ID</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900 dark:text-white">Name</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900 dark:text-white">Email</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900 dark:text-white">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\User::latest()->take(5)->get() as $user)
                                <tr class="border-t border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{ $user->id }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{ $user->name }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900 dark:text-white">{{ $user->email }}</td>
                                    <td class="px-4 py-2 text-sm text-green-600">Active</td>
                                </tr>
                                @endforeach
                                <script src="{{ asset('tailadmin/assets/js/main.js') }}"></script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
