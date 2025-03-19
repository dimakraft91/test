jQuery(document).ready(function($) {

								var sPath = window.location.pathname;
								var sPage = sPath;

								if (sPage == "" || sPage == "/") {
									sPage = "home";
								}
																
								if (sPage.length > 0 && sPage.substr(0,1)=="/") {
									sPage = sPage.substr(1);									
								}
														
								keywordForlink = "links";
								
								$("a[href*='/"+keywordForlink+"/'],input[onclick*='/"+keywordForlink+"/']").live('click',function(){
									
									var container_id = jQuery.trim($(this).parents("div").attr("id"));

									
									if (container_id == "") {
										container_id = "class-" + jQuery.trim($(this).parents("div").attr("class"));
									}
									
									
									var valueOrAnchor = "";
									var elementType = "";
									var str = "";

									if($(this).is("a")){
										str = $(this).attr("href");		
										valueOrAnchor =  jQuery.trim(($(this).text())) + "/";
										elementType = "link";
										galabel = "";
										if ($(this).attr("galabel")){
											galabel = $(this).attr("galabel");
										}
									}else if ($(this).is("input")){
										str = jQuery.trim($(this).attr("onclick"));
										valueOrAnchor = jQuery.trim($(this).attr("value")) + "/";
										elementType = "button";
									}
									
									titleText = jQuery.trim($(this).attr("title"));
									
									str = str.replace(keywordForlink,"#####");
									var myregexp = /(.*)\/(#####)\/(.*)(\/|'|"|$)/;
									myregexp.exec(str);

									var room_name_string = (RegExp.$3);
									
									if (room_name_string == "") {
										room_name_string = "noroom/";
									}
																		
					var id_clicked = String(elementType + "/" + valueOrAnchor + titleText + "/" + container_id + "/" + galabel);

					// Send to Google Analytics
					 var _gaq2 = _gaq || [];
					_gaq2.push(['_trackEvent', room_name_string, sPage, id_clicked] );
		
									});
								});