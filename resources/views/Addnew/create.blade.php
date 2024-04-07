<x-app-layout>
    <div class=" pt-[4rem] h-screen">
        <div class="flex place-content-end">
 <a href="/dashboard"> <button class="mt-4 bg-yellow-400 hover:bg-yellow-500 mr-[5rem] h-8 w-[4rem] rounded-md">View</button></a>
        </div>
        <div class=" flex mt-[10rem]  items-center justify-center">
            <div>


                <form action="/addnew/create" method="POST">
                    @csrf
                    <div>
                        <input type="string" name="name" placeholder="Enter Name">
                        <input type="string" name="email" placeholder="Enter Email">
                        <input type="string" name="number" placeholder="Enter Number">
                        <input type="string" name="address" placeholder="Enter Address">
                        <div>
                            <div>
                                <button class="bg-slate-300 hover:bg-slate-200 mt-2 h-8 w-[4rem] rounded-md" type="submit">Submitt</button>
                            </div>
                </form>
                <div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>