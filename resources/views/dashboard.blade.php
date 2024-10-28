<x-layout>

  <div class="mt-20 px-16 py-8 flex flex-col mx-auto mb-16 bg-white w-5/12 gap-4 rounded-md shadow-md ">
  
    <h1 class="font-semibold text-3xl pb-3 border-b border-slate-500 ">Daftar event</h1>
    <div class=" bg-slate-900"></div>

        <div class="flex flex-col gap-2">

            <div class="flex justify-between">

                <form class="self-start" action="">
                    <label for="table-search" class="sr-only">Search</label>
    
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
    
                        <input type="text" id="table-search" class=" py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-md w-96 bg-white focus:outline-none hover:shadow-md transition-all" placeholder="Cari nama acara">
                    </div>
                </form>
    
                <form class="" action="{{ route('event_form') }}">
                    <button class=" hover:shadow-md transition-all rounded-md bg-green-200 p-2 font-semibold">Tambahkan acara</button>
                </form>

            </div>

            
                
    
            <table class="table-auto">
                <thead>
                  <tr>
                    <th class="px-4 py-4">Nama Acara</th>
                    <th class="px-4 py-4">Keterangan</th>
                    <th class="px-4 py-4">Jumlah Partisipan</th>
                    <th class="px-4 py-4">Tanggal di-adakan</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($data as $event)

                  <tr class="hover:bg-slate-100 hover:transition-all hover:cursor-pointer" data-href="/event-detail/{{ $event->event_id }}">
                    <td class="border px-4 py-4 ">{{ $event->event_name }}</td>
                    <td class="border px-4 py-4">{{ $event->description }}</td>
                    
                    <td class="border px-4 py-4">{{ $event->max_participants }} orang</td>
                    <td class="border px-4 py-4">{{ $event->date }}</td>
                  </tr>
                      
                  @endforeach
                  
    
                </tbody>
              </table>

        </div>
  
  </div>

        
  <script>
    const tableRows = document.querySelectorAll("table tbody tr");
    for (const tableRow of tableRows) {
      tableRow.addEventListener('click', function (){
        window.location.href = this.dataset.href;
      })
    }
  </script>
    
    
</x-layout>