	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->  
		<a class="navbar-brand" href="">
		<p>E-learning</p>
		</a>
		<form class="search-form search-form-header" role="form" action="">
			<div class="input-icon right">
				<i class="fa fa-search"></i>
				<input type="text" class="form-control input-medium input-sm" name="query" placeholder="Search...">
			</div>
		</form>
		<!-- END LOGO -->

		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="/students_control.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-warning"></i>
				<span class="badge badge-success"><?php echo isset ($notifs) && count($notifs) > 0 ? count($notifs) : '0' ?></span>
				</a>
				<ul class="dropdown-menu extended notification">
				<?php if (isset($notifs) && count($notifs) > 0) { ?>
					<li>
						<p><?php echo count($notif)?> new notifications</p>
					</li>
					<li>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 175px;"><ul class="dropdown-menu-list scroller" style="height: 165px; overflow: hidden; width: auto;">
							<?php foreach ($notifs as $notif) : ?>
							<li>  
								<a href="">
								<span class="label label-sm label-icon label-<?php echo $label_type[$notif['type']]?>"><i class="fa fa-<?php echo $fa_type[$notif['type']]?>"></i></span>
								<?php echo $notif['content'] ?>
								<span class="time">Just now</span>
								</a>
							</li>		
							<?php endforeach; ?>
						</ul><div class="slimScrollBar" style="background-color: rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 152.4390243902439px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div></div>
					</li>
					<li class="external">   
						<a href="/students_control.html#">See all notifications <i class="fa fa-angle-right"></i></a>
					</li>
				<?php } else { ?>
					<li>
						<p><?php echo __("You don't have any notification") ?></p>
					</li>
					<li class="external">   
						<a href="/students_control.html#">See nearby notifications <i class="fa fa-angle-right"></i></a>
					</li>
				<?php } ?>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			
			<!-- BEGIN TODO DROPDOWN -->
			<!-- END TODO DROPDOWN -->
			<li class="devider">&nbsp;</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="/students_control.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="./img/no-avatar.jpg" class="avatar">

				<span class="username">admin</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href=""><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-key"></i> Log Out</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>