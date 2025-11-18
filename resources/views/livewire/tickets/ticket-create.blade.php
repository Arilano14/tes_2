<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Ticket') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create New Ticket') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('tickets.index') }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Back
        </a>
    </div>

    <div class="w-200">
        <form wire:submit.prevent="submit" class="mt-6 space-y-6">
            <flux:input wire:model="nama_tiket" label="Ticket" placeholder="Ticket Name" />
            <flux:input wire:model="harga" label="Price" placeholder="Ticket Price" />
            <flux:input wire:model="detail" label="Detail" placeholder="Detail Ticket" />
            <flux:button type="submit" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
