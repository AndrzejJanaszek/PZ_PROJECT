<?php
$footerHTML = '
<footer class="footer">
    <div class="footer__lbox">
        <h2>Kontakt</h2>
        <p class="footer__lbox__contactrow">
            <span class="material-icons-round contact__icon">
            phone
            </span>
            <span>+48 235 711 131</span>
        </p>
        <p class="footer__lbox__contactrow">
            <span class="material-icons contact__icon">
            apartment
            </span>
            <span>Marxogród ul. Wladimira Ilijicza Ulijanowa Lenina 66</span>
        </p>
        <p class="footer__lbox__contactrow">
            <span class="material-icons contact__icon">
            mail_outline
            </span>
            <span>contact@studium.ez</span>
        </p>
    </div>
    <div class="footer__rbox">
        <h2>Menu</h2>
        <ul class="footer__navigation">
            <li class="footer__navigation__item"><a href="index.php">home</a></li>
            <li class="footer__navigation__item"><a href="about_us.php">about us</a></li>
            <li class="footer__navigation__item"><a href="blog.php">blog</a></li>
            <li class="footer__navigation__item"><a href="offer.php">offer</a></li>
            <li class="footer__navigation__item"><a href="contact.php">contact</a></li>
        </ul>
    </div>
</footer>
<div class="footer_copy">
    Andrzej Janaszek <span style="color: var(--orange_text--dark)">&copy;</span> All rights reserved 2021.  SVG'."'".'s from <a href="https://undraw.co/">undraw.co</a>
</div>
';
echo $footerHTML;
?>