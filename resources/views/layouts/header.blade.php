<div class="justify-content-center">
    <div class="col-md-12">
        <nav>

            <div class="text-center">
                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    @auth
                        Welcome {{ Auth::user()->name }}
                    @endauth
                </div>
            </div>

            <div class="text-center">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </nav>
    </div>
</div>
