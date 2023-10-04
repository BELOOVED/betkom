<div ng-view="" ng-class="$root.currentPage.path.split('/').join('')" class="view-container">
        

<div class="new-default-popup-j" ng-escape="env.showSlider=false; env.sliderContent='';">
  <div class="all-history-lightbox-contain">
    <div class="all-history-lightbox-content">
      <div class="all-main-tabs-b">
        <ul>
          <li class="active" ng-class="{'active': env.sliderContent === 'settings'}" ng-click="env.sliderContent = 'settings'" ng-if="env.authorized &amp;&amp; !partnerConfig.profileNotAvailable">
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
          <li ng-class="{'active': env.sliderContent === 'promotionalBonuses'}" ng-click="env.sliderContent = 'promotionalBonuses'" ng-if="conf.promotionalBonuses.enable &amp;&amp; env.authorized &amp;&amp; ($root.profile.is_bonus_allowed !== false) &amp;&amp; (!conf.hideBonusSectionIfNoBonus || (conf.hideBonusSectionIfNoBonus &amp;&amp; $root.allBonusesCount.sportsbook + $root.allBonusesCount.casino + $root.allBonusesCount.freeSpins> 0))" onclick="window.location='bonuses';">
            <i class="bonuses-icon-tab-b"></i>
            <h4 trans="">Bonuslar</h4>
          </li>
        </ul>
        <div ng-show="!isPopup" ng-click="env.sliderContent=''; env.showSlider=false;" class="my-bets-closed-icon-b" onclick="window.location='./';"></div>
      </div>
<ng-include class="float-width mixed-view-holder" src="::'templates/livebox/mixedUserProfile.html'|fixPath" ng-if="env.sliderContent === 'settings'">
  <div class="mixed-view-content" ng-controller="settingsCtrl" ng-init="$root.env.mixedSettingsPage=$root.env.mixedSettingsPage||'details'">
    <div class="mixed-view-head">
      <div class="group-tabs-wrapper">
        <div class="first-level-history-tab">
          <ul>
            <li ng-click="$root.env.mixedSettingsPage='details'" ng-class="{'active': $root.env.mixedSettingsPage==='details'}" ng-init="loadUserInfo()" class="active"><span trans="">Kişisel Bilgiler</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mixed-view-body">
      <div class="mixed-view-body-ins">
        <div class="profile-tab-contain-b">
          
          <div ng-show="$root.env.mixedSettingsPage==='details'">
            <h3 trans="">Kişisel Bilgiler</h3>
            <div class="settings-info-contain" ng-if="!loadingInfo">
              <form name="forms.detailsForm" class="registration-form ng-pristine ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-invalid ng-invalid-required open-preferences" ng-class="{'open-preferences':showBlocks.preferences }">
                <div class="personal-details-left">
                  <ul>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('user_id') !== -1, 'editable': personalDetails.editableFields.indexOf('user_id') !== -1}" class="read-only">
                      <label><span trans="">KİMLİK</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('user_id') !== -1">*</span></label>
                      <div class="disabled-field"><p>998521129</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['user_id'] || forms.detailsForm['user_id'].$touched) &amp;&amp; forms.detailsForm.user_id.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="user_id" type="text" ng-model="details.user_id" title="" ng-required="personalDetails.requiredEditableFields.indexOf('user_id') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('user_id') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                            <div class="form-error-icon-j" ng-click="resetFieldError('user_id')" ng-show="personalDetails.disabledFields.indexOf('user_id') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('user_id') === -1"><div trans="" ng-show="forms.detailsForm.user_id.$error.required" class="ng-hide">Bu alan gereklidir</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('username') !== -1, 'editable': personalDetails.editableFields.indexOf('username') !== -1}">
                      <label><span trans="">Kullanıcı Adı</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('username') !== -1">*</span></label>
                      <div class="disabled-field"><p>********</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['username'] || forms.detailsForm['username'].$touched) &amp;&amp; forms.detailsForm.username.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="username" type="text" ng-model="details.username" title="" ng-required="personalDetails.requiredEditableFields.indexOf('username') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('username') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                            <div class="form-error-icon-j" ng-show="personalDetails.disabledFields.indexOf('username') === -1"></div>
                            <div class="tooltip-j" ng-click="resetFieldError('username')" ng-show="personalDetails.disabledFields.indexOf('username') === -1">
                              <div trans="" ng-show="forms.detailsForm.username.$error.required" class="ng-hide">Bu alan gereklidir</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('first_name') !== -1, 'editable': personalDetails.editableFields.indexOf('first_name') !== -1}" class="read-only">
                      <label><span trans="">Adı</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('first_name') !== -1">*</span></label>
                      <div class="disabled-field"><p>******</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['first_name'] || forms.detailsForm['first_name'].$touched) &amp;&amp; forms.detailsForm.first_name.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input ng-pattern="false" name="first_name" placeholder="Adınızı giriniz" trans="" type="text" ng-model="details.first_name" title="" ng-required="personalDetails.requiredEditableFields.indexOf('first_name') !== -1" ng-maxlength="50" ng-disabled="personalDetails.disabledFields.indexOf('first_name') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('first_name')" ng-show="personalDetails.disabledFields.indexOf('first_name') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('first_name') === -1">
                              <div trans="" ng-show="forms.detailsForm.first_name.$error.maxlength" class="ng-hide">Çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.first_name.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.first_name.$error.pattern" class="ng-hide">Please enter a valid first name: only letters-no space, no digits and/or symbols.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('middle_name') !== -1, 'editable': personalDetails.editableFields.indexOf('middle_name') !== -1}">
                      <label><span trans="">İkinci İsim</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('middle_name') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['middle_name'] || forms.detailsForm['middle_name'].$touched) &amp;&amp; forms.detailsForm.middle_name.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input ng-pattern="false" name="middle_name" placeholder="Enter your middle name" trans="" type="text" ng-model="details.middle_name" title="" ng-required="personalDetails.requiredEditableFields.indexOf('middle_name') !== -1" ng-maxlength="" ng-minlength="" ng-disabled="personalDetails.disabledFields.indexOf('middle_name') !== -1" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('middle_name')" ng-show="personalDetails.disabledFields.indexOf('middle_name') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('middle_name') === -1">
                              <div trans="" ng-show="forms.detailsForm.middle_name.$error.maxlength" class="ng-hide">Çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.middle_name.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.middle_name.$error.pattern" class="ng-hide">Please enter a valid middle name: only letters-no space, no digits and/or symbols.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('sur_name') !== -1, 'editable': personalDetails.editableFields.indexOf('sur_name') !== -1}" class="read-only">
                      <label><span trans="">Soyadı</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('sur_name') !== -1">*</span></label>
                      <div class="disabled-field"><p>*********</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['sur_name'] || forms.detailsForm['sur_name'].$touched) &amp;&amp; forms.detailsForm.sur_name.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="sur_name" ng-pattern="false" placeholder="Soyadınızı giriniz" trans="" type="text" ng-model="details.sur_name" title="" ng-required="personalDetails.requiredEditableFields.indexOf('sur_name') !== -1" ng-maxlength="50" ng-disabled="personalDetails.disabledFields.indexOf('sur_name') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('sur_name')" ng-show="personalDetails.disabledFields.indexOf('sur_name') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('sur_name') === -1">
                              <div trans="" ng-show="forms.detailsForm.sur_name.$error.maxlength" class="ng-hide">Çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.sur_name.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.sur_name.$error.pattern" ng-bind="personalDetails.validation.userName|translate" class="ng-hide">
                                Please enter a valid last name: only letters - no space, no digits and/or symbols.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('birth_date') !== -1, 'editable': personalDetails.editableFields.indexOf('birth_date') !== -1}" class="read-only">
                      <label><span trans="">Doğum Tarihi</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('birth_date') !== -1">*</span></label>
                      <div class="disabled-field"><p>****-**-**</p></div>
                      <div class="b-date active-field birth-date-fields">
                        <div class="tooltip-wrapper-j b-date">
                          <div class="select-block" ng-class="{'error': forms.detailsForm.birth_day.$invalid}">
                            <select name="birth_day" ng-change="calculateAge()" ng-required="(personalDetails.requiredEditableFields.indexOf('birth_date') !== -1 || birthDate.month || birthDate.year)&amp;&amp; !details.birth_date" ng-options="d for d in days" day-selector="" month-model="birthDate.month" year-model="birthDate.year" options="days" ng-model="birthDate.day" title="" ng-disabled="personalDetails.disabledFields.indexOf('birth_date') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                              <option value="" disabled="" trans="">Gün</option>
                              <option label="01" value="string:01">01</option>
                              <option label="02" value="string:02">02</option>
                              <option label="03" value="string:03">03</option>
                              <option label="04" value="string:04">04</option>
                              <option label="05" value="string:05" selected="selected">05</option>
                              <option label="06" value="string:06">06</option>
                              <option label="07" value="string:07">07</option>
                              <option label="08" value="string:08">08</option>
                              <option label="09" value="string:09">09</option>
                              <option label="10" value="string:10">10</option>
                              <option label="11" value="string:11">11</option>
                              <option label="12" value="string:12">12</option>
                              <option label="13" value="string:13">13</option>
                              <option label="14" value="string:14">14</option>
                              <option label="15" value="string:15">15</option>
                              <option label="16" value="string:16">16</option>
                              <option label="17" value="string:17">17</option>
                              <option label="18" value="string:18">18</option>
                              <option label="19" value="string:19">19</option>
                              <option label="20" value="string:20">20</option>
                              <option label="21" value="string:21">21</option>
                              <option label="22" value="string:22">22</option>
                              <option label="23" value="string:23">23</option>
                              <option label="24" value="string:24">24</option>
                              <option label="25" value="string:25">25</option>
                              <option label="26" value="string:26">26</option>
                              <option label="27" value="string:27">27</option>
                              <option label="28" value="string:28">28</option>
                              <option label="29" value="string:29">29</option>
                              <option label="30" value="string:30">30</option>
                              <option label="31" value="string:31">31</option>
                            </select>
                          </div>
                          <div class="select-block" ng-class="{'error': forms.detailsForm.birth_month.$invalid}">
                            <select name="birth_month" ng-change="calculateAge()" ng-required="(personalDetails.requiredEditableFields.indexOf('birth_date') !== -1  || birthDate.day || birthDate.year) &amp;&amp; !details.birth_date" ng-model="birthDate.month" ng-disabled="personalDetails.disabledFields.indexOf('birth_date') !== -1" title="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                              <option value="" disabled="" trans="">Ay</option>
                              <option ng-repeat="month in monthNames" value="01" selected="selected">Ocak</option>
                              <option ng-repeat="month in monthNames" value="02">Şubat</option>
                              <option ng-repeat="month in monthNames" value="03">Mart</option>
                              <option ng-repeat="month in monthNames" value="04">Nisan</option>
                              <option ng-repeat="month in monthNames" value="05">Mayıs</option>
                              <option ng-repeat="month in monthNames" value="06">Haziran</option>
                              <option ng-repeat="month in monthNames" value="07">Temmuz</option>
                              <option ng-repeat="month in monthNames" value="08">Ağustos</option>
                              <option ng-repeat="month in monthNames" value="09">Eylül</option>
                              <option ng-repeat="month in monthNames" value="10">Ekim</option>
                              <option ng-repeat="month in monthNames" value="11">Kasım</option>
                              <option ng-repeat="month in monthNames" value="12">Aralık</option>
                            </select>
                          </div>
                          <div class="select-block" ng-class="{'error': forms.detailsForm.birth_year.$invalid}">
                            <select name="birth_year" ng-change="calculateAge()" ng-required="(personalDetails.requiredEditableFields.indexOf('birth_date') !== -1  || birthDate.month || birthDate.day) &amp;&amp; !details.birth_date" ng-model="birthDate.year" ng-options="y for (y,y) in birthDate.years" title="" ng-disabled="personalDetails.disabledFields.indexOf('birth_date') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                              <option value="?" selected="selected"></option>
                              <option value="" disabled="" trans="">Yıl</option>
                            </select>
                          </div>
                          <div ng-class="{'error': forms.detailsForm.birth_day.$invalid || forms.detailsForm.birth_month.$invalid || forms.detailsForm.birth_year.$invalid}">
                            <div class="tooltip-j" ng-show="$root.conf.personalDetails.disabledFields.indexOf('birth_date') === -1">
                              <div trans="" ng-show="forms.detailsForm.birth_day.$error.required || forms.detailsForm.birth_month.$error.required || forms.detailsForm.birth_year.$error.required" class="ng-hide">Bu alan gereklidir</div>
                            </div>
                          </div>
                          <div ng-class="{error: userAge &amp;&amp; userAge < $root.conf.registration.minimumAllowedAge}">
                            <div class="tooltip-j"><p ng-show="userAge &amp;&amp; userAge < $root.conf.registration.minimumAllowedAge" class="ng-hide">18 yaşından küçükler için bu sitede kayıt yapılmasına izin verilmez</p></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="gender-lbl read-only" ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('gender') !== -1, 'editable': personalDetails.editableFields.indexOf('gender') !== -1}">
                      <label><span trans="">Cinsiyet</span>:<span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('gender') !== -1">*</span></label>
                      <div class="disabled-field"><p>Erkek</p></div>
                      <div class="active-field">
                        <div class="tooltip-wrapper-j" ng-class="{'error': forms.detailsForm.gender.$invalid}">
                          <div class="select-block">
                            <select ng-model="details.gender" title="" name="gender" ng-required="personalDetails.requiredEditableFields.indexOf('gender') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('gender') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                              <option disabled="" trans="" ng-value="undefined" value="undefined:undefined">Cinsiyet seç</option>
                              <option ng-repeat="gender in genders track by gender.val" value="M" selected="selected">Erkek</option>
                              <option ng-repeat="gender in genders track by gender.val" value="F">Kadın</option>
                            </select>
                          </div>
                          <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('gender') === -1"><div trans="" ng-show="forms.detailsForm.gender.$error.required" class="ng-hide">Bu alan gereklidir</div></div>
                        </div>
                      </div>
                    </li>
                    <li ng-if="personalDetails.readOnlyFields.indexOf('email') !== -1 || personalDetails.editableFields.indexOf('email') !== -1 || personalDetails.disabledFields.indexOf('email') !== -1" ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('email') !== -1, 'editable': personalDetails.editableFields.indexOf('email') !== -1}" class="read-only">
                      <label><span trans="">E-posta</span>: <span class="hint" ng-show="personalDetails.requiredEditableFields.indexOf('email') !== -1">*</span></label>
                      <div class="disabled-field"><p>******@*******.***</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['email'] || forms.detailsForm['email'].$touched) &amp;&amp; forms.detailsForm.email.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="email" type="text" ng-model="details.email" title="Bu alan düzenlenemez." ng-required="personalDetails.requiredEditableFields.indexOf('email') !== -1" ng-pattern="false" ng-disabled="personalDetails.disabledFields.indexOf('email') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern" required="required" disabled="disabled">
                            <div class="form-error-icon-j ng-hide" ng-click="resetFieldError('email')" ng-show="personalDetails.disabledFields.indexOf('email') === -1"></div>
                            <div class="tooltip-j ng-hide" ng-show="personalDetails.disabledFields.indexOf('email') === -1">
                              <div trans="" ng-show="forms.detailsForm.email.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.email.$error.pattern" ng-bind="personalDetails.validation.email|translate" class="ng-hide">Geçersiz e-posta</div>
                              <div trans="" ng-show="forms.detailsForm.email.$error.dublicate" class="ng-hide">Bu e-posta adresi kullanılmaktadır. Lütfen farklı bir adres giriniz.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('doc_number') !== -1, 'editable': personalDetails.editableFields.indexOf('doc_number') !== -1}" class="read-only">
                      <label><span trans="">Kimlik Numarası</span>: <span class="hint" ng-show="personalDetails.requiredEditableFields.indexOf('doc_number') !== -1">*</span></label>
                      <div class="disabled-field"><p>***************</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error':(!resetError['doc_number'] || forms.detailsForm['doc_number'].$touched)  &amp;&amp;  forms.detailsForm.doc_number.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="doc_number" placeholder="Pasaport numaranızı giriniz" trans="" ng-pattern="false" type="text" ng-minlength="11" ng-maxlength="11" ng-model="details.doc_number" title="" ng-required="personalDetails.requiredEditableFields.indexOf('doc_number') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('doc_number') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" required="required">
                            <div class="form-error-icon-j" ng-click="resetFieldError('doc_number')" ng-show="personalDetails.disabledFields.indexOf('doc_number') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('doc_number') === -1">
                              <div trans="" ng-show="forms.detailsForm.doc_number.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.doc_number.$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm.doc_number.$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.doc_number.$error.pattern" ng-bind="personalDetails.validation.docNumber|translate" class="ng-hide">This field can contain only 11 digits</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('personal_id') !== -1, 'editable': personalDetails.editableFields.indexOf('personal_id') !== -1}">
                      <label><span trans="">Kimlik Numarası</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('personal_id') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error':(!resetError['personal_id'] || forms.detailsForm['personal_id'].$touched)  &amp;&amp;  forms.detailsForm.personal_id.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="personal_id" placeholder="Enter your Personal ID" trans="" ng-pattern="false" type="text" ng-minlength="" ng-maxlength="" ng-model="details.personal_id" title="" ng-required="personalDetails.requiredEditableFields.indexOf('personal_id') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('personal_id') !== -1" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('personal_id')" ng-show="personalDetails.disabledFields.indexOf('personal_id') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('personal_id') === -1">
                              <div trans="" ng-show="forms.detailsForm.personal_id.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.personal_id.$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm.personal_id.$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.personal_id.$error.pattern" ng-bind="personalDetails.validation.personalId|translate" class="ng-hide">Please enter only Latin or Cyrillic letters and numbers</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-if="details.selectCountryCode.key" ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('swift_code') !== -1, 'editable': personalDetails.editableFields.indexOf('swift_code') !== -1}">
                      <label><span trans="">Banka adı</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('swift_code') !== -1">*</span></label>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error':(!resetError['swift_code'] || forms.detailsForm['swift_code'].$touched) &amp;&amp;  forms.detailsForm.swift_code.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <bank-name class="bank-name-select ng-pristine ng-untouched ng-valid ng-empty" class-name="select-block" ng-model="details.swift_code" initial-value="initialSwiftCode" country-code="details.selectCountryCode.key" required-field="personalDetails.requiredEditableFields.indexOf('swift_code') !== -1" read-only-field="personalDetails.editableFields.indexOf('swift_code') === -1">
                              <div class="select-block disabled-field">
                                <select name="swift_code" ng-model="swiftCode" ng-change="changeBankName()" ng-required="requiredField" ng-disabled="readOnlyField" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required" disabled="disabled">
                                  <option value="? undefined:undefined ?" selected="selected"></option>
                                </select>
                                <div class="small-progress md-progress-circular md-theme ng-hide" ng-show="loading"></div>
                              </div>
                            </bank-name>
                            <div class="form-error-icon-j" ng-click="resetFieldError('swift_code')" ng-show="personalDetails.disabledFields.indexOf('swift_code') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('swift_code') === -1"><div trans="" ng-show="forms.detailsForm.swift_code.$error.required" class="ng-hide">Bu alan gereklidir</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('iban') !== -1, 'editable': personalDetails.editableFields.indexOf('iban') !== -1}">
                      <label><span ng-bind="'iban'|translate:null:'iban-papara'">iban</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('iban') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error':(!resetError['iban'] || forms.detailsForm['iban'].$touched) &amp;&amp;  forms.detailsForm.iban.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="iban" type="text" placeholder="Enter IBAN number" ng-model="details.iban" title="" ng-required="personalDetails.requiredEditableFields.indexOf('iban') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('iban') !== -1" ng-pattern="false" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ng-valid-pattern">
                            <div class="form-error-icon-j" ng-click="resetFieldError('iban')" ng-show="personalDetails.disabledFields.indexOf('iban') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('iban') === -1">
                              <div trans="" ng-show="forms.detailsForm.iban.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.iban.$error.pattern" ng-bind="personalDetails.validation.iban|translate" class="ng-hide"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="editable reg-radio pep-status ng-hide" ng-show="personalDetails.editableFields.indexOf('client_pep_status') !== -1 || personalDetails.readOnlyFields.indexOf('client_pep_status') !== -1">
                      <div class="pep-status-btn">
                        <p class="ellipsis-text"><span trans="">politically_exposed_person</span>:</p>
                        <input id="radiobtn-no" name="client_pep_status" ng-disabled="personalDetails.readOnlyFields.indexOf('client_pep_status')> -1" ng-model="details.client_pep_status" type="radio" ng-value="undefined" class="ng-pristine ng-untouched ng-valid ng-empty">
                        <label for="radiobtn-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                        <input id="radiobtn-yes" name="client_pep_status" ng-disabled="personalDetails.readOnlyFields.indexOf('client_pep_status')> -1" ng-model="details.client_pep_status" type="radio" ng-value="8" class="ng-pristine ng-untouched ng-valid ng-empty" value="8">
                        <label for="radiobtn-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="personal-details-right">
                  <ul>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('country_code') !== -1, 'editable': personalDetails.editableFields.indexOf('country_code') !== -1}" class="editable">
                      <label><span trans="">Ülke</span>: <span class="hint" ng-show="personalDetails.requiredEditableFields.indexOf('country_code') !== -1">*</span></label>
                      <div class="disabled-field"><p>Türkiye</p></div>
                      <div class="active-field">
                        <div class="tooltip-wrapper-j" ng-class="{'error': forms.detailsForm.country_code.$invalid}">
                          <div class="select-block">
                            <select ng-model="details.selectCountryCode" title="Bu alan düzenlenemez." name="country_code" ng-options="item as item.name|translate for item in countryCodes track by item.key" ng-required="personalDetails.requiredEditableFields.indexOf('country_code') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('country_code') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" required="required" disabled="disabled">
                              <option label="Afganistan" value="AF">Afganistan</option>
                              <option label="Arnavutluk" value="AL">Arnavutluk</option>
                              <option label="Cezayir" value="DZ">Cezayir</option>
                              <option label="Amerikan Samoası" value="AS">Amerikan Samoası</option>
                              <option label="Andora" value="AD">Andora</option>
                              <option label="Angola" value="AO">Angola</option>
                              <option label="Antigua ve Barbuda" value="AG">Antigua ve Barbuda</option>
                              <option label="Arjantin" value="AR">Arjantin</option>
                              <option label="Ermenistan" value="AM">Ermenistan</option>
                              <option label="Aruba" value="AW">Aruba</option>
                              <option label="Avustralya" value="AU">Avustralya</option>
                              <option label="Avusturya" value="AT">Avusturya</option>
                              <option label="Azerbaycan" value="AZ">Azerbaycan</option>
                              <option label="Bahamalar" value="BS">Bahamalar</option>
                              <option label="Bahreyn" value="BH">Bahreyn</option>
                              <option label="Bangladeş" value="BD">Bangladeş</option>
                              <option label="Barbados" value="BB">Barbados</option>
                              <option label="Belarusya" value="BY">Belarusya</option>
                              <option label="Belçika" value="BE">Belçika</option>
                              <option label="Belize" value="BZ">Belize</option>
                              <option label="Benin" value="BJ">Benin</option>
                              <option label="Bermuda" value="BM">Bermuda</option>
                              <option label="Butan" value="BT">Butan</option>
                              <option label="Bolivya" value="BO">Bolivya</option>
                              <option label="Bosna Hersek" value="BA">Bosna Hersek</option>
                              <option label="Botsvana" value="BW">Botsvana</option>
                              <option label="Brezilya" value="BR">Brezilya</option>
                              <option label="Brunei Sultanlığı" value="BN">Brunei Sultanlığı</option>
                              <option label="Bulgaristan" value="BG">Bulgaristan</option>
                              <option label="Burkina Faso" value="BF">Burkina Faso</option>
                              <option label="Burundi" value="BI">Burundi</option>
                              <option label="Yeşil Burun Adaları" value="CV">Yeşil Burun Adaları</option>
                              <option label="Kamboçya" value="KH">Kamboçya</option>
                              <option label="Kamerun" value="CM">Kamerun</option>
                              <option label="Cayman Adaları" value="KY">Cayman Adaları</option>
                              <option label="Orta Afrika Cumhuriyeti" value="CF">Orta Afrika Cumhuriyeti</option>
                              <option label="Çad" value="TD">Çad</option>
                              <option label="Şili" value="CL">Şili</option>
                              <option label="Çin" value="CN">Çin</option>
                              <option label="Kolombiya" value="CO">Kolombiya</option>
                              <option label="Komorolar" value="KM">Komorolar</option>
                              <option label="Kongo" value="CG">Kongo</option>
                              <option label="Kongo, Demokratik Cumhuriyeti (Zaire)" value="CD">Kongo, Demokratik Cumhuriyeti (Zaire)</option>
                              <option label="Cook Adaları" value="CK">Cook Adaları</option>
                              <option label="Kosta Rika" value="CR">Kosta Rika</option>
                              <option label="Fildişi Sahili" value="CI">Fildişi Sahili</option>
                              <option label="Hırvatistan" value="HR">Hırvatistan</option>
                              <option label="Küba" value="CU">Küba</option>
                              <option label="Kıbrıs" value="CY">Kıbrıs</option>
                              <option label="Çek Cumhuriyeti" value="CZ">Çek Cumhuriyeti</option>
                              <option label="Danimarka" value="DK">Danimarka</option>
                              <option label="Cibuti" value="DJ">Cibuti</option>
                              <option label="Dominika" value="DM">Dominika</option>
                              <option label="Dominik Cumhuriyeti" value="DO">Dominik Cumhuriyeti</option>
                              <option label="Ekvador" value="EC">Ekvador</option>
                              <option label="Mısır" value="EG">Mısır</option>
                              <option label="El Salvador" value="SV">El Salvador</option>
                              <option label="Ekvator Ginesi" value="GQ">Ekvator Ginesi</option>
                              <option label="Eritre" value="ER">Eritre</option>
                              <option label="Estonya" value="EE">Estonya</option>
                              <option label="Etiyopya" value="ET">Etiyopya</option>
                              <option label="Faroe Adaları" value="FO">Faroe Adaları</option>
                              <option label="Fiji" value="FJ">Fiji</option>
                              <option label="Finlandiya" value="FI">Finlandiya</option>
                              <option label="Gabon" value="GA">Gabon</option>
                              <option label="Gambiya" value="GM">Gambiya</option>
                              <option label="Gürcistan" value="GE">Gürcistan</option>
                              <option label="Almanya" value="DE">Almanya</option>
                              <option label="Gana" value="GH">Gana</option>
                              <option label="Yunanistan" value="GR">Yunanistan</option>
                              <option label="Grenada" value="GD">Grenada</option>
                              <option label="Guam" value="GU">Guam</option>
                              <option label="Guatemala" value="GT">Guatemala</option>
                              <option label="Gine" value="GN">Gine</option>
                              <option label="Gine-Bissau" value="GW">Gine-Bissau</option>
                              <option label="Guyana" value="GY">Guyana</option>
                              <option label="Haiti" value="HT">Haiti</option>
                              <option label="Honduras" value="HN">Honduras</option>
                              <option label="Hong Kong" value="HK">Hong Kong</option>
                              <option label="Macaristan" value="HU">Macaristan</option>
                              <option label="İzlanda" value="IS">İzlanda</option>
                              <option label="Hindistan" value="IN">Hindistan</option>
                              <option label="Endonezya" value="ID">Endonezya</option>
                              <option label="İran" value="IR">İran</option>
                              <option label="Irak" value="IQ">Irak</option>
                              <option label="Irlanda" value="IE">Irlanda</option>
                              <option label="İsrail" value="IL">İsrail</option>
                              <option label="Jamaika" value="JM">Jamaika</option>
                              <option label="Japonya" value="JP">Japonya</option>
                              <option label="Ürdün" value="JO">Ürdün</option>
                              <option label="Kazakistan" value="KZ">Kazakistan</option>
                              <option label="Kenya" value="KE">Kenya</option>
                              <option label="Kiribati" value="KI">Kiribati</option>
                              <option label="Kore, Kuzey" value="KP">Kore, Kuzey</option>
                              <option label="Kuveyt" value="KW">Kuveyt</option>
                              <option label="Kırgızistan" value="KG">Kırgızistan</option>
                              <option label="Laos" value="LA">Laos</option>
                              <option label="Letonya" value="LV">Letonya</option>
                              <option label="Lübnan" value="LB">Lübnan</option>
                              <option label="Lesoto" value="LS">Lesoto</option>
                              <option label="Liberya" value="LR">Liberya</option>
                              <option label="Libya" value="LY">Libya</option>
                              <option label="Lihtenştayn" value="LI">Lihtenştayn</option>
                              <option label="Litvanya" value="LT">Litvanya</option>
                              <option label="Luxembourg" value="LU">Luxembourg</option>
                              <option label="Makedonya" value="MK">Makedonya</option>
                              <option label="Madagaskar" value="MG">Madagaskar</option>
                              <option label="Malavi" value="MW">Malavi</option>
                              <option label="Malezya" value="MY">Malezya</option>
                              <option label="Maldivler" value="MV">Maldivler</option>
                              <option label="Mali" value="ML">Mali</option>
                              <option label="Malta" value="MT">Malta</option>
                              <option label="Moritanya" value="MR">Moritanya</option>
                              <option label="Mauritius" value="MU">Mauritius</option>
                              <option label="Meksika" value="MX">Meksika</option>
                              <option label="Mikronezya Federe Devletleri" value="FM">Mikronezya Federe Devletleri</option>
                              <option label="Moldova" value="MD">Moldova</option>
                              <option label="Monako" value="MC">Monako</option>
                              <option label="Moğolistan" value="MN">Moğolistan</option>
                              <option label="Karadağ" value="ME">Karadağ</option>
                              <option label="Fas" value="MA">Fas</option>
                              <option label="Mozambik" value="MZ">Mozambik</option>
                              <option label="Myanmar" value="MM">Myanmar</option>
                              <option label="Nambiya" value="NA">Nambiya</option>
                              <option label="Nauru" value="NR">Nauru</option>
                              <option label="Nepal" value="NP">Nepal</option>
                              <option label="Yeni Zelanda" value="NZ">Yeni Zelanda</option>
                              <option label="Nikaragua" value="NI">Nikaragua</option>
                              <option label="Nijer" value="NE">Nijer</option>
                              <option label="Nijerya" value="NG">Nijerya</option>
                              <option label="Norveç" value="NO">Norveç</option>
                              <option label="Umman" value="OM">Umman</option>
                              <option label="Pakistan" value="PK">Pakistan</option>
                              <option label="Palau" value="PW">Palau</option>
                              <option label="Filistin Devleti" value="PS">Filistin Devleti</option>
                              <option label="Panama" value="PA">Panama</option>
                              <option label="Papua Yeni Gine" value="PG">Papua Yeni Gine</option>
                              <option label="Paraguay" value="PY">Paraguay</option>
                              <option label="Peru" value="PE">Peru</option>
                              <option label="Filipinler" value="PH">Filipinler</option>
                              <option label="Polonya" value="PL">Polonya</option>
                              <option label="Portekiz" value="PT">Portekiz</option>
                              <option label="Porto Riko" value="PR">Porto Riko</option>
                              <option label="Katar" value="QA">Katar</option>
                              <option label="Romanya" value="RO">Romanya</option>
                              <option label="Rusya" value="RU">Rusya</option>
                              <option label="Ruanda" value="RW">Ruanda</option>
                              <option label="Saint Kitts ve Nevis" value="KN">Saint Kitts ve Nevis</option>
                              <option label="Saint Lucia" value="LC">Saint Lucia</option>
                              <option label="Saint Vincent ve Grenadinler" value="VC">Saint Vincent ve Grenadinler</option>
                              <option label="Samoa" value="WS">Samoa</option>
                              <option label="San Marino" value="SM">San Marino</option>
                              <option label="Sao Tome ve Principe" value="ST">Sao Tome ve Principe</option>
                              <option label="Suudi Arabistan" value="SA">Suudi Arabistan</option>
                              <option label="Senegal" value="SN">Senegal</option>
                              <option label="Sırbistan" value="RS">Sırbistan</option>
                              <option label="Seyşeller" value="SC">Seyşeller</option>
                              <option label="Sierra Leone" value="SL">Sierra Leone</option>
                              <option label="Singapur" value="SG">Singapur</option>
                              <option label="Slovakya" value="SK">Slovakya</option>
                              <option label="Slovenya" value="SI">Slovenya</option>
                              <option label="Solomon Adaları" value="SB">Solomon Adaları</option>
                              <option label="Somali" value="SO">Somali</option>
                              <option label="Güney Afrika" value="ZA">Güney Afrika</option>
                              <option label="Güney Kore" value="KR">Güney Kore</option>
                              <option label="Sri Lanka" value="LK">Sri Lanka</option>
                              <option label="Sudan" value="SD">Sudan</option>
                              <option label="Suriname" value="SR">Suriname</option>
                              <option label="İsveç" value="SE">İsveç</option>
                              <option label="Suriye" value="SY">Suriye</option>
                              <option label="Tayvan" value="TW">Tayvan</option>
                              <option label="Tajikistan" value="TJ">Tajikistan</option>
                              <option label="Tanzanya" value="TZ">Tanzanya</option>
                              <option label="Tayland" value="TH">Tayland</option>
                              <option label="Timor-Leste" value="TL">Timor-Leste</option>
                              <option label="Togo" value="TG">Togo</option>
                              <option label="Tonga" value="TO">Tonga</option>
                              <option label="Trinidad ve Tobago" value="TT">Trinidad ve Tobago</option>
                              <option label="Tunus" value="TN">Tunus</option>
                              <option label="Türkiye" value="TR" selected="selected">Türkiye</option>
                              <option label="Tükmenistan" value="TM">Tükmenistan</option>
                              <option label="Tuvalu" value="TV">Tuvalu</option>
                              <option label="Uganda" value="UG">Uganda</option>
                              <option label="Ukrayna" value="UA">Ukrayna</option>
                              <option label="Birleşik Arap Emirlikleri" value="AE">Birleşik Arap Emirlikleri</option>
                              <option label="Uruguay" value="UY">Uruguay</option>
                              <option label="Özbekistan" value="UZ">Özbekistan</option>
                              <option label="Vanuatu" value="VU">Vanuatu</option>
                              <option label="Venezuela" value="VE">Venezuela</option>
                              <option label="Vietnam" value="VN">Vietnam</option>
                              <option label="Virjin Adaları, Britanya" value="VG">Virjin Adaları, Britanya</option>
                              <option label="Virjin Adaları,Amerika Birleşik Devletleri " value="VI">Virjin Adaları,Amerika Birleşik Devletleri </option>
                              <option label="Yemen" value="YE">Yemen</option>
                              <option label="Zambiya" value="ZM">Zambiya</option>
                              <option label="Zimbabve" value="ZW">Zimbabve</option>
                            </select>
                          </div>
                          <div class="tooltip-j ng-hide" ng-show="personalDetails.disabledFields.indexOf('country_code') === -1">
                            <div trans="" ng-show="forms.detailsForm.country_code.$error.required" class="ng-hide">Bu alan gereklidir</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('city') !== -1, 'editable': personalDetails.editableFields.indexOf('city') !== -1}" class="editable">
                      <label><span trans="">Şehir</span>: <span class="hint" ng-show="personalDetails.requiredEditableFields.indexOf('city') !== -1">*</span></label>
                      <div class="disabled-field"><p>istanbul</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['city'] || forms.detailsForm['city'].$touched) &amp;&amp; forms.detailsForm.city.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="city" placeholder="Yaşadığınız şehri giriniz" trans="attr-only" type="text" ng-model="details.city" title="" ng-required="personalDetails.requiredEditableFields.indexOf('city') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('city') !== -1" ng-minlength="2" ng-maxlength="50" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" required="required">
                            <div class="form-error-icon-j" ng-click="resetFieldError('city')" ng-show="personalDetails.disabledFields.indexOf('city') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('city') === -1">
                              <div trans="" ng-show="forms.detailsForm.city.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.city.$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm.city.$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.city.$error.pattern" class="ng-hide">Please enter a valid city: only letters-no space, no digits and/or symbols.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      {"$viewValue":"adresle işimiz yok kanka","$modelValue":"adresle işimiz yok
                      kanka","$validators":{},"$asyncValidators":{},"$parsers":[],"$formatters":[null],"$viewChangeListeners":[],"$untouched":true,"$touched":false,"$pristine":true,"$dirty":false,"$valid":true,"$invalid":false,"$error":{},"$name":"address","$options":{}}
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('address') !== -1, 'editable': personalDetails.editableFields.indexOf('address') !== -1}" class="editable">
                      <label><span trans="">Adres</span>: <span class="hint" ng-show="personalDetails.requiredEditableFields.indexOf('address') !== -1">*</span></label>
                      <div class="disabled-field"><p>******* ******** *** *****</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['address'] || forms.detailsForm['address'].$touched) &amp;&amp; forms.detailsForm.address.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="address" title="" placeholder="Sokak / Ev" trans="" type="text" ng-model="details.address" ng-required="personalDetails.requiredEditableFields.indexOf('address') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('address') !== -1" ng-minlength="" ng-maxlength="" ng-pattern="^[^~!@$%^&amp;*()_+=`{};:<>|?\[\]\'\&quot;]*$" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" required="required">
                            <div class="form-error-icon-j" ng-click="resetFieldError('address')" ng-show="personalDetails.disabledFields.indexOf('address') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('address') === -1">
                              <div trans="" ng-show="forms.detailsForm.address.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.address.$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm.address.$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                              <div trans="" ng-show="forms.detailsForm.address.$error.pattern" class="ng-hide">Yalnızca harfler, boşluklar ve ardından semboller (/\,.-#)</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('phone_number') !== -1, 'editable': personalDetails.editableFields.indexOf('phone_number') !== -1}" class="editable">
                      <label><span trans="">İletişim numarası</span>:<span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('phone_number') !== -1">*</span></label>
                      <div class="disabled-field"><p>+90************</p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['phone_number'] || forms.detailsForm['phone_number'].$touched) &amp;&amp; forms.detailsForm['phone_number'].$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="phone_number" placeholder="Telefon numaranızı giriniz" trans="" prevent-input="[^\d]" ng-model="details.phone_number" ng-minlength="2" ng-maxlength="20" title="" type="text" ng-required="personalDetails.requiredEditableFields.indexOf('phone_number') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('phone_number') !== -1" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('phone_number')" ng-show="personalDetails.disabledFields.indexOf('phone_number') === -1"></div>
                            <div class="tooltip-j" ng-click="resetFieldError('phone_number')" ng-show="personalDetails.disabledFields.indexOf('phone_number') === -1">
                              <div trans="" ng-show="forms.detailsForm['phone_number'].$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm['phone_number'].$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm['phone_number'].$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('security_question') !== -1, 'editable': personalDetails.editableFields.indexOf('security_question') !== -1}">
                      <label><span trans="">Güvenlik sorusu</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('security_question') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="select-block">
                          <div class="tooltip-wrapper-j" ng-class="{'error': (!resetError['security_question'] || forms.detailsForm['security_question'].$touched) &amp;&amp; forms.detailsForm.security_question.$invalid}">
                            <select ng-model="details.security_question" title="" name="security_question" ng-required="personalDetails.requiredEditableFields.indexOf('security_question') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('security_question') !== -1" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required">
                              <option value="? undefined:undefined ?" selected="selected"></option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="İlk evcil hayvanınızın adı nedir?">İlk evcil hayvanınızın adı nedir?</option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="Okula başladığınızda kaç yaşındaydınız?">Okula başladığınızda kaç yaşındaydınız?</option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="Doğduğunuz şehrin adı nedir?">Doğduğunuz şehrin adı nedir?</option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="Okul numaranız neydi?">Okul numaranız neydi?</option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="İlk aşkınızın adı neydi?">İlk aşkınızın adı neydi?</option>
                              <option ng-repeat="q in $root.conf.registration.securityQuestion.questions track by $index" value="İlk arabanızın markası ve modeli neydi?">İlk arabanızın markası ve modeli neydi?</option>
                            </select>
                            <div class="form-error-icon-j" ng-click="resetFieldError('security_question')" ng-show="personalDetails.disabledFields.indexOf('security_question') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('security_question') === -1">
                              <div trans="" ng-show="forms.detailsForm.security_question.$error.required" class="ng-hide">Bu alan gereklidir</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('security_answer') !== -1, 'editable': personalDetails.editableFields.indexOf('security_answer') !== -1}">
                      <label><span trans="">Gizli cevap</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('security_answer') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error': (!resetError['security_answer'] || forms.detailsForm['security_answer'].$touched) &amp;&amp; forms.detailsForm.security_answer.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="security_answer" type="text" ng-model="details.security_answer" title="" ng-required="personalDetails.requiredEditableFields.indexOf('security_answer') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('security_answer') !== -1" ng-minlength="" ng-maxlength="" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ng-valid-minlength ng-valid-maxlength">
                            <div class="form-error-icon-j" ng-click="resetFieldError('security_answer')" ng-show="personalDetails.disabledFields.indexOf('security_answer') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('security_answer') === -1">
                              <div trans="" ng-show="forms.detailsForm.security_answer.$error.required" class="ng-hide">Bu alan gereklidir</div>
                              <div trans="" ng-show="forms.detailsForm.security_answer.$error.minlength" class="ng-hide">Bu alan çok kısa</div>
                              <div trans="" ng-show="forms.detailsForm.security_answer.$error.maxlength" class="ng-hide">Bu alan çok uzun</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('account_holder') !== -1, 'editable': personalDetails.editableFields.indexOf('account_holder') !== -1}">
                      <label><span trans="">Hesap Sahibi</span>: <span class="hint ng-hide" ng-show="personalDetails.requiredEditableFields.indexOf('account_holder') !== -1">*</span></label>
                      <div class="disabled-field"><p></p></div>
                      <div class="active-field">
                        <div class="form-text" ng-class="{'error':(!resetError['account_holder'] || forms.detailsForm['account_holder'].$touched) &amp;&amp;  forms.detailsForm.account_holder.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input name="account_holder" type="text" ng-model="details.account_holder" title="" ng-required="personalDetails.requiredEditableFields.indexOf('account_holder') !== -1" ng-disabled="personalDetails.disabledFields.indexOf('account_holder') !== -1" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required">
                            <div class="form-error-icon-j" ng-click="resetFieldError('account_holder')" ng-show="personalDetails.disabledFields.indexOf('account_holder') === -1"></div>
                            <div class="tooltip-j" ng-show="personalDetails.disabledFields.indexOf('account_holder') === -1">
                              <div trans="" ng-show="forms.detailsForm.account_holder.$error.required" class="ng-hide">Bu alan gereklidir</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('doc_issued_by') !== -1}">
                      <label><span trans="">Belge</span>:</label>
                      <div class="disabled-field"><p></p></div>
                    </li>
                    <li ng-class="{'read-only': personalDetails.readOnlyFields.indexOf('doc_issue_date') !== -1}">
                      <label><span trans="">Document Issue date</span>:</label>
                      <div class="disabled-field"><p></p></div>
                    </li>
                    <li class="visible-item">
                      <label><span trans="">Mevcut Şifre</span>: <span class="hint">*</span></label>
                      <div>
                        <div class="form-text" ng-class="{'error': forms.detailsForm.$dirty &amp;&amp; forms.detailsForm.password.$untouched || forms.detailsForm.password.$touched &amp;&amp; forms.detailsForm.password.$invalid}">
                          <div class="tooltip-wrapper-j">
                            <input ng-disabled="!forms.detailsForm.$dirty" name="password" ng-model="details.password" type="password" placeholder="Şifrenizi giriniz" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" disabled="disabled">
                            <div class="tooltip-j" ng-show="forms.detailsForm.password.$error.required"><div trans="" class="">Bu alan gereklidir</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="profile-preference-p" ng-if="$root.conf.gdpr.profile ||
            personalDetails.editableFields.indexOf('subscribed_to_news') !== -1 ||
            personalDetails.editableFields.indexOf('notify_via_email') !== -1 ||
            personalDetails.editableFields.indexOf('notify_via_sms') !== -1 ||
            personalDetails.editableFields.indexOf('subscribe_to_email') !== -1 ||
            personalDetails.editableFields.indexOf('subscribe_to_sms') !== -1 ||
            personalDetails.editableFields.indexOf('subscribe_to_bonus') !== -1">
                    <p trans="" ng-click="showBlocks.preferences=!showBlocks.preferences; showBlocks.permissions = false;" ng-class="{'collapsed':showBlocks.preferences }" class="collapsed">Seçenekler</p>
                    <ng-include ng-if="$root.conf.gdpr.profile" ng-show="showBlocks.preferences" src="::'templates/slider/registration/gdpr.html'|fixPath">
                      <div class="reg-radio">
                        <h2 trans="">Haberleri ve teklifleri bana bildir:</h2>
                        <div ng-repeat="(key, val) in conf.gdpr.options" ng-class="{'error': (registerform[key].$error.required &amp;&amp; resetError.gdprTouched) || forms.detailsForm[key].$invalid}">
                          <p ng-class="{'error': !resetError[agree] &amp;&amp; registerform.agree.$error.required}">Dahili Mesajlar</p>
                          <input id="reg-radio-subscribe_to_internal_message-no" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_internal_message" value="false" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_internal_message-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                          <input id="reg-radio-subscribe_to_internal_message-yes" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_internal_message" value="true" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_internal_message-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                        </div>
                        <div ng-repeat="(key, val) in conf.gdpr.options" ng-class="{'error': (registerform[key].$error.required &amp;&amp; resetError.gdprTouched) || forms.detailsForm[key].$invalid}">
                          <p ng-class="{'error': !resetError[agree] &amp;&amp; registerform.agree.$error.required}">Push Bildirimleri</p>
                          <input id="reg-radio-subscribe_to_push_notification-no" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_push_notification" value="false" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_push_notification-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                          <input id="reg-radio-subscribe_to_push_notification-yes" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_push_notification" value="true" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_push_notification-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                        </div>
                        <div ng-repeat="(key, val) in conf.gdpr.options" ng-class="{'error': (registerform[key].$error.required &amp;&amp; resetError.gdprTouched) || forms.detailsForm[key].$invalid}">
                          <p ng-class="{'error': !resetError[agree] &amp;&amp; registerform.agree.$error.required}">Telefon Görüşmesi</p>
                          <input id="reg-radio-subscribe_to_phone_call-no" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_phone_call" value="false" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_phone_call-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                          <input id="reg-radio-subscribe_to_phone_call-yes" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_phone_call" value="true" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_phone_call-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                        </div>
                        <div ng-repeat="(key, val) in conf.gdpr.options" ng-class="{'error': (registerform[key].$error.required &amp;&amp; resetError.gdprTouched) || forms.detailsForm[key].$invalid}">
                          <p ng-class="{'error': !resetError[agree] &amp;&amp; registerform.agree.$error.required}">E-posta</p>
                          <input id="reg-radio-subscribe_to_email-no" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_email" value="false" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_email-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                          <input id="reg-radio-subscribe_to_email-yes" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_email" value="true" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_email-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                        </div>
                        <div ng-repeat="(key, val) in conf.gdpr.options" ng-class="{'error': (registerform[key].$error.required &amp;&amp; resetError.gdprTouched) || forms.detailsForm[key].$invalid}">
                          <p ng-class="{'error': !resetError[agree] &amp;&amp; registerform.agree.$error.required}">SMS</p>
                          <input id="reg-radio-subscribe_to_sms-no" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_sms" value="false" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_sms-no" class="label-reg-radio"><span trans="">Hayır</span></label>
                          <input id="reg-radio-subscribe_to_sms-yes" ng-model="registrationData[key]" ng-click="resetError.gdprTouched=true" type="radio" name="subscribe_to_sms" value="true" required="" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                          <label for="reg-radio-subscribe_to_sms-yes" class="label-reg-radio"><span trans="">Evet</span></label>
                        </div>
                      </div>
                    </ng-include>
                  </div>
                </div>
                <div class="change-button-container password">
                  <div class="cashier-button">
                    <button ng-show="!working" ng-disabled="!forms.detailsForm.$dirty || forms.detailsForm.$invalid || (userAge &amp;&amp; userAge < $root.conf.registration.minimumAllowedAge)" ng-click="resetError = {};changeDetails()" trans="" disabled="disabled">
                      Kaydet
                    </button>
                    <button disabled="" ng-show="working" trans="" class="ng-hide">Bekleyiniz...</button>
                  </div>
                </div>
              </form>
              <ng-include src="'templates/livebox/profileCustomComponent.html'|fixPath"></ng-include>
            </div>
          </div>
          <ng-include src="::'templates/livebox/mixedDepositLimits.html'|fixPath"></ng-include><ng-include src="::'templates/livebox/mixedBetLimits.html'|fixPath"></ng-include>
        </div>
      </div>
    </div>
  </div>
</ng-include>

    </div>
  </div>
</div>




        
      </div>