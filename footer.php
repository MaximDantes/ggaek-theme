</main>
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

        </div>
    </div>

    <div class="footer-bottom container">

    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>