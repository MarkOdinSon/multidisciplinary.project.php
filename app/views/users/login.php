<?php
    // app/views/users/login.php
?>

<div class="flex h-screen items-center justify-center">
    <div class="flex justify-center flex-wrap mx-1">

        <div class="flex">
            <!--img-->
        </div>

        <!--form-->
        <form action="/users/doLogin" method="post">
            <p class="text-xl text-center">
                Log in
            </p>
            <div class="m-3">
                <div class="field">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Your email" class="mb-2 form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                </div>
            </div>
            <div class="m-3">
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Your password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                </div>
            </div>

            <div class="flex justify-between items-center m-3">
                <p class="flex text-sm justify-center">
                    Don't have an account? &nbsp
                    <a href="/users/register">Sign up</a>
                </p>
            </div>

            <div class="m-3 text-center lg:text-left">
                <input type="submit" value="Login" class="py-3 text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 inline-flex space-x-2 items-center justify-center">
            </div>

            <!--Here errors will be shown-->
            <?php if ($_SESSION['login_wrong_password_error'] || $_SESSION['login_wrong_email_error']): ?>
                <div class="m-3 p-3 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 text-center" role="alert">
                    <span class="font-medium">
                        <?php
                        echo $_SESSION['login_wrong_password_error']; // show error message
                        unset($_SESSION['login_wrong_password_error']); // delete error message in order to show only one time

                        echo $_SESSION['login_wrong_email_error']; // show error message
                        unset($_SESSION['login_wrong_email_error']); // delete error message
                        ?>
                    </span>
                </div>
            <?php endif; ?>

        </form>

    </div>
</div>
