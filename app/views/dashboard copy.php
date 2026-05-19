<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tender Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

<div class="flex h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-white border-r border-gray-200 p-5">
    <h1 class="text-2xl font-bold text-gray-700 mb-8">Tender Admin</h1>

    <nav class="space-y-2">
      <a href="#" class="block p-2 rounded bg-gray-200 font-medium">Dashboard</a>
      <a href="#" class="block p-2 rounded hover:bg-gray-100">Tenders</a>
      <a href="#" class="block p-2 rounded hover:bg-gray-100">Users</a>
      <a href="#" class="block p-2 rounded hover:bg-gray-100">Reports</a>
      <a href="#" class="block p-2 rounded hover:bg-gray-100">Settings</a>
    </nav>
  </aside>

  <!-- Main -->
  <div class="flex-1 flex flex-col">

    <!-- Topbar -->
    <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
      <h2 class="text-xl font-semibold text-gray-700">Dashboard</h2>

      <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900">
        + Add Tender
      </button>
    </header>

    <!-- Content -->
    <main class="p-6 overflow-y-auto">

      <!-- Stats -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        <div class="bg-white border border-gray-200 p-4 rounded-lg">
          <h3 class="text-gray-500">Total Tenders</h3>
          <p class="text-2xl font-bold">120</p>
        </div>

        <div class="bg-white border border-gray-200 p-4 rounded-lg">
          <h3 class="text-gray-500">Active</h3>
          <p class="text-2xl font-bold">80</p>
        </div>

        <div class="bg-white border border-gray-200 p-4 rounded-lg">
          <h3 class="text-gray-500">Closed</h3>
          <p class="text-2xl font-bold">40</p>
        </div>

      </div>

      <!-- Table -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-x-auto">

        <table class="w-full text-left">

          <thead class="bg-gray-100 text-gray-600">
            <tr>
              <th class="p-3">ID</th>
              <th class="p-3">Tender Name</th>
              <th class="p-3">Department</th>
              <th class="p-3">Deadline</th>
              <th class="p-3">Status</th>
              <th class="p-3">Actions</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">

            <tr>
              <td class="p-3">1</td>
              <td class="p-3">Road Construction</td>
              <td class="p-3">LGED</td>
              <td class="p-3">2026-06-10</td>
              <td class="p-3 text-green-600 font-medium">Active</td>
              <td class="p-3 space-x-2">
                <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Edit</button>
                <button class="bg-gray-800 text-white px-3 py-1 rounded hover:bg-black">Delete</button>
              </td>
            </tr>

            <tr>
              <td class="p-3">2</td>
              <td class="p-3">Bridge Repair</td>
              <td class="p-3">PWD</td>
              <td class="p-3">2026-06-15</td>
              <td class="p-3 text-red-500 font-medium">Closed</td>
              <td class="p-3 space-x-2">
                <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Edit</button>
                <button class="bg-gray-800 text-white px-3 py-1 rounded hover:bg-black">Delete</button>
              </td>
            </tr>

          </tbody>

        </table>
      </div>

    </main>
  </div>

</div>

</body>
</html>