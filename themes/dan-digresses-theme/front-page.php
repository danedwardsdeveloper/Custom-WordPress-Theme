<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Dan Digresses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./assets/css/main.v1.min.css" /> -->

    <?php
    wp_head();
    ?>


</head>

<body>
    <div id="root">
        <header class="header">
            <div class="brand-logo-container">
                <span class="brand-logo">Brand logo</span>
            </div>
            <div class="search-container">
                <img src="./assets/images-icons/icons/google-search-icon.svg" alt="" id="search-icon" />
            </div>
        </header>

        <main>
            <section class="hero-banner">
                <h1>Dan Digresses</h1>
                <p>Hey, welcome to my blog! I'm Dan - a practical/ creative/ intellectual/ philosophical type of guy. This is my unfocused &amp; random blog where I write about stuff that I want to write about. You can read it if you like.</p>
            </section>

            <section class="categories">
                <h2>Categories</h2>

                <div class="category-cards-container">
                    <div class="category-card">
                        <img src="./assets/images-icons/images/category-graphics/graphic-1.webp" alt="Category 1" />
                        <span>Category 1 </span>
                    </div>
                    <div class="category-card">
                        <img src="./assets/images-icons/images/category-graphics/graphic-2.webp" alt="Category 2" />
                        <span>Category 2 </span>
                    </div>
                    <div class="category-card">
                        <img src="./assets/images-icons/images/category-graphics/graphic-3.webp" alt="Category 3" />
                        <span>Category 3 </span>
                    </div>
                    <div class="category-card">
                        <img src="./assets/images-icons/images/category-graphics/graphic-4.webp" alt="Category 4" />
                        <span>Category 4 </span>
                    </div>
                    <div class="category-card">
                        <img src="./assets/images-icons/images/category-graphics/graphic-5.webp" alt="Category 5" />
                        <span>Category 5 </span>
                    </div>
                </div>
            </section>
            <section class="article-previews-section">
                <div class="article-preview-header">
                    <h2>Recommended</h2>
                    <button id="sort-article-previews-btn">
                        <div>
                            <span>Most recent</span>
                            <img src="./assets/images-icons/icons/google-chevron-right-icon.svg" alt="Expand icon" />
                        </div>
                    </button>
                    <div id="sort-article-previews-modal" class="hidden">
                        <ul>
                            <li>
                                <span> Most recent </span>
                                <img src="./assets/images-icons/icons/google-done-icon.svg" alt="" />
                            </li>
                            <li>
                                <span> Most viewed </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="article-previews-container">
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-1.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-2.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-3.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-4.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-5.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-6.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-7.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-8.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-9.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-10.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-11.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                    <div class="article-preview-card">
                        <img src="./assets/images-icons/images/article-photo-12.webp" alt="" />
                        <span class="article-preview-title">Article preview title</span>
                        <span class="article-preview-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur laborum voluptatibus voluptatum...</span>
                        <div class="article-preview-card-footer">
                            <div class="article-preview-tag">
                                <span>Tag</span>
                            </div>
                            <span class="article-preview-date">03 March 2024</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <span>&copy; 2024 Company Name</span>
            <ul>
                <li>
                    <a href="" target="_blank">Terms of service</a>
                </li>
                <li>•</li>
                <li><a href="" target="_blank">Privacy policy</a></li>
            </ul>
        </footer>
    </div>
    <!-- <script type="module" src="./assets/js/main.js"></script> -->
</body>

</html>