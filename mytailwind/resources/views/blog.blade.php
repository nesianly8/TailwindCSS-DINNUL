<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Admin</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

{{-- NAVBAR --}}
    <nav class=" bg-gray-100 dark:bg-gray-800 dark:border-gray-700 border-2 border-slate-500 shadow-md ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"  aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
    </nav>
{{-- END NAVBAR --}}

{{-- SIDE BAR --}}


 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-56 border-2 border-slate-500 shadow-lg h-screen transition-transform -translate-x-full sm:translate-x-0 " aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-200 dark:bg-gray-800">
       <a href="" class="flex items-center ps-2.5 mb-5">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">BlogPorto</span>
       </a>
       <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                   <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                   <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                   <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Blog</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>



{{-- END SIDE BAR --}}

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
      {{ session('success') }}
  </div>
@endif

{{-- CONTENT  --}}

 <div class="p-4 my-5 sm:ml-64">
    <div class="p-4 border-2  border-dashed rounded-lg border-gray-500">

        <p class="flex justify-center ps-2.5 mb-5">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">List Blog</span>
        </p>
        <div class="flex justify-end mx-auto ps-2.5 mb-5">
            <button type="submit" class="text-white bg-button-700 hover:bg-button-800 focus:ring-4 focus:outline-none focus:ring-button-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-button-600 dark:hover:bg-button-700 dark:focus:ring-button-800">
                <a href="/blog-admin/create">Create product</a>
            </button>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                <thead class="text-xs  uppercase bg-gray-700 text-gray-300">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                No
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Title
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Slug
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($blog as $blogs)
                    <tr class="text-slate-600 border-t-2 border-slate-400">
                        <td class="pl-7">{{ $loop->iteration }}</td>
                        <td class="pr-7">{{ $blogs->title }}</td>
                        <td class="pr-7">{{ $blogs->slug }}</td>
                        <td class="pr-7">
                            <a href="/blog-admin/{{ $blogs->id }}/show" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                        <td class="pr-7">
                            <form action="{{ route('destroy', $blogs->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" onclick="return confirm('Are You Sure?')">
                                    <i class="bi bi-x-circle"></i>
                                    <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

    </div>
 </div>

{{-- END CONTENT  --}}


</body>
</html>
