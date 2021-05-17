<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Anggota
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        @if (session()->has('message'))
                            <div class="bg-green-100 border-t-4 rounded-b text-green-900 px-4 py-3 shadow-md my-3"
                                role="alert">
                                <div class="flex">
                                    <div>
                                        <p class="text-sm">{{ session('message') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <button wire:click="create()"
                            class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-semibold text-sm py-1 px-1 my-4 shadow"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> Tambah Pengguna </button>

                        @if ($isModal)
                            @include('livewire.create')
                        @endif

                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col "
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No Meteran
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            status
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only "></span>
                                        </th>
                                    </tr>
                                </thead>
                                @forelse($penggunas as $row)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">

                                                    <div class="">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $row->no_meteran }}
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $row->nama }}</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $row->alamat }}</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {!! $row->status_label !!}
                                            </td>
                                            <td>
                                                <a href="/pengguna/{{ $row->id }}"
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold  text-green-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                </a>
                                            </td>

                                            {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button wire:click="edit({{ $row->id }})"
                                                    class=" align-middle x-2 inline-flex text-xs leading-5 font-semibold rounded-md bg-green-100 text-green-800 py-1 px-1"></button>
                                            </td> --}}
                                        </tr>

                                    @empty
                                        <tr>
                                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
