<div class="modal sign-up-modal sign-up-modal--with-banner" id="modal-sign-up" aria-hidden="true" data-hash="sign-up">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <ul class="signup_banner signup_banner--mob"></ul>

            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-sign-up-title">
                <ul class="signup_banner signup_banner--desktop"></ul>

                <header class="modal__header">
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-sign-up-content">
                    <form method="post" id="register_form" onsubmit="event.preventDefault()" >

                        <div class="steps">
                            <div class="steps__list">
                                <ul class="steps-list">
                                    <li class="steps-list__item is-current" data-step="1">1</li>
                                    <li class="steps-list__item" data-step="2">2</li>
                                </ul>
                            </div>
                            <div class="steps__sections">
                                <div class="steps-section is-current" data-step="1">
                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_username">Kullanıcı Adı</label>
                                        <input type="text" id="gamingtec_register_username" name="login" required="required" class="field-input form-item__control" data-name="username"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_email">E-posta</label>
                                        <input type="email" id="gamingtec_register_email"  required="required" class="field-input form-item__control" data-name="email"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_password">Şifre</label>
                                        <div class="field-wrapper c-field-wrapper-password">
                                            <input type="password" id="gamingtec_register_password" name="password" required="required" class="field-input form-item__control c-input-password" data-name="password"/>
                                            <div class="field-wrapper__suffix field-wrapper__suffix--clickable">
                                                <span class="icon c-icon-eye">
                                                    <svg class="icon__cnt">
                                                        <use xlink:href="#icon-eye"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_firstName">Adınız</label>
                                        <input type="text" id="gamingtec_register_firstName" required="required" class="field-input form-item__control" data-name="first_name"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_lastName">Soyadınız</label>
                                        <input type="text" id="gamingtec_register_lastName" required="required" class="field-input form-item__control" data-name="last_name"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required">Doğum Tarihiniz</label>
                                        <div class="form-item__control">
                                            <div class="form-item">
                                                <select id="gamingtec_register_birthDate_day" required="required" data-select="">
                                                    <option value="">Gün</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24" selected="selected">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                <div class="form-item__explain"></div>
                                            </div>
                                            <div class="form-item">
                                                <select id="gamingtec_register_birthDate_month" required="required" data-select="">
                                                    <option value="">Ay</option>
                                                    <option value="1">Oca</option>
                                                    <option value="2">Şub</option>
                                                    <option value="3">Mar</option>
                                                    <option value="4">Nis</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Haz</option>
                                                    <option value="7">Tem</option>
                                                    <option value="8">Ağu</option>
                                                    <option value="9">Eyl</option>
                                                    <option value="10" selected="selected">Eki</option>
                                                    <option value="11">Kas</option>
                                                    <option value="12">Ara</option>
                                                </select>
                                                <div class="form-item__explain"></div>
                                            </div>

                                            <div class="form-item">
                                                <select id="gamingtec_register_birthDate_year" required="required" data-select="">
                                                    <option value="">Yıl</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004" selected="selected">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                                <div class="form-item__explain"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_gender">Cinsiyet Seçiniz</label>
                                        <select id="gamingtec_register_gender" data-select="">
                                            <option value="M">Erkek</option>
                                            <option value="F">Kadın</option>
                                        </select>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item form-item--submit">
                                        <button data-next-trigger type="button" class="button button--primary button--block">İLERİ</button>
                                    </div>
                                </div>

                                <div class="steps-section" data-step="2">

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_mobilePhone">Cep Telefonu</label>
                                        <input type="text" id="gamingtec_register_mobilePhone" name="phone" required="required" value="+905" class="field-input form-item__control" data-name="mobile_phone" data-input-mask="+90 (000) 000-00-00"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_address">Adres</label>
                                        <input type="text" id="gamingtec_register_address" required="required" class="field-input form-item__control"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_postalCode">Posta Kodu</label>
                                        <input type="text" id="gamingtec_register_postalCode" required="required" class="field-input form-item__control" data-name="postal_code"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label required" for="gamingtec_register_city">Şehir</label>
                                        <input type="text" id="gamingtec_register_city" required="required" class="field-input form-item__control"/>
                                        <div class="form-item__explain"></div>
                                    </div>

                                    <div class="form-item">
                                        <div class="form-item__control">
                                            <div class="form-item">
                                                <label class="form-item__label required" for="gamingtec_register_country">Ülke</label>

                                                <select id="gamingtec_register_country" data-select="">
                                                    <option value="BR">Brezilya</option>
                                                    <option value="DK">Danimarka</option>
                                                    <option value="FI">Finlandiya</option>
                                                    <option value="IN">Hindistan</option>
                                                    <option value="JP">Japonya</option>
                                                    <option value="NO">Norveç</option>
                                                    <option value="PL">Polonya</option>
                                                    <option value="PT">Portekiz</option>
                                                    <option value="RU">Rusya</option>
                                                    <option value="TR" selected="selected">Türkiye</option>
                                                    <option disabled="disabled">-------------------</option>
                                                    <option value="AT">Avusturya</option>
                                                    <option value="AZ">Azerbaycan</option>
                                                    <option value="BE">Belçika</option>
                                                    <option value="BG">Bulgaristan</option>
                                                    <option value="CZ">Çekya</option>
                                                    <option value="EE">Estonya</option>
                                                    <option value="HR">Hırvatistan</option>
                                                    <option value="IE">İrlanda</option>
                                                    <option value="SE">İsveç</option>
                                                    <option value="IT">İtalya</option>
                                                    <option value="LV">Letonya</option>
                                                    <option value="LT">Litvanya</option>
                                                    <option value="LU">Lüksemburg</option>
                                                    <option value="HU">Macaristan</option>
                                                    <option value="SK">Slovakya</option>
                                                    <option value="SI">Slovenya</option>
                                                    <option value="GR">Yunanistan</option>
                                                </select>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-item__label required" for="gamingtec_register_currency">Para Birimi</label>
                                                <select id="gamingtec_register_currency" data-select="">
                                                    <option value="EUR">EUR</option>
                                                    <option value="TRY" selected="selected">TRY</option>
                                                    <option value="USD">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-item">
                                        <label class="form-item__label">Güvenli Giriş</label>
                                        <div class="form-item__explain text-notice">Lütfen e-posta ve telefon numaranızın doğru olduğundan emin olunuz. Güvenliğiniz için şüpheli bir giriş denemesinde e-posta adresinize veya telefon numaranıza doğrulama kodu gönderilecektir.</div>
                                    </div>

                                
                                    <div class="form-item">
                                        <div class="form-item__control">
                                            <label class="checkbox-wrapper">
                                                <div class="checkbox-input checkbox-wrapper__input">
                                                    <input type="checkbox" id="gamingtec_register_agreeTermAndConditions" required="required" data-name="term_and_conditions" value="1"/>
                                                    <div class="checkbox-input__inner"></div>
                                                </div>
                                                <span class="small-text checkbox-wrapper__label">

                                                                                                Onaylıyorum  
                                                    <a href="terms-and-conditions.html" class="greenLink">Şartlar ve Koşullar</a>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-item__explain"></div>
                                    </div>
                                    <input type="hidden" name="user_type" value="2">
                                    <div class="form-item form-item--submit" style="flex-direction: row">
                                        <button type="button" class="button button--outline" style="margin-right: 18px" data-prev-trigger>GERİ</button>
                                        <button onclick="signUp()" type="submit" class="button button--primary button--block">Hemen Üye Ol</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display: none">
                            <input type="checkbox" id="gamingtec_register_otp_enabled_by_default" value="1"/>
                            <input type="checkbox" id="gamingtec_register_otp_transport_sms" value="1"/>
                            <input type="checkbox" id="gamingtec_register_otp_transport_email" value="1"/>
                            <input type="password" id="gamingtec_register_repeatPassword" required="required" class="password-field"/>
                            <input type="email" id="gamingtec_register_repeatEmail" required="required"/>
                            <input type="text" id="gamingtec_register_securityAnswer" required="required"/>
                            <select id="gamingtec_register_securityQuestion">
                                <option value="First pets name?">Evcil Hayvanının Adı?</option>
                                <option value="Favourite movie?">En Sevdiğin Film Adı?</option>
                                <option value="Anniversary?">Yıl Dönümü?</option>
                                <option value="Fathers middle name?">Babanın İkinci Adı?</option>
                                <option value="Spouses middle name?">Eşinizin İkinic Adı?</option>
                                <option value="First childs middle name?">İlk çocuğunun ikinci adı?</option>
                                <option value="High school name?">Okuduğun Lise Adı ?</option>
                                <option value="Favourite teachers name?">En sevdiğin ögretmenin adı?</option>
                                <option value="Favourite sports team?">İlk Arabanın Markası?</option>
                                <option value="Favourite Colour?">En Sevdiğin Renk?</option>
                                <option value="What is your postcode?">Posta Konudunuz Nedir?</option>
                                <option value="What is your date of birth?">Dogum Tarihi</option>
                            </select>
                            <input type="hidden" id="gamingtec_register_referralId"/>
                            <input type="hidden" id="gamingtec_register_bonusCode"/>
                            <input type="hidden" id="gamingtec_register_extraInfo"/>
                            <input type="hidden" id="gamingtec_register_googleSearchId"/>
                            <input type="checkbox" id="gamingtec_register_receiveEmail" value="1"/>
                            <input type="text" id="gamingtec_register_btag"/>
                            <div id="gamingtec_register_captcha"></div>
                        </div>

                        <input type="hidden" id="gamingtec_register_agentCode"/>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-forgot-password" aria-hidden="true" data-hash="forgot-password">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-forgot-password-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title" id="modal-forgot-password-title">Şifre Hatırlat</h2>
                    <p class="modal__lead">

                                            Yeni şifrenizi almak için lütfen e-posta adresinizi giriniz:
                                            
                        <span style="display: block; font-size: 13px; line-height: 18px; margin-top: 10px">Kayıtlı e-posta adresinizi unuttuysanız, lütfen canlı yardım servisimiz ile temasa geçiniz</span>
                    </p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <form name="gamingtec_forgot_password_step_1_and_2" method="post" class="form c-ajax-form" action="https://trbet839.com/tr/forgotPassword">
                    <main class="modal__content" id="modal-forgot-password-content">
                        <div class="form-item">
                            <label for="email" class="form-item__label">
                                <label for="gamingtec_forgot_password_step_1_and_2_email" class="required">Eposta Adresinizi Giriniz</label>
                            </label>
                            <input type="email" id="gamingtec_forgot_password_step_1_and_2_email" name="gamingtec_forgot_password_step_1_and_2[email]" required="required" class="field-input form-item__control" data-name="email"/>
                            <div class="form-item__explain"></div>
                        </div>
                    </main>
                    <div class="modal__action">
                        <button type="submit" class="button button--primary button--block">İLERİ</button>
                    </div>

                    <footer class="modal__footer for-vip-domain">
                        <p>
                            <span>form.login.is_member</span>
                            <button class="link" data-show-modal="modal-sign-in">form.login.login_btn</button>
                        </p>
                    </footer>

                    <input type="hidden" id="gamingtec_forgot_password_step_1_and_2__token" name="gamingtec_forgot_password_step_1_and_2[_token]" value="BCndztneLJS9WBykAynZQdml07t9oWme9ZIB0YbqDW0"/>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-forgot-password-letter-sent" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-forgot-password-letter-sent-title">
                <header class="modal__header">
                    <img src="https://trbet839.com/assets/img/new-mail-icon.svg" alt="New mail" class="modal__icon">
                    <h2 class="title title--2 modal__title" id="modal-forgot-password-letter-sent-title">form.forgot_password.after_sending.title</h2>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-forgot-password-letter-sent-content">
                    <ul class="bullet-list">
                        <li class="bullet-list__item">Şifrenizi yenilemek için lütfen tarafınıza gönderilen şifreme yenileme linkine tıklayınız.</li>
                        <li class="bullet-list__item">Lütfen gereksiz eposta (spam) klasörünü kontrol ediniz</li>
                        <li class="bullet-list__item">
                            Lütfen müşteri hizmetleri 
                            <a href="https://trbet839.com/cdn-cgi/l/email-protection#f0838580809f8284b08482929584de939f9d" class="link"> Müşteri Hizmetleri</a>
                             ile temasa geçiniz.
                        </li>
                    </ul>
                </main>
                <div class="modal__action">
                    <button type="button" class="button button--primary button--block" data-modal-close>form.forgot_password.after_sending.footer_button</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-sign-in" aria-hidden="true" data-hash="sign-in">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-sign-in-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title">Lütfen Giriş Yapınız</h2>
                    <h2 class="title title--2 modal__title for-vip-domain">form.login.welcome</h2>
                    <p class="modal__lead for-vip-domain">form.login.welcome_desc</p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <form id="login_form" onsubmit="logIn()" action="javascript:;" method="post">
                    <main class="modal__content" id="modal-sign-in-content">
                        <div class="form-item">
                            <label for="username" class="form-item__label">Kullanıcı Adı</label>
                            <input name="login" id="username" type="text" class="field-input form-item__control" data-name="username" required="required"/>
                            <div class="form-item__explain"></div>
                        </div>
                        <div class="form-item">
                            <label for="password" class="form-item__label">Şifre</label>
                            <div class="field-wrapper c-field-wrapper-password">
                                <input name="password" id="password" type="password" class="field-input form-item__control c-input-password" data-name="password" required="required"/>
                                <div class="field-wrapper__suffix field-wrapper__suffix--clickable">
                                    <span class="icon c-icon-eye">
                                        <svg class="icon__cnt">
                                            <use xlink:href="#icon-eye"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="form-item__explain"></div>
                        </div>
                        <div class="form-item">
                            <p>
                                <button type="button" class="link" data-show-modal="modal-forgot-password">Şifremi Unuttum?</button>
                            </p>
                        </div>
                    </main>
                    <div class="modal__action">
                        <button type="submit" class="button button--primary button--block">GİRİŞ</button>
                    </div>
                </form>
                <footer class="modal__footer">
                    <p>
                        <span>Lütfen Kayıt Olunuz</span>
                        <button class="link" data-show-modal="modal-sign-up">Kayıt Ol</button>
                    </p>
                </footer>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-sign-in-tfa" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-sign-in-tfa-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title" id="modal-sign-in-tfa-title">Lütfen Giriş Yapınız</h2>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <form class="form c-ajax-form" action="https://trbet839.com/tr/profile/process-two-fa" name="gamingtec_two_fa" method="post">
                    <main class="modal__content" id="modal-sign-in-tfa-content">
                        <div class="form-item">
                            <label for="code" class="form-item__label">E-posta veya Sms Kodu Giriniz</label>
                            <input name="gamingtec_two_fa[code]" id="code" type="text" class="field-input form-item__control" data-name="tfa_code" required="required"/>
                            <div class="form-item__explain"></div>
                        </div>
                    </main>
                    <div class="modal__action">
                        <button type="submit" class="button button--primary button--block">GİRİŞ</button>
                    </div>
                </form>
                <footer class="modal__footer">
                    <p>
                        <button class="link c-resend-tfa-code-button">Tekrar Kod Gönder</button>
                        <span class="countdown c-tfa-countdown" style="display: none;"></span>
                    </p>
                </footer>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-confirm-email" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-confirm-email-title">
                <header class="modal__header">
                    <img src="https://trbet839.com/assets/img/new-mail-icon.svg" alt="New mail" class="modal__icon">
                    <h2 class="title title--2 modal__title" id="modal-confirm-email-title">Confirm your Email</h2>
                    <p class="modal__lead">
                        To confirm your email, please follow the instructions that we send on 
                        <b><a href="https://trbet839.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fcbd988b9f899e959fbc9893919d9592d29f9391">[email&#160;protected]</a></b>
                        .
                    </p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <!-- <main class="modal__content" id="modal-confirm-email-content">
                            </main> -->
                <div class="modal__action">
                    <button type="submit" class="button button--primary" data-modal-close>Ok</button>
                </div>
                <footer class="modal__footer">
                    <p>
                        <button class="link">Resend Email</button>
                    </p>
                </footer>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-confirm-email-completed" aria-hidden="true" data-hash="email-verified">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-confirm-email-completed-title">
                <header class="modal__header">
                    <img src="https://trbet839.com/assets/img/success-icon.svg" alt="Success" class="modal__icon">
                    <h2 class="title title--2 modal__title" id="modal-confirm-email-completed-title">form.verification_completed</h2>
                    <p class="modal__lead">form.thank_you_for_you_registration!</p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <!-- <main class="modal__content" id="modal-confirm-email-completed-content">
                            </main> -->
                <div class="modal__action">
                    <button type="submit" class="button button--primary" data-modal-close>form.ok</button>
                </div>
                <!-- <footer class="modal__footer">
                                <p></p>
                            </footer> -->
            </div>
        </div>
    </div>

    <div class="modal welcome-modal" id="modal-welcome" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-welcome-title">
                <header class="modal__header">
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-welcome-content">
                    <div class="welcome-modal-message">
                        <span class="welcome-modal-message__text">TrBet mobil uygulamamızı indirerek engellere takılmadan güvenli giriş yapabilirsiniz.</span>
                    </div>
                    <div class="welcome-modal-content">
                        <div class="welcome-modal-content__banner">
                            <div class="c-welcome-banner"></div>
                            <a href="https://trbet.me/mobilapp" class="welcome-modal-mobile-app-banner">
                                <img src="../assets/img/welcome-mobile-app-banner.png" class="welcome-modal-mobile-app-banner__img"/>
                            </a>
                        </div>
                        <div class="welcome-modal-content__body">
                            <div class="welcome-modal-body c-tabs">
                                <ul class="welcome-modal-tabs">
                                    <li class="welcome-modal-tabs__item c-tabs-list-item is-current" data-tab="recently-played">Son Oynanan Oyunlar</li>
                                    <li class="welcome-modal-tabs__item c-tabs-list-item" data-tab="most-popular" style="display: none">En Popüler</li>
                                    <li class="welcome-modal-tabs__item c-tabs-list-item" data-tab="recommended" style="display: none">Önerilenler</li>
                                </ul>
                                <div class="tabs-section welcome-modal-body__tabs-section c-tabs-section is-current" data-tab="recently-played">
                                    <div class="game-list game-list--small welcome-modal-games c-welcome-recently-played"></div>
                                    <div class="welcome-modal-body__button">
                                        <a class="button button--primary" href="profile/show.html">Hesabım</a>
                                    </div>
                                </div>
                                <div class="tabs-section welcome-modal-body__tabs-section c-tabs-section" data-tab="most-popular">
                                    <div class="game-list game-list--small welcome-modal-games c-welcome-most-popular"></div>
                                    <div class="welcome-modal-body__button">
                                        <a class="button button--primary" href="casino/most-popular.html">Daha</a>
                                    </div>
                                </div>
                                <div class="tabs-section welcome-modal-body__tabs-section c-tabs-section" data-tab="recommended">
                                    <div class="game-list game-list--small welcome-modal-games c-welcome-recommended"></div>
                                    <div class="welcome-modal-body__button">
                                        <a class="button button--primary" href="casino/recommended.html">Daha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="welcome-modal-content__deposit">
                            <div class="welcome-modal-deposit">
                                <img src="https://trbet839.com/assets/img/credit-card.svg" class="welcome-modal-deposit__img" class="credit card">
                                <h3 class="welcome-modal-deposit__title">Şimdi Yatır</h3>
                                <p class="welcome-modal-deposit__desc">Güvenilir para yatırma yöntemlerimizden birini seçerek para yatırın ve hemen kazanmaya başlayın!</p>
                                <div class="welcome-modal-deposit__balance">
                                    <div class="welcome-modal-balance">
                                        <span class="welcome-modal-balance__label">BAKİYE</span>
                                        <span class="welcome-modal-balance__value">
                                            <span class="c-currency"></span>
                                            <span class="c-total-balance">0.00</span>
                                        </span>
                                    </div>
                                </div>
                                <a href="login.html" class="welcome-modal-deposit__button">Para Yatır</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script id="welcome-modal-banner-template" type="text/x-squirrelly-template">
        <div class="welcome-modal-banner">
            <a href="{{link}}" target="{{target}}" class="welcome-modal-banner__link">
                <img src="{{imageUrl}}" name="{{name}}" class="welcome-modal-banner__img" />
            </a>
        </div>
    </script>

    <div class="modal" id="modal-ios-add-to-home" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-ios-add-to-home-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title" id="modal-ios-add-to-home-title">
                                        Uygulamayı indir
                                    </h2>
                    <p class="modal__lead">Yeni nesil uygulamamızın son halini aşağıdaki adımlarla iOS cihazınıza kurabilirsiniz</p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-ios-add-to-home-content">
                    <p>

                                            Kurmak için
                                            
                        <img src="https://trbet839.com/assets/img/pwa/icon-ios-options.svg" alt="">

                                            simgesine dokunun ve açılan listeden &quot;Ana Ekrana Ekle&quot; seçip açılan pencerede &quot;Ekle&quot;&#039;ye dokunun&quot;
                                        
                    </p>
                </main>
            </div>
        </div>
    </div>

    <div class="modal pwa-qr-modal" id="modal-pwa-qr" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-pwa-qr-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title" id="modal-pwa-qr-title">
                                        Uygulamayı yüklemek için lütfen QR kodunu tarayınız
                                    </h2>
                    <p class="modal__lead">Taramak için telefonunuzun kamerasını kullanın</p>
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-pwa-qr-content">
                    <img alt="qr code" class="c-pwa-qr-code">
                    <p>Apple mağzasın da uygulamamız mevcut değildir, doğrudan tarayıcınız üzerinden uygulamamızı yükleyebilirsiniz</p>
                </main>
            </div>
        </div>
    </div>

    <div class="modal iframe-game-modal" id="modal-iframe-game" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-modal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-iframe-game-title">
                <header class="modal__header">
                    <button class="modal__close" aria-label="Close modal" aria-hidden="true" data-modal-close>
                        <span class="icon">
                            <svg class="icon__cnt">
                                <use xlink:href="#icon-times"></use>
                            </svg>
                        </span>
                    </button>
                </header>
                <main class="modal__content" id="modal-iframe-game-content"></main>
            </div>
        </div>
    </div>

    <div class="modal terms-modal" id="modal-terms" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-terms-title">
                <header class="modal__header">
                    <h2 class="title title--2 modal__title" id="modal-terms-title">
                                        Şartlar ve Koşullar
                                    </h2>
                    <p class="modal__lead">

                                            Güncellenme Tarihi: 
                        <span class="c-terms-updated-at"></span>
                    </p>
                </header>
                <main class="modal__content" id="modal-terms-content">
                    <div class="modal__terms-desc c-terms-desc"></div>

                    <div class="modal__terms-form">
                        <div class="form-item">
                            <div class="form-item__control">
                                <label class="checkbox-wrapper">
                                    <div class="checkbox-input checkbox-wrapper__input">
                                        <input type="checkbox" class="c-terms-checkbox">
                                        <div class="checkbox-input__inner"></div>
                                    </div>
                                    <span class="small-text checkbox-wrapper__label">
                                                                        Kullanıcı sözleşmesini okudum ve kabul ediyorum
                                                                    </span>
                                </label>
                            </div>
                        </div>

                        <button class="button button--primary modal__accept-button c-terms-accept" disabled>
                                                Kabul Et
                                            </button>
                    </div>
                </main>
            </div>
        </div>
    </div>