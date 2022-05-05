<div class="home-footer">
    <div id="footer-top">
        <div id="top-footer-wrapper">
        <div id="top-footer-links">
            <div class="pad-1">
            <h4>Dc comics</h4>
            <ul>
                @foreach ($links["comicsLinks"] as $link)
                    <li>
                        <a href="{{ $link["url"] }}">
                            {{ $link["text"] }}
                        </a>
                    </li>
                @endforeach
                {{-- @dump($links) --}}
            </ul>
            <h4>Shop</h4>
            <ul>
                <li>
                    <a href="#">
                        Shop Dc
                    </a>
                </li>
            </ul>
            </div>
            <div class="pad-1">
            <h4>Dc</h4>
            <ul>
                @foreach ($links["dcLinks"] as $link)
                    <li>
                        <a href="{{ $link["url"] }}">
                            {{ $link["text"] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            </div>
            <div class="pad-1">
            <h4>Sites</h4>
            <ul>
                <li>
                    <a href="#">
                        Dc
                    </a>
                </li>
            </ul>
            </div>
        </div>
        <div id="top-footer-image">
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
                <img src="{{ asset("images/footer-facebook.png") }}" alt="Facebook logo">
                </a>
                <a href="#" class="mar-2">
                <img src="{{ asset("images/footer-twitter.png") }}" alt="Twitter logo">
                </a>
                <a href="#" class="mar-2">
                <img src="{{ asset("images/footer-youtube.png") }}" alt="Youtube logo">
                </a>
                <a href="#" class="mar-2">
                <img src="{{ asset("images/footer-pinterest.png") }}" alt="Pinterest logo">
                </a>
                <a href="#" class="mar-2">
                <img src="{{ asset("images/footer-periscope.png") }}" alt="Periscope logo">
                </a>
            </div>

            </div>
        </div>
    </div>