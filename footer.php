<?php
// footer.php - Reusable stylish footer
?>

<!-- Stylish Footer Start -->
<footer style="background: #1e1e2f; color: #ffffff; padding: 40px 0; font-family: 'Segoe UI', sans-serif;">
    <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">
        
        <!-- Left Section -->
        <div style="flex: 1 1 300px; margin-bottom: 20px;">
            <h2 style="margin: 0 0 10px; font-size: 24px;">MyWebsite</h2>
            <p style="margin: 0; font-size: 14px; color: #bbb;">Creating modern web experiences.</p>
        </div>

        <!-- Center Section -->
        <div style="flex: 1 1 300px; margin-bottom: 20px;">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 15px;">
                <li><a href="#" style="color: #bbb; text-decoration: none;">Home</a></li>
                <li><a href="#" style="color: #bbb; text-decoration: none;">About</a></li>
                <li><a href="#" style="color: #bbb; text-decoration: none;">Contact</a></li>
                <li><a href="#" style="color: #bbb; text-decoration: none;">Privacy</a></li>
            </ul>
        </div>

        <!-- Right Section (Socials) -->
        <div style="flex: 1 1 300px; text-align: right;">
            <a href="#" style="margin-left: 10px; color: #bbb; text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" style="margin-left: 10px; color: #bbb; text-decoration: none;"><i class="fab fa-twitter"></i></a>
            <a href="#" style="margin-left: 10px; color: #bbb; text-decoration: none;"><i class="fab fa-linkedin-in"></i></a>
       
            <a href="#" style="margin-left: 10px; color: #bbb; text-decoration: none;"><i class="fab fa-instagram"></i></a>
      
            <a href="#" style="margin-left: 10px; color: #bbb; text-decoration: none;"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div style="text-align: center; margin-top: 30px; font-size: 13px; color: #777;">
        &copy; <?php echo date("Y"); ?> MyWebsite. All rights reserved.
    </div>
</footer>
<!-- Stylish Footer End -->

<!-- Font Awesome for Icons (CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
