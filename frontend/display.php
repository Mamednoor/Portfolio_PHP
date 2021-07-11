<section class="work" id="work">
  <div class="row">
    <h2>Projets</h2>
    <div class="projet_boxes">

      <?php
      require_once "config.php";

      $response = $bdd->query('SELECT * FROM Projects');
        while ($data = $response->fetch()) {
      ?>
          <div class="projet_box">
            <div class="projet_text">
              <h3><?php echo htmlspecialchars($data['name']); ?></h3>
              <p><?php echo htmlspecialchars($data['description']); ?></p>
              <ul class="projet_list">
                <li><?php echo htmlspecialchars($data['stack']); ?></li>
              </ul>
              <div class="projet_links">
                <a href="<?php echo htmlspecialchars($data['link']); ?>" class="link_text" target="_blank">
                  Visit Site <span>&rarr;</span>
                </a>
                <a href="<?php echo htmlspecialchars($data['repo']); ?>" target="_blank">
                  <img src="asset/images/github.svg" class="projet_code" title="View Source Code" alt="GitHub" />
                </a>
              </div>
            </div>
            <div class="projet_image-box">
              <img src="<?php echo htmlspecialchars($data['picture']); ?>" class="projet_image" alt="<?php echo htmlspecialchars($data['name']); ?>" />
            </div>
          </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>