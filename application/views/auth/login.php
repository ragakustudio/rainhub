<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RainHUB</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="bg-white p-8 w-full max-w-sm shadow-lg rounded-lg">
        <div class="flex justify-center mb-6">
            <img 
                src="<?= base_url('assets/img/logo/main-logo.webp') ?>" 
                alt="RainHub Logo" 
                class="h-32 drop-shadow-md"
            >
        </div>


        <?php if ($this->session->flashdata('error')): ?>
            <p class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= $this->session->flashdata('error') ?>
            </p>
        <?php endif; ?>

        <form action="<?= base_url('auth/login') ?>" method="POST" class="space-y-4">
            <div>
                <label class="block mb-1 text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full border rounded p-2" placeholder="info@gmail.com">
            </div>

            <div>
                <label class="block mb-1 text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full border rounded p-2">
            </div>

            <button 
                type="submit"
                class="
                    w-full 
                    bg-primary-500 
                    hover:bg-primary-600 
                    text-white 
                    py-3 rounded-lg 
                    font-semibold 
                    transition">
                Login
            </button>

        </form>
    </div>

</body>
</html>
