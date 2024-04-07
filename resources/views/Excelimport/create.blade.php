<x-app-layout>
    <div class=" h-screen w-screen flex justify-center items-center">
        <div class="">
            <form action="/excelimport" method="POST" enctype="multipart/form-data">
                @csrf
        <input class="bg-slate-300 w-[30rem]   text-center " type="file" name="import">
        <button  onclick="Import()" class="bg-yellow-300 h-8 w-[4rem] rounded-md" type="submit">Import</button>
        a</form>
        </div>

    </div>
    <script>
        function Import(){
        
        }
    </script>
</x-app-layout>