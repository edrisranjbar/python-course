<?php
/**
 * Renders the "تمرین‌ها" section.
 *
 * Expects $exercises to be set before including this file:
 *
 * $exercises = [
 *   [
 *     'level' => null | 'easy' | 'medium' | 'hard',   // omit badge if null
 *     'desc'  => '...html allowed (code tags etc)...',
 *     'hint'  => '...raw highlighted code html...',    // optional
 *   ],
 *   ...
 * ];
 */
$levelLabels = [
  'easy'   => 'آسان',
  'medium' => 'متوسط',
  'hard'   => 'چالشی',
];
?>
        <!-- ─── EXERCISES ─── -->
        <section class="lesson-section" id="exercises">
          <div class="section-label">
            <span class="section-label-icon">✏️</span>
            تمرین‌ها
          </div>

          <div class="exercise-list">
<?php foreach ($exercises as $i => $ex): ?>
            <div class="exercise-card">
              <div class="exercise-header">
                <div class="exercise-num">تمرین <?= $i + 1 ?></div>
<?php if (!empty($ex['level'])): ?>
                <span class="exercise-level exercise-<?= $ex['level'] ?>"><?= $levelLabels[$ex['level']] ?></span>
<?php endif; ?>
              </div>
              <p class="exercise-desc">
                <?= $ex['desc'] ?>
              </p>
<?php if (!empty($ex['hint'])): ?>
              <details class="exercise-hint">
                <summary dir="ltr" style="text-align: right;">راهنمایی 💡</summary>
                <div class="hint-body">
                  <pre><code><?= $ex['hint'] ?></code></pre>
                </div>
              </details>
<?php endif; ?>
            </div>
<?php endforeach; ?>
          </div>
        </section>
