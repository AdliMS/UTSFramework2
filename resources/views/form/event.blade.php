<x-layout>


    <div class="mt-20 px-16 py-8 flex flex-col mx-auto mb-16 bg-white w-5/12  rounded-md shadow-md">
        <h1 id="heading" class=" mb-16 text-4xl font-semibold text-slate-500 self-center">Tambah acara di sini</h1>
    
        <div class="flex flex-row-reverse justify-center items-center gap-12">

            
          
    
          <form class="flex flex-col flex-grow justify-center gap-4" action="{{ route('add_event') }}" method="post">
            @csrf

            @if (session('success')) 
                          <div class="bg-green-100 text-amber-950 py-4 my-4 h-16 rounded-md shadow-md mx-auto block text-center text-lg font-semibold w-full" role="alert">
                              {{ session('success') }}
                          </div> 
                          @endif
                          
              <input id="name" name="name" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-slate-500 focus:outline-none" placeholder="Nama Acara">
              <input id="desc" name="desc" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-slate-500 focus:outline-none" placeholder="Deskripsi Acara">
              <input id="date" name="date" type="date" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-slate-500 focus:outline-none" placeholder="Tanggal">
              <input id="maxp" name="maxp" type="number" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-slate-500 focus:outline-none" placeholder="Maksimal Partisipan">
        
              <button type="submit" id="kirim" class="bg-[#FFD09B] text-amber-950 hover:bg-[#fab957] hover:text-black hover:shadow-none transition-all py-4 my-4 w-5/12 h-16 rounded-md shadow-md mx-auto block cursor-pointer text-center text-2xl font-semibold">Tambah</button>

              
          </form>
  
          
      
        </div>

       
    

      
        

</x-layout>