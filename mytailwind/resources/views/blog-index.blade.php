<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Tailwind CSS</title>
    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
    @vite(['resources/css/final.css','resources/js/app.js', 'resources/js/script.js'])
  </head>
  <body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="#home" class="block py-6 text-lg font-bold text-primary">Muhammad Nurdinnullah</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                </li>
                <li class="group">
                  <a href="#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Tentang Saya</a>
                </li>
                <li class="group">
                  <a href="#portfolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Portfolio</a>
                </li>
                <li class="group">
                  <a href="#clients" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Clients</a>
                </li>
                <li class="group">
                  <a href="#blog" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Blog</a>
                </li>
                <li class="group">
                  <a href="#contact" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Contact</a>
                </li>
                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle" />
                    <label for="dark-toggle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">dark</span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    @if ($blog->count())
    <div class="card mb-3">
        @if ($blog->image)
            <div style="max-height: 400px; overflow:hidden;">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?/sea" class="card-img-top" alt="">
        @endif

        <div class="card-body text-center">
          <h3 class="card-title"><a href="/blog/{{ $blog->slug }}" class="text-decoration-none text-dark"></a>{{ $blog->title }}</h3>
            <p>
                <small class="text-body-secondary">
                    By. Dnnl</a>
                </small>
            </p>
          <p class="card-text">{{ $blog->excerpt }}</p>
          <a href="/blog/{{ $blog->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($blog->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                        @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        @else
                        <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-body-secondary">
                                    By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
                                </small>
                                </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post Found.</p>
    @endif

    <div class="d-flex justify-content-end">
     {{-- {{ $blog->links() }} --}}link
    </div>

    <script src="dist/js/script.js"></script>
  </body>
</html>

