<div class="container">
    <header class="py-5 py-lg-5 mt-lg-5">
        <div class="row flex-nowrap justify-content-center align-items-center">
            <div class="column-12">
                <h2><?= esc($title) ?></h2>

                <?= session()->getFlashdata('error') ?>
                <?= validation_list_errors() ?>

                <form action="/news" method="post">
                    <?= csrf_field() ?>
                    <div class="row mb-3">
                        <label for="title">Title
                            <input type="input" name="title" class="rounded-pill" value="<?= set_value('title') ?>">
                        </label>
                    </div>
                    <div class="row mb-3">
                        <label for="body">Text
                            <textarea name="body" cols="25" class="rounded-left" rows="2"><?= set_value('body') ?></textarea>
                        </label>
                    </div>
                    <input class="btn btn-bd-primary" type="submit" name="submit" value="Create news item">
                </form>
            </div>
        </div>
    </header>
</div>