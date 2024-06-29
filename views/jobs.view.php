<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php') ?>
  <section class="bg-blue-50 px-4 py-10">
    <div class="container-xl lg:container m-auto">
        <h2 class="text-3xl font-bold text-indigo-500 mb-6 text-center">
          Browse Jobs
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <?php foreach ($jobs as $job): ?>
              <div class="bg-white rounded-xl shadow-md relative">
                    <div class="p-4">
                      <div class="mb-6">
                        <div class="text-gray-600 my-2"><?= htmlSpecialchars($job['type']) ?></div>
                         <h3 class="text-xl font-bold"><?= htmlSpecialchars($job['title']) ?></h3>
                      </div>

                      <div class="mb-5">
                        <?= htmlSpecialchars($job['description']) ?>
                      </div>

                      <h3 class="text-indigo-500 mb-2"><?= htmlSpecialchars($job['salary']) ?></h3>

                      <div class="border border-gray-100 mb-5"></div>

                      <div class="flex flex-col lg:flex-row justify-between mb-4">
                        <div class="text-orange-700 mb-3">
                          <i class="fa-solid fa-location-dot text-lg"></i>
                          <?=  htmlSpecialChars($job['location']) ?>
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
    
      

<div class="flex justify-center mt-3">
  <?php if ($current_page > 1):  ?>
  <a href="/jobs?page=<?= $current_page - 1 ?>" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-indigo-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-indigo-700">
    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
    </svg>
    Previous
  </a>
  <?php endif; ?>
  <?php if ($current_page < $total_pages):  ?>
  <a href="/jobs?page=<?= $current_page + 1 ?>" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-indigo-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-indigo-700">
    Next
    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
  </a>
  <?php endif; ?>
</div>
</section>
    
<?php require 'partials/footer.php' ?>