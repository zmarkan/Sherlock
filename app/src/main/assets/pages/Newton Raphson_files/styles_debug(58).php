/** Path: plugin block_xp .' **/
.block_xp-level {
    background: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=10) no-repeat;
    background-size: 100px 100px;
    color: #fff;
    font-size: 4em;
    height: 100px;
    line-height: 110px;
    margin: 10px auto;
    text-align: center;
    width: 100px;

    cursor: default;
    -webkit-touch-callout: none;
      -webkit-user-select: none;
       -khtml-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none;
}

.block_xp-level.level-1 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=1);
}
.block_xp-level.level-2 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=2);
}
.block_xp-level.level-3 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=3);
}
.block_xp-level.level-4 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=4);
}
.block_xp-level.level-5 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=5);
}
.block_xp-level.level-6 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=6);
}
.block_xp-level.level-7 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=7);
}
.block_xp-level.level-8 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=8);
}
.block_xp-level.level-9 {
    background-image: url(/lms/moodle/theme/image.php?theme=aardvark_academica&component=block_xp&image=9);
}
.block_xp-level.small {
    height: 35px;
    width: 35px;
    font-size: 18px;
    line-height: 40px;
    margin: 0 auto;
    background-size: cover;
}

.block_xp-level.level-badge,
.block_xp-level.level-badge.small {
    background: none;
    height: auto;
    width: auto;

    -webkit-touch-callout: none;
      -webkit-user-select: none;
       -khtml-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none;
}
.block_xp-level.level-badge img {
    width: 100px;
}
.block_xp-level.level-badge.small img {
    width: auto;
    max-width: 100px;
    height: 35px;
}

/** Block content. */
.block_xp .xp-total {
    text-align: center;
    margin-bottom: 5px;
}
.block_xp .xp-total .pts {
    letter-spacing: 1px;
}
.block_xp .introduction .alert {
    padding: 8px;
}
.block_xp .footer {
    font-size: 0.9em;
}

.block_xp nav {
    text-align: center;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}
.block_xp nav .nav-button {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    text-decoration: none;
    color: #333;
    font-size: 80%;
    padding: 5px 5px 0;
}
.block_xp nav .nav-button .icon {
    margin: 0;
    padding: 0;
}
.block_xp nav .nav-button:hover {
    background: #eee;
}

/** Recent rewards styles. */
.block_xp-recent-activity {
    clear: both;
    padding: 0 2px;
    margin-bottom: 10px;
}
.block_xp-recent-activity h5 {
    text-transform: uppercase;
    color: #999;
    font-size: 11px;
    letter-spacing: 0;
    margin-bottom: 5px;
}
.block_xp-recent-activity h5 a {
    float: right;
    text-transform: none;
    font-weight: normal;
}
.block_xp-recent-activity .activity-entry {
    font-size: 90%;
    clear: both;
}
.block_xp-recent-activity .activity-entry .date {
    float: right;
    color: #999;
    font-size: 90%;
}
.block_xp-recent-activity .activity-entry .xp {
    float: left;
    margin-right: 5px;
    min-width: 25px;
}

/** Use over defined class name to re-use it through the block pages. */
.block_xp-xp {
    display: inline-block;
    white-space: nowrap;
}
.block_xp-xp .pts,
.block_xp-xp .sign {
    display: inline-block;
    letter-spacing: 0;
}
.block_xp-xp .sign-sup {
    vertical-align: super;
    font-size: 9px;
    line-height: 9px;
}

.block_xp-level-progress .xp-bar-wrapper {
    background-color: #ccc;
    border-radius: 5px;
    height: 10px;
    margin: 0 auto;
    position: relative;
}
.block_xp-level-progress .xp-bar {
    background-color: #4bb1cf;
    background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#339bb9));
    background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
    background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
    background-image: linear-gradient(to bottom, #5bc0de, #339bb9);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);
    border-radius: 5px;
    height: 100%;
}
.block_xp-level-progress.progress-non-zero .xp-bar {
    min-width: 5px;
}
.block_xp-level-progress .xp-bar-txt {
    color: #fff;
    font-size: 12px;
    left: 0;
    line-height: 25px;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.block_xp-level-progress .xp-togo {
    font-size: 90%;
    text-align: right;
    padding: 0 3px;
}
.block_xp-level-progress .xp-togo-txt {
    font-size: 90%;
    color: #999;
}
.block_xp .block_xp-level-progress {
    /** Add margin in the block. */
    margin-bottom: 10px;
}

/** Levels preview. */
.block_xp-level-preview .previewed-level {
    display: inline-block;
    padding: 5px;
    margin-bottom: 10px;
}
.block_xp-level-preview .level-name {
    white-space: nowrap;
    text-align: center;
}

/** Use our own highlight because of discrepencies between various themes. Sorry themers,
    it's a nightmare to maintain a plugin for multiple themes... */
.path-blocks-xp .highlight-row > td{
    background-color: #d9edf7;
}

/**
 * Ladder table.
 */
.block_xp-table td {
    /* Using !important because it's late and I can't be bothered looking for an alternative. */
    vertical-align: middle !important; /* stylelint-disable-line declaration-no-important */
}
.block_xp-table .col-lvl {
    width: 50px;
    text-align: center;
}
.block_xp-table .col-rank {
    white-space: nowrap;
    width: 50px;
}
.block_xp-table .col-userpic {
    width: 35px;
}
.block_xp-table .userpicture {
    /* Margin only present in recent Moodle. */
    margin-right: 5px;
}
.dir-rtl .block_xp-table .userpicture {
    margin-left: 5px;
    margin-right: 0;
}

/**
 * Page navigation.
 */
.block_xp-page-nav a {
    position: relative;
}
.block_xp-page-nav .has-new {
    border-radius: 50%;
    width: 7px;
    height: 7px;
    position: absolute;
    top: 4px;
    right: 4px;
    background-color: #d9534f;
}
.dir-rtl .block_xp-page-nav .has-new {
    left: 4px;
}

/**
 * Dismissable notice.
 */
.block_xp-dismissable-notice .alert {
    /** We override the padding, because else the close button doesn't align well... */
    padding: 14px;
}
.block_xp-dismissable-notice .dismiss-action {
    float: right;
    line-height: 12px;
}
.block_xp-dismissable-notice .dismiss-action .icon {
    padding: 0;
    width: 12px;
    height: 12px;
}
.dir-rtl .block_xp-dismissable-notice .dismiss-action {
    float: left;
}

/**
 * Notification dialogue.
 */

.block_xp-notification-hidden {
    display: none;
}
.block_xp-notification .moodle-dialogue-bd,
.block_xp-notification .moodle-dialogue-ft {
    text-align: center !important; /* stylelint-disable-line declaration-no-important */
}
.block_xp-notification .level-headline {
    font-size: 1.4em;
    font-weight: bold;
}
.block_xp-notification .moodle-dialogue-ft button {
    /* Helps centering the button in the dialogue */
    margin-left: 0;
    margin-right: 0;
}

/**
 * Rule picker dialogue.
 */
.block_xp-rulepicker-hidden {
    display: none;
}
.block_xp-rulepicker-content {
    text-align: center;
}
.block_xp-rulepicker-content .rule {
    margin-bottom: 5px;
}

/**
 * Rules pages.
 *
 * Note: We find the very first rule using .filter-rules > .rule
 */
.block-xp-filters-wrapper ul {
    list-style: none;
}
.block-xp-filters-wrapper p,
.block-xp-filters-wrapper ul,
.block-xp-filters-wrapper ul.filters-list,  /** Made more specific for RTL. */
.block-xp-filters-wrapper input[type],
.block-xp-filters-wrapper select {
    margin: 0;
}
.block-xp-filters-wrapper input[type],
.block-xp-filters-wrapper select {
    /* In Edge the line height is inherited when we do not do this. */
    line-height: 18px;
}
.block-xp-filters-wrapper .filter-rules {
    margin-left: 20px;
    margin-top: 5px;
}
.block-xp-filters-wrapper .filter {
    border: 1px solid #ddd;
    margin: 10px 0;
    padding: 8px 4px;
}
.block-xp-filters-wrapper .filter-add {
    margin: 10px 0;
}
.block-xp-filters-wrapper .rule-rules {
    margin-left: 35px;
}
.block-xp-filters-wrapper .filter-rules > .rule {
    border: 0;
    padding-left: 0;
}
.block-xp-filters-wrapper .filter-rules > .rule::before {
    border: 0;
}
.block-xp-filters-wrapper .filter-rules > .rule > .rule-rules {
    margin-left: 20px;
}
.block-xp-filters-wrapper .filter-rules > .rule > .rule-definition {
    line-height: 40px;
    padding-left: 5px;
}
.block-xp-filters-wrapper .rule-type-ruleset,
.block-xp-filters-wrapper .rule-type-ruleset .rule-rules > .rule:first-child {
    padding-top: 5px;
}
.block-xp-filters-wrapper .rule-type-ruleset > .rule-definition {
    background-color: #f1f1f1;
    padding-bottom: 2px;
}
.block-xp-filters-wrapper .rule-rules .rule {
    border-left: 1px dotted #ccc;
    line-height: 40px;
    min-height: 40px;
    padding-left: 15px;
    position: relative;
}
.block-xp-filters-wrapper .rule-rules .rule::before {
    border-top: 1px dotted #ccc;
    content: "";
    display: block;
    left: 0;
    position: absolute;
    top: 20px;
    width: 15px;
}
.block-xp-filters-wrapper .rule-type-ruleset .rule-rules > .rule:first-child::before,
.block-xp-filters-wrapper .rule.rule-type-ruleset::before {
    top: 25px;
}
.block-xp-filters-wrapper .rule-add {
    padding: 10px 17px;
    position: relative;
    line-height: 20px;
}
.block-xp-filters-wrapper .rule-add::before,
.block-xp-filters-wrapper .rule-rules .rule:last-child::before {
    border-bottom: 1px dotted #ccc;
    border-left: 1px dotted #ccc;
    border-top: 0;
    content: "";
    display: block;
    height: 20px;
    left: 0;
    position: absolute;
    top: 0;
    width: 15px;
}
.block-xp-filters-wrapper .rule-rules .rule:last-child {
    border: 0;
}
.block-xp-filters-wrapper .rule-move,
.block-xp-filters-wrapper .filter-move {
    cursor: move;
    margin: 0 .5rem;
}
.block-xp-filters-wrapper .filter-rules > .rule > .rule-definition .rule-delete,
.block-xp-filters-wrapper .filter-rules > .rule > .rule-definition .rule-move {
    /** Hide the move/delete button on the top rule. */
    display: none;
}

/** Readonly filters. */
.block-xp-filters-wrapper .filters-readonly .filter {
    padding: 10px;
}
.block-xp-filters-wrapper .filters-readonly .filter-rules > .rule > .rule-definition,
.block-xp-filters-wrapper .filters-readonly .rule-rules .rule {
    line-height: 30px;
    min-height: 30px;
}
.block-xp-filters-wrapper .filters-readonly .filter-rules > .rule > .rule-definition {
    padding: 0 10px;
}
.block-xp-filters-wrapper .filters-readonly .rule-type-ruleset .rule-rules > .rule:first-child::before,
.block-xp-filters-wrapper .filters-readonly .rule.rule-type-ruleset::before {
    top: 20px;
}
.block-xp-filters-wrapper .filters-readonly .rule-rules .rule::before {
    top: 15px;
}
.block-xp-filters-wrapper .filters-readonly .rule-rules .rule:last-child::before {
    top: 0;
    height: 15px;
}

/** Support inline input fields. */
.form-control.block_xp-form-control-inline {
    min-width: 0;
    width: auto;
    display: inline;
}

/** RTL styles. */
.dir-rtl .block-xp-filters-wrapper .filter-rules {
    margin-left: 0;
    margin-right: 20px;
}
.dir-rtl .block-xp-filters-wrapper .rule-rules {
    margin-left: 0;
    margin-right: 40px;
}
.dir-rtl .block-xp-filters-wrapper .filter-rules > .rule > .rule-rules {
    margin-left: 0;
    margin-right: 20px;
}
.dir-rtl .block-xp-filters-wrapper .filter-rules > .rule > .rule-definition {
    padding-left: 0;
    padding-right: 5px;
}
.dir-rtl .block-xp-filters-wrapper .rule-rules .rule {
    border-left: 0;
    border-right: 1px dotted #ccc;
    padding-left: 0;
    padding-right: 15px;
}
.dir-rtl .block-xp-filters-wrapper .rule-rules .rule::before {
    right: 0;
}
.dir-rtl .block-xp-filters-wrapper .rule-add::before,
.dir-rtl .block-xp-filters-wrapper .rule-rules .rule:last-child::before {
    border-left: 0;
    border-right: 1px dotted #ccc;
    right: 0;
}


