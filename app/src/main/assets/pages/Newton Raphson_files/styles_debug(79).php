/** Path: plugin gradereport_user .' **/
.path-grade-report-user .user-grade .datesubmitted {font-size: 0.7em;}
.path-grade-report-user .user-grade .courseitem,
.path-grade-report-user .user-grade .categoryitem {font-weight: bold;}
.path-grade-report-user .user-grade td.cell {padding-left: 5px;padding-right: 5px;}
.dir-rtl.path-grade-report-user .user-grade td {direction: ltr;}
#graded_users_selector {float: right;text-align: right;}

/* this must be last if we want to override other category and course item colors */
.user-grade {border: 1px solid black;margin: auto;padding: 0.25em;font-size: 0.8em;}
.user-grade td {margin: 1px;padding: 0.25em;min-width: 2em;vertical-align: top;}
.user-grade thead {border-bottom: 3px double black;}
.user-grade thead th {padding: 0.25em 0.75em;}
.user-grade tbody th {text-align:left;}
/* These need to be this specific to override the css from .generaltable */
.user-grade tbody > tr:nth-child(n) > td.oddd1,
.user-grade tbody > tr:nth-child(n) > th.oddd1 {background-color: #f3dfd0;}
.user-grade tbody > tr:nth-child(n) > td.oddd2,
.user-grade tbody > tr:nth-child(n) > th.oddd2 {background-color: #d0dbf3;}
.user-grade tbody > tr:nth-child(n) > td.oddd3,
.user-grade tbody > tr:nth-child(n) > th.oddd3 {background-color: #d0f3d6;}
.user-grade tbody > tr:nth-child(n) > td.oddd4,
.user-grade tbody > tr:nth-child(n) > th.oddd4 {background-color: #f0f0aa;}
.user-grade tbody > tr:nth-child(n) > td.evend2,
.user-grade tbody > tr:nth-child(n) > th.evend2 {background-color: #b0bbd3;}
.user-grade tbody > tr:nth-child(n) > td.evend3,
.user-grade tbody > tr:nth-child(n) > th.evend3 {background-color: #b0dfb6;}
.user-grade tbody > tr:nth-child(n) > td.evend4,
.user-grade tbody > tr:nth-child(n) > th.evend4 {background-color: #cac8be;}
.user-grade td.b1t,
.user-grade td.b2t,
.user-grade th.b1t,
.user-grade th.b2t {border-top: 2px solid black;}
.user-grade td.b1r,
.user-grade td.b2r,
.user-grade th.b1r,
.user-grade th.b2r {border-right: 2px solid black;}
.user-grade td.b1b,
.user-grade td.b2b,
.user-grade th.b1b,
.user-grade th.b2b {border-bottom: 2px solid black;}
.user-grade td.b1l,
.user-grade td.b2l,
.user-grade th.b1l,
.user-grade th.b2l {border-left: 2px solid black;}
.user-grade td.baggt,
.user-grade td.baggb,
.user-grade th.baggt,
.user-grade th.baggb {font-style: italic;font-weight: bold;}
.user-grade td.baggt,
.user-grade th.baggt {border-top: 3px double black;}
.user-grade td.baggb,
.user-grade th.baggb {border-bottom: 3px double black;}
.user-grade td.item,
.user-grade th.item {border-left: 1px solid gray;border-right: 1px solid gray}
.user-grade td.excluded {background-color: #666;}
.user-grade td.feedbacktext {max-width:600px;padding:2px 2px;}
.pagelayout-report .user-grade .feedbacktext .no-overflow {overflow:auto;padding:0.25em;}

table.user-grade td.feedbacktext {text-align:left;width: 40%;font-size: 0.8em;white-space:normal;}
table.user-grade td.itemcenter {text-align:center;}


