<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>About Us | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #121212;
            color: white;
        }

        .about-section {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-in-out;
        }

        .about-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .glow-orange:hover {
            box-shadow: 0 0 20px rgba(255, 123, 0, 0.8);
        }

        .glow-blue:hover {
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.8);
        }

        .glow-green:hover {
            box-shadow: 0 0 20px rgba(0, 159, 92, 0.8);
        }

        .glow-yellow:hover {
            box-shadow: 0 0 20px rgba(255, 221, 0, 0.8);
        }
    </style>
</head>
<body class="font-sans">

    
    @include('layouts.navbar')

    
    <section class="relative bg-[url('{{ asset('images/gym-bg.webp') }}')] bg-cover bg-center h-[500px] mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center text-center px-6">
            <div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-white">About <span class="text-orange-400">GymFit</span></h1>
                <p class="text-lg text-gray-300 mt-4 max-w-2xl mx-auto">We're more than just a gym — we're a fitness family. Let’s transform your goals into achievements together!</p>
            </div>
        </div>
    </section>

    
    <section class="py-20 px-6 md:px-16 space-y-24">

        
        <div class="about-section flex flex-col md:flex-row items-center gap-12">
            <img src="{{ asset('images/nutrition.webp') }}" alt="Our Mission" class="rounded-xl glow-orange w-full md:w-[550px] h-[350px] object-cover transition-transform duration-300 hover:scale-105">
            <div class="text-center md:text-left max-w-xl">
                <h2 class="text-3xl font-bold text-orange-400">🚀 Our Mission</h2>
                <p class="mt-4 text-gray-300">Empowering individuals to achieve their fitness goals through expert guidance and a supportive community.</p>
                <a href="{{ route('about.mission') }}" class="inline-block mt-6 bg-orange-500 hover:bg-orange-600 text-white py-3 px-6 rounded-lg font-bold transition">Learn More</a>
            </div>
        </div>

        
        <div class="about-section flex flex-col md:flex-row-reverse items-center gap-12">
            <img src="{{ asset('images/gym-bg.webp') }}" alt="Our Trainers" class="rounded-xl glow-blue w-full md:w-[550px] h-[350px] object-cover transition-transform duration-300 hover:scale-105">
            <div class="text-center md:text-left max-w-xl">
                <h2 class="text-3xl font-bold text-blue-400">🏋️‍♂️ Expert Trainers</h2>
                <p class="mt-4 text-gray-300">Meet our certified trainers who will guide you every step of your fitness journey with tailored plans.</p>
                <a href="{{ route('about.trainers') }}" class="inline-block mt-6 bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg font-bold transition">Meet Our Team</a>
            </div>
        </div>

        
        <div class="about-section flex flex-col md:flex-row items-center gap-12">
            <img src="{{ asset('images/3.webp') }}" alt="Our Facilities" class="rounded-xl glow-green w-full md:w-[550px] h-[350px] object-cover transition-transform duration-300 hover:scale-105">
            <div class="text-center md:text-left max-w-xl">
                <h2 class="text-3xl font-bold text-green-400">🏢 World-Class Facilities</h2>
                <p class="mt-4 text-gray-300">Train in our state-of-the-art gym with the latest equipment and modern amenities built for success.</p>
                <a href="{{ route('about.facilities') }}" class="inline-block mt-6 bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-lg font-bold transition">Explore Facilities</a>
            </div>
        </div>

        
        <div class="about-section flex flex-col md:flex-row-reverse items-center gap-12">
            <img src="{{ asset('images/3.webp') }}" alt="Community" class="rounded-xl glow-yellow w-full md:w-[550px] h-[350px] object-cover transition-transform duration-300 hover:scale-105">
            <div class="text-center md:text-left max-w-xl">
                <h2 class="text-3xl font-bold text-yellow-400">🤝 Strong Community</h2>
                <p class="mt-4 text-gray-300">Join a supportive fitness community with events, group classes, and challenges to keep you motivated.</p>
                <a href="{{ route('about.community') }}" class="inline-block mt-6 bg-yellow-500 hover:bg-yellow-600 text-white py-3 px-6 rounded-lg font-bold transition">Strong Comunity</a>
            </div>
        </div>
    </section>

    
    <section class="bg-gradient-to-r from-purple-800 via-indigo-800 to-blue-900 py-14 text-center text-white">
        <h3 class="text-2xl md:text-3xl font-bold">"Fitness is not about being better than someone else... it's about being better than you used to be."</h3>
    </section>

    
    @include('layouts.footer')

    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".about-section");

            function revealSections() {
                sections.forEach(section => {
                    const top = section.getBoundingClientRect().top;
                    if (top < window.innerHeight - 100) {
                        section.classList.add("visible");
                    }
                });
            }

            window.addEventListener("scroll", revealSections);
            revealSections();
        });
    </script>

</body>
</html>
