<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container">
        

<div class="new-default-popup-j" ng-escape="env.showSlider=false; env.sliderContent='';">
  <div class="all-history-lightbox-contain">
    <div class="all-history-lightbox-content">
      <div class="all-main-tabs-b">
        <ul>
          <li onclick="window.location='account';" ng-class="{'active': env.sliderContent === 'settings'}" ng-click="env.sliderContent = 'settings'" ng-if="env.authorized &amp;&amp; !partnerConfig.profileNotAvailable">
            <i class="profile-icon-tab-b"></i>
            <p>
              <i trans="">Profilim</i> <span class="id-view-tab">ID: 998521129</span>
              <i class="profile-id-copy" ng-class="{'profile-id-copied':copyIdState}" ng-click="$event.stopPropagation(); !copyIdState &amp;&amp; copyIdToClipboard(); " title="Copy"></i>
            </p>
          </li>
          <li onclick="window.location='deposit';" ng-class="{'active': ['deposit', 'withdraw', 'balanceHistory', 'casinoBalanceHistory', 'cashier', 'myWallets', 'buddytransfer','depositRequest'].indexOf(env.sliderContent) !== -1}" ng-if="conf.enableMixedView &amp;&amp; conf.enableMixedViewBalance" ng-click="env.sliderContent !== 'withdraw' &amp;&amp; env.sliderContent !== 'deposit' &amp;&amp; env.sliderContent !== 'balanceHistory' ? env.sliderContent = conf.balanceDefaultPage:''">
            <i class="balance-icon-tab-b"></i>
            <p><i trans="">Bakiye</i> <span class="balance-view-tab"><?=$us['balance']?> TRY</span></p>
          </li>
          <li onclick="window.location='bethistory';" style="cursor: pointer;">
            <i class="my-bets-icon-tab-b"></i>
            <h4 trans="">Bahislerim</h4>
          </li>
          <li ng-class="{'active': env.sliderContent === 'promotionalBonuses'}" ng-click="env.sliderContent = 'promotionalBonuses'" ng-if="conf.promotionalBonuses.enable &amp;&amp; env.authorized &amp;&amp; ($root.profile.is_bonus_allowed !== false) &amp;&amp; (!conf.hideBonusSectionIfNoBonus || (conf.hideBonusSectionIfNoBonus &amp;&amp; $root.allBonusesCount.sportsbook + $root.allBonusesCount.casino + $root.allBonusesCount.freeSpins> 0))" class="active">
            <i class="bonuses-icon-tab-b"></i>
            <h4 trans="">Bonuslar</h4>
          </li>
        </ul>
        <div ng-show="!isPopup" ng-click="env.sliderContent=''; env.showSlider=false;" class="my-bets-closed-icon-b" onclick="window.location='./';"></div>
      </div>
      <ng-include class="float-width mixed-view-holder" src="::'templates/livebox/promotionalBonuses/main.html'|fixPath" ng-if="env.sliderContent === 'promotionalBonuses'">
        <div class="mixed-view-content" ng-controller="promotionalBonusCtrl">
          <div class="bonus-promo-code" ng-show="conf.promotionalBonuses.showApplyButton">
            <label>
              <span ng-bind="'Promo Code'|translate">Promosyon kodu</span> <input name="promo_code" placeholder="Promosyon kodunu buraya girin" ng-model="promoCode" type="text" class="ng-pristine ng-untouched ng-valid ng-empty">
            </label>
            <button ng-disabled="applyingBonus || loadingBonus || !promoCode" ng-hide="applyingBonus" ng-click="applyBonus()" trans="" disabled="disabled">Uygula</button>
            <button disabled="" ng-show="applyingBonus" trans="" class="ng-hide">Bekleyiniz...</button>
          </div>
          <div class="mixed-view-head" ng-show="conf.promotionalBonuses.casino || conf.promotionalBonuses.sportsbook">
            <div class="balance-view-progress-b" ng-show="conf.promotionalBonuses.casino">
              <ul ng-class="{'progress-bar-disabled' : activeBonusTab !== backendBonusConstants.BonusSource.Casino}" class="progress-bar-disabled">
                <li>
                  <div class="bonus-progress-info">
                    <div class="progress-bonus-info-box">
                      <p><span>0.00 TRY</span> <span trans="">TOPLAM BONUS</span></p>
                      <p><span ng-if="!$root.currentPage.isInCasino">0.00 TRY</span> <span trans="">ÇEKİLEBİLİR TUTAR</span></p>
                    </div>
                    <progressbar template-path="templates/livebox/promotionalBonuses/progressbar.html" class="bonus-statistic-box" progressbar-position="$root.currentPage.isInCasino &amp;&amp; profile.casino_balance !== null? (profile.calculatedBonus/profile.totalCasinoBalance * 100) :(profile.calculatedBonus/profile.totalBalance * 100)">
                      <div class="progress-bonus-view-b" ng-style="{'min-width': progressbarPositionLocal + '%'}" style="min-width: 0%;"></div>
                    </progressbar>
                  </div>
                </li>
                <li>
                  <div class="total-balance-view-b">
                    <h4 trans="">Toplam Bakiye</h4>
                    <p>0.00 TRY</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="group-tabs-wrapper">
              <div class="first-level-history-tab">
                <ul>
                  <li ng-if="conf.promotionalBonuses.sportsbook" ng-click="switchBonusTab(backendBonusConstants.BonusSource.SportsBook)" ng-class="{'active': (activeBonusTab === backendBonusConstants.BonusSource.SportsBook)}" class="active">
                    <span>spor bonusu </span>
                  </li>
                  <li ng-if="conf.promotionalBonuses.casino" ng-click="switchBonusTab(backendBonusConstants.BonusSource.Casino)" ng-class="{'active': (activeBonusTab === backendBonusConstants.BonusSource.Casino)}">
                    <span>Casino Bonusu </span>
                  </li>
                  <li ng-if="$root.partnerConfig.is_freespin_claimable &amp;&amp; conf.promotionalBonuses.casino" ng-click="switchBonusTab(backendBonusConstants.BonusSource.CasinoFreeSpins)" ng-class="{'active': (activeBonusTab === backendBonusConstants.BonusSource.CasinoFreeSpins)}">
                    <span>Casino Freespinleri </span>
                  </li>
                  <li ng-if="conf.promotionalBonuses.bonusRequestURL" ng-init="formatBonusRequestURL()" ng-click="switchBonusTab(backendBonusConstants.BonusSource.BonusRequest)" ng-class="{'active': (activeBonusTab === backendBonusConstants.BonusSource.BonusRequest)}">
                    <span>BONUS TALEP</span>
                  </li>
                  <li ng-click="switchBonusTab(backendBonusConstants.BonusSource.BonusHistory)" ng-class="{'active': (activeBonusTab === backendBonusConstants.BonusSource.BonusHistory)}"><span>BONUS GEÇMİŞİ</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="mixed-view-body">
            <div class="mixed-view-body-ins" ng-if="(activeBonusTab === backendBonusConstants.BonusSource.SportsBook) || (activeBonusTab === backendBonusConstants.BonusSource.Casino)">
              <div class="bet-view-information-box" ng-if="!loadingBonus">
                <div class="full-bet-history-information-contain bonus-contain">
                  <div class="empety-bonus-info" ng-if="!bonusList || bonusList.length == 0"><p trans="">Seçilen türde hesabınıza tanımlanan bonus bulunmamaktadır.</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </ng-include>
    </div>
  </div>
</div>




        
      </div>