<x-app-layout>
    <div class="flex relative z-0">
        <div class=" w-[16rem] h-[32rem] bg-slate-200 fixed top-[4rem]">
            <div class="p-5 border-b border-white  flex justify-center items-center">
                <button id="email" onclick="email()" class="text-center pointer-events-auto text-xl font-bold hover:text-slate-600">Details</button>
            </div>

        </div>
        
        <div id="content" class=" h-[52rem] ml-[16rem] w-[69rem] mt-[4rem] hidden ">
            <div class="flex justify-between h-[2rem] p-4">
                <div>
                    <button class="bg-green-600 rounded-xl h-[2rem] w-[6rem] text-white font-bold">SEND MAIL</button>
                </div>
                <div class="">
                   <a href="/addnew"><button class="bg-yellow-400 rounded-xl h-[2rem] w-[6rem] text-white font-bold">ADD NEW</button></a>
                    <a href="/excelimport"><button class="bg-red-400 rounded-xl h-[2rem] w-[6rem] text-white font-bold">IMPORT</button></a>
                    <a href="/excel/export"> <button class="bg-blue-400 rounded-xl h-[2rem] w-[6rem] text-white font-bold">EXPORT</button></a>
                </div>

            </div>
            <div class="mt-[6rem] p-3 ml-2">
                <table id="myTable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="border bg-green-600 border-white h-[3rem]"></th>
                            <th class="border bg-green-600 border-white h-[3rem]">Name</th>
                            <th class="border bg-green-600 border-white h-[3rem]">Email</th>
                            <th class="border bg-green-600 border-white h-[3rem]">Phone</th>
                            <th class="border bg-green-600 border-white h-[3rem]">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
                    @foreach($addnew as $addnews)
                        <tr>
                        <td class="bg-slate-200">*</td>
                            <td class=bg-slate-200>{{$addnews->name}}</td>
                            <td class=bg-slate-200>{{$addnews->email}}</td>
                            <td class=bg-slate-200>{{$addnews->number}}</td>
                            <td class=bg-slate-200>{{$addnews->address}}</td>
                           
                        </tr>
                        @endforeach
                       
                    
                    


                </table>
            </div>
        </div>
    </div>
    <script>
        function email() {
            var content = document.getElementById("content");
            
            content.classList.toggle("hidden");
            
        }

        function Delete() {
            alert('Deleted Sucessfully')
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                selection: true,
                ajax: "{{ route('dashboard') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'number',
                        name: 'number'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                ]
            });
        });
    </script>
</x-app-layout>