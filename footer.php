</main>

<?php require_once 'inc/components/auth-modal.php'?>

<footer class="footer">

    <div class="footer-top container">
        <div class="footer-contacts">
            <p class="footer-contacts__item">
                Наш адрес: <?= get_option('contacts_address') ?>
            </p>
            <p class="footer-contacts__item">
                Контактный телефон приёмной директора: <?= get_option('contacts_director_phone') ?>
            </p>
            <p class="footer-contacts__item">
                Контактный телефон приёмной комиссии: <?= get_option('contacts_admissions_committee_phone') ?>
            </p>
            <p class="footer-contacts__item">
                Контактный телефон общежития: <?= get_option('contacts_admissions_committee_phone') ?>
            </p>
            <p class="footer-contacts__item">
                Email: <?= get_option('contacts_email') ?>
            </p>
            <p class="footer-contacts__item">
                Проезд: <?= get_option('contacts_route') ?>
            </p>
        </div>

        <div class="footer-map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A399e3064b3e7870c8820ecd2c0236e83ef67cae63b1d84e784b5d639de121edd&amp;source=constructor"
                    width="100%" height="220" frameborder="0"></iframe>
        </div>
    </div>

    <div class="footer-bottom container">

    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>