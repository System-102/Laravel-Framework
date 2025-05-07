<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit Footer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* Footer Styling */
        .footer {
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 30px 0;
            text-align: center;
            width: 100%;
            position: relative;
            bottom: 0;
        }


        .footer a {
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #facc15;
        }

        .footer-icons a {
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer-icons a:hover {
            color: #facc15;
        }

        /* Responsive Grid */
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            text-align: left;
        }

        /* Footer */
        .footer-links {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            text-align: center;
        }

        .footer-links div {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            margin-top: 5px;
            font-size: 14px;
        }

        .footer-links a:hover {
            color: #facc15;
        }
        

        @media (max-width: 768px) {
            .footer-grid {
                text-align: center;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <footer class="footer">
        <div class="container mx-auto px-10">
            <div class="footer-grid">

                <div>
                    <h2 class="text-lg font-bold mb-2">Quick Links</h2>
                    <a href="/about" class="block">About Us</a>
                    <a href="/workouts" class="block">Workouts</a>
                    <a href="/exercise" class="block">Exercises</a>
                    <a href="/profile" class="block">Profile</a>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2">Extra Links</h2>
                    <a href="/login" class="block">Login</a>
                    <a href="/register" class="block">Register</a>
                    <a href="/membership" class="block">Membership</a>
                    <a href="/faq" class="block">FAQ</a>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2">Contact Info</h2>
                    <p><i class="fas fa-phone-alt"></i> +91 9010655789</p>
                    <p><i class="fas fa-envelope"></i> contact@gymfit.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Surat, India - 394210</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2">Follow Us</h2>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

            </div>

            <div class="mt-6 text-gray-400">
                &copy; 2025 GymFit. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
