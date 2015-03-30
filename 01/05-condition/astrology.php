<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/05-astrology.css">
</head>
<body>
<!-- javascript -->
<script type="text/javascript">
function showMessage(msg)
{
	alert(msg);
}
</script> 
<!-- end of javascript -->

<?php
	$day = 1;
	$month = 2;
	$image = "";
	$name ="";
	$icon = "";
	$depiction = "";
	$result = "";
	if(isset($_POST["day"]) && isset($_POST["month"]) )
	{
		$day = $_POST["day"];
		$month = $_POST["month"];
	}

	if(is_numeric($day))
	{
		switch($month)
		{
			case "1":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<21)
				{
					$image = "Capricornus";
					$name = "Ma kết – Capricornus (22/12-20/1)";
					$icon = "Con dê biển";
					$depiction = "Trong truyện ngụ ngôn, con rùa bò 
					chậm chạp nhưng không la cà, bền bỉ tiến tới, 
					vượt qua chú thỏ nhanh nhảu, và đến đích trước.
					Hình tượng đó là khắc hoạ cơ bản tính cách của 
					người sinh trong giai đoạn từ 22/12 đến 20/1, 
					thuộc cung Ma Kết (Capricornus – Con Dê)";
				}
				else{
					$image = "Aquarius";
					$name = "Bảo Bình – Aquarius(21/1-19/2)";
					$icon = "Người mang nước";
					$depiction = "Nếu khắc hoạ tính cách người sinh 
					cung Bảo Bình (21/1-19/2) bằng một từ, thì từ đó 
					là “trí tò mò”. Người này hứng thú quan tâm tất 
					cả mọi thứ quanh mình, bắt đầu từ bản thân bạn và 
					kết thúc bằng chú cún nhà hàng xóm";
				}
			break;
			case "2":
				if($day<1 || $day>29)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<20)
				{
					$image = "Aquarius";
					$name = "Bảo Bình – Aquarius(21/1-19/2)";
					$icon = "Người mang nước";
					$depiction = "Nếu khắc hoạ tính cách người sinh 
					cung Bảo Bình (21/1-19/2) bằng một từ, thì từ đó 
					là “trí tò mò”. Người này hứng thú quan tâm tất 
					cả mọi thứ quanh mình, bắt đầu từ bản thân bạn và 
					kết thúc bằng chú cún nhà hàng xóm";
				}
				else{
					$image = "Pisces";
					$name = "Song Ngư – Pisces(20/2-20/3)";
					$icon = "Hai con cá bơi ngược chiều";
					$depiction = "Chiêm tinh học xếp Song Ngư 
					(Pisces – Con Cá, 20/2 – 20/3) là cung cuối 
					cùng, thứ 12 của chu kỳ Hoàng đạo. Nếu như Bạch 
					Dương, cung mở đầu, biểu trưng cho sự sống, 
					thì Song Ngư biểu trưng cho cái chết và sự đi 
					vào cõi vĩnh hằng";
				}
			break;
			case "3":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<21)
				{
					$image = "Pisces";
					$name = "Song Ngư – Pisces(20/2-20/3)";
					$icon = "Hai con cá bơi ngược chiều";
					$depiction = "Chiêm tinh học xếp Song Ngư 
					(Pisces – Con Cá, 20/2 – 20/3) là cung cuối 
					cùng, thứ 12 của chu kỳ Hoàng đạo. Nếu như Bạch 
					Dương, cung mở đầu, biểu trưng cho sự sống, 
					thì Song Ngư biểu trưng cho cái chết và sự đi 
					vào cõi vĩnh hằng";
				}
				else{
					$image = "Aries";
					$name = "Bạch Dương – Aries (21/3-20/4)";
					$icon = "Con cừu có bộ lông vàng";
					$depiction = "Dương Ngưu (Aries – Con 
					Cừu Đực, 21/3 – 20/4) là cung mệnh đầu 
					tiên của vòng Hoàng Đạo, nó biểu trưng 
					cho sự sống. Con Cừu chỉ nghĩ về mình. 
					Nó là một đứa trẻ, và như mọi con trẻ 
					khác, nó hoàn toàn chìm đắm trong cái 
					Tôi của bản thân. Những gì nó quan tâm 
					phải được đặt lên trên hế";
				}
			break;
			case "4":
				if($day<1 || $day>30)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<22)
				{
					$image = "Aries";
					$name = "Bạch Dương – Aries (21/3-20/4)";
					$icon = "Con cừu có bộ lông vàng";
					$depiction = "Dương Ngưu (Aries – Con 
					Cừu Đực, 21/3 – 20/4) là cung mệnh đầu 
					tiên của vòng Hoàng Đạo, nó biểu trưng 
					cho sự sống. Con Cừu chỉ nghĩ về mình. 
					Nó là một đứa trẻ, và như mọi con trẻ 
					khác, nó hoàn toàn chìm đắm trong cái 
					Tôi của bản thân. Những gì nó quan tâm 
					phải được đặt lên trên hế";
				}
				else{
					$image = "Taurus";
					$name = "Kim Ngưu – Taurus (21/4-21/5)";
					$icon = "Con bò trắng (do thần Zeus biến thành)";
					$depiction = "ừ 21/4 đến 21/5, mặt trời đi ngang
					qua chòm sao mà các nhà thiên văn cổ xưa liên 
					tưởng thành hình thân trước của con bò, đặt tên 
					là Taurus (bò đực) – Kim Ngưu. Người sinh trong 
					khoảng thời gian này luôn có thể được nhận biết bởi 
					dáng vẻ điềm tĩnh, sự khoan thai trong cử chỉ và 
					lời nói… Đa số Kim Ngưu là những người giàu có. 
					Tính cách ổn định, hơi bảo thủ, người thuộc cung 
					này có thể nói là đáng tin cậy nhất trong cung 
					hoàng đạo.";
				}
			break;
			case "5":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<22)
				{
					$image = "Taurus";
					$name = "Kim Ngưu – Taurus (21/4-21/5)";
					$icon = "Con bò trắng (do thần Zeus biến thành)";
					$depiction = "Từ 21/4 đến 21/5, mặt trời đi ngang
					qua chòm sao mà các nhà thiên văn cổ xưa liên 
					tưởng thành hình thân trước của con bò, đặt tên 
					là Taurus (bò đực) – Kim Ngưu. Người sinh trong 
					khoảng thời gian này luôn có thể được nhận biết bởi 
					dáng vẻ điềm tĩnh, sự khoan thai trong cử chỉ và 
					lời nói… Đa số Kim Ngưu là những người giàu có. 
					Tính cách ổn định, hơi bảo thủ, người thuộc cung 
					này có thể nói là đáng tin cậy nhất trong cung 
					hoàng đạo.";
				}
				else{
					$image = "Gemini";
					$name = "Song Tử – Gemini  (22/5-21/6)";
					$icon = "ai cậu bé song sinh (đôi lúc là hai cô bé)";
					$depiction = "Người sinh vào thời gian từ 21 Tháng
					Năm đến 21 Tháng Sáu sẽ thuộc cung Gemini. Hai anh 
					em song sinh Castor và Pollux là con của Zeus, chúa 
					tể trong tất cả mười hai vị thần trên đỉnh Olympus,
					và nữ hoàng của thành Sparta. Đó là hai đứa trẻ trung 
					hậu, rất dũng cảm và cùng nhau nổi danh khi lập được 
					nhiều chiến công hiển hách trong cuộc hành trình của 
					nhóm thủy thủ tàu Argo vĩ đại, và trong biết bao cuộc 
					phiêu lưu khác";
				}
			break;
			case "6":
				if($day<1 || $day>30)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<22)
				{
					$image = "Gemini";
					$name = "Song Tử – Gemini  (22/5-21/6)";
					$icon = " Hai cậu bé song sinh (đôi lúc là hai cô bé)";
					$depiction = "Người sinh vào thời gian từ 21 Tháng
					Năm đến 21 Tháng Sáu sẽ thuộc cung Gemini. Hai anh 
					em song sinh Castor và Pollux là con của Zeus, chúa 
					tể trong tất cả mười hai vị thần trên đỉnh Olympus,
					và nữ hoàng của thành Sparta. Đó là hai đứa trẻ trung 
					hậu, rất dũng cảm và cùng nhau nổi danh khi lập được 
					nhiều chiến công hiển hách trong cuộc hành trình của 
					nhóm thủy thủ tàu Argo vĩ đại, và trong biết bao cuộc 
					phiêu lưu khác";
				}
				else{
					$image = "Cancer";
					$name = "Cự Giải – Cancer (22/6-23/7)";
					$icon = "Con cua";
					$depiction = "Là biểu tượng của nước, sao chiếu mệnh 
					là Mặt Trăng nên muốn nhận ra Cự Giải, trước hết hãy 
					để ý đến một tuần trăng. Sự thay đổi tâm trạng của 
					những người sinh ra trong khoảng thời gian này dường
					như liên hệ với mặt trăng bởi một sợi dây thần bí, 
					giống như cách mà vệ tinh này chi phối chu kỳ lên 
					xuống của thuỷ triều. Mặt trăng có lúc trong sáng, 
					nó có thể lấp đầy một đường tròn hoàn hảo trên bầu 
					trời, rồi lại thanh mảnh trở lại trong một hình cung 
					khuyết kiêu kỳ với quầng sáng dịu dàng, mờ ảo, nhưng 
					bản thân nó thì không hề thay đổi";
				}
			break;
			case "7":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<24)
				{
					$image = "Cancer";
					$name = "Cự Giải – Cancer (22/6-23/7)";
					$icon = "Con cua";
					$depiction = "Là biểu tượng của nước, sao chiếu mệnh 
					là Mặt Trăng nên muốn nhận ra Cự Giải, trước hết hãy 
					để ý đến một tuần trăng. Sự thay đổi tâm trạng của 
					những người sinh ra trong khoảng thời gian này dường
					như liên hệ với mặt trăng bởi một sợi dây thần bí, 
					giống như cách mà vệ tinh này chi phối chu kỳ lên 
					xuống của thuỷ triều. Mặt trăng có lúc trong sáng, 
					nó có thể lấp đầy một đường tròn hoàn hảo trên bầu 
					trời, rồi lại thanh mảnh trở lại trong một hình cung 
					khuyết kiêu kỳ với quầng sáng dịu dàng, mờ ảo, nhưng 
					bản thân nó thì không hề thay đổi";
				}
				else{
					$image = "Leo";
					$name = "Sư Tử – Leo (24/7-23/8)";
					$icon = "Con sư tử";
					$depiction = "Bạn có bao giờ gặp những
					người tiếp nhận sự giúp đỡ và nhiệt tình của kẻ khác 
					với một vẻ độ lượng và phong thái oai nghiêm như thể
					việc đó là đương nhiên không? Nếu có thì đó chính là 
					Leo đấy. Sư Tử là chúa của muôn loài. Cho nên người 
					cùng tên với nó cũng muốn chiếm vị trí như vậy đối
					với các cung Hoàng đạo khác";
				}
			break;
			case "8":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<24)
				{
					$image = "Leo";
					$name = "Sư Tử – Leo (24/7-23/8)";
					$icon = "Con sư tử";
					$depiction = "Bạn có bao giờ gặp những
					người tiếp nhận sự giúp đỡ và nhiệt tình của kẻ khác 
					với một vẻ độ lượng và phong thái oai nghiêm như thể
					việc đó là đương nhiên không? Nếu có thì đó chính là 
					Leo đấy. Sư Tử là chúa của muôn loài. Cho nên người 
					cùng tên với nó cũng muốn chiếm vị trí như vậy đối
					với các cung Hoàng đạo khác";
				}
				else{
					$image = "Virgo";
					$name = "Xử Nữ – Virgo(24/8-23/9)";
					$icon = "Trinh nữ";
					$depiction = "Từ ngày 24/8 đến hết ngày 23/9 mặt trời
					đi qua chòm sao Virgo – tiếng Latin nghĩa là Xử Nữ,
					Trinh Nữ. Hợp với nghĩa đó, đa số người sống độc thân 
					hoặc muộn màng chính là sinh ở cung này. Nhưng một khi 
					đã lập gia đình, Xử Nữ làm tròn bổn phận của mình với
					lòng tận tuỵ hiếm có";
				}
			break;
			case "9":
				if($day<1 || $day>30)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<24)
				{
					$image = "Virgo";
					$name = "Xử Nữ – Virgo(24/8-23/9)";
					$icon = "Trinh nữ";
					$depiction = "Từ ngày 24/8 đến hết ngày 23/9 mặt trời
					đi qua chòm sao Virgo – tiếng Latin nghĩa là Xử Nữ,
					Trinh Nữ. Hợp với nghĩa đó, đa số người sống độc thân 
					hoặc muộn màng chính là sinh ở cung này. Nhưng một khi 
					đã lập gia đình, Xử Nữ làm tròn bổn phận của mình với
					lòng tận tuỵ hiếm có";
				}
				else{
					$image = "Libra";
					$name = "Thiên Bình – Libra (24/9-23/10)";
					$icon = "Cái cân";
					$depiction = "Sau khi rời chòm Xử Nữ, từ ngày 24/9 
					đến 23/10 mặt trời “đi” qua chòm Libra (Thiên Bình) 
					– nghĩa là cái cân. Tuy nhiên, khó có thể nói Thiên 
					Bình là những người thăng bằng. Trước khi đạt được 
					trạng thái thăng bằng, cái cân phải dao động, đung 
					đưa rất lâu bên này bên kia.";
				}
			break;
			case "10":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<24)
				{
					$image = "Libra";
					$name = "Thiên Bình – Libra (24/9-23/10)";
					$icon = "Cái cân";
					$depiction = "Sau khi rời chòm Xử Nữ, từ ngày 24/9 
					đến 23/10 mặt trời “đi” qua chòm Libra (Thiên Bình) 
					– nghĩa là cái cân. Tuy nhiên, khó có thể nói Thiên 
					Bình là những người thăng bằng. Trước khi đạt được 
					trạng thái thăng bằng, cái cân phải dao động, đung 
					đưa rất lâu bên này bên kia.";
				}
				else{
					$image = "Scorpio";
					$name = "Bọ  Cạp – Scorpio (24/10-22/11)";
					$icon = "Con bọ cạp";
					$depiction = "Từ 24/10 đến 22/11 mặt trời đi qua chòm 
					Scorpio – nghĩa là Bò Cạp. Trong các từ điển bách khoa, 
					Bò Cạp được mô tả như sau: loài động vật chân đốt sống
					về đêm, có khả năng làm tê liệt con mồi bằng chất độc 
					chứa ở chiếc đuôi dài và cong được sử dụng như một 
					phương tiện tấn công cũng như phòng thủ";
				}
			break;
			case "11":
				if($day<1 || $day>30)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<23)
				{
					$image = "Scorpio";
					$name = "Bọ  Cạp – Scorpio (24/10-22/11)";
					$icon = "Con bọ cạp";
					$depiction = "Từ 24/10 đến 22/11 mặt trời đi qua chòm 
					Scorpio – nghĩa là Bò Cạp. Trong các từ điển bách khoa, 
					Bò Cạp được mô tả như sau: loài động vật chân đốt sống
					về đêm, có khả năng làm tê liệt con mồi bằng chất độc 
					chứa ở chiếc đuôi dài và cong được sử dụng như một 
					phương tiện tấn công cũng như phòng thủ";
				}
				else{
					$image = "Sagittarius";
					$name = "Nhân Mã – Sagittarius(23/11-21/12)";
					$icon = "Nửa trên là người, nửa dưới là ngựa, cầm cung";
					$depiction = "Đơn giản nhất là nhận biết người sinh cung 
					Nhân Mã (Sagittarius, 23/11-21/12). Bạn tìm thấy người 
					đó tại chính giữa nhóm ồn ào nhất ở mỗi cuộc vui. Anh 
					ta đang kể các câu chuyện hài hước, còn mọi người xung 
					quanh thì phá ra cười.";
				}
			break;
			case "12":
				if($day<1 || $day>31)
				{
					$result = "ngày không hợp lệ";
					break;
				}
				if($day<22)
				{
					$image = "Sagittarius";
					$name = "Nhân Mã – Sagittarius(23/11-21/12)";
					$icon = "Nửa trên là người, nửa dưới là ngựa, cầm cung";
					$depiction = "Đơn giản nhất là nhận biết người sinh cung 
					Nhân Mã (Sagittarius, 23/11-21/12). Bạn tìm thấy người 
					đó tại chính giữa nhóm ồn ào nhất ở mỗi cuộc vui. Anh 
					ta đang kể các câu chuyện hài hước, còn mọi người xung 
					quanh thì phá ra cười.";
				}
				else{
					$image = "Capricornus";
					$name = "Ma kết – Capricornus (22/12-20/1)";
					$icon = "Con dê biển";
					$depiction = "Trong truyện ngụ ngôn, con rùa bò 
					chậm chạp nhưng không la cà, bền bỉ tiến tới, 
					vượt qua chú thỏ nhanh nhảu, và đến đích trước.
					Hình tượng đó là khắc hoạ cơ bản tính cách của 
					người sinh trong giai đoạn từ 22/12 đến 20/1, 
					thuộc cung Ma Kết (Capricornus – Con Dê)";
				}
			break;
			default:
			$result = "ngày không hợp lệ";
			break;
		}
		$result = 
		'
		<table >
			<tr>
				<td >
					<img class="image" src="../images/astrology/' . $image . '.png" alt="' . $image . '" />
				</td>
				<td >
					<h3>' . $name . '</h3>
					<br/>
					<img class="icon" src="../images/astrology/icon' . $image . '.png" alt="icon' . $image . '" />
					<h4>' . $icon . ' </h4>
				</td>
			</tr>
			<tr>
				<td >
					 &nbsp;
				</td>
				<td >
					<span>
					' . $depiction . '
					</span>
				</td>
			</tr>
		</table>
		';
	}
	else{

		$result = "ngày không hợp lệ";

	}
?>
		
	
<div class="content">
	<form name="main-form" method="post" action="#">
		Ngày Sinh: 
		<input type="text" name="day" value="<?php echo $day ?>"/> <br/>
		Tháng Sinh :
		<select name="month">
		<?php 
		for($i=1;$i<13;$i++)
		{
			if($i == $month)
			{
				echo "<option value=".$i." selected='true'>".$i."</option>";
			}
			else{
				echo "<option value=".$i.">".$i."</option>";
			}
		}
		?>
		</select> 
		<br/>
		<input type="submit" name="submit" value="Xem kết quả" />
		<br/>
		

		<?php echo $result; ?>

	</form>
</div> <!-- end div content -->


</body>
</html>