
    <div class="col-md-10 col-md-offset-1">
        <h2 class="text-center"><?=$elements["value"]->title; ?></h2>
        <figure class="bg-grey">
            <img src="<?=site_url("uploads/").$elements["value"]->thumburl; ?>" alt="<?=$elements["value"]->title; ?>" style="height: 300px;" class="img-responsive center-block" >
            <figcaption class="text-center"><?=$elements["value"]->thumbcaption; ?></figcaption>
        </figure>
        <article>
            <?=$elements["value"]->story; ?>
        </article>
    </div>
