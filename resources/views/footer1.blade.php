<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medivik Redesigned Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0a6644;
            --accent-yellow: #ffb400;
            --text-white: #ffffff;
            --light-green: #0d8358;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .medivik-footer {
            background-color: var(--primary-green);
            color: var(--text-white);
            padding: 60px 20px 20px;
        }

        .footer-container {
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }

        /* Section 1: Brand & Description */
        .footer-brand {
            flex: 1;
            min-width: 300px;
        }

        .footer-logo {
            width: 150px;
            margin-bottom: 20px;
        }

        .footer-brand p {
            line-height: 1.6;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
        }

        .read-more {
            color: var(--accent-yellow);
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        /* Section 2: Quick Links */
        .footer-links {
            flex: 0.5;
            min-width: 150px;
        }

        .footer-links h3 {
            font-size: 18px;
            margin-bottom: 25px;
            position: relative;
            text-transform: uppercase;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 40px;
            height: 2px;
            background: var(--accent-yellow);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--text-white);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--accent-yellow);
        }

        /* Section 3: App Highlight */
        .footer-app-highlight {
            flex: 0.5;
            background: var(--light-green);
            padding: 30px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .app-content h2 {
            color: var(--accent-yellow);
            margin: 0 0 10px 0;
            font-size: 24px;
        }

        .app-content p {
            font-size: 11px;
            margin-bottom: 20px;
        }192.168.29.100192.168.29.100

        .store-btns {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .store-btns img {
            height: 40px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .store-btns img:hover {
            transform: scale(1.05);
        }

        .app-mockup img {
            width: 250px;
            filter: drop-shadow(0 15px 15px rgba(0,0,0,0.3));
        }

        /* Footer Bottom */
        .footer-bottom {
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .copyright {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            background: var(--accent-yellow);
            color: var(--primary-green);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background: white;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
            }
            .footer-app-highlight {
                flex-direction: column;
                text-align: center;
            }
            .store-btns {
                flex-direction: row;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <footer class="medivik-footer">
        <div class="footer-container">
            <div class="footer-brand">
                <img src="images/logo.png" alt="Medivik Logo" class="footer-logo">
                <p>Medivik.com is a pharmaceutical e-tail company with the main agenda of providing genuine medicine, surgical, medical devices and OTC products to the society. Medivik.com brings to you the comfort of ordering medicines and Over-the-Counter (OTC)</p>
                <a href="#" class="read-more">Read More »</a>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-triangle"></i>About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">IP Policy</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Contact With Us</h3>
                <ul>
                    <li><a href="#">Call Us : +91 7300112474</a></li>
                    <li><a href="#">Email-Id : info@medivik.com</a></li>
                    <li><a href="#">Vendor : Singhal Traders</a></li>
                </ul>
            </div>

            <div class="footer-app-highlight">
                <div class="app-content">
                    <h2>Get Our App</h2>
                    <div class="store-btns">
                        <img src="images/image.png" alt="Google Play">
                    </div>
                    <p>Simplifying health,<br>one app at a time.</p>
                    
                </div>
                <div class="app-mockup">
                    <img src="images/appFooter.png" alt="App Preview">
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-solid fa-phone"></i></a>
            </div>
            <div class="copyright">
                © 2026 Medivik. All rights reserved. <br>
                <small>In compliance with Drug and Cosmetic Act and Rules, we don't process requests for
Schedule X and other habit forming drugs.</small>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>