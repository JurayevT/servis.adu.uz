<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'ADU inkubatsiya va akseleratsiya markazi';

?>
		
			<div class="container-fluid mt-4 pt-3 pb-1">
				<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block w-100" src="./../web/img/carusel/caruselMobileDevelopment.png" alt="First slide">
						<div class="carousel-caption d-none d-md-block text-danger">
							<h2 class="mb-5">Mobil dasturlarni yaratish</h2>
						</div>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="./../web/img/carusel/caruselWebDevelopment.png" alt="Second slide">
						<div class="carousel-caption d-none d-md-block text-success">
							<h2 class="mb-5">Web saytlarni yaratish</h2>
						</div>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="./../web/img/carusel/caruselDesktopDevelopment.png" alt="Third slide">
						<div class="carousel-caption d-none d-md-block text-primary">
							<h2 class="mb-5">Kompyuter uchun dasturlar</h2>
						</div>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="./../web/img/carusel/caruselLogo.png" alt="Fourth slide">
						<div class="carousel-caption d-none d-md-block text-secondary">
							<h2 class="mb-5">Kompaniyangiz uchun LOGO</h2>
						</div>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="./../web/img/carusel/caruselCoding.png" alt="Fifth slide">
						<div class="carousel-caption d-none d-md-block text-warning">
							<h2 class="mb-4">Dasturlash tillari</h2>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div> -->

				<div class="owl-carousel owl-index owl-theme">
					<div class="item">
					<img class="d-block w-100 owl-image" src="./../web/img/carusel/caruselMobileDevelopment.png" alt="First slide">
						<div class="carousel-caption text-info">
							<h2 class="mb-4">Mobil dasturlarni yaratish</h2>
						</div>
					</div>
					<div class="item">
					<img class="d-block w-100  owl-image" src="./../web/img/carusel/caruselWebDevelopment.png" alt="Second slide">
						<div class="carousel-caption text-warning">
							<h2 class="mb-4">Web saytlarni yaratish</h2>
						</div>
					</div>
					<div class="item">
					<img class="d-block w-100  owl-image" src="./../web/img/carusel/caruselDesktopDevelopment.png" alt="Third slide">
						<div class="carousel-caption text-primary">
							<h2 class="mb-4">Kompyuter uchun dasturlar</h2>
						</div>
					</div>
					<div class="item">
					<img class="d-block w-100  owl-image" src="./../web/img/carusel/caruselLogo.png" alt="Fourth slide">
						<div class="carousel-caption text-dark">
							<h2 class="mb-4">Kompaniyangiz uchun LOGO</h2>
						</div>
					</div>
					<div class="item">
					<img class="d-block w-100  owl-image" src="./../web/img/carusel/caruselCoding.png" alt="Fifth slide">
						<div class="carousel-caption text-light">
							<h2 class="mb-4">Dasturlash tillari</h2>
						</div>
					</div>
				</div>

			</div>

			<div class="jumbotron container mt-2 pt-3 mb-4 pb-2">
				<h4 class="lead alert alert-primary">Axborot texnologiyalarining eng rivojlanib borayotgan sohalaridagi moslashuvchan imkoniyatlarga ega va arzon narxdagi dasturiy mahsulotlarga biz orqali ega bo'ling!</h4>			
			<!-- <p class="lead mb-4">Ushb web sayt ADU inkubatsiya va akseleratsiya markazi uchun tayyorlandi </p> -->
			</div>

			

		<div class="lastServices container mt-4">
			<h2 class="text-primary">So'ngi qo'shilgan xizmatlar:</h2>
			<div class="row pb-4">
			<?php
				
			$file = '';
			
			foreach ($modelUz as $model) {
				if(file_exists('img/'.$model->rasm))
				{
					if(!empty($model->rasm))
						$file=$model->rasm;
				}
				$sImageFilePath=Url::to(['/img/'.$file]);
				echo "
				<div class='col-6 col-md-4 col-lg-3 px-1'>
					<div class='card p-0 mt-3 shadow' style='height: auto'>
					<img class='card-img-top' src='".$sImageFilePath."' alt='Card image cap' style='height: 170px'>
					<div class='card-body p-2 pt-3'>
						<h5 class='card-title mb-4'>".StringHelper::truncate($model->sarlavha, 16)."</h5>
						<a href='". '/matnuz/view/?id=' .$model->id."' class='btn btn-primary'>Batafsil</a>
						<div style='float:right; font-size: .9rem; text-shadow: 0 1px 5px rgba(0, 0, 100, .3)' class='text-muted pt-2'>". \yii::$app->formatter->asRelativeTime($model->insert) ."</div>
					</div>
					</div>
				</div>
				";
			}
			?></div>
		</div>

		<div class="lastMahsulot container mt-4">
			<h2 class="text-primary">So'ngi qo'shilgan mahsulotlar:</h2>
			<div class="row pb-4">
			<?php
				
			$file = '';
			
			foreach ($modelRu as $model) {
				if(file_exists('img/'.$model->rasm))
				{
					if(!empty($model->rasm))
						$file=$model->rasm;
				}
				$sImageFilePath=Url::to(['/img/'.$file]);
				echo "
				<div class='col-6 col-md-4 col-lg-3 px-1'>
					<div class='card p-0 mt-3 shadow' style='height: auto'>
					<img class='card-img-top' src='".$sImageFilePath."' alt='Card image cap' style='height: 170px'>
					<div class='card-body p-2 pt-3'>
						<h5 class='card-title mb-4'>".StringHelper::truncate($model->sarlavha, 16)."</h5>
						<a href='#' class='btn btn-primary' onclick = 'window.open(".'"'.'/matnru/vieww/?id=' .$model->id.'","_blank");window.location.reload()'."'>Batafsil</a>
						<div style='float:right; font-size: .9rem; text-shadow: 0 1px 5px rgba(0, 0, 100, .3)' class='text-muted pt-2'>". \yii::$app->formatter->asRelativeTime($model->insert) ."</div>
					</div>
					</div>
				</div>
				";
			}
			?></div>
		</div>