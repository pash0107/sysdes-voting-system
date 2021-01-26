/**JavaScript**/
<script> 
	$(function () { $('.tooltip-show').tooltip('show');}); 
	$(function () { $('.tooltip-show').on('show.bs.tooltip',	
	function () {    alert("Alert message on show"); })});
</script> 