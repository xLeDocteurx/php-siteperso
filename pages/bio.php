<?php $user = getUserData(); ?>

<h4>Ma bio</h4>
<?php
//var_dump($user);
?>
<h1><?= $user['first_name'] ?> <?= $user['name'] ?> </h1>
<h2><?= $user['occupation'] ?></h2>

<?php foreach($user['experiences'] as $experience) : ?>
	<li><i><?= $experience['year'] ?></i> | <?= $experience['company'] ?></li>
<?php endforeach; ?>