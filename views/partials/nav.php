<nav class="bg-indigo-700 border-b border-indigo-500">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-evenly">
          <div class="flex flex-1 items-center justify-between md:items-stretch md:justify-start">
            <!-- Logo -->
            <div>
              <a class="flex flex-shrink-0 items-center mr-4" href="/">
                <span class="hidden md:block text-white text-2xl font-bold ml-2">Jobist</span>
              </a>
            </div>
            <div class="md:ml-auto">
              <div class="flex space-x-2">
                <a
                  href="/"
                  class="text-white <?= urlIs('/') ? 'bg-black' : '' ?>  hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Home</a
                >
                <a
                  href="/jobs"
                  class="text-white <?= urlIs('/jobs') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Jobs</a
                >
                <?php if($_SESSION['user'] ?? false) : ?>
                <a
                  href="/add-job"
                  class="text-white <?= urlIs('/add-job') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Add Job</a
                >
                <a
                  href="/listings"
                  class="text-white <?= urlIs('/listings') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Your listings</a
                >
                <a
                  href="/logout"
                  class="text-white <?= urlIs('/logout') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Logout</a
                >
                <?php else: ?>
                <a
                  href="/login"
                  class="text-white <?= urlIs('/login') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Login</a
                >
                <a
                  href="/signup"
                  class="text-white <?= urlIs('/signup') ? 'bg-black' : '' ?> hover:bg-gray-900 hover:text-white rounded-md px-3 py-2"
                  >Signup</a
                >
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
</nav>