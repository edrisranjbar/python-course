<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title ?? 'دوره صفر تا صد پایتون – مدرس: ادریس رنجبر') ?></title>
  <meta name="description" content="<?= htmlspecialchars($description ?? 'دوره رایگان آموزش برنامه‌نویسی پایتون از صفر تا صد با مدرس ادریس رنجبر') ?>" />
  <link rel="icon" href="<?= $root ?>assets/icons/python.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="<?= $root ?>assets/css/style.css" />
  <?php if (!empty($extraCss)): ?>
    <link rel="stylesheet" href="<?= $root ?><?= $extraCss ?>" />
  <?php endif; ?>
</head>
<body>
