<style>

#wrapper{
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	text-align: center;
}

.gram{
	margin-left: auto;
	margin-right: auto;
	width:300px;
}

.desc{
	width:250px;
	display: inline-block;
}

#Div2{
	width:100%;
	float:left;
}

#Div4, #Div6
{
	float:left;
	width:30%;
}

#Div5
{
	float:left;
	width:40%;
}



</style>



<div id="wrapper">

	<?php foreach ($result->data as $post): ?>



		<div class="gram">

		<!--<section style="width:310px">-->

		<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->

		<a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img src="<?= $post->images->low_resolution->url ?>" alt="@<?= $post->user->username ?>" title="@<?= $post->user->username ?>" style="width:250px; height:250px;"></a>

		

		<!--<a href="http://instagram.com/<?= $post->user->username ?>" target="_blank">

		<?php print_r(@$post->user->username) ?></a>-->

		<div class="desc">

			<div id="Div2">

				<div id="Div4">

					<a href="http://www.instagram.com/<?= $post->user->username; ?>"><?php print_r(@$post->user->username); ?></a>

				</div>

				<div id="Div5">

					<?php echo date('M j, Y',$post->created_time); ?>

				</div>

				<div id="Div6">

					<a href="<?= $post->link ?>" target="_blank"><img id="view" src="../img/instagramcam.png" align="right" alt="View on Instagram"></a>

				</div>

			</div>

		<span class="caption"><?php print_r(@$post->caption->text); ?></span>

		

		</div>

		<!--</section>-->

		</div>

	<?php endforeach ?>

	

</div>


<?php include 'footer.php'; ?>