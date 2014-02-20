<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $site_url;?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $site_url;?>css/my.css">

	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<p></p>
<div class="container">
	<div class="row">
		<?php echo form_open(); ?>
		<table class="table table-hover table-bordered">
			<tr>
				<td class="text-right" width="120">用户名：</td>
				<td><?php echo form_input('name');?></td>
			</tr>
			<tr>
				<td class="text-right">密码：</td>
				<td><?php echo form_password('password'); ?></td>
			</tr>
			<tr>
				<td class="text-right">性别：</td>
				<td><label>男<?php echo form_radio('sex','boy', TRUE);?></label>&nbsp;&nbsp;
					<label>女<?php echo form_radio('sex','girl'); ?></label></td>
			</tr>
			<tr>
				<td class="text-right">生日：</td>
				<td></td>
			</tr>
			<tr>
				<td class="text-right">地区：</td>
				<td>
					<?php
					$area_array = array(
						'0' => '请选择',
						'1' => '河南省',
						'2' => '北京市',
						'3' => '广东省',
						'4' => '上海市',
					);
					echo form_dropdown('选择地区', $area_array);?>
				</td>
			</tr>
			<tr>
				<td class="text-right">头像：</td>
				<td><?php echo form_upload('touxiang');?></td>
			</tr>
			<tr>
				<td class="text-right">爱好：</td>
				<td>
					<label>飞行<?php echo form_checkbox('love', 'fly');?></label>&nbsp;&nbsp;
					<label>游戏<?php echo form_checkbox('love', 'game');?></label>&nbsp;&nbsp;
					<label>射击<?php echo form_checkbox('love', 'shoot');?></label>&nbsp;&nbsp;
					<label>编程<?php echo form_checkbox('love', 'code');?></label>&nbsp;&nbsp;
				</td>
			</tr>
			<tr>
				<td class="text-right">个人简介：</td>
				<td>
					<?php
					$data = array(
						'name' => 'about',
						'rows' => '10',
						'cols' => '70',
					);
					echo form_textarea($data);
					?>
				</td>
			</tr>
			<tr>
				<td class="text-right"></td>
				<td>
					<?php echo form_submit('submit','提交');?>&nbsp;&nbsp;
					<?php echo form_reset('reset', '重置');?>
				</td>
			</tr>

		</table>
		<?php echo form_close(); ?>
	</div>
</div>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $site_url;?>js/bootstrap.min.js"></script>
</body>
</html>