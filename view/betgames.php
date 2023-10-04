<style>

  .footer-group{
    display: none;
  }
</style>
<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container game">
   <div class="size-h-container" ng-controller="casinoSpecialGamesCtrl" ng-init="loadGame('game');activePage='Version 2';">
      <!---->
      <div class="size-h-container" ng-include="'optional_modules/casino/templates/specialgames/main.html'|fixPath">
         <div class="container-p mini-header-padding" ng-init="$root.footerMovable = true;" ng-class="{
            'mini-header-padding': casinoGameOpened,
            'side-bar-available': (env.authorized &amp;&amp; gameInfo.game.id &amp;&amp; hasTournaments &amp;&amp; hasIframeTournamentInfo[gameInfo.id]),
            'hasSidebar': (!$root.conf.hideGameIframeAdditionalInfo) &amp;&amp; (showIframeInfo[gameInfo.id] &amp;&amp; (env.authorized &amp;&amp; gameInfo.game.id &amp;&amp; hasTournaments &amp;&amp; hasIframeTournamentInfo[gameInfo.id]))}">
            <div class="page-center md-progress-circular md-theme ng-hide" ng-show="loadingUserData"></div>
            <!----><!----><iframe class="special-game-iframe 9002" ng-if="frameUrl &amp;&amp; !loadingUserData" ng-src="//games.<?=$main['sitelink']?>.com/LaunchGame?partnerId=158&amp;gameId=9002&amp;language=tr&amp;openType=fun&amp;devicetypeid=1&amp;platformType=0&amp;exitURL=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002&amp;browserUrl=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002&amp;deposit_url=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002%3Faction%3Ddeposit" width="100%" height="100%" scrolling="yes" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" src="//games.<?=$main['sitelink']?>.com/LaunchGame?partnerId=158&amp;gameId=9002&amp;language=tr&amp;openType=fun&amp;devicetypeid=1&amp;platformType=0&amp;exitURL=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002&amp;browserUrl=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002&amp;deposit_url=https%3A%2F%2Fwww.683grandbetting.com%2F%23%2Fgame%2FBTG6%2Fprovider%2FBTG%2Fexid%2F9002%3Faction%3Ddeposit"></iframe><!----><!---->
            <div class="big-game-control">
               <div class="icon-delete closed-iframe-info"><a trans="" ng-click="showIframeInfo[gameInfo.id] = !showIframeInfo[gameInfo.id]"></a></div>
            </div>
         </div>
      </div>
   </div>
</div>