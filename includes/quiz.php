<?php
/**
 * Renders a "خودآزمایی چهار گزینه‌ای" (multiple-choice quiz) section.
 *
 * Expects $quiz to be set before including this file:
 *
 * $quiz = [
 *   'id'    => 'file-quiz',                // required, unique per page, no spaces
 *   'title' => 'خودآزمایی چهار گزینه‌ای',   // optional, has a default
 *   'intro' => '...',                       // optional intro paragraph, html allowed
 *   'questions' => [
 *     [
 *       'question' => '...html allowed (code tags etc)...',
 *       'options'  => ['گزینه اول', 'گزینه دوم', 'گزینه سوم', 'گزینه چهارم'],
 *       'correct'  => 1, // zero-based index into options
 *     ],
 *     ...
 *   ],
 * ];
 *
 * Rendering + grading is fully generic: assets/js/lesson.js contains a
 * checkQuiz(quizId) function that reads data-correct attributes at runtime,
 * so no per-lesson JavaScript is needed.
 */
$quizId    = $quiz['id'];
$quizTitle = $quiz['title'] ?? 'خودآزمایی چهار گزینه‌ای';
$letters   = ['a', 'b', 'c', 'd', 'e', 'f'];
?>
        <!-- ─── QUIZ ─── -->
        <section class="lesson-section quiz-section" id="quiz">
          <div class="section-label">
            <span class="section-label-icon">🧠</span>
            <?= $quizTitle ?>
          </div>

<?php if (!empty($quiz['intro'])): ?>
          <p class="quiz-intro"><?= $quiz['intro'] ?></p>
<?php endif; ?>

          <div class="quiz-list" id="<?= $quizId ?>">
<?php foreach ($quiz['questions'] as $qi => $q): ?>
            <div class="quiz-card">
              <div class="quiz-question-row">
                <div class="quiz-num"><?= $qi + 1 ?></div>
                <div class="quiz-question-text"><?= $q['question'] ?></div>
              </div>
              <div class="quiz-options">
<?php foreach ($q['options'] as $oi => $optionText): ?>
                <label class="quiz-option" data-correct="<?= $oi === $q['correct'] ? 1 : 0 ?>">
                  <input type="radio" name="<?= $quizId ?>-q<?= $qi ?>" value="<?= $oi ?>">
                  <span><?= $letters[$oi] ?>) <?= $optionText ?></span>
                </label>
<?php endforeach; ?>
              </div>
            </div>
<?php endforeach; ?>
          </div>

          <div class="quiz-actions">
            <button type="button" class="quiz-check-btn" onclick="checkQuiz('<?= $quizId ?>')">
              بررسی پاسخ‌ها
            </button>
          </div>

          <div class="quiz-result" id="<?= $quizId ?>-result">
            <span class="quiz-result-icon"></span>
            <div class="quiz-result-score"></div>
            <div class="quiz-result-bar"><div class="quiz-result-fill"></div></div>
            <div class="quiz-result-msg"></div>
          </div>
        </section>
