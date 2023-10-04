<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container promos">
        

<div class="promos-container guide" ng-init="setTitle('Promotions')" no-animate="">
    <promo-switcher count="all">
        <promotion-news ng-if="!isNew" slug="" template="" category-json-type="" main-class="promo block-meny-news" path="news" categories-list="true" use-custom-base-host="true" count="all" share-path="">
            <div ng-include="getTemplate()">
                <div ng-class="mainClass" class="promotions-main-p promo block-meny-news">
                    <div class="promotions-menu-p ng-scope" ng-if="promotionCategories.length > 1">
                        <ul>
                            <li ng-repeat="item in promotionCategories track by $index" ng-class="{active: slug === item.key}" ng-click="setSlug(item.key)" class="active">Tümü</li>
                            <li ng-repeat="item in promotionCategories track by $index" ng-class="{active: slug === item.key}" ng-click="setSlug(item.key)">Spor</li>
                            <li ng-repeat="item in promotionCategories track by $index" ng-class="{active: slug === item.key}" ng-click="setSlug(item.key)">SLOT CASİNO</li>
                            <li ng-repeat="item in promotionCategories track by $index" ng-class="{active: slug === item.key}" ng-click="setSlug(item.key)">Diğer</li>
                        </ul>
                    </div>































                    <div ng-repeat="group in recentNewsList track by $index" ng-show="!newsAreLoading" class="block-sport-news count-3">
                        <div class="list-news promo">
                            <ul class="news-column-0">
                                <li>
                                    <h3 title="ExtraSkor ile Her Gün 100 TL FreeBet!">
                                        <a href="#">ExtraSkor ile Her Gün 100 TL FreeBet!</a>
                                    </h3>
                                    <p>11 May 2021 00:34</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?e522c95915d96672d475799104536dc7_1457_news.gif" title="ExtraSkor ile Her Gün 100 TL FreeBet!" alt="" src="img/e522c95915d96672d475799104536dc7_1457_news.gif">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-1">
                                <li>
                                    <h3 title="ExtraToto Ödüllü Tahmin Yarışması">
                                        <a href="#">ExtraToto Ödüllü Tahmin Yarışması</a>
                                    </h3>
                                    <p>18 Mar 2021 05:37</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?f616bce4d4c97aa31250fcd2b3117de8_1457_news.gif" title="ExtraToto Ödüllü Tahmin Yarışması" alt="" src="img/f616bce4d4c97aa31250fcd2b3117de8_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-2">
                                <li>
                                    <h3 title="Turnuva Takvimi"><a href="#">Turnuva Takvimi</a></h3>
                                    <p>15 Şub 2021 02:28</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?ffac062c43002058330157cc97c28950_1457_news.jpg" title="Turnuva Takvimi" alt="" src="img/ffac062c43002058330157cc97c28950_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div ng-repeat="group in recentNewsList track by $index" ng-show="!newsAreLoading" class="block-sport-news count-3">
                        <div class="list-news promo">
                            <ul class="news-column-0">
                                <li>
                                    <h3 title="Her Zaman Güncel Giriş Adresimiz">
                                        <a href="#">Her Zaman Güncel Giriş Adresimiz</a>
                                    </h3>
                                    <p>20 Nis 2021 16:04</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?3d07f17d44953c6aa03fc8f6b3901074_1457_news.jpg" title="Her Zaman Güncel Giriş Adresimiz" alt="" src="img/3d07f17d44953c6aa03fc8f6b3901074_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-1">
                                <li>
                                    <h3 title="%10 Çevrim Şartsız Spor ve Casino Yatırım Bonusu">
                                        <a href="#">%10 Çevrim Şartsız Spor ve Casino Yatırım Bonusu</a>
                                    </h3>
                                    <p>11 Eki 2019 02:20</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?7e4561edb13de6a49b1e13e55448460a_1457_news.jpg" title="%10 Çevrim Şartsız Spor ve Casino Yatırım Bonusu" alt="" src="img/7e4561edb13de6a49b1e13e55448460a_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-2">
                                <li>
                                    <h3 title="%10 Anlık Nakit İade"><a href="#">%10 Anlık Nakit İade</a></h3>
                                    <p>11 Eki 2019 02:24</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?b2bc84e621f25d5b1da92a8ff9891297_1457_news.jpg" title="%10 Anlık Nakit İade" alt="" src="img/b2bc84e621f25d5b1da92a8ff9891297_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div ng-repeat="group in recentNewsList track by $index" ng-show="!newsAreLoading" class="block-sport-news count-3">
                        <div class="list-news promo">
                            <ul class="news-column-0">
                                <li>
                                    <h3 title="İKİ AŞAMALI GÜVENLİK"><a href="#">İKİ AŞAMALI GÜVENLİK</a></h3>
                                    <p>11 Tem 2022 01:38</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?b38f1c7516b66c2b131b412af9caff94_1457_news.jpg" title="İKİ AŞAMALI GÜVENLİK" alt="" src="img/b38f1c7516b66c2b131b412af9caff94_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-1">
                                <li>
                                    <h3 title="VIP Üyemiz Olun!"><a href="#">VIP Üyemiz Olun!</a></h3>
                                    <p>06 Eyl 2021 18:08</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?b5e118c1ccad85fd67f1650c2de1e6d4_1457_news.jpg" title="VIP Üyemiz Olun!" alt="" src="img/b5e118c1ccad85fd67f1650c2de1e6d4_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-2">
                                <li>
                                    <h3 title="Müşteri Temsilcilerimiz Hizmetinizde!">
                                        <a href="#">Müşteri Temsilcilerimiz Hizmetinizde!</a>
                                    </h3>
                                    <p>09 Mar 2021 02:28</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?abd1954d24e98f97288d4c56ed512ef3_1457_news.gif" title="Müşteri Temsilcilerimiz Hizmetinizde!" alt="" src="img/abd1954d24e98f97288d4c56ed512ef3_1457_news.gif">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div ng-repeat="group in recentNewsList track by $index" ng-show="!newsAreLoading" class="block-sport-news count-3">
                        <div class="list-news promo">
                            <ul class="news-column-0">
                                <li>
                                    <h3 title="%30 Kombine Bonusu"><a href="#">%30 Kombine Bonusu</a></h3>
                                    <p>13 Oca 2021 18:08</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?5ebd13279d8ae82478dc1d4eba93960d_1457_news.jpg" title="%30 Kombine Bonusu" alt="" src="img/5ebd13279d8ae82478dc1d4eba93960d_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-1">
                                <li>
                                    <h3 title="Cash Out (Bahis Bozdur)"><a href="#">Cash Out (Bahis Bozdur)</a></h3>
                                    <p>13 Ara 2020 04:47</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?295b399c5cee0eda6421d611ffa3fe6b_1457_news.jpg" title="Cash Out (Bahis Bozdur)" alt="" src="img/295b399c5cee0eda6421d611ffa3fe6b_1457_news.jpg">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-2">
                                <li>
                                    <h3 title="Extrabet TV Canlı Yayın"><a href="#">Extrabet TV Canlı Yayın</a></h3>
                                    <p>06 Mar 2021 17:53</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?f7becc1fca912e0e19ad1aa2b93a14e2_1457_news.gif" title="Extrabet TV Canlı Yayın" alt="" src="img/f7becc1fca912e0e19ad1aa2b93a14e2_1457_news.gif">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div ng-repeat="group in recentNewsList track by $index" ng-show="!newsAreLoading" class="block-sport-news count-3">
                        <div class="list-news promo">
                            <ul class="news-column-0">
                                <li>
                                    <h3 title="Extrabet Hep Yanınızda!"><a href="#">Extrabet Hep Yanınızda!</a></h3>
                                    <p>18 Şub 2021 00:05</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?1549ecdeeb19f096073a9b834e988f50_1457_news.gif" title="Extrabet Hep Yanınızda!" alt="" src="img/1549ecdeeb19f096073a9b834e988f50_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="news-column-1">
                                <li>
                                    <h3 title="Genel Bonus Kuralları ve Şartları">
                                        <a href="#">Genel Bonus Kuralları ve Şartları</a>
                                    </h3>
                                    <p>13 May 2020 16:26</p>
                                    <div class="picture-news-block">
                                        <a href="#">
                                            <img ng-src="?b1ca37154187e4ed9e1639c82a33f948_1457_news.jpg" title="Genel Bonus Kuralları ve Şartları" alt="" src="img/b1ca37154187e4ed9e1639c82a33f948_1457_news.webp">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-center md-progress-circular md-theme ng-hide" ng-show="newsAreLoading"></div>
                    <div class="load-more-news ng-hide" ng-show="areThereMore">
                        <a ng-click="loadMore()" ng-show="!newsAreLoading" class="">
                            <p trans="">Daha fazla</p>
                            <span></span>
                        </a>
                        <a trans="" class="loading-more ng-hide" ng-show="newsAreLoading">Yükleniyor</a>
                    </div>
                    <ng-include src="::'templates/directive/promotions/popup.html'|fixPath"></ng-include>
                </div>
            </div>
        </promotion-news>
    </promo-switcher>
</div>



      </div>