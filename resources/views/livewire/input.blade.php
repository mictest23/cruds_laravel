<div>
    <div class="p-4">
        <form method="post" wire:submit.prevent="AddRecord()">
          <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your name" wire:model="name">
          </div>
          <p class="text-red-500">@error('name'){{ $message }}@enderror</p>

          <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="text" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your email" wire:model="email">
          </div>
          <p class="text-red-500">@error('email'){{ $message }}@enderror</p>

          <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
            <textarea id="message" name="message" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" rows="4" placeholder="Enter your message" wire:model="message"></textarea>
          </div>
          <p class="text-red-500">@error('message'){{ $message }}@enderror</p>

          <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">File</label>
            <input type="file" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your email">
          </div>

          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
      </div>
</div>
