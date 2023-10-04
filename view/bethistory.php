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
          <li onclick="window.location='deposit';" style="cursor: pointer;">
            <i class="balance-icon-tab-b"></i>
            <p><i trans="">Bakiye</i> <span class="balance-view-tab"><?=$us['balance']?> TRY</span></p>
          </li>
          <li onclick="window.location='bethistory';" class="active">
            <i class="my-bets-icon-tab-b"></i>
            <h4 trans="">Bahislerim</h4>
          </li>
          <li ng-class="{'active': env.sliderContent === 'promotionalBonuses'}" ng-click="env.sliderContent = 'promotionalBonuses'" ng-if="conf.promotionalBonuses.enable &amp;&amp; env.authorized &amp;&amp; ($root.profile.is_bonus_allowed !== false) &amp;&amp; (!conf.hideBonusSectionIfNoBonus || (conf.hideBonusSectionIfNoBonus &amp;&amp; $root.allBonusesCount.sportsbook + $root.allBonusesCount.casino + $root.allBonusesCount.freeSpins> 0))" onclick="window.location='bonuses';" class="">
            <i class="bonuses-icon-tab-b"></i>
            <h4 trans="">Bonuslar</h4>
          </li>
        </ul>
        <div ng-show="!isPopup" ng-click="env.sliderContent=''; env.showSlider=false;" class="my-bets-closed-icon-b" onclick="window.location='./';"></div>
      </div>
      <ng-include class="float-width mixed-view-holder" src="::'templates/livebox/mixedBetHistory.html'|fixPath" ng-if="env.sliderContent === 'recentBets' || env.sliderContent === 'casinoBetHistory'">
        <div class="mixed-view-content" ng-controller="mixedMyBetsCtrl">
          <div class="mixed-view-head">
            <div class="group-tabs-wrapper">
              <div class="second-level-history-tab">
                <ul>
                  <li ng-click="filterBetHistory()" ng-class="{'active': (betStatusFilter == undefined)}" class="active"><span trans="">Tüm Bahisler</span> <i ng-show="betEventCounts.all" class="ng-hide">0</i></li>
                  <li ng-click="filterBetHistory(0)" ng-class="{'active': (betStatusFilter == 0)}" class=""><span trans="">Açık</span> <i ng-show="betEventCounts.unsettled" class="ng-hide">0</i></li>
                  <li ng-click="filterBetHistory(5)" ng-show="partnerConfig.is_cashout_prematch || partnerConfig.is_cashout_live" ng-class="{'active': (betStatusFilter == 5)}" class="">
                    <span trans="">Bozdurulan Bahis</span> <i ng-show="betEventCounts.cashout" class="ng-hide">0</i>
                  </li>
                  <li ng-click="filterBetHistory(3)" ng-class="{'active': (betStatusFilter == 3)}"><span trans="">Kazandı</span> <i ng-show="betEventCounts.won" class="ng-hide">0</i></li>
                  <li ng-click="filterBetHistory(1)" ng-class="{'active': (betStatusFilter == 1)}" ng-show="!conf.disableLostTabInMyBets"><span trans="">Kaybetti</span> <i ng-show="betEventCounts.lost" class="ng-hide">0</i></li>
                  <li ng-click="filterBetHistory(2)" ng-class="{'active': (betStatusFilter == 2)}"><span trans="">Iade</span> <i ng-show="betEventCounts.returned" class="ng-hide">0</i></li>
                  <li ng-if="$root.conf.betHistory.enableReturnedFilter" ng-click="filterBetHistory(11)" ng-class="{'active': (betStatusFilter == 11)}">
                    <span trans="">Kazanılan Dönüş</span> <i ng-show="betEventCounts.wonReturn" class="ng-hide">0</i>
                  </li>
                  <li ng-if="$root.conf.betHistory.enableReturnedFilter" ng-click="filterBetHistory(12)" ng-class="{'active': (betStatusFilter == 12)}">
                    <span trans="">Kayıp Dönüş</span> <i ng-show="betEventCounts.lostReturn" class="ng-hide">0</i>
                  </li>
                </ul>
              </div>
              <div class="all-history-filter-container">
                <div class="filter-columns-container">
                  <ul>
                    <li ng-show="!conf.betHistoryHideId &amp;&amp; !{'10':1, '-1':1, '-2': 1}[betStatusFilter]">
                      <p trans="">Bahis İD:</p>
                      <div class="mini-form-box-b">
                        <input type="text" ng-model="betHistoryParams.betIdFilter" placeholder="#" ng-click="periodDropdownOpened = false; openedTo = false; openedFrom = false;  openBetTypeFilter = false;" prevent-input="[^\d]" class="ng-pristine ng-untouched ng-valid ng-empty">
                      </div>
                    </li>
                    <li ng-show="!{'10':1, '-1':1, '-2': 1}[betStatusFilter]">
                      <p trans="">Bahis Türü</p>
                      <div class="select-box-period-b" ng-click="openBetTypeFilter = !openBetTypeFilter" ng-class="{'active': openBetTypeFilter}">
                        <p>Hepsi</p>
                        <ul>
                          <li ng-click="betHistoryParams.betTypeSelector = undefined; $parent.openBetTypeFilter = false" trans="">Hepsi</li>
                          <li ng-repeat="type in conf.betTypes track by type.value" ng-click="betHistoryParams.betTypeSelector = type; openBetTypeFilter = false">tekli</li>
                          <li ng-repeat="type in conf.betTypes track by type.value" ng-click="betHistoryParams.betTypeSelector = type; openBetTypeFilter = false">Kombine</li>
                          <li ng-repeat="type in conf.betTypes track by type.value" ng-click="betHistoryParams.betTypeSelector = type; openBetTypeFilter = false">sistem</li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <p trans="">Periyot</p>
                      <div class="select-box-period-b" ng-click="periodDropdownOpened=!periodDropdownOpened; openedTo = false; openedFrom = false; openBetTypeFilter = false;" ng-class="{'active': periodDropdownOpened}">
                        <p ng-if="!customPeriodApplied">24 saat</p>
                        <ul>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">1 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">2 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">3 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">6 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">12 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">24 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">48 saat</li>
                          <li ng-repeat="period in upcomingPeriods track by $index" ng-click="selectBetHistoryTimePeriod(period); periodDropdownOpened = false;">72 saat</li>
                        </ul>
                      </div>
                    </li>
                    <li class="range-filter-box">
                      <p trans="">Tarih Aralığı</p>
                      <div class="mini-form-box-b">
                        <div class="date-picker-b">
                          <div class="picker-contain">
                            <div class="input-group" ng-click="openFrom($event)">
                              <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-valid-date ng-invalid ng-invalid-required" placeholder="Nerden" datepicker-popup="dd/MM/yyyy" min-date="datePickerLimits.minFromDate" max-date="datePickerLimits.maxFromDate || today" ng-model="requestData.dateFrom" is-open="openedFrom" disabled="" datepicker-options="dateOptions" ng-change="adjustDate('from')" ng-required="true" close-text="Close" required="required">
                              <ul class="dropdown-menu ng-empty ng-valid ng-valid-date-disabled" ng-style="{display: (isOpen &amp;&amp; 'block') || 'none', top: position.top+'px', left: position.left+'px'}" ng-keydown="keydown($event)" datepicker-popup-wrap="" ng-model="date" ng-change="dateSelection()" style="display: none;">
                                <li ng-transclude="">
                                  <div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)" datepicker="" show-weeks="false" min-date="watchData.minDate" max-date="watchData.maxDate">
                                    <table role="grid" aria-labelledby="datepicker-2018-8949-title" aria-activedescendant="datepicker-2018-8949-26" ng-switch-when="day" tabindex="0">
                                      <thead>
                                        <tr>
                                          <th>
                                            <button type="button" class="btn btn-default btn-sm pull-left" ng-click="move(-1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                          </th>
                                          <th colspan="5">
                                            <button id="datepicker-2018-8949-title" role="heading" aria-live="assertive" aria-atomic="true" type="button" class="btn btn-default btn-sm" ng-click="toggleMode()" tabindex="-1" style="width: 100%;">
                                              <strong>Kasım 2022</strong>
                                            </button>
                                          </th>
                                          <th>
                                            <button type="button" class="btn btn-default btn-sm pull-right" ng-click="move(1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th ng-show="showWeeks" class="text-center ng-hide"></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazar">Paz</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazartesi">Pts</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Salı">Sal</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Çarşamba">Çar</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Perşembe">Per</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cuma">Cum</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cumartesi">Cts</small></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-0" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">30</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-1" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">31</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-2" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">01</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-3" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">02</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-4" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">03</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-5" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">04</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-6" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">05</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-7" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">06</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-8" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">07</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-9" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">08</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-10" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">09</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-11" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">10</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-12" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">11</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-13" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">12</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-14" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">13</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-15" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">14</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-16" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">15</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-17" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">16</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-18" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">17</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-19" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">18</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-20" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">19</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-21" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">20</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-22" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">21</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-23" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">22</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-24" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">23</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-25" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">24</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-26" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm active" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-info">25</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-27" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">26</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-28" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">27</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-29" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">28</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-30" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">29</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-31" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">30</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-32" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">01</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-33" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">02</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-34" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">03</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-35" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">04</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-36" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">05</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-37" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">06</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-38" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">07</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-39" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">08</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-40" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">09</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2018-8949-41" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">10</span>
                                            </button>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </li>
                                <li ng-if="showButtonBar" style="padding: 10px 9px 2px;">
                                  <span class="btn-group pull-left">
                                    <button type="button" class="btn btn-sm btn-info" ng-click="select('today')">Today</button>
                                    <button type="button" class="btn btn-sm btn-danger" ng-click="select(null)">Clear</button>
                                  </span>
                                  <button type="button" class="btn btn-sm btn-success pull-right" ng-click="close()">Close</button>
                                </li>
                              </ul>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default date-view" ng-click="openFrom($event)"><i class="date-p"></i></button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-show="betStatusFilter !== -1">
                      <p></p>
                      <div class="mini-form-box-b">
                        <div class="date-picker-b">
                          <div class="picker-contain">
                            <div class="input-group" ng-click="openTo($event)">
                              <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-valid-date ng-invalid ng-invalid-required" placeholder="Nereye" datepicker-popup="dd/MM/yyyy" min-date="datePickerLimits.minToDate" max-date="datePickerLimits.maxToDate || today" ng-model="requestData.dateTo" is-open="openedTo" disabled="" datepicker-options="dateOptions" ng-change="adjustDate('to')" ng-required="true" close-text="Close" required="required">
                              <ul class="dropdown-menu ng-empty ng-valid ng-valid-date-disabled" ng-style="{display: (isOpen &amp;&amp; 'block') || 'none', top: position.top+'px', left: position.left+'px'}" ng-keydown="keydown($event)" datepicker-popup-wrap="" ng-model="date" ng-change="dateSelection()" style="display: none;">
                                <li ng-transclude="">
                                  <div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)" datepicker="" show-weeks="false" min-date="watchData.minDate" max-date="watchData.maxDate">
                                    <table role="grid" aria-labelledby="datepicker-2019-3332-title" aria-activedescendant="datepicker-2019-3332-26" ng-switch-when="day" tabindex="0">
                                      <thead>
                                        <tr>
                                          <th>
                                            <button type="button" class="btn btn-default btn-sm pull-left" ng-click="move(-1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                          </th>
                                          <th colspan="5">
                                            <button id="datepicker-2019-3332-title" role="heading" aria-live="assertive" aria-atomic="true" type="button" class="btn btn-default btn-sm" ng-click="toggleMode()" tabindex="-1" style="width: 100%;">
                                              <strong>Kasım 2022</strong>
                                            </button>
                                          </th>
                                          <th>
                                            <button type="button" class="btn btn-default btn-sm pull-right" ng-click="move(1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th ng-show="showWeeks" class="text-center ng-hide"></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazar">Paz</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Pazartesi">Pts</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Salı">Sal</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Çarşamba">Çar</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Perşembe">Per</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cuma">Cum</small></th>
                                          <th ng-repeat="label in labels track by $index" class="text-center"><small aria-label="Cumartesi">Cts</small></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-0" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">30</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-1" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">31</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-2" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">01</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-3" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">02</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-4" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">03</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-5" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">04</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-6" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">05</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-7" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">06</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-8" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">07</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-9" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">08</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-10" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">09</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-11" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">10</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-12" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">11</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-13" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">12</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-14" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">13</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-15" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">14</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-16" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">15</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-17" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">16</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-18" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">17</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-19" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">18</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-20" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">19</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-21" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">20</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-22" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">21</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-23" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">22</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-24" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">23</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-25" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">24</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-26" aria-disabled="false">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm active" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-info">25</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-27" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">26</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-28" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">27</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-29" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">28</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-30" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">29</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-31" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}">30</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-32" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">01</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-33" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">02</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-34" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">03</span>
                                            </button>
                                          </td>
                                        </tr>
                                        <tr ng-repeat="row in rows track by $index">
                                          <td ng-show="showWeeks" class="text-center h6 ng-hide"><em></em></td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-35" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">04</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-36" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">05</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-37" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">06</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-38" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">07</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-39" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">08</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-40" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">09</span>
                                            </button>
                                          </td>
                                          <td ng-repeat="dt in row track by dt.date" class="text-center" role="gridcell" id="datepicker-2019-3332-41" aria-disabled="true">
                                            <button type="button" style="width: 100%;" class="btn btn-default btn-sm" ng-class="{'btn-info': dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1" disabled="disabled">
                                              <span ng-class="{'text-muted': dt.secondary, 'text-info': dt.current}" class="text-muted">10</span>
                                            </button>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </li>
                                <li ng-if="showButtonBar" style="padding: 10px 9px 2px;">
                                  <span class="btn-group pull-left">
                                    <button type="button" class="btn btn-sm btn-info" ng-click="select('today')">Today</button>
                                    <button type="button" class="btn btn-sm btn-danger" ng-click="select(null)">Clear</button>
                                  </span>
                                  <button type="button" class="btn btn-sm btn-success pull-right" ng-click="close()">Close</button>
                                </li>
                              </ul>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default date-view" ng-click="openTo($event)"><i class="date-p"></i></button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="mybets-filter-show-b">
                  <a ng-href="#/results" title="Sonuçlar" trans="" ng-if="$root.calculatedConfigs.showResultsTabInSportsbook" ng-click="$root.broadcast('slider.close')" href="#/results"></a>
                  <button prevent-fast-click="1.5" ng-click="loadMixedBetHistory()" trans="">GÖSTER</button>
                </div>
              </div>
            </div>
          </div>
          <div class="mixed-view-body">
            <div ng-if="betStatusFilter !== 10" class="mixed-view-body-ins always-scroll">
              <div class="mixed-history-table" ng-show="betHistoryLoaded">
                <table>
                  <thead>
                    <tr>
                      <th class="date-id"><span ng-show="conf.betHistoryHideId" trans="" class="ng-hide">Tarih</span> <span ng-show="!conf.betHistoryHideId" trans="">Tarih ve ID</span></th>
                      <th class="status-icon-b"></th>
                      <th class="auto-cell">
                        <div class="cell-inner"><span trans="">Bahis Türü</span></div>
                      </th>
                      <th class="hh-cell" trans="">Miktar</th>
                      <th ng-if="!$root.conf.betHistory.hideOddTypes" class="hh-cell" trans="">Oran Türü</th>
                      <th class="hh-cell" trans="">Oran</th>
                      <th class="hh-cell" trans="">Sonuç</th>
                      <th class="status-cell" trans="">Durum</th>
                      <th class="status-icon-b"></th>
                      <th class="arrow-cell cms-jcon-my-bets-view" ng-click="expandCollapseAll(!expandState)"></th>
                    </tr>
                  </thead>
                  <tbody ng-if="betHistory &amp;&amp; (betHistory.length == 0 || betStatusFilter === -2 &amp;&amp; giftedBetsCount === 0)">
                    <tr>
                      <td colspan="10" class="second-color center-text" trans="">Seçilen zaman aralığı için herhangi bir bahis bulunmamaktadır.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </ng-include>
    </div>
  </div>
</div>




        
      </div>