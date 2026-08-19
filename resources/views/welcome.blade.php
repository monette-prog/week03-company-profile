<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a0a0a; /* Black background */
            color: #ffffff; /* White text */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: #1a1a1a; /* Dark gray/black card */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(255, 182, 193, 0.2);
            border: 1px solid #ffb6c1; /* Light pink border */
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ffb6c1, #ff69b4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.5rem;
            color: #ffb6c1;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px 30px;
            background: #0d0d0d;
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid #ffb6c1;
            text-align: left;
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-item .label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ffb6c1;
            font-weight: 600;
        }

        .info-item .value {
            font-size: 1.1rem;
            font-weight: 500;
            color: #ffffff;
            margin-top: 2px;
        }

        .footer-text {
            font-size: 0.9rem;
            color: #888;
            border-top: 1px solid #2a2a2a;
            padding-top: 20px;
            margin-top: 10px;
        }

        .footer-text span {
            color: #ffb6c1;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 2.2rem;
            }
            .info-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello Laravel!</h1>
        <p class="subtitle">Welcome to Client-Server Technologies</p>

        <div class="info-grid">
            <div class="info-item">
                <span class="label">Developed by</span>
                <span class="value">Sarmiento, Kyle Monette M.</span>
            </div>
            <div class="info-item">
                <span class="label">Student Number</span>
                <span class="value">0124-1123</span>
            </div>
            <div class="info-item">
                <span class="label">Course</span>
                <span class="value">BSIT</span>
            </div>
            <div class="info-item">
                <span class="label">Section</span>
                <span class="value">BSIT - 3D</span>
            </div>
            <div class="info-item">
                <span class="label">Subject</span>
                <span class="value">ITST 302 – Client-Server Technologies</span>
            </div>
            <div class="info-item">
                <span class="label">Date</span>
                <span class="value">August 5, 2026</span>
            </div>
        </div>

        <div class="footer-text">
            &copy; 2026 <span>Kyle Monette Sarmiento</span> — All Rights Reserved
        </div>
    </div>
</body>
</html>