<?php
/**
 * Renders the "منابع و مطالعه بیشتر" section.
 *
 * Expects $references to be set before including this file:
 *
 * $references = [
 *   [
 *     'url'   => 'https://...',
 *     'title' => '...',
 *     'desc'  => '...',
 *   ],
 *   ...
 * ];
 */
?>
        <!-- ─── REFERENCES ─── -->
        <section class="lesson-section" id="references">
          <div class="section-label">
            <span class="section-label-icon">📎</span>
            منابع و مطالعه بیشتر
          </div>

          <div class="reference-list">
<?php foreach ($references as $ref): ?>
            <a
              href="<?= $ref['url'] ?>"
              target="_blank"
              rel="noopener"
              class="reference-card"
            >
              <div class="ref-icon ref-icon-blue">🌐</div>
              <div class="ref-body">
                <div class="ref-title"><?= $ref['title'] ?></div>
                <div class="ref-desc"><?= $ref['desc'] ?></div>
              </div>
              <span class="ref-arrow">↗</span>
            </a>
<?php endforeach; ?>
          </div>
        </section>
