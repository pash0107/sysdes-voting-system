
<?php /*Senatorial Survey*/
	/*$con = mysqli_connect('localhost','root','','survey1');
	if(isset($_POST['Albani'])){
		$vote_Albani = "UPDATE `sentors` set Albani=Albani+1";
		$run_Albani = mysqli_query($con, $vote_Albani);
		
		if($run_Albani){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Ali'])){
		$vote_Ali = "UPDATE `sentors` set Ali=Ali+1";
		$run_Ali = mysqli_query($con, $vote_Ali);
		
		if($run_Ali){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Alunan'])){
		$vote_Alunan = "UPDATE `sentors` set Alunan=Alunan+1";
		$run_Alunan = mysqli_query($con, $vote_Alunan);
		
		if($run_Alunan){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Ambolodto'])){
		$vote_Ambolodto = "UPDATE `sentors` set Ambolodto=Ambolodto+1";
		$run_Ambolodto = mysqli_query($con, $vote_Ambolodto);
		
		if($run_Ambolodto){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Arquiza'])){
		$vote_Arquiza = "UPDATE `sentors` set Arquiza=Arquiza+1";;
		$run_Arquiza = mysqli_query($con, $vote_Arquiza);
		if($run_Arquiza){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Baligod'])){
		$vote_Baligod = "UPDATE `sentors` set Baligod=Baligod+1";;
		$run_Baligod = mysqli_query($con, $vote_Baligod);
		if($run_Baligod){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Belgica'])){
		$vote_Belgica = "UPDATE `sentors` set Belgica=Belgica+1";;
		$run_Belgica = mysqli_query($con, $vote_Belgica);
		if($run_Belgica){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Bello'])){
		$vote_Bello = "UPDATE `sentors` set Bello=Bello+1";
		$run_Bello = mysqli_query($con, $vote_Bello);
		
		if($run_Bello){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Cam'])){
		$vote_Cam = "UPDATE `sentors` set Cam=Cam+1";
		$run_Cam = mysqli_query($con, $vote_Cam);
		
		if($run_Cam){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Chavez'])){
		$vote_Chavez = "UPDATE `sentors` set Chavez=Chavez+1";
		$run_Chavez = mysqli_query($con, $vote_Chavez);
		
		if($run_Chavez){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Colmenarez'])){
		$vote_Colmenarez = "UPDATE `sentors` set Colmenarez=Colmenarez+1";
		$run_Colmenarez = mysqli_query($con, $vote_Colmenarez);
		
		if($run_Colmenarez){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['DeLima'])){
		$vote_DeLima = "UPDATE `sentors` set DeLima=DeLima+1";;
		$run_DeLima = mysqli_query($con, $vote_DeLima);
		if($run_DeLima){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Domagoso'])){
		$vote_Domagoso = "UPDATE `sentors` set Domagoso=Domagoso+1";;
		$run_Domagoso = mysqli_query($con, $vote_Domagoso);
		if($run_Domagoso){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Dorona'])){
		$vote_Dorona = "UPDATE `sentors` set Dorona=Dorona+1";;
		$run_Dorona = mysqli_query($con, $vote_Dorona);
		if($run_Dorona){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Drilon'])){
		$vote_Drilon = "UPDATE `sentors` set Drilon=Drilon+1";
		$run_Drilon = mysqli_query($con, $vote_Drilon);
		
		if($run_Drilon){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Gadon'])){
		$vote_Gadon = "UPDATE `sentors` set Gadon=Gadon+1";
		$run_Gadon = mysqli_query($con, $vote_Gadon);
		
		if($run_Gadon){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Gatchalian'])){
		$vote_Gatchalian = "UPDATE `sentors` set Gatchalian=Gatchalian+1";
		$run_Gatchalian = mysqli_query($con, $vote_Gatchalian);
		
		if($run_Gatchalian){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Gordon'])){
		$vote_Gordon = "UPDATE `sentors` set Gordon=Gordon+1";
		$run_Gordon = mysqli_query($con, $vote_Gordon);
		
		if($run_Gordon){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Guinggona'])){
		$vote_Guinggona = "UPDATE `sentors` set Guinggona=Guinggona+1";;
		$run_Guinggona = mysqli_query($con, $vote_Guinggona);
		if($run_Guinggona){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Hontiveros'])){
		$vote_Hontiveros = "UPDATE `sentors` set Hontiveros=Hontiveros+1";;
		$run_Hontiveros = mysqli_query($con, $vote_Hontiveros);
		if($run_Hontiveros){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Kabalu'])){
		$vote_Kabalu = "UPDATE `sentors` set Kabalu=Kabalu+1";;
		$run_Kabalu = mysqli_query($con, $vote_Kabalu);
		if($run_Kabalu){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Kapunan'])){
		$vote_Kapunan = "UPDATE `sentors` set Kapunan=Kapunan+1";
		$run_Kapunan = mysqli_query($con, $vote_Kapunan);
		
		if($run_Kapunan){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Kiram'])){
		$vote_Kiram = "UPDATE `sentors` set Kiram=Kiram+1";
		$run_Kiram = mysqli_query($con, $vote_Kiram);
		
		if($run_Kiram){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Lacsamana'])){
		$vote_Lacsamana = "UPDATE `sentors` set Lacsamana=Lacsamana+1";
		$run_Lacsamana = mysqli_query($con, $vote_Lacsamana);
		
		if($run_Lacsamana){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Lacson'])){
		$vote_Lacson = "UPDATE `sentors` set Lacson=Lacson+1";
		$run_Lacson = mysqli_query($con, $vote_Lacson);
		
		if($run_Lacson){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Langit'])){
		$vote_Langit = "UPDATE `sentors` set Langit=Langit+1";;
		$run_Langit = mysqli_query($con, $vote_Langit);
		if($run_Langit){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Lapid'])){
		$vote_Lapid = "UPDATE `sentors` set Lapid=Lapid+1";;
		$run_Lapid = mysqli_query($con, $vote_Lapid);
		if($run_Lapid){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Liban'])){
		$vote_Liban = "UPDATE `sentors` set Liban=Liban+1";;
		$run_Liban = mysqli_query($con, $vote_Liban);
		if($run_Liban){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Maganto'])){
		$vote_Maganto = "UPDATE `sentors` set Maganto=Maganto+1";
		$run_Maganto = mysqli_query($con, $vote_Maganto);
		
		if($run_Maganto){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Manzano'])){
		$vote_Manzano = "UPDATE `sentors` set Manzano=Manzano+1";
		$run_Manzano = mysqli_query($con, $vote_Manzano);
		
		if($run_Manzano){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Montano'])){
		$vote_Montano = "UPDATE `sentors` set Montano=Montano+1";
		$run_Montano = mysqli_query($con, $vote_Montano);
		
		if($run_Montano){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Montano1'])){
		$vote_Montano1 = "UPDATE `sentors` set Montano1=Montano1+1";
		$run_Montano1 = mysqli_query($con, $vote_Montano1);
		
		if($run_Montano1){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Napenas'])){
		$vote_Napenas = "UPDATE `sentors` set Napenas=Napenas+1";;
		$run_Napenas = mysqli_query($con, $vote_Napenas);
		if($run_Napenas){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Ople'])){
		$vote_Ople = "UPDATE `sentors` set Ople=Ople+1";;
		$run_Ople = mysqli_query($con, $vote_Ople);
		if($run_Ople){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Osmena'])){
		$vote_Osmena = "UPDATE `sentors` set Osmena=Osmena+1";;
		$run_Osmena = mysqli_query($con, $vote_Osmena);
		if($run_Osmena){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Pacquiao'])){
		$vote_Pacquiao = "UPDATE `sentors` set Pacquiao=Pacquiao+1";
		$run_Pacquiao = mysqli_query($con, $vote_Pacquiao);
		
		if($run_Pacquiao){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Paez'])){
		$vote_Paez = "UPDATE `sentors` set Paez=Paez+1";
		$run_Paez = mysqli_query($con, $vote_Paez);
		
		if($run_Paez){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Pagdilao'])){
		$vote_Pagdilao = "UPDATE `sentors` set Pagdilao=Pagdilao+1";
		$run_Pagdilao = mysqli_query($con, $vote_Pagdilao);
		
		if($run_Pagdilao){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Palparan'])){
		$vote_Palparan = "UPDATE `sentors` set Palparan=Palparan+1";
		$run_Palparan = mysqli_query($con, $vote_Palparan);
		
		if($run_Palparan){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Pangilinan'])){
		$vote_Pangilinan = "UPDATE `sentors` set Pangilinan=Pangilinan+1";;
		$run_Pangilinan = mysqli_query($con, $vote_Pangilinan);
		if($run_Pangilinan){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Petilla'])){
		$vote_Petilla = "UPDATE `sentors` set Petilla=Petilla+1";;
		$run_Petilla = mysqli_query($con, $vote_Petilla);
		if($run_Petilla){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Recto'])){
		$vote_Recto = "UPDATE `sentors` set Recto=Recto+1";;
		$run_Recto = mysqli_query($con, $vote_Recto);
		if($run_Recto){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Romualdez'])){
		$vote_Romualdez = "UPDATE `sentors` set Romualdez=Romualdez+1";
		$run_Romualdez = mysqli_query($con, $vote_Romualdez);
		
		if($run_Romualdez){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Romulo'])){
		$vote_Romulo = "UPDATE `sentors` set Romulo=Romulo+1";
		$run_Romulo = mysqli_query($con, $vote_Romulo);
		
		if($run_Romulo){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	if(isset($_POST['Santiago'])){
		$vote_Santiago = "UPDATE `sentors` set Santiago=Santiago+1";
		$run_Santiago = mysqli_query($con, $vote_Santiago);
		
		if($run_Santiago){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Sotto'])){
		$vote_Sotto = "UPDATE `sentors` set Sotto=Sotto+1";
		$run_Sotto = mysqli_query($con, $vote_Sotto);
		
		if($run_Sotto){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Tolentino'])){
		$vote_Tolentino = "UPDATE `sentors` set Tolentino=Tolentino+1";;
		$run_Tolentino = mysqli_query($con, $vote_Tolentino);
		if($run_Tolentino){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Valeroso'])){
		$vote_Valeroso = "UPDATE `sentors` set Valeroso=Valeroso+1";;
		$run_Valeroso = mysqli_query($con, $vote_Valeroso);
		if($run_Valeroso){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	if(isset($_POST['Villanueva'])){
		$vote_Villanueva = "UPDATE `sentors` set Villanueva=Villanueva+1";;
		$run_Villanueva = mysqli_query($con, $vote_Villanueva);
		if($run_Villanueva){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
	}
	
	if(isset($_POST['Zubiri'])){
		$vote_Zubiri = "UPDATE `sentors` set Zubiri=Zubiri+1";
		$run_Zubiri = mysqli_query($con, $vote_Zubiri);
		
		if($run_Zubiri){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='senator.php';</script>";
		}
		
	}
	
	if(isset($_GET['results'])){
	$get_votes2 = "select * FROM sentors";
	$run_votes2 = mysqli_query($con, $get_votes2);
	$row_votes2 = mysqli_fetch_array($run_votes2);
	
	$Albani = $row_votes2['Albani'];
	$Ali = $row_votes2['Ali'];
	$Alunan = $row_votes2['Alunan'];
	$Ambolodto = $row_votes2['Ambolodto'];
	$Arquiza = $row_votes2['Arquiza'];
	$Baligod = $row_votes2['Baligod'];
	$Belgica  = $row_votes2['Belgica'];
	$Bello = $row_votes2['Bello'];
	$Cam  = $row_votes2['Cam'];
	$Chavez = $row_votes2['Chavez'];
	$Colmenarez = $row_votes2['Colmenarez'];
	$DeLima = $row_votes2['DeLima'];
	$Domagoso = $row_votes2['Domagoso'];
	$Dorona = $row_votes2['Dorona'];
	$Drilon = $row_votes2['Drilon'];
	$Gadon = $row_votes2['Gadon'];
	$Gatchalian = $row_votes2['Gatchalian'];
	$Gordon  = $row_votes2['Gordon'];
	$Guinggona = $row_votes2['Guinggona'];
	$Hontiveros = $row_votes2['Hontiveros'];
	$Kabalu  = $row_votes2['Kabalu'];
	$Kapunan = $row_votes2['Kapunan'];
	$Kiram = $row_votes2['Kiram'];
	$Lacsamana  = $row_votes2['Lacsamana'];
	$Lacson  = $row_votes2['Lacson'];
	$Langit  = $row_votes2['Langit'];
	$Lapid  = $row_votes2['Lapid'];
	$Liban = $row_votes2['Liban'];
	$Maganto = $row_votes2['Maganto'];
	$Manzano  = $row_votes2['Manzano'];
	$Montano  = $row_votes2['Montano'];
	$Montano1 = $row_votes2['Montano1'];
	$Napenas  = $row_votes2['Napenas'];
	$Ople  = $row_votes2['Ople'];
	$Osmena = $row_votes2['Osmena'];
	$Pacquiao = $row_votes2['Pacquiao'];
	$Paez  = $row_votes2['Paez'];
	$Pagdilao = $row_votes2['Pagdilao'];
	$Palparan = $row_votes2['Palparan'];
	$Pangilinan = $row_votes2['Pangilinan'];
	$Petilla  = $row_votes2['Petilla'];
	$Recto = $row_votes2['Recto'];
	$Romualdez = $row_votes2['Romualdez'];
	$Romulo = $row_votes2['Romulo'];
	$Santiago = $row_votes2['Santiago'];
	$Sotto = $row_votes2['Sotto'];
	$Tolentino = $row_votes2['Tolentino'];
	$Valeroso = $row_votes2['Valeroso'];
	$Villanueva = $row_votes2['Villanueva'];
	$Zubiri = $row_votes2['Zubiri'];

	$count2 = $Albani+$Ali+$Alunan+$Ambolodto+$Arquiza +$Baligod +$Belgica +$Bello+$Cam +$Chavez+$Colmenarez+$DeLima+$Domagoso+$Dorona+$Drilon+$Gadon+$Gatchalian+$Gordon+$Guinggona+$Hontiveros+$Kabalu+$Kapunan+$Kiram+$Lacsamana+$Lacson+$Langit+$Lapid+$Liban+$Maganto+$Manzano+$Montano +$Montano1+$Napenas+$Ople+$Osmena+$Pacquiao+$Paez+$Pagdilao+$Palparan+$Pangilinan+$Petilla+$Recto+$Romualdez+$Romulo+$Santiago+$Sotto+$Tolentino+$Valeroso+$Villanueva+$Zubiri;
		
	$per_Albani = round($Albani*100/$count2) . "%";
	$per_Ali = round($Ali*100/$count2) . "%";
	$per_Alunan = round($Alunan*100/$count2) . "%";
	$per_Ambolodto = round($Ambolodto*100/$count2) . "%";
	$per_Arquiza  = round($Arquiza*100/$count2) . "%";
	$per_Baligod  = round($Baligod*100/$count2) . "%";
	$per_Belgica  = round($Belgica*100/$count2) . "%";
	$per_Bello = round($Bello*100/$count2) . "%";
	$per_Cam  = round($Cam*100/$count2) . "%";
	$per_Chavez = round($Chavez*100/$count2) . "%";
	$per_Colmenarez = round($Colmenares*100/$count2) . "%";
	$per_DeLima = round($DeLima*100/$count2) . "%";
	$per_Domagoso = round($Domagoso*100/$count2) . "%";
	$per_Dorona = round($Dorona*100/$count2) . "%";
	$per_Drilon = round($Drilon*100/$count2) . "%";
	$per_Gadon = round($Gadon*100/$count2) . "%";
	$per_Gatchalian = round($Gatchalian*100/$count2) . "%";
	$per_Gordon  = round($Gordon*100/$count2) . "%";
	$per_Guinggona = round($Guinggona*100/$count2) . "%";
	$per_Hontiveros = round($Hontiveros*100/$count2) . "%";
	$per_Kabalu  = round($Kabalu*100/$count2) . "%";
	$per_Kapunan = round($Kapunan*100/$count2) . "%";
	$per_Kiram = round($Kiram*100/$count2) . "%";
	$per_Lacsamana  = round($Lacsamana*100/$count2) . "%";
	$per_Lacson  = round($Lacson*100/$count2) . "%";
	$per_Langit  = round($Langit*100/$count2) . "%";
	$per_Lapid  = round($Lapid*100/$count2) . "%";
	$per_Liban = round($Liban*100/$count2) . "%";
	$per_Maganto = round($Maganto*100/$count2) . "%";
	$per_Manzano  = round($Manzano*100/$count2) . "%";
	$per_Montano  = round($Montano*100/$count2) . "%";
	$per_Montano1 = round($Montano1*100/$count2) . "%";
	$per_Napenas  = round($Napenas*100/$count2) . "%";
	$per_Ople  = round($Ople*100/$count2) . "%";
	$per_Osmena = round($Osmena*100/$count2) . "%";
	$per_Pacquiao = round($Pacquiao*100/$count2) . "%";
	$per_Paez  = round($Paez*100/$count2) . "%";
	$per_Pagdilao = round($Pagdilao*100/$count2) . "%";
	$per_Palparan = round($Palparan*100/$count2) . "%";
	$per_Pangilinan = round($Pangilinan*100/$count2) . "%";
	$per_Petilla  = round($Petilla*100/$count2) . "%";
	$per_Recto = round($Recto*100/$count2) . "%";
	$per_Romualdez = round($Romualdez*100/$count2) . "%";
	$per_Romulo = round($Romulo*100/$count2) . "%";
	$per_Santiago = round($Santiago*100/$count2) . "%";
	$per_Sotto = round($Sotto*100/$count2) . "%";
	$per_Tolentino = round($Tolentino*100/$count2) . "%";
	$per_Valeroso = round($Valeroso*100/$count2) . "%";
	$per_Villanueva = round($Villueva*100/$count2) . "%";
	$per_Zubiri = round($Zubiri*100/$count2) . "%";
	
	
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/Custom.css" rel="stylesheet">
	
    <title>senator</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="user.php">Senator: Online Campaign Poll System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="usersetting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" style="padding: 10px;"role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
						<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bell fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">01</div>
                                    <div>Change Password</div>
                                </div>
                            </div>
                        </div>
                        <a href="changePassword.php">
                            <div class="panel-footer">
                                <span class="pull-left">Edit Password</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
					
					<li>
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">02</div>
                                    <div>Survey</div>
                                </div>
                            </div>
                        </div>
                        <a href="ListSurvey.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>	
					</li>
						<li>
					<div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trash fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">03</div>
                                    <div>Log Out</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Log Out</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
				<div class="container">
						<div class="jumbotron" style="margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
						<div class="row">
							<div class="col-lg-12">
							<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Senatorial Candidates:</h3>
									</div>
									<div class="panel-body">
								<form action="dashboard.php" class="form-horizontal" method="POST" align="center" role="form">
									<div class="row">
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
											<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sharrif Albani</h3>
										</div>
										<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Albani" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sharrif Albani</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>	Aldin Ali</h3>
									</div>
										<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ali" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Aldin Ali </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Raffy Alunan </h3>
									</div>
										<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Alunan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Raffy Alunan </button>
										</div>
										</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ina Ambolodto </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ambolodto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ina Ambolodto </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Godofredo Arquiza </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Arquiza" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Godofredo Arquiza </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Levito Baligod</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Baligod" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Levito Baligod</button>
										</div>
										</div>
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Greco Belgica  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Belgica" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Greco Belgica  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Walden Bello</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Bello" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Walden Bello</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sandra Cam </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Cam" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sandra Cam </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mel Chavez   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Chavez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mel Chavez   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Neri Colmenares </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Colmenarez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Neri Colmenares</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Leila De Lima </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="DeLima" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Leila De Lima  </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Isko Moreno Domagoso    </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Domagoso" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Isko Moreno Domagoso    </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ray Dorona  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Dorona" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ray Dorona </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Frank Drilon  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Drilon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Frank Drilon   </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Larry Gadon  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gadon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Larry Gadon</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Win Gatchalian </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gatchalian" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Win Gatchalian </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Richard Gordon   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gordon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Richard Gordon    </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> TG Guinggona   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Guinggona" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> TG Guinggona </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Risa Hontiveros  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Hontiveros" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span>Risa Hontiveros  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Eid Kabalu</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kabalu" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Eid Kabalu     </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Atty. Lorna Kapunan    </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kapunan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Atty. Lorna Kapunan  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Princess Jacel Kiram  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kiram" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Princess Jacel Kiram   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Alma Moreno Lacsamana </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lacsamana" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Alma Moreno Lacsamana </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Panfilo Ping Lacson     </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lacson" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Panfilo Ping Lacson   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Rey Langit  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Langit" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Rey Langit   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mark Lapid </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lapid" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mark Lapid </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Dante Liban </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Liban" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Dante Liban</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Romeo Maganto   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Maganto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Romeo Maganto</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Edu Manzano </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Manzano" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edu Manzano </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Allan Montano  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Montano" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Allan Montano </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mon Montaño </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Montano1" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mon Montaño </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Getulio Napeñas </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Napenas" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Getulio Napeñas  </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Susan Ople</h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ople" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Susan Ople  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sergio Osmeña III  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Osmena" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sergio Osmeña III  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Manny Pacquiao  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pacquiao" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Manny Pacquiao   </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mr. Coop Paez </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Paez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mr. Coop Paez   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Samuel Pagdilao </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pagdilao" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Samuel Pagdilao   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Jovito Palparan Jr.   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Palparan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Jovito Palparan Jr.    </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Kiko Pangilinan </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pangilinan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Kiko Pangilinan   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Carlos Jericho Petilla  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Petilla" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Carlos Jericho Petilla </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ralph Recto </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Recto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ralph Recto     </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Martin Romualdez  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Romualdez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Martin Romualdez    </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Roman Romulo   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Romulo" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Roman Romulo  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Dionisio Santiago  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Santiago" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Dionisio Santiago      </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Vicente Sotto   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Sotto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Vicente Sotto     </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Francis Tolentino</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Tolentino" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Francis Tolentino  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Diosdado Valeroso   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Valeroso" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Diosdado Valeroso </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Joel Villanueva </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Villanueva" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Joel Villanueva      </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Migz Zubiri </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Logo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Zubiri" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Migz Zubiri  </button>
										</div>
										</div>
										</div>
									</div>
								</form>
								</div>
							</div>
							</div>
						</div>
						</div>
					</span>
                            </div>
      
        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
