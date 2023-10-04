<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container">
        


<div class="new-default-popup-j" ng-escape="env.showSlider=false; env.sliderContent='';">
  <div class="all-history-lightbox-contain">
    <div class="all-history-lightbox-content">
      <div class="all-main-tabs-b">
        <ul>
          <li onclick="window.location='profil.php';" ng-class="{'active': env.sliderContent === 'settings'}" ng-click="env.sliderContent = 'settings'" ng-if="env.authorized &amp;&amp; !partnerConfig.profileNotAvailable">
            <i class="profile-icon-tab-b"></i>
            <p>
              <i trans="">Profilim</i> <span class="id-view-tab">ID: 998521129</span>
              <i class="profile-id-copy" ng-class="{'profile-id-copied':copyIdState}" ng-click="$event.stopPropagation(); !copyIdState &amp;&amp; copyIdToClipboard(); " title="Copy"></i>
            </p>
          </li>
          <li ng-class="{'active': ['deposit', 'withdraw', 'balanceHistory', 'casinoBalanceHistory', 'cashier', 'myWallets', 'buddytransfer','depositRequest'].indexOf(env.sliderContent) !== -1}" ng-if="conf.enableMixedView &amp;&amp; conf.enableMixedViewBalance" ng-click="env.sliderContent !== 'withdraw' &amp;&amp; env.sliderContent !== 'deposit' &amp;&amp; env.sliderContent !== 'balanceHistory' ? env.sliderContent = conf.balanceDefaultPage:''" class="active">
            <i class="balance-icon-tab-b"></i>
            <p><i trans="">Bakiye</i> <span class="balance-view-tab">0.00 TRY</span></p>
          </li>
          <li onclick="window.location='mybets.php';" style="cursor: pointer;">
            <i class="my-bets-icon-tab-b"></i>
            <h4 trans="">Bahislerim</h4>
          </li>
          <li ng-class="{'active': env.sliderContent === 'promotionalBonuses'}" ng-click="env.sliderContent = 'promotionalBonuses'" ng-if="conf.promotionalBonuses.enable &amp;&amp; env.authorized &amp;&amp; ($root.profile.is_bonus_allowed !== false) &amp;&amp; (!conf.hideBonusSectionIfNoBonus || (conf.hideBonusSectionIfNoBonus &amp;&amp; $root.allBonusesCount.sportsbook + $root.allBonusesCount.casino + $root.allBonusesCount.freeSpins> 0))" onclick="window.location='mybonus.php';">
            <i class="bonuses-icon-tab-b"></i>
            <h4 trans="">Bonuslar</h4>
          </li>
        </ul>
        <div ng-show="!isPopup" ng-click="env.sliderContent=''; env.showSlider=false;" class="my-bets-closed-icon-b" onclick="window.location='./';"></div>
      </div>
      <ng-include class="float-width mixed-view-holder" src="::'templates/livebox/mixedBalance.html'|fixPath" ng-if="['deposit', 'withdraw', 'balanceHistory', 'casinoBalanceHistory', 'cashier', 'myWallets', 'buddytransfer','depositRequest'].indexOf(env.sliderContent) !== -1">



<div class="mixed-view-content" ng-controller="mixedBalanceCtrl"><div class="mixed-view-head" ng-init="env.paymentsSubTub = 'paymentsMainPage'"><div class="group-tabs-wrapper"><div class="first-level-history-tab">

                <ul>
                  <li ng-click="env.sliderContent = 'deposit'; env.paymentsSubTub = 'paymentsMainPage';" ng-class="{'active':env.sliderContent === 'deposit'}" ng-if="!conf.disableDepositPage" class="" onclick="window.location='deposit';">
                    <span trans="">Para Yatırma</span>
                  </li>
                  <li ng-click="env.sliderContent = 'balanceHistory'; env.paymentsSubTub = 'paymentsMainPage';" ng-class="{'active':env.sliderContent === 'balanceHistory'}" ng-if="env.authorized" onclick="window.location='withdraw';">
                    <span trans="">Para Çekme </span>
                  </li>
                  <li class="active" ng-click="env.sliderContent = 'balanceHistory'; env.paymentsSubTub = 'paymentsMainPage';" ng-class="{'active':env.sliderContent === 'balanceHistory'}" ng-if="env.authorized"><span trans="" onclick="window.location='paymenthistory';">İşlem Geçmişi</span></li>
                </ul>

</div><!----><!----><div class="float-width" ng-if="env.authorized &amp;&amp; env.sliderContent === 'balanceHistory'"><!----><div class="all-history-filter-container"><div class="filter-columns-container" ng-init="boxStates={categoryDropdownOpened: false, transactionDropdownOpened: false, openedFrom: false, openedTo: false}"><ul><li ng-show="balanceHistoryFilter === 'all'"><p trans="">İşlem Tipi</p><div class="select-box-period-b" ng-click="boxStates.transactionDropdownOpened=!boxStates.transactionDropdownOpened;boxStates.openedTo = false; boxStates.openedFrom = false; boxStates.categoryDropdownOpened = false;" ng-class="{'active': boxStates.transactionDropdownOpened}"><p>Hepsi</p><ul><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Para çekme talebi</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Oto yatırım</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Para çekimi reddedilmiştir</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Bahis</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Nakit Çıkışı</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Bahis Kazancı</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Kazancın Azaltması</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Bahis İadesi</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Müşteri Bonusunun Ödemesi</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Casino Slot Cashback Bonusu</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Nakit Bakiye Eklemesi</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Düzeltme Alt</li><!----><!----><!----><li ng-repeat="(key, value) in balanceHistoryParams.balanceTypes track by $index" ng-if="value !== null" ng-click="balanceHistoryParams.balanceType=key;boxStates.transactionDropdownOpened = false; $event.stopPropagation();">Hepsi</li><!----><!----></ul></div></li><li ng-show="balanceHistoryFilter === 'all' &amp;&amp; balanceHistoryParams.availableProducts[0] &amp;&amp; balanceHistoryParams.availableProducts[1]" class="ng-hide"><p trans="">Kategori</p><div class="select-box-period-b" ng-click="boxStates.categoryDropdownOpened=!boxStates.categoryDropdownOpened;boxStates.openedTo = false; boxStates.openedFrom = false; boxStates.transactionDropdownOpened = false;" ng-class="{'active': boxStates.categoryDropdownOpened}"><p>Ana</p><ul><!----><li ng-repeat="(key, value) in balanceHistoryParams.availableProducts track by $index" ng-click="changeBalanceCategory(key); boxStates.transactionDropdownOpened = false;">Ana</li><!----></ul></div></li></ul><!----><ul ng-include="::'templates/livebox/historyFilter.html'|fixPath"><li class="range-filter-box"><p trans="">Tarih Aralığı</p><div class="mini-form-box-b"><div class="date-picker-b"><div class="picker-contain"><div class="input-group" ng-click="boxStates.openedFrom = !boxStates.openedFrom;boxStates.openedTo = false; boxStates.transactionDropdownOpened = false;boxStates.categoryDropdownOpened = false;"><input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-date ng-valid-required" placeholder="Nerden" datepicker-popup="dd/MM/yyyy" min-date="datePickerLimits.minFromDate" max-date="datePickerLimits.maxFromDate || today" ng-model="requestData.dateFrom" is-open="boxStates.openedFrom" disabled="" datepicker-options="dateOptions" ng-change="adjustDate('from')" ng-required="true" close-text="Close" required="required"><ul class="dropdown-menu ng-not-empty ng-valid ng-valid-date ng-valid-date-disabled" ng-style="{display: (isOpen &amp;&amp; 'block') || 'none', top: position.top+'px', left: position.left+'px'}" ng-keydown="keydown($event)" datepicker-popup-wrap="" ng-model="date" ng-change="dateSelection()" style="display: none;">
  <li ng-transclude=""><div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)" datepicker="" show-weeks="false" min-date="watchData.minDate" max-date="watchData.maxDate">
  <!----><table role="grid" aria-labelledby="datepicker-1565-5918-title" aria-activedescendant="datepicker-1565-5918-19" ng-switch-when="day" tabindex="0">
  <thead>
    <tr>
      <th><button type="button" class="btn btn-default btn-sm pull-left" ng-click="move(-1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></button></th>
      <th colspan="5"><button id="datepicker-1565-5918-title" role="heading" aria-live="assertive" aria-atomic="true" type="button" class="btn btn-default btn-sm" ng-click="toggleMode()" tabindex="-1" style="width:100%;"><strong>Kasım 2022</strong></button></th>
      <th><button type="button" class="btn btn-default btn-sm pull-right" ng-click="move(1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-right"></i></button></th>
    </tr>
    <tr>
      <th ng-show="showWeeks" class="text-center ng-hide"></th>
      <!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazar">Paz</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazartesi">Pts</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Salı">Sal</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Çarşamba">Çar</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Perşembe">Per</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cuma">Cum</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cumartesi">Cts</small></th><!---->
    </tr>
  </thead>
  <tbody>
    <!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-0" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">30</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-1" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">31</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-2" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">01</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-3" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">02</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-4" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">03</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-5" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">04</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-6" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">05</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-7" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">06</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-8" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">07</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-9" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">08</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-10" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">09</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-11" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">10</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-12" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">11</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-13" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">12</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-14" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">13</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-15" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">14</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-16" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">15</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-17" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">16</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-18" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">17</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-19" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm btn-info active" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">18</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-20" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">19</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-21" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">20</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-22" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">21</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-23" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">22</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-24" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">23</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-25" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">24</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-26" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-info">25</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-27" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">26</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-28" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">27</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-29" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">28</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-30" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">29</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-31" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">30</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-32" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">01</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-33" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">02</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-34" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">03</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-35" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">04</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-36" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">05</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-37" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">06</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-38" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">07</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-39" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">08</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-40" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">09</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1565-5918-41" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">10</span></button>
      </td><!---->
    </tr><!---->
  </tbody>
</table><!---->
  <!---->
  <!---->
</div></li>
  <!----><li ng-if="showButtonBar" style="padding:10px 9px 2px">
    <span class="btn-group pull-left">
      <button type="button" class="btn btn-sm btn-info" ng-click="select('today')">Today</button>
      <button type="button" class="btn btn-sm btn-danger" ng-click="select(null)">Clear</button>
    </span>
    <button type="button" class="btn btn-sm btn-success pull-right" ng-click="close()">Close</button>
  </li><!---->
</ul> <span class="input-group-btn"><button type="button" class="btn btn-default date-view" ng-click="boxStates.openedFrom = !boxStates.openedFrom;boxStates.openedTo = false; boxStates.transactionDropdownOpened = false;boxStates.categoryDropdownOpened = false;$event.stopPropagation();"><i class="date-p"></i></button></span></div></div></div></div></li><!----><li ng-if="!hideToFilter"><p></p><div class="mini-form-box-b"><div class="date-picker-b"><div class="picker-contain"><div class="input-group" ng-click="boxStates.openedTo = !boxStates.openedTo;boxStates.openedFrom = false; boxStates.transactionDropdownOpened = false;boxStates.categoryDropdownOpened = false;"><input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-date ng-valid-required" placeholder="Nereye" datepicker-popup="dd/MM/yyyy" min-date="datePickerLimits.minToDate" max-date="datePickerLimits.maxToDate || today" ng-model="requestData.dateTo" is-open="boxStates.openedTo" disabled="" datepicker-options="dateOptions" ng-change="adjustDate('to')" ng-required="true" close-text="Close" required="required"><ul class="dropdown-menu ng-not-empty ng-valid ng-valid-date ng-valid-date-disabled" ng-style="{display: (isOpen &amp;&amp; 'block') || 'none', top: position.top+'px', left: position.left+'px'}" ng-keydown="keydown($event)" datepicker-popup-wrap="" ng-model="date" ng-change="dateSelection()" style="display: none;">
  <li ng-transclude=""><div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)" datepicker="" show-weeks="false" min-date="watchData.minDate" max-date="watchData.maxDate">
  <!----><table role="grid" aria-labelledby="datepicker-1626-1139-title" aria-activedescendant="datepicker-1626-1139-26" ng-switch-when="day" tabindex="0">
  <thead>
    <tr>
      <th><button type="button" class="btn btn-default btn-sm pull-left" ng-click="move(-1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></button></th>
      <th colspan="5"><button id="datepicker-1626-1139-title" role="heading" aria-live="assertive" aria-atomic="true" type="button" class="btn btn-default btn-sm" ng-click="toggleMode()" tabindex="-1" style="width:100%;"><strong>Kasım 2022</strong></button></th>
      <th><button type="button" class="btn btn-default btn-sm pull-right" ng-click="move(1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-right"></i></button></th>
    </tr>
    <tr>
      <th ng-show="showWeeks" class="text-center ng-hide"></th>
      <!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazar">Paz</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazartesi">Pts</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Salı">Sal</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Çarşamba">Çar</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Perşembe">Per</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cuma">Cum</small></th><!----><th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cumartesi">Cts</small></th><!---->
    </tr>
  </thead>
  <tbody>
    <!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-0" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">30</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-1" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">31</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-2" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">01</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-3" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">02</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-4" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">03</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-5" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">04</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-6" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">05</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-7" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">06</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-8" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">07</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-9" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">08</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-10" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">09</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-11" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">10</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-12" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">11</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-13" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">12</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-14" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">13</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-15" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">14</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-16" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">15</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-17" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">16</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-18" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">17</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-19" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">18</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-20" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">19</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-21" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">20</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-22" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">21</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-23" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">22</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-24" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">23</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-25" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">24</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-26" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm btn-info active" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-info">25</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-27" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">26</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-28" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">27</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-29" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">28</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-30" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">29</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-31" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">30</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-32" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">01</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-33" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">02</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-34" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">03</span></button>
      </td><!---->
    </tr><!----><tr ng-repeat="row in rows track by $index">
      <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
      <!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-35" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">04</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-36" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">05</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-37" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">06</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-38" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">07</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-39" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">08</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-40" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">09</span></button>
      </td><!----><td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-1626-1139-41" aria-disabled="true">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled"><span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">10</span></button>
      </td><!---->
    </tr><!---->
  </tbody>
</table><!---->
  <!---->
  <!---->
</div></li>
  <!----><li ng-if="showButtonBar" style="padding:10px 9px 2px">
    <span class="btn-group pull-left">
      <button type="button" class="btn btn-sm btn-info" ng-click="select('today')">Today</button>
      <button type="button" class="btn btn-sm btn-danger" ng-click="select(null)">Clear</button>
    </span>
    <button type="button" class="btn btn-sm btn-success pull-right" ng-click="close()">Close</button>
  </li><!---->
</ul> <span class="input-group-btn"><button type="button" class="btn btn-default date-view" ng-click="boxStates.openedTo = !boxStates.openedTo;boxStates.openedFrom = false; boxStates.transactionDropdownOpened = false;boxStates.categoryDropdownOpened = false;$event.stopPropagation();"><i class="date-p"></i></button></span></div></div></div></div></li><!----></ul><ul><!----></ul></div><div class="mybets-filter-show-b"><button trans="" ng-click="balanceHistoryFilter === 'all' ? loadMixedBalanceHistory() : loadNetDeposit()" ng-disabled="!balanceHistoryLoaded">GÖSTER</button></div></div></div><!----></div></div><div class="mixed-view-body"><div class="mixed-view-body-ins"><div class="balance-lightbox-j"><!----><!----><!----><!----><!----><section ng-if="env.sliderContent === 'balanceHistory'"><div class="md-progress-circular md-theme ng-hide" ng-show="!balanceHistoryLoaded || !balanceHistoryTypesLoaded"></div><!----><ng-include ng-show="balanceHistoryLoaded &amp;&amp; balanceHistoryTypesLoaded" src="::'templates/livebox/mixedBalanceHistory.html'|fixPath" class=""><div class="mixed-history-table no-padding" ng-init="initMixedBalanceHistory($root.conf.enableCasinoBalanceHistory);"><table><thead><tr><th class="date-id" trans="">Tarih ve ID</th><!----><th class="auto-cell"><div class="cell-inner" trans="">Tür</div></th><th class="hh-cell" trans="">Miktar</th><th class="hh-cell" trans="" ng-bind="(balanceHistoryFilter === 'all' ? 'Final Balance' : 'Payment Method')|translate">Toplam Miktar</th></tr></thead><!----><!----><!----><tbody ng-if="(balanceHistoryFilter === 'net' &amp;&amp; netDepositHistory.length === 0) || (balanceHistoryFilter === 'all' &amp;&amp; balanceHistory.length === 0)"><tr><td colspan="9" class="second-color center-text" trans="">There are no data for the selected time period.</td></tr></tbody><!----></table></div><div class="load-more-j ng-hide" ng-show="balanceHistoryIsMoreItemsAvailable() &amp;&amp; balanceHistoryFilter !== 'net'"><p take-parent-scroll="true" ng-click="balanceHistoryLoadMoreInfo(); "><span trans="">Daha fazla</span></p></div></ng-include></section><!----><!----></div></div></div></div>





      </ng-include>
    </div>
  </div>
</div>



        
      </div>