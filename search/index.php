<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Vendor CSS-->
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


  <style>


/* ==========================================================================
   #GRID
   ========================================================================== */
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  position: relative;
}

.row-space {
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.row-refine {
  margin: 0 -15px;
}

.col-2 {
  width: -webkit-calc((100% - 20px) / 2);
  width: -moz-calc((100% - 20px) / 2);
  width: calc((100% - 20px) / 2);
}

@media (max-width: 767px) {
  .col-2 {
    width: 100%;
  }
}

/* ==========================================================================
   #BOX-SIZING
   ========================================================================== */
/**
 * More sensible default box-sizing:
 * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
 */
html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

* {
  padding: 0;
  margin: 0;
}

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}


button {
  outline: none;
  background: none;
  border: none;
  font-family: inherit;
}

/* ==========================================================================
   #PAGE WRAPPER
   ========================================================================== */
.page-wrapper {
  min-height: 100vh;
}



h1, h2, h3, h4, h5, h6 {
  font-weight: 400;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 15px;
}

h6 {
  font-size: 13px;
}

img {
  max-width: 100%;
  height: auto;
}

a {
  display: inline-block;
  text-decoration: none;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}



/* ==========================================================================
   #BACKGROUND
   ========================================================================== */
.bg-img-1 {
  background-color: gray;
}

/* ==========================================================================
   #SPACING
   ========================================================================== */



/* ==========================================================================
   #WRAPPER
   ========================================================================== */


/* ==========================================================================
   #BUTTON
   ========================================================================== */
.btn-submit {
  display: block;
  width: 100%;
  line-height: 60px;
  font-family: inherit;
  background: #6c7ae0;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  text-transform: uppercase;
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.btn-submit:hover {
  background: #5866cc;
}



/* ==========================================================================
   #DATEPICKER
   ========================================================================== */
.daterangepicker {
  display: none;
  width: 790px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  padding: 20px 35px;
  padding-top: 27px;
  padding-bottom: 25px;
  margin-top: 2px;
  margin-left: -127px;
}

@media (max-width: 767px) {
  .daterangepicker {
    width: -webkit-calc(100% - 60px);
    width: -moz-calc(100% - 60px);
    width: calc(100% - 60px);
    padding: 25px 0px;
  }
}

.daterangepicker:before, .daterangepicker:after {
  display: none;
}

.daterangepicker .calendar {
  margin: 0;
  width: 325px;
  max-width: 325px;
}

.daterangepicker .calendar th {
  font-size: 14px;
  color: #aaa;
  cursor: default;
}

.daterangepicker .calendar th.month {
  font-size: 16px;
  color: #555;
  font-weight: 700;
}

.daterangepicker .calendar th.next, .daterangepicker .calendar th.prev {
  font-size: 20px;
  color: #ccc;
  text-align: center;
}

.daterangepicker .calendar.right {
  float: right;
}

@media (max-width: 767px) {
  .daterangepicker .calendar {
    width: 235px;
    max-width: 270px;
  }
  .daterangepicker .calendar.right, .daterangepicker .calendar.left {
    float: none !important;
    clear: none !important;
    margin: 0 auto !important;
  }
  .daterangepicker .calendar.left {
    margin-bottom: 30px !important;
  }
}

.daterangepicker .calendar-table {
  padding: 0;
}

.daterangepicker .calendar-table .table-condensed thead tr:nth-child(2) th {
  padding-top: 27px;
  padding-bottom: 17px;
}

.daterangepicker.ltr .calendar.left .calendar-table {
  padding: 0;
}

.daterangepicker_input {
  display: none;
}

.daterangepicker td {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  height: 46px;
  width: 32px;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
  text-align: center;
  font-size: 14px;
  color: #555;
}

@media (max-width: 767px) {
  .daterangepicker td {
    height: 32px;
    width: 32px;
  }
}

.daterangepicker td.start-date, .daterangepicker td.end-date {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  background: #00ad5f;
}

.daterangepicker td.start-date.end-date {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}

.daterangepicker td.in-range {
  background: #ececff;
}

.daterangepicker td.today {
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
  background: #c9c9c9;
}

.daterangepicker td.today.in-range {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  border-radius: 0 !important;
  background: #6c7ae0;
}

.daterangepicker td.off, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date, .daterangepicker td.off.end-date {
  background: transparent;
  color: #aaa;
}

.daterangepicker select {
  outline: none;
  font-family: inherit;
}

.daterangepicker select.monthselect, .daterangepicker select.yearselect {
  font-size: 16px;
  padding: 8px 4px;
}

.daterangepicker td.active,
.daterangepicker td.active:hover {
  background: #6c7ae0;
}

.dropdown-datepicker {
  position: relative;
}

.dropdown-datepicker .daterangepicker {
  width: 385px;
  padding: 20px;
  max-width: 385px;
  margin-left: 0;
  margin-right: -20px;
}

.dropdown-datepicker .daterangepicker .calendar {
  width: 100%;
  max-width: 100%;
}

.dropdown-datepicker .daterangepicker .calendar td {
  width: 32px;
  height: 32px;
}

/* ==========================================================================
   #FORM
   ========================================================================== */
input,
textarea {
  outline: none;
  margin: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 100%;
  font-size: 18px;
  font-family: inherit;
}

input:disabled {
  background: transparent;
  cursor: pointer;
}

button {
  cursor: pointer;
}





.input-group {
  margin-bottom: 35px;
  background:black;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0 20px;
}

.input-group-big {
  padding: 10px 20px;
  padding-right: 60px;
}

.input-group-symbol {
  position: absolute;
  font-size: 36px;
  color: #ccc;
  right: 30px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.input-group-icon {
  position: relative;
  width: 100%;
}

.input-icon {
  font-size: 24px;
  color: #808080;
  position: absolute;
  line-height: 60px;
  right: 0;
  top: 0;
  width: 20px;
  background: #fff;
  text-align: center;
  cursor: pointer;
}

.input-icon::before {
  display: block;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.label {
  font-size: 18px;
  color: #333;
  text-transform: capitalize;
  display: block;
  font-weight: 700;
  white-space: nowrap;
  margin-right: 30px;
}

.input--style-1 {
  font-size: 18px;
  color: #666;
  font-family: inherit;
}

.input--style-1::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #ccc;
}

.input--style-1:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #ccc;
  opacity: 1;
}

.input--style-1::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #ccc;
  opacity: 1;
}

.input--style-1:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #ccc;
}

.input--style-1:-ms-input-placeholder {
  /* Microsoft Edge */
  color: #ccc;
}

.input--style-1-small {
  font-size: 16px;
  padding: 20.5px 0;
}

/* CHECKBOX */
/* Radio button */
.radio-row {
  padding-top: 10px;
}

.radio-container {
  display: inline-block;
  position: relative;
  padding-left: 30px;
  cursor: pointer;
  font-size: 15px;
  color: #fff;
  font-weight: 700;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.radio-container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.radio-checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}

.radio-container:hover input ~ .radio-checkmark {
  background-color: #fff;
}

.radio-container input:checked ~ .radio-checkmark {
  background-color: #fff;
}

.radio-checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.radio-container input:checked ~ .radio-checkmark:after {
  display: block;
}

.radio-container .radio-checkmark:after {
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  background: #00ad5f;
}

/* ==========================================================================
   #SELECT
   ========================================================================== */
.quantity {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  float: right;
}

@media (max-width: 575px) {
  .quantity {
    float: none;
    margin-top: 10px;
  }
}

.quantity > input {
  -webkit-appearance: none;
  width: 55px;
  text-align: center;
  font-size: 18px;
  color: #555;
  font-weight: 700;
}

.minus,
.plus {
  display: inline-block;
  width: 32px;
  height: 32px;
  line-height: 26px;
  text-align: center;
  border: 2px solid #ccc;
  font-size: 24px;
  color: #ccc;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.minus:hover,
.plus:hover {
  background: #6c7ae0;
  border-color: #6c7ae0;
  color: #fff;
}

.list-room {
  list-style: none;
  max-height: 324px;
  overflow-y: auto;
  padding-right: 20px;
}

.list-room__item {
  margin-bottom: 20px;
}

.list-room__footer {
  padding-top: 22px;
  border-top: 1px solid #e5e5e5;
}

.list-room__name {
  margin-bottom: 27px;
  display: block;
  font-weight: 700;
  color: #999;
}

.list-person {
  list-style: none;
}

.list-person .list-person__item:last-child {
  margin-bottom: 0;
}

.list-person__item {
  margin-bottom: 34px;
}

.list-person__item::after {
  content: "";
  clear: both;
  display: table;
}

.list-person__item .name {
  font-size: 18px;
  color: #555;
  font-weight: 700;
  display: inline-block;
  margin-top: 5px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

#btn-add-room {
  font-family: inherit;
  font-size: 16px;
  color: #6c7ae0;
  font-weight: 700;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

#btn-add-room:hover {
  text-decoration: underline;
}

.dropdown-select {
  display: none;
  position: absolute;
  left: 0;
  right: 0;
  top: -webkit-calc(100% + 2px);
  top: -moz-calc(100% + 2px);
  top: calc(100% + 2px);
  background: #fff;
  z-index: 999;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  padding: 30px 45px;
  padding-right: 25px;
}

.dropdown-select.show {
  display: block;
}

.open .input-icon::before {
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

/* ==========================================================================
   #SELECT2
   ========================================================================== */
.select--no-search .select2-search {
  display: none !important;
}

.rs-select2 {
  width: 100%;
}

.rs-select2 .select2-container {
  width: 100% !important;
  outline: none;
}

.rs-select2 .select2-container .select2-selection--single {
  outline: none;
  border: none;
  height: 60px;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
  line-height: 60px;
  padding-left: 0;
  color: #666;
  font-size: 16px;
  text-transform: uppercase;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
  height: 58px;
  right: 4px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
  display: none;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
  font-family: "Material-Design-Iconic-Font";
  content: '\f2f9';
  font-size: 24px;
  color: #808080;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.select2-container--open .select2-dropdown--below {
  border: none;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  margin-top: 2px;
  overflow: hidden;
}

.select2-container--default .select2-results__option {
  padding: 10px;
  font-size: 16px;
  color: #666;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #6c7ae0;
}

/* ==========================================================================
   #TAB
   ========================================================================== */
.tab-list {
  list-style: none;
  padding: 0 35px;
  padding-top: 55px;
}

.tab-list::after {
  content: "";
  clear: both;
  display: table;
}

@media (max-width: 767px) {
  .tab-list {
    padding: 0 10px;
    padding-top: 40px;
  }
}

.tab-list__item {
  float: left;
}

.tab-list__link {
  display: block;
  text-transform: uppercase;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
  font-weight: 500;
  font-size: 22px;
  color: rgba(128, 128, 128, 0.6);
  padding: 0 20px;
}

.tab-list__link:hover {
  color: #fff;
}

@media (max-width: 767px) {
  .tab-list__link {
    font-size: 22px;
  }
}

.tab-list .active .tab-list__link {
  color: #fff;
}



/* ==========================================================================
   #TITLE
   ========================================================================== */
.title {
  font-size: 50px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  margin-bottom: 24px;
}



        .tab-content > .tab-pane {
  display: none;
  padding: 49px 55px;
  padding-bottom: 70px;
}

.tab-content > .tab-pane.active {
  display: block;
}

@media (max-width: 767px) {
  .tab-content > .tab-pane {
    padding: 30px;
    padding-bottom: 45px;
  }
}
    </style>
</head>

<body bgcolor="gray">


    <div style=" max-width: 680px; margin: 0 auto;">
        <div style="background: rgba(0, 0, 0, 0.8);">
                <div class="tab-content">
                                  


                                    <div class="tab-pane active" >
                        <form  action="" method="post"  name="form">

                            <div class="input-group input-group-big">
                                <label class="label">where:</label>
                                <input class="input--style-1" type="text" name="search[keyword]" placeholder="City, region or specific hotel" required="required">
                                <i class="zmdi zmdi-search input-group-symbol"></i>
                            </div> 
                          
                                    <div class="input-group input-group-big">
                                        <label class="label">check-in:</label>
                                        <input  class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">check-out:</label>
                                        <input class="" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">travellers:</label>
                                        <div class="input-group-icon" id="js-select-special">
                                            <input class="i" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                            <i class="zmdi zmdi-chevron-down input-icon"></i>
                                        </div>
                                        <div class="dropdown-select">
                                            <ul class="list-room">
                                                <li class="list-room__item">
                                                    <span class="list-room__name">Room 1</span>
                                                    <ul class="list-person">
                                                        <li class="list-person__item">
                                                            <span class="name">Adults</span>
                                                            <div class="quantity quantity1">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="1">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-person__item">
                                                            <span class="name">Children</span>
                                                            <div class="quantity quantity2">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="0">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="list-room__footer">
                                                <a href="#" id="btn-add-room">Add room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn-submit" type="submit" name='search'>search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/jquery-validate/jquery.validate.min.js"></script>
<script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
<script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
