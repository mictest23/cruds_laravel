<div>


    <div class="p-4 mt-40">
        {{-- <input type='button' value='Fetch all records' wire:click="fetchall" class="p-3 bg-slate-400 text-white"> --}}
        <input type="text" placeholder="search" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" wire:model="search">
        <table class="min-w-full border border-gray-300">
          <thead>
            <tr>
              <th class="bg-gray-100 border-b-2 border-gray-300 p-2">Name</th>
              <th class="bg-gray-100 border-b-2 border-gray-300 p-2">Email</th>
              <th class="bg-gray-100 border-b-2 border-gray-300 p-2">Message</th>
              <th class="bg-gray-100 border-b-2 border-gray-300 p-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($records))
            @foreach($records as $record)
            <tr>
              <td class="border-b border-gray-300 p-2">{{ $record->name }}</td>
              <td class="border-b border-gray-300 p-2">{{ $record->email }}</td>
              <td class="border-b border-gray-300 p-2">{{ $record->message }}</td>
              <td class="border-b border-gray-300 p-2">
                <button class="p-4 bg-blue-400">update</button>
                <button class="p-4 bg-red-400">delete</button>
              </td>
            </tr>
            @endforeach
            @endif

            <!-- Add more rows as needed -->
          </tbody>
        </table>
        {{ $records->links() }}
      </div>



</div>
