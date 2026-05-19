<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/output.css'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tender Management System</title>
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <?php $isLanding = $isLanding ?? false; ?>
    <!-- HEADER -->
    <?php if (!$isLanding): ?>
        <?php include __DIR__ . '/components/navbar.php'; ?>
    <?php endif; ?>

    <!-- MAIN CONTENT -->
    <main class="flex-grow container mx-auto p-6">
        <?= $content ?? '' ?>
    </main>
    <!-- FOOTER -->
    <?php if (!$isLanding): ?>
        <?php include __DIR__ . '/components/footer.php'; ?>
    <?php endif; ?>


</body>

</html>