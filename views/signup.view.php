<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php') ?>

<main>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Register for a new
                    account</h2>
            </div>

            <form class="mt-8 space-y-6" action="/signup" method="POST">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div class="mb-2">
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required value="<?= $_POST['email'] ?? '' ?>"
                               class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Email address">
                        <?php if (isset($errors['email'])): ?>
                            <li class="text-red-500 text-xs mt-2 list-none"><?= $errors['email'] ?></li>
                        <?php endif; ?>
                    </div>

                    <div >
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required value="<?= $_POST['password'] ?? '' ?>"
                               class="mb-2 relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Password">
                        <?php if (isset($errors['password'])): ?>
                           <li class="text-red-500 text-xs mt-2 list-none"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                    </div>
                    <div class="mb-2">
                        <label for="company-name" class="sr-only">Company name</label>
                        <input id="company-name" name="company-name" type="text" autocomplete="company-name" required value="<?= $_POST['company-name'] ?? '' ?>"
                               class="mb-2 relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Company name">
                        <?php if (isset($errors['company-name'])): ?>
                           <li class="text-red-500 text-xs mt-2 list-none"><?= $errors['company-name'] ?></li>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="company-desc" class="sr-only">Company description</label>
                        <textarea id="message" rows="4" name="company-desc" required  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300  
                        focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 placeholder-gray-500" placeholder="Company description.."><?= $_POST['company-desc'] ?? '' ?></textarea>
                        <?php if (isset($errors['company-desc'])): ?>
                           <li class="text-red-500 text-xs mt-2 list-none"><?= $errors['company-desc'] ?></li>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php require 'partials/footer.php' ?>