<nav class="bg-gray-800 text-white p-4">

    <div class="flex justify-between items-center">

        <a href="/" class="font-bold text-xl">Tender Management System</a>

        <div class="flex space-x-6">

            <!-- Dropdown 1 -->
            <div class="relative dropdown">

                <button class="dropdown-btn">
                    User ▼
                </button>

                <div class="dropdown-menu hidden absolute bg-white text-black mt-2 w-40 shadow rounded">
                    <a href="<?= url('/user') ?>" class="block px-4 py-2 hover:bg-gray-100">User</a>
                </div>

            </div>

            <!-- Dropdown 2 -->
            <div class="relative dropdown">

                <button class="dropdown-btn">
                    Reports ▼
                </button>

                <div class="dropdown-menu hidden absolute bg-white text-black mt-2 w-40 shadow rounded">
                    <a href="/report/daily" class="block px-4 py-2 hover:bg-gray-100">Daily</a>
                    <a href="/report/monthly" class="block px-4 py-2 hover:bg-gray-100">Monthly</a>
                </div>

            </div>

        </div>
    </div>
</nav>
<script>
document.querySelectorAll('.dropdown').forEach(dropdown => {

    const btn = dropdown.querySelector('.dropdown-btn');
    const menu = dropdown.querySelector('.dropdown-menu');

    btn.addEventListener('click', function (e) {
        e.stopPropagation();

        // close other dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(m => {
            if (m !== menu) m.classList.add('hidden');
        });

        menu.classList.toggle('hidden');
    });
});

// click outside close all
document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });
});
</script>