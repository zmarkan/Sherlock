/** Path: plugin mod_assign .' **/
div.gradingnavigation div {
    float: left;
    margin-left: 2em;
}


div.submissionstatustable,
div.submissionfull,
div.submissionlinks,
div.usersummary,
div.feedback,
div.gradingsummary {
    margin-bottom: 5em;
}


div.submissionstatus .generaltable,
div.submissionlinks .generaltable,
div.feedback .generaltable,
div.submissionsummarytable .generaltable,
div.attempthistory table,
div.gradingsummary .generaltable {
    width: 100%;
}

#page-mod-assign-view table.generaltable table td { border: 0px none; }

.gradingsummarytable,
.feedbacktable,
.lockedsubmission,
.submissionsummarytable {
    margin-top: 1em;
}

div.submissionsummarytable table tbody tr td.c0 {
    width: 30%;
}

.submittedlate {
    color: red;
    font-weight: 900;
}

.jsenabled .gradingoptionsform .fsubmit {display: none;}
.jsenabled .gradingtable .c1 select {display: none;}
.quickgradingform .mform fieldset { margin: 0px; padding: 0px; }
.gradingbatchoperationsform .mform fieldset { margin: 0px; padding: 0px; }

td.submissionstatus,
div.submissionstatus,
a:link.submissionstatus {
    color: black;
    background-color: #efefef;
}

td.submissionstatusdraft,
div.submissionstatusdraft,
a:link.submissionstatusdraft {
    color: black;
    background-color: #efefcf;
}

td.submissionstatussubmitted,
div.submissionstatussubmitted,
a:link.submissionstatussubmitted {
    color: black;
    background-color: #cfefcf;
}


td.submissionlocked,
div.submissionlocked {
    color: black;
    background-color: #efefcf;
}

td.submissionreopened,
div.submissionreopened {
    color: black;
    background-color: #efefef;
}

td.submissiongraded,
div.submissiongraded {
    color: black;
    background-color: #cfefcf;
}

td.submissionnotgraded,
div.submissionnotgraded {
    color: black;
    background-color: #efefef;
}

td.latesubmission,
a:link.latesubmission,
div.latesubmission {
    color: black;
    background-color: #efcfcf;
}

td.earlysubmission,
div.earlysubmission {
    color: black;
    background-color: #cfefcf;
}

.gradingtable .c0 { display: none; }
.jsenabled .gradingtable .c0 { display: table-cell; }
.gradingbatchoperationsform { display: none; }
.jsenabled .gradingbatchoperationsform { display: block; }

.gradingtable tr.selectedrow td { background-color: #ffeecc; }
.gradingtable tr.unselectedrow td { background-color: white; }

.gradingtable .c0 div.selectall {margin-left: 7px;}

.gradingtable .yui3-menu ul {
    margin: 0px;
}

.gradingtable .yui3-menu-label {
    padding-left: 0px;
    line-height: 12px;
}
.gradingtable .yui3-menu-label img { padding: 0 3px; }
.gradingtable .yui3-menu li {
    list-style-type: none;
}

.jsenabled .gradingtable .yui3-loading {
    display: none;
}

.gradingtable .yui3-menu .yui3-menu-content {
    border: 0px;
    padding-top: 0;
}

#page-mod-assign-view div.gradingtable tr .quickgrademodified {
    background-color: #FFCC99;
}

td.submissioneditable {
    color: red;
}

.expandsummaryicon {
    cursor: pointer;
    display: none;
}

.jsenabled .expandsummaryicon {
    display: inline;
}

.hidefull {
    display: none;
}

.quickgradingform form .commentscontainer input,
.quickgradingform form .commentscontainer textarea {
    display: none;
}

.jsenabled .quickgradingform form .commentscontainer input,
.jsenabled .quickgradingform form .commentscontainer textarea {
    display: inline;
}

#page-mod-assign-view .previousfeedbackwarning {
    font-size: 140%;
    font-weight: bold;
    text-align: center;
    color: #500;
}

#page-mod-assign-view .submissionhistory {
    background-color: #b0b0b0;
}

#page-mod-assign-view .submissionhistory .cell.historytitle {
    background-color: #808080;
}

#page-mod-assign-view .submissionhistory .cell {
    background-color: #d0d0d0;
}

#page-mod-assign-view .submissionhistory .singlebutton {
    display: inline-block;
    float: right;
}

#page-mod-assign-view.dir-rtl .submissionhistory .singlebutton {
    float: left;
}

#page-mod-assign-view .submissionsummarytable .singlebutton {
    display: inline-block;
}

.jsenabled .mod-assign-history-link {
    display: block;
    cursor: pointer;
    margin-bottom: 7px;
}

.jsenabled .mod-assign-history-link h4 {
    display: inline;
}

#page-mod-assign-view.jsenabled .attempthistory h4 {
    margin-bottom: 7px;
    text-align: left;
}

#page-mod-assign-view.jsenabled.dir_rtl .attempthistory h4 {
    text-align: right;
}

.dir-rtl.jsenabled .mod-assign-history-link h4 {
    text-align: right;
}

.jsenabled .mod-assign-history-link-open {
    padding: 0 5px 0 20px; background: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=t%2Fexpanded) 2px center no-repeat;
}

.jsenabled .mod-assign-history-link-closed {
    padding: 0 5px 0 20px; background: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=t%2Fcollapsed) 2px center no-repeat;
}

.dir-rtl.jsenabled .mod-assign-history-link-closed {
    padding: 0 20px 0 5px; background: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=core&image=t%2Fcollapsed_rtl) 2px center no-repeat;
}

#page-mod-assign-view .submithelp {
    padding: 1em;
}

#page-mod-assign-view .feedbacktitle {
    font-weight: bold;
}

#page-mod-assign-view .submitconfirm,
#page-mod-assign-view .submissionlinks,
#page-mod-assign-view .submissionaction {
    text-align: center;
}


#page-mod-assign-view .submissionsummarytable .c0,
#page-mod-assign-view .mod-assign-history-panel .c0 {
    width: 150px;
}


#page-mod-assign-view .gradingtable .moodle-actionmenu {
    white-space: nowrap;
}
#page-mod-assign-view .gradingtable .moodle-actionmenu[data-enhanced].show .menu a {
    padding-left: 12px;
    padding-right: 12px;
}
#page-mod-assign-view .gradingtable .menu-action img {
    display: none;
}

.path-mod-assign .editsubmissionform input[name="submissionstatement"] {
    vertical-align: top;
}
.path-mod-assign .editsubmissionform label[for="id_submissionstatement"] {
    display: inline-block;
}

