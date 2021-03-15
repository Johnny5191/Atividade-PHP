<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade PHP</title>
</head>
<?php $fundo = "lightgreen";?>
<style type="text/css">
	body{
		display: flex;
		flex-direction: column;
		height: 900px;
	}
	#section{
		display: flex;
		justify-content: center;
		align-items: flex-start;
	}
	#section2{
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 10vw;
		background-color: <?php echo $fundo;?>;
		}
	#imagem{
		height: auto;
		width: 500px;
	}
</style>
<body>
	<section id="section">
		<?php
		$nome = "João";
		$idade = 16;
		$email = "joao.moura76@etec.sp.gov.br";

		echo '<background-color="'.$fundo.'"><h1>Ola <font color="#000060">'.$nome. '</font>, Bem Vindo! <br> Você Tem <font color="#ef6950">'.$idade.'</font> anos, Seu email é: "<font color="#6888c9">'.$email.'</font>"</h1>' ;
		?>
	</section>
	<section id="section2">
		<?php 
			$name = "João Moura";
			$imagem = "https://wallpaperaccess.com/full/300068.jpg";
			echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;">'.$name.'<br></h1><img src="'.$imagem.'" id="imagem">';
		 ?>
	</section>
</body>
</html>
