<?php
include('./includes/header.php');
?>
<!-- Hero Section -->
<section id="home" class="hero-bg min-h-screen flex items-center pt-20">
    <div class="container mx-auto px-6 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h2 class="text-4xl md:text-6xl text-gray-800 mb-4">Hello, I'm</h2>
                <h1 class="text-5xl md:text-7xl font-bold text-blue-600 mb-6">Innocent Ushie</h1>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-600 mb-8">Software Developer & Web Designer </h3>
                <a href="#contact"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 inline-block mr-4">
                    Hire Me
                </a>
                <a href="#"
                    class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 inline-block">
                    Download Resume
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="images/inno.png" alt="Innocent Ushie"
                    class="rounded-full w-64 h-64 md:w-80 md:h-80 object-cover shadow-xl">
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">About Me</h2>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                <img src="images/inno.png" alt="Innocent Ushie"
                    class="rounded-full w-48 h-48 md:w-64 md:h-64 object-cover shadow-lg">
            </div>
            <div class="md:w-2/3 md:pl-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Who am I?</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    I'm Innocent Ushie, a passionate software developer and web designer with over 7 months of
                    experience
                    creating beautiful, functional, and user-friendly websites. I specialize in front-end
                    development with a focus on responsive design and performance optimization.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Name:</h4>
                        <p class="text-gray-600">Innocent Ushie</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Email:</h4>
                        <p class="text-gray-600">bekinushieyeinnocentushie@outlook.com</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Phone:</h4>
                        <p class="text-gray-600">+2348028248874</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Location:</h4>
                        <p class="text-gray-600">Calabar, Nigeria</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4">
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">HTML5</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">CSS3</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">JavaScript</span>
                    <!-- <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">React</span> -->
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">Tailwind CSS</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">PHP</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-gray-800">Laravel</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">My Portfolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="E-commerce Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">E-commerce Website</h3>
                    <p class="text-gray-600 mb-4">A fully responsive online store with shopping cart functionality.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">React</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Node.js</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">MongoDB</span>
                    </div>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">View Project →</a>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80"
                    alt="Corporate Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Corporate Website</h3>
                    <p class="text-gray-600 mb-4">A modern website for a financial services company.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">HTML5</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">CSS3</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                    </div>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">View Project →</a>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1136&q=80"
                    alt="Portfolio Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Portfolio Website</h3>
                    <p class="text-gray-600 mb-4">A personal portfolio website for a photographer.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">WordPress</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">PHP</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">MySQL</span>
                    </div>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">View Project →</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#"
                class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 inline-block">
                View All Projects
            </a>
        </div>
    </div>
</section>
<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">My Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Web Development</h3>
                <p class="text-gray-600">
                    Custom website development tailored to your specific needs, from simple static sites to complex
                    web applications.
                </p>
            </div>
            <!-- Service 2 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Web Design</h3>
                <p class="text-gray-600">
                    Beautiful, user-friendly designs that reflect your brand and engage your audience.
                </p>
            </div>
            <!-- Service 3 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Responsive Design</h3>
                <p class="text-gray-600">
                    Websites that look and function perfectly on all devices, from desktop to mobile.
                </p>
            </div>
            <!-- Service 4 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">SEO Optimization</h3>
                <p class="text-gray-600">
                    Improve your website's visibility and ranking on search engines to attract more visitors.
                </p>
            </div>
            <!-- Service 5 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-cart-plus"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">E-commerce Solutions</h3>
                <p class="text-gray-600">
                    Complete online store solutions with secure payment processing and inventory management.
                </p>
            </div>
            <!-- Service 6 -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-md transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Maintenance & Support</h3>
                <p class="text-gray-600">
                    Ongoing maintenance and support to keep your website running smoothly and securely.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->
<section id="blog" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="Web Design Trends" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <span>June 15, 2023</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Top Web Design Trends for 2023</h3>
                    <p class="text-gray-600 mb-4">
                        Discover the latest web design trends that will dominate in 2023 and how to implement them
                        in your projects.
                    </p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Read More →</a>
                </div>
            </div>
            <!-- Post 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="JavaScript Frameworks" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <span>May 28, 2023</span>
                        <span class="mx-2">•</span>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Choosing the Right JavaScript Framework
                    </h3>
                    <p class="text-gray-600 mb-4">
                        A comprehensive guide to help you decide between React, Angular, and Vue for your next
                        project.
                    </p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Read More →</a>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80"
                    alt="SEO Tips" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <span>April 10, 2023</span>
                        <span class="mx-2">•</span>
                        <span>4 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">10 Essential SEO Tips for Beginners</h3>
                    <p class="text-gray-600 mb-4">
                        Learn the fundamental SEO techniques that every website owner should implement to improve
                        their search rankings.
                    </p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Read More →</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#"
                class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 inline-block">
                View All Posts
            </a>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Get In Touch</h2>
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 mb-12 md:mb-0 md:pr-8">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h3>
                <p class="text-gray-600 mb-8">
                    Feel free to reach out to me for any questions or opportunities. I'll get back to you as soon as
                    possible.
                </p>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="text-blue-600 text-xl mr-4 mt-1">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Location</h4>
                            <p class="text-gray-600">Calabar, Nigeria</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-blue-600 text-xl mr-4 mt-1">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Email</h4>
                            <p class="text-gray-600">bekinushieyeinnocentushie@outlook.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-blue-600 text-xl mr-4 mt-1">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Phone</h4>
                            <p class="text-gray-600">+123 8028248874</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <h4 class="font-semibold text-gray-800 mb-4">Follow Me</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600 text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 text-xl">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 text-xl">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                        <input type="text" id="name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="John Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                        <input type="email" id="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="john@example.com">
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                        <input type="text" id="subject"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="Project Inquiry">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                        <textarea id="message" rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="Hello Innocent..."></textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 w-full">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <div class="text-2xl font-bold mb-2">INNOCENT USHIE</div>
                <p class="text-gray-400">Software Developer & web Designer</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white text-xl">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white text-xl">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white text-xl">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white text-xl">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2025 Innocent Ushie. All rights reserved.</p>
        </div>
    </div>
</footer>
<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.md\\:hidden');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuCloseBtn = mobileMenu.querySelector('button');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    mobileMenuCloseBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                mobileMenu.classList.add('hidden');

                // Update active link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            }
        });
    });

    // Update active link on scroll
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;

        document.querySelectorAll('section').forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
</script>
</body>

</html>