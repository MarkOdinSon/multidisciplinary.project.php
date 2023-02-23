<nav class="bg-gray-700 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <div class="container flex flex-wrap items-center justify-between mx-auto">

            <a href="/" class="flex items-center">
                <!--IMG-->
                <span class="self-center text-md font-semibold whitespace-nowrap text-rose-600">Multidisciplinary project</span>
            </a>

            <a href="/" class="flex items-center">
                <!--IMG-->
                <span class="self-center text-md font-semibold whitespace-nowrap text-white">Source code</span>
            </a>

            <div>
                <!-- included user icon panel content here -->
                <?php include('app/views/layouts/_iconuser.php'); ?>
            </div>

            <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block mt-2" id="navbar-default">
                <ul class="flex flex-col p-3 mt-4 border border-gray-100 rounded-b-lg rounded-r-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                    <li>
                        <a href="https://t.me/MarkOdinSon"
                           class="mr-0 text-sm font-medium text-violet-600 hover:underline">Mark Hladkov</a>
                    </li>
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                           aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Page 1</a>
                    </li>
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Page 2</a>
                    </li>
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Page 3 ...</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>