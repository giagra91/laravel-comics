<div class="home-footer">
    <div id="footer-top">
        <div id="top-footer-wrapper">
        <div id="top-footer-links">
            <div class="pad-1">
            <h4>Dc comics</h4>
            <ul>
                <li v-for="(element, index) in comicsLinks" :key="index">
                <a :href="element.url">
                    {{element.text}}
                </a>
                </li>
            </ul>
            <h4>Dc comics</h4>
            <ul>
                <li v-for="(element, index) in shopLinks" :key="index">
                <a :href="element.url">
                    {{element.text}}
                </a>
                </li>
            </ul>
            </div>
            <div class="pad-1">
            <h4>Dc</h4>
            <ul>
                <li v-for="(element, index) in dcLinks" :key="index">
                <a :href="element.url">
                    {{element.text}}
                </a>
                </li>
            </ul>
            </div>
            <div class="pad-1">
            <h4>Sites</h4>
            <ul>
                <li v-for="(element, index) in sitesLinks" :key="index">
                <a :href="element.url">
                    {{element.text}}
                </a>
                </li>
            </ul>
            </div>
        </div>
        <div id="top-footer-image">
            <!-- <img src="../assets/images/dc-logo-bg.png" alt="Dc logo"> -->
        </div>
    </div>

    </div>
    <div id="footer-bottom">
        <div id="footer-bottom-wrapper">
            <div id="footer-subscription">
                <a href="#">
                Sign-up Now!
                </a>
            </div>
            <div id="footer-follow-us">
                <h3>Follow us</h3>
                <a href="#" class="mar-2">
                <img src="../assets/images/footer-facebook.png" alt="Facebook logo">
                </a>
                <a href="#" class="mar-2">
                <img src="../assets/images/footer-twitter.png" alt="Twitter logo">
                </a>
                <a href="#" class="mar-2">
                <img src="../assets/images/footer-youtube.png" alt="Youtube logo">
                </a>
                <a href="#" class="mar-2">
                <img src="../assets/images/footer-pinterest.png" alt="Pinterest logo">
                </a>
                <a href="#" class="mar-2">
                <img src="../assets/images/footer-youtube.png" alt="Periscope logo">
                </a>
            </div>

            </div>
        </div>
    </div>