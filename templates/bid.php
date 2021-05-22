<section>
    <hr/>
    <?php
        foreach ($products as $product) {
    ?>
            <div class="description">
                <div class="mt-3 ml-3 float-left">
                    <img src="productimages/<?php echo $product['image'];?>" class="">
                </div>

                <div class="text-center product-desc">
                    <h1><?php echo $product['title'];?></h1><br>
                    <b style="font-size: 20px;">Starting Price: </b><?php echo $product['price'];?><br><br>
                    <b style="font-size: 20px;">Time Remaining: </b><br>
                    <dd class="clock-builder-output"></dd><br>
                    <?php
						while ($rw = $products->fetch()) {
							$btime = $rw['btime'];
						}
						$t = strtotime($btime);
                    ?>
                    <hr/>
                    <form action="" method="post">
                        <input type="text" name="bidAmount" placeholder="Bidding Amount">
                        <input type="submit" name="bid" class="btn btn-success ml-4">
                    </form>
                </div>
            </div>
</section>
    <?php
        }
    ?>


<script type="text/javascript">
    $(function(){
        FlipClock.Lang.Custom = {
			days : 'Days',
			hours : 'Hours',
			minutes : 'Minutes',
			seconds : 'Seconds'
		};

        var opts = {
			clockFace : 'DailyCounter',
			countdown : true,
			language : 'Custom'
		};

        opts.classes = {
			active : 'flip-clock-active',
			before : 'flip-clock-before',
			divider : 'flip-clock-divider',
			dot : 'flip-clock-dot',
			label : 'flip-clock-label',
			flip : 'flip',
			play : 'play',
			wrapper : 'flip-clock-small-wrapper'
		};
        var t=<?php echo $t ?>;
		var countdown = t - ((new Date().getTime()) / 1000);
		// from: 03/28/2016 01:02 am +0530
		countdown = Math.max(1, countdown);
		$('.clock-builder-output').FlipClock(countdown, opts);
    });
</script>