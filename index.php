<?php
include("header.php");
$site = new site();
?>
<script type="text/javascript">
  $(document).ready(function() {
    $(".senddata").on("submit",function (e)
    {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax(
        {
            type:'post',
            url:'controller.php',
            data:formData,
            success:function(result)
            {
              $("#main").html(result);
            }
        });
    });
  });
</script>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div id="main">
            <h2 class="text-center green-color header-mijloc"><b>Please Select The Manufacturer</b></h2>
			<div class="mijloc">
			  <form class="senddata" action='' method='POST'>
				<div class="form-group">
<!--				  <label for="exampleSelect1" class="bmd-label-floating scrismic">Please choose Car Manufacturer</label>-->
                  <p class="text-left green-color">Click on the text below to select the car</p>
                  <p></p>
				  <select class="form-control fundal-lista" name="manufacutre">
					<?php echo $site->manufacutre();?>
				  </select>
				</div>
				<div class="text-center">
				  <input type="hidden" name='action' value='first'/>
				  <button type="submit" class="btn btn-primary btn-raised btn-lg">Model</button>
				</div>
			  </form>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php
include("footer.php");
?>