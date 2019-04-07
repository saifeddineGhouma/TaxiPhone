<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript">
	
$(function(){
	$('#saif').click(function()
	{

	})

	$('#caculer').click(function()

	{
		$('#block_commande').css('display','block');
		var total, total_oredoo,total_orange,total_tt;
		total_orange=$('#quentity_one_dinar_orange').val() * $('#prix_one_dinar_orange').val()
		+ 
		$('#quentity_five_dinar_orange').val() * $('#prix_orange_sinque_dinar').val()
		+
		$('#light_orange').val() * $('#prix_light_orange').val();

		total_oredoo = $('#quentity_one_dinar_oredoo').val()*$('#prix_one_dinar_oredoo').val()
		+
		$('#quentity_five_dinar_oredoo').val() * $('#prix_sinque_dinar_oredoo').val()
		+
		$('#light_oredoo').val() * $('#prix_light_oredoo').val();

       total_tt=$('#quentity_one_dinar_tt').val()*$('#prix_one_dinar_tt').val()

       +
        $('#quentity_five_dinar_tt').val()* $('#prix_sinque_dinar_tt').val()

        +
        $('#light_telecome').val()* $('#prix_light_tt').val();

      total=total_orange + total_oredoo + total_tt;
        
console.log(total)
        $('#total').val(total_orange+total_oredoo+total_tt)


	});

})

</script>