<?php
include "../../control/query.php";error_reporting(0);
//import file
?>
<html>
    <head>
        <title>S I A K A D</title>
	<link rel="icon" href="images/Home-Black-icon.png"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/stimenu.css" />
		<link rel="stylesheet" type="text/css" href="css/tbl_style.css" />
		<link rel="stylesheet" href="css/css_menu_nav/styles.css">
		<script src="jsss/js_menu_nav/jquery.min.js"></script>
		</head>
<body>
<div class="tab">
		<ul class="login">
			<li class="left">
			<li id="user"> || Selamat Datang <?php echo $log;?></li>
			<li class="sep">||</li>
			<li id="toggle">
				<a id="open" class="open" href="../control/logout.php">LOGOUT</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul>

 
	</div> 
	<div class="container">
<script>
var jumlahnya;
function ceksemua(){
    jumlahnya = document.getElementById("jumlahcek").value;
    if(document.getElementById("cekbox").checked==true){
        for(i=0;i<jumlahnya;i++){
            idcek = "nis"+i;
            idtr = "tr"+i;
            document.getElementById(idtr).style.backgroundColor = "rgba(0,0,0,.1)";
            document.getElementById(idcek).checked = true;
        }
    }else{
        for(i=0;i<jumlahnya;i++){
            idcek = "nis"+i;
            idtr = "tr"+i;
            document.getElementById(idtr).style.backgroundColor = "#FFFF99";
            document.getElementById(idcek).checked = false;
        }
    }
}

function konfirmasicek(indeks){
    idcek = "nis"+indeks;
    nisnya = document.getElementById(idcek).value;
    tanya = confirm("Delete siswa dengan nis "+nisnya+"?");
    if(tanya == 1){
        window.location.href="proses/delete_siswa.php?dels=delsatu&nis="+nisnya;
    }
}

function konfirmasiceked(indeks){
    idcek = "nis"+indeks;
    nisnya = document.getElementById(idcek).value;
    tanya = confirm("edit siswa dengan nis "+nisnya+"?");
    if(tanya == 1){
        window.location.href="proses/edit_siswa.php?nis="+nisnya;
    }
}

function konfirmasicek2(){
    ada = 0;            //untuk mengecek apakah ada checkbox yang dicek
    semuanyakah = 1;    //untuk mengecek apakah semua checkbox tercek
    
    //untuk mengambil jumlah total checkbox yang ada
    jumlahnya = document.getElementById("jumlahcek").value;
    
    jumlahx = 0         //untuk mengetahui jumlah yang dicek
    for(i=0;i<jumlahnya;i++){
        idcek = "nis"+i;
        if(document.getElementById(idcek).checked == true){
            jumlahx++;
            ada = 1;
        }else{
            semuanyakah = 0;
        }
    }
    if(ada==1){
        if(semuanyakah == 1){
            tanya = confirm("Yakin delete semuanya?");
            if(tanya == 1){
                document.getElementById("data").submit();
            }
        }else{
            tanya = confirm("yakin delete data "+jumlahx+" item ?");
            if(tanya == 1){
                document.getElementById("data").submit();
            }
        }
    }
}

function setwarna(indeks){
    idcek = "nis"+indeks;
    idtr = "tr"+indeks;
    if(document.getElementById(idcek).checked == true){
        document.getElementById(idtr).style.backgroundColor = "rgba(0,0,0,.1)";
    }else{
        document.getElementById(idtr).style.backgroundColor = "#FFFF99";
    }
}
</script>
<div id="wrapper">
<ul class="menu">
		<li class="item1"><a href="#">SISWA</a>
			<ul>
				<li class="subitem1"><a href="#">Data Siswa Kelas</a></li>
				<li class="subitem2"><a href="#">Data Semua Siswa</a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">GURU</a>
			<ul>
				<li class="subitem1"><a href="#">Data Guru Mapel</a></li>
				<li class="subitem2"><a href="#">Data Semua Guru</a></li>
				<li class="subitem3"><a href="#">Data Wali Kelas</a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">NILAI</a>
			<ul>
				<li class="subitem1"><a href="#">RAPOT</a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">GALLERY</a>
		</li>
		<li class="item4"><a href="#">JADWAL PELAJARAN</a>
			<ul>
				<li class="subitem1"><a href="#">JADWAL KELAS</a></li>
				<li class="subitem2"><a href="#">JADWAL SEKARANG</a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">PENCARIAN</a>
		</li>
		<li class="item5"><a href="#">BACK TO MAIN SITE</a>
		</li>
</ul>

</div></div>

<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
<div class="bawah" />
</body>
</html
prima
