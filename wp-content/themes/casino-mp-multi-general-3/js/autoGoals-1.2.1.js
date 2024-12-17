jQuery(document).ready(function($) {

				var sPath = window.location.pathname;
				var $sPage = sPath;
				var googleAnalyticsAccount = 'UA-56665475-1'; //Analytics Code
                var googleAnalyticsParameters = '2';
				
				if ($sPage == "" || $sPage == "/") {
					$sPage = "home";
				}
				$("a[href*='/go/'],a[href*='/links/'],a[href*='/out/'],a[href*='/linker/'],input[onclick*='/links/']").live('click',function(){
					
					var $container_id = jQuery.trim($(this).parents("div").attr("id"));

					
					if ($container_id == "") {
						$container_id = "class-" + jQuery.trim($(this).parents("div").attr("class"));
					}
					
					if ($container_id != "") {
						$container_id += " section";
					}
					
					var valueOrAnchor = "";
					var elementType = "";
					var str = "";

					if($(this).is("a")){
						str = $(this).attr("href");		
						valueOrAnchor =  jQuery.trim(($(this).text()));
						elementType = "link";
					}else if ($(this).is("input")){
						str = jQuery.trim($(this).attr("onclick"));
						valueOrAnchor = jQuery.trim($(this).attr("value"));
						elementType = "button";
					}
					
					titleText = jQuery.trim($(this).attr("title"));
					
					var myregexp = /(go|links|out|linker)\/(.*)/;
					myregexp.exec(str);

					var $room_name_string = (RegExp.$2);
					
					if ($room_name_string == "") {
							$room_name_string = "noroom/";
					}
					
                    var $id_clicked = "";
                    
                    if (elementType!="") 
                        $id_clicked=$id_clicked+elementType+"/";
                    if (valueOrAnchor!="") 
                        $id_clicked=$id_clicked+valueOrAnchor+"/";
                    if (titleText!="") 
                        $id_clicked=$id_clicked+titleText+"/";
                    if ($container_id!="") 
                        $id_clicked=$id_clicked+$container_id + "-7";
                    
                    var $bLocation=$(this).attr('rel');

					// Send to Analytics	
					_gaq.push(['_setAccount', googleAnalyticsAccount]);
					if (googleAnalyticsParameters==1 || googleAnalyticsParameters=="")
                        //alert("_gaq.push(['_trackEvent', "+$room_name_string+","+ $sPage+","+$id_clicked+"]);");
                        _gaq.push(['_trackEvent', $room_name_string, $sPage] );
                    else if (googleAnalyticsParameters==2)
                        //alert("_gaq.push(['_trackEvent', "+ $sPage+"---"+$bLocation+"---"+ $room_name_string+","+$room_name_string+"---"+$sPage+"---"+$bLocation+"] );");
                        _gaq.push(['_trackEvent', $room_name_string, $sPage, $room_name_string+'---'+$sPage] );
				});

		});