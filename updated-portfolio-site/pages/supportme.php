<!DOCTYPE html>
<html lang="en">
<?php
$pagetitle = "Support Me";
$portfolio = "";
$about = "";
$faq = "";
$support = "active-page";
?>
<?php include('glu3-project1/includes/meta.php'); ?>

<body>
    <?php include('glu3-project1/includes/header.php'); ?>
    <main>
        <div class="bodytitle"><!--Source: (Support Me) Grace Urmaza--><img src="public/website-content/supportmepagecontent/supportme.png" alt="Support me!"></div>
        <h3>Commissions</h3>
        <p>My commissions are currently open! Commissions are custom artworks that I make just for you. Prices depend on the size, medium, and subject of the piece.</p>
        <p>If you are interested in commissioning me for art please fill out the following form:</p>
        <form method="post" action="/support-me/commission-confirmation" novalidate>
            <div class="form-chunk">
                <label for="first_name">First name:</label>
                <input type="text" id="first_name" name="first_name" />
                <label for="last-name">Last name:</label>
                <input type="text" id="last_name" name="last_name" />
            </div>
            <div class="form-chunk">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
            </div>
            <div class="form-chunk">
                <label for="phone_number">Phone number: </label>
                <input type="tel" id="phone_number" name="phone_number" />
            </div>
            <div class="form-chunk">
                <label for="date">Date:</label>
                <input type="datetime-local" id="date" name="date" />
            </div>
            <div class="form-chunk">
                <label for="medium">Medium:</label>
                <select name="medium" id="medium">
                    <option value="acrylic">Acrylic Paint</option>
                    <option value="charcoal">Charcoal</option>
                    <option value="digital">Digital</option>
                    <option value="mixed-media">Mixed Media</option>
                    <option value="tattoo">Tattoo</option>
                </select>
            </div>
            <div class="form-chunk">
                <label for="subject_artwork">Subject of the artwork (what do you want me to draw/paint?):</label>
                <input type="text" name="subject_artwork" required />
            </div>
            <div>
                <label for="additional-info">Any additional info/requests?</label>
                <textarea id="additional-info" name="additional-info" rows="4" cols="50"></textarea>
            </div>
            <div class="right-align">
                <input type="submit" value="Send Request" />
            </div>
        </form>
        <p>If you have any more questions please check out the "Commissions" section on my <a href="faqpage.php">"FAQ"</a> page. </p>
        <h3>Purchase my Art</h3>
        <p>My <a href="https://www.etsy.com/shop/PugAndPeonyStudios">Etsy</a> is currently closed because I am a full time student, but I will (hopefully) be getting it up and running in the near future. I will post infromation here and on my social media accounts about when my Etsy shop will be open again.</p>
        <p>I also have a <a href="https://www.redbubble.com/people/GracefulCreates/shop">RedBubble</a> under my old shop name "Graceful Creates". I still have some old designs up for sale!</p>
        <h3>Follow Me on Social Media</h3>
        <p>If you would like to see more of my art or behind the scenes action make sure to follow me on my social media accounts linked here:</p>
        <ul>
            <li><a href="https://www.instagram.com/pugandpeonystudios/">Instagram</a></li>
            <li><a href="https://www.pinterest.com/pugandpeonystudios/">Pinterest</a></li>
            <li><a href="https://www.youtube.com/channel/UCDMU793P_NKNuL_6ICJWqdA">YouTube</a></li>
            <li><a href="https://www.tiktok.com/@pugandpeonystudios">TikTok</a></li>
        </ul>
    </main>
    <?php include('glu3-project1/includes/footer.php'); ?>

    <body>

</html>
<!---All of the image elements on this website are created by the creator of the website, Grace Urmaza. I want to replace the links in the navigation bar and the footer with images that link to the respective links, but I'm not sure how to do that yet-->
