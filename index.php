<?php
	include 'data_works.php';
	include 'skills.php';
	/* что нужно
	1) всплывающее обратная форма, при нажатии на какую либо ссылку показывать окно и в теме сразу указывать ту технологию на которую кликнули
	2) реализовать фильтр по работам
	3) указать области в которых я работаю
	*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style/css/style.css"/>
	<script src="https://cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
	<script src="js/plugins/jquery.masonry.min.js" type="text/javascript"></script>
	<script src="js/plugins/jquery.knob.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<meta name="viewport" content="width=400">
	<title>portgolio login2030</title>
</head>
<body>
	<main id="main">
		<header id="main_header">
			<h1>Портфолио</h1>
			<p>login2030</p>
			<div class="sp_10"></div>
			<img src="images/login2030.jpg" alt="" class="img_login2030">
		</header>
		<div class="sp_20"></div>
		<section id="sertificate">
			<h2>Сертификаты:</h2>
			<a target="_blank" href="http://prog-school.ru/profile/login2030/" class="gb">gb</a>
		</section>
		<div class="sp_50"></div>
		<section id="contact">
			<h2>Связаться:</h2>
			<a href="skype:loginov-88?chat" class="svg_skype" title="Диалог в скайпе">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
					<path d="M6.65 0.584c-0.025-0.016-0.053-0.028-0.078-0.041-0.028 0.006-0.053 0.009-0.081 0.016l0.159 0.025z"></path>
					<path d="M0.575 6.578c-0.006 0.028-0.009 0.056-0.012 0.081 0.016 0.025 0.025 0.050 0.041 0.075l-0.028-0.156z"></path>
					<path d="M15.419 9.416c0.006-0.028 0.009-0.056 0.016-0.084-0.016-0.025-0.025-0.050-0.041-0.075l0.025 0.159z"></path>
					<path d="M9.25 15.359c0.025 0.016 0.053 0.028 0.078 0.041 0.028-0.006 0.056-0.009 0.084-0.012l-0.162-0.028z"></path>
					<path d="M15.434 9.331c-0.006 0.028-0.009 0.056-0.016 0.084l-0.028-0.162c0.016 0.028 0.028 0.053 0.044 0.078 0.081-0.45 0.125-0.909 0.125-1.369 0-1.019-0.2-2.009-0.594-2.941-0.381-0.9-0.925-1.709-1.619-2.403s-1.503-1.238-2.4-1.619c-0.931-0.394-1.922-0.594-2.941-0.594-0.481 0-0.963 0.044-1.431 0.134 0 0-0.003 0-0.003 0 0.025 0.012 0.053 0.025 0.078 0.041l-0.159-0.025c0.028-0.006 0.053-0.009 0.081-0.016-0.644-0.341-1.366-0.525-2.097-0.525-1.194 0-2.319 0.466-3.163 1.309s-1.309 1.969-1.309 3.163c0 0.759 0.197 1.509 0.563 2.169 0.006-0.028 0.009-0.056 0.012-0.081l0.028 0.159c-0.016-0.025-0.028-0.050-0.041-0.075-0.075 0.428-0.112 0.866-0.112 1.303 0 1.019 0.2 2.009 0.594 2.941 0.381 0.9 0.925 1.706 1.619 2.4s1.503 1.238 2.403 1.619c0.931 0.394 1.922 0.594 2.941 0.594 0.444 0 0.887-0.041 1.322-0.119-0.025-0.016-0.050-0.028-0.078-0.041l0.162 0.028c-0.028 0.006-0.056 0.009-0.084 0.012 0.669 0.378 1.428 0.581 2.2 0.581 1.194 0 2.319-0.466 3.162-1.309s1.309-1.969 1.309-3.162c-0.003-0.759-0.2-1.509-0.569-2.175zM8.034 12.591c-2.684 0-3.884-1.319-3.884-2.309 0-0.506 0.375-0.863 0.891-0.863 1.15 0 0.85 1.65 2.994 1.65 1.097 0 1.703-0.597 1.703-1.206 0-0.366-0.181-0.772-0.903-0.95l-2.388-0.597c-1.922-0.481-2.272-1.522-2.272-2.5 0-2.028 1.909-2.791 3.703-2.791 1.653 0 3.6 0.913 3.6 2.131 0 0.522-0.453 0.825-0.969 0.825-0.981 0-0.8-1.356-2.775-1.356-0.981 0-1.522 0.444-1.522 1.078s0.775 0.838 1.447 0.991l1.769 0.394c1.934 0.431 2.425 1.563 2.425 2.625 0 1.647-1.266 2.878-3.819 2.878z"></path>
				</svg>
			</a>
			<a target="_blank" href="http://vk.com/write15760394" class="svg_vk" title="Диалог вконтакте">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
					<path d="M14.5 0h-13c-0.825 0-1.5 0.675-1.5 1.5v13c0 0.825 0.675 1.5 1.5 1.5h13c0.825 0 1.5-0.675 1.5-1.5v-13c0-0.825-0.675-1.5-1.5-1.5zM12.959 11.2l-1.463 0.022c0 0-0.316 0.063-0.728-0.222-0.547-0.375-1.063-1.353-1.466-1.225-0.406 0.128-0.394 1.006-0.394 1.006s0.003 0.188-0.091 0.287c-0.1 0.109-0.3 0.131-0.3 0.131h-0.653c0 0-1.444 0.088-2.716-1.238-1.388-1.444-2.612-4.309-2.612-4.309s-0.072-0.188 0.006-0.278c0.087-0.103 0.322-0.109 0.322-0.109l1.566-0.009c0 0 0.147 0.025 0.253 0.103 0.088 0.063 0.134 0.184 0.134 0.184s0.253 0.641 0.588 1.219c0.653 1.128 0.959 1.375 1.181 1.256 0.322-0.175 0.225-1.597 0.225-1.597s0.006-0.516-0.162-0.744c-0.131-0.178-0.378-0.231-0.484-0.244-0.088-0.013 0.056-0.216 0.244-0.309 0.281-0.138 0.778-0.147 1.366-0.141 0.456 0.003 0.591 0.034 0.769 0.075 0.541 0.131 0.356 0.634 0.356 1.841 0 0.388-0.069 0.931 0.209 1.109 0.119 0.078 0.412 0.012 1.147-1.234 0.347-0.591 0.609-1.284 0.609-1.284s0.056-0.125 0.144-0.178c0.091-0.053 0.213-0.037 0.213-0.037l1.647-0.009c0 0 0.494-0.059 0.575 0.166 0.084 0.234-0.184 0.781-0.856 1.678-1.103 1.472-1.228 1.334-0.309 2.184 0.875 0.813 1.056 1.209 1.088 1.259 0.356 0.6-0.406 0.647-0.406 0.647z"></path>
				</svg>
			</a>
			<div class="clear"></div>
			<a href="mailto:loginov-solonitsyn@yandex.ru" class="svg_email clearfix inline-block" title="Написать на почту">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
					<path d="M8 0c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zM4 4h8c0.143 0 0.281 0.031 0.409 0.088l-4.409 5.143-4.409-5.143c0.127-0.058 0.266-0.088 0.409-0.088zM3 11v-6c0-0.021 0.001-0.042 0.002-0.063l2.932 3.421-2.9 2.9c-0.023-0.083-0.034-0.17-0.034-0.258zM12 12h-8c-0.088 0-0.175-0.012-0.258-0.034l2.846-2.846 1.413 1.648 1.413-1.648 2.846 2.846c-0.083 0.023-0.17 0.034-0.258 0.034zM13 11c0 0.088-0.012 0.175-0.034 0.258l-2.9-2.9 2.932-3.421c0.001 0.021 0.002 0.042 0.002 0.063v6z"></path>
				</svg>
				<p></p>
			</a>
			<div class="clear"></div>
			<a href="#" class="svg_tel clearfix inline-block" title="Позвонить по номеру">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
					<path d="M11.5 0h-7c-0.825 0-1.5 0.675-1.5 1.5v13c0 0.825 0.675 1.5 1.5 1.5h7c0.825 0 1.5-0.675 1.5-1.5v-13c0-0.825-0.675-1.5-1.5-1.5zM6 0.75h4v0.5h-4v-0.5zM8 15c-0.552 0-1-0.448-1-1s0.448-1 1-1 1 0.448 1 1-0.448 1-1 1zM12 12h-8v-10h8v10z"></path>
				</svg>
				<p></p>
			</a>
		</section>
		<div class="sp_50"></div>
		<!-- <section id="my_stack">
			<h2>my stack</h2>
			<div id="wrapper_circles" class="wpapper_circles clearfix">
				<?php //foreach ($skill as $name => $css) : ?>
					<div class="circle" style="<?//=$css?>">
						<p><?//=$name?></p>
					</div>
				<?php// endforeach; ?>
			</div>
		</section>
		<div class="sp_30"></div> -->
		<section id="my_skill">
			<h2>Знания:</h2>
			<input data-width="100" data-height="100" type="text" value="80" id="scill_1" class="111">
			<input data-width="100" data-height="100" type="text" value="70" id="scill_2">
			<input data-width="100" data-height="100" type="text" value="50" id="scill_3">
			<input data-width="100" data-height="100" type="text" value="30" id="scill_4">
		</section>
		<div class="sp_50"></div>
		<section id="works_wrapper">
			<h2>Проекты:</h2>
			<div id="works" class="clearfix">
				<?php foreach ($works as $index => $work) : ?>
				<section class="item_wrapper">
					<div class="item">
						<img src="images/works/<?=$work['image']?>" alt="">
						<div class="desc">
							<h3><a target="_blank" href="<?=$work['link']?>"><?=$work['name']?></a></h3>
							<div class="sp_20"></div>
							<p><?=$work['description']?></p>
							<a href="http://2rabbits.ru/"><?=$work['vendor']?></a>
						</div>
					</div>
				</section>
				<?php endforeach; ?>
			</div>
		</section>
	</main>
	<footer id="main_footer">
		
	</footer>
	<div id="popup_feedback" class="global_popup">
		<div class="popup_content">
			
		</div>
	</div>
</body>
</html>