<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php') ?>

<section>
      <div class="container m-auto py-6 px-6">
        <a
          href="/jobs"
          class="text-indigo-500 hover:text-indigo-600 flex items-center"
        >
          <i class="fas fa-arrow-left mr-2"></i> Back to Job Listings
        </a>
      </div>
    </section>

<section class="bg-indigo-50">
    <div class="container m-auto py-10 px-6">
        <div class="md:grid grid-cols-2 md:grid-cols-70/30 block w-full gap-6">
          <main>
            <div
              class="bg-white p-6 rounded-lg shadow-md text-center md:text-left"
            >
              <div class="text-gray-500 mb-4"><?= htmlspecialchars($job['type']) ?></div>
              <h1 class="text-3xl font-bold mb-4">
                <?= htmlspecialchars($job['title']) ?>
              </h1>
              <div
                class="text-gray-500 mb-4 flex align-middle justify-center md:justify-start"
              >
                <i
                  class="fa-solid fa-location-dot text-lg text-orange-700 mr-2"
                ></i>
                <p class="text-orange-700"><?= htmlspecialchars($job['location']) ?></p>
              </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
              <h3 class="text-indigo-800 text-lg font-bold mb-6">
                Job Description
              </h3>

              <p class="mb-4"><?= htmlspecialchars($job['description']) ?></p>

              <h3 class="text-indigo-800 text-lg font-bold mb-2">Salary</h3>

              <p class="mb-4"><?= htmlspecialchars($job['salary']) ?></p>
            </div>
          </main>

          <!-- Sidebar -->
          <aside>
            <!-- Company Info -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-bold mb-6">Company Info</h3>

              <h2 class="text-2xl"><?= htmlspecialchars($job['company_name']) ?></h2>

              <p class="my-2"><?= htmlspecialchars($job['company_description']) ?></p>

              <hr class="my-4" />

              <h3 class="text-xl">Contact Email:</h3>

              <p class="my-2 bg-indigo-100 p-2 font-bold">
                <?= htmlspecialchars($job['contact_email']) ?>
              </p>
              <h3 class="text-xl">Applying link:</h3>
              <?php if(isset($job['apply_link'])) : ?>
              <p class="my-2 bg-indigo-100 p-2 font-bold">
                <a href="<?= htmlspecialchars($job['apply_link'])  ?>" target="_blank">click to apply</a>
              </p>
              <?php endif; ?>

              <h3 class="text-xl">Contact Phone:</h3>

              <p class="my-2 bg-indigo-100 p-2 font-bold"><?= htmlspecialchars($job['contact_phone']) ?? ''?></p>
            </div>

            <!-- Manage -->
            <?php if(isset($_SESSION['user'])) : ?>
              <?php if ($job['user_id'] === $_SESSION['user']['id']) : ?>
            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
              <h3 class="text-xl font-bold mb-6">Manage Job</h3>
              <a
                href="/edit?id=<?= $job['id'] ?>"
                class="bg-indigo-500 hover:bg-indigo-600 text-white text-center font-bold py-2 px-4 rounded-full w-full focus:outline-none focus:shadow-outline mt-4 block"
                >Edit Job</a
              >
              <form action="/delete" method="POST" onsubmit="return confirmDeletion()">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $job['id'] ?>" >
              <button
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full w-full focus:outline-none focus:shadow-outline mt-4 block"
              >
                Delete Job
              </button>
              </form>
              <script>
                function confirmDeletion(){
                  return confirm("Are you sure you want to delete this job?");
                }
              </script>
            </div>
              <?php endif; ?>
            <?php endif; ?>
          </aside>
        </div>
    </div>
</section>

<?php require 'partials/footer.php' ?>