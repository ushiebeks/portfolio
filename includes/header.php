
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innocent Ushie - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="font-sans">
    <!-- Header/Navigation -->
    <header class="fixed w-full bg-white shadow-sm z-10">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-gray-800">FuseCode</div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link active">HOME</a>
                    <a href="#about" class="nav-link">ABOUT ME</a>
                    <a href="#portfolio" class="nav-link">PORTFOLIO</a>
                    <a href="#services" class="nav-link">SERVICES</a>
                    <a href="#blog" class="nav-link">BLOG</a>
                    <a href="#contact" class="nav-link">CONTACT</a>
                </nav>
                <button class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
    <div class="mobile-menu hidden fixed inset-0 bg-white z-20 flex items-center justify-center">
        <button class="absolute top-4 right-4 focus:outline-none">
            <i class="fas fa-times text-2xl"></i>
        </button>
        <nav class="flex flex-col space-y-6 text-center">
            <a href="#home" class="nav-link active text-xl">HOME</a>
            <a href="#about" class="nav-link text-xl">ABOUT ME</a>
            <a href="#portfolio" class="nav-link text-xl">PORTFOLIO</a>
            <a href="#services" class="nav-link text-xl">SERVICES</a>
            <a href="#blog" class="nav-link text-xl">BLOG</a>
            <a href="#contact" class="nav-link text-xl">CONTACT</a>
        </nav>
    </div>
</body>
    </header>
</html>
