<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Annam Parlour</title>
    <link rel="shortcut icon" href="<?php echo get_parent_theme_file_uri('favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_parent_theme_file_uri('favicon.ico')?>" type="image/x-icon">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri().'/assets/js/jquery.min.js'; ?>"></script>
    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/bootstrap.min.css';?>">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/bootstrap-theme.min.css';?>">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time()?>" />
	
	<!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	<script src="<?php echo get_template_directory_uri().'/assets/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript">
    $(document).ready(function() {
		$('.ap-input-number .down').click(function(e) {
			var pr = $(this).parent();
			var input = pr.find('input');
			var value = input.val();
			if (!Number.isInteger(parseInt(value))) {
				value = 2;
			} else if (value == 1) {
				return;
			}
			input.val(parseInt(value) - 1);
			input.trigger('change');
		});
		$('.ap-input-number .up').click(function(e) {
			var pr = $(this).parent();
			var input = pr.find('input');
			var value = input.val();
			if (!Number.isInteger(parseInt(value))) {
				value = 0;
			}
			input.val(parseInt(value) + 1);
			input.trigger('change');
		});
		$.ajaxSetup({
			beforeSend : function(xhr) {
				$('body').addClass('ap-waiting');
			},
			complete : function(xhr,status) {
				$('body').removeClass('ap-waiting');
			}
		});

		/* $('#menu-center .navbar-nav>li>a.dropdown-toggle').hover(function(e) {
			$(this).next().show();
		});
		$('#menu-center .navbar-nav>li>a.dropdown-toggle').mouseout(function(e) {
			var w = $(window).width();
			if (w <= 768) {
				return;
			}
		
			$(this).next().hide();
		}); */
    });
	function activeMenu(menu)
	{
		$('#menu-center .active').removeClass('active');
		menu.addClass('active');
	}
	function number_format (number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase
		  //  discuss at: http://locutus.io/php/number_format/
		  // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
		  // improved by: Kevin van Zonneveld (http://kvz.io)
		  // improved by: davook
		  // improved by: Brett Zamir (http://brett-zamir.me)
		  // improved by: Brett Zamir (http://brett-zamir.me)
		  // improved by: Theriault (https://github.com/Theriault)
		  // improved by: Kevin van Zonneveld (http://kvz.io)
		  // bugfixed by: Michael White (http://getsprink.com)
		  // bugfixed by: Benjamin Lupton
		  // bugfixed by: Allan Jensen (http://www.winternet.no)
		  // bugfixed by: Howard Yeend
		  // bugfixed by: Diogo Resende
		  // bugfixed by: Rival
		  // bugfixed by: Brett Zamir (http://brett-zamir.me)
		  //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
		  //  revised by: Luke Smith (http://lucassmith.name)
		  //    input by: Kheang Hok Chin (http://www.distantia.ca/)
		  //    input by: Jay Klehr
		  //    input by: Amir Habibi (http://www.residence-mixte.com/)
		  //    input by: Amirouche
		  //   example 1: number_format(1234.56)
		  //   returns 1: '1,235'
		  //   example 2: number_format(1234.56, 2, ',', ' ')
		  //   returns 2: '1 234,56'
		  //   example 3: number_format(1234.5678, 2, '.', '')
		  //   returns 3: '1234.57'
		  //   example 4: number_format(67, 2, ',', '.')
		  //   returns 4: '67,00'
		  //   example 5: number_format(1000)
		  //   returns 5: '1,000'
		  //   example 6: number_format(67.311, 2)
		  //   returns 6: '67.31'
		  //   example 7: number_format(1000.55, 1)
		  //   returns 7: '1,000.6'
		  //   example 8: number_format(67000, 5, ',', '.')
		  //   returns 8: '67.000,00000'
		  //   example 9: number_format(0.9, 0)
		  //   returns 9: '1'
		  //  example 10: number_format('1.20', 2)
		  //  returns 10: '1.20'
		  //  example 11: number_format('1.20', 4)
		  //  returns 11: '1.2000'
		  //  example 12: number_format('1.2000', 3)
		  //  returns 12: '1.200'
		  //  example 13: number_format('1 000,50', 2, '.', ' ')
		  //  returns 13: '100 050.00'
		  //  example 14: number_format(1e-8, 8, '.', '')
		  //  returns 14: '0.00000001'
		  number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
		  var n = !isFinite(+number) ? 0 : +number
		  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
		  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
		  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
		  var s = ''
		  var toFixedFix = function (n, prec) {
		    var k = Math.pow(10, prec)
		    return '' + (Math.round(n * k) / k)
		      .toFixed(prec)
		  }
		  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
		  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
		  if (s[0].length > 3) {
		    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
		  }
		  if ((s[1] || '').length < prec) {
		    s[1] = s[1] || ''
		    s[1] += new Array(prec - s[1].length + 1).join('0')
		  }
		  return s.join(dec)
		}
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header" class="container">
			<nav class="navbar navbar-default" role="navigation" id="header-menu">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-center">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
            
              <!-- Collect the nav links, forms, and other content for toggling -->
              <?php wp_nav_menu(array(
              		//'menu' => 'menu-top-menu',
              		'theme_location' => 'main-menu',
              		'menu_class' => 'nav navbar-nav navbar-center',
              		'container_class' => 'collapse navbar-collapse',
              		'container_id' => 'menu-center',
              		// 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              		// 'walker' => new WP_Bootstrap_Navwalker()
              ));?>
            </nav>
		</header>
		<div id="container" class="">