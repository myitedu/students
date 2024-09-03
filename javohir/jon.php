<?php
<?php if (count($films)>=1): ?>
    <hr>
    <div id="results">
        <?php foreach ($films as $film): ?>
            <div class="row movie">
                <div class="col col-3">
                    <img class="poster_img"
                         src="<?= $film['Poster']; ?>"
                         alt="img">
                </div>
                <div class="col col-9">
                    <h4 class="movie_title"><?= $film['Title']; ?></h4>
                    <ul class="movie_details">
                        <li>Year:<?= $film['Year']; ?></li>
                        <li>imdbID:<?= $film['imdbID']; ?></li>
                        <li>Type:<?= $film['Title']; ?></li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
<?php endif; ?>