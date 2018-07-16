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
       <!-- here start row second -->
       <div class="row">
           <div class="col-sm-12 col-md-6 ">
               <div class="productList">
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
                                    <a class="bonus" href="#">Оплатить бонусами</a>
                               </div>
                           </div>
                           <div class="promoWrap">
                               <div class="row">
                                   <div class="col-md-6">
                                       <label>
                                           У вас есть помокод?
                                       </label>

                                       <input type="text" placeholder="Введите промокод">
                                   </div>

                                   <div class="col-md-6">
                                       <a class="code" href="#">Применить</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <!-- end of totalWrap -->
               </div>
               <!-- end of productList -->
           </div>

           <div class="col-sm-12 col-md-6 ">
                   <div class="costumerData">

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
                                   </fieldset>

                                   <fieldset>
                                       <input type="text" placeholder="Контактный телефон">
                                   </fieldset>

                                   <fieldset>
                                       <input type="text" placeholder="Email">
                                   </fieldset>

                                   <fieldset>
                                       <input type="text" placeholder="Ваш населенный пункт *">
                                   </fieldset>

                                   <fieldset>
                                       <label for="registerme"></label>
                                       <input type="checkbox" id="registerme">
                                       <span>
                                           СОЗДАТЬ ЛИЧНЫЙ КАБИНЕТ
                                       </span>
                                   </fieldset>

                                   <fieldset>
                                       <label for="mailer"></label>
                                       <input type="checkbox" id="mailer">
                                       <span>
                                           ПОДПИСАТЬСЯ НА EMAIL-РАССЫЛКУ
                                       </span>
                                       <p class="mini">
                                           и получить безграничный доступ к самым выгодным предложениям и интересным статьям

                                       </p>
                                   </fieldset>

                               </form>
                               </div>
                           <!-- end here StartForm -->
                       </div>


                  </div>
               <!-- costumerData -->
           </div>
       </div>

       <div class="row">
           <div class="slider"></div>
       </div>

    </div>

<?php get_footer();?>
