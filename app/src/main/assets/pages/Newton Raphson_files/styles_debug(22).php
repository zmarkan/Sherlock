/** Path: plugin mod_hotpot .' **/
/**
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * mod/hotpot/styles.css
 *
 * @package   mod-hotpot
 * @copyright 2010 Gordon Bateson <gordon.bateson@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/** course view **/
body.path-course-view div.hotpotrecentactivity p {margin: 0px;}
body.path-course-view div.hotpotrecentactivity ul {font-size: 0.8em; margin: 0em 0em 0em 1em; padding: 0em 0em 0em 1em;}

/** mod hotpot mod **/
#page-mod-hotpot-mod #reviewoptionshdr .fitem {clear: none; float: left; margin-left: 48px; width: 20%;}
#page-mod-hotpot-mod #reviewoptionshdr .fitemtitle {font-weight: bold; margin-left: 0; text-align: left; width: 100%;}
#page-mod-hotpot-mod #reviewoptionshdr fieldset.fgroup {margin-left: 0; text-align: left; width: 100%;}
#page-mod-hotpot-mod #reviewoptionshdr fieldset.fgroup {clear: left; margin: 0 0 1em;}
#page-mod-hotpot-mod #reviewoptionshdr fieldset.fgroup > span {clear: left; float: left; line-height: 1.7;}
#page-mod-hotpot-mod #reviewoptionshdr fieldset.fgroup span label {margin-left: 0.4em;}

#page-mod-hotpot-mod.dir-rtl #reviewoptionshdr .fitem {float: right;}
#page-mod-hotpot-mod.dir-rtl #reviewoptionshdr .fitemtitle {text-align: right;}
#page-mod-hotpot-mod.dir-rtl #reviewoptionshdr fieldset.fgroup span {float: right; clear: right;}

/** mod hotpot view **/
#page-mod-hotpot-view .region-content {text-align: center;}
#page-mod-hotpot-view .region-content ul.hotpotwarnings,
#page-mod-hotpot-view .region-content table.hotpotentryoptions,
#page-mod-hotpot-view .region-content table.hotpotattempts,
#page-mod-hotpot-view .region-content table.hotpotattemptssummary,
#page-mod-hotpot-view .region-content table.hotpotdeleteattempts {margin-left: auto; margin-right: auto;}
#page-mod-hotpot-view .region-content table.hotpotentryoptions td.c0 {font-weight: bold; text-align: right;}
#page-mod-hotpot-view .region-content table.hotpotentryoptions td.c1 {font-weight: normal; text-align: left;}

/** mod hotpot attempt **/
#page-mod-hotpot-attempt div.hotpotstopbutton {position: absolute; right: 0px; top: 0.8em;}
#page-mod-hotpot-attempt div.hotpotstopbutton .FuncButton,
#page-mod-hotpot-attempt div.hotpotstopbutton .FuncButtonUp,
#page-mod-hotpot-attempt div.hotpotstopbutton .FuncButtonDown {margin-right: 18px;}
#page-mod-hotpot-attempt input,
#page-mod-hotpot-attempt textarea {width: auto;}

/** mod hotpot submit **/
#page-mod-hotpot-submit .region-content {text-align: center;}
#page-mod-hotpot-submit .region-content ul.hotpotexitfeedback,
#page-mod-hotpot-submit .region-content p.hotpotwhatnext,
#page-mod-hotpot-submit .region-content ul.hotpotexitfeedback li {list-style-type: none;}
#page-mod-hotpot-submit .region-content li.hotpotexitencouragement {font-size: 1.2em; margin-top: 6px; margin-bottom: 6px;}
#page-mod-hotpot-submit .region-content table.hotpotexitlinks {margin-left: auto; margin-right: auto;}
#page-mod-hotpot-submit .region-content table.hotpotexitlinks td.c0 {font-weight: bold; text-align: right;}
#page-mod-hotpot-submit .region-content table.hotpotexitlinks td.c1 {font-weight: normal; text-align: left;}

/** mod hotpot index **/
#page-mod-hotpot-index .region-content {text-align: center;}
#page-mod-hotpot-index .region-content table {margin-left: auto; margin-right: auto;}

/** mod hotpot report **/
#page-mod-hotpot-report div#commands  {text-align: center;}
#page-mod-hotpot-report table#attempts {clear: both; margin-left: auto; margin-right: auto;}
#page-mod-hotpot-report table#attempts.analysis td.c0 {font-weight: bold;}
#page-mod-hotpot-report table#attempts.analysis td.c0:after {content: ":"}
#page-mod-hotpot-report table.flexible tr.emptyrow {display: none; }
/* ================= */
#page-mod-hotpot-report #page-content {overflow:visible;}
#page-mod-hotpot-report #page-content #region-main-box #region-post-box #region-main-wrap #region-main {overflow:visible;}
#page-mod-hotpot-report #page-content #region-main-box #region-post-box #region-main-wrap #region-main div.region-content {overflow:visible;}
#page-mod-hotpot-report #page-content #region-main-box #region-post-box #region-main-wrap #region-main div.region-content #attemptsform div.no-overflow {overflow:visible;}
/* ================= */
#page-mod-hotpot-report ul.response{text-align: left; padding: 0px; margin-top: 0px; text-indent: -6px;}
#page-mod-hotpot-report ul.response li {list-style: none; text-align: left;} /* white-space:nowrap; */
#page-mod-hotpot-report ul.response li.correct {color: green; list-style-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=i%2Ftick_green_small);}
#page-mod-hotpot-report ul.response li.ignored {color: grey; list-style-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=i%2Fshow);}
#page-mod-hotpot-report ul.response li.wrong {color: red; list-style-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=i%2Fcross_red_small);}
#page-mod-hotpot-report ul.response li.score {color: inherit; list-style-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=i%2Fitem);}
#page-mod-hotpot-report ul.response li.hintsclueschecks {color: #666666; list-style-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=i%2Fitem);}

/** mod hotpot review **/
#page-mod-hotpot-review table#responses {clear: both; margin-left: auto; margin-right: auto;}
#page-mod-hotpot-review table#responses td.c0,
#page-mod-hotpot-review table#responses td.c2,
#page-mod-hotpot-review table#responses td.c4,
#page-mod-hotpot-review table#responses td.c6 {font-weight: bold; text-align: right;}
#page-mod-hotpot-review table#responses td.c1,
#page-mod-hotpot-review table#responses td.c3,
#page-mod-hotpot-review table#responses td.c5,
#page-mod-hotpot-review table#responses td.lastcol {font-weight: normal; text-align: left;}
#page-mod-hotpot-review table#responses td.c0:after,
#page-mod-hotpot-review table#responses td.c2:after,
#page-mod-hotpot-review table#responses td.c4:after,
#page-mod-hotpot-review table#responses td.c6:after {content: ":"}
#page-mod-hotpot-review table#responses td.lastcol:after {content: ""}


