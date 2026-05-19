<!-- app/Views/layouts/components/flash.php -->

<?php if(isset($_SESSION['success'])): ?>

<div class="bg-green-500 text-white p-3 rounded mb-4">
    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
</div>

<?php endif; ?>