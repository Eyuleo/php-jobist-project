<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php') ?>
<section class="bg-indigo-700 py-20 mb-4">
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center"
      >
        <div class="text-center">
          <h1
            class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl"
          >
            Jobist: job search made easy
          </h1>
          <p class="my-4 text-xl text-white">
            Find a job that fits your skills and needs
          </p>
        </div>
      </div>
</section>

<!-- call to action banner -->
<section class="py-4">
      <div class="container-xl lg:container m-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-lg">
          <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold">For Job Seekers</h2>
            <p class="mt-2 mb-4">
              Browse our jobs and start your career today
            </p>
            <a
              href="/jobs"
              class="inline-block bg-black text-white rounded-lg px-4 py-2 hover:bg-gray-700"
            >
              Browse Jobs
            </a>
          </div>
          <div class="bg-indigo-100 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold">For Employers</h2>
            <p class="mt-2 mb-4">
              List your job to find the perfect developer for the role
            </p>
            <a
              href="/add-job"
              class="inline-block bg-indigo-500 text-white rounded-lg px-4 py-2 hover:bg-indigo-600"
            >
              Add Job
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-blue-50 px-4 py-10">
    <div class="container-xl lg:container m-auto">
        <h2 class="text-3xl font-bold text-indigo-500 mb-6 text-center">
          Recent Jobs
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <?php foreach ($jobs as $job): ?>
                <div class="bg-white rounded-xl shadow-md relative">
                      <div class="p-4">
                        <div class="mb-6">
                          <div class="text-gray-600 my-2"><?= $job['type'] ?></div>
                           <h3 class="text-xl font-bold"><?= $job['title'] ?></h3>
                        </div>

                        <div class="mb-5">
                          <?= $job['description'] ?>
                        </div>

                        <h3 class="text-indigo-500 mb-2"><?= $job['salary'] ?></h3>

                        <div class="border border-gray-100 mb-5"></div>

                        <div class="flex flex-col lg:flex-row justify-between mb-4">
                          <div class="text-orange-700 mb-3">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                            <?= $job['location'] ?>
                          </div>
                          <a
                            href="/job?id=<?= $job['id'] ?>"
                            class="h-[36px] bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg text-center text-sm"
                          >
                            Read More
                          </a>
                        </div>
                      </div>
                  </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require 'partials/footer.php' ?>