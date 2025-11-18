<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Order Details') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('View Order Information') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('orders.index') }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Back
        </a>
    </div>

    <div class="mt-6">
        <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Order Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $order->id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Ticket</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $order->nama_ticket }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Tiket</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $order->jumlah_tiket }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Total Harga</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $order->status }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Detail</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $order->detail }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
