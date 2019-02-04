
<style>
* {
  box-sizing: border-box;
  text-align: center;
  background: rgb(10,150,150);
  margin-left: 30px;
  font-size: 52;
}

 /* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 25.0%;
  padding: 200px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;

} 
</style>

<div class="rov">
	<div class="column">
    <a href="{{ url('/admin/sliders/') }}">
        Sliders
    </a>
	</div>
	<div class="column">
    <a href="{{ url('/admin/images/') }}">
        Images
    </a>
    </div>
</div>