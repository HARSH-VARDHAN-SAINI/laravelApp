<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Minimalist Pharmacy Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --forest-green: #1B4332;
            --mint-green: #D8F3DC;
            --soft-yellow: #FFD60A;
            --text-dark: #2D3436;
            --white: #FFFFFF;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
        }

        /* Top Notification Bar */
        .top-bar {
            background-color: var(--mint-green);
            color: var(--forest-green);
            text-align: center;
            padding: 8px 0;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Main Header Container */
        .header-container {
            background: var(--white);
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        }

        .header-main {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--forest-green);
            font-weight: 700;
            font-size: 1.4rem;
        }

        /* Search Bar Section */
        .search-wrapper {
            flex: 0 1 450px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 50px;
            border: 1px solid #E0E0E0;
            background: #F8F9FA;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .search-input:focus {
            background: var(--white);
            border-color: var(--soft-yellow);
            box-shadow: 0 0 12px rgba(255, 214, 10, 0.2);
        }

        /* Navigation Menu */
        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--forest-green);
        }

        /* Action Icons */
        .header-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-dark);
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.75rem;
            gap: 4px;
            transition: color 0.2s;
        }

        .icon-btn:hover {
            color: var(--forest-green);
        }

        .cart-count {
            background: var(--soft-yellow);
            color: var(--text-dark);
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 10px;
            font-size: 0.7rem;
            position: absolute;
            top: -5px;
            right: -8px;
        }

        .cart-wrapper { position: relative; }
    </style>
</head>
<body>

    <div class="top-bar">
        Free Shipping on Orders Over $50 | Express Health Delivery ⚡
    </div>

    <header class="header-container">
        <div class="header-main">
            <a href="#" class="logo">
                <i data-lucide="shield-plus" style="color: #2D6A4F;"></i>
                <span>MedStore</span>
            </a>

            <div class="search-wrapper">
                <input type="text" class="search-input" placeholder="Search medicines, wellness, brands...">
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="#">Medicines</a></li>
                    <li><a href="#">Health Tools</a></li>
                    <li><a href="#">Wellness</a></li>
                    <li><a href="#">Offers</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <button class="icon-btn">
                    <i data-lucide="user"></i>
                    <span>Login</span>
                </button>
                <div class="cart-wrapper">
                    <button class="icon-btn">
                        <i data-lucide="shopping-cart"></i>
                        <span>Cart</span>
                    </button>
                    <span class="cart-count">3</span>
                </div>
            </div>
        </div>
    </header>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>