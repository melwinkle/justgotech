<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: ../tracker/tracker.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F211177547378060" title="oEmbed Form">
  <link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F211177547378060" title="oEmbed Form">
  <meta property="og:title" content="REGISTRATION FORM">
  <meta property="og:url" content="https://form.jotform.com/211177547378060">
  <meta property="og:description" content="Please click the link to complete this form.">
  <meta name="slack-app-id" content="AHNMASS8M">
  <link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
  <link rel="canonical" href="https://form.jotform.com/211177547378060" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
  <meta name="HandheldFriendly" content="true" />
  <title>LOG IN</title>
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.25154" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.25154" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.25154" />
  <style type="text/css" id="form-designer-style">
    /* Injected CSS Code */



    /*PREFERENCES STYLE*/
    /* NEW THEME STYLE */

    /* colors */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    * {
      font-family: 'Poppins', sans-serif;
    }


    .form-textbox,
    .form-textarea {
      color: undefined;
    }

    .rating-item input:hover+label {
      color: rgba(0, 112, 141, 0.75);
    }

    li[data-type=control_fileupload] .qq-upload-button,
    .until-text,
    .form-submit-reset {
      color: rgba(0, 112, 141, 0.75);
    }

    .stageEmpty.isSmall {
      color: rgba(0, 112, 141, 0.75);
    }

    .rating-item label {
      color: rgba(0, 112, 141, 0.75);
    }

    .currentDate,
    .pickerItem select,
    .appointmentCalendar .calendarDay,
    .calendar.popup th,
    .calendar.popup table tbody td,
    .calendar-new-header>*,
    .form-collapse-table {
      color: #00708D;
    }

    .appointmentCalendar .dayOfWeek {
      color: #00708D;
    }

    .appointmentSlotsContainer>* {
      color: rgba(0, 112, 141, 0.75);
    }

    li[data-type=control_fileupload] .jfUpload-heading,
    ::placeholder,
    .form-dropdown.is-active,
    .form-dropdown:first-child,
    .form-spinner-input {
      color: #83D0E4;
    }

    .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
    .calendar tr.days td.otherDay,
    .calendar tr.days td:hover:not(.unselectable) {
      color: #83D0E4;
    }

    span.form-sub-label,
    label.form-sub-label,
    div.form-header-group .form-subHeader,
    .rating-item-title.for-to>label:first-child,
    .rating-item-title.for-from>label:first-child,
    .rating-item-title .editor-container * {
      color: #00708D;
    }

    .form-pagebreak-back {
      color: #FFFFFF;
    }

    .rating-item input:checked+label,
    .rating-item input:focus+label {
      color: #FFFFFF;
    }

    .clear-pad-btn {
      color: #FFFFFF;
    }

    .form-textbox::placeholder,
    .form-dropdown:not(.time-dropdown):not(:required),
    .form-dropdown:not(:required),
    .form-dropdown:required:invalid {
      color: #83D0E4;
    }

    /* border-colors */
    .form-dropdown,
    .form-textarea,
    .form-textbox,
    li[data-type=control_fileupload] .qq-upload-button,
    .rating-item label,
    .rating-item input:focus+label,
    .rating-item input:checked+label,
    .jf-form-buttons,
    .form-checkbox+label:before,
    .form-checkbox+span:before,
    .form-radio+label:before,
    .form-radio+span:before,
    .signature-pad-passive,
    .signature-wrapper,
    .appointmentCalendarContainer,
    .appointmentField .timezonePickerName,
    .appointmentDayPickerButton,
    .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
    .appointmentCalendarContainer .monthYearPicker,
    .appointmentCalendar .calendarDay.isActive .calendarDayEach,
    .appointmentCalendar .calendarDay.isToday .calendarDayEach,
    .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
    .calendar.popup:before,
    .calendar-new-month,
    .form-matrix-column-headers,
    .form-matrix-table td,
    .form-matrix-table td:last-child,
    .form-matrix-table th,
    .form-matrix-table th:last-child,
    .form-matrix-table tr:last-child td,
    .form-matrix-table tr:last-child th,
    .form-matrix-table tr:not([role=group])+tr[role=group] th,
    .form-matrix-headers.form-matrix-column-headers,
    .isSelected .form-matrix-column-headers:nth-last-of-type(2),
    li[data-type=control_inline] input[type=email],
    li[data-type=control_inline] input[type=number],
    li[data-type=control_inline] input[type=tel],
    li[data-type=control_inline] input[type=text],
    .stageEmpty.isSmall {
      border-color: rgba(0, 112, 141, 0.75);
    }

    .rating-item input:hover+label {
      border-color: rgba(0, 112, 141, 0.75);
    }

    .appointmentSlot,
    .form-checkbox:checked+label:before,
    .form-checkbox:checked+span:before,
    .form-checkbox:checked+span label:before,
    .form-radio:checked+label:before,
    .form-radio:checked+span:before,
    .form-dropdown:focus,
    .form-textarea:focus,
    .form-textbox:focus,
    .signature-wrapper:focus,
    .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
    .form-dropdown:hover,
    .form-textarea:hover,
    .form-textbox:hover,
    .signature-wrapper:hover {
      border-color: rgba(0, 112, 141, 0.75);
    }

    .calendar tr.days td:hover:not(.unselectable):after {
      border-color: #83D0E4;
    }

    .form-header-group,
    .form-buttons-wrapper,
    .form-pagebreak,
    .form-submit-clear-wrapper,
    .form-pagebreak-next,
    .form-pagebreak-back,
    .form-checkbox:hover+label:before,
    .form-checkbox:hover+span:before,
    .form-radio:hover+label:before,
    .form-radio:hover+span:before {
      border-color: #83D0E4;
    }

    .form-pagebreak-back:focus,
    .form-pagebreak-next:focus,
    .form-submit-button:focus {
      border-color: rgba(0, 112, 141, 1);
    }

    /* background-colors */
    .form-line-active {
      background-color: #DAF3FA;
    }

    .form-line-error {
      background-color: #FFEDED;
    }

    .form-matrix-column-headers,
    .form-matrix-row-headers,
    .form-spinner-button-container>*,
    .form-collapse-table,
    .form-collapse-table:hover,
    .appointmentDayPickerButton {
      background-color: #83D0E4;
    }

    .calendar.popup,
    .calendar.popup table,
    .calendar.popup table tbody td:after {
      background-color: #F0FCFF;
    }

    .appointmentCalendar .calendarDay.isActive .calendarDayEach,
    .appointmentFieldRow.forSelectedDate,
    .calendar.popup tr.days td.selected:after,
    .calendar.popup:after,
    .submit-button,
    .form-checkbox:checked+label:before,
    .form-checkbox:checked+span:before,
    .form-checkbox:checked+span label:before,
    .form-radio+label:after,
    .form-radio+span:after,
    .rating-item input:checked+label,
    .appointmentCalendar .calendarDay:after,
    .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
    .rating-item input:focus+label {
      background-color: #01485A;
    }

    .appointmentSlot.active {
      background-color: #01485A !important;
    }

    .clear-pad-btn,
    .appointmentCalendar .dayOfWeek,
    .calendar.popup th {
      background-color: #83D0E4 !important;
    }

    .appointmentField .timezonePicker:hover+.timezonePickerName,
    .form-spinner-button-container>*:hover {
      background-color: #86C8D9;
    }

    .form-matrix-values,
    .form-matrix-values,
    .signature-wrapper,
    .signature-pad-passive,
    .rating-item label,
    .form-checkbox+label:before,
    .form-checkbox+span:before,
    .form-radio+label:before,
    .form-radio+span:before {
      background-color: #FFFFFF;
    }

    li[data-type=control_fileupload] .qq-upload-button {
      background-color: #FFFFFF;
    }

    .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:after,
    .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
      background-color: #FFFFFF;
    }

    .appointmentCalendarContainer,
    .appointmentSlot,
    .rating-item-title.for-to>label:first-child,
    .rating-item-title.for-from>label:first-child,
    .rating-item-title .editor-container *,
    .calendar-opened {
      background-color: transparent;
    }

    .page-section li.form-line-active[data-type="control_button"] {
      background-color: #DAF3FA;
    }

    .appointmentCalendar .calendarDay.isSelected:after {
      color: #FFFFFF;
    }

    /* shadow */
    .form-dropdown:hover,
    .form-textarea:hover,
    .form-textbox:hover,
    .signature-wrapper:hover,
    .calendar.popup:before,
    .jSignature:hover,
    li[data-type=control_fileupload] .qq-upload-button-hover,
    .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
    .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
    .form-checkbox:hover+label:before,
    .form-checkbox:hover+span:before,
    .form-radio:hover+label:before,
    .form-radio:hover+span:before,
    .calendar.popup:before {
      border-color: rgba(0, 112, 141, 0.5);
      box-shadow: 0 0 0 2px rgba(0, 112, 141, 0.25);
    }

    .form-dropdown:focus,
    .form-textarea:focus,
    .form-textbox:focus,
    .signature-wrapper:focus,
    li[data-type=control_fileupload] .qq-upload-button-focus,
    .form-checkbox:focus+label:before,
    .form-checkbox:focus+span:before,
    .form-radio:focus+label:before,
    .form-radio:focus+span:before,
    .calendar.popup:before {
      border-color: rgba(0, 112, 141, 1);
      box-shadow: 0 0 0 3px rgba(0, 112, 141, 0.25);
    }

    .calendar.popup table tbody td {
      box-shadow: none;
    }

    /* button colors */
    .submit-button {
      background-color: #00708D;
      border-color: #00708D;
    }

    .submit-button:hover {
      background-color: #004355;
      border-color: #004355;
    }

    .form-pagebreak-next {
      background-color: #83D0E4;
    }

    .form-pagebreak-back {
      background-color: #83D0E4;
    }

    .form-pagebreak-back:hover {
      background-color: #4F7D89;
      border-color: #4F7D89;
    }

    .form-pagebreak-next:hover {
      background-color: #4F7D89;
      border-color: #4F7D89;
    }

    .form-sacl-button,
    .form-submit-print {
      background-color: transparent;
      color: rgba(0, 112, 141, 0.75);
      border-color: rgba(0, 112, 141, 0.75);
    }

    .form-sacl-button:hover,
    .form-submit-print:hover,
    .appointmentSlot:not(.disabled):not(.active):hover,
    .appointmentDayPickerButton:hover,
    .rating-item input:hover+label {
      background-color: #86C8D9;
    }

    /* payment styles */

    .form-line[data-payment=true] .form-textbox,
    .form-line[data-payment=true] .select-area,
    .form-line[data-payment=true] #coupon-input,
    .form-line[data-payment=true] #coupon-container input,
    .form-line[data-payment=true] input#productSearch-input,
    .form-line[data-payment=true] .form-product-category-item:after,
    .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
    .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
    .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
    .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
    .form-line[data-payment=true] select.form-dropdown {
      border-color: rgba(0, 112, 141, 0.75);
      border-color: rgba(0, 112, 141, .4);
    }

    .form-line[data-payment="true"] hr,
    .form-line[data-payment=true] .p_item_separator,
    .form-line[data-payment="true"] .payment_footer.new_ui,
    .form-line.card-3col .form-product-item.new_ui,
    .form-line.card-2col .form-product-item.new_ui {
      border-color: rgba(0, 112, 141, 0.75);
      border-color: rgba(0, 112, 141, .2);
    }

    .form-line[data-payment=true] .form-product-category-item {
      border-color: rgba(0, 112, 141, 0.75);
      border-color: rgba(0, 112, 141, .3);
    }

    .form-line[data-payment=true] #coupon-input,
    .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
    .form-line[data-payment=true] input#productSearch-input,
    .form-line[data-payment=true] .select-area,
    .form-line[data-payment=true] .custom_quantity,
    .form-line[data-payment=true] .filter-container .select-content,
    .form-line[data-payment=true] .p_checkbox .select_border {
      background-color: #FFFFFF;
    }

    .form-product-category-item:after {
      background-color: rgba(0, 112, 141, .7);
      border-color: rgba(0, 112, 141, .7);
    }

    .form-line[data-payment=true].form-line.card-3col .form-product-item,
    .form-line[data-payment=true].form-line.card-2col .form-product-item {
      background-color: rgba(0, 0, 0, .05);
    }

    .form-line[data-payment=true] .payment-form-table input.form-textbox,
    .form-line[data-payment=true] .payment-form-table input.form-dropdown,
    .form-line[data-payment=true] .payment-form-table .form-sub-label-container>div,
    .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
    .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
      border-color: rgba(0, 112, 141, 0.75);
    }

    /* icons */
    .appointmentField .timezonePickerName:before {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjMjA4MTlCIi8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTc5OThINy4xNjQwNlY4Ljc1NjFMMTEuMzQzMiAxMS4yNjM2TDExLjk0MDIgMTAuMjg0NUw4LjM1ODA5IDguMTU5MDhWMy45Nzk5OFoiIGZpbGw9IiMyMDgxOUIiLz4KPC9zdmc+Cg==);
    }

    .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzM2NjRDOC45MzMxMiA1LjY0MDE4IDkuNDM5MzkgNS42MzM2IDkuNzU2MTMgNS4zMTY2OUMxMC4wODEzIDQuOTkxMzYgMTAuMDgxMyA0LjQ2MzU0IDkuNzU2MTMgNC4xMzgyMUM5LjYwOTA0IDQuMDAwMjYgOS42MDkwMyA0LjAwMDI2IDkuMDg5NDkgMy41MTUwOUM4LjQzNzQyIDIuOTA2MDkgOC40Mzc0MyAyLjkwNjA5IDcuNjU1MTEgMi4xNzU0N0M2LjA4OTU2IDAuNzEzMzUzIDYuMDg5NTYgMC43MTMzNTIgNS41Njc3MyAwLjIyNjAwN0M1LjI0MTA0IC0wLjA3MDYwMDUgNC43NTA4NSAtMC4wNjk1OTY3IDQuNDMyMzUgMC4yMjU4MzVMMC4yNjI1NCA0LjExODE1Qy0wLjA4MDU0NTkgNC40NTkzNiAtMC4wODcxNzExIDQuOTg3ODggMC4yNDE0NjggNS4zMTY2OUMwLjU1OTU1OCA1LjYzNDk2IDEuMDY5NzUgNS42NDA1OSAxLjM5NzAzIDUuMzM2NTNMNC45OTg5MSAxLjk3NTIyTDguNTk3ODIgNS4zMzY2NFoiIGZpbGw9IiMwMDcwOEQiLz4KPC9zdmc+Cg==);
    }

    .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjI2OTE1QzEuMDY2ODcgLTAuMDc2Njg0OSAwLjU2MDYwMiAtMC4wNzAwODQ5IDAuMjQzODY5IDAuMjQ2ODE1Qy0wLjA4MTI4OTggMC41NzIxMTUgLTAuMDgxMjg5OCAxLjEwMDAyIDAuMjQzODY5IDEuNDI1MzJDMC4zOTA5NTYgMS41NjMyMiAwLjM5MDk2NiAxLjU2MzIyIDAuOTEwNTEgMi4wNDg0MkMxLjU2MjU3IDIuNjU3NDIgMS41NjI1NiAyLjY1NzQxIDIuMzQ0ODggMy4zODgwMkMzLjkxMDQ0IDQuODUwMTEgMy45MTA0MyA0Ljg1MDEyIDQuNDMyMjcgNS4zMzc1MkM0Ljc1ODk1IDUuNjM0MTIgNS4yNDkxNSA1LjYzMzEyIDUuNTY3NjQgNS4zMzc3Mkw5LjczNzQ2IDEuNDQ1NDJDMTAuMDgwNSAxLjEwNDEyIDEwLjA4NzEgMC41NzU2MTUgOS43NTg1MyAwLjI0NjgxNUM5LjQ0MDQ0IC0wLjA3MTQ4NDkgOC45MzAyNCAtMC4wNzcwODQ5IDguNjAyOTcgMC4yMjcwMTVMNS4wMDEwOCAzLjU4ODMyTDEuNDAyMTggMC4yMjY5MTVaIiBmaWxsPSIjMDA3MDhEIi8+Cjwvc3ZnPgo=);
    }

    .appointmentField .timezonePickerName:after {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNSA1TDkgMSIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
      width: 11px;
    }

    li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
    li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
    .appointmentCalendarContainer .currentDate {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEzLjA1NDIgMS4xMjVIMTUuMDQ3OEMxNS41OTgzIDEuMTI1IDE2LjA0NDYgMS42MDA3IDE2LjA0NDYgMi4xODc1VjRIMC4wOTU3MDMxVjIuMTg3NUMwLjA5NTcwMzEgMS42MDA3IDAuNTQxOTg4IDEuMTI1IDEuMDkyNTEgMS4xMjVIMy4wODYxMlYxLjA2MjVDMy4wODYxMiAwLjQ3NTY5NyAzLjUzMjQgMCA0LjA4MjkyIDBDNC42MzM0NCAwIDUuMDc5NzMgMC40NzU2OTcgNS4wNzk3MyAxLjA2MjVWMS4xMjVIMTEuMDYwNlYxLjA2MjVDMTEuMDYwNiAwLjQ3NTY5NyAxMS41MDY4IDAgMTIuMDU3NCAwQzEyLjYwNzkgMCAxMy4wNTQyIDAuNDc1Njk3IDEzLjA1NDIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzgzRDBFNCIvPgo8L3N2Zz4K);
    }

    .form-star-rating-star.Stars {
      background-image: url(data:image/png;base64,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) !important;
    }

    .signature-pad-passive,
    .signature-placeholder:after {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzgzRDBFNCIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiM4M0QwRTQiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTcyTDE3MC44NTUgOS44MjU5M0MxNzAuNjIyIDkuODg5MDEgMTcwLjQ0MSAxMC4wNzI5IDE3MC4zODMgMTAuMzA3MUwxNjYuMTU1IDI3LjEwMTdMMTczLjk3NSAyMC42MjkxQzE3My4yNDUgMTkuMjYxMiAxNzMuNTUgMTcuNTE4OSAxNzQuNzkgMTYuNDkyMUMxNzYuMjA2IDE1LjMxOTggMTc4LjMxMiAxNS41MTkxIDE3OS40ODMgMTYuOTM0NkMxODAuNjU1IDE4LjM1MDggMTgwLjQ1NiAyMC40NTYxIDE3OS4wNDEgMjEuNjI3OEMxNzguMzMzIDIyLjIxMzkgMTc3LjQ1MiAyMi40NTc3IDE3Ni42MDMgMjIuMzc3NkMxNzUuOTY0IDIyLjMxNzQgMTc1LjM0MyAyMi4wNzQgMTc0LjgyNSAyMS42NTY4TDE2Ny4wMDUgMjguMTI4NkwxODQuMjk0IDI3LjExMzdDMTg0LjUzNCAyNy4wOTk2IDE4NC43NDkgMjYuOTU3MSAxODQuODU0IDI2Ljc0MDFMMTg5LjY1IDE2Ljg4MTRMMTgxLjQzNiA2Ljk1NzJaIiBmaWxsPSIjODNEMEU0Ii8+Cjwvc3ZnPgo=);
    }

    .form-spinner-button.form-spinner-up:before {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNDAwNEw3LjUgNy40MDAzOUwxMi41IDcuNDAwMzlDMTIuNzc2IDcuNDAwMzkgMTMgNy4xNzYzOSAxMyA2LjkwMDM5QzEzIDYuNjI0MzkgMTIuNzc2IDYuNDAwMzkgMTIuNSA2LjQwMDM5TDcuNSA2LjQwMDM5TDcuNSAxLjQwMDM5QzcuNSAxLjEyNDM5IDcuMjc2IDAuOTAwMzkgNyAwLjkwMDM5QzYuNzI0IDAuOTAwMzkgNi41IDEuMTI0MzkgNi41IDEuNDAwMzlMNi41IDYuNDAwMzlMMS41IDYuNDAwMzlDMS4yMjQgNi40MDAzOSAxIDYuNjI0MzkgMSA2LjkwMDM5QzEgNy4xNzYzOSAxLjIyNCA3LjQwMDM5IDEuNSA3LjQwMDM5TDYuNSA3LjQwMDM5TDYuNSAxMi40MDA0QzYuNSAxMi42NzY0IDYuNzI0IDEyLjkwMDQgNyAxMi45MDA0QzcuMjc2IDEyLjkwMDQgNy41IDEyLjY3NjQgNy41IDEyLjQwMDRaIiBmaWxsPSIjMDA3MDhEIiBzdHJva2U9IiMwMDcwOEQiIHN0cm9rZS13aWR0aD0iMC41Ii8+Cjwvc3ZnPgo=);
    }

    .form-spinner-button.form-spinner-down:before {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDE0IDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDEuNDAwMzlMNy41IDEuNDAwMzlMMS41IDEuNDAwMzlDMS4yMjQgMS40MDAzOSAxIDEuMTc2MzkgMSAwLjkwMDM5QzEgMC42MjQzOSAxLjIyNCAwLjQwMDM5IDEuNSAwLjQwMDM5TDYuNSAwLjQwMDM5TDEyLjUgMC40MDAzOTFDMTIuNzc2IDAuNDAwMzkxIDEzIDAuNjI0MzkxIDEzIDAuOTAwMzkxQzEzIDEuMTc2MzkgMTIuNzc2IDEuNDAwMzkgMTIuNSAxLjQwMDM5WiIgZmlsbD0iIzAwNzA4RCIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
    }

    .form-collapse-table:after {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOCAxNEMyOCA2LjI2ODAxIDIxLjczMiAtOS40OTkzNWUtMDcgMTQgLTYuMTE5NTllLTA3QzYuMjY4MDEgLTIuNzM5ODRlLTA3IC05LjQ5OTM1ZS0wNyA2LjI2ODAxIC02LjExOTU5ZS0wNyAxNEMtMi43Mzk4NGUtMDcgMjEuNzMyIDYuMjY4MDEgMjggMTQgMjhDMjEuNzMyIDI4IDI4IDIxLjczMiAyOCAxNFpNOC4wMDI0IDExLjcwMDNDNy45OTI0NCAxMS41ODEzIDguMDEzNjMgMTEuNDYxNyA4LjA2MzU5IDExLjM1NDlDOC4xMTM0NyAxMS4yNDgyIDguMTkwMDUgMTEuMTU4NSA4LjI4NDc5IDExLjA5NTlDOC4zNzk1MiAxMS4wMzMyIDguNDg4NjUgMTEgOC41OTk5OSAxMUwxOS40IDExQzE5LjUxMTMgMTEgMTkuNjIwNSAxMS4wMzMyIDE5LjcxNTIgMTEuMDk1OUMxOS44MDk5IDExLjE1ODUgMTkuODg2NSAxMS4yNDgyIDE5LjkzNjQgMTEuMzU0OUMxOS45Nzc5IDExLjQ0NDQgMTkuOTk5NiAxMS41NDI5IDIwIDExLjY0MjlDMjAgMTEuNzgyIDE5Ljk1NzkgMTEuOTE3MyAxOS44OCAxMi4wMjg2TDE0LjQ4IDE5Ljc0MjlDMTQuNDI0MSAxOS44MjI3IDE0LjM1MTYgMTkuODg3NSAxNC4yNjgzIDE5LjkzMjFDMTQuMTg1IDE5Ljk3NjggMTQuMDkzMSAyMCAxNCAyMEMxMy45MDY4IDIwIDEzLjgxNSAxOS45NzY4IDEzLjczMTcgMTkuOTMyMUMxMy42NDg0IDE5Ljg4NzUgMTMuNTc1OSAxOS44MjI3IDEzLjUyIDE5Ljc0MjlMOC4xMTk5OSAxMi4wMjg2QzguMDUzMDggMTEuOTMzIDguMDEyMzYgMTEuODE5MyA4LjAwMjQgMTEuNzAwM1oiIGZpbGw9IiMwMDcwOEQiLz4KPC9zdmc+Cg==);
    }

    li[data-type=control_fileupload] .qq-upload-button:before {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAzOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMi4xODc1QzMxLjUgNS42ODc1IDI2IDAuODc1IDE5LjM3NSAwLjg3NUMxMy42ODc1IDAuODc1IDguNzUgNC40Mzc1IDYuOTM3NSA5LjgxMjVDMi44NzUgMTAuNjg3NSAwIDE0LjE4NzUgMCAxOC4zNzVDMCAyMi45Mzc1IDMuNTYyNSAyNi43NSA4LjEyNSAyNy4xMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjYuNzUgMzguNzUgMjMuNSAzOC43NSAxOS42MjVDMzguNzUgMTUuOTM3NSAzNiAxMi43NSAzMi4zNzUgMTIuMTg3NVpNMjYuMDYyNSAxNS42ODc1QzI1LjkzNzUgMTUuODEyNSAyNS44MTI1IDE1Ljg3NSAyNS42MjUgMTUuODc1QzI1LjQzNzUgMTUuODc1IDI1LjMxMjUgMTUuODEyNSAyNS4xODc1IDE1LjY4NzVMMjAgMTAuNVYyMi43NUMyMCAyMy4xMjUgMTkuNzUgMjMuMzc1IDE5LjM3NSAyMy4zNzVDMTkgMjMuMzc1IDE4Ljc1IDIzLjEyNSAxOC43NSAyMi43NVYxMC41TDEzLjU2MjUgMTUuNjg3NUMxMy4zMTI1IDE1LjkzNzUgMTIuOTM3NSAxNS45Mzc1IDEyLjY4NzUgMTUuNjg3NUMxMi40Mzc1IDE1LjQzNzUgMTIuNDM3NSAxNS4wNjI1IDEyLjY4NzUgMTQuODEyNUwxOC45Mzc1IDguNTYyNUMxOSA4LjUgMTkuMDYyNSA4LjQzNzUgMTkuMTI1IDguNDM3NUMxOS4yNSA4LjM3NSAxOS40Mzc1IDguMzc1IDE5LjYyNSA4LjQzNzVDMTkuNjg3NSA4LjUgMTkuNzUgOC41IDE5LjgxMjUgOC41NjI1TDI2LjA2MjUgMTQuODEyNUMyNi4zMTI1IDE1LjA2MjUgMjYuMzEyNSAxNS40Mzc1IDI2LjA2MjUgMTUuNjg3NVoiIGZpbGw9IiM4M0QwRTQiLz4KPC9zdmc+Cg==);
    }

    .appointmentDayPickerButton {
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMCIgdmlld0JveD0iMCAwIDYgMTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDlMNSA1TDEgMSIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
    }

    /* NEW THEME STYLE */
    /*PREFERENCES STYLE*/
    /*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }

    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }

    .form-header-group {
      font-family: Inter, sans-serif;
    }

    .form-label {
      font-family: Inter, sans-serif;
    }

    .form-label.form-label-auto {

      display: block;
      float: none;
      text-align: left;
      width: 100%;

    }

    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }

    .form-all {
      max-width: 752px;
      width: 100%;
    }

    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }

    .form-all {
      font-size: 16px
    }

    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }

    .supernova {
      background-color: #83D0E4;
    }

    .supernova body {
      background: transparent;
    }

    .supernova .form-all,
    .form-all {
      background-color: #F0FCFF;
    }

    .form-all {
      color: #00708D;
    }

    .form-header-group .form-header {
      color: #00708D;
    }

    .form-header-group .form-subHeader {
      color: #00708D;
    }

    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #00708D;
    }

    .form-sub-label {
      color: #1a8aa7;
    }

    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #FFFFFF;
    }

    .form-line-error {
      overflow: hidden;
      transition: none;
      background-color: #FFEDED;
    }

    .form-line-error .form-error-message {
      background-color: #FF3200;
      clear: both;
      float: none;
    }

    .form-line-error .form-error-arrow {
      border-bottom-color: #FF3200;
    }

    .form-line-error input:not(#coupon-input),
    .form-line-error textarea,
    .form-line-error .form-validation-error {
      border: 1px solid #FF3200;
      .box-shadow(0 0 3px #FF3200);
    }

    .supernova {
      background-image: none;
    }

    #stage {
      background-image: none;
    }

    .form-all {
      background-image: none;
    }

    .ie-8 .form-all:before {
      display: none;
    }

    .ie-8 {
      margin-top: auto;
      margin-top: initial;
    }

    /*PREFERENCES STYLE*/
    /*__INSPECT_SEPERATOR__*/
    .form-label.form-label-auto {

      display: block;
      float: none;
      text-align: left;
      width: 100%;

    }

    /* Injected CSS Code */
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
  <script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.25154" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.25154" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.25154" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.25154" type="text/javascript"></script>
  <script src="https://js.jotform.com/vendor/postMessage.js?3.3.25154" type="text/javascript"></script>
  <script src="https://js.jotform.com/WidgetsServer.js?v=1619685192564" type="text/javascript"></script>
  <script type="text/javascript">
    JotForm.init(function() {
      if (window.JotForm && JotForm.accessible) $('input_24').setAttribute('tabindex', 0);

      JotForm.calendarMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      JotForm.calendarDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
      JotForm.calendarOther = {
        "today": "Today"
      };
      var languageOptions = document.querySelectorAll('#langList li');
      for (var langIndex = 0; langIndex < languageOptions.length; langIndex++) {
        languageOptions[langIndex].on('click', function(e) {
          setTimeout(function() {
            JotForm.setCalendar("10", false, {
              "days": {
                "monday": true,
                "tuesday": true,
                "wednesday": true,
                "thursday": true,
                "friday": true,
                "saturday": true,
                "sunday": true
              },
              "future": true,
              "past": true,
              "custom": false,
              "ranges": false,
              "start": "",
              "end": ""
            });
          }, 0);
        });
      }
      JotForm.setCalendar("10", false, {
        "days": {
          "monday": true,
          "tuesday": true,
          "wednesday": true,
          "thursday": true,
          "friday": true,
          "saturday": true,
          "sunday": true
        },
        "future": true,
        "past": true,
        "custom": false,
        "ranges": false,
        "start": "",
        "end": ""
      });
      if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex', 0);
      JotForm.setPhoneMaskingValidator('input_13_full', '##########');
      if (window.JotForm && JotForm.accessible) $('input_29').setAttribute('tabindex', 0);
      if (window.JotForm && JotForm.accessible) $('input_30').setAttribute('tabindex', 0);
      JotForm.newDefaultTheme = true;
      JotForm.extendsNewTheme = false;
      JotForm.newPaymentUIForNewCreatedForms = false;
      JotForm.newPaymentUI = true;
      JotForm.alterTexts({
        "ageVerificationError": "You must be older than {minAge} years old to submit this form.",
        "alphabetic": "This field can only contain letters",
        "alphanumeric": "This field can only contain letters and numbers.",
        "appointmentSelected": "You’ve selected {time} on {date}",
        "ccDonationMinLimitError": "Minimum amount is {minAmount} {currency}",
        "ccInvalidCVC": "CVC number is invalid.",
        "ccInvalidExpireDate": "Expire date is invalid.",
        "ccInvalidNumber": "Credit Card Number is invalid.",
        "ccMissingDetails": "Please fill up the Credit Card details.",
        "ccMissingDonation": "Please enter numeric values for donation amount.",
        "ccMissingProduct": "Please select at least one product.",
        "characterLimitError": "Too many Characters.  The limit is",
        "characterMinLimitError": "Too few characters. The minimum is",
        "confirmClearForm": "Are you sure you want to clear the form?",
        "confirmEmail": "E-mail does not match",
        "currency": "This field can only contain currency values.",
        "cyrillic": "This field can only contain cyrillic characters",
        "dateInvalid": "This date is not valid. The date format is {format}",
        "dateInvalidSeparate": "This date is not valid. Enter a valid {element}.",
        "dateLimited": "This date is unavailable.",
        "disallowDecimals": "Please enter a whole number.",
        "doneButton": "Done",
        "doneMessage": "Well done! All errors are fixed.",
        "dragAndDropFilesHere_infoMessage": "Drag and drop files here",
        "email": "Enter a valid e-mail address",
        "fillMask": "Field value must fill mask.",
        "freeEmailError": "Free email accounts are not allowed",
        "generalError": "There are errors on the form. Please fix them before continuing.",
        "generalPageError": "There are errors on this page. Please fix them before continuing.",
        "gradingScoreError": "Score total should only be less than or equal to",
        "incompleteFields": "There are incomplete required fields. Please complete them.",
        "inputCarretErrorA": "Input should not be less than the minimum value:",
        "inputCarretErrorB": "Input should not be greater than the maximum value:",
        "justSoldOut": "Just Sold Out",
        "lessThan": "Your score should be less than or equal to",
        "maxDigitsError": "The maximum digits allowed is",
        "maxFileSize_infoMessage": "Max. file size",
        "maxSelectionsError": "The maximum number of selections allowed is ",
        "minSelectionsError": "The minimum required number of selections is ",
        "multipleError": "There are {count} errors in this page. Please correct them before moving on.",
        "multipleFileUploads_emptyError": "{file} is empty, please select files again without it.",
        "multipleFileUploads_fileLimitError": "Only {fileLimit} file uploads allowed.",
        "multipleFileUploads_minSizeError": "{file} is too small, minimum file size is {minSizeLimit}.",
        "multipleFileUploads_onLeave": "The files are being uploaded, if you leave now the upload will be cancelled.",
        "multipleFileUploads_sizeError": "{file} is too large, maximum file size is {sizeLimit}.",
        "multipleFileUploads_typeError": "{file} has invalid extension. Only {extensions} are allowed.",
        "nextButtonText": "Next",
        "noSlotsAvailable": "No slots available",
        "notEnoughStock": "Not enough stock for the current selection",
        "notEnoughStock_remainedItems": "Not enough stock for the current selection ({count} items left)",
        "numeric": "This field can only contain numeric values",
        "oneError": "There is {count} error in this page. Please correct it before moving on.",
        "pastDatesDisallowed": "Date must not be in the past.",
        "pleaseWait": "Please wait...",
        "prevButtonText": "Previous",
        "progressMiddleText": "of",
        "required": "This field is required.",
        "requiredLegend": "All fields marked with * are required and must be filled.",
        "requireEveryCell": "Every cell is required.",
        "requireEveryRow": "Every row is required.",
        "requireOne": "At least one field required.",
        "reviewBackText": "Back to Form",
        "reviewSubmitText": "Review and Submit",
        "seeAllText": "See All",
        "seeErrorsButton": "See Errors",
        "selectionSoldOut": "Selection Sold Out",
        "slotUnavailable": "{time} on {date} has been taken. Please select another slot.",
        "soldOut": "Sold Out",
        "submissionLimit": "Sorry! Only one entry is allowed.  Multiple submissions are disabled for this form.",
        "submitButtonText": "Submit",
        "subProductItemsLeft": "({count} items left)",
        "uploadExtensions": "You can only upload following files:",
        "uploadFilesize": "File size cannot be bigger than:",
        "uploadFilesizemin": "File size cannot be smaller than:",
        "url": "This field can only contain a valid URL",
        "wordLimitError": "Too many words. The limit is",
        "wordMinLimitError": "Too few words.  The minimum is"
      });
      JotForm.clearFieldOnHide = "disable";
      /*INIT-END*/
    });

    JotForm.prepareCalculationsOnTheFly([null, {
      "name": "registrationForm",
      "qid": "1",
      "text": "REGISTRATION FORM",
      "type": "control_head"
    }, null, null, {
      "description": "",
      "name": "name",
      "qid": "4",
      "text": "Name",
      "type": "control_fullname"
    }, null, null, null, {
      "description": "",
      "name": "email8",
      "qid": "8",
      "subLabel": "example@example.com",
      "text": "Email",
      "type": "control_email"
    }, {
      "description": "",
      "name": "gender",
      "qid": "9",
      "subLabel": "Select your gender ",
      "text": "Gender",
      "type": "control_dropdown"
    }, {
      "description": "",
      "name": "dateOf10",
      "qid": "10",
      "text": "Date of Birth",
      "type": "control_datetime"
    }, {
      "description": "",
      "name": "nationality",
      "qid": "11",
      "subLabel": "",
      "text": "Nationality",
      "type": "control_textbox"
    }, null, {
      "description": "",
      "name": "phoneNumber",
      "qid": "13",
      "text": "Phone Number",
      "type": "control_phone"
    }, null, null, null, {
      "description": "",
      "name": "healthStatus",
      "qid": "17",
      "text": "Health Status and Underlying Conditions",
      "type": "control_checkbox"
    }, null, null, null, null, null, null, {
      "description": "",
      "name": "username",
      "qid": "24",
      "subLabel": "Username",
      "text": "Username",
      "type": "control_textbox"
    }, null, null, null, null, {
      "description": "",
      "name": "password",
      "qid": "29",
      "subLabel": "",
      "text": "Password",
      "type": "control_textbox"
    }, {
      "description": "",
      "name": "confirmPassword",
      "qid": "30",
      "subLabel": "",
      "text": "Confirm Password",
      "type": "control_textbox"
    }, {
      "name": "register",
      "qid": "31",
      "text": "Register",
      "type": "control_button"
    }, {
      "name": "typeA",
      "qid": "32",
      "text": "Terms and Conditions",
      "type": "control_widget"
    }]);
    setTimeout(function() {
      JotForm.paymentExtrasOnTheFly([null, {
        "name": "registrationForm",
        "qid": "1",
        "text": "REGISTRATION FORM",
        "type": "control_head"
      }, null, null, {
        "description": "",
        "name": "name",
        "qid": "4",
        "text": "Name",
        "type": "control_fullname"
      }, null, null, null, {
        "description": "",
        "name": "email8",
        "qid": "8",
        "subLabel": "example@example.com",
        "text": "Email",
        "type": "control_email"
      }, {
        "description": "",
        "name": "gender",
        "qid": "9",
        "subLabel": "Select your gender ",
        "text": "Gender",
        "type": "control_dropdown"
      }, {
        "description": "",
        "name": "dateOf10",
        "qid": "10",
        "text": "Date of Birth",
        "type": "control_datetime"
      }, {
        "description": "",
        "name": "nationality",
        "qid": "11",
        "subLabel": "",
        "text": "Nationality",
        "type": "control_textbox"
      }, null, {
        "description": "",
        "name": "phoneNumber",
        "qid": "13",
        "text": "Phone Number",
        "type": "control_phone"
      }, null, null, null, {
        "description": "",
        "name": "healthStatus",
        "qid": "17",
        "text": "Health Status and Underlying Conditions",
        "type": "control_checkbox"
      }, null, null, null, null, null, null, {
        "description": "",
        "name": "username",
        "qid": "24",
        "subLabel": "Username",
        "text": "Username",
        "type": "control_textbox"
      }, null, null, null, null, {
        "description": "",
        "name": "password",
        "qid": "29",
        "subLabel": "",
        "text": "Password",
        "type": "control_textbox"
      }, {
        "description": "",
        "name": "confirmPassword",
        "qid": "30",
        "subLabel": "",
        "text": "Confirm Password",
        "type": "control_textbox"
      }, {
        "name": "register",
        "qid": "31",
        "text": "Register",
        "type": "control_button"
      }, {
        "name": "typeA",
        "qid": "32",
        "text": "Terms and Conditions",
        "type": "control_widget"
      }]);
    }, 20);
  </script>
</head>
<div>
  <h1><a href="../../../index.php" style="text-decoration: none;">Back Home <i class="zmdi zmdi-home"></i></a></h1>
</div>

<body>
  <form class="jotform-form" action="user.php" method="post" name="form_211177547378060" id="211177547378060" accept-charset="utf-8" autocomplete="on">
    <input type="hidden" name="formID" value="211177547378060" />
    <input type="hidden" id="JWTContainer" value="" />
    <input type="hidden" id="cardinalOrderNumber" value="" />
    <div role="main" class="form-all">
      <ul class="form-section page-section">
        <li id="cid_1" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-large">
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header">
                LOG IN
              </h1>
              <div id="subHeader_1" class="form-subHeader">

              </div>
            </div>
          </div>
        </li>

        <li class="form-line jf-required" data-type="control_textbox" id="id_24">
          <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24">
            Username
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_24" class="form-input-wide jf-required" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="input_24" name="q24_username" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_24 sublabel_input_24" required="" />
              <label class="form-sub-label" for="input_24" id="sublabel_input_24" style="min-height:13px" aria-hidden="false"> </label>
            </span>
          </div>
        </li>
        <li class="form-line jf-required" data-type="password" id="id_29">
          <label class="form-label form-label-top form-label-auto" id="label_29" for="input_29">
            Password
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_29" class="form-input-wide jf-required" data-layout="half">
            <input type="password" id="input_29" name="q29_password" data-type="password" class="form-textbox validate[required, AlphaNumeric]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_29" required="" />
          </div>
        </li>

        </li>
        <li class="form-line jf-required" data-type="control_widget" id="id_32">
          <div id="cid_32" class="form-input-wide termsAndConditionsV2 jf-required" data-layout="full">
            <div data-widget-name="Terms &amp;amp; Conditions" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
              <iframe data-client-id="52948fb29322cd302b00000c" title="Terms &amp;amp; Conditions" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_32" src="" style="max-width:580px;border:none;width:100%;height:50px" data-width="580" data-height="50">
              </iframe>
              <div class="widget-inputs-wrapper">
                <input type="hidden" id="input_32" class="form-hidden form-widget widget-required " name="q32_typeA" value="" />
                <input type="hidden" id="widget_settings_32" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22termsText%22%2C%22value%22%3A%22I%20agree%20to%20%7Bterms%20%26%20conditions%7D.%22%7D%2C%7B%22name%22%3A%22termsLink%22%2C%22value%22%3A%22www.example.com%22%7D%2C%7B%22name%22%3A%22theme%22%2C%22value%22%3A%22default%22%7D%2C%7B%22name%22%3A%22acceptedText%22%2C%22value%22%3A%22Accepted%22%7D%5D" data-version="2" />
              </div>
              <script type="text/javascript">
                setTimeout(function() {
                  var _cFieldFrame = document.getElementById("customFieldFrame_32");
                  if (_cFieldFrame) {
                    _cFieldFrame.onload = function() {
                      if (typeof widgetFrameLoaded !== 'undefined') {
                        widgetFrameLoaded(32, {
                          "formID": 211177547378060
                        })
                      }
                    };
                    _cFieldFrame.src = "//app-widgets.jotform.io/termsConditions/?qid=32&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '&ndt=1' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                  }
                }, 0);
              </script>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_31">
          <div id="cid_31" class="form-input-wide" data-layout="full">
            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
              <button name="login" id="input_31" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                Log in
              </button>
            </div>
          </div>
        </li>
        <li style="display:none">
          Should be Empty:
          <input type="text" name="website" value="" />
        </li>
      </ul>
      <div>
        <p style="text-align:center">Don't have an account?<a href="./signup.php" style="color:#7f5ca1"> Sign up!</a></P>
      </div>
    </div>


    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="211177547378060" />
    <script type="text/javascript">
      var all_spc = document.querySelectorAll("form[id='211177547378060'] .si" + "mple" + "_spc");
      for (var i = 0; i < all_spc.length; i++) {
        all_spc[i].value = "211177547378060-211177547378060";
      }
    </script>
    <div class="formFooter-heightMask">
    </div>
  </form>
</body>

</html>