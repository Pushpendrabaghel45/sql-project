<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services - MyWebsite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .content {
            max-width: 1000px;
            margin: 60px auto;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .service-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            flex: 1 1 300px;
        }

        .service-item h2 {
            margin-top: 0;
            color: #1e1e2f;
        }

        .service-item p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Our Services</h1>
        <div class="service-list">
            <div class="service-item">
                <h2>Web Design</h2>
                <p>Responsive, modern designs that work seamlessly on all devices.</p>
            </div>
            <div class="service-item">
                <h2>Development</h2>
                <p>Custom web applications built with performance and scalability in mind.</p>
            </div>
            <div class="service-item">
                <h2>SEO & Marketing</h2>
                <p>Boost your online presence and reach more customers with proven strategies.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
