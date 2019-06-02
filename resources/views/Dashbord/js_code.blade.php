<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript">
	
$(function(){
	$('#saif').click(function()
	{

 var total_ticket_orange , total_ticket_tn,total_ticket_tl , total_carta_orange , total_carta_tn , total_carta_tl,
 total_light_orange , total_light_tn , total_light_tl
 total
total_ticket_orange = $('#quentity_one_dinar_orange').val()* $('#prix_one_dinar_orange').val()

total_ticket_tn=$('#quentity_one_dinar_oredoo').val()* $('#prix_one_dinar_oredoo').val()

total_ticket_tl=$('#quentity_one_dinar_tt').val()* $('#prix_one_dinar_tt').val()

total_carta_orange=$('#quentity_five_dinar_orange').val() * $('#prix_orange_sinque_dinar').val()

total_carta_tn=$('#quentity_five_dinar_oredoo').val() * $('#prix_sinque_dinar_oredoo').val()

total_carta_tl=$("#quentity_five_dinar_tt").val() * $('#prix_sinque_dinar_tt').val()

total_light_orange=$("#light_orange").val() * $('#prix_light_orange').val()

total_light_tn = $("#light_oredoo").val() * $("#prix_light_oredoo").val()

total_light_tl= $("#light_telecome").val() * $("#prix_light_tt").val()

total= total_ticket_orange + total_ticket_tn + total_ticket_tl + total_carta_orange + total_carta_tn + total_carta_tl +
 total_light_orange + total_light_tn + total_light_tl


 

$("#total_torange").val(total_ticket_orange);
$("#total_ttelecome").val(total_ticket_tl);
$("#total_ttn").val(total_ticket_tn)

$("#total_cartatn").val(total_carta_tn)
$("#total_cartaorange").val(total_carta_orange)
$("#total_cartatelecome").val(total_carta_tl)

$("#total_lighttn").val(total_light_tn)
$("#total_light_orange").val(total_light_orange)
$("#total_lighttelecome").val(total_light_tl);
$("#total").val(total)

$('#saif').css('display','none');
		$('#block_commande').css('display','block');
	})

	$('#caculer').click(function()

	{
		
$('#caculer').css('display','none');
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