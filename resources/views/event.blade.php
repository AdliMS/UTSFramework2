<x-layout>

    <div class=" flex gap-8 w-[85%] mt-24">
        <a class="bg-red-500 rounded-md px-4 py-4 text-amber-50 font-semibold hover:shadow-md hover:bg-red-600 hover:text-amber-100 transition-all self-center " href="{{ route('events_view') }}">👈 Kembali</a>

        <a class="bg-blue-200 rounded-md px-4 py-4 text-lime-50 font-semibold hover:shadow-md hover:bg-blue-300 hover:text-lime-100 transition-all self-center " href="/participant-form/{{ $event->event_id }}">Klik untuk Daftar</a>
    </div>

    
    
    <div class=" flex justify-between gap-8 h-fit w-[85%]">

        

     

            <div class="p-16 flex flex-col bg-slate-200 w-4/5 gap-4 rounded-md shadow-md mb-24">
    
                <div class="flex flex-col">
        
                    <h1 class="text-5xl border-b border-slate-600 pb-3 ">{{ $event->event_name }}</h1>
                    <div class="flex justify-between">
                        <p class="text-slate-400">{{ $event->date }}</p> 
                        <p class="text-slate-400 self-end justify-items-end">Peserta: 12/{{ $event->max_participants }}</p>
                    </div>
        
                </div>
                
                <div class="flex flex-col">
                    <h3 class="text-2xl mt-5">Deskripsi acara</h3>
                    <p class="border-t border-slate-600 my-3 max-w-40"></p>
                    <p>{{ $event->description }}</p>
                </div>
        
            
            </div>
        
            <aside class="p-16 flex flex-col items-center bg-slate-200 w-[30%] gap-4 rounded-md shadow-md mb-24">
                <section class="flex flex-col items-center gap-4">
    
                    <h3 class="text-2xl">Narasumber</h3>
                    <div class="border-b border-slate-600 min-w-full"></div>
                    <img class="w-3/4 rounded-full object-cover" src="{{ asset('assets/img/guy.jpg') }}" alt="">
                    
                </section>
                
                <section class="flex flex-col items-center mt-2">
                    <p>Zamzam Muazam</p>
                    <p>IT Engineer</p>
                </section>
                
            </aside>
    
            


        
    </div>

    


</x-layout>