<?php
get_header();
?>

<main>
    <div class="column-layout">
        <aside>
            <ul>
                <li>Article 1</li>
                <li>Article 2</li>
                <li>Article 3</li>
                <li>Article 4</li>
                <li>Article 5</li>
                <li>Article 6</li>
            </ul>
        </aside>
        <article class="full-article">
            <nav class="breadcrumbs">
                <ul>
                    <li>Home</li>
                    <li>Articles</li>
                    <li>Category</li>
                </ul>
            </nav>
            <section class="article-header">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_title();
                        get_template_part('template-parts/content', 'article');
                        get_template_part('template-parts/content', 'gallery');
                    }
                }
                ?>

                <h1>Article Title</h1>
                <div>
                    <div class="tags-container">
                        <div class="tag">
                            <span>Tag</span>
                        </div>
                        <div class="tag">
                            <span>Another tag</span>
                        </div>
                        <div class="tag">
                            <span>Different tag</span>
                        </div>
                    </div>
                    <span class="article-date">Monday 27 May 2024</span>
                </div>
                <div class="image-container">
                    <img src="./assets/images-icons/images/article-photo-1.webp" alt="" />
                </div>
            </section>
            <p>
                Welcome to TikTok! Congratulations on diving into the world of content creation. By the time you finish this module, you'll be well on your way to understanding what makes TikTok so special for creators like you and why it's the perfect
                platform to unleash your creativity. Let's jump right in!
            </p>
            <h2>So, What Exactly is TikTok?</h2>
            <p>TikTok is more than just a platform—it's an entertainment-first community that empowers you to showcase your creativity, knowledge, and the moments that matter most to you to a global audience.</p>
            <h2>Why TikTok?</h2>
            <p>
                Here's the beauty of TikTok: it's a place where anyone can be a creator. Yup, you read that right—anyone! We're all about encouraging you to share your passions and unique perspective through your videos. TikTok celebrates diversity and
                welcomes all kinds of content and creators.
            </p>
            <h2>Why You?</h2>
            <p>
                Because TikTok is all about authenticity. It's your chance to totally be yourself and connect with an audience who appreciates your realness. Plus, where else can you reach such a diverse and engaged community of viewers? It's a win-win
                situation!
            </p>
            <h2>Creating Your Account</h2>
            <p>
                Ready to join the TikTok community? First things first—you'll need to create an account . Signing up is a breeze, whether you prefer using your email, phone number, or a third-party platform. Your username will be automatically assigned
                upon sign-up, but don't worry—you can always change it later.
            </p>
            <h3>Time to create your first masterpiece!</h3>
            <p>
                Ready to unleash your creativity? Hit the plus icon to start creating! Choose your video length, play with creative effects, pick a sound, and let your imagination run wild. Remember, practice makes perfect, so don't be afraid to
                experiment and have fun with it!
            </p>
            <p>And that's it! You're officially on your way to TikTok stardom. Keep creating, keep inspiring, and most importantly, keep being you!</p>
        </article>
    </div>
</main>



<?php
get_footer();
?>