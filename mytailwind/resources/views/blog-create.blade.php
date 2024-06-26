<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <title>Create Blog</title>
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


{{-- CONTENT  --}}

 <div class="p-4 my-5 sm:ml-64">
    <div class="p-4 dark:border-gray-700 ">

    <a href="/blog-admin" class="flex justify-center mx-auto ps-2.5 mb-5">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Create Blog</span>
    </a>

    <form method="post" action="{{ route('store') }}" class="max-w-2xl mx-auto border-2 border-slate-400 shadow-lg rounded-lg p-10" enctype="multipart/form-data">
      @csrf
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" name="title" placeholder="Ex. Lorem ipsum dolor sit amet consectetur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') is-invalid @enderror" required />
            @error('title')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your slug</label>
            <textarea type="text" id="slug" name="slug" cols="30" rows="5" placeholder="sunt maiores harum illum at iure quo iusto vel? Eos magnam eligendi earum nostrum, ducimus omnis!" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug') is-invalid @enderror"></textarea>
            @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image">A picture is useful to confirm your are blog</div>
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="body" class="form-label">Body</label>
            @error('body')
              <p class="text-danger">
                {{ $message }}
              </p>
            @enderror
              <input id="body" type="hidden" name="body" placeholder="Ex. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore aut necessitatibus doloremque. Deserunt culpa, sunt maiores harum illum at iure quo iusto vel? Eos magnam eligendi earum nostrum, ducimus omnis!" required>
              <trix-editor input="body"></trix-editor>
        </div>

          <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Create Blog
          </button>
    </form>


    </div>
 </div>

{{-- END CONTENT  --}}

<script>

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }

    }


</script>
</body>
</html>
