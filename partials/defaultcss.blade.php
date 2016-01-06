{{favicon()}}

<!-- Default css-->
@if($tema->isiCss=='')	
{{generate_theme_css('casualsport/assets/css/style.css')}}
@else 	
{{generate_theme_css('casualsport/assets/css/editstyle.css')}}
@endif	
{{generate_theme_css('casualsport/assets/css/jquery.fancybox.css')}}
{{generate_theme_css('casualsport/assets/css/owl.carousel.css')}}
{{generate_theme_css('casualsport/assets/css/owl.theme.css')}}
