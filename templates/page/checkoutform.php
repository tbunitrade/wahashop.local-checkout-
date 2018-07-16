<?php
/*
  *
  * Template parts: Checkform
  *
  *
  * */
?>

<div class="contactsMainContainer checkHeader">
    <div class="contactsMainTitle">
        After Sale Service

        <span>let us help you with your product</span>
    </div>

    <div class=" checkoutOrder">
        <div class="searcAreaContainer">

            <div class="title">
                Which products do you need help with?
            </div>

            <fieldset>
                <input type="search" placeholder="search product by name/num." name="search" id="search">
            </fieldset>

            <div class="searchByCatalog">
                <span>of search by category</span>
            </div>

        </div>

        <ul class="row personalInformation">
            <li class="inputsArea title">
                Can’t find your item?
            </li>

            <li class="inputsArea">

                <div class="labelBlocks">
                    Personal information
                </div>


                <fieldset>
                    <label for="fullname">Full name</label>
                    <input type="text" id="fullname" placeholder="Our full name">
                </fieldset>
                <fieldset>
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Your email">
                </fieldset>
                <fieldset>
                    <label for="country-number">Phone</label>
                    <input type="tel-country-code" id="tel-country-code" placeholder="Country code">


                    <input type="tel" id="tel" placeholder="Phone number">
                </fieldset>
                <fieldset>
                    <label for="contry">Country</label>
                    <input type="text" id="country" placeholder="Country">
                </fieldset>
            </li>

            <!-- -->

            <li class="inputsArea">

                <div class="labelBlocks">
                    Product information
                </div>

                <fieldset class="first">
                    <label for="subject">Subject</label>

                    <select id="subject">
                        <option selected="selected">Missing parts</option>
                        <option></option>
                    </select>
                </fieldset>

                <fieldset>
                    <label for="part-number">Part number</label>
                    <input type="text" placeholder="Enter part number" id="part-number">
                </fieldset>

                <fieldset>
                    <label for="colors">Color</label>
                    <select>
                        <option selected="selected">Choose color</option>
                    </select>
                </fieldset>

                <fieldset>
                    <label for="Quantity">Quantity</label>
                    <input type="text" placeholder="Quantity of missing parts" id="quantity">

                </fieldset>

            </li>


            <!-- -->
            <li class="inputsArea">

                <div class="labelBlocks">
                   Shipping information
                </div>

                <fieldset>
                    <input type="text" placeholder="Shipping adres">
                </fieldset>

                <div class="halfContainer">

                    <fieldset class="half">
                        <input type="text" placeholder="Qty">
                    </fieldset>
                    <fieldset class="half zip">
                        <input type="text" placeholder="Post / Zip code">
                    </fieldset>

                    <fieldset class="half">
                        <input type="text" placeholder="Region">
                    </fieldset>

                    <fieldset class="half contry">
                        <select>
                            <option selected="selected">Country</option>
                            <option>England</option>
                        </select>

                    </fieldset>
                </div>

                <fieldset>
                    <label for="country-number">Phone</label>
                    <input type="tel-country-code" id="tel-country-code" placeholder="Country code">


                    <input type="tel" id="tel" placeholder="Phone number">
                </fieldset>


            </li>

            <!-- -->
            <li class="inputsArea">

                <div class="labelBlocks">
                   More details
                </div>

                <fieldset>
                    <label for="moredetails">More details</label>
                    <textarea placeholder="Tell us more about your problem"></textarea>
                </fieldset>

                <fieldset class="imageloader ">
                    <label>Images / Videos</label>

                    <div class="file-upload">
                        <label>
                            <input type="file" name="file">
                            <span>upload files</span>
                        </label>
                    </div>

                </fieldset>
            </li>

            <li class="inputsArea submitSender">
                <fieldset>
                    <button>
                        <input type="submit" value="submit" id="submit">
                    </button>
                </fieldset>
            </li>
        </ul>
    </div>
    <!-- end of checkoutorder-->



</div>