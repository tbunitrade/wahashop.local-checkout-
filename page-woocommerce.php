<?php /**
Template Name: Woocommerce checkout
 **/ ?>

<?php get_header(); ?>

   <div class="woocommerceCheckoutPageWrap">
       <!-- here start row first -->
       <div class="row">
           <div class="checkoutHeader">
               <div id="current" class="currentPage" >1</div>
               <h3>
                   Оформить заказ
               </h3>
                    <div class="dot"></div>
               <!-- Start of Navigation -->
               <ul class="navigation">
                   <li class="nav1"><a id="number1" class="number1 numms active" href="#">1</label></a> </li>
                   <li class="nav2"><a id="number2" class="number2 numms " href="#">2</a> </li>
                   <li class="nav3"><a id="number3" class="number3 numms " href="#">3</a> </li>
               </ul>
               <!-- end of Navigation -->
           </div>
       </div>
       <!-- here start row big row -->
       <div  id="step1" class="row " >
           <div class="col-sm-12 col-md-6 ">
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

                                       <div class="col-md-2">
                                            <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       </div>

                                       <div class="col-md-10">
                                           <p class="name">
                                               Чехол-несессер Waxa Shop
                                           </p>
                                           <p class="data">
                                               1 Х 750 <span>Р.-</span>
                                           </p>
                                           <p class="attribute color">
                                               Цвет: Темно-коричневый
                                           </p>

                                           <div class="sum">
                                               <em>+</em><label>1</label>
                                           </div>
                                           <div class="minus">
                                               <em>-</em><label>1</label>
                                           </div>
                                           <div class="cancel">

                                           </div>
                                       </div>

                                   </div>
                               </li>

                               <li class="produclLi">
                                   <div class="row">

                                       <div class="col-md-2">
                                           <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       </div>

                                       <div class="col-md-10">
                                           <p class="name">
                                               Чехол-несессер Waxa Shop
                                           </p>
                                           <p class="data">
                                               1 Х 750 <span>Р.-</span>
                                           </p>
                                           <p class="attribute color">
                                               Цвет: Темно-коричневый
                                           </p>

                                           <div class="sum">
                                               <em>+</em><label>1</label>
                                           </div>

                                           <div class="minus">
                                               <em>-</em><label>1</label>
                                           </div>
                                           <div class="cancel">

                                           </div>
                                       </div>

                                   </div>
                               </li>

                               <li class="produclLi">
                                   <div class="row">

                                       <div class="col-md-2">
                                           <img class="img-resposive" src="<?php echo get_template_directory_uri(); ?>/dist/img/product/sample1.png">
                                       </div>

                                       <div class="col-md-10">
                                           <p class="name">
                                               Щетка для полировки из козьего ворса (темная колодка, 140 х 55 мм)
                                           </p>
                                           <p class="data">
                                               1 Х 750 <span>Р.-</span>
                                           </p>
                                           <p class="attribute color">
                                               Цвет: Темно-коричневый
                                           </p>

                                           <div class="sum">
                                               <em>+</em><label>1</label>
                                           </div>
                                           <div class="minus">
                                               <em>-</em><label>1</label>
                                           </div>
                                           <div class="cancel">

                                           </div>
                                       </div>

                                   </div>
                               </li>

<!--                               <li class="produclLi">-->
<!--                                   <div class="row">-->
<!---->
<!--                                       <div class="col-md-2">-->
<!--                                           <img class="img-resposive" src="--><?php //echo get_template_directory_uri(); ?><!--/dist/img/product/sample1.png">-->
<!--                                       </div>-->
<!---->
<!--                                       <div class="col-md-10">-->
<!--                                           <p class="name">-->
<!--                                               Чехол-несессер Waxa Shop-->
<!--                                           </p>-->
<!--                                           <p class="data">-->
<!--                                               1 Х 2 660 Р.--->
<!--                                           </p>-->
<!--                                           <p class="attribute color">-->
<!--                                               Цвет: Темно-коричневый-->
<!--                                           </p>-->
<!---->
<!--                                           <div class="sum">-->
<!--                                               <em>+</em><label>1</label>-->
<!--                                           </div>-->
<!--                                           <div class="cancel">-->
<!---->
<!--                                           </div>-->
<!--                                       </div>-->
<!---->
<!--                                   </div>-->
<!--                               </li>-->

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

           <div class="col-sm-12 col-md-6">
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
                                       <a class="loginWoo" href="#" data-toggle="modal" data-target="#login">Войти</a>

                                       <!-- Modal -->
                                       <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel">Login form</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <fieldset>
                                                          <label for="login">Логин</label>
                                                          <input type="text" placeholder="Имя или email" id="login">

                                                      </fieldset>

                                                       <fieldset>
                                                           <label for="password">Пароль</label>
                                                           <input type="password" placeholder="password" id="password">

                                                       </fieldset>

                                                       <fieldset>
                                                           <input class="btn btn-secondary" type="login" value="Войти">
                                                       </fieldset>
                                                   </div>
                                                   <div class="modal-footer">
                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
<!--                                                       <button type="button" class="btn btn-primary">Save changes</button>-->
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
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

                                                   <fieldset class="col-md-6 emailSender">
                                                       <label for="mailer"></label>
                                                       <input type="checkbox" id="mailer">
                                                       <span>
                                                           ПОДПИСАТЬСЯ НА EMAIL-РАССЫЛКУ
                                                       </span>
                                                       <p class="miniText">
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

               <a id="nextstep" class="nextstep"  href="#">Далее</a>
               <!-- costumerData -->
           </div>




           <!------ Include the above in your HEAD tag ---------->
            <div class="clear"></div>


           <div class="carouselWrap">
               <div class="container">
                   <div class="row">
                       <div class="sliderTitle">
                           <label>
                               Н
                           </label>
                           Не забудьте добавить
                           <div class="dot"></div>
                       </div>

                       <div class="col-md-12">
                           <div id="Carousel" class="carousel slide">

<!--                               <ol class="carousel-indicators">-->
<!--                                   <li data-target="#Carousel" data-slide-to="0" class="active"></li>-->
<!--                                   <li data-target="#Carousel" data-slide-to="1"></li>-->
<!--                                   <li data-target="#Carousel" data-slide-to="2"></li>-->
<!--                               </ol>-->

                               <!-- Carousel items -->
                               <div class="carousel-inner">

                                   <div class="item active">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <a href="#" class="thumbnail">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product1.png" alt="Image" style="max-width:100%;">
                                               </a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                        420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product2.png" alt="Image" style="max-width:100%;"></a>

                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product3.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>

                                       </div><!--.row-->
                                   </div><!--.item-->

                                   <div class="item">
                                       <div class="row">
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product4.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product1.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>

                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product2.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                       </div><!--.row-->
                                   </div><!--.item-->

                                   <div class="item">
                                       <div class="row">
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product3.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product1.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/slider/product2.png" alt="Image" style="max-width:100%;"></a>
                                               <p class="priceCarousel">

                                                   Saphir Sole Guard: масло для кожаной подошвы
                                               </p>
                                               <p class="priceCurrent">
                                                   420 Р.-
                                               </p>
                                               <label class="stars"></label>
                                           </div>
                                       </div><!--.row-->
                                   </div><!--.item-->

                               </div><!--.carousel-inner-->
                               <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                               <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                           </div><!--.Carousel-->

                       </div>
                   </div>
               </div>
               <!--.container-->
           </div>


       </div>
       <!-- end of big row second -->

       <!-- Start of big row three -->
       <div id="step2" class="row displaynone">

           <div class="col-sm-12 col-md-6 ">
               <div class="productList">
                   <div class="hereInner">
                       <div class="title">
                           Итог
                           <label>
                               Сумма заказа<br>
                               с доставкой:
                           </label>
                       </div>
                       <!-- productSummary step 2 -->
                       <ul class="productSummary endCost">
                           <li class="produclLi">
                               <div class="row">

                                   <p class="data">
                                       <number>3 333 Р.-</number>

                                        <div class="bonus">
                                           <div class="sum">
                                               <em>+</em><label>34 </label><span>бонуса</span>
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

           <div class="col-sm-12 col-md-6 ">
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
                                               <span>САМОВЫВОЗ ИЗ ПУНКтА ВЫДАЧИ
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
                                               <span>КУРЬЕРОМ ДО ДВЕРИ
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
                                               <span>САМОВЫВОЗ В СПБ - ГЕРАСИМОВСКАЯ УЛ. 16
<!--                                                   <em>2 ДНЯ</em>-->
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
                       <div class="productList">
                       <div class="hereInner">

                           <div class="title">
                               <label>
                               Пункт самовывоза<br>
                               в городе: <strong>Санкт-Петербург</strong></div>
                           </label>

                           <p class="miniText">Ул. Герасимовская д. 16 (вход Ремонт Обуви Герасим)
                               Часы работы: пн-вс 10-20</p>

                           <a class="lunchStep3" href="#">Выбрать способ оплаты</a>
                       </div>
                       </div>

                   </div>

                   <div class="col-md-6">
                       <div class="map"></div>
                   </div>

               </div>
           </div>
       </div>

       <div id="step3" class="row displaynone">
           <div class="col-sm-12 col-md-12 ">
               <div class="productList fullWidth">
                   <div class="hereInner">
                       <div class="title">
                           <label>
                           Выберите способ оплаты
                           </label>
                       </div>

                       <ul class="paymentsGateway">
                           <li class="visa">
                               <label for="visa" class="checked"></label>
                               <input type="checkbox" id="visa">
                               <span>Карта Visa/Mastercard</span>
                               <div class="data"></div>
                           </li>
                           <li class="yandex">
                               <label for="yandex"></label>
                               <input type="checkbox" id="yandex">
                               <span>Яндекс. Деньги</span>
                               <div class="data"></div>
                           </li>

                           <li class="phone">
                               <label for="phone"></label>
                               <input type="checkbox" id="phone">
                               <span>При получении (с предварительный подтверждением по телефону)</span>

                           </li>

                           <li class="paypal">
                               <label for="qiwi"></label>
                               <input type="checkbox" id="paypal">
                               <span> Pay Pal</span>
                               <div class="data"></div>
                           </li>

                           <li class="qiwi">
                               <label for="qiwi"></label>
                               <input type="checkbox" id="qiwi">
                               <span>Qiwi Wallet </span>
                               <div class="data"></div>
                           </li>
                       </ul>

                       <a  id="endorder" class="endorder" href="">Завершить оформление</a>

                   </div>
               </div>
           </div>
       </div>


   </div>

<?php get_footer();?>
