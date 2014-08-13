<div class="product-detail">
  <div class="images">
    <h1 class="title <?php if($title_type != null){ echo $title_type; }; ?>"><?= $title; ?></h1>
    <div class="main">
      <a href="/images/art/portfolio/big/<?= $image; ?>.jpg" class="cloud-zoom" id="zoom1" rel="position: 'inside'"><img src="/images/art/portfolio/large/<?= $image; ?>.jpg" alt="<?= $title; ?>" /></a>
    </div>
    <ul class="poplets">
      <?php $poplets = explode(',', $image_poplets); ?>
      <?php if (count($poplets) > 1): ?>
        <?php foreach($poplets as $poplet): ?>
          <li><a href="/images/art/portfolio/big/<?= $poplet ?>.jpg" rel="useZoom: 'zoom1', smallImage: '/images/art/portfolio/large/<?= $poplet ?>.jpg'" class="cloud-zoom-gallery"><img src="/images/art/portfolio/small/<?= $poplet ?>.jpg" alt="<?= $poplet ?>" /></a></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
  <div class="details">
    <h1 class="title <?php if($title_type != null){ echo $title_type; }; ?>"><?= $title; ?></h1>
    <ul>
      <li class="specs">
        <ul>
          <li class="medium">Medium: <?= $medium; ?></li>
          <?php if ($dim_width != null): ?>
            <li class="dimensions">Dimensions: <?= $dim_height,"&quot; x ", $dim_width,"&quot; x ",$dim_depth,"&quot;"; ?></li>
          <?php endif; ?>
          <!--
          <?php if ($weight != null && $status != 2): ?>
            <li class="weight">Weight: <span><?= $weight; ?></span> lbs</li>
          <?php endif; ?>
          -->
          <li class="year">Year: <?php $year = date("Y", strtotime($date)); echo $year?></li>
          <li class="price">Price: 
            <?php if ($price != null && $status != 2): ?>
              $<?= $price; ?>
            <?php else: ?>
              NFS
            <?php endif; ?>
          </li>
          <?php if ($edition_index != null): ?>
            <li class="edition">
              Edition: <span><?= $edition_index; ?>/<?= $edition_cap; ?></span>
              <?php if ($stock == 0) {echo "<strike>stock</strike>";} ?>
            </li>
          <?php endif; ?>
          <?php if ($title != $id): ?>
            <li class="id">ID: <span><?= $id; ?></span></li>
          <?php endif ?>
        </ul>
      </li>
      <!--<li class="social">
        <ul class="social-btns">
          <li class="btn-s purchase"><a href="#purchase-inquiry" class="ltbx win">Buy</a></li>
          <li class="btn-s comment"><a href="#comment-form" class="ltbx win">Comment</a></li>
          <li class="pin"><a href="//www.pinterest.com/pin/create/button/?url=http://baralaye.com{tag_itemurl_nolink}&media=http://baralaye.com{tag_largeimage_path}&description=Ebitenyefa%20Baralaye%20-%20{tag_title}" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></li>
          <li class="tweet"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="baralaye">Tweet</a>
          <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
          </li>
          <li class="like last">
            <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
            <fb:like send="false" layout="button_count" width="75" show_faces="false"></fb:like>
          </li>
        </ul>
      </li>-->
      <?php if($description != null): ?>
        <li class="description"><?= $description; ?></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
