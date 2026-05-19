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
        <?php $isLanding = $isLanding ?? false; ?>
        <?php if (!$isLanding): ?>
            <?php include __DIR__ . '/components/sidebar.php'; ?>
        <?php endif; ?>

        <!-- Main -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <?php if (!$isLanding): ?>
                <?php include __DIR__ . '/components/header.php'; ?>
            <?php endif; ?>

            <!-- Content -->
            <main class="p-6 overflow-y-auto">
                <?= $content ?? '' ?>
            </main>
        </div>

    </div>

</body>

</html>