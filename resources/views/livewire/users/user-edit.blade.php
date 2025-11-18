<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit User') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('users.index') }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Back
        </a>
    </div>

    <div class="w-200">
        <form wire:submit.prevent="submit" class="mt-6 space-y-6">
            <flux:input wire:model="name" label="Name" placeholder="Your Name" />
            <flux:input wire:model="email" label="Email" type="email" placeholder="Your Email" />
            <flux:input wire:model="password" label="Password" type="password" placeholder="Your Password" />
            <flux:input wire:model="confirm_password" label="Confirm Password" type="password" placeholder="Confirm Your Password" />
            <flux:button type="submit" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
