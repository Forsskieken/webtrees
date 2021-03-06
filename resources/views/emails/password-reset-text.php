<?php namespace Fisharebest\Webtrees; ?>
<?= I18N::translate('Hello %s…', $user->getRealName()) ?>

<?= I18N::translate('A new password has been requested for your username.') ?>

<?= I18N::translate('Username') ?> - <?= $user->getUserName()?>
<?= I18N::translate('Password') ?> - <?= $new_password ?>

<?= I18N::translate('Sign in') ?> - Html::url(WT_BASE_URL . 'login.php', ['username' => $user->getUserName(), 'url' => 'edituser.php']) ?>

<?= I18N::translate('After you have signed in, select the “My account” link under the “My pages” menu and fill in the password fields to change your password.') ?>
