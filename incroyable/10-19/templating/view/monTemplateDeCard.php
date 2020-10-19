<div class="card d-flex flex-column align-items-center mt-5" style="width: 18rem;">
    <h4 class="card-title mt-2"><?= $title ?></h4>
    <img class="card-img-top" src="img/<?= $imageUrl ?>" alt="">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <p class="card-text"><?= $director ?></p>
            <p class="card-text"><?= $releaseDate ?></p>
        </div>
        <p class="card-text"><?= $resume ?></p>
    </div>
</div>