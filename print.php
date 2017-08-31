<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<?php  

			$name = $_POST['name'];
			$rno = $_POST['rno'];
			$myanmar = $_POST['myanmar'];
			$english = $_POST['english'];
			$math = $_POST['math'];
			$physic = $_POST['physic'];
			$chem = $_POST['chem'];
			$bio = $_POST['bio'];

		?>
		<div class="container">
			<div class="form">
				<center>
					<h3>ျပည္ေထာင္စု သမတ ျမန္မာႏုိင္ငံေတာ္</h3>
					<h4>ပညာေရး၀န္ၾကီးဌာန</h4>
					<h4>စာစစ္ဦးစီးဌာန၊ ရန္ကုန္</h4>
					<hr>
				</center>
				<p>
					၂၀၁၇ ခုႏွစ္ မတ္လ ၁၃ ရက္တြင္ က်င္းပျပီးစီးေသာ ၁၀တန္းစာေမးပြဲကုိ ခုံအမွတ္ <?php print $rno; ?> ျဖင့္၀င္ေရာက္ေျဖဆုိေသာ <?php print $name; ?> ၏ရမွတ္စာရင္းမွာ ေအာက္ပါအတုိင္းျဖစ္ပါသည္။
				</p>
				<table width="70%">
					<tr>
						<td width="40%">ျမန္မာ</td>
					    <td>- <?php print $myanmar; print $myanmar>=75?' / D ':''; ?></td>
					</tr>

					<tr>
						<td>အဂၤလိပ္</td>
					    <td>- <?php print $english; print $english>=75?' / D ':''; ?></td>
					</tr>

					<tr>
						<td>သခၤ်ာ</td>
					    <td>- <?php print $math; print $math>=80?' / D ':''; ?></td>
					</tr>

					<tr>
						<td>ဓာတုေဗဒ</td>
					    <td>- <?php print $chem; print $chem>=80?' / D ':''; ?></td>
					</tr>

					<tr>
						<td>ရူပေဗဒ</td>
					    <td>- <?php print $physic; print $physic>=80?' / D ':''; ?></td>
					</tr>

					<tr>
						<td>ဇိ၀ေဗဒ</td>
					    <td>- <?php print $bio; print $bio>=80?' / D ':''; ?></td>
					</tr>
					<tr>
						<td>စုစုေပါင္းရမွတ္</td>
						<td>
							<?php print $myanmar+$english+$math+$chem+$physic+$bio; ?>
						</td>
					</tr>
				</table>
				<?php  
					$status = "";

					if($myanmar >= 40 && $english >= 40 && $math >= 40 && $chem >= 40 && $physic >= 40 && $bio >= 40){
						$status = "ေအာင္ျမင္";
					}
					else{
						$status = "က်ရူံး";
					}
				?>
				<p>စာေမးပြဲ <?php print $status; ?> သည္။</p>
			</div>
		</div>
	</body>
</html>