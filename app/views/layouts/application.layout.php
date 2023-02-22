<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- include any necessary CSS and JS files -->
        <meta charset="UTF-8" />

        <!--
            the viewport meta tag with the width=device-width, initial-scale=1.0 values ensures that the web page is optimized for mobile devices
            and that the content is displayed at its natural size without being zoomed in or out by default.
            Tailwind CSS, like many other modern CSS frameworks and libraries, recommends the use of this meta tag as a best practice to ensure that web pages are properly optimized for mobile devices.
            The tag helps ensure that the content on the web page is displayed at the correct size and scale, making it easier for users to read and interact with the content on their mobile devices.
        -->

        <!--Це дуже важливий мета тег для адаптивності під мобільні пристрої-->
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!--Tailwindcss-->
        <script src="https://cdn.tailwindcss.com"></script>

        <!--Flowbite-->
        <script src="https://unpkg.com/flowbite@1.6.3/dist/flowbite.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

        <!--
            <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.turbo.min.js"></script>
        -->

        <!--Jquery-ui-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    </head>
    <body>
        <header>
            <!-- included header content here -->
            <?php include('app/views/layouts/_navbar.php'); ?>
        </header>

        <div id="content" class="mx-auto mb-auto container my-2 px-2 min-h-screen">
            <?php include($view); ?>
        </div>

        <footer class="p-4 bg-gray-700 shadow md:px-6 md:py-8 dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center">
                    <!--IMG-->
                </a>
                <ul class="flex flex-wrap items-center mt-2 text-sm text-gray-200 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Home</a>
                    </li>
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6">Page 1</a>
                    </li>
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Page 2</a>
                    </li>
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Page 3</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-100 sm:text-center dark:text-gray-400">
              © 2023 Copyright:
              <a class="text-blue-500" href="https://t.me/MarkOdinSon">Mark Hladkov</a>
              . All Rights Reserved.
            </span>
        </footer>
    </body>
</html>