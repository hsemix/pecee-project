<? /* @var $this \Demo\Widget\SiteAbstract */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $this->getSite()->getTitle(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->printMeta(); ?>
        <?= $this->printCss(); ?>
        <?= $this->printJs(); ?>
    </head>
	<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?= url('home'); ?>">Logo</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <?= $this->mainMenu; ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

		<div class="container">
			<div class="starter-template">
				<?= $this->getContentHtml(); ?>
			</div>
		</div>

        <footer>
            <div class="container-fluid">
                <div class="form-inline">
                <?= $this->form()->selectStart('lang', ['da_dk' => 'Dansk', 'en_gb' => 'English'], $this->getLanguage())
                    ->addAttribute('onchange', 'top.location.href=\''. url('home') .'?lang=\' + this[selectedIndex].value;')
                    ->addClass('form-control col-1'); ?>
                </div>
            </div>
        </footer>
	</body>
</html>