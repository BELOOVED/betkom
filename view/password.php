
<main class="main">
        <div class="main__inner main__inner--user">
            <div class="user-page">
            <?php include 'modules/userbar.php' ?>

                <div class="user-page__body">
                    <div class="user-section">
    <div class="user-section__header">
        <div class="user-section-header">
            <h2 class="user-section-header__title">Şifreni Değiştir</h2>
        </div>
    </div>
    <div class="user-section__body">
        <form name="gamingtec_password" method="post" action="https://trbet839.com/tr/profile/password/submit" class="form c-ajax-form"><input type="hidden" name="_method" value="PATCH">

        <div class="change-password-page">
            <div class="form-item">
                <label for="current-pass" class="form-item__label">Eski Şifreniz</label>
                <input type="password" id="gamingtec_password_oldPassword" name="gamingtec_password[oldPassword]" class="field-input form-item__control c-input-password is-required" data-name="password">
                <div class="form-item__explain"></div>
            </div>

            <div class="form-item">
                <label for="new-pass" class="form-item__label">Yeni Şifreniz</label>
                <input type="password" id="gamingtec_password_password" name="gamingtec_password[password]" class="field-input form-item__control c-input-password is-required" data-name="password">
                <div class="form-item__explain"></div>
            </div>

            <div class="change-password-page__bullet-list">
                <ul class="bullet-list">
                    <li class="bullet-list__item">
                        Şifreniz
                        En az 8 karakter olmalıdır ve en az bir harf ve bir rakam içermelidir.
                    </li>
                    <li class="bullet-list__item">
                        Türkçe Karakter Kullanmayınız
                    </li>
                </ul>
            </div>

            <div class="form-item">
                <label for="current-pass" class="form-item__label">Şifre Tekrar</label>
                <input type="password" id="gamingtec_password_repeatPassword" name="gamingtec_password[repeatPassword]" class="field-input form-item__control c-input-password is-required" data-name="password">
                <div class="form-item__explain"></div>
            </div>

            <div class="change-password-page__submit">
                <button class="button button--primary" type="submit" name="pass-change">İLERİ</button>
            </div>
        </div>
        <input type="hidden" id="gamingtec_password__token" name="gamingtec_password[_token]" value="7UCGKeHlmkc8RU6zcheD57VBjF5PeucYLkERuTz8I0I">
    
        
    </form>
    </div>
</div>
                </div>
            </div>
        </div>
    </main>


       
        <div class="bookmark-bar c-bookmark-bar">
            <ul class="bookmark-bar-list">
                <li class="bookmark-bar-list__item bookmark-bar-list__item--hide c-bookmark-bar-item">
                    <a href="../recently-played.html" class="bookmark-bar-link">
                        <img src="../../../assets/img/last_played.png" class="bookmark-bar-link__img">
                        <span class="bookmark-bar-link__name">En Son Oynananlar</span>
                    </a>
                </li>
                <li class="bookmark-bar-list__item bookmark-bar-list__item--hide c-bookmark-bar-item">
                    <a href="../../casino/most-popular.html" class="bookmark-bar-link">
                        <img src="https://trbet839.com/assets/img/most_popular.svg" class="bookmark-bar-link__img">
                        <span class="bookmark-bar-link__name">Popüler</span>
                    </a>
                </li>
                <li class="bookmark-bar-list__item bookmark-bar-list__item--hide c-bookmark-bar-item">
                    <a href="../../casino/slots.html" class="bookmark-bar-link">
                        <img src="../../../assets/img/featured.png" class="bookmark-bar-link__img">
                        <span class="bookmark-bar-link__name">Yeni Oyunlar</span>
                    </a>
                </li>
                <li class="bookmark-bar-list__item">
                    <a href="../../trbetkisayoluygulamasi.html" class="bookmark-bar-link c-pwa-promo-desktop">
                        <span class="bookmark-bar-link__name">Kesintisiz Erişim</span>
                        <img src="../../../assets/img/bookmark.png" class="bookmark-bar-link__img" alt="add to bookmark">
                    </a>
                </li>
            </ul>
            <div class="game-list game-list--small c-game-list"></div>
        </div>

        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script id="bookmark-game-item-template" type="text/x-squirrelly-template">
            {{js(options.play_for_real = 'game.play.for_real')/}}
            {{js(options.play_for_fun = 'game.play.for_fun')/}}

            {{each(options.list)}}
            <div class="game-list__item">
                <div class="game-item game-item--tile c-game-item" data-game="{{@this.data}}" data-position="{{@this.position}}">
                    <div class="game-item__wrapper">
                        <div class="game-item-img" style="background-image: url('{{@this.image}}')"></div>
                        <div class="game-item-badges game-item-badges--top game-item-badges--right">
                            {{if(@this.status)}}
                            <span class="badge badge--secondary game-item-badges__item">{{@this.status}}</span>
                            {{/if}}
                        </div>
                        <div class="game-item-buttons">
                            <a href="{{@this.playForRealUrl}}" class="button button--primary game-item-buttons__item">{{play_for_real|trans}}</a>
                            {{if(@this.playForFunUrl)}}
                            <a href="{{@this.playForFunUrl}}" class="button button--light game-item-buttons__item">{{play_for_fun|trans}}</a>
                            {{/if}}
                        </div>
                    </div>
                    <div class="game-item__title">{{@this.title}}</div>
                </div>
            </div>
            {{/each}}
        </script>
    </div>

    <?php include 'modules/sidebar.php'; ?>

    <div class="scroll-to-top c-scroll-to-top">
        <button class="button button--primary">
                    ▲
                </button>
    </div>

    <script>
    var ajax = new XMLHttpRequest();
    ajax.open('GET.html', 'https://trbet839.com/assets/spritemap.svg?20221024-223339', true);
    ajax.send();
    ajax.onload = function(e) {
        var div = document.createElement('div');
        div.style.display = 'none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
    }
    </script>

<?php include 'modules/modals.php'; ?>
    <script src="../../../assets/js/vendor7860.js?20221024-223339" charset="utf-8"></script>
    <script src="../../../assets/js/common7860.js?20221024-223339" charset="utf-8"></script>
    <script src="../../../assets/js/home7860.js?20221024-223339" charset="utf-8"></script>
    <script>
    (function() {
        var a = document.createElement("img");
        var match = window.location.search.match(/p(\d+)p(\d+)p([\w\d]{4})(?:t(\d+))?(?:f(\d+))?(?:l(\d+))?([\w\d]+)?(\&subid=([\w\d]+))?(\&source=([\w\d]+))?/);
        var refCode = '';
        if (match)
            refCode = match[0];
        if (refCode) {
            a.src = "https://affiliate-api.income.partners/?project=trbet&refcode=" + encodeURIComponent("partner=" + refCode);
            a.style.display = "none";
            document.body.appendChild(a);
        }
    })();
    </script>


    <script>
    headerLogin();
</script>



</body>

<!-- Mirrored from trbet839.com/tr/profile/password/edit by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 08:59:53 GMT -->
</html>
