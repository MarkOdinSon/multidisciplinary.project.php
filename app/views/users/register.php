<?php
// app/views/users/register.php
?>

<div class="flex h-screen items-center justify-center">
    <div class="flex justify-center flex-wrap mx-1">
        <div class="flex">
            <!--img-->
        </div>

        <form action="/users/doRegister" method="post">
            <p class="text-xl text-center">
                Sign up
            </p>

            <div class="m-3">
                <div class="field">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Your first name" class="mb-2 form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                </div>
            </div>

            <div class="m-3">
                <div class="field">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" placeholder="Your last name" class="mb-2 form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                </div>
            </div>

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

            <div class="m-3">
                <div class="field">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                </div>
            </div>

            <div class="flex justify-between items-center m-3">
                <p class="flex text-sm justify-center">
                    Already have an account? &nbsp
                    <a href="/users/login">Log in</a>
                </p>
            </div>

            <div class="m-3 text-center lg:text-left">
                <input type="submit" value="Sign up" class="py-3 text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 inline-flex space-x-2 items-center justify-center">
            </div>

            <!--Here errors will be shown-->
            <?php if ($_SESSION['register_form_error_validations']): ?>
                <div class="m-3 p-3 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 text-left" role="alert">
                    <span class="font-medium">
                        <?php
                        // show error messages
                        $number = 1;
                        foreach ($_SESSION['register_form_error_validations'] as $element) {
                            echo $number . '. ' . $element . "<br>";
                            $number++;
                        }
                        unset($_SESSION['register_form_error_validations']); // delete error message in order to show only one time
                        ?>
                    </span>
                </div>
            <?php endif; ?>

        </form>

    </div>
</div>
