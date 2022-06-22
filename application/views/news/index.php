<!-- -------------------
Name: Jacob Wallace
Coding 07-09
Purpose: news index page
------------------- -->
<section class="content">
        <div class="news">
                <h2>Testimonials</h2>
                        <?php foreach ($news as $news_item): ?>
                                <h3><?= $news_item['title']; ?></h3>
                                <div>
                                        <p><?= $news_item['text']; ?></p>
                                </div>
                                <p><a class="artLink" href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>
                        <?php endforeach; ?>
        </div>
</section>

        <!-- WAVES ANIMATION -->
        <div class="waves"></div> 

 