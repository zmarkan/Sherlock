/** Path: plugin mod_hvp .' **/
.h5p-data-view table {
  border: 1px solid #e5e5e5;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
  table-layout: fixed;
  width: 100%;
}

.h5p-data-view td,
.h5p-data-view th {
  color: #555;
  font-size: 13px;
  line-height: 1.5em;
  padding: 8px 10px;
  vertical-align: top;
  word-wrap: break-word;
}

.h5p-data-view th {
  color: #32373c;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.4em;
}

.h5p-data-view thead th {
  border-bottom: 1px solid #e1e1e1;
}

.h5p-data-view tfoot td {
  border-top: 1px solid #e1e1e1;
  font-size: 14px;
}

.h5p-data-view tr:nth-child(odd) {
  background-color: #F9F9F9;
}

.h5p-pagination {
  line-height: 2em;
  text-align: center;
}

.h5p-pagination > span, .h5p-pagination > input {
  margin: 0 1em;
}

.h5p-pagination button {
  margin: 0;
}

.h5p-data-view input[type="text"] {
  margin-bottom: 0.5em;
}

.h5p-data-view input[type="text"]::-ms-clear {
  display: none;
}

.h5p-data-view th[role="button"] {
  cursor: pointer;
}

.h5p-data-view th[role="button"].h5p-sort:after,
.h5p-data-view th[role="button"]:hover:after,
.h5p-data-view th[role="button"].h5p-sort.h5p-reverse:hover:after {
  content: "\25BE";
  left: 0.5em;
  position: relative;
  top: -1px;
}

.h5p-data-view th[role="button"].h5p-sort.h5p-reverse:after,
.h5p-data-view th[role="button"].h5p-sort:hover:after {
  content: "\25B4";
  top: -2px;
}

.h5p-data-view th[role="button"]:hover:after,
.h5p-data-view th[role="button"].h5p-sort.h5p-reverse:hover:after,
.h5p-data-view th[role="button"].h5p-sort:hover:after {
  color: #999;
}


