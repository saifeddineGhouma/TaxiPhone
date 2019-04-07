<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript">
	
$(function(){

	$('#total').click(function()

	{
		var total, total_oredoo,total_orange,total_tt;
		total_orange=parseInt($('#quentity_one_dinar_tt').val())*1250
		+parseInt($('#quentity_five_dinar_tt').val())*5700+parseInt($('#light_telecome').val())
		+ parseInt($('#quentity_one_dinar_oredoo').val()*1250 + $('#quentity_five_dinar_oredoo').val()*5700+$('#light_oredoo').val())
		+ parseInt($('#quentity_one_dinar_orange').val()*1250 + $('#quentity_five_dinar_orange').val()*5700+$('#light_orange').val())
		alert(total_orange);




	});

})

</script>