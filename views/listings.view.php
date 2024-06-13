<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>

<main>
    <section class="bg-blue-50">
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="container-xl lg:container m-auto">
        <h2 class="text-3xl font-bold text-indigo-500 mb-6 text-center">
          Manage listings
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php if ($jobs): ?>
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
                      <div class="flex items-center justify-between mb-2">
                      <h3 class="text-indigo-500 "><?= $job['salary'] ?></h3>
                      <a href="/job?id=<?= $job['id'] ?>" class="h-[36px] bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg text-center text-sm">read more</a>
                      </div>
                      <div class="border border-gray-100 mb-5"></div>

                      <div class="flex items-center mb-4">
                        <a
                          href="/edit?id=<?= $job['id'] ?>"
                          class="h-[36px]  text-indigo-500 hover:text-indigo-600 px-4 py-2 rounded-lg text-center text-lg"
                        >Edit
                        <i class="fa-solid fa-edit"></i>
                        </a>
                        <form action="/delete" method="POST" onsubmit="return confirmDeletion()">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="id" value="<?= $job['id'] ?>" >
                        <button
                          class="h-[36px]  text-red-600 hover:text-red-700 px-4 py-2 rounded-lg text-center text-lg"
                        >Delete
                        <i class="fa-solid fa-trash-can"></i>
                        <button/>
                        </form>
                      </div>
                      <script>
                            function confirmDeletion(){
                              return confirm("Are you sure you want to delete this job?");
                            }
                      </script>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <p>You dont't have any job listings</p>
                    <?php endif; ?>
    </div>
</div>
</section>
</main>
<?php require ('partials/footer.php') ?>