<main class="main">
        <div class="main__inner main__inner--user">
            <div class="user-page">
            <?php include 'modules/userbar.php' ?>

                <div class="user-page__body">
                        <div class="user-section">
        <div class="user-section__header user-section__header--divider-none">
            <div class="user-section-header user-section-header--form">
                <h1 class="title title--3 user-section-header__title">
                    <span>Oyun Geçmişi</span>
                    <button class="button button--circle button--outline user-section-header__filter c-filter-toggle">
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-sliders-v"></use>
                            </svg>
                        </span>
                    </button>
                </h1>
                <div class="user-section-header__form">
                    <div class="user-section-header-filter c-filter">
                        <h3 class="title title--2 user-section-header-filter__title">Filtrele</h3>
                        <button class="user-section-header-filter__close c-filter-toggle">
                            <span class="icon">
                                <svg class="icon__cnt">
                                    <use xlink:href="#icon-times"></use>
                                </svg>
                            </span>
                        </button>
                        <form name="gamingtec_history_play" method="post" action="https://trbet839.com/tr/profile/history/play/select" class="form form-horizontal c-history-form user-section-header-filter__body" data-type="play">
                            <div class="form-item user-section-header-filter__row">
                                <label class="form-item__label user-section-header-filter__cell user-section-header-filter__cell--key required" for="gamingtec_history_play_date">Tarih</label>
                                <div class="user-section-header-filter__cell">
                                    <input type="text" id="gamingtec_history_play_date" name="gamingtec_history_play[date]" required="required" class="field-input form-item__control user-section-header-filter__date flatpickr-input" value="2022-10-25" data-datepicker="" readonly="readonly">
                                </div>
                            </div>

                            
                            <div class="form-item user-section-header-filter__row">
                                <label for="historyFilter" class="form-item__label user-section-header-filter__cell user-section-header-filter__cell--key">Filtrele:</label>
                                <div class="user-section-header-filter__cell">
                                    <div class="select" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="select__inner"><select id="historyFilter" class="c-history-form-filter select__input" data-select="" hidden="" tabindex="-1" data-choice="active"><option value="ALL">Hepsini Göster</option></select><div class="select__list select__list--single"><div class="select__item select__item--selectable" data-item="" data-id="1" data-value="ALL" data-custom-properties="null" aria-selected="true">Hepsini Göster</div></div></div><div class="select__list select__list--dropdown" aria-expanded="false"><div class="select__list" role="listbox"><div id="choices--historyFilter-item-choice-1" class="select__item select__item--choice select__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="ALL" data-select-text="" data-choice-selectable="" aria-selected="true">Hepsini Göster</div><div id="choices--historyFilter-item-choice-2" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="2" data-value="GAME_BET" data-select-text="" data-choice-selectable="">Tüm Bahisler</div><div id="choices--historyFilter-item-choice-3" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="3" data-value="GAME_WIN" data-select-text="" data-choice-selectable="">Kazançlar</div><div id="choices--historyFilter-item-choice-4" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="4" data-value="CASINO_BET" data-select-text="" data-choice-selectable="">Casino Bahisleri</div><div id="choices--historyFilter-item-choice-5" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="5" data-value="SPORT_BET" data-select-text="" data-choice-selectable="">Spor Bahisleri</div></div></div></div>
                                </div>
                            </div>

                            <div class="form-item user-section-header-filter__row">
                                <label class="form-item__label user-section-header-filter__cell user-section-header-filter__cell--key required" for="gamingtec_history_play_hour">Saat</label>
                                <div class="user-section-header-filter__cell">
                                    <div class="select" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="select__inner"><select id="hours" name="gamingtec_history_play[hour]" data-select="" class="select__input" hidden="" tabindex="-1" data-choice="active"><option value="24">Hepsi</option></select><div class="select__list select__list--single"><div class="select__item select__item--selectable" data-item="" data-id="1" data-value="24" data-custom-properties="null" aria-selected="true">Hepsi</div></div></div><div class="select__list select__list--dropdown" aria-expanded="false"><div class="select__list" role="listbox"><div id="choices--hours-item-choice-1" class="select__item select__item--choice select__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="24" data-select-text="" data-choice-selectable="" aria-selected="true">Hepsi</div><div id="choices--hours-item-choice-2" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="2" data-value="23" data-select-text="" data-choice-selectable="">23:00</div><div id="choices--hours-item-choice-3" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="3" data-value="22" data-select-text="" data-choice-selectable="">22:00</div><div id="choices--hours-item-choice-4" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="4" data-value="21" data-select-text="" data-choice-selectable="">21:00</div><div id="choices--hours-item-choice-5" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="5" data-value="20" data-select-text="" data-choice-selectable="">20:00</div><div id="choices--hours-item-choice-6" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="6" data-value="19" data-select-text="" data-choice-selectable="">19:00</div><div id="choices--hours-item-choice-7" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="7" data-value="18" data-select-text="" data-choice-selectable="">18:00</div><div id="choices--hours-item-choice-8" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="8" data-value="17" data-select-text="" data-choice-selectable="">17:00</div><div id="choices--hours-item-choice-9" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="9" data-value="16" data-select-text="" data-choice-selectable="">16:00</div><div id="choices--hours-item-choice-10" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="10" data-value="15" data-select-text="" data-choice-selectable="">15:00</div><div id="choices--hours-item-choice-11" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="11" data-value="14" data-select-text="" data-choice-selectable="">14:00</div><div id="choices--hours-item-choice-12" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="12" data-value="13" data-select-text="" data-choice-selectable="">13:00</div><div id="choices--hours-item-choice-13" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="13" data-value="12" data-select-text="" data-choice-selectable="">12:00</div><div id="choices--hours-item-choice-14" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="14" data-value="11" data-select-text="" data-choice-selectable="">11:00</div><div id="choices--hours-item-choice-15" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="15" data-value="10" data-select-text="" data-choice-selectable="">10:00</div><div id="choices--hours-item-choice-16" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="16" data-value="09" data-select-text="" data-choice-selectable="">09:00</div><div id="choices--hours-item-choice-17" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="17" data-value="08" data-select-text="" data-choice-selectable="">08:00</div><div id="choices--hours-item-choice-18" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="18" data-value="07" data-select-text="" data-choice-selectable="">07:00</div><div id="choices--hours-item-choice-19" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="19" data-value="06" data-select-text="" data-choice-selectable="">06:00</div><div id="choices--hours-item-choice-20" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="20" data-value="05" data-select-text="" data-choice-selectable="">05:00</div><div id="choices--hours-item-choice-21" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="21" data-value="04" data-select-text="" data-choice-selectable="">04:00</div><div id="choices--hours-item-choice-22" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="22" data-value="03" data-select-text="" data-choice-selectable="">03:00</div><div id="choices--hours-item-choice-23" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="23" data-value="02" data-select-text="" data-choice-selectable="">02:00</div><div id="choices--hours-item-choice-24" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="24" data-value="01" data-select-text="" data-choice-selectable="">01:00</div><div id="choices--hours-item-choice-25" class="select__item select__item--choice select__item--selectable " role="option" data-choice="" data-id="25" data-value="00" data-select-text="" data-choice-selectable="">00:00</div></div></div></div>
                                </div>
                            </div>
                            <div class="form-item user-section-header-filter__row">
                                <div class="user-section-header-filter__cell user-section-header-filter__cell--key user-section-header-filter__cell--empty"></div>
                                <div class="user-section-header-filter__cell">
                                    <input class="button button--primary" type="submit" name="name" value="HESAP ÖZETİ">
                                </div>
                            </div>
                        
    
                        
    </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="user-section__body user-section__body--indent-x-none user-section__body--indent-top-none">
            <div class="table c-history-table">
                <div class="table__head">
                    <div class="table__row">
                        <div class="table__cell">No</div>
                        <div class="table__cell">Tarih</div>
                        <div class="table__cell">İşlem Türü</div>
                        <div class="table__cell">Miktar</div>
                        <div class="table__cell">Oyun</div>
                        <div class="table__cell"></div>
                    </div>
                </div>
                <div class="table__body c-history-table-body" style="display: none;">

                </div>
            </div>
            <div class="user-message-section c-no-history-message" style="">
                <h3 class="title title--3 user-message-section__title">Hesap Hareketi Bulunamadı</h3>
            </div>
        </div>
    </div>


    <div class="modal" id="modal-bet-details" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close="">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-bonus-read-more">
                <header class="modal__header">
                    <h2 class="title modal__title" id="modal-bet-details-title">Detaylar</h2>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close="">
                        <span class="icon">
                        <svg class="icon__cnt">
                            <use xlink:href="#icon-times"></use>
                        </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content c-bet-details-modal-contant" id="modal-bet-details-content">

                </main>
            </div>
        </div>
    </div>

    
    <script id="history-table-row-template" type="text/x-squirrelly-template">
        {{js(options.h_id = 'histories.h_id')/}}
        {{js(options.h_date = 'histories.h_date')/}}
        {{js(options.h_type = 'histories.h_type')/}}
        {{js(options.h_amount = 'histories.h_amount')/}}
        {{js(options.h_game = 'histories.h_game')/}}
        {{js(options.bet_button = 'profile.account.cash_in_loyalty.details_button')/}}

        {{each(options.list)}}
            <div class="table__row">
                <div class="table__cell" data-label="{{h_id|trans}}">{{@this.actionId}}</div>
                <div class="table__cell" data-label="{{h_date|trans}}">{{@this.date}}</div>
                <div class="table__cell" data-label="{{h_type|trans}}">{{@this.action}}</div>
                <div class="table__cell" data-label="{{h_amount|trans}}">{{@this.amount}}</div>
                <div class="table__cell" data-label="{{h_game|trans}}">{{@this.gameName}}</div>
                <div class="table__cell">
                    {{if(@this.hasBetDetails)}}
                    <button class="button button--small button--primary c-bet-details-button" data-action-id="{{@this.gameTranId}}">{{bet_button|trans}}</button>
                    {{/if}}
                </div>
            </div>
        {{/each}}
    </script>

    <script id="bet-details-template" type="text/x-squirrelly-template">
        {{js(options.h_bet_factor = 'history.bet.factor')/}}
        {{js(options.h_bet_win_status = 'history.bet.win_status')/}}
        {{js(options.h_bet_order_status = 'history.bet.order_status')/}}
        {{js(options.h_bet_order_amount = 'history.bet.order_amount')/}}
        {{js(options.h_bet_max_win_amount = 'history.bet.max_win_amount')/}}
        {{js(options.h_bet_win_amount = 'history.bet.win_amount')/}}

        <p>{{h_bet_win_status|trans}}: {{betStatus}}</p>
        <p>{{h_bet_order_status|trans}}: {{statusName}}</p>

        {{each(options.betStakes)}}
            <p style="margin: 10px 0">
                <span>{{@this.eventNameOnly}}</span><br>
                <span>{{@this.eventDate}}</span><br>
                <span>{{@this.fullStake}}</span><br>
                <span>{{h_bet_factor|trans}}: {{@this.factor}}</span><br>
                <span>{{@this.statusName}}</span>
            </p>
        {{/each}}

        <p>{{h_bet_order_amount|trans}}: {{orderAmount}}</p>
        <p>{{h_bet_max_win_amount|trans}}: {{maxWinAmount}}</p>
        <p>{{h_bet_win_amount|trans}}: {{winAmount}}</p>
        <p>{{h_bet_factor|trans}}: {{factor}}</p>
    </script>
    

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

<!-- Mirrored from trbet839.com/tr/profile/history/play by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 08:56:03 GMT -->
</html>
