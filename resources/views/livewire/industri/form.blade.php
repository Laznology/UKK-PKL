<div class="p-6 max-w-3xl mx-auto bg-[#FFFDE7] shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-6 text-center text-black">{{ $id ? 'Edit Industri' : 'Tambah Industri' }}</h2>

    <form wire:submit.prevent="save" class="space-y-6">

    

        <div class="grid grid-cols-2 gap-4 text-black">
            <div>
                <label class="block text-sm font-medium text-gray-800">Nama</label>
                <input type="text" wire:model="nama" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-800">Bidang Usaha</label>
                <input type="text" wire:model="bidang_usaha" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('bidang_usaha') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-800">Alamat</label>
                <input type="text" wire:model="alamat" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('alamat') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-800">Kontak</label>
                <input type="text" wire:model="kontak" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('kontak') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-800">Email</label>
                <input type="text" wire:model="email" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-800">Website Perusahaan</label>
                <input type="text" wire:model="website" class="w-full border border-gray-400 rounded-md px-4 py-2 mt-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('website') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="flex justify-between">
            <a href="{{ route('industri') }}" class="inline-block bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                Cancel
            </a>

            <button type="submit" class="bg-gray-500 cursor-pointer text-white px-6 py-3 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                Simpan
            </button>
        </div>
    </form>
</div>
