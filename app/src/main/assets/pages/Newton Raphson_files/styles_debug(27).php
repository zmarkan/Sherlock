/** Path: plugin mod_quiz .' **/
/** Bits that can appear on any page. */
.path-mod-quiz .statedetails {
    display: block;
    font-size: 0.7em;
}

/** Attempt and review pages **/
#page-mod-quiz-attempt #page .controls,
#page-mod-quiz-summary #page .controls,
#page-mod-quiz-review #page .controls {
    text-align: center;
    margin: 8px auto;
}

#page-mod-quiz-attempt .submitbtns,
#page-mod-quiz-review .submitbtns {
    clear: left;
    text-align: left;
    padding-top: 1.5em;
}

#page-mod-quiz-attempt.dir-rtl .submitbtns,
#page-mod-quiz-review.dir-rtl .submitbtns {
    text-align: right;
}

body.jsenabled .questionflagcheckbox {
    display: none;
}

#page-mod-quiz-attempt #connection-ok,
#page-mod-quiz-attempt #connection-error {
    position: fixed;
    top: 0;
    width: 80%;
    left: 10%;
    color: #555;
    border-radius: 0 0 10px 10px;
    box-shadow: 5px 5px 20px 0 #666666;
    padding: 1em 1em 0;
    z-index: 10000;
}

#page-mod-quiz-attempt #connection-error {
    background-color: #fcc;
}
#page-mod-quiz-attempt #connection-ok {
    background-color: #cfb;
    width: 60%;
    left: 20%;
}

/** Mod quiz attempt **/
.generalbox#passwordbox {
    /* Should probably match .generalbox#intro above */
    width: 70%;
    margin-left: auto;
    margin-right: auto;
}
#passwordform {
    margin: 1em 0;
}

/* Question navigation block. */
#quiznojswarning {
    color: red;
}
#quiznojswarning {
    font-size: 0.7em;
    line-height: 1.1;
}
.jsenabled #quiznojswarning {
    display: none;
}

.path-mod-quiz #user-picture {
    margin: 0.5em 0;
}
.path-mod-quiz #user-picture img {
    width: auto;
    height: auto;
    vertical-align: bottom;
}

.path-mod-quiz .qnbutton {
    display: block;
    position: relative;
    float: left;
    width: 1.5em;
    height: 1.5em;
    overflow: hidden;
    margin: 0.3em 0.3em 0.3em 0;
    padding: 0;
    border: 1px solid #bbb;
    background: #ddd;
    text-align: center;
    vertical-align: middle;
    line-height: 1.5em !important;
    font-weight: bold;
    text-decoration: none;
}
.path-mod-quiz.dir-rtl  .qnbutton {
    float: right;
}
.path-mod-quiz .qnbutton .trafficlight,
.path-mod-quiz .qnbutton .thispageholder {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

.path-mod-quiz .qnbutton.thispage {
    border-color: #666;
}
.path-mod-quiz .qnbutton.thispage .thispageholder {
    border: 1px solid #666;
}

.path-mod-quiz .qnbutton.flagged .trafficlight {
    background: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=quiz&image=navflagged) no-repeat top right;
}

.path-mod-quiz .qnbutton.notyetanswered,
.path-mod-quiz .qnbutton.requiresgrading,
.path-mod-quiz .qnbutton.invalidanswer {
    background-color: white;
}
.path-mod-quiz .qnbutton.correct {
    background-color: #cfc;
}
.path-mod-quiz .qnbutton.correct .trafficlight {
    border-bottom: 3px solid #080;
}
.path-mod-quiz .qnbutton.partiallycorrect {
    background-color: #ffa;
}
.path-mod-quiz .qnbutton.notanswered,
.path-mod-quiz .qnbutton.incorrect {
    background-color: #fcc;
}
.path-mod-quiz .qnbutton.notanswered .trafficlight,
.path-mod-quiz .qnbutton.incorrect .trafficlight {
    border-top: 3px solid #800;
}

.path-mod-quiz .qnbutton.free:hover {
    text-decoration: underline;
}
.path-mod-quiz .qnbutton.free span {
    cursor: pointer;
}

.path-mod-quiz .othernav {
    clear: both;
    margin: 0.5em 0;
}
.path-mod-quiz .othernav a,
.path-mod-quiz .othernav input {
    display: block;
    margin: 0.5em 0;
}

/* Countdown timer. */
#quiz-timer {
    display: none;
    margin-top: 1em;
}
#quiz-time-left {
    font-weight: bold;
}
#quiz-timer.timeleft15 {
    background: #ffffff;
}
#quiz-timer.timeleft14 {
    background: #ffeeee;
}
#quiz-timer.timeleft13 {
    background: #ffdddd;
}
#quiz-timer.timeleft12 {
    background: #ffcccc;
}
#quiz-timer.timeleft11 {
    background: #ffbbbb;
}
#quiz-timer.timeleft10 {
    background: #ffaaaa;
}
#quiz-timer.timeleft9 {
    background: #ff9999;
}
#quiz-timer.timeleft8 {
    background: #ff8888;
}
#quiz-timer.timeleft7 {
    background: #ff7777;
}
#quiz-timer.timeleft6 {
    background: #ff6666;
}
#quiz-timer.timeleft5 {
    background: #ff5555;
}
#quiz-timer.timeleft4 {
    background: #ff4444;
}
#quiz-timer.timeleft3 {
    background: #ff3333;
}
#quiz-timer.timeleft2 {
    background: #ff2222;
}
#quiz-timer.timeleft1 {
    background: #ff1111;
}
#quiz-timer.timeleft0 {
    background: #ff0000;
}

/** mod quiz mod **/
#page-mod-quiz-mod #id_reviewoptionshdr .fitem {
    width: 23%;
    margin-left: 10px;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup {
    width: 100%;
    text-align: left;
    margin-left: 0;
}

#page-mod-quiz-edit div.question div.content .questiontext,
#categoryquestions .questiontext {
    text-overflow: ellipsis;
    position: relative;
    zoom: 1;
    padding-left: 0.3em;
    max-width: 40%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

#page-mod-quiz-edit div.question div.content .questionname,
#categoryquestions .questionname {
    white-space: nowrap;
    overflow: hidden;
    zoom: 1;
    position: relative;
    max-width: 20%;
}

#page-mod-quiz-edit div.editq div.question div.content .singlequestion a .questionname,
div.editq div.question div.content .singlequestion a .questiontext {
    text-decoration: underline;
}

#page-mod-quiz-edit.ie6 div.question div.content .questiontext {
    width: 50%;
}
#page-mod-quiz-edit.ie6 div.question div.content .questionname {
    width: 20%;
}

#page-mod-quiz-mod #id_reviewoptionshdr .fitem {
    float: left;
    width: 23%;
    clear: none;
}

#page-mod-quiz-mod #id_reviewoptionshdr .fitemtitle {
    width: 100%;
    font-weight: bold;
    text-align: left;
    height: 2.5em;
    margin-left: 0;
}

#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup {
    clear: left;
    margin: 0 0 1em;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup > span {
    float: left;
    clear: left;
    line-height: 1.7;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup span label {
    margin-left: 0.4em;
}

#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitem {
    float: right;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr fieldset.fgroup span {
    float: right;
    clear: right;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitemtitle {
    text-align: right;
}

/** Mod quiz view **/
#page-mod-quiz-view .quizinfo,
#page-mod-quiz-view #page .quizgradefeedback,
#page-mod-quiz-view #page .quizattempt {
    text-align: center;
}
#page-mod-quiz-view #page .quizattemptsummary td p {
    margin-top: 0;
}
#page-mod-quiz-view table.quizattemptsummary tr.bestrow td {
    border-color: #bce8f1;
    background-color: #d9edf7;
}
table.quizattemptsummary .noreviewmessage {
    color: gray;
}
#page-mod-quiz-view .generaltable.quizattemptsummary {
    margin-left: auto;
    margin-right: auto;
}
#page-mod-quiz-view .generalbox#feedback {
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 15px;
}
#page-mod-quiz-view .generalbox#feedback h2 {
    margin: 0;
}
#page-mod-quiz-view .generalbox#feedback h3 {
    text-align: left;
}
#page-mod-quiz-view.dir-rtl .generalbox#feedback h3 {
    text-align: center;
}
#page-mod-quiz-view .generalbox#feedback .overriddennotice {
    text-align: center;
    font-size: 0.7em;
}
.quizstartbuttondiv.quizsecuremoderequired input {
    display: none;
}
.jsenabled .quizstartbuttondiv.quizsecuremoderequired input {
    display: inline;
}

body.path-mod-quiz .gradedattempt,
body.path-mod-quiz table tbody tr.gradedattempt > td {
    border-color: #bce8f1;
    background-color: #d9edf7;
}

.quizattemptcounts {
    clear: left;
    text-align: center;
    display:inline;
    margin-left:20%;
}
.dir-rtl .quizattemptcounts {
    margin-left:0;
    margin-right: 20%;
}
#page-mod-quiz-view .quizattemptcounts,
.dir-rtl #page-mod-quiz-view .quizattemptcounts {
    display: block;
    margin-left: 0;
    margin-right: 0;
}
/** Mod quiz summary **/
#page-mod-quiz-summary #content {
    text-align: center;
}
#page-mod-quiz-summary .questionflag {
    vertical-align: text-bottom;
}
#page-mod-quiz-summary #quiz-timer {
    text-align: center;
    margin-top: 1em;
}
#page-mod-quiz-summary .submitbtns {
    margin-top: 1.5em;
}
@media print {
    .quiz-secure-window * {
        display: none !important;
    }
}

/** Mod quiz review **/
table.quizreviewsummary {
    width: 100%;
}
table.quizreviewsummary th.cell {
    padding: 1px 0.5em 1px 1em;
    font-weight: bold;
    text-align: right;
    width: 10em;
    background: #f0f0f0;
}
table.quizreviewsummary td.cell {
    padding: 1px 1em 1px 0.5em;
    text-align: left;
    background: #fafafa;
}
.dir-rtl table.quizreviewsummary td.cell {
    text-align: right;
}

/** Mod quiz make comment or override grade popup. **/
#page-mod-quiz-comment .mform {
    width: 100%;
}
#page-mod-quiz-comment .mform fieldset {
    margin: 0;
}
#page-mod-quiz-comment .que {
    margin: 0;
}

/** Mod quiz report **/
#page-mod-quiz-report h2.main {
    clear: both;
}
#page-mod-quiz-report div#commands,
#page-mod-quiz-report .controls {
    text-align: center;
}
#page-mod-quiz-report .dubious {
    background-color: #fcc;
}
#page-mod-quiz-report .highlight {
    border: 1px solid #bce8f1;
    background-color: #d9edf7;
}
#page-mod-quiz-report .negcovar {
    border : medium solid pink;
}
#page-mod-quiz-report .toggleincludeauto {
    text-align: center;
}
#page-mod-quiz-report .gradetheselink {
    font-size: 0.8em;
}
#page-mod-quiz-report .mform fieldset.fgroup span label {
    margin-right: 14px;
}
#page-mod-quiz-report table th {
    white-space: normal;
}
#page-mod-quiz-report table#attempts td,
#page-mod-quiz-report table.quizresponseanalysis td {
    word-wrap: break-word;
    max-width: 20em;
}
#page-mod-quiz-report table.titlesleft td.c0 {
    font-weight: bold;
}
#page-mod-quiz-report table .numcol {
    text-align: center;
    vertical-align : middle !important;
}

#page-mod-quiz-report table#attempts {
    clear: both;
    width: 80%;
    margin: 0.2em auto;
}
#page-mod-quiz-report table#attempts .header,
#page-mod-quiz-report table#attempts .cell {
    padding: 4px;
}
#page-mod-quiz-report table#attempts .header .commands {
    display: inline;
}
#page-mod-quiz-report table#attempts .picture {
    width: 40px;
}
#page-mod-quiz-report table#attempts td {
    border-left-width: 1px;
    border-right-width: 1px;
    border-left-style: solid;
    border-right-style: solid;
    vertical-align: middle;
}
#page-mod-quiz-report table#attempts .header {
    text-align: left;
}
#page-mod-quiz-report table#attempts .picture {
    text-align: center !important;
}
#page-mod-quiz-report table#attempts.grades span.que,
#page-mod-quiz-report table#attempts span.avgcell {
    white-space: nowrap;
}
#page-mod-quiz-report table#attempts span.que .requiresgrading {
    white-space: normal;
}
#page-mod-quiz-report table#attempts .questionflag {
    vertical-align: text-bottom;
    padding-left: 6px;
}
.dir-rtl#page-mod-quiz-report table#attempts .questionflag {
    padding-right: 6px;
    padding-left: 0;
}

#page-mod-quiz-report .graph.flexible-wrap {
    text-align: center;
    overflow: auto;
}

#page-mod-quiz-report #cachingnotice {
    margin-bottom: 1em;
    padding: 0.2em;
}
#page-mod-quiz-report #cachingnotice .singlebutton {
    margin: 0.5em 0 0;
}
#page-mod-quiz-report .bold .reviewlink {
    font-weight: normal;
}

#page-mod-quiz-report tr.lastrowforattempt {
    border-bottom: lightgrey solid 0.2em;
}

/** Mod quiz edit **/
#page-mod-quiz-edit h2.main {
    display: inline;
    padding-right: 1em;
    clear: left;
}

#categoryquestions > tbody > tr:nth-of-type(even) {
    background: #e4e4e4;
}
#categoryquestions > tbody > tr:nth-of-type(even).highlight {
    background-color: #AAFFAA;
}
#categoryquestions .header {
    text-align: center;
    padding: 0 2px;
    border: 0 none;
}
#categoryquestions th.modifiername .sorters,
#categoryquestions th.creatorname .sorters {
    font-weight: normal;
    font-size: 0.8em;
}
table#categoryquestions {
    width: 100%;
    overflow: hidden;
    table-layout: fixed;
}
#categoryquestions .iconcol {
    width: 15px;
    text-align: center;
    padding: 0;
}
#categoryquestions .checkbox {
    width: 19px;
    text-align: center;
    padding: 0;
}
#categoryquestions .qtype {
    text-align: center;
}
#categoryquestions .qtype {
    width: 28px;
    padding: 0;
}
#categoryquestions .questiontext p {
    margin: 0;
}

#page-mod-quiz-edit div.quizcontents {
    float: left;
    width: 70%;
    display: block;
    clear: left;
}
#page-mod-quiz-edit div.quizwhenbankcollapsed {
    width: 100%;
}
#page-mod-quiz-edit div.quizpage {
    display: block;
    clear: both;
    width: 100%;
}
#page-mod-quiz-edit div.quizpage span.pagetitle {
    margin-top: 0.3em;
    float: left;
    display: block;
    color: #006;
}
#page-mod-quiz-edit div.quizpage .pagecontent {
    margin-top: 0.3em;
    display: block;
    float: left;
    position: relative;
    margin-left: 0.3em;
    margin-right: 0.3em;
    margin-bottom: 0.2em;
    border-left: thin solid #777;
    line-height: 1.3em;
    border-radius: 0.6em;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 88%;
    padding: 0.15em 0 0.3em;
    background-color: #d6d6d6;
}
#page-mod-quiz-edit div.quizpage .pagecontent .pagestatus {
    border-bottom-right-radius: 0.3em;
    border-top-right-radius: 0.3em;
    margin: 0.3em;
    padding: 0.1em 0.1em 0.1em 0.3em;
    background-color: #eee;
    font-weight: bold;
}
#page-mod-quiz-edit div.quizpage .pagecontent form#addquestion {
    background-color: #fff;
}
#page-mod-quiz-edit div.quizpage .pagecontent form.randomquestionform div {
    /* it is a mystery why this has to be inline-table but otherwise the layout gets screwed, even if it is "inline" */display: inline-table;
}
#page-mod-quiz-edit div.quizpage .pagecontent form.randomquestionform div input {
    display: inline;
}

#page-mod-quiz-edit .addpage {
    clear: both;
    padding-top: 0.3em;
    float: right;
    margin-right: 2em;
}
#page-mod-quiz-edit .statusdisplay {
    background-color: #ffc;
    clear: both;
    margin: 0.3em 1em 0.3em 0;
    padding: 1px ;
    /* Stop margin collapse. */
}
#page-mod-quiz-edit .statusdisplay p {
    margin: 0.4em;
}

#page-mod-quiz-edit div.reorder .reordercontrols {
    clear: both;
    padding-right: 1em;
    margin-top: 0.5em;
    padding-top: 0.5em;
    padding-bottom: 0.5em
}
#page-mod-quiz-edit div.reorder .reordercontrols .moveselectedonpage {
    clear: right;
    float: right;
    padding: 0.5em 0.3em;
    text-align: right;
}
#page-mod-quiz-edit div.reorder .reordercontrols .addnewpagesafterselected,
#page-mod-quiz-edit .repaginatecommand {
    float: right;
    clear: right;
    padding-right: 1em;
}
#page-mod-quiz-edit div.reorder .reordercontrols .deleteselected {
    float: right;
    margin-right: 1em;
}
#page-mod-quiz-edit div.reorder div.question {
    padding-top: 0.2em;
}
#page-mod-quiz-edit div.reorder div.question div.qnum {
    width: 2.9em;
    padding-top: 0.1em;
}
#page-mod-quiz-edit .reorder div.question div.content {
    width: 87%;
    float: left;
    position: relative;
    border-radius: 0.3em;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    line-height: 1.2em;
    padding: 0.1em;
    background-color: #F9F9F9;
}
#page-mod-quiz-edit .reorder div.question div.content div.quiz_randomquestion {
    line-height: 1em;
}

#page-mod-quiz-edit .reorder .questioncontentcontainer {
    overflow: hidden;
    white-space: nowrap;
}
#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestioncategory {
    overflow: hidden;
    white-space: nowrap;
    display: inline;
    float: none;
}
#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestioncategory label {
    max-width: 25%;
    overflow: hidden;
    padding-left: 0.3em;
    white-space: nowrap;
    display: inline-block;
}
#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestionfromcategory label {
    overflow: hidden;
    white-space: nowrap;
    display: inline-block;
}
#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestionfromcategory,
#page-mod-quiz-edit .reorder div.question div.content .questionpreview {
    display: inline;
    float: none;
}

#page-mod-quiz-edit .reorder fieldset {
    display: inline;
}
#page-mod-quiz-edit div.reorder div.question div.qnum {
    text-align: right;
    font-size: 1em;
}

#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist {
    padding-left: 0.2em;
    padding-right: 0.2em;
    clear: both;
    margin: 0.5em;
    margin-top: 0.8em;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist .totalquestionsinrandomqcategory {
    overflow: auto;
    white-space: normal;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist ul li {
    clear: left;
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist ul li img {
    padding-right: 0.3em;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist ul li span {
    display: inline;
}
#page-mod-quiz-edit .questioncontentcontainer a {
    text-decoration: underline;
}
#page-mod-quiz-edit .questioncontentcontainer div.singlequestion a {
    text-decoration: underline;
}
#page-mod-quiz-edit .questioncontentcontainer .randomquestioncategory {
    font-weight: bold;
}

#page-mod-quiz-edit div.question {
    clear: left;
    width: 100%;
}
#page-mod-quiz-edit div.question div.qnum {
    display: block;
    float: left;
    width: 1.4em;
    padding-right: 0.3em;
    padding-left: 0;
    text-align: right;
    color: #333;
}
#page-mod-quiz-edit div.question div.questioncontainer {
    background-color: #ffc;
}
#page-mod-quiz-edit div.editq div.question div.content {
    width: 87%;
    float: left;
    position: relative;
    border-radius: 0.6em;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    line-height: 1.4em;
    padding: 0.5em;
}
#page-mod-quiz-edit div.question div.content div.points {
    top: 0.5em;
    border-left: 0.4em solid #FFF;
    width: 8.5em;
    padding: 0.2em;
    line-height: 1em;
    max-width: 30%;
    position: absolute;
    right: 60px;
    border-radius: 0.2em;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    display: block;
    margin: 0;
    background-color: #ddf;
}
#page-mod-quiz-edit div.question div.content div.points input {
    width: 2em;
    padding: 0;
}
#page-mod-quiz-edit div.question div.content div.points input.pointssubmitbutton {
    width: auto;
}
#page-mod-quiz-edit div.question div.content div.qorder {
    line-height: 1em;
    max-width: 30%;
    position: absolute;
    right: 60px;
    border-radius: 0.2em;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    display: block;
    margin: 0;
    background-color: #ddf;
}
#page-mod-quiz-edit div.question div.content .editicon {
    width: 15px;
}
#page-mod-quiz-edit div.question div.content .singlequestion .questionname,
#page-mod-quiz-edit div.question div.content .singlequestion .questiontext {
    display: inline-block;
}
#page-mod-quiz-edit div.question div.content .singlequestion .questionpreview {
    background-color: #eee;
}
#page-mod-quiz-edit div.question div.content .questiontype {
    display: block;
    clear: left;
    float: left;
}
#page-mod-quiz-edit.dir-rtl div.question div.content .questiontype {
    clear: right;
    float: right;
}
#page-mod-quiz-edit div.question div.content .questionpreview {
    display: block;
    float: left;
    margin-left: 0.3em;
    padding-left: 0.2em;
    padding-right: 0.2em;
}
#page-mod-quiz-edit div.question div.content .questionpreview a {
    background-color: #eee;
}
#page-mod-quiz-edit div.question div.content div.quiz_randomquestion .questionpreview {
    display: inline;
    float: none;
}
#page-mod-quiz-edit div.question div.content div.questioncontrols {
    float: right;
    width: 55px;
    position: absolute;
    right: 0.3em;
    top: 0;
    display: block;
    padding: 0.2em;
    background-color: #F9F9F9;
    text-align: right;
}
#page-mod-quiz-edit div.question div.content div.questioncontrols img.upwithoutdown {
    padding-right: 12px;
    display: inline;
}
#page-mod-quiz-edit div.question div.content .questiontext {
    font-weight: bold;
}
#page-mod-quiz-edit div.question div.content .questiontype {
    font-style: italic;
}

#page-mod-quiz-edit .editq div.question div.qnum {
    padding-top: 0.2em;
}
#page-mod-quiz-edit .editq div.question {
    padding-top: 0.3em;
}
#page-mod-quiz-edit .editq div.questioncontentcontainer  div.singlequestion img {
    float: left;
    padding-top: 0.3em;
    padding-right: 0.3em;
}
#page-mod-quiz-edit .editq div.question div.content {
    background-color: #F9F9F9;
}
#page-mod-quiz-edit .editq div.question div.content .randomquestioncategory {
    margin-top: 0.4em;
    position: relative;
    display: inline-block;
}
#page-mod-quiz-edit .editq div.question div.content .randomquestioncategory a {
    display: block;
    max-width: 15em;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    float: left;
    position: relative;
}
#page-mod-quiz-edit .editq div.question div.content .questionpreview {
    float: left;
}
#page-mod-quiz-edit .editq div.question div.content .questionpreview a {
    font-weight: normal;
    margin-left: 0em;
    display: inline;
    float: none;
}
#page-mod-quiz-edit .editq div.question div.content .randomquestioncategory .questionpreview img {
    padding-right: 0.3em;
}
#page-mod-quiz-edit .editq div.question div.content .singlequestion .questioneditbutton .questionname,
#page-mod-quiz-edit .editq div.question div.content .singlequestion .questioneditbutton .questiontext {
    float: left;
}
#page-mod-quiz-edit .reorder div.question div.content .singlequestion.missingtype .questionname,
#page-mod-quiz-edit .editq div.question div.content .singlequestion.missingtype .questionname {
    font-style: italic;
    max-width: 75%;
}
#page-mod-quiz-edit .editq div.question div.description div.content .questiontext {
    max-width: 75%;
}
#page-mod-quiz-edit .editq div.question div.qnum {
    font-size: 1.5em;
}

table#categoryquestions td,
#page-mod-quiz-edit table#categoryquestions th {
    overflow: hidden;
    white-space: nowrap;
}

.questionbankwindow.block {
    float: right;
    width: 30%;
    right: 0.3em;
    padding-bottom: 0.5em;
    display: block;
    border-width: 0;
}
.questionbankwindow.block .content {
    padding: 0;
}
.questionbankwindow .choosecategory,
.questionbankwindow .createnewquestion {
    padding: 0.3em;
}
.questionbankwindow .createnewquestion .singlebutton {
    display: inline;
}
.questionbankwindow #catmenu_jump {
    display: block;
}

.questionbank div.categoryquestionscontainer,
.questionbank .categorysortopotionscontainer,
.questionbank .categorypagingbarcontainer,
.questionbank .categoryselectallcontainer {
    padding-left: 0.3em;
    padding-right: 0.3em;
}

.noquestionsincategory {
    clear: both;
    padding-top: 1em;
    padding-bottom: 1em;
}
.modulespecificbuttonscontainer {
    padding-left: 0.3em;
    padding-right: 0.3em;
}

.quizquestionlistcontrols {
    text-align: center;
}

.categoryinfo {
    padding: 0.3em;
}

.path-mod-quiz .gradingdetails {
    font-size: small;
}

body #quizcontentsblock #repaginatedialog {
    display: none;
}
body.jsenabled #quizcontentsblock #repaginatedialog .hd {
    display: block;
}
body.jsenabled #quizcontentsblock #repaginatedialog .bd {
    padding: 1em;
}
body.jsenabled #quizcontentsblock .repaginatecommand #repaginatecommand {
    display: block;
}

#page-mod-quiz-edit #randomquestiondialog {
    display: none;
}
#page-mod-quiz-edit #qtypechoicecontainer {
    display: none;
}

#page-mod-quiz-edit .questionbankwindow select#catmenu_jump {
/* In Opera9, IE6 the width of the
select obeys the width of its content
by default. This prevents that. */width: 100%;
}

/*this color might need to be theme-specific,
but in terms of usability, as testing showed,
http: //docs.moodle.org/dev/Quiz_UI_redesign/usability_testing_of_August_2008/Issues#Question_bank_.2F_question_adding_controls_visibility
it must be ensured that the question
bank window's title is prominent enough*/
#page-mod-quiz-edit .questionbankwindow.block div.header {
    background-color: #009;
    background-image: none;
    padding-top: 0.2em;
    font-weight: bold;
    border: 0 none;
}
#page-mod-quiz-edit .questionbankwindow.block div.header div.title h2 {
    color: #FFF;
    text-align: center;
}
#page-mod-quiz-edit .collapsed .container {
    display: none;
}

#page-mod-quiz-edit .questionbankwindow a#showbankcmd,
#page-mod-quiz-edit .questionbankwindow a#hidebankcmd {
    color: #FFF;
    text-decoration: underline;
}
#page-mod-quiz-edit .questionbankwindow a#showbankcmd:hover,
#page-mod-quiz-edit .questionbankwindow a#hidebankcmd:hover {
    color: #009;
    background-color: #fff;
    text-decoration: none;
}
#page-mod-quiz-edit .questionbankwindow #showbankcmd {
    display: none;
}
#page-mod-quiz-edit .collapsed #showbankcmd {
    display: inline;
}
#page-mod-quiz-edit .questionbankwindow #hidebankcmd {
    display: inline;
}
#page-mod-quiz-edit .collapsed #hidebankcmd {
    display: none;
}

#page-mod-quiz-edit .quizquestionlistcontrols {
    display: inline;
}

#page-mod-quiz-edit .quizpagedelete {
    position: absolute;
    top: 0.2em;
    right: 0.2em;
    display: inline;
}
#page-mod-quiz-edit .quizpagedelete img {
    background-color: #d6d6d6;
    padding: 0.6em;
}
#page-mod-quiz-edit .pagecontrols {
    clear: both;
    margin-left: 0.5em;
    margin-right: 0.5em;
    padding-top: 0.5em;
}
#page-mod-quiz-edit .pagecontrols .singlebutton {
    float: left;
    margin-left: 1em;
}
#page-mod-quiz-edit .pagecontrols .helplink {
    float: left;
}

#page-mod-quiz-edit div#randomquestiondialog_c {
    width: 90%;
}
#page-mod-quiz-edit div#randomquestiondialog_c .mform,
#randomquestiondialog_c select {
    width: 100%;
}

#page-mod-quiz-edit div#repaginatedialog .mform {
    margin-left: auto;
    margin-right: auto;
}
#page-mod-quiz-edit div.container div.generalbox {
    position: relative;
    display: block;
    border: 0 none;
    margin: 0;
    padding: 0;
}

#page-mod-quiz-edit .questionbankwindow .createnewquestion select,
#page-mod-quiz-edit .questionbankwindow #catmenu select,
#page-mod-quiz-edit .questionbankwindow #menucategory {
    width: 100%;
}

#page-mod-quiz-edit .paging {
    margin-top: 0;
    margin-bottom: 0;
    display: block;
    background-color: #ddd;
}
#page-mod-quiz-edit .pagingbottom {
    padding-bottom: 0.3em;
}
#page-mod-quiz-edit .paging a:hover {
    background-color: #eef;
}

#page-mod-quiz-edit #page-footer {
    clear: both;
    padding-top: 1em;
}

.ie6#page-mod-quiz-edit div.question div.content .questiontext,
.ie6#page-mod-quiz-edit #categoryquestions .questionname {
    /*ie6 shows this as an arrow if this is not specified*/cursor: pointer;
}
.ie6#page-mod-quiz-edit div.question div.content .questionname,
.ie6#page-mod-quiz-edit #categoryquestions .questiontext {
    /*ie6 shows this as an arrow if this is not specified*/cursor: pointer;
}
.ie6#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestioncategory label {
    width: 35%;
}
.ie6#page-mod-quiz-edit .editq div.question div.content .randomquestioncategory a {
    width: 40%;
}

#page-mod-quiz-edit #categoryquestions .questiontext {
    font-weight: bold;
}
#page-mod-quiz-edit .categoryinfofield {
    font-style: italic;
}
#page-mod-quiz-edit .categorynamefield {
    font-weight: bold;
}
#page-mod-quiz-edit a.configurerandomquestion {
    font-size: small;
    text-decoration: underline;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist {
    background-color: #eee;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist ul {
    color: #555;
}
#page-mod-quiz-edit .questioncontentcontainer div.randomquestionqlist .totalquestionsinrandomqcategory {
    color: #000;
}
#page-mod-quiz-edit .categoryinfo {
    background-color: #eee;
    border-bottom: 1px solid #bbb;
}
#page-mod-quiz-edit .questionsortoptions {
    background-color: #ddd;
}

#page-mod-quiz-edit div.questionbank {
    background-color: #e6e6ff;
}
#page-mod-quiz-edit div.questionbank form .invisiblefieldset {
    clear: both;
}
#page-mod-quiz-edit div.questionbank .categorysortopotionscontainer {
    padding-top: 0.5em;
    margin-top: 0.3em;
}
#page-mod-quiz-edit div.questionbank .categoryquestionscontainer,
.questionbank .categorysortopotionscontainer,
.questionbank .categorypagingbarcontainer,
.questionbank .categoryselectallcontainer {
    background-color: #FFF;
}

#categoryquestions .questiontext {
    width: 50%;
}
#categoryquestions .questionname {
    width: 50%;
}

.ie6#page-mod-quiz-edit div.question div.content .questiontext,
.ie6#page-mod-quiz-edit #categoryquestions .questionname {
    /*ie6 shows this as an arrow if this is not specified*/cursor: pointer;
}
.ie6#page-mod-quiz-edit div.question div.content .questionname,
.ie6#page-mod-quiz-edit #categoryquestions .questiontext {
    /*ie6 shows this as an arrow if this is not specified*/cursor: pointer;
}
.ie6.path-mod-quiz div.tabtree a span img.iconsmall {
    margin: 0;
    vertical-align: baseline;
    position: relative;
    top: 1px;
}
.ie6#page-mod-quiz-edit div.question div.content .questiontext {
    width: 50%;
}
.ie6#page-mod-quiz-edit div.question div.content .questionname {
    width: 20%;
}
.ie6#page-mod-quiz-edit .editq div.question div.content .randomquestioncategory a {
    width: 40%;
}
.ie6#page-mod-quiz-edit .reorder .questioncontentcontainer .randomquestioncategory label {
    width: 35%;
}
.qnum label {
    padding-right: 0.25em;
}

/* RTL Mode */
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitem {
    width: 23%;
    float: right;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitemtitle {
    text-align: right;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr fieldset.fgroup span {
    clear: right;
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.quizpage span.pagetitle {
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.quizpage .pagecontent {
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.question {
    clear: right;
}
#page-mod-quiz-edit.dir-rtl div.question div.qnum {
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.editq div.question div.content {
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.question div.content div.points {
    left: 60px;
    right: auto;
}
#page-mod-quiz-edit.dir-rtl div.question div.content div.questioncontrols {
    float: left;
    left: 0.3em;
    right: auto;
}
#page-mod-quiz-edit.dir-rtl .editq div.question div.content .singlequestion .questioneditbutton .questionname,
#page-mod-quiz-edit.dir-rtl .editq div.question div.content .singlequestion .questioneditbutton .questiontext {
    float: right;
    padding-right: 0.3em;
}
#page-mod-quiz-edit.dir-rtl div.question div.content .questiontext,
#page-mod-quiz-edit.dir-rtl #categoryquestions .questiontext {
    padding-right: 0.3em;
}
#page-mod-quiz-edit.dir-rtl .editq div.questioncontentcontainer div.singlequestion img {
    float: right;
}
#page-mod-quiz-edit.dir-rtl .editq div.question div.content .questionpreview {
    float: right;
}
#page-mod-quiz-edit.dir-rtl div.question div.content div.qorder {
    left: 60px;
    right: auto;
}
#page-mod-quiz-edit.dir-rtl .reorder div.question div.content {
    float: right;
}
#page-mod-quiz-edit.dir-rtl .quizpagedelete {
    left: 0.2em;
    right: auto;
}
#page-mod-quiz-edit.dir-rtl div.quizcontents {
    clear: right;
    float: right;
}
#page-mod-quiz-edit.dir-rtl .questionbankwindow.block {
    float: left;
}
#page-question-edit.dir-rtl td.creatorname, #page-question-edit.dir-rtl td.modifiername {
    text-align: center;
}
.path-question.dir-rtl input[name="maxmark"],
.path-question-type.dir-rtl input[name="defaultmark"],
#page-mod-quiz-edit.dir-rtl div.points input {
    direction: ltr;
    text-align: left;
}
#page-mod-quiz-edit.dir-rtl .pagecontrols .singlebutton {
    float: right;
    margin-left: 0;
    margin-right: 1em;
}


