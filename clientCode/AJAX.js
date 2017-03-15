$(function()
{
	$("a.cancel").hide().click(function()
	{
		location.reload();
	});

	$("a.delete").click(function()
	{
		var ID = $(this).parent().next().find("input:first").val();
		
		$.get("actionPages/deletePlayer.php", {player:ID}, function(response)
		{
			alert(response);
			location.reload();
		});
	});
	
	//Part A:
	$("a.edit").click(function()
	{
		
		$("input").prop('disabled', false);
		$("input[name=txtTeam]").hide();
		$("a.edit").html("Save");
		$("a.cancel").show();
	});
	
	/*$("a.edit").click
	(
	   function()
	   {
		   $(this).$("input").prop('disabled', false);
		   $(this).text("Save");
		   $(this).$("a.cancel").show();
	   },
	   
	   function()
	   {
		   $("input").prop('disabled', true);
		   $(this).text("Update");
		   $("a.cancel").hide();
	   }
	
	);*/
	
	//Part B: Coding the Ajax
	$("a.edit").click(function()
	{
		var $ID = $(this).parent().next().children().val();
		
	$.ajax(
		{
		 	method: 	"GET",
		 	url: 		"outputPages/teamDropDown.php",
			data: 		{teamID:$ID},
			success: 	function(data)
					{
						$("#results").html(data);					
				    }
		}); 
	});
	
	
	$("a.edit").click(function()
	{
		$.ajax(
		{
		 	method: 	"GET",
		 	url: 		"actionPages/updatePlayer.php",
			data: 		{teamID:$ID},
			success: 	function(data)
					{
						$("#results").html(data);					
				    }
		}); 
	});
});
	