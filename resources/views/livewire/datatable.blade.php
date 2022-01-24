<div>
    <div class="min-h-full flex items-center justify-center py-5 px-4 sm:px-6 lg:px-8">
        <div>
            <label for="search">Search</label>
            <input wire:model="search" id="search" name="search" type="text"
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>
        <div class="form-check">
            <input wire:model="active"
                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                Active
            </label>
        </div>
    </div>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

        <!-- Datatable -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <button wire:click="sortBy('name')">Name</button>
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <button wire:click="sortBy('email')">Email</button>
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            {{-- @dd($searchResults) --}}
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($students as $student)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$student->name}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$student->email}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$student->active}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>