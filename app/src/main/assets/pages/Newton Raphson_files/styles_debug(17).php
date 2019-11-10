/** Path: plugin mod_dialogue .' **/
body.path-mod-dialogue {
  /* Ensure all Bootstrap is contained to the main page region and doesn't interfere with the theme outside it */

}

body.path-mod-dialogue .js-control {
  display: none;
}

body.path-mod-dialogue .js-control input {
  border: none;
}

body.path-mod-dialogue.jsenabled .js-control {
  display: inline-block;
}

body.path-mod-dialogue.jsenabled .nonjs-control,
body.path-mod-dialogue.jsenabled .nonjs-control input {
  display: none;
}

body.path-mod-dialogue #region-main {
  /** Bootstrap **/

  /* fieldset.hidden vs .hidden
     *
     * Moodle uses fieldset.hidden for mforms, to signify a collection of
     * form elements that don't have a box drawn round them. Bootstrap
     * uses hidden for stuff that is hidden in various responsive modes.
     *
     * Relatedly, there is also fieldset.invisiblefieldset which hides the
     * border and sets the display to inline.
     *
     * Originally this just set block and visible, but it is used
     * in random question dialogue in Quiz,
     * that dialogue is hidden and shown, so when hidden the
     * above workaround leaves you with a button floating around
     */

  /* move down carets for tabs */

  /* FONT PATH
 * -------------------------- */

  /** autocomplete **/

  /* listing meta */

  /* dropdown group - contains both js and no-js controls */

  /* Custom buttons */

}

body.path-mod-dialogue #region-main .clearfix {
  *zoom: 1;
}

body.path-mod-dialogue #region-main .clearfix:before,
body.path-mod-dialogue #region-main .clearfix:after {
  display: table;
  line-height: 0;
  content: "";
}

body.path-mod-dialogue #region-main .clearfix:after {
  clear: both;
}

body.path-mod-dialogue #region-main .hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

body.path-mod-dialogue #region-main .input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

body.path-mod-dialogue #region-main article,
body.path-mod-dialogue #region-main aside,
body.path-mod-dialogue #region-main details,
body.path-mod-dialogue #region-main figcaption,
body.path-mod-dialogue #region-main figure,
body.path-mod-dialogue #region-main footer,
body.path-mod-dialogue #region-main header,
body.path-mod-dialogue #region-main hgroup,
body.path-mod-dialogue #region-main nav,
body.path-mod-dialogue #region-main section {
  display: block;
}

body.path-mod-dialogue #region-main audio,
body.path-mod-dialogue #region-main canvas,
body.path-mod-dialogue #region-main video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}

body.path-mod-dialogue #region-main audio:not([controls]) {
  display: none;
}

body.path-mod-dialogue #region-main html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

body.path-mod-dialogue #region-main a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

body.path-mod-dialogue #region-main a:hover,
body.path-mod-dialogue #region-main a:active {
  outline: 0;
}

body.path-mod-dialogue #region-main sub,
body.path-mod-dialogue #region-main sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

body.path-mod-dialogue #region-main sup {
  top: -0.5em;
}

body.path-mod-dialogue #region-main sub {
  bottom: -0.25em;
}

body.path-mod-dialogue #region-main #map_canvas img,
body.path-mod-dialogue #region-main .google-maps img {
  max-width: none;
}

body.path-mod-dialogue #region-main button,
body.path-mod-dialogue #region-main input,
body.path-mod-dialogue #region-main select,
body.path-mod-dialogue #region-main textarea {
  margin: 0;
  font-size: 100%;
  vertical-align: middle;
}

body.path-mod-dialogue #region-main button,
body.path-mod-dialogue #region-main input {
  *overflow: visible;
  line-height: normal;
}

body.path-mod-dialogue #region-main button::-moz-focus-inner,
body.path-mod-dialogue #region-main input::-moz-focus-inner {
  padding: 0;
  border: 0;
}

body.path-mod-dialogue #region-main button,
body.path-mod-dialogue #region-main html input[type="button"],
body.path-mod-dialogue #region-main input[type="reset"],
body.path-mod-dialogue #region-main input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
}

body.path-mod-dialogue #region-main label,
body.path-mod-dialogue #region-main select,
body.path-mod-dialogue #region-main button,
body.path-mod-dialogue #region-main input[type="button"],
body.path-mod-dialogue #region-main input[type="reset"],
body.path-mod-dialogue #region-main input[type="submit"],
body.path-mod-dialogue #region-main input[type="radio"],
body.path-mod-dialogue #region-main input[type="checkbox"] {
  cursor: pointer;
}

body.path-mod-dialogue #region-main input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}

body.path-mod-dialogue #region-main input[type="search"]::-webkit-search-decoration,
body.path-mod-dialogue #region-main input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}

body.path-mod-dialogue #region-main textarea {
  overflow: auto;
  vertical-align: top;
}

@media print {
  body.path-mod-dialogue #region-main * {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  body.path-mod-dialogue #region-main a,
  body.path-mod-dialogue #region-main a:visited {
    text-decoration: underline;
  }
  body.path-mod-dialogue #region-main abbr[title]:after {
    content: " (" attr(title) ")";
  }
  body.path-mod-dialogue #region-main .ir a:after,
  body.path-mod-dialogue #region-main a[href^="javascript:"]:after,
  body.path-mod-dialogue #region-main a[href^="#"]:after {
    content: "";
  }
  body.path-mod-dialogue #region-main pre,
  body.path-mod-dialogue #region-main blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  body.path-mod-dialogue #region-main thead {
    display: table-header-group;
  }
  body.path-mod-dialogue #region-main tr,
  body.path-mod-dialogue #region-main img {
    page-break-inside: avoid;
  }
  body.path-mod-dialogue #region-main img {
    max-width: 100% !important;
  }
  @page  {
    margin: 0.5cm;
  }
  body.path-mod-dialogue #region-main p,
  body.path-mod-dialogue #region-main h2,
  body.path-mod-dialogue #region-main h3 {
    orphans: 3;
    widows: 3;
  }
  body.path-mod-dialogue #region-main h2,
  body.path-mod-dialogue #region-main h3 {
    page-break-after: avoid;
  }
}

body.path-mod-dialogue #region-main table {
  max-width: 100%;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}

body.path-mod-dialogue #region-main .table {
  width: 100%;
  margin-bottom: 20px;
}

body.path-mod-dialogue #region-main .table th,
body.path-mod-dialogue #region-main .table td {
  padding: 8px;
  line-height: 20px;
  text-align: left;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}

body.path-mod-dialogue #region-main .table th {
  font-weight: bold;
}

body.path-mod-dialogue #region-main .table thead th {
  vertical-align: bottom;
}

body.path-mod-dialogue #region-main .table caption + thead tr:first-child th,
body.path-mod-dialogue #region-main .table caption + thead tr:first-child td,
body.path-mod-dialogue #region-main .table colgroup + thead tr:first-child th,
body.path-mod-dialogue #region-main .table colgroup + thead tr:first-child td,
body.path-mod-dialogue #region-main .table thead:first-child tr:first-child th,
body.path-mod-dialogue #region-main .table thead:first-child tr:first-child td {
  border-top: 0;
}

body.path-mod-dialogue #region-main .table tbody + tbody {
  border-top: 2px solid #dddddd;
}

body.path-mod-dialogue #region-main .table .table {
  background-color: #ffffff;
}

body.path-mod-dialogue #region-main .table-condensed th,
body.path-mod-dialogue #region-main .table-condensed td {
  padding: 4px 5px;
}

body.path-mod-dialogue #region-main .table-bordered {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapse;
  border-left: 0;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .table-bordered th,
body.path-mod-dialogue #region-main .table-bordered td {
  border-left: 1px solid #dddddd;
}

body.path-mod-dialogue #region-main .table-bordered caption + thead tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered caption + tbody tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered caption + tbody tr:first-child td,
body.path-mod-dialogue #region-main .table-bordered colgroup + thead tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered colgroup + tbody tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered colgroup + tbody tr:first-child td,
body.path-mod-dialogue #region-main .table-bordered thead:first-child tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child th,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child td {
  border-top: 0;
}

body.path-mod-dialogue #region-main .table-bordered thead:first-child tr:first-child > th:first-child,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child > td:first-child,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child > th:first-child {
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}

body.path-mod-dialogue #region-main .table-bordered thead:first-child tr:first-child > th:last-child,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child > td:last-child,
body.path-mod-dialogue #region-main .table-bordered tbody:first-child tr:first-child > th:last-child {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}

body.path-mod-dialogue #region-main .table-bordered thead:last-child tr:last-child > th:first-child,
body.path-mod-dialogue #region-main .table-bordered tbody:last-child tr:last-child > td:first-child,
body.path-mod-dialogue #region-main .table-bordered tbody:last-child tr:last-child > th:first-child,
body.path-mod-dialogue #region-main .table-bordered tfoot:last-child tr:last-child > td:first-child,
body.path-mod-dialogue #region-main .table-bordered tfoot:last-child tr:last-child > th:first-child {
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
}

body.path-mod-dialogue #region-main .table-bordered thead:last-child tr:last-child > th:last-child,
body.path-mod-dialogue #region-main .table-bordered tbody:last-child tr:last-child > td:last-child,
body.path-mod-dialogue #region-main .table-bordered tbody:last-child tr:last-child > th:last-child,
body.path-mod-dialogue #region-main .table-bordered tfoot:last-child tr:last-child > td:last-child,
body.path-mod-dialogue #region-main .table-bordered tfoot:last-child tr:last-child > th:last-child {
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
}

body.path-mod-dialogue #region-main .table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
  -webkit-border-bottom-left-radius: 0;
          border-bottom-left-radius: 0;
  -moz-border-radius-bottomleft: 0;
}

body.path-mod-dialogue #region-main .table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
  -webkit-border-bottom-right-radius: 0;
          border-bottom-right-radius: 0;
  -moz-border-radius-bottomright: 0;
}

body.path-mod-dialogue #region-main .table-bordered caption + thead tr:first-child th:first-child,
body.path-mod-dialogue #region-main .table-bordered caption + tbody tr:first-child td:first-child,
body.path-mod-dialogue #region-main .table-bordered colgroup + thead tr:first-child th:first-child,
body.path-mod-dialogue #region-main .table-bordered colgroup + tbody tr:first-child td:first-child {
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}

body.path-mod-dialogue #region-main .table-bordered caption + thead tr:first-child th:last-child,
body.path-mod-dialogue #region-main .table-bordered caption + tbody tr:first-child td:last-child,
body.path-mod-dialogue #region-main .table-bordered colgroup + thead tr:first-child th:last-child,
body.path-mod-dialogue #region-main .table-bordered colgroup + tbody tr:first-child td:last-child {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}

body.path-mod-dialogue #region-main .table-striped tbody > tr:nth-child(odd) > td,
body.path-mod-dialogue #region-main .table-striped tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}

body.path-mod-dialogue #region-main .table-hover tbody tr:hover > td,
body.path-mod-dialogue #region-main .table-hover tbody tr:hover > th {
  background-color: #f5f5f5;
}

body.path-mod-dialogue #region-main table td[class*="span"],
body.path-mod-dialogue #region-main table th[class*="span"],
body.path-mod-dialogue #region-main .row-fluid table td[class*="span"],
body.path-mod-dialogue #region-main .row-fluid table th[class*="span"] {
  display: table-cell;
  float: none;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span1,
body.path-mod-dialogue #region-main .table th.span1 {
  float: none;
  width: 44px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span2,
body.path-mod-dialogue #region-main .table th.span2 {
  float: none;
  width: 124px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span3,
body.path-mod-dialogue #region-main .table th.span3 {
  float: none;
  width: 204px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span4,
body.path-mod-dialogue #region-main .table th.span4 {
  float: none;
  width: 284px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span5,
body.path-mod-dialogue #region-main .table th.span5 {
  float: none;
  width: 364px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span6,
body.path-mod-dialogue #region-main .table th.span6 {
  float: none;
  width: 444px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span7,
body.path-mod-dialogue #region-main .table th.span7 {
  float: none;
  width: 524px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span8,
body.path-mod-dialogue #region-main .table th.span8 {
  float: none;
  width: 604px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span9,
body.path-mod-dialogue #region-main .table th.span9 {
  float: none;
  width: 684px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span10,
body.path-mod-dialogue #region-main .table th.span10 {
  float: none;
  width: 764px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span11,
body.path-mod-dialogue #region-main .table th.span11 {
  float: none;
  width: 844px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table td.span12,
body.path-mod-dialogue #region-main .table th.span12 {
  float: none;
  width: 924px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .table tbody tr.success > td {
  background-color: #dff0d8;
}

body.path-mod-dialogue #region-main .table tbody tr.error > td {
  background-color: #f2dede;
}

body.path-mod-dialogue #region-main .table tbody tr.warning > td {
  background-color: #fcf8e3;
}

body.path-mod-dialogue #region-main .table tbody tr.info > td {
  background-color: #d9edf7;
}

body.path-mod-dialogue #region-main .table-hover tbody tr.success:hover > td {
  background-color: #d0e9c6;
}

body.path-mod-dialogue #region-main .table-hover tbody tr.error:hover > td {
  background-color: #ebcccc;
}

body.path-mod-dialogue #region-main .table-hover tbody tr.warning:hover > td {
  background-color: #faf2cc;
}

body.path-mod-dialogue #region-main .table-hover tbody tr.info:hover > td {
  background-color: #c4e3f3;
}

body.path-mod-dialogue #region-main .dropup,
body.path-mod-dialogue #region-main .dropdown {
  position: relative;
}

body.path-mod-dialogue #region-main .dropdown-toggle {
  *margin-bottom: -3px;
}

body.path-mod-dialogue #region-main .dropdown-toggle:active,
body.path-mod-dialogue #region-main .open .dropdown-toggle {
  outline: 0;
}

body.path-mod-dialogue #region-main .caret {
  display: inline-block;
  width: 0;
  height: 0;
  vertical-align: top;
  border-top: 4px solid #000000;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  content: "";
}

body.path-mod-dialogue #region-main .dropdown .caret {
  margin-top: 8px;
  margin-left: 2px;
}

body.path-mod-dialogue #region-main .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  *border-right-width: 2px;
  *border-bottom-width: 2px;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
     -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding;
          background-clip: padding-box;
}

body.path-mod-dialogue #region-main .dropdown-menu.pull-right {
  right: 0;
  left: auto;
}

body.path-mod-dialogue #region-main .dropdown-menu .divider {
  *width: 100%;
  height: 1px;
  margin: 9px 1px;
  *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}

body.path-mod-dialogue #region-main .dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 20px;
  color: #333333;
  white-space: nowrap;
}

body.path-mod-dialogue #region-main .dropdown-menu > li > a:hover,
body.path-mod-dialogue #region-main .dropdown-menu > li > a:focus,
body.path-mod-dialogue #region-main .dropdown-submenu:hover > a,
body.path-mod-dialogue #region-main .dropdown-submenu:focus > a {
  color: #ffffff;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
}

body.path-mod-dialogue #region-main .dropdown-menu > .active > a,
body.path-mod-dialogue #region-main .dropdown-menu > .active > a:hover,
body.path-mod-dialogue #region-main .dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-repeat: repeat-x;
  outline: 0;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
}

body.path-mod-dialogue #region-main .dropdown-menu > .disabled > a,
body.path-mod-dialogue #region-main .dropdown-menu > .disabled > a:hover,
body.path-mod-dialogue #region-main .dropdown-menu > .disabled > a:focus {
  color: #999999;
}

body.path-mod-dialogue #region-main .dropdown-menu > .disabled > a:hover,
body.path-mod-dialogue #region-main .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: default;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .open {
  *z-index: 1000;
}

body.path-mod-dialogue #region-main .open > .dropdown-menu {
  display: block;
}

body.path-mod-dialogue #region-main .pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

body.path-mod-dialogue #region-main .dropup .caret,
body.path-mod-dialogue #region-main .navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid #000000;
  content: "";
}

body.path-mod-dialogue #region-main .dropup .dropdown-menu,
body.path-mod-dialogue #region-main .navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}

body.path-mod-dialogue #region-main .dropdown-submenu {
  position: relative;
}

body.path-mod-dialogue #region-main .dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
     -moz-border-radius: 0 6px 6px 6px;
          border-radius: 0 6px 6px 6px;
}

body.path-mod-dialogue #region-main .dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

body.path-mod-dialogue #region-main .dropup .dropdown-submenu > .dropdown-menu {
  top: auto;
  bottom: 0;
  margin-top: 0;
  margin-bottom: -2px;
  -webkit-border-radius: 5px 5px 5px 0;
     -moz-border-radius: 5px 5px 5px 0;
          border-radius: 5px 5px 5px 0;
}

body.path-mod-dialogue #region-main .dropdown-submenu > a:after {
  display: block;
  float: right;
  width: 0;
  height: 0;
  margin-top: 5px;
  margin-right: -10px;
  border-color: transparent;
  border-left-color: #cccccc;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
}

body.path-mod-dialogue #region-main .dropdown-submenu:hover > a:after {
  border-left-color: #ffffff;
}

body.path-mod-dialogue #region-main .dropdown-submenu.pull-left {
  float: none;
}

body.path-mod-dialogue #region-main .dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
     -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
}

body.path-mod-dialogue #region-main .dropdown .dropdown-menu .nav-header {
  padding-right: 20px;
  padding-left: 20px;
}

body.path-mod-dialogue #region-main .typeahead {
  z-index: 1051;
  margin-top: 2px;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .btn {
  display: inline-block;
  *display: inline;
  padding: 4px 12px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn:hover,
body.path-mod-dialogue #region-main .btn:focus,
body.path-mod-dialogue #region-main .btn:active,
body.path-mod-dialogue #region-main .btn.active,
body.path-mod-dialogue #region-main .btn.disabled,
body.path-mod-dialogue #region-main .btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}

body.path-mod-dialogue #region-main .btn:active,
body.path-mod-dialogue #region-main .btn.active {
  background-color: #cccccc \9;
}

body.path-mod-dialogue #region-main .btn:first-child {
  *margin-left: 0;
}

body.path-mod-dialogue #region-main .btn:hover,
body.path-mod-dialogue #region-main .btn:focus {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}

body.path-mod-dialogue #region-main .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

body.path-mod-dialogue #region-main .btn.active,
body.path-mod-dialogue #region-main .btn:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn.disabled,
body.path-mod-dialogue #region-main .btn[disabled] {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

body.path-mod-dialogue #region-main .btn-large {
  padding: 11px 19px;
  font-size: 17.5px;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

body.path-mod-dialogue #region-main .btn-large [class^="icon-"],
body.path-mod-dialogue #region-main .btn-large [class*=" icon-"] {
  margin-top: 4px;
}

body.path-mod-dialogue #region-main .btn-small {
  padding: 2px 10px;
  font-size: 11.9px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

body.path-mod-dialogue #region-main .btn-small [class^="icon-"],
body.path-mod-dialogue #region-main .btn-small [class*=" icon-"] {
  margin-top: 0;
}

body.path-mod-dialogue #region-main .btn-mini [class^="icon-"],
body.path-mod-dialogue #region-main .btn-mini [class*=" icon-"] {
  margin-top: -1px;
}

body.path-mod-dialogue #region-main .btn-mini {
  padding: 0 6px;
  font-size: 10.5px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

body.path-mod-dialogue #region-main .btn-block {
  display: block;
  width: 100%;
  padding-right: 0;
  padding-left: 0;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

body.path-mod-dialogue #region-main .btn-block + .btn-block {
  margin-top: 5px;
}

body.path-mod-dialogue #region-main input[type="submit"].btn-block,
body.path-mod-dialogue #region-main input[type="reset"].btn-block,
body.path-mod-dialogue #region-main input[type="button"].btn-block {
  width: 100%;
}

body.path-mod-dialogue #region-main .btn-primary.active,
body.path-mod-dialogue #region-main .btn-warning.active,
body.path-mod-dialogue #region-main .btn-danger.active,
body.path-mod-dialogue #region-main .btn-success.active,
body.path-mod-dialogue #region-main .btn-info.active,
body.path-mod-dialogue #region-main .btn-inverse.active {
  color: rgba(255, 255, 255, 0.75);
}

body.path-mod-dialogue #region-main .btn-primary {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #006dcc;
  *background-color: #0044cc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-primary:hover,
body.path-mod-dialogue #region-main .btn-primary:focus,
body.path-mod-dialogue #region-main .btn-primary:active,
body.path-mod-dialogue #region-main .btn-primary.active,
body.path-mod-dialogue #region-main .btn-primary.disabled,
body.path-mod-dialogue #region-main .btn-primary[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}

body.path-mod-dialogue #region-main .btn-primary:active,
body.path-mod-dialogue #region-main .btn-primary.active {
  background-color: #003399 \9;
}

body.path-mod-dialogue #region-main .btn-warning {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  *background-color: #f89406;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-warning:hover,
body.path-mod-dialogue #region-main .btn-warning:focus,
body.path-mod-dialogue #region-main .btn-warning:active,
body.path-mod-dialogue #region-main .btn-warning.active,
body.path-mod-dialogue #region-main .btn-warning.disabled,
body.path-mod-dialogue #region-main .btn-warning[disabled] {
  color: #ffffff;
  background-color: #f89406;
  *background-color: #df8505;
}

body.path-mod-dialogue #region-main .btn-warning:active,
body.path-mod-dialogue #region-main .btn-warning.active {
  background-color: #c67605 \9;
}

body.path-mod-dialogue #region-main .btn-danger {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #da4f49;
  *background-color: #bd362f;
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-danger:hover,
body.path-mod-dialogue #region-main .btn-danger:focus,
body.path-mod-dialogue #region-main .btn-danger:active,
body.path-mod-dialogue #region-main .btn-danger.active,
body.path-mod-dialogue #region-main .btn-danger.disabled,
body.path-mod-dialogue #region-main .btn-danger[disabled] {
  color: #ffffff;
  background-color: #bd362f;
  *background-color: #a9302a;
}

body.path-mod-dialogue #region-main .btn-danger:active,
body.path-mod-dialogue #region-main .btn-danger.active {
  background-color: #942a25 \9;
}

body.path-mod-dialogue #region-main .btn-success {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  *background-color: #51a351;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-success:hover,
body.path-mod-dialogue #region-main .btn-success:focus,
body.path-mod-dialogue #region-main .btn-success:active,
body.path-mod-dialogue #region-main .btn-success.active,
body.path-mod-dialogue #region-main .btn-success.disabled,
body.path-mod-dialogue #region-main .btn-success[disabled] {
  color: #ffffff;
  background-color: #51a351;
  *background-color: #499249;
}

body.path-mod-dialogue #region-main .btn-success:active,
body.path-mod-dialogue #region-main .btn-success.active {
  background-color: #408140 \9;
}

body.path-mod-dialogue #region-main .btn-info {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  *background-color: #2f96b4;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-info:hover,
body.path-mod-dialogue #region-main .btn-info:focus,
body.path-mod-dialogue #region-main .btn-info:active,
body.path-mod-dialogue #region-main .btn-info.active,
body.path-mod-dialogue #region-main .btn-info.disabled,
body.path-mod-dialogue #region-main .btn-info[disabled] {
  color: #ffffff;
  background-color: #2f96b4;
  *background-color: #2a85a0;
}

body.path-mod-dialogue #region-main .btn-info:active,
body.path-mod-dialogue #region-main .btn-info.active {
  background-color: #24748c \9;
}

body.path-mod-dialogue #region-main .btn-inverse {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #363636;
  *background-color: #222222;
  background-image: -moz-linear-gradient(top, #444444, #222222);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#444444), to(#222222));
  background-image: -webkit-linear-gradient(top, #444444, #222222);
  background-image: -o-linear-gradient(top, #444444, #222222);
  background-image: linear-gradient(to bottom, #444444, #222222);
  background-repeat: repeat-x;
  border-color: #222222 #222222 #000000;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

body.path-mod-dialogue #region-main .btn-inverse:hover,
body.path-mod-dialogue #region-main .btn-inverse:focus,
body.path-mod-dialogue #region-main .btn-inverse:active,
body.path-mod-dialogue #region-main .btn-inverse.active,
body.path-mod-dialogue #region-main .btn-inverse.disabled,
body.path-mod-dialogue #region-main .btn-inverse[disabled] {
  color: #ffffff;
  background-color: #222222;
  *background-color: #151515;
}

body.path-mod-dialogue #region-main .btn-inverse:active,
body.path-mod-dialogue #region-main .btn-inverse.active {
  background-color: #080808 \9;
}

body.path-mod-dialogue #region-main button.btn,
body.path-mod-dialogue #region-main input[type="submit"].btn {
  *padding-top: 3px;
  *padding-bottom: 3px;
}

body.path-mod-dialogue #region-main button.btn::-moz-focus-inner,
body.path-mod-dialogue #region-main input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}

body.path-mod-dialogue #region-main button.btn.btn-large,
body.path-mod-dialogue #region-main input[type="submit"].btn.btn-large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}

body.path-mod-dialogue #region-main button.btn.btn-small,
body.path-mod-dialogue #region-main input[type="submit"].btn.btn-small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}

body.path-mod-dialogue #region-main button.btn.btn-mini,
body.path-mod-dialogue #region-main input[type="submit"].btn.btn-mini {
  *padding-top: 1px;
  *padding-bottom: 1px;
}

body.path-mod-dialogue #region-main .btn-link,
body.path-mod-dialogue #region-main .btn-link:active,
body.path-mod-dialogue #region-main .btn-link[disabled] {
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

body.path-mod-dialogue #region-main .btn-link {
  color: #0088cc;
  cursor: pointer;
  border-color: transparent;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

body.path-mod-dialogue #region-main .btn-link:hover,
body.path-mod-dialogue #region-main .btn-link:focus {
  color: #005580;
  text-decoration: underline;
  background-color: transparent;
}

body.path-mod-dialogue #region-main .btn-link[disabled]:hover,
body.path-mod-dialogue #region-main .btn-link[disabled]:focus {
  color: #333333;
  text-decoration: none;
}

body.path-mod-dialogue #region-main .btn-group {
  position: relative;
  display: inline-block;
  *display: inline;
  *margin-left: .3em;
  font-size: 0;
  white-space: nowrap;
  vertical-align: middle;
  *zoom: 1;
}

body.path-mod-dialogue #region-main .btn-group:first-child {
  *margin-left: 0;
}

body.path-mod-dialogue #region-main .btn-group + .btn-group {
  margin-left: 5px;
}

body.path-mod-dialogue #region-main .btn-toolbar {
  margin-top: 10px;
  margin-bottom: 10px;
  font-size: 0;
}

body.path-mod-dialogue #region-main .btn-toolbar > .btn + .btn,
body.path-mod-dialogue #region-main .btn-toolbar > .btn-group + .btn,
body.path-mod-dialogue #region-main .btn-toolbar > .btn + .btn-group {
  margin-left: 5px;
}

body.path-mod-dialogue #region-main .btn-group > .btn {
  position: relative;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

body.path-mod-dialogue #region-main .btn-group > .btn + .btn {
  margin-left: -1px;
}

body.path-mod-dialogue #region-main .btn-group > .btn,
body.path-mod-dialogue #region-main .btn-group > .dropdown-menu,
body.path-mod-dialogue #region-main .btn-group > .popover {
  font-size: 14px;
}

body.path-mod-dialogue #region-main .btn-group > .btn-mini {
  font-size: 10.5px;
}

body.path-mod-dialogue #region-main .btn-group > .btn-small {
  font-size: 11.9px;
}

body.path-mod-dialogue #region-main .btn-group > .btn-large {
  font-size: 17.5px;
}

body.path-mod-dialogue #region-main .btn-group > .btn:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -moz-border-radius-topleft: 4px;
}

body.path-mod-dialogue #region-main .btn-group > .btn:last-child,
body.path-mod-dialogue #region-main .btn-group > .dropdown-toggle {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-bottomright: 4px;
}

body.path-mod-dialogue #region-main .btn-group > .btn.large:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 6px;
          border-bottom-left-radius: 6px;
  -webkit-border-top-left-radius: 6px;
          border-top-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  -moz-border-radius-topleft: 6px;
}

body.path-mod-dialogue #region-main .btn-group > .btn.large:last-child,
body.path-mod-dialogue #region-main .btn-group > .large.dropdown-toggle {
  -webkit-border-top-right-radius: 6px;
          border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
          border-bottom-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-bottomright: 6px;
}

body.path-mod-dialogue #region-main .btn-group > .btn:hover,
body.path-mod-dialogue #region-main .btn-group > .btn:focus,
body.path-mod-dialogue #region-main .btn-group > .btn:active,
body.path-mod-dialogue #region-main .btn-group > .btn.active {
  z-index: 2;
}

body.path-mod-dialogue #region-main .btn-group .dropdown-toggle:active,
body.path-mod-dialogue #region-main .btn-group.open .dropdown-toggle {
  outline: 0;
}

body.path-mod-dialogue #region-main .btn-group > .btn + .dropdown-toggle {
  *padding-top: 5px;
  padding-right: 8px;
  *padding-bottom: 5px;
  padding-left: 8px;
  -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn-group > .btn-mini + .dropdown-toggle {
  *padding-top: 2px;
  padding-right: 5px;
  *padding-bottom: 2px;
  padding-left: 5px;
}

body.path-mod-dialogue #region-main .btn-group > .btn-small + .dropdown-toggle {
  *padding-top: 5px;
  *padding-bottom: 4px;
}

body.path-mod-dialogue #region-main .btn-group > .btn-large + .dropdown-toggle {
  *padding-top: 7px;
  padding-right: 12px;
  *padding-bottom: 7px;
  padding-left: 12px;
}

body.path-mod-dialogue #region-main .btn-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn-group.open .btn.dropdown-toggle {
  background-color: #e6e6e6;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-primary.dropdown-toggle {
  background-color: #0044cc;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-warning.dropdown-toggle {
  background-color: #f89406;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-danger.dropdown-toggle {
  background-color: #bd362f;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-success.dropdown-toggle {
  background-color: #51a351;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-info.dropdown-toggle {
  background-color: #2f96b4;
}

body.path-mod-dialogue #region-main .btn-group.open .btn-inverse.dropdown-toggle {
  background-color: #222222;
}

body.path-mod-dialogue #region-main .btn .caret {
  margin-top: 8px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .btn-large .caret {
  margin-top: 6px;
}

body.path-mod-dialogue #region-main .btn-large .caret {
  border-top-width: 5px;
  border-right-width: 5px;
  border-left-width: 5px;
}

body.path-mod-dialogue #region-main .btn-mini .caret,
body.path-mod-dialogue #region-main .btn-small .caret {
  margin-top: 8px;
}

body.path-mod-dialogue #region-main .dropup .btn-large .caret {
  border-bottom-width: 5px;
}

body.path-mod-dialogue #region-main .btn-primary .caret,
body.path-mod-dialogue #region-main .btn-warning .caret,
body.path-mod-dialogue #region-main .btn-danger .caret,
body.path-mod-dialogue #region-main .btn-info .caret,
body.path-mod-dialogue #region-main .btn-success .caret,
body.path-mod-dialogue #region-main .btn-inverse .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}

body.path-mod-dialogue #region-main .btn-group-vertical {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn {
  display: block;
  float: none;
  max-width: 100%;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn + .btn {
  margin-top: -1px;
  margin-left: 0;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn:first-child {
  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn:last-child {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn-large:first-child {
  -webkit-border-radius: 6px 6px 0 0;
     -moz-border-radius: 6px 6px 0 0;
          border-radius: 6px 6px 0 0;
}

body.path-mod-dialogue #region-main .btn-group-vertical > .btn-large:last-child {
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
}

body.path-mod-dialogue #region-main .alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .alert,
body.path-mod-dialogue #region-main .alert h4 {
  color: #c09853;
}

body.path-mod-dialogue #region-main .alert h4 {
  margin: 0;
}

body.path-mod-dialogue #region-main .alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 20px;
}

body.path-mod-dialogue #region-main .alert-success {
  color: #468847;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}

body.path-mod-dialogue #region-main .alert-success h4 {
  color: #468847;
}

body.path-mod-dialogue #region-main .alert-danger,
body.path-mod-dialogue #region-main .alert-error {
  color: #b94a48;
  background-color: #f2dede;
  border-color: #eed3d7;
}

body.path-mod-dialogue #region-main .alert-danger h4,
body.path-mod-dialogue #region-main .alert-error h4 {
  color: #b94a48;
}

body.path-mod-dialogue #region-main .alert-info {
  color: #3a87ad;
  background-color: #d9edf7;
  border-color: #bce8f1;
}

body.path-mod-dialogue #region-main .alert-info h4 {
  color: #3a87ad;
}

body.path-mod-dialogue #region-main .alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}

body.path-mod-dialogue #region-main .alert-block > p,
body.path-mod-dialogue #region-main .alert-block > ul {
  margin-bottom: 0;
}

body.path-mod-dialogue #region-main .alert-block p + p {
  margin-top: 5px;
}

body.path-mod-dialogue #region-main .nav {
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none;
}

body.path-mod-dialogue #region-main .nav > li > a {
  display: block;
}

body.path-mod-dialogue #region-main .nav > li > a:hover,
body.path-mod-dialogue #region-main .nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}

body.path-mod-dialogue #region-main .nav > li > a > img {
  max-width: none;
}

body.path-mod-dialogue #region-main .nav > .pull-right {
  float: right;
}

body.path-mod-dialogue #region-main .nav-header {
  display: block;
  padding: 3px 15px;
  font-size: 11px;
  font-weight: bold;
  line-height: 20px;
  color: #999999;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
}

body.path-mod-dialogue #region-main .nav li + .nav-header {
  margin-top: 9px;
}

body.path-mod-dialogue #region-main .nav-list {
  padding-right: 15px;
  padding-left: 15px;
  margin-bottom: 0;
}

body.path-mod-dialogue #region-main .nav-list > li > a,
body.path-mod-dialogue #region-main .nav-list .nav-header {
  margin-right: -15px;
  margin-left: -15px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}

body.path-mod-dialogue #region-main .nav-list > li > a {
  padding: 3px 15px;
}

body.path-mod-dialogue #region-main .nav-list > .active > a,
body.path-mod-dialogue #region-main .nav-list > .active > a:hover,
body.path-mod-dialogue #region-main .nav-list > .active > a:focus {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  background-color: #0088cc;
}

body.path-mod-dialogue #region-main .nav-list [class^="icon-"],
body.path-mod-dialogue #region-main .nav-list [class*=" icon-"] {
  margin-right: 2px;
}

body.path-mod-dialogue #region-main .nav-list .divider {
  *width: 100%;
  height: 1px;
  margin: 9px 1px;
  *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}

body.path-mod-dialogue #region-main .nav-tabs,
body.path-mod-dialogue #region-main .nav-pills {
  *zoom: 1;
}

body.path-mod-dialogue #region-main .nav-tabs:before,
body.path-mod-dialogue #region-main .nav-pills:before,
body.path-mod-dialogue #region-main .nav-tabs:after,
body.path-mod-dialogue #region-main .nav-pills:after {
  display: table;
  line-height: 0;
  content: "";
}

body.path-mod-dialogue #region-main .nav-tabs:after,
body.path-mod-dialogue #region-main .nav-pills:after {
  clear: both;
}

body.path-mod-dialogue #region-main .nav-tabs > li,
body.path-mod-dialogue #region-main .nav-pills > li {
  float: left;
}

body.path-mod-dialogue #region-main .nav-tabs > li > a,
body.path-mod-dialogue #region-main .nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}

body.path-mod-dialogue #region-main .nav-tabs {
  border-bottom: 1px solid #ddd;
}

body.path-mod-dialogue #region-main .nav-tabs > li {
  margin-bottom: -1px;
}

body.path-mod-dialogue #region-main .nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;
}

body.path-mod-dialogue #region-main .nav-tabs > li > a:hover,
body.path-mod-dialogue #region-main .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #dddddd;
}

body.path-mod-dialogue #region-main .nav-tabs > .active > a,
body.path-mod-dialogue #region-main .nav-tabs > .active > a:hover,
body.path-mod-dialogue #region-main .nav-tabs > .active > a:focus {
  color: #555555;
  cursor: default;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}

body.path-mod-dialogue #region-main .nav-pills > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}

body.path-mod-dialogue #region-main .nav-pills > .active > a,
body.path-mod-dialogue #region-main .nav-pills > .active > a:hover,
body.path-mod-dialogue #region-main .nav-pills > .active > a:focus {
  color: #ffffff;
  background-color: #0088cc;
}

body.path-mod-dialogue #region-main .nav-stacked > li {
  float: none;
}

body.path-mod-dialogue #region-main .nav-stacked > li > a {
  margin-right: 0;
}

body.path-mod-dialogue #region-main .nav-tabs.nav-stacked {
  border-bottom: 0;
}

body.path-mod-dialogue #region-main .nav-tabs.nav-stacked > li > a {
  border: 1px solid #ddd;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

body.path-mod-dialogue #region-main .nav-tabs.nav-stacked > li:first-child > a {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-topleft: 4px;
}

body.path-mod-dialogue #region-main .nav-tabs.nav-stacked > li:last-child > a {
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  -moz-border-radius-bottomleft: 4px;
}

body.path-mod-dialogue #region-main .nav-tabs.nav-stacked > li > a:hover,
body.path-mod-dialogue #region-main .nav-tabs.nav-stacked > li > a:focus {
  z-index: 2;
  border-color: #ddd;
}

body.path-mod-dialogue #region-main .nav-pills.nav-stacked > li > a {
  margin-bottom: 3px;
}

body.path-mod-dialogue #region-main .nav-pills.nav-stacked > li:last-child > a {
  margin-bottom: 1px;
}

body.path-mod-dialogue #region-main .nav-tabs .dropdown-menu {
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
}

body.path-mod-dialogue #region-main .nav-pills .dropdown-menu {
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

body.path-mod-dialogue #region-main .nav .dropdown-toggle .caret {
  margin-top: 6px;
  border-top-color: #0088cc;
  border-bottom-color: #0088cc;
}

body.path-mod-dialogue #region-main .nav .dropdown-toggle:hover .caret,
body.path-mod-dialogue #region-main .nav .dropdown-toggle:focus .caret {
  border-top-color: #005580;
  border-bottom-color: #005580;
}

body.path-mod-dialogue #region-main .nav-tabs .dropdown-toggle .caret {
  margin-top: 8px;
}

body.path-mod-dialogue #region-main .nav .active .dropdown-toggle .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}

body.path-mod-dialogue #region-main .nav-tabs .active .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}

body.path-mod-dialogue #region-main .nav > .dropdown.active > a:hover,
body.path-mod-dialogue #region-main .nav > .dropdown.active > a:focus {
  cursor: pointer;
}

body.path-mod-dialogue #region-main .nav-tabs .open .dropdown-toggle,
body.path-mod-dialogue #region-main .nav-pills .open .dropdown-toggle,
body.path-mod-dialogue #region-main .nav > li.dropdown.open.active > a:hover,
body.path-mod-dialogue #region-main .nav > li.dropdown.open.active > a:focus {
  color: #ffffff;
  background-color: #999999;
  border-color: #999999;
}

body.path-mod-dialogue #region-main .nav li.dropdown.open .caret,
body.path-mod-dialogue #region-main .nav li.dropdown.open.active .caret,
body.path-mod-dialogue #region-main .nav li.dropdown.open a:hover .caret,
body.path-mod-dialogue #region-main .nav li.dropdown.open a:focus .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  opacity: 1;
  filter: alpha(opacity=100);
}

body.path-mod-dialogue #region-main .tabs-stacked .open > a:hover,
body.path-mod-dialogue #region-main .tabs-stacked .open > a:focus {
  border-color: #999999;
}

body.path-mod-dialogue #region-main .tabbable {
  *zoom: 1;
}

body.path-mod-dialogue #region-main .tabbable:before,
body.path-mod-dialogue #region-main .tabbable:after {
  display: table;
  line-height: 0;
  content: "";
}

body.path-mod-dialogue #region-main .tabbable:after {
  clear: both;
}

body.path-mod-dialogue #region-main .tab-content {
  overflow: auto;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs,
body.path-mod-dialogue #region-main .tabs-left > .nav-tabs {
  border-bottom: 0;
}

body.path-mod-dialogue #region-main .tab-content > .tab-pane,
body.path-mod-dialogue #region-main .pill-content > .pill-pane {
  display: none;
}

body.path-mod-dialogue #region-main .tab-content > .active,
body.path-mod-dialogue #region-main .pill-content > .active {
  display: block;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > li > a:hover,
body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > .active > a,
body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > .active > a:hover,
body.path-mod-dialogue #region-main .tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs > li,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs > li {
  float: none;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs > li > a,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs > li > a:hover,
body.path-mod-dialogue #region-main .tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

body.path-mod-dialogue #region-main .tabs-left > .nav-tabs .active > a,
body.path-mod-dialogue #region-main .tabs-left > .nav-tabs .active > a:hover,
body.path-mod-dialogue #region-main .tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

body.path-mod-dialogue #region-main .tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

body.path-mod-dialogue #region-main .tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
     -moz-border-radius: 0 4px 4px 0;
          border-radius: 0 4px 4px 0;
}

body.path-mod-dialogue #region-main .tabs-right > .nav-tabs > li > a:hover,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

body.path-mod-dialogue #region-main .tabs-right > .nav-tabs .active > a,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs .active > a:hover,
body.path-mod-dialogue #region-main .tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}

body.path-mod-dialogue #region-main .nav > .disabled > a {
  color: #999999;
}

body.path-mod-dialogue #region-main .nav > .disabled > a:hover,
body.path-mod-dialogue #region-main .nav > .disabled > a:focus {
  text-decoration: none;
  cursor: default;
  background-color: transparent;
}

body.path-mod-dialogue #region-main .thumbnails {
  margin-left: -20px;
  list-style: none;
  *zoom: 1;
}

body.path-mod-dialogue #region-main .thumbnails:before,
body.path-mod-dialogue #region-main .thumbnails:after {
  display: table;
  line-height: 0;
  content: "";
}

body.path-mod-dialogue #region-main .thumbnails:after {
  clear: both;
}

body.path-mod-dialogue #region-main .row-fluid .thumbnails {
  margin-left: 0;
}

body.path-mod-dialogue #region-main .thumbnails > li {
  float: left;
  margin-bottom: 20px;
  margin-left: 20px;
}

body.path-mod-dialogue #region-main .thumbnail {
  display: block;
  padding: 4px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
       -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

body.path-mod-dialogue #region-main a.thumbnail:hover,
body.path-mod-dialogue #region-main a.thumbnail:focus {
  border-color: #0088cc;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
     -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
          box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}

body.path-mod-dialogue #region-main .thumbnail > img {
  display: block;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}

body.path-mod-dialogue #region-main .thumbnail .caption {
  padding: 9px;
  color: #555555;
}

body.path-mod-dialogue #region-main .media,
body.path-mod-dialogue #region-main .media-body {
  overflow: hidden;
  *overflow: visible;
  zoom: 1;
}

body.path-mod-dialogue #region-main .media,
body.path-mod-dialogue #region-main .media .media {
  margin-top: 15px;
}

body.path-mod-dialogue #region-main .media:first-child {
  margin-top: 0;
}

body.path-mod-dialogue #region-main .media-object {
  display: block;
}

body.path-mod-dialogue #region-main .media-heading {
  margin: 0 0 5px;
}

body.path-mod-dialogue #region-main .media > .pull-left {
  margin-right: 10px;
}

body.path-mod-dialogue #region-main .media > .pull-right {
  margin-left: 10px;
}

body.path-mod-dialogue #region-main .media-list {
  margin-left: 0;
  list-style: none;
}

body.path-mod-dialogue #region-main .badge {
  display: inline-block;
  padding: 2px 4px;
  font-size: 11.844px;
  font-weight: bold;
  line-height: 14px;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #999999;
}

body.path-mod-dialogue #region-main .badge {
  padding-right: 9px;
  padding-left: 9px;
  -webkit-border-radius: 9px;
     -moz-border-radius: 9px;
          border-radius: 9px;
}

body.path-mod-dialogue #region-main .badge:empty {
  display: none;
}

body.path-mod-dialogue #region-main a.badge:hover,
body.path-mod-dialogue #region-main a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}

body.path-mod-dialogue #region-main .label-important,
body.path-mod-dialogue #region-main .badge-important {
  background-color: #b94a48;
}

body.path-mod-dialogue #region-main .label-important[href],
body.path-mod-dialogue #region-main .badge-important[href] {
  background-color: #953b39;
}

body.path-mod-dialogue #region-main .label-warning,
body.path-mod-dialogue #region-main .badge-warning {
  background-color: #f89406;
}

body.path-mod-dialogue #region-main .label-warning[href],
body.path-mod-dialogue #region-main .badge-warning[href] {
  background-color: #c67605;
}

body.path-mod-dialogue #region-main .label-success,
body.path-mod-dialogue #region-main .badge-success {
  background-color: #468847;
}

body.path-mod-dialogue #region-main .label-success[href],
body.path-mod-dialogue #region-main .badge-success[href] {
  background-color: #356635;
}

body.path-mod-dialogue #region-main .label-info,
body.path-mod-dialogue #region-main .badge-info {
  background-color: #3a87ad;
}

body.path-mod-dialogue #region-main .label-info[href],
body.path-mod-dialogue #region-main .badge-info[href] {
  background-color: #2d6987;
}

body.path-mod-dialogue #region-main .label-inverse,
body.path-mod-dialogue #region-main .badge-inverse {
  background-color: #333333;
}

body.path-mod-dialogue #region-main .label-inverse[href],
body.path-mod-dialogue #region-main .badge-inverse[href] {
  background-color: #1a1a1a;
}

body.path-mod-dialogue #region-main .btn .badge {
  position: relative;
  top: -1px;
}

body.path-mod-dialogue #region-main .btn-mini .badge {
  top: 0;
}

body.path-mod-dialogue #region-main .pull-right {
  float: right !important;
}

body.path-mod-dialogue #region-main .pull-left {
  float: left !important;
}

@font-face {
  font-family: 'FontAwesome';
  font-style: normal;
  font-weight: normal;
  src: url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/fonts/fontawesome-webfont.eot?v=4.0.3');
  src: url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/fonts/fontawesome-webfont.eot?#iefix&v=4.0.3') format('embedded-opentype'), url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/fonts/fontawesome-webfont.woff?v=4.0.3') format('woff'), url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/fonts/fontawesome-webfont.ttf?v=4.0.3') format('truetype'), url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular') format('svg');
}

body.path-mod-dialogue #region-main .fa {
  display: inline-block;
  font-family: FontAwesome;
  -webkit-font-smoothing: antialiased;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -moz-osx-font-smoothing: grayscale;
}

body.path-mod-dialogue #region-main .fa-sort-alpha-asc:before {
  content: "\f15d";
}

body.path-mod-dialogue #region-main .fa-sort-alpha-desc:before {
  content: "\f15e";
}

body.path-mod-dialogue #region-main .fa-sort-amount-asc:before {
  content: "\f160";
}

body.path-mod-dialogue #region-main .fa-sort-amount-desc:before {
  content: "\f161";
}

body.path-mod-dialogue #region-main .fa-sort-numeric-asc:before {
  content: "\f162";
}

body.path-mod-dialogue #region-main .fa-sort-numeric-desc:before {
  content: "\f163";
}

body.path-mod-dialogue #region-main .fa-lock:before {
  content: "\f023";
}

body.path-mod-dialogue #region-main .fa-trash-o:before {
  content: "\f014";
}

body.path-mod-dialogue #region-main .yui3-aclist-field input:focus {
  outline-width: 0;
}

body.path-mod-dialogue #region-main .yui3-aclist-field,
body.path-mod-dialogue #region-main .yui3-aclist-field * {
  display: inline-block;
  padding: 0;
  margin: 0;
}

body.path-mod-dialogue #region-main .yui3-aclist-field > ul li {
  list-style-type: none;
}

body.path-mod-dialogue #region-main .yui3-aclist-field > ul:empty {
  display: none;
}

body.path-mod-dialogue #region-main .yui3-aclist-field {
  padding: 3px 3px;
  color: #555555;
  background-color: #FFFFFF;
  border: 1px solid #CCCCCC;
  border-radius: 4px 4px 4px 4px;
}

body.path-mod-dialogue #region-main .yui3-aclist-field input.yui3-aclist-input {
  margin-bottom: 0;
  border: 0;
}

body.path-mod-dialogue #region-main .yui3-aclist-field .yui3-aclist-item,
body.path-mod-dialogue #region-main .yui3-aclist-field .yui3-aclist-footer {
  display: block;
  padding: 3px 6px;
}

body.path-mod-dialogue #region-main .yui3-aclist-field .yui3-aclist-footer {
  padding: 0 6px;
}

body.path-mod-dialogue #region-main .yui3-aclist-field .aclist-participant-item img.userpicture,
body.path-mod-dialogue #region-main .yui3-aclist-field .yui3-aclist-item img.userpicture {
  width: 24px;
  height: 24px;
  vertical-align: middle;
  border-radius: 3px;
}

body.path-mod-dialogue #region-main .yui3-aclist-field .yui3-aclist-item span.participant-name {
  margin-left: 5px;
}

body.path-mod-dialogue #region-main .aclist-participant-item {
  padding: 1px;
  padding-top: 1px;
  padding-bottom: 1px;
  margin-right: 5px;
  background-color: #ffefca;
  border-color: #e4af5f;
  border-style: solid;
  border-width: 1px;
  border-radius: 3px;
}

body.path-mod-dialogue #region-main .aclist-participant-item span {
  margin: 0 5px;
}

body.path-mod-dialogue #region-main .aclist-participant-item .remove {
  cursor: pointer;
}

body.path-mod-dialogue #region-main .conversation,
body.path-mod-dialogue #region-main .conversation-body {
  overflow: hidden;
  *overflow: visible;
  zoom: 1;
}

body.path-mod-dialogue #region-main .conversation,
body.path-mod-dialogue #region-main .conversation .conversation {
  margin-top: 15px;
}

body.path-mod-dialogue #region-main .conversation:first-child {
  margin-top: 0;
}

body.path-mod-dialogue #region-main .conversation-object {
  display: block;
}

body.path-mod-dialogue #region-main .conversation-object img.userpicture {
  width: 64px;
  height: 64px;
}

body.path-mod-dialogue #region-main .conversation-heading {
  margin: 0 0 5px;
}

body.path-mod-dialogue #region-main .conversation-heading .heading {
  display: inline-block;
  margin: 0;
}

body.path-mod-dialogue #region-main .message-actions {
  list-style-type: none;
}

body.path-mod-dialogue #region-main .message-actions li {
  display: inline;
}

body.path-mod-dialogue #region-main .message-actions li a {
  margin-left: 10px;
}

body.path-mod-dialogue #region-main .message-actions li i.fa {
  margin-left: 5px;
}

body.path-mod-dialogue #region-main .conversation-body {
  padding: 0.8em;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3em;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

body.path-mod-dialogue #region-main .conversation hr {
  margin: 3px 0;
}

body.path-mod-dialogue #region-main .conversation .attachments span {
  margin: 0 3px;
}

body.path-mod-dialogue #region-main .conversation > .pull-left {
  margin-right: 10px;
}

body.path-mod-dialogue #region-main .conversation > .pull-right {
  margin-left: 10px;
}

body.path-mod-dialogue #region-main .conversation .participants {
  margin-top: 10px;
  margin-left: 74px;
}

body.path-mod-dialogue #region-main .conversation .participants span.participant {
  margin: 0 5px;
}

body.path-mod-dialogue #region-main .conversation-list {
  margin-left: 0;
  list-style: none;
}

body.path-mod-dialogue #region-main .state-indicator {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}

body.path-mod-dialogue #region-main .state-indicator:empty {
  display: none;
}

body.path-mod-dialogue #region-main .state-open {
  background-color: #5cb85c;
}

body.path-mod-dialogue #region-main .state-closed {
  background-color: #d9534f;
}

body.path-mod-dialogue #region-main .state-draft {
  background-color: #f0ad4e;
}

body.path-mod-dialogue #region-main .state-bulk {
  background-color: #5bc0de;
}

body.path-mod-dialogue #region-main .listing-meta h6 {
  display: inline-block;
}

body.path-mod-dialogue #region-main .listing-meta:before {
  display: block;
  clear: both;
  content: "";
}

body.path-mod-dialogue #region-main .dropdown-group {
  display: inline-block;
}

body.path-mod-dialogue #region-main .dropdown-group > span {
  margin-right: 10px;
}

body.path-mod-dialogue #region-main .btn-group + .dropdown-group > span {
  margin-left: 10px;
}

body.path-mod-dialogue #region-main .participation {
  margin-top: 10px;
}

body.path-mod-dialogue #region-main .participation + span {
  display: inline-block;
  margin: 0 10px 0 0;
}

body.path-mod-dialogue #region-main span.participant {
  margin: 0 10px 0 0;
}

body.path-mod-dialogue #region-main .btn-create {
  display: inline-block;
  *display: inline;
  padding: 4px 12px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  background-color: #006dcc;
  *background-color: #e6e6e6;
  *background-color: #0044cc;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn-create:hover,
body.path-mod-dialogue #region-main .btn-create:focus,
body.path-mod-dialogue #region-main .btn-create:active,
body.path-mod-dialogue #region-main .btn-create.active,
body.path-mod-dialogue #region-main .btn-create.disabled,
body.path-mod-dialogue #region-main .btn-create[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}

body.path-mod-dialogue #region-main .btn-create:active,
body.path-mod-dialogue #region-main .btn-create.active {
  background-color: #cccccc \9;
}

body.path-mod-dialogue #region-main .btn-create:first-child {
  *margin-left: 0;
}

body.path-mod-dialogue #region-main .btn-create:hover,
body.path-mod-dialogue #region-main .btn-create:focus {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}

body.path-mod-dialogue #region-main .btn-create:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

body.path-mod-dialogue #region-main .btn-create.active,
body.path-mod-dialogue #region-main .btn-create:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

body.path-mod-dialogue #region-main .btn-create.disabled,
body.path-mod-dialogue #region-main .btn-create[disabled] {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

body.path-mod-dialogue #region-main .btn-create .badge {
  position: relative;
  top: -1px;
}

body.path-mod-dialogue #region-main .btn-create:hover,
body.path-mod-dialogue #region-main .btn-create:focus,
body.path-mod-dialogue #region-main .btn-create:active,
body.path-mod-dialogue #region-main .btn-create.active,
body.path-mod-dialogue #region-main .btn-create.disabled,
body.path-mod-dialogue #region-main .btn-create[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}

body.path-mod-dialogue #region-main .btn-create:active,
body.path-mod-dialogue #region-main .btn-create.active {
  background-color: #003399 \9;
}

body.path-mod-dialogue #region-main .btn-create .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}

body.path-mod-dialogue #region-main a.btn:link,
body.path-mod-dialogue #region-main a.btn:visited {
  color: #555555;
}

body.path-mod-dialogue #region-main a.btn-create:link,
body.path-mod-dialogue #region-main a.btn-create:visited {
  color: white;
}

body.path-mod-dialogue #region-main hr {
  margin: 20px 0;
  border: 0;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #ffffff;
}

body.path-mod-dialogue #region-main .notifyproblem {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  color: #c09853;
  color: #b94a48;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  background-color: #f2dede;
  border: 1px solid #fbeed5;
  border-color: #eed3d7;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .notifysuccess {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  color: #c09853;
  color: #468847;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  background-color: #dff0d8;
  border: 1px solid #fbeed5;
  border-color: #d6e9c6;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .notifymessage {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  color: #c09853;
  color: #3a87ad;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  background-color: #d9edf7;
  border: 1px solid #fbeed5;
  border-color: #bce8f1;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .redirectmessage {
  padding: 8px 35px 8px 14px;
  padding-top: 14px;
  padding-bottom: 14px;
  margin-bottom: 20px;
  color: #c09853;
  color: #3a87ad;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  background-color: #d9edf7;
  border: 1px solid #fbeed5;
  border-color: #bce8f1;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

body.path-mod-dialogue #region-main .mform fieldset {
  border: none;
}

body.path-mod-dialogue #region-main fieldset.hidden {
  display: inherit;
  visibility: inherit;
}

body.path-mod-dialogue #region-main .drop-down-arrow {
  display: inline-block;
  width: 0;
  height: 0;
  vertical-align: bottom;
  cursor: pointer;
  border-top: 4px solid black;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  content: "";
}

body.path-mod-dialogue #region-main .input-xxlarge {
  width: 530px;
}

body.path-mod-dialogue #region-main .img-rounded {
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

body.path-mod-dialogue.jsenabled .conversation-list tr:hover,
body.path-mod-dialogue.jsenabled .draft-list tr:hover,
body.path-mod-dialogue.jsenabled .bulkopenrule-list tr:hover {
  cursor: pointer;
}


