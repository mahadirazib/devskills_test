<nav x-data="" class="bg-white shadow">
    <div class="container">
        <div class="d-flex justify-content-between py-2 justify-between">
            
            <div class="">
                <div class="flex flex-shrink-0 items-center">
                    <a href="/">
                        <h2 class="font-bold text-2xl">Test</h2>
                    </a>
                </div>
            </div>

            <div>
                <form class="block w-full" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="btn btn-success">
                        Sign out
                    </button>
                </form>
            </div>
            
        </div>
    </div>

</nav>
