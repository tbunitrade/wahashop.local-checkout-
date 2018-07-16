<?php /**
Template Name: Woocommerce checkout
 **/ ?>

<?php get_header(); ?>

   <div class="woocommerceCheckoutPageWrap">
       <!-- here start row first -->
       <div class="row">
           <div class="checkoutHeader">
               <div id="current" class="currentPage" >0</div>
               <h3>
                   Оформить заказ
               </h3>
                    <div class="dot"></div>
               <!-- Start of Navigation -->
               <ul class="navigation">
                   <li class="nav1"><a id="number1" class="number1" href="#">1<span>1</span></a> </li>
                   <li class="nav2"><a id="number2" class="number2" href="#">2<span></span></a> </li>
                   <li class="nav3"><a id="number3" class="number3" href="#">3<span></span></a> </li>
               </ul>
               <!-- end of Navigation -->
           </div>
       </div>
       <!-- here start row big row -->
       <div class="row" id="step1">
           <div class="col-sm-12 col-md-12 ">
               <div class="productList">
                   <div class="hereInner">
                           <div class="title">
                               Ваша корзина
                               <label>
                                   Проверьте ваш заказ
                               </label>
                           </div>
                       <!-- productSummary -->
                           <ul class="productSummary">
                               <li class="produclLi">
                                   <div class="row">
                                       <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       <p class="name">
                                          Чехол-несессер Waxa Shop
                                       </p>
                                       <p class="data">
                                           1 Х 2 660 Р.-
                                       </p>
                                       <p class="attribute color">
                                           Цвет: Темно-коричневый
                                       </p>

                                       <div class="sum">
                                           <em>+</em><label>1</label>
                                       </div>
                                       <div class="cancel">

                                       </div>
                                   </div>
                               </li>
                               <!-- more li-->
                               <li class="produclLi">
                                   <div class="row">
                                       <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       <p class="name">
                                           Чехол-несессер Waxa Shop
                                       </p>
                                       <p class="data">
                                           1 Х 2 660 Р.-
                                       </p>
                                       <p class="attribute color">
                                           Цвет: Темно-коричневый
                                       </p>

                                       <div class="sum">
                                           <em>+</em><label>1</label>
                                       </div>
                                       <div class="cancel">

                                       </div>
                                   </div>
                               </li>

                               <!-- more li-->
                               <li class="produclLi">
                                   <div class="row">
                                       <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       <p class="name">
                                           Чехол-несессер Waxa Shop
                                       </p>
                                       <p class="data">
                                           1 Х 2 660 Р.-
                                       </p>
                                       <p class="attribute color">
                                           Цвет: Темно-коричневый
                                       </p>

                                       <div class="sum">
                                           <em>+</em><label>1</label>
                                       </div>
                                       <div class="cancel">

                                       </div>
                                   </div>
                               </li>

                               <!-- more li-->
                               <li class="produclLi">
                                   <div class="row">
                                       <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       <p class="name">
                                           Чехол-несессер Waxa Shop
                                       </p>
                                       <p class="data">
                                           1 Х 2 660 Р.-
                                       </p>
                                       <p class="attribute color">
                                           Цвет: Темно-коричневый
                                       </p>

                                       <div class="sum">
                                           <em>+</em><label>1</label>
                                       </div>
                                       <div class="cancel">

                                       </div>
                                   </div>
                               </li>
                           </ul>
                       <!-- end of productSummary -->
                       <!--  totalWrap -->
                           <div class="totalWrap">
                               <div class="row">
                                   <div class="col-md-6">
                                       <h3>
                                           Сумма заказа:
                                       </h3>

                                       <div class="price">
                                           3 230 <b> Р.-</b>
                                       </div>
                                   </div>

                                   <div class="col-md-6">
                                        <a class="bonus" href="#">Оплатить баллами</a>
                                   </div>
                               </div>
                               <div class="promoWrap">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>
                                               У вас есть помокод?
                                           </label>

                                            <fieldset>
                                                <input type="text" placeholder="Введите промокод">
                                            </fieldset>
                                       </div>

                                       <div class="col-md-6">
                                           <a class="code" href="#">Применить</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       <!-- end of totalWrap -->
                   </div>
               </div>
               <!-- end of productList -->
           </div>

           <div class="col-sm-12 col-md-12 ">
                   <div class="costumerData">
                           <div class="hereInner">

                               <div class="title">
                                   Шаг 1
                                   <label>
                                       Данные получателя заказа
                                   </label>
                               </div>

                               <div class="row">
                                   <div class="col-md-3">
                                       <a class=" loginWoo" href="#">Войти</a>
                                   </div>
                                   <div class="col-md-9">
                                       <label class="loginWooLabel">
                                           чтобы воспользоваться привилегиями клиента
                                           и зачислить бонусные баллы
                                       </label>
                                   </div>
                               </div>

                               <div class="row ">
                                       <div class="hereStartForm">

                                       <form class="form">

                                           <fieldset>

                                               <input type="text" placeholder="Ваши ФИО">
                                               <div class="error">ЗАПОЛНИТЕ ПОЛЕ!</div>
                                           </fieldset>

                                           <fieldset>
                                               <input type="text" placeholder="Контактный телефон">
                                               <div class="error">ЗАПОЛНИТЕ ПОЛЕ!</div>
                                           </fieldset>

                                           <fieldset>
                                               <input type="text" placeholder="Email">
                                           </fieldset>

                                           <fieldset>
                                               <input type="text" placeholder="Ваш населенный пункт *">
                                               <div class="error">ЗАПОЛНИТЕ ПОЛЕ!</div>
                                           </fieldset>
                                           <div class="row">
                                               <div class="bottomOfForm">

                                                   <fieldset class="col-md-6">
                                                       <label for="registerme"></label>
                                                       <input type="checkbox" id="registerme">
                                                       <span>
                                                           СОЗДАТЬ ЛИЧНЫЙ КАБИНЕТ
                                                       </span>
                                                   </fieldset>

                                                   <fieldset class="col-md-6">
                                                       <label for="mailer"></label>
                                                       <input type="checkbox" id="mailer">
                                                       <span>
                                                           ПОДПИСАТЬСЯ НА EMAIL-РАССЫЛКУ
                                                       </span>
                                                       <p class="mini">
                                                           и получить безграничный доступ к самым выгодным предложениям и интересным статьям

                                                       </p>
                                                   </fieldset>
                                               </div>
                                           </div>
                                       </form>
                                       </div>
                                   <!-- end here StartForm -->
                               </div>
                           </div>
                  </div>
               <!-- costumerData -->
           </div>
       </div>
       <!-- end of big row second -->

       <!-- Start of big row three -->
       <div class="row" id="step2">
           <div class="col-sm-12 col-md-12 ">
               <div class="productList">
                   <div class="hereInner">
                       <div class="title">
                           Итог
                           <label>
                               Сумма заказа
                               с доставкой:
                           </label>
                       </div>
                       <!-- productSummary step 2 -->
                       <ul class="productSummary">
                           <li class="produclLi">
                               <div class="row">

                                   <p class="data">
                                       <number>3 333 Р.-</number>

                                        <div class="bonus">
                                           <div class="sum">
                                               <em>+</em><label>34 </label><spanбонуса</span>
                                           </div>
                                        </div>
                                   </p>

                               </div>
                           </li>
                           <!-- more li-->


                       </ul>
                       <!-- end of productSummary step 2 -->

                   </div>
               </div>
               <!-- end of productList -->
           </div>

           <div class="col-sm-12 col-md-12 ">
               <div class="costumerData">
                   <div class="hereInner">

                       <div class="title">
                           Шаг 2
                           <label>
                              Доставка
                           </label>
                       </div>


                       <div class="row ">
                           <div class="hereStartFormStep2">

                               <form class="formStep2">
                                   <ul>
                                       <li>
                                           <fieldset>
                                               <label for="deliverytype1" class="checked"></label>
                                               <input type="checkbox" id="deliverytype1">
                                               <span>САМОВЫВОЗ ИЗ ПУНК”А ВЫДА’И
                                                   <em>2 ДНЯ</em>
                                               </span>
                                               <div class="data">
                                                   125  <em>Р.-</em>
                                               </div>
                                           </fieldset>
                                       </li>

                                       <li>
                                           <fieldset>
                                               <label for="deliverytype2"></label>
                                               <input type="checkbox" id="deliverytype2">
                                               <span>САМОВЫВОЗ ИЗ ПУНК”А ВЫДА’И
                                                   <em>2 ДНЯ</em>
                                               </span>
                                               <div class="data">
                                                   125  <em>Р.-</em>
                                               </div>
                                           </fieldset>
                                       </li>

                                       <li>
                                           <fieldset>
                                               <label for="deliverytype31"></label>
                                               <input type="checkbox" id="deliverytype3">
                                               <span>САМОВЫВОЗ ИЗ ПУНК”А ВЫДА’И
                                                   <em>2 ДНЯ</em>
                                               </span>
                                               <div class="data">
                                                   125  <em>Р.-</em>
                                               </div>
                                           </fieldset>
                                       </li>
                                   </ul>



                               </form>
                           </div>
                           <!-- end here StartForm -->
                       </div>
                   </div>
               </div>
               <!-- costumerData -->
           </div>




       <!-- end of big row three -->

           <div class="row">
               <div class="magazinWrap">
                   <div class="col-md-6">

                       <h3 class="title">Пункт самовывоза<br>
                           в городе: <strong>Санкт-Петербург</strong></h3>

                       <p class="miniText">Ул. Герасимовская д. 16 (вход Ремонт Обуви Герасим)
                           Часы работы: пн-вс 10-20</p>

                       <a class="lunchStep3" href="#">Выбрать способ оплаты</a>


                   </div>

                   <div class="col-md-6">
                       <div class="map"></div>
                   </div>

               </div>
           </div>
       </div>

       <div class="row" id="step3">
           <div class="col-sm-12 col-md-12 ">
               <div class="title">
                   Выберите способ оплаты
               </div>

               <ul class="paymentsGateway">
                   <li class="visa">
                       <label for="visa" class="checked"></label>
                       <input type="checkbox" id="visa">
                       Карта Visa/Mastercard
                       <div class="data"></div>
                   </li>
                   <li class="yandex">
                       <label for="yandex"></label>
                       <input type="checkbox" id="yandex">
                       Яндекс. Деньги
                       <div class="data"></div>
                   </li>

                   <li class="phone">
                       <label for="phone"></label>
                       <input type="checkbox" id="phone">
                       При получении (с предварительный подтверждением по телефону)

                   </li>

                   <li class="paypal">
                       <label for="qiwi"></label>
                       <input type="checkbox" id="paypal">
                       Pay Pal
                       <div class="data"></div>
                   </li>

                   <li class="qiwi">
                       <label for="qiwi"></label>
                       <input type="checkbox" id="qiwi">
                       Qiwi Wallet
                       <div class="data"></div>
                   </li>
               </ul>

               <a class="endorder" id="endorder" href="">Завершить оформление</a>
           </div>
       </div>


   </div>

<?php get_footer();?>
