<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>
<section class="bg-indigo-50">
      <div class="container m-auto max-w-2xl py-24">
        <div
          class="bg-white px-6 py-8 mb-4 shadow-md rounded-md border m-4 md:m-0"
        >
          <form action="/edit?id=<?=$job['id'] ?>" method="POST">
          <input type="hidden" name="id" value="<?= $job['id'] ?>">
            <h2 class="text-3xl text-center font-semibold mb-6">Update Job</h2>

            <div class="mb-4">
              <label for="type" class="block text-gray-700 font-bold mb-2"
                >Job Type</label
              >
              <select
                id="type"
                name="type"
                class="border rounded w-full py-2 px-3"
                required
              >
              <option>Job type</option>
              <option value="Full-Time" <?= $job['type'] === 'Full-Time' ? 'selected' : '' ?>>Full-Time</option>
              <option value="Part-Time" <?= $job['type'] === 'Part-Time' ? 'selected' : '' ?>>Part-Time</option>
              <option value="Remote" <?= $job['type'] === 'Remote' ? 'selected' : '' ?>>Remote</option>
              <option value="Internship" <?= $job['type'] === 'Internship' ? 'selected' : '' ?>>Internship</option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2"
                >Job Listing Name</label
              >
              <input
                type="text"
                id="title"
                name="title"
                class="border rounded w-full py-2 px-3 mb-2"
                placeholder="Job title"
                required
                value="<?= $job['title'] ?>"
              />
            </div>
            <div class="mb-4">
              <label
                for="description"
                class="block text-gray-700 font-bold mb-2"
                >Description</label
              >
              <textarea
                id="description"
                name="description"
                class="border rounded w-full py-2 px-3"
                rows="4"
                placeholder="Add any job duties, expectations, requirements, etc"
              ><?= $job['description'] ?></textarea>
            </div>

            <div class="mb-4">
              <label for="salary" class="block text-gray-700 font-bold mb-2"
                >Salary</label
              >
              <input
                type="text"
                id="salary"
                name="salary"
                class="border rounded w-full py-2 px-3 mb-2"
                placeholder="Salary"
                required
                value="<?= $job['salary'] ?>"
              />
            </div>

            <div class='mb-4'>
              <label for="location" class='block text-gray-700 font-bold mb-2'>
                Location
              </label>
              <input
                type='text'
                id='location'
                name='location'
                class='border rounded w-full py-2 px-3 mb-2'
                placeholder='Company Location'
                required   
                value="<?= $job['location'] ?>"        
              />
            </div>

            <h3 class="text-2xl mb-5">Company Info</h3>

            <div class="mb-4">
              <label for="company" class="block text-gray-700 font-bold mb-2"
                >Company Name</label
              >
              <input
                type="text"
                id="company"
                name="company"
                class="border rounded w-full py-2 px-3"
                placeholder="Company Name"
                value="<?= $job['company_name'] ?? '' ?>"
              />
            </div>

            <div class="mb-4">
              <label
                for="company_description"
                class="block text-gray-700 font-bold mb-2"
                >Company Description</label
              >
              <textarea
                id="company_description"
                name="company_description"
                class="border rounded w-full py-2 px-3"
                rows="4"
                placeholder="What does your company do?"
              ><?= $job['company_description'] ?? '' ?></textarea>
            </div>

            <div class="mb-4">
              <label
                for="contact_email"
                class="block text-gray-700 font-bold mb-2"
                >Contact Email</label
              >
              <input
                type="email"
                id="contact_email"
                name="contact_email"
                class="border rounded w-full py-2 px-3"
                placeholder="Email address for applicants"
                required
                value="<?= $job['contact_email'] ?>"
              />
            </div>
            <div class="mb-4">
              <label
                for="apply_link"
                class="block text-gray-700 font-bold mb-2"
                >Applying link</label
              >
              <input
                type="text"
                id="apply_link"
                name="apply_link"
                class="border rounded w-full py-2 px-3"
                placeholder="Link for applying"
                value="<?= $job['apply_link'] ?>"
              />
            </div>
            <div class="mb-4">
              <label
                for="contact_phone"
                class="block text-gray-700 font-bold mb-2"
                >Contact Phone</label
              >
              <input
                type="tel"
                id="contact_phone"
                name="contact_phone"
                class="border rounded w-full py-2 px-3"
                placeholder="Optional phone for applicants"
                value="<?= $job['contact_phone'] ?>"
              />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="/job?id=<?= $job['id'] ?>"
                class="inline-flex justify-center rounded-full border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-center sm:text-left">
                Cancel
            </a>
            <button
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full w-full sm:w-auto focus:outline-none focus:shadow-outline"
                type="submit">
                Update
            </button>
            </div>

          </form>
        </div>
      </div>
    </section>
<?php require ('partials/footer.php') ?>