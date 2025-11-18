<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Order') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit Order Details') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('orders.index') }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Back
        </a>
    </div>

    <div class="w-200">
        <form wire:submit.prevent="submit" class="mt-6 space-y-6">
            {{-- Pilih tiket --}}
            <div class="mb-4">
                <label for="ticket_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Nama Tiket
                </label>
                <select wire:model.live="ticket_id" id="ticket_id"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm
                           focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                           dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="">-- Pilih Tiket --</option>
                    @foreach ($tickets as $ticket)
                        <option value="{{ $ticket->id }}">{{ $ticket->nama_tiket }} - Rp{{ number_format($ticket->harga, 0, ',', '.') }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Jumlah Tiket --}}
            <flux:input wire:model.live="jumlah_tiket"
                label="Jumlah Tiket" placeholder="Masukkan jumlah tiket" type="number" />

            {{-- Total Harga (readonly) --}}
            <flux:input wire:model="total_harga" label="Total Harga" type="number" step="0.01" readonly />

            {{-- Status --}}
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Status
                </label>
                <select wire:model="status" id="status"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm
                           focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                           dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="">-- Pilih Status --</option>
                    <option value="Pending">Pending</option>
                    <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                    <option value="Sudah dikonfirmasi">Sudah dikonfirmasi</option>
                </select>
            </div>
            <flux:input wire:model="detail" label="Detail" placeholder="Order Detail" />
            <flux:button type="submit" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
