<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container tournaments">
        

<div ng-controller="casinoTournamentsCtrl" ng-init="initWatchers()" watch-resize="" middle-screen-mode="true">
  <ng-include ng-show="!gamesInfo.length" ng-if="!$location.search().tournament_id" src="'optional_modules/casino/templates/tournament/tournaments.html'|fixPath">
    <div class="casino-tournaments-include" ng-init="getTournamentList(true);tournament.readMore=false; setTitle('Tournaments');casinoMultiviewValues();">
      <div class="guide">
        <div class="casino-tournaments-filters-wrapper">
          <div ng-repeat="filterGroup in tournament.filterList track by $index" class="casino-tournament-filter no-select-j" ng-class="{'active': filterGroup.expanded}" ng-mouseover="filterGroup.expanded=true" ng-mouseleave="filterGroup.expanded=false">
            <p ng-click="filterGroup.expanded=!filterGroup.expanded">
              <span>Durum</span>
              <span><span ng-repeat="filter in filterGroup.filters track by $index" ng-if="filter.active">Yaklaşan</span><span ng-repeat="filter in filterGroup.filters track by $index" ng-if="filter.active">Canlı Turnuva</span></span>
            </p>
            <div>
              <ul>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Hepsi</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-not-empty"> <span>Yaklaşan</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-not-empty"> <span>Canlı Turnuva</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Sona erdi</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>İptal edildi</span></label>
                </li>
                <li ng-if="filterGroup.okButton"><button ng-click="filterGroup.expanded=false;updateFilters(filterGroup, null, true)" trans="">Tamam</button></li>
              </ul>
            </div>
          </div>
          <div ng-repeat="filterGroup in tournament.filterList track by $index" class="casino-tournament-filter no-select-j" ng-class="{'active': filterGroup.expanded}" ng-mouseover="filterGroup.expanded=true" ng-mouseleave="filterGroup.expanded=false">
            <p ng-click="filterGroup.expanded=!filterGroup.expanded"><span>Kayıt Durumu</span> <span></span></p>
            <div>
              <ul>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Kayıt Durumu Açık</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Kayıt Durumu Kapalı</span></label>
                </li>
              </ul>
            </div>
          </div>
          <div ng-repeat="filterGroup in tournament.filterList track by $index" class="casino-tournament-filter no-select-j" ng-class="{'active': filterGroup.expanded}" ng-mouseover="filterGroup.expanded=true" ng-mouseleave="filterGroup.expanded=false">
            <p ng-click="filterGroup.expanded=!filterGroup.expanded"><span>Giriş Türü</span> <span></span></p>
            <div>
              <ul>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Buy-in</span></label>
                </li>
                <li ng-repeat="filter in filterGroup.filters track by $index">
                  <label><input ng-model="filter.active" ng-change="updateFilters(filterGroup, filter)" type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty"> <span>Ücretsiz</span></label>
                </li>
              </ul>
            </div>
          </div>
          <button ng-show="false" class="casino-tournaments-filters-reset ng-hide" ng-click="getTournamentList()"></button>
        </div>
        <div class="casino-tournaments-games">
          <div class="ct-games-no-results" ng-if="tournament.filteredList" trans="">Seçilen filtrelerin bulunduğu turnuva yok.</div>
          <div class="casino-tournament-game live" ng-repeat="item in tournament.filteredList track by item.Id" ng-if="tournament.casinoGames[item.Id].length > 0" ng-class="{finished: item.Stage === 1, live: item.Stage === 2, upcoming: item.Stage === 3, canceled : item.Stage === -1}" ng-click="selectTournament(item.Id)">
            <ul>
              <li>
                <div class="ctournament-image-wrapper xlinkx hp-slider-17">
                  <figure style="background-image: url(https://ca-ft.trexname.com/RGS/Tournament/6173/1/en/30F3FC9F.jpg);"></figure>
                  <div class="ct-game-prize-amount">36,245.23 TRY</div>
                  <counter start="2022-11-28T19:59:00" finish-text="" class="status-color">
                    <div class="ct-game-countdown">
                      <ul ng-show="timer.time > 0">
                        <li><strong>4</strong> <span>G</span></li>
                        <li class="has-dot"><strong>01</strong> <span>S</span></li>
                        <li class="has-dot has-dot-blink"><strong>09</strong> <span>D</span></li>
                        <li><strong>54</strong> <span>S</span></li>
                      </ul>
                      <ul ng-show="timer.time <= 0" class="counter-status-msg finished ng-hide">
                        <li><strong>Sona erdi</strong></li>
                      </ul>
                    </div>
                  </counter>
                  <div class="hp-slider-pagination ng-hide" ng-show="item.LobbyBannerImagesFiltered.length > 1">
                    <button ng-click="tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] - 1;tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] < 0 ? item.LobbyBannerImagesFiltered.length - 1 : tournament.sliderIndex[item.Id];$event.stopPropagation();"></button>
                    <button ng-click="tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] + 1;tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] > item.LobbyBannerImagesFiltered.length - 1 ? 0 : tournament.sliderIndex[item.Id];$event.stopPropagation();"></button>
                  </div>
                </div>
              </li>
              <li>
                <div class="ctournament-detailed-info">
                  <ul class="ctournament-title-table">
                    <li>ELYSIUM WORLD</li>
                    <li><button class="xlinkx" ng-click="participateInTournament(item);$event.stopPropagation()" ng-disabled="!item.canParticipate || item.IsParticipated">Katıl</button></li>
                  </ul>
                  <p>
                    <span ng-bind-html="item.Description.substring(0,400)|html">
                      Oyuncuların turnuvanın bir parçası olmak için KATILMASI gerekir. Kayıt ücretsizdir ve turnuva sonuna kadar açıktır. Oyuncuların Turnuvaya hak kazanmak için promosyon süresi boyunca gerçek parayla uygun oyunları
                      oynaması gerekir. Bu turnuva için min. bahis miktarı bu sayfada yukarıda gösterilmektedir. Gösterilen miktardan daha az olan bahisler puan hesabına katılmaz. Turnuvanın Puan Hesaplaması: "C
                    </span>
                    <span ng-click="tournament.readMore='true'" ng-show="item.Description.length >= 400">... <a trans="">Daha fazla oku</a></span>
                  </p>
                  <ul class="ctournament-status-boxes">
                    <li>
                      <p><span trans="">Durum</span></p>
                      <p class="status-color">
                        <strong ng-show="item.Stage == 1" trans="" class="ng-hide">Sona erdi</strong> <strong ng-show="item.Stage == 2" trans="">Canlı Turnuva</strong>
                        <strong ng-show="item.Stage == 3" trans="" class="ng-hide">Yaklaşan</strong> <strong ng-show="item.Stage == -1" trans="" class="ng-hide">İptal edildi</strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">KAYIT BAŞLANGIÇ-BİTİŞ</span></p>
                      <p>
                        <strong>
                          21/11/2022 18:00<br>
                          28/11/2022 22:59
                        </strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">TURNUVA BAŞLANGIÇ-BİTİŞ</span></p>
                      <p>
                        <strong>
                          21/11/2022 23:01<br>
                          28/11/2022 22:59
                        </strong>
                      </p>
                    </li>
                    <li title="Registered Players/Min. N. of Players" trans="attr-only">
                      <p><span trans="">Oyuncular</span></p>
                      <p>
                        <strong>4559 <span>/</span> 1</strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">SATIN ALMA + ÜCRET</span></p>
                      <p><strong>0 TRY</strong></p>
                    </li>
                  </ul>
                  <div class="ctournament-containing-games">
                    <div class="all-casino-games-list-box" show-conditions="true" games-list="tournament.casinoGames[item.Id]" game-show-conditions="true" use-big-icons="true">
                      <div class="all-games-container" ng-if="!jackpotGames &amp;&amp; showConditions">
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Spirit Hunters" alt="Spirit Hunters" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/cfb134df4c4c6e753866d90302d231af_casinoGameIcon3.jpg" src="https://cmsbetconstruct.com/content/images/casino/icon3/cfb134df4c4c6e753866d90302d231af_casinoGameIcon3.jpg">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Spirit Hunters">Spirit Hunters</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Clash of Heroes" alt="Clash of Heroes" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/9917d6a72d55971ac951f0c7e29bbdbe_casinoGameIcon3.jpg" src="https://cmsbetconstruct.com/content/images/casino/icon3/9917d6a72d55971ac951f0c7e29bbdbe_casinoGameIcon3.jpg">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Clash of Heroes">Clash of Heroes</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Sword King" alt="Sword King" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/2688f6552b585968c8e850f7d07f50c6_casinoGameIcon3.jpg" src="https://cmsbetconstruct.com/content/images/casino/icon3/2688f6552b585968c8e850f7d07f50c6_casinoGameIcon3.jpg">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Sword King">Sword King</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Battle of Myths" alt="Battle of Myths" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/7495562c64de2cee98ec71408d6a8a46_casinoGameIcon3.jpg" src="https://cmsbetconstruct.com/content/images/casino/icon3/7495562c64de2cee98ec71408d6a8a46_casinoGameIcon3.jpg">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Battle of Myths">Battle of Myths</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                      </div>
                    </div>
                    <ul ng-show="tournament.casinoGamesCount[item.Id] > 5">
                      <li class="ctournament-view-more">
                        <div>
                          <p>+3</p>
                          <span trans="">Hepsini Göster</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="casino-tournament-game live" ng-repeat="item in tournament.filteredList track by item.Id" ng-if="tournament.casinoGames[item.Id].length > 0" ng-class="{finished: item.Stage === 1, live: item.Stage === 2, upcoming: item.Stage === 3, canceled : item.Stage === -1}" ng-click="selectTournament(item.Id)">
            <ul>
              <li>
                <div class="ctournament-image-wrapper xlinkx hp-slider-17">
                  <figure style="background-image: url(https://ca-ft.trexname.com/RGS/Tournament/5998/1/en/5182F44F.jpg);"></figure>
                  <div class="ct-game-prize-amount">108,735.7 TRY</div>
                  <counter start="2022-12-02T19:59:00" finish-text="" class="status-color">
                    <div class="ct-game-countdown">
                      <ul ng-show="timer.time > 0">
                        <li><strong>8</strong> <span>G</span></li>
                        <li class="has-dot"><strong>01</strong> <span>S</span></li>
                        <li class="has-dot has-dot-blink"><strong>09</strong> <span>D</span></li>
                        <li><strong>53</strong> <span>S</span></li>
                      </ul>
                      <ul ng-show="timer.time <= 0" class="counter-status-msg finished ng-hide">
                        <li><strong>Sona erdi</strong></li>
                      </ul>
                    </div>
                  </counter>
                  <div class="hp-slider-pagination ng-hide" ng-show="item.LobbyBannerImagesFiltered.length > 1">
                    <button ng-click="tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] - 1;tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] < 0 ? item.LobbyBannerImagesFiltered.length - 1 : tournament.sliderIndex[item.Id];$event.stopPropagation();"></button>
                    <button ng-click="tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] + 1;tournament.sliderIndex[item.Id] = tournament.sliderIndex[item.Id] > item.LobbyBannerImagesFiltered.length - 1 ? 0 : tournament.sliderIndex[item.Id];$event.stopPropagation();"></button>
                  </div>
                </div>
              </li>
              <li>
                <div class="ctournament-detailed-info">
                  <ul class="ctournament-title-table">
                    <li>World Cup Group Stage</li>
                    <li><button class="xlinkx" ng-click="participateInTournament(item);$event.stopPropagation()" ng-disabled="!item.canParticipate || item.IsParticipated">Katıl</button></li>
                  </ul>
                  <p>
                    <span ng-bind-html="item.Description.substring(0,400)|html">
                      Oyuncular, uygun oyunlardan birine bahis yaptıkları andan itibaren otomatik olarak katılacaklardır. Kayıt ücretsizdir ve turnuva sonuna kadar açıktır. Oyuncuların Turnuvaya hak kazanmak için promosyon süresi boyunca
                      gerçek parayla uygun oyunları oynaması gerekir. Bu turnuva için min. bahis miktarı bu sayfada yukarıda gösterilmektedir. Gösterilen miktardan daha az olan bahisler puan hesabına katılm
                    </span>
                    <span ng-click="tournament.readMore='true'" ng-show="item.Description.length >= 400">... <a trans="">Daha fazla oku</a></span>
                  </p>
                  <ul class="ctournament-status-boxes">
                    <li>
                      <p><span trans="">Durum</span></p>
                      <p class="status-color">
                        <strong ng-show="item.Stage == 1" trans="" class="ng-hide">Sona erdi</strong> <strong ng-show="item.Stage == 2" trans="">Canlı Turnuva</strong>
                        <strong ng-show="item.Stage == 3" trans="" class="ng-hide">Yaklaşan</strong> <strong ng-show="item.Stage == -1" trans="" class="ng-hide">İptal edildi</strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">KAYIT BAŞLANGIÇ-BİTİŞ</span></p>
                      <p>
                        <strong>
                          09/11/2022 20:20<br>
                          02/12/2022 22:59
                        </strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">TURNUVA BAŞLANGIÇ-BİTİŞ</span></p>
                      <p>
                        <strong>
                          17/11/2022 23:01<br>
                          02/12/2022 22:59
                        </strong>
                      </p>
                    </li>
                    <li title="Registered Players/Min. N. of Players" trans="attr-only">
                      <p><span trans="">Oyuncular</span></p>
                      <p>
                        <strong>349888 <span>/</span> 1</strong>
                      </p>
                    </li>
                    <li>
                      <p><span trans="">SATIN ALMA + ÜCRET</span></p>
                      <p><strong>0 TRY</strong></p>
                    </li>
                  </ul>
                  <div class="ctournament-containing-games">
                    <div class="all-casino-games-list-box" show-conditions="true" games-list="tournament.casinoGames[item.Id]" game-show-conditions="true" use-big-icons="true">
                      <div class="all-games-container" ng-if="!jackpotGames &amp;&amp; showConditions">
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Yummy" alt="Yummy" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/15044aa52c6f0eed5174dae98797d642_casinoGameIcon3.gif" src="https://cmsbetconstruct.com/content/images/casino/icon3/15044aa52c6f0eed5174dae98797d642_casinoGameIcon3.gif">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Yummy">Yummy</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Fruit Ball" alt="Fruit Ball" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/5e97c266b9f717172d555e97e8204a05_casinoGameIcon3.gif" src="https://cmsbetconstruct.com/content/images/casino/icon3/5e97c266b9f717172d555e97e8204a05_casinoGameIcon3.gif">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Fruit Ball">Fruit Ball</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Poki Wild" alt="Poki Wild" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/b4005ef0b17a4424e28215c895042e7d_casinoGameIcon3.gif" src="https://cmsbetconstruct.com/content/images/casino/icon3/b4005ef0b17a4424e28215c895042e7d_casinoGameIcon3.gif">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Poki Wild">Poki Wild</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                        <a ng-repeat="game in gamesList track by game.id" data-badge="" class="" ng-class="{'disabled' : confData.main.disableAgeRestrictedGames &amp;&amp; game.has_age_restriction &amp;&amp; !$root.env.authorized}">
                          <img title="Gold of Egypt" alt="Gold of Egypt" ng-src="https://cmsbetconstruct.com/content/images/casino/icon3/e2231b0f7d7ac2734ec6e7f4321550ec_casinoGameIcon3.gif" src="https://cmsbetconstruct.com/content/images/casino/icon3/e2231b0f7d7ac2734ec6e7f4321550ec_casinoGameIcon3.gif">
                          <span class="games-buttons xlinkx">
                            <strong>
                              <button ng-click="openGame(game, 'real'); $event.stopPropagation();" ng-if="game.types.realMode" trans="">Şimdi Oyna</button>
                              <button ng-if="game.types.funMode &amp;&amp; (confData.main.funModeEnabled === 2 &amp;&amp; $root.env.authorized || confData.main.funModeEnabled === 1 || (confData.main.funModeEnabled === 3 &amp;&amp; $root.profile.is_verified))" ng-click="openGame(game, 'fun'); $event.stopPropagation();" trans="">
                                Eğlence için oyna
                              </button>
                            </strong>
                          </span>
                          <p class="games-name ellipsis-text" title="Gold of Egypt">Gold of Egypt</p>
                          <i class="games-favorite-icon" ng-show="!hideFavoriteButton" ng-click="toggleSaveToMyCasinoGames(game); $event.stopPropagation();" ng-class="{'active': $root.myCasinoGamesIds[game.id]}"></i>
                          <b ng-show="showDeleteBtn" ng-click="removeGameFromSaved(game.id); $event.stopPropagation();" class="games-close-fav ng-hide"></b>
                        </a>
                      </div>
                    </div>
                    <ul ng-show="tournament.casinoGamesCount[item.Id] > 5">
                      <li class="ctournament-view-more">
                        <div>
                          <p>+62</p>
                          <span trans="">Hepsini Göster</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </ng-include>
  <multiview-control ng-if="confData.main.multiViewEnabled" wide-mode="wideMode" middle-mode="middleMode" view-count="viewCount" games-info="gamesInfo">
    <div ng-show="gamesInfo.length &amp;&amp; gamesInfo[0].gameType.ratio !== '0'" class="ng-hide">
      <ul class="casino-view" ng-show="middleMode || wideMode">
        <li ng-class="{'selectedView' : viewCount === 1}" class="selectedView"><a ng-click="changeView(1)" title="Bir oyun görünümü"></a></li>
        <li ng-class="{'selectedView' : viewCount === 2}"><a ng-click="changeView(2)" title="İki oyun görünümü"></a></li>
        <li ng-show="wideMode &amp;&amp; confData.main.fourGameViewEnable" ng-class="{'selectedView' : viewCount === 4}"><a ng-click="changeView(4)" title="Dört oyun görünümü"></a></li>
        <li class="close-all-button"><a ng-click="changeView(0)" title="Close all"></a></li>
      </ul>
    </div>
    <div class="popup-bg-contain" ng-class="{'active': selectedCategory}">
      <div class="deposit-alert-contain casino popup-multigame-b">
        <div class="icon-delete"><a title="kapat" ng-click="closePopUp();">Close</a></div>
        <div class="text-deposit-alert">
          <div class="country-b casino-popup" ng-show="showMultiViewDropdown">
            <div class="country-block-contain popup">
              <ul class="countrylist">
                <div class="contaien-country" data-step="3" data-position="bottom" data-intro="Bölge seçiniz" trans="attr-only">
                  <li ng-show="$root.calculatedConfigs.casinoEnabled">
                    <a ng-click="selectCategory('all')" ng-class="{'active': selectedCategory === 'all'}"><span trans="">Casino oyunları</span></a>
                  </li>
                  <li ng-show="$root.calculatedConfigs.livedealerEnabled">
                    <a ng-click="selectCategory(confData.liveCasino.categoryId)" ng-class="{'active': selectedCategory === confData.liveCasino.categoryId}"><span trans="">CANLI CASİNO</span></a>
                  </li>
                  <li ng-show="$root.calculatedConfigs.skillgamesEnabled">
                    <a ng-click="selectCategory(confData.skillGames.categoryId)" ng-class="{'active': selectedCategory === confData.skillGames.categoryId}"><span trans="">Yetenek oyunları</span></a>
                  </li>
                  <li ng-show="$root.calculatedConfigs.casinoEnabled">
                    <a ng-click="selectCategory(confData.virtualBetting.categoryId)" ng-class="{'active': selectedCategory === confData.virtualBetting.categoryId}"><span trans="">Sanal oyunlar</span></a>
                  </li>
                  <li ng-show="$root.calculatedConfigs.tvGamesEnabled">
                    <a ng-click="selectCategory(confData.tvGames.categoryId)" ng-class="{'active': selectedCategory === confData.tvGames.categoryId}"><span trans="">Tv Games</span></a>
                  </li>
                </div>
              </ul>
            </div>
          </div>
          <div class="Featured-casino-games">
            <div class="contein-slider live-casino-header">
              <div ng-show="selectedCategory !== confData.liveCasino.categoryId" class="games-slider">
                <h3 trans="">Bütün çoklu görünüm oyunları</h3>
                <div class="casino-multisearch">
                  <span trans="">Arama</span> <input ng-disabled="selectedCategory === confData.liveCasino.categoryId" type="search" ng-model="searchCommand" class="ng-pristine ng-untouched ng-valid ng-empty">
                </div>
                <div class="casino-games-list">
                  <div class="all-games-casino-list" show-conditions="true" games-list="games" games-limit="2000" game-show-conditions="true" use-big-icons="true">
                    <div class="all-games-container" ng-if="!jackpotGames &amp;&amp; showConditions"></div>
                  </div>
                  <div class="load-more-news multiview ng-hide" ng-show="gamesLimit < maxCount &amp;&amp; selectedCategory !== confData.liveCasino.categoryId">
                    <a ng-click="loadMoreGames()" ng-class="{'loading-more': loadingProcess}">
                      <p trans="">Daha fazla</p>
                      <span></span>
                    </a>
                  </div>
                  <div ng-show="games.length === 0 &amp;&amp; !loadingProcess &amp;&amp; selectedCategory !== confData.liveCasino.categoryId" class="no-games"><p trans="">Hiç bir oyun bulunamadı</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </multiview-control>
</div>




        
      </div>