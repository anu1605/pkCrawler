<input type="hidden" id="hiddenticketid" name="hiddenticketid"  />
<input type="hidden" id="hiddentoken" name="hiddentoken"  />
<input type="hidden" id="pageheight" name="pageheight" value="913" />
<input type="hidden" id="hiddensubscribeuser" name="hiddensubscribeuser"  />
<input type="hidden" id="hiddenssoid" name="hiddenssoid"  />
<input type="hidden" id="hiddenads" name="hiddenads"  />


<input type="hidden" id="pagerefreshparent" name="pagerefreshparent" value="false" />
<input type="hidden" id="pagerefresh" name="pagerefresh" value="false" />
<input type="hidden" id="viashare" name="viashare" value="Live_Hindustan" />


	<input type="hidden" id="hiddenroman" name="hiddenroman" value="false" />
	<input type="hidden" id="hiddenromancount" name="hiddenromancount" value="" />
<!--For  Crop Page Start-->
<!-- For Double page mode devide height from singlepage to doublepage size and same for width.  -->
<!--For Crop Page End-->

<!-- For User Function Single & Double Page Start-->
<!-- For User Function Single & Double Page End-->

<!--For Jquery MapLight Start -->
<input type="hidden" id="flgfortextviews" name="flgfortextviews" value="0" />
<input type="hidden" id="flgforimageviews" name="flgforimageviews" value="1" />

<input type="hidden" id="showpopup_text_img_view" name="showpopup_text_img_view" value="1" />

<input type="hidden" id="ediName_p" name="ediName_p" value="delhi" />
<input type="hidden" id="subEdiName_p" name="subEdiName_p" value="Delhi-NCR" />



<!--For Jquery MapLight Start -->

<!-- Ads Block Start-->
<input type="hidden" id="checkvalsforres" name="checkvalsforres" value="" />
<!-- Ads Block End-->

<script>
function clickvideos(val,pages,editioncode,pagedates)
{
			xmlHttp=GetXmlHttpObject()
			if (xmlHttp==null)
			{
				alert ("Browser does not support HTTP Request")
				return
			}
			pagedate=document.getElementById("pgdate").value;
			var url="https://epaper.navbharattimes.com/adsajax.php?adsid="+val+"&pages="+pages+"&pagedate="+pagedate+"&editioncode="+editioncode;
			xmlHttp.onreadystatechange=adsres
			xmlHttp.open("GET",url,true)
			xmlHttp.send(null)
			return false;
			
			//($jj('#share_form')[0]).innerHTML=httpresponsess;
			document.getElementById('hdss_'+val).style.display='block';
			document.getElementById('hdsss_'+val).style.opacity = '10';
			document.getElementById('hdsss_'+val).style.background = '';
			return false;
}

function adsres()
{
	 if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {

			window.addEventListener ("wheel", function (event) { event.preventDefault (); }, {passive: false});
	

	 		var httpresponsess =xmlHttp.responseText;
			httpresponsess=trim(httpresponsess);
			$jj('#basic-modal-content').modal();
			$jj('#login_form').hide();
			$jj('#reg_form').hide();
			$jj('#share_form').hide();
			$jj('#ads_form').show();
			($jj('#ads_form')[0]).innerHTML=httpresponsess;
	}
}


function clickphotos(val){
	document.getElementById('hdss_'+val).style.display='block';
	return false;
}


/*$(".simplemodal-close").on('click', function(event){
	alert('herer');
    event.stopPropagation();
    event.stopImmediatePropagation();
    //(... rest of your JS code)
});*/

</script>

<style>

/* W3.CSS 4.12 November 2018 by Jan Egil and Borge Refsnes */
html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}
article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}
audio,canvas,progress,video{display:inline-block}progress{vertical-align:baseline}
audio:not([controls]){display:none;height:0}[hidden],template{display:none}
a{background-color:transparent;-webkit-text-decoration-skip:objects}
a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}
dfn{font-style:italic}mark{background:#ff0;color:#000}
small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sub{bottom:-0.25em}sup{top:-0.5em}figure{margin:1em 40px}img{border-style:none}svg:not(:root){overflow:hidden}
code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}hr{box-sizing:content-box;height:0;overflow:visible}
button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:bold}
button,input{overflow:visible}button,select{text-transform:none}
button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
button::-moz-focus-inner, [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner{border-style:none;padding:0}
button:-moz-focusring, [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring{outline:1px dotted ButtonText}
fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}
[type=checkbox],[type=radio]{padding:0}
[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}
[type=search]{-webkit-appearance:textfield;outline-offset:-2px}
[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}
::-webkit-input-placeholder{color:inherit;opacity:0.54}
::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
/* End extract */
html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.w3-serif{font-family:serif}
h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:600;margin:4px 0;font-size: 15px;}.w3-wide{letter-spacing:4px}
hr{border:0;border-top:1px solid #eee;margin:20px 0}
.w3-image{max-width:100%;height:auto}img{vertical-align:middle}a{color:inherit}
.w3-table,.w3-table-all{border-collapse:collapse;border-spacing:0;width:100%;display:table}.w3-table-all{border:1px solid #ccc}
.w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #ddd}.w3-striped tbody tr:nth-child(even){background-color:#f1f1f1}
.w3-table-all tr:nth-child(odd){background-color:#fff}.w3-table-all tr:nth-child(even){background-color:#f1f1f1}
.w3-hoverable tbody tr:hover,.w3-ul.w3-hoverable li:hover{background-color:#ccc}.w3-centered tr th,.w3-centered tr td{text-align:center}
.w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{padding:8px 8px;display:table-cell;text-align:left;vertical-align:top}
.w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px}
.w3-btn,.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.w3-btn:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}
.w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
.w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
.w3-btn.w3-disabled:hover,.w3-btn:disabled:hover{box-shadow:none}
.w3-badge,.w3-tag{background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}.w3-badge{border-radius:50%}
.w3-ul{list-style-type:none;padding:0;margin:0}.w3-ul li{padding:8px 16px;border-bottom:1px solid #ddd}.w3-ul li:last-child{border-bottom:none}
.w3-tooltip,.w3-display-container{position:relative}.w3-tooltip .w3-text{display:none}.w3-tooltip:hover .w3-text{display:inline-block}
.w3-ripple:active{opacity:0.5}.w3-ripple{transition:opacity 0s}
.w3-input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
.w3-select{padding:9px 0;width:100%;border:none;border-bottom:1px solid #ccc}
.w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
.w3-dropdown-hover:hover .w3-dropdown-content{display:block}
.w3-dropdown-hover:first-child,.w3-dropdown-click:hover{background-color:#ccc;color:#000}
.w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:#000}
.w3-dropdown-content{cursor:auto;color:#000;background-color:#fff;display:none;position:absolute;min-width:160px;margin:0;padding:0;z-index:1}
.w3-check,.w3-radio{width:24px;height:24px;position:relative;top:6px}
.w3-sidebar{height:100%;width:200px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
.w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-main,#main{transition:margin-left .4s}
.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-bar .w3-button{white-space:normal}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
.w3-responsive{display:block;overflow-x:auto}
.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:100%}
.w3-col.s1{width:8.33333%}.w3-col.s2{width:16.66666%}.w3-col.s3{width:24.99999%}.w3-col.s4{width:33.33333%}
.w3-col.s5{width:41.66666%}.w3-col.s6{width:49.99999%}.w3-col.s7{width:58.33333%}.w3-col.s8{width:66.66666%}
.w3-col.s9{width:74.99999%}.w3-col.s10{width:83.33333%}.w3-col.s11{width:91.66666%}.w3-col.s12{width:99.99999%}
@media (min-width:601px){.w3-col.m1{width:8.33333%}.w3-col.m2{width:16.66666%}.w3-col.m3,.w3-quarter{width:24.99999%}.w3-col.m4,.w3-third{width:33.33333%}
.w3-col.m5{width:41.66666%}.w3-col.m6,.w3-half{width:49.99999%}.w3-col.m7{width:58.33333%}.w3-col.m8,.w3-twothird{width:66.66666%}
.w3-col.m9,.w3-threequarter{width:74.99999%}.w3-col.m10{width:83.33333%}.w3-col.m11{width:91.66666%}.w3-col.m12{width:99.99999%}}
@media (min-width:993px){.w3-col.l1{width:8.33333%}.w3-col.l2{width:16.66666%}.w3-col.l3{width:24.99999%}.w3-col.l4{width:33.33333%}
.w3-col.l5{width:41.66666%}.w3-col.l6{width:49.99999%}.w3-col.l7{width:58.33333%}.w3-col.l8{width:66.66666%}
.w3-col.l9{width:74.99999%}.w3-col.l10{width:83.33333%}.w3-col.l11{width:91.66666%}.w3-col.l12{width:99.99999%}}
.w3-rest{overflow:hidden}.w3-stretch{margin-left:-16px;margin-right:-16px}
.w3-content,.w3-auto{margin-left:auto;margin-right:auto}.w3-content{max-width:980px}.w3-auto{max-width:1140px}
.w3-cell-row{display:table;width:100%}.w3-cell{display:table-cell}
.w3-cell-top{vertical-align:top}.w3-cell-middle{vertical-align:middle}.w3-cell-bottom{vertical-align:bottom}
.w3-hide{display:none!important}.w3-show-block,.w3-show{display:block!important}.w3-show-inline-block{display:inline-block!important}
@media (max-width:1205px){.w3-auto{max-width:95%}}
@media (max-width:600px){.w3-modal-content{margin:0 10px;width:auto!important}.w3-modal{padding-top:30px}
.w3-dropdown-hover.w3-mobile .w3-dropdown-content,.w3-dropdown-click.w3-mobile .w3-dropdown-content{position:relative}	
.w3-hide-small{display:none!important}.w3-mobile{display:block;width:100%!important}.w3-bar-item.w3-mobile,.w3-dropdown-hover.w3-mobile,.w3-dropdown-click.w3-mobile{text-align:center}
.w3-dropdown-hover.w3-mobile,.w3-dropdown-hover.w3-mobile .w3-btn,.w3-dropdown-hover.w3-mobile .w3-button,.w3-dropdown-click.w3-mobile,.w3-dropdown-click.w3-mobile .w3-btn,.w3-dropdown-click.w3-mobile .w3-button{width:100%}}
@media (max-width:768px){.w3-modal-content{width:500px}.w3-modal{padding-top:50px}}
@media (min-width:993px){.w3-modal-content{width:900px}.w3-hide-large{display:none!important}.w3-sidebar.w3-collapse{display:block!important}}
@media (max-width:992px) and (min-width:601px){.w3-hide-medium{display:none!important}}
@media (max-width:992px){.w3-sidebar.w3-collapse{display:none}.w3-main{margin-left:0!important;margin-right:0!important}.w3-auto{max-width:100%}}
.w3-top,.w3-bottom{position:fixed;width:100%;z-index:1}.w3-top{top:0}.w3-bottom{bottom:0}
.w3-overlay{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);z-index:2}
.w3-display-topleft{position:absolute;left:0;top:0}.w3-display-topright{position:absolute;right:0;top:0}
.w3-display-bottomleft{position:absolute;left:0;bottom:0}.w3-display-bottomright{position:absolute;right:0;bottom:0}
.w3-display-middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
.w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
.w3-display-topmiddle{position:absolute;left:50%;top:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
.w3-display-bottommiddle{position:absolute;left:50%;bottom:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
.w3-display-container:hover .w3-display-hover{display:block}.w3-display-container:hover span.w3-display-hover{display:inline-block}.w3-display-hover{display:none}
.w3-display-position{position:absolute}
.w3-circle{border-radius:50%}
.w3-round-small{border-radius:2px}.w3-round,.w3-round-medium{border-radius:4px}.w3-round-large{border-radius:8px}.w3-round-xlarge{border-radius:16px}.w3-round-xxlarge{border-radius:32px}
.w3-row-padding,.w3-row-padding>.w3-half,.w3-row-padding>.w3-third,.w3-row-padding>.w3-twothird,.w3-row-padding>.w3-threequarter,.w3-row-padding>.w3-quarter,.w3-row-padding>.w3-col{padding:0 8px}
.w3-container,.w3-panel{padding:0.01em 16px}.w3-panel{margin-top:16px;margin-bottom:16px}
.w3-code,.w3-codespan{font-family:Consolas,"courier new";font-size:16px}
.w3-code{width:auto;background-color:#fff;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
.w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
.w3-card,.w3-card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
.w3-card-4,.w3-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
.w3-spin{animation:w3-spin 2s infinite linear}@keyframes w3-spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}
.w3-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.w3-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
.w3-animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
.w3-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.w3-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
.w3-animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
.w3-animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
.w3-animate-input{transition:width 0.4s ease-in-out}.w3-animate-input:focus{width:100%!important}
.w3-opacity,.w3-hover-opacity:hover{opacity:0.60}.w3-opacity-off,.w3-hover-opacity-off:hover{opacity:1}
.w3-opacity-max{opacity:0.25}.w3-opacity-min{opacity:0.75}
.w3-greyscale-max,.w3-grayscale-max,.w3-hover-greyscale:hover,.w3-hover-grayscale:hover{filter:grayscale(100%)}
.w3-greyscale,.w3-grayscale{filter:grayscale(75%)}.w3-greyscale-min,.w3-grayscale-min{filter:grayscale(50%)}
.w3-sepia{filter:sepia(75%)}.w3-sepia-max,.w3-hover-sepia:hover{filter:sepia(100%)}.w3-sepia-min{filter:sepia(50%)}
.w3-tiny{font-size:10px!important}.w3-small{font-size:12px!important}.w3-medium{font-size:15px!important}.w3-large{font-size:18px!important}
.w3-xlarge{font-size:24px!important}.w3-xxlarge{font-size:36px!important}.w3-xxxlarge{font-size:48px!important}.w3-jumbo{font-size:64px!important}
.w3-left-align{text-align:left!important}.w3-right-align{text-align:right!important}.w3-justify{text-align:justify!important}.w3-center{text-align:center!important}
.w3-border-0{border:0!important}.w3-border{border:1px solid #ccc!important}
.w3-border-top{border-top:1px solid #ccc!important}.w3-border-bottom{border-bottom:1px solid #ccc!important}
.w3-border-left{border-left:1px solid #ccc!important}.w3-border-right{border-right:1px solid #ccc!important}
.w3-topbar{border-top:6px solid #ccc!important}.w3-bottombar{border-bottom:6px solid #ccc!important}
.w3-leftbar{border-left:6px solid #ccc!important}.w3-rightbar{border-right:6px solid #ccc!important}
.w3-section,.w3-code{margin-top:16px!important;margin-bottom:16px!important}
.w3-margin{margin:16px!important}.w3-margin-top{margin-top:16px!important}.w3-margin-bottom{margin-bottom:16px!important}
.w3-margin-left{margin-left:16px!important}.w3-margin-right{margin-right:16px!important}
.w3-padding-small{padding:4px 8px!important}.w3-padding{padding:8px 16px!important}.w3-padding-large{padding:12px 24px!important}
.w3-padding-16{padding-top:16px!important;padding-bottom:16px!important}.w3-padding-24{padding-top:24px!important;padding-bottom:24px!important}
.w3-padding-32{padding-top:32px!important;padding-bottom:32px!important}.w3-padding-48{padding-top:48px!important;padding-bottom:48px!important}
.w3-padding-64{padding-top:64px!important;padding-bottom:64px!important}
.w3-left{float:left!important}.w3-right{float:right!important}
.w3-button:hover{color:#000!important;background-color:#ccc!important}
.w3-transparent,.w3-hover-none:hover{background-color:transparent!important}
.w3-hover-none:hover{box-shadow:none!important}
/* Colors */
.w3-amber,.w3-hover-amber:hover{color:#000!important;background-color:#ffc107!important}
.w3-aqua,.w3-hover-aqua:hover{color:#000!important;background-color:#00ffff!important}
.w3-blue,.w3-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
.w3-light-blue,.w3-hover-light-blue:hover{color:#000!important;background-color:#87CEEB!important}
.w3-brown,.w3-hover-brown:hover{color:#fff!important;background-color:#795548!important}
.w3-cyan,.w3-hover-cyan:hover{color:#000!important;background-color:#00bcd4!important}
.w3-blue-grey,.w3-hover-blue-grey:hover,.w3-blue-gray,.w3-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
.w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
.w3-light-green,.w3-hover-light-green:hover{color:#000!important;background-color:#8bc34a!important}
.w3-indigo,.w3-hover-indigo:hover{color:#fff!important;background-color:#3f51b5!important}
.w3-khaki,.w3-hover-khaki:hover{color:#000!important;background-color:#f0e68c!important}
.w3-lime,.w3-hover-lime:hover{color:#000!important;background-color:#cddc39!important}
.w3-orange,.w3-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
.w3-deep-orange,.w3-hover-deep-orange:hover{color:#fff!important;background-color:#ff5722!important}
.w3-pink,.w3-hover-pink:hover{color:#fff!important;background-color:#e91e63!important}
.w3-purple,.w3-hover-purple:hover{color:#fff!important;background-color:#9c27b0!important}
.w3-deep-purple,.w3-hover-deep-purple:hover{color:#fff!important;background-color:#673ab7!important}
.w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
.w3-sand,.w3-hover-sand:hover{color:#000!important;background-color:#fdf5e6!important}
.w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#009688!important}
.w3-yellow,.w3-hover-yellow:hover{color:#000!important;background-color:#ffeb3b!important}
.w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
.w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.w3-grey,.w3-hover-grey:hover,.w3-gray,.w3-hover-gray:hover{color:#000!important;background-color:#9e9e9e!important}
.w3-light-grey,.w3-hover-light-grey:hover,.w3-light-gray,.w3-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
.w3-dark-grey,.w3-hover-dark-grey:hover,.w3-dark-gray,.w3-hover-dark-gray:hover{color:#fff!important;background-color:#616161!important}
.w3-pale-red,.w3-hover-pale-red:hover{color:#000!important;background-color:#ffdddd!important}
.w3-pale-green,.w3-hover-pale-green:hover{color:#000!important;background-color:#ddffdd!important}
.w3-pale-yellow,.w3-hover-pale-yellow:hover{color:#000!important;background-color:#ffffcc!important}
.w3-pale-blue,.w3-hover-pale-blue:hover{color:#000!important;background-color:#ddffff!important}
.w3-text-amber,.w3-hover-text-amber:hover{color:#ffc107!important}
.w3-text-aqua,.w3-hover-text-aqua:hover{color:#00ffff!important}
.w3-text-blue,.w3-hover-text-blue:hover{color:#2196F3!important}
.w3-text-light-blue,.w3-hover-text-light-blue:hover{color:#87CEEB!important}
.w3-text-brown,.w3-hover-text-brown:hover{color:#795548!important}
.w3-text-cyan,.w3-hover-text-cyan:hover{color:#00bcd4!important}
.w3-text-blue-grey,.w3-hover-text-blue-grey:hover,.w3-text-blue-gray,.w3-hover-text-blue-gray:hover{color:#607d8b!important}
.w3-text-green,.w3-hover-text-green:hover{color:#4CAF50!important}
.w3-text-light-green,.w3-hover-text-light-green:hover{color:#8bc34a!important}
.w3-text-indigo,.w3-hover-text-indigo:hover{color:#3f51b5!important}
.w3-text-khaki,.w3-hover-text-khaki:hover{color:#b4aa50!important}
.w3-text-lime,.w3-hover-text-lime:hover{color:#cddc39!important}
.w3-text-orange,.w3-hover-text-orange:hover{color:#ff9800!important}
.w3-text-deep-orange,.w3-hover-text-deep-orange:hover{color:#ff5722!important}
.w3-text-pink,.w3-hover-text-pink:hover{color:#e91e63!important}
.w3-text-purple,.w3-hover-text-purple:hover{color:#9c27b0!important}
.w3-text-deep-purple,.w3-hover-text-deep-purple:hover{color:#673ab7!important}
.w3-text-red,.w3-hover-text-red:hover{color:#f44336!important}
.w3-text-sand,.w3-hover-text-sand:hover{color:#fdf5e6!important}
.w3-text-teal,.w3-hover-text-teal:hover{color:#009688!important}
.w3-text-yellow,.w3-hover-text-yellow:hover{color:#d2be0e!important}
.w3-text-white,.w3-hover-text-white:hover{color:#fff!important}
.w3-text-black,.w3-hover-text-black:hover{color:#000!important}
.w3-text-grey,.w3-hover-text-grey:hover,.w3-text-gray,.w3-hover-text-gray:hover{color:#757575!important}
.w3-text-light-grey,.w3-hover-text-light-grey:hover,.w3-text-light-gray,.w3-hover-text-light-gray:hover{color:#f1f1f1!important}
.w3-text-dark-grey,.w3-hover-text-dark-grey:hover,.w3-text-dark-gray,.w3-hover-text-dark-gray:hover{color:#3a3a3a!important}
.w3-border-amber,.w3-hover-border-amber:hover{border-color:#ffc107!important}
.w3-border-aqua,.w3-hover-border-aqua:hover{border-color:#00ffff!important}
.w3-border-blue,.w3-hover-border-blue:hover{border-color:#2196F3!important}
.w3-border-light-blue,.w3-hover-border-light-blue:hover{border-color:#87CEEB!important}
.w3-border-brown,.w3-hover-border-brown:hover{border-color:#795548!important}
.w3-border-cyan,.w3-hover-border-cyan:hover{border-color:#00bcd4!important}
.w3-border-blue-grey,.w3-hover-border-blue-grey:hover,.w3-border-blue-gray,.w3-hover-border-blue-gray:hover{border-color:#607d8b!important}
.w3-border-green,.w3-hover-border-green:hover{border-color:#4CAF50!important}
.w3-border-light-green,.w3-hover-border-light-green:hover{border-color:#8bc34a!important}
.w3-border-indigo,.w3-hover-border-indigo:hover{border-color:#3f51b5!important}
.w3-border-khaki,.w3-hover-border-khaki:hover{border-color:#f0e68c!important}
.w3-border-lime,.w3-hover-border-lime:hover{border-color:#cddc39!important}
.w3-border-orange,.w3-hover-border-orange:hover{border-color:#ff9800!important}
.w3-border-deep-orange,.w3-hover-border-deep-orange:hover{border-color:#ff5722!important}
.w3-border-pink,.w3-hover-border-pink:hover{border-color:#e91e63!important}
.w3-border-purple,.w3-hover-border-purple:hover{border-color:#9c27b0!important}
.w3-border-deep-purple,.w3-hover-border-deep-purple:hover{border-color:#673ab7!important}
.w3-border-red,.w3-hover-border-red:hover{border-color:#f44336!important}
.w3-border-sand,.w3-hover-border-sand:hover{border-color:#fdf5e6!important}
.w3-border-teal,.w3-hover-border-teal:hover{border-color:#009688!important}
.w3-border-yellow,.w3-hover-border-yellow:hover{border-color:#ffeb3b!important}
.w3-border-white,.w3-hover-border-white:hover{border-color:#fff!important}
.w3-border-black,.w3-hover-border-black:hover{border-color:#000!important}
.w3-border-grey,.w3-hover-border-grey:hover,.w3-border-gray,.w3-hover-border-gray:hover{border-color:#9e9e9e!important}
.w3-border-light-grey,.w3-hover-border-light-grey:hover,.w3-border-light-gray,.w3-hover-border-light-gray:hover{border-color:#f1f1f1!important}
.w3-border-dark-grey,.w3-hover-border-dark-grey:hover,.w3-border-dark-gray,.w3-hover-border-dark-gray:hover{border-color:#616161!important}
.w3-border-pale-red,.w3-hover-border-pale-red:hover{border-color:#ffe7e7!important}.w3-border-pale-green,.w3-hover-border-pale-green:hover{border-color:#e7ffe7!important}
.w3-border-pale-yellow,.w3-hover-border-pale-yellow:hover{border-color:#ffffcc!important}.w3-border-pale-blue,.w3-hover-border-pale-blue:hover{border-color:#e7ffff!important}


.mySlides {display:none;}
</style>
<style>
.bg-images-audio
{
	background-image: url('/images/Audio_Player.jpg') !important;
	background-repeat: no-repeat !important;
	cursor: pointer;
	opacity: 0.6;
	z-index: 9999; position: absolute;
 	background-position: center;
	/*background:#d8e4e4;*/
    width: 159px !important;
    height: 100px !important;
}
.bg-images
{
	background-image: url('/images/Video_Player.png') !important;
	background-repeat: no-repeat !important;
	cursor: pointer;
	/*opacity: 0.6;*/
	z-index: 9999; position: absolute;
 	background-position: center;
	/*background:#d8e4e4;*/
    width: 159px !important;
    height: 100px !important;
}

.bg-images_photo{

	cursor: pointer;
	z-index: 9999; position: absolute;
 	background-position: center;
	/*background:#d8e4e4;*/
	background-image: url('/images/gall.png') !important;
	background-repeat: no-repeat !important;


}

</style>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {

 return false;
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Navbharat Times ePaper: Hindi ePaper, EPaper Download, Online Epaper, Newspaper in Hindi, Today Newspaper</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Navbharat Times ePaper: NBT is an online Hindi news epaper. Navbharat Times one of the most populer online hindi newspaper. Read your city daily epaper"/>
<meta name="keywords" content="Navbharat Times ePaper, News, Newspaper, Download hindi epaper, Newspaper in Hindi, Hindi News paper, Hindi newspapers, Newspaper online, online Hindi Newspaper, daily epaper "/>
<meta name="news_keywords" content="Navbharat Times ePaper, News, Newspaper, Download hindi epaper, Newspaper in Hindi, Hindi News paper, Hindi newspapers, Newspaper online, online Hindi Newspaper, daily epaper "/>
<link rel="canonical" href="https://vsp1deskepaper.navbharattimes.com/delhi/2023-05-17/13/page-1.html" />
<link rel="alternate" href="https://vsp1deskepaper.navbharattimes.com/delhi/2023-05-17/13/page-1.html" /> 
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<meta name="google-site-verification" content="N4jMx4vEgZIsm9_qDQfEq13Nj9cK5-39KqtkPH3K2xc" />

<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    #background: url('/images/loader.gif') 50% 70% no-repeat rgb(249,249,249);
    background: url('/images/loader.gif') 50% 70% no-repeat;
    opacity: .9;
}
</style>
<style>
.blinking{
	animation:blinkingText 0.8s infinite;
}
@keyframes blinkingText{
	0%{		color: #9e760c;	}
	100%{	color: #ffd25a;	}
	
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type='text/javascript' src='/jquery-1.9.1.min.js'></script> 
<script type='text/javascript'> 
function getCookiehds(name)
{
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
}

$(document).ready(function(){
	var checkdddd =getCookiehds('en_name');
	var check_ticket =getCookiehds('en_ticket');
	var check_ssoid =getCookiehds('en_ssoid');
	var check_archive =getCookiehds('en_archive');
	
		if(check_archive=="hds"){
			//document.getElementById('div-gpt-ad-1604383079673-0').style.display="block";
			//document.getElementById('div-gpt-ad-1604383129443-0').style.display="block";
			//document.getElementById('s1_hds').style.display="none";
			//document.getElementById('div-gpt-ad-1604383180665-0').style.display="block";
			//document.getElementById('s2_hds').style.display="none";
			//document.getElementById('div-clmb-ctn-352406-1').style.display="block";
			document.getElementById('s3_hds').style.display="block";
			document.getElementById('l11_hds_33').style.display="block";
			document.getElementById('l11_hds_22').style.display="block";
			document.getElementById('l12_hds_22').style.display="block";
			document.getElementById('ff_dsss').style.display="block";

			document.getElementById('archivesh').style.display="inline-block";
		}

	
	
		if(checkdddd!=null){
					document.getElementById('hiddenticketid').value=check_ticket;
					document.getElementById('hiddentoken').value=checkdddd;
					document.getElementById('hiddenssoid').value=check_ssoid;
	
					document.getElementById('profilephtml').innerHTML="Welcome, "+checkdddd +"";
					document.getElementById('loginp').style.display="none";
					document.getElementById('profilep').style.display="inline-block";
					document.getElementById('logoutip').style.display="inline-block";
		}
		openmypage('1');
//		checkcookie();
});
</script>

<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1064661/Epaper_NBT_Desktop/ENBT_DTP_ROS_ATF_300', [[250, 250], [300, 250]], 'div-gpt-ad-1630775340553-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1064661/Epaper_NBT_Desktop/ENBT_DTP_ROS_ATF_728', [[970, 250], [728, 90], [970, 90]], 'div-gpt-ad-1630775368459-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1064661/Epaper_NBT_Desktop/ENBT_DTP_ROS_BTF_300', [[250, 250], [300, 250]], 'div-gpt-ad-1630775393918-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<!--<script>
try{
            (function() {
             var cads = document.createElement("script");
             cads.async = true;
             cads.type = "text/javascript";
             cads.src = "https://static.clmbtech.com/ad/commons/js/colombia_v2.js";
             var node = document.getElementsByTagName("script")[0];
             node.parentNode.insertBefore(cads, node);
            })();
                      }catch(e){}

</script>-->


<script><!--<![CDATA[-->
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2N9HPW');
<!--]]>--></script>
<!-- End Google Tag Manager -->
<!--</xsl:if>-->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2N9HPW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>



<script type='text/javascript'>  
var $jqnew = jQuery.noConflict(); 
var newHeight;
var newWid; 
</script>  
<script>
var flagstyperes="true";
var selectedflag="true";
var imgview="true";
</script>
<style>
            
.hteRightPanelUL li a { background: #fff; color:#a52b2b; border:0px solid #a52b2b;}
.hteRightPanelUL li.logedinsso a { border:none !important;
	font-weight:bold; color:#000; background:none;
	font-weight: bold !important; }
 .hteRightPanelUL li.logedinsso a:hover { background:#f7f7f7 !important; } 
.hteRightPanelUL li.logedinsso a img { width:10px; }
.hteRightPanelUL li.logedinsso .hteInnerMenu  { right: -3px !important; top: 28px; background:#fff;     border-radius: 4px; }
.hteRightPanelUL li.logedinsso .hteInnerMenu  li  a { background: none !important; text-align: center;}
.hteRightPanelUL li.logedinsso .hteInnerMenu  li  a:hover { color:#000 !important; } 
.hteRightPanelUL li.logedinsso .hteInnerMenu:after { content:''; position:absolute; top:1px;
			content: ''; position: absolute;top: -7px; right: 8px;
			width: 0;  height: 0; border-style: solid;
			border-width: 0 5px 5px 5px;
			border-color: transparent transparent #9a9a9a transparent;
} 
                </style>
<style>
.htIFrameR1 {
    width: 100%
}

.htIFrameR2 {
    border: 0px;
    height: 255px;
    position: relative;
    width: 100%;
    margin-top: 0px
}

.topnewsRight {
    width: 100%;
    border-radius: 8px 8px 0 0;
    border: solid 1px #e2e2e2;
}
</style>
<style>
.newsSection{overflow-y:auto;overflow-x:hidden;width:100%;background-color:#fff}.newsSectionUL{margin:0;padding:10px 10px;list-style:none}.newsSectionUL>li{padding:5px 0;display:table;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease;border-bottom:solid 1px #e3e3e3}.newsSectionUL>li:hover{background-color:#f3f3f3}.newsSectionUL>li:last-child{border-bottom:none}.tabCellL3{vertical-align:top;width:32%;height:75px;float:left;background:#eee;position:relative;border:1px solid #eee}.newsSectionUL>li img{max-width:100%;max-height:100%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}.tabCellR3{vertical-align:top;font-size:13px;width:68%;padding-left:4%;float:right;text-align:left;line-height:1.6;color:#727272}.tabhead3{margin-bottom:4px;line-height:20px;font-size:13px;font-weight:400;color:#000}.imageHolder{position:relative;width:100%;height:50%}.imageHolder .caption{position:absolute;width:100%;height:50px;bottom:0;left:0;color:#fff;background:#2c2f2c;text-align:left;font-weight:700;opacity:.7;padding:5px}.dropbtn{background-color:#4CAF50;color:#fff;padding:7px;font-size:16px;border:none;cursor:pointer;font-weight:700}.dropdown{position:relative;display:inline-block}.dropdown-content{display:none;position:absolute;background-color:#f9f9f9;min-width:160px;box-shadow:0 8px 16px 0 rgba(0,0,0,.2);z-index:1}#on_focus,#pageshareleft,.f-nav{position:fixed;top:0}.dropdown-content a{color:#000;padding:12px 16px;text-decoration:none;display:block;line-height:8px}.dropdown-content a:hover{background-color:#f1f1f1}.dropdown:hover .dropdown-content{display:block}.dropdown:hover .dropbtn{background-color:#3e8e41}.f-nav{z-index:999;width:100%}#on_focus{display:none;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:99}#floating-box-wrapperleft{width:1000px;margin:0 auto;height:auto;position:relative}#floating-box-containerleft2{top:0;left:-175px;width:120px;position:absolute}#pageshareleft{z-index:10}#floating-box-containerright2{top:0;right:-135px;width:120px;position:absolute}
</style>
<link rel="stylesheet" href="/css/menu.css">
<link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/mstyle.css">
<link rel="stylesheet" href="/css/styleht.css">
<script src="/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/libs/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<style>
.f-nav{ z-index: 9999; position: fixed; top: 0;}
</style>
<style>
.f-nav{ z-index: 9999; position: fixed; top: 0; width: 100%;}
#on_focus{ display: none; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); position: fixed; z-index:99; top: 0;}
</style>
<!-- End comScore Tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170945145-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-170945145-1');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1217561884-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-217561884-1');
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-429254-3',{'name':'goldTracker','allowLinker':'true'},'auto');
ga('goldTracker.require','linker');
ga('goldTracker.linker:autoLink',['indiatimes.com','navbharattimes.com']);
ga('goldTracker.send', 'pageview');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->



<script>
//if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
// window.location.href = "http://nbtm.4cplus.in"+window.location.pathname;
// }
</script> 
<!-- Google Ad Script--->
	<!-- Lotame audience extraction script for ad-targeting -->
	<!--<script type='text/javascript' src="http://ad.crwdcntrl.net/5/c=2800/pe=y/var=_ccaud"></script>-->
	<!-- End lotame audience extraction-->
	<script type='text/javascript'>
	var googletag = googletag || {};
	googletag.cmd = googletag.cmd || [];
	(function() {
	var gads = document.createElement('script');
	gads.async = true;
	gads.type = 'text/javascript';
	var useSSL = 'https:' == document.location.protocol;
	gads.src = (useSSL ? 'https:' : 'http:') + 
	'//www.googletagservices.com/tag/js/gpt.js';
	var node = document.getElementsByTagName('script')[0];
	node.parentNode.insertBefore(gads, node);
	})();
	</script>

	<script type='text/javascript'>
	googletag.cmd.push(function() {
	<!-- Audience Segment Targeting -->
	var _auds = new Array();
	if(typeof(_ccaud)!='undefined') {
	for(var i=0;i<_ccaud.Profile.Audiences.Audience.length;i++)
	if(i<200)
	_auds.push(_ccaud.Profile.Audiences.Audience[i].abbr);
	}
	<!-- End Audience Segment Targeting -->

	<!-- Contextual Targeting -->
	var _HDL = '';
	var _ARC1 = '';
	var _Hyp1 = '';
	var _article = '';
	var _tval = function(v) {
	if(typeof(v)=='undefined') return '';
	if(v.length>100) return v.substr(0,100);
	return v;
	}
	<!-- End Contextual Targeting -->
	//googletag.defineSlot('/7176/NBT_Epaper/NBT_EP_ROS/NBT_EP_ROS_AL/NBT_EP_ROS_ATF_AL_160', [160, 600], 'div-gpt-ad-1423044770187-0').addService(googletag.pubads());
	//googletag.defineSlot('/7176/NBT_Epaper/NBT_EP_ROS/NBT_EP_ROS_AL/NBT_EP_ROS_ATF_ROS_AL_728', [[728, 90], [1003, 90]], 'div-gpt-ad-1421152791555-1').addService(googletag.pubads());
	//googletag.pubads().setTargeting('sg', _auds).setTargeting('HDL', _tval(_HDL)).setTargeting('ARC1', _tval(_ARC1)).setTargeting('Hyp1', _tval(_Hyp1)).setTargeting('article', _tval(_article)); 
	//googletag.pubads().enableSingleRequest();
	//googletag.pubads().collapseEmptyDivs(); googletag.enableServices();
	});
	</script>
	<!-- End GoogleAd Script-->
<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "6036484" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="https://sb.scorecardresearch.com/p?c1=2&c2=6036484&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->
<!-- HEAD -->
<script>
var triggerElementID = null;
var fingerCount = 0;
var startX = 0;
var startY = 0;
var curX = 0;
var curY = 0;
var deltaX = 0;
var deltaY = 0;
var horzDiff = 0;
var vertDiff = 0;
var minLength = 72; 
var swipeLength = 0;
var swipeAngle = null;
var swipeDirection = null;
var scaling = true;
var scrolling = true;
function touchStart(event,passedName) {
	//event.preventDefault();
	fingerCount = event.touches.length;
	if ( fingerCount == 1 ) {
		startX = event.touches[0].pageX;
		startY = event.touches[0].pageY;
		//alert(startX+"=="+startY);
		triggerElementID = passedName;
	} else {
		touchCancel(event);
			//alert("========"+startX+"=="+startY);
		scaling = true;
		try{	
			pinchStart(event);
		}catch (erd){

		}
	}
}

function touchMove(event) {
	if ( event.touches.length == 1 ) {
		curX = event.touches[0].pageX;
		curY = event.touches[0].pageY;
	} else {
		try{
			touchCancel(event);
		}catch (erd){

		}

		if(scaling) {
			
			pinchMove(event);
		}
	}

		newHeightx = document.getElementById('HiddenSetheightVals').value;
		//alert(newHeightx);
		var $cls = jQuery.noConflict();
		$cls(".flipbook-viewport .shadow,.flipbook-viewport .shadow>.page-wrapper,.flipbook-viewport .shadow>.page-wrapper>div,.flipbook-viewport .shadow>.page-wrapper>div>div,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage>canvas").css("height", newHeightx);

}

function touchEnd(event) {
	var $cls = jQuery.noConflict();
	//event.preventDefault();
	if ( fingerCount == 1 && curX != 0 ) {
		swipeLength = Math.round(Math.sqrt(Math.pow(curX - startX,2) + Math.pow(curY - startY,2)));
		if ( swipeLength >= minLength ) {
			caluculateAngle();
			determineSwipeDirection();
			processingRoutine();
			try{
				touchCancel(event);
			}catch (erd){

			}

			if(scaling) {
				try{
				pinchEnd(event);
                }catch (erd){

				}
				scaling = false;
			}
		} else {
			touchCancel(event);
			if(scaling) {
				
				try{
					pinchEnd(event);
				}catch (erd){

				}

				scaling = false;
			}
		}	
	} else {
		touchCancel(event);
		if(scaling) {
			try
			{
				pinchEnd(event);
			}catch (erd){

			}
			scaling = false;
		}
	}
	
		newHeightx = document.getElementById('HiddenSetheightVals').value;
		$cls(".flipbook-viewport .shadow,.flipbook-viewport .shadow>.page-wrapper,.flipbook-viewport .shadow>.page-wrapper>div,.flipbook-viewport .shadow>.page-wrapper>div>div,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage>canvas").css("height", newHeightx);

}

function touchCancel(event) {
	fingerCount = 0;
	startX = 0;
	startY = 0;
	curX = 0;
	curY = 0;
	deltaX = 0;
	deltaY = 0;
	horzDiff = 0;
	vertDiff = 0;
	swipeLength = 0;
	swipeAngle = null;
	swipeDirection = null;
	triggerElementID = null;
	scaling = true;
	scrolling = true;
	var $cls = jQuery.noConflict();

				
	//$(window).on('resize', function () {
	if(document.getElementById('HiddenSetheight_t').value=="true")
	{
		document.getElementById('HiddenSetheight_t').value="false";
		var newimagex = $cls('.flipbook-viewport img');
		newHeightx = newimagex[0].height;
		//alert(newHeightx);
		document.getElementById('HiddenSetheightVals').value=newHeightx;
		newimagex = newimagex[0].width;
		$cls(".flipbook-viewport").css("width", newimagex);
		$cls(".flipbook-viewport .shadow,.flipbook-viewport .shadow>.page-wrapper,.flipbook-viewport .shadow>.page-wrapper>div,.flipbook-viewport .shadow>.page-wrapper>div>div,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage>canvas").css("height", newHeightx);
		//});
	}else{
		newHeightx = document.getElementById('HiddenSetheightVals').value;
		//alert(newHeightx);
		$cls(".flipbook-viewport .shadow,.flipbook-viewport .shadow>.page-wrapper,.flipbook-viewport .shadow>.page-wrapper>div,.flipbook-viewport .shadow>.page-wrapper>div>div,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage>canvas").css("height", newHeightx);
	}

}

function caluculateAngle() {
	var $cls = jQuery.noConflict();
	var X = startX-curX;
	var Y = curY-startY;
	var Z = Math.round(Math.sqrt(Math.pow(X,2)+Math.pow(Y,2))); //the distance - rounded - in pixels
	var r = Math.atan2(Y,X); //angle in radians (Cartesian system)
	swipeAngle = Math.round(r*180/Math.PI); //angle in degrees
	if ( swipeAngle < 0 ) { swipeAngle =  360 - Math.abs(swipeAngle); }
}

function determineSwipeDirection() {
	if ( (swipeAngle <= 45) && (swipeAngle >= 0) ) {
		swipeDirection = 'left';
	} else if ( (swipeAngle <= 360) && (swipeAngle >= 315) ) {
		swipeDirection = 'left';
	} else if ( (swipeAngle >= 135) && (swipeAngle <= 225) ) {
		swipeDirection = 'right';
	} else if ( (swipeAngle > 45) && (swipeAngle < 135) ) {
		swipeDirection = 'down';
	} else {
		swipeDirection = 'up';
	}
}
		
function processingRoutine() {
alert('dfdfdfdf')
var swipedElement = document.getElementById(triggerElementID);
if ( swipeDirection == 'left' ) {	
if(document.getElementById('totalpages').value==document.getElementById('turnpagenumber').value){
alert('you are viewing the last page.');
return false;
}

var nextval;
if(document.getElementById('turnpagenumber').value==""){
nextval=2;
}else{
nextval=parseInt(document.getElementById('turnpagenumber').value)+parseInt(1);
}	
pagechange(nextval);
swipedElement.style.backgroundColor = 'orange';
} else if ( swipeDirection == 'right' ) {
if(document.getElementById('turnpagenumber').value=="1"){
alert('you are viewing the first page.');
return false;
}
var nextval;
if(document.getElementById('turnpagenumber').value==""){
nextval=2;
}else{
nextval=parseInt(document.getElementById('turnpagenumber').value)-parseInt(1);
}	
pagechange(nextval);

swipedElement.style.backgroundColor = 'green';
} else if ( swipeDirection == 'up' ) {
swipedElement.style.backgroundColor = 'maroon';
} else if ( swipeDirection == 'down' ) {
swipedElement.style.backgroundColor = 'purple';
}
}


var posx;var posy; 
function pagezoomchange(pageno,e){
	var $jqpage=jQuery.noConflict();
// captures the mouse position 
posx = 0; posy = 0; 
if (!e){var e = window.event;} 
if (e.pageX || e.pageY){ 
posx = e.pageX; 
posy = e.pageY; 
} 
else if (e.clientX || e.clientY){ 
posx = e.clientX; 
posy = e.clientY; 
} 
//alert(posx)

var dvartr=posx+"~"+posy;


var mod;
var pagenum;
var mod;
var pagenum;
var w = window.innerWidth;
var h = window.innerHeight;

if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";

var kl=document.getElementById('chkthumb').offsetWidth;
//var w1=w-kl-25; 
//alert("reena123");
var kt=document.getElementById('maintop1').offsetHeight;
//alert(k1);

if(w=='1024')
{
var w1=w-22;
document.getElementById('iframediv').style.left=5+"px";
}
else
{
var w1=w-kl-20;
document.getElementById('iframediv').style.left= "5px"; <!--kl.toString() + "px"; -->
}


var kt=document.getElementById('maintop1').offsetHeight;

kt=kt + document.getElementById('maintop1').offsetTop;

//var hi=h-kt-25;

//var hi=830;

/************/
	var scwidth=screen.width; 
	var h4;
	 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $jqpage("#mainepaer86").css('height');
	 }else {
		h4 = $jqpage("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=parseInt(h4)-80;
//var h1=parseInt(h4)+45;
}
if(document.getElementById('rsmod').value=='2')
{
var h1=parseInt(h4)-55;
//var h1=parseInt(h4)+55;
}

var h2=document.getElementById('maintop1').offsetHeight;

var hi=h1+h2;

/***********/
//alert(hi);


window.scrollTo(0, 0);
document.getElementById('iframediv').style.top=kt.toString() + "px";
document.getElementById('iframediv').style.width=w1.toString() + "px";
document.getElementById('iframediv').style.height=hi.toString() + "px";
document.getElementById('iframediv').style.zIndex="102";
document.getElementById('iframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
// document.getElementById('rigthiframediv').style.left=(w1-46).toString() + "px";
// document.getElementById('rigthiframediv').style.width="46px";
document.getElementById('rigthiframediv').style.height="25px";
document.getElementById('rigthiframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.zIndex="103";
document.getElementById('img1rigthiframe1').style.visibility="visible";
document.getElementById('img1rigthiframe2').style.visibility="visible";

if(document.getElementById('pgnum').value=="" || document.getElementById('turnpagenumber').value=="")
{
	mod=1;
	pagenum=1;
}
else
{
	mod=document.getElementById('mod').value;
	//pagenum=document.getElementById('pgnum').value;
	pagenum= document.getElementById('turnpagenumber').value;<!--document.getElementById('pgnum').value;-->
}

try
{
	if(currenthds==undefined || currenthds=="undefined"){
		currenthds=1;
	}
	var xvalpsi=pagenum; //document.getElementById('turnpagenumber').value; //currenthds;
	var img=document.getElementById("imgpage_"+xvalpsi);
	if(img !== null && img !== "undefined")
	{
		var src=img.src;
		document.getElementById('iframecontent').src="pagezoomsinpdf.php?img=" +src + "&dvartr=" +dvartr+"&mod="+mod+"&pagenum="+pagenum;
	}
	else
	{
		var xvalp= currenthds+1;	
		var yvalp= currenthds;	
		var img=document.getElementById("imgpagey_"+yvalp);
		if(img !== null && img !== "undefined")
		{
			var img1=document.getElementById("imgpagex_"+xvalp);
			var src=img.src;
			var src1=img1.src;
					//alert('2');
			document.getElementById('iframecontent').src="pagezoomdub.php?img=" +src + "&img1=" +src1 + "&dvartr=" +dvartr+"&id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum;
		}
	}

}
catch (erd)
{
	alert(erd);
}


setTimeout("document.getElementById('iframecontent').style.visibility='visible'",1000);
return false;

}
</script>

<script>
function toolsbookmarks(boxhidden)
{
	xmlHttp=GetXmlHttpObject()
			if (xmlHttp==null)
			{
			alert ("Browser does not support HTTP Request")
			return
			}
			var url="favrouiteview.php?usermailid="+document.getElementById('hiddenusermail').value+"&edcodes="+document.getElementById('edcode').value+"&boxids="+document.getElementById('boxidhidden').value;
			xmlHttp.onreadystatechange=favrouiteresponse
			xmlHttp.open("GET",url,true)
			xmlHttp.send(null)

}

function favrouiteresponse()
{
	 if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {
	 		var httpresponses =xmlHttp.responseText;
			httpresponses=trim(httpresponses);
			if(httpresponses!=0){
				document.getElementById("p15").innerHTML=document.getElementById("p15").innerHTML.replace('a7b.png','ta7.png');
			} else {
				document.getElementById("p12").innerHTML=document.getElementById("p12").innerHTML.replace('a1o.png','ta1.png');
				document.getElementById("p13").innerHTML=document.getElementById("p13").innerHTML.replace('a2o.png','ta2.png');
				//document.getElementById("p14").innerHTML=document.getElementById("p14").innerHTML.replace('a6o.png','ta6.png');
				document.getElementById("p15").innerHTML=document.getElementById("p15").innerHTML.replace('ta7.png','a7b.png');
				//document.getElementById("p16").innerHTML=document.getElementById("p16").innerHTML.replace('a3o.png','ta3.png');
				//document.getElementById("p17").innerHTML=document.getElementById("p17").innerHTML.replace('a4o.png','ta4.png');
				//document.getElementById("p18").innerHTML=document.getElementById("p18").innerHTML.replace('a5o.png','ta5.png');
			}
	 }
}

function toolsover(valid){


}


function toolsout(valid){


}
</script>


</head>
<body style="cursor:auto;background-color:#fff;">
<div id="outdivdR1Left"></div>
<div id="outdivdR1Right"></div>

<iframe id="iframe" width="0px" scrolling="auto" height="0px" 
        frameborder="1" src="https://epaper.navbharattimes.com/pageiframe.php"
        style="border: 0px none #ffffff;" name="national-campaign" 
        marginheight="0px" marginwidth="0px">
</iframe>

<!-- #header start-->
<input type="hidden" id="valdals" name="valdals" />
<input type="hidden" id="currentpgnumber" name="currentpgnumber" />
<div class="toplogobanner_dummy toplogobannerRS1" style="background-color:#ffffff;margin-top:0px;">
	<div class="midheader2" style="background-color:#ffffff;">
	<div id='logo' style="padding-top:3px;padding-left:14px;position: relative;" class="toplogo">
	<a title="Navbharat Times ePaper: Hindi ePaper, EPaper Download, Online Epaper, Newspaper in Hindi, Today Newspaper" href="/" ><img src="/images/logo2.png" style="border:0px;margin-top:1px;"></a>
	<div class="topcol1" style="display:block;position: absolute; left: 84px; bottom: -21; z-index: 9;font-size: 12px; margin-top: 5px;color: #7a7a7a;text-transform:uppercase;font-family: Arial, Helvetica, sans-serif;display:none;">
				Wednesday, 17 May, 2023				</div>
				<input type="hidden" id="mydate" value ="2023-05-17">	
	</div>
	<div class="nav" style="height:102px;float:right;margin-top:0px;margin-right: 20px;" id="l11_hds_33">
			<div id='div-gpt-ad-1630775368459-0' style='min-width: 728px; min-height: 90px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1630775368459-0'); });
  </script>
</div>
		<!--<div id='div-gpt-ad-1421152791555-0' style='height:90px; width:728px;text-align:center;'>
			<script>
				 googletag.cmd.push(function() { googletag.display('div-gpt-ad-1421152791555-0'); });
			</script>
		</div>-->
	</div>
	</div>
</div>


<div id="maintop1" style="background: #f1eff0;width: 100%;float: left;height: 39px;margin-top: 0px;border-bottom:1px solid #dedddd;">
	<header>
	<div class="inner relative rMaintop1" style="position:relative">


<div class="">
		<div class="hteMainCont2a">
			<div class="hteLeftPanel">
				<a href="/" class="hteHomeLink"><img src="/images/homeblack.png" alt="Home Icon" class="rHomeHeight"></a>
	<ul id="main-menu">			
	
  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','13','2023-05-17','delhi','s02')>
     Delhi		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s02" />
	<li><a onclick=gotoedition('1','1','14','2023-05-17','delhitimes','s02')> Delhi Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
						<input type="hidden" id="scode_e" name="scode_e" value="s02" />
	<li><a onclick=gotoedition('1','1','34','2023-05-17','eastdelhi','s02')> East Delhi <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
						<input type="hidden" id="scode_e" name="scode_e" value="s02" />
	<li><a onclick=gotoedition('1','1','35','2023-05-17','outerdelhi','s02')> Outer Delhi <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','16','2023-05-17','mumbai','s03')>
     Mumbai		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s03" />
	<li><a onclick=gotoedition('1','1','17','2023-05-17','mymumbai','s03')> My Mumbai <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','9','2023-05-17','lucknow-kanpur','s01')>
     Lucknow/Kanpur		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s01" />
	<li><a onclick=gotoedition('1','1','10','2023-05-17','lucknowtimes','s01')> Lucknow Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','19','2023-05-17','noida','s04')>
     Noida		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s04" />
	<li><a onclick=gotoedition('1','1','31','2023-05-17','noidatimes','s04')> Noida Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','20','2023-05-17','ghaziabad','s06')>
     Ghaziabad		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s06" />
	<li><a onclick=gotoedition('1','1','26','2023-05-17','ghaziabadtimes','s06')> Ghaziabad Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','24','2023-05-17','faridabad','s07')>
     Faridabad		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s07" />
	<li><a onclick=gotoedition('1','1','29','2023-05-17','faridabadtimes','s07')> Faridabad Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			  <li class="parent">

		   <a href="#"   onclick=gotoedition('1','1','25','2023-05-17','gurugram','s05')>
     Gurugram		</a>
<ul class="sub-menu">
	<input type="hidden" id="scode_e" name="scode_e" value="s05" />
	<li><a onclick=gotoedition('1','1','30','2023-05-17','gurugramtimes','s05')> Gurugram Times<br>Masala mix <span style="float:right;"> </span></a>
	
	<ul class="sub-menu">
									</ul>
					</li>
									</ul>	
			</li>
			&nbsp;&nbsp;
			
			
			</ul>
			</div>
			<div class="hteRightPanel" style="display:none;">
				
			</div>
		</div>
	</div>
	
	</div>
	</header>
	</div>




<div class=clear></div>
<style>
.menuBtn1{
	width: 26px;
	height: auto;	
	margin: 3px 0;
	margin-left: 20px;
	display: none;
}

.sidenav{
	display: none;
}

.rHomeHeight{
	height: 23px;
}

.selected-edition {
    color: #f1f1f1;
    font-size: 18px;
    font-weight: bold;
    margin-left: 200px;
    position: absolute;
    top: 3px;
}

.sidenav li ul{
	display: none;
}

</style>
<link rel="stylesheet" href="/css/menu.css">
<script src="/js/jquery.contenthover.js"></script> 
<script type='text/javascript' src='/js/jquery.js'></script>
<script type='text/javascript' src='/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='/js/basic.js'></script>
<script>
	var $jj=jQuery.noConflict(true);
</script>
	<div id="maintop1" style="background: #f1eff0;width: 100%;float: left;height: 39px;margin-top: 0px;border-bottom:1px solid #dedddd;">
	<header>
	<div class="inner relative rMaintop1" style="position:relative">
	<a style="display:none;" class="logo" href="https://epaper.navbharattimes.com/"><img src="/images/homeblack.png" alt="fresh design web" class="rHomeHeight"></a>
	<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
		
		<nav id="navigation" width='40%'>
	<img src="/images/menuBtn.png" alt="Menu Button" class="menuBtn1" onclick="openNav()" />
		
	<ul class="hteMainCont3a" style="margin-top: 4px;margin-left: 10px;">
	<li style="display:none;" class="hteFirstCh"><a href="#"></a></li>
	
								<li class="hteDrop" id="archivesh" >
					<span style="font-weight:600;font-size:13px;color:#4b4b4b;cursor: auto;">17 मई, 2023</span>	 <!--<span class="hteDownArr">&#x25bc;</span>-->
					<span class="varMid" onclick="archives('','13','','');"><img src="/images/calendar.png" style="width:28px;margin-top:-3px;"  title="Archive" /></span>
					<ul class="hteInnerMenu" style="display:none;">
							
												17 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-17 00:00:00');">17 मई, 2023</a></li>
											16 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-16 00:00:00');">16 मई, 2023</a></li>
											15 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-15 00:00:00');">15 मई, 2023</a></li>
											14 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-14 00:00:00');">14 मई, 2023</a></li>
											13 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-13 00:00:00');">13 मई, 2023</a></li>
											12 मई, 2023	
							<li><a href="#" onClick="archives_res('1','13','1','2023-05-12 00:00:00');">12 मई, 2023</a></li>
										</ul>
				</li>

								<li class="hteDrop" style="cursor: auto;"><b>पृष्ठ संख्या </b>
					
					 <input type='hidden' id='totalpages' value='16'>	
						<select id="tpgnumber" class="hteInnerSelect1" style="cursor:pointer;" onChange="pagechange(this.value);">
							
												  		<option value=1 selected><a href="#">1</a></option>
														
														<option value=2><a href="#">2</a></option>
														
														<option value=3><a href="#">3</a></option>
														
														<option value=4><a href="#">4</a></option>
														
														<option value=5><a href="#">5</a></option>
														
														<option value=6><a href="#">6</a></option>
														
														<option value=7><a href="#">7</a></option>
														
														<option value=8><a href="#">8</a></option>
														
														<option value=9><a href="#">9</a></option>
														
														<option value=10><a href="#">10</a></option>
														
														<option value=11><a href="#">11</a></option>
														
														<option value=12><a href="#">12</a></option>
														
														<option value=13><a href="#">13</a></option>
														
														<option value=14><a href="#">14</a></option>
														
														<option value=15><a href="#">15</a></option>
														
														<option value=16><a href="#">16</a></option>
																		</select>
				</li>
							
	</ul>
			</nav>
						
						<div class="hteMainCont2a">
		     	<div class="hteRightPanel">
					<div class="" style="display:inline-block;vertical-align:middle;padding:2px 0;position:relative">
					<span style="display:none;" class="teIcoImg"><a href="/archive.html" style="font-size: 16px;font-weight: 800;">Archive</a></span>
					<span  class="" onclick="cropimgs(document.getElementById('hdscrop').value,'cc');"><img src="/images/crop.png" style="width:28px;height:28px;display:none;" title="Crop" /></span>
					<span style="display:none;" class="teIcoImg" onclick="clipgallery();"><img src="/images/clipitem.png" style="width:28px;height:28px;" title="Cropped Item" /></span>
					<span class="teIcoImg" onclick="zoooinhds('1');"><img src="/images/zoom_in.png" style="width:28px;height:28px;" title="Zoom" /></span>
					<span class="teIcoImg" onclick="currentissues(document.getElementById('boxidhidden').value,'bt');"><img src="/images/download.png" style="width:28px;height:28px;" title="Download Page" /></span>
					<span style="display:none;" class="teIcoImg" onclick="currentedition(document.getElementById('boxidhidden').value,'bt');"><img src="/images/downloadm.png" style="width:28px;height:28px;" title="Download Edition" /></span>&nbsp;
					<span style="display:none;" class="teIcoImg" onclick="checkmic('2');" id="micoff" style="float: right;"><img src="/images/Volumeicon_off.png" style="width:28px;height:28px;" title="Page Flip Sound On" /></span>
					<span style="display:none;" class="teIcoImg" onclick="checkmic('1');" id="micon" style="float:right;display:none;"><img src="/images/Volumeicon_on.png" border="0" style="width:28px;height:28px;"  title="Page Flip Sound Off"></span>
					</div>
				
				
				<div class="hteSearchCont" style="display:none;">
					<input type="text" class="hteSearch" id="searchtexthome">
					<img src="/images/hteSearch.png" alt="Search Icon" class="hteSearchIco" onclick="searchpage();">
				</div>
				<div  style="display:inline-block;vertical-align:middle;padding:2px 0;position:relative">
					<span id="loginp" style="display:inline-block;border: 2px solid #bf1a1a;border-radius: 4px;padding: 6px;margin-top: 3px;"><a href="https://jsso.indiatimes.com/sso/identity/login?channel=nbtepaper&ru=https://epaper.navbharattimes.com/" target="_self">Login</a></span>
					<span id="profilep" style="display:none;"><a href="https://jsso.indiatimes.com/sso/identity/profile/edit?channel=nbtepaper&ru=https://epaper.navbharattimes.com/" target="_blank"><p style="margin-top: 9px; margin-right: 10px;color: #fff;    font-size: 15px;    font-weight: 700;color:#ea3f3f;" id="profilephtml" >Welcome, </p></a></li>
					<span id="logoutip" style="display:none;border: 2px solid #bf1a1a;border-radius: 4px;padding: 6px;margin-top: 3px;"><a href="https://jsso.indiatimes.com/sso/identity/profile/logout/external?channel=nbtepaper&ru=https://epaper.navbharattimes.com/" target="_self">Logout</a></span>
			    </div>
								
			</div>
		
			</div>
						<div class="clear"></div>
		</div>
	</header>	
	
</div>   
<!--1 end-->
</div>
<div class="hteMainCont2a hteMainCont2b" style="background:#f1eff0;margin-bottom:30px;display:none;">
			<div class="hteLeftPanel">
			
				<ul class="hteLeftPanelUL hteLeftPanelUL2">
					 
						
				</ul>
				<div class="hteRightPanel2"></div>
			</div>
		</div>

<script>
function changeedition(val){
	var edcode=val;
	var totpage=document.getElementById("totalpages").value;
	 <!--document.getElementById("pgnumber").value;-->
	var strmmode=document.getElementById("mmode").value;
    var pgno1;
    if(strmmode==2)
        pgno1=2;	
    else
       pgno1=1;	
    var pgdate1=document.getElementById("pgdate1").value;
	window.location.href="index.php?mod="+strmmode+"&pgnum="+pgno1+"&edcode="+edcode+"&pagedate="+pgdate1;
}
</script>

<style>
#login_form{display:none}
#reg_form{display:none}
</style>
<div id='basic-modal' class="topcol5" style=" margin-left: -65px;" >
		</div>
		<div id="basic-modal-content">
		<div id="login_form" style="height: 100%;"></div>
		<div id="reg_form"></div>
    	<div id="share_form" ><html>
<head><title>Clip image</title><head>
<script>
var xmlHttp;
var pollans;
function GetXmlHttpObject()
{
	xmlHttp=null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

</script>

<script>
function whatsupshare(){



}


function gplusshare()
{
	var imgname=document.getElementById('imgaesrc').value;
	var siteurl='https://epaper.navbharattimes.com/';
	var cpurl=siteurl+'rsclipshow.php?im='+imgname;
	surl='https://plus.google.com/share?url='+cpurl;
	window.open(surl, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=200,left=400');return false;
	return false;
}

function fbshare()
{
			var cpurl=document.getElementById("imgids").value;//siteurl+'rsclipshow.php?im='+imgname;
			var windowFeatures = "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=200,left=400";
			var t='Patrika | epaper';
			window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(cpurl)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
			return false;
}

function twshare()
{
		var t='Patrika | epaper';
		var cpurl=document.getElementById("imgids").value;//siteurl+'rsclipshow.php?im='+imgname;
		var surl='http://twitter.com/share?text='+t+'&url='+cpurl;
		window.open(surl,t, 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=200,left=400');
		return false;
}
</script>
<script type='text/javascript' src='/js/basic.js'></script>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<body>
<form method="post" enctype="multipart/form-data"  name="share_form"> 

	<div style="width:20%; display: none; padding: 0 10px;"><img src="/images/whatsapp.png" style="width: 100%;cursor:pointer;" /></div>

<input type="hidden" id="imgaesrc" name="imgaesrc" value="" />
</form>
<div>
</div>
</body>
</html>

<style>

div.transbox {
    width: 225px;
    height: 25px;
    margin: -27px 0px 0px 0px;
    background-color: #090909;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
    margin: 30px 40px;
    font-weight: bold;
    color: #000000;
}

.imgclipgallery
{
 margin:0px 0px 0px 0px; 
 max-height:190px; vertical-align:middle;	
 max-width:100%;

}

.boxwidth {
    width: 100%;
    /* border-top: 3px solid #9E9E9E; */
    border-bottom: 3px solid #9E9E9E;
    padding: 15px;
    margin-top: 40px;
    height: auto;
    text-align: center;
    box-sizing: border-box;

}
.share-icon {
    float: left;
    padding: 0 5px;
}

</style>

</div>
		<div id="ads_form" ><html>
<head><title>Ads</title><head>
<script type='text/javascript' src='/js/basic.js'></script>
<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
<form method="post" enctype="multipart/form-data"  name="ads_form" style="text-align:center;"> 


</form>

</body>
</html>

<style>

div.transbox {
    width: 225px;
    height: 25px;
    margin: -27px 0px 0px 0px;
    background-color: #090909;
    border: 1px solid black;
    opacity: 0.9;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
    margin: 30px 40px;
    font-weight: bold;
    color: #000000;
}

.imgclipgallery
{
 margin:0px 0px 0px 0px; 
 max-height:190px; vertical-align:middle;	
 max-width:100%;

}

.boxwidth {
    width: 100%;
    /* border-top: 3px solid #9E9E9E; */
    border-bottom: 3px solid #9E9E9E;
    padding: 15px;
    margin-top: 40px;
    height: auto;
    text-align: center;
    box-sizing: border-box;

}
.share-icon {
    float: left;
    padding: 0 5px;
}

</style>

</div>
</div>

<script>
function gotoedition(mod,pgnum,edcodes,pagedates,desc_eng,scode_){
	//edcodes=editionret(edcodes);
	var $jqnew = jQuery.noConflict();
	if(scode_=='s01' && edcodes=='1001'){
		state='rajsthan';
		desc_eng='jaipur';
		edcodes='1';
	}else if(scode_=='s02' && edcodes=='1002'){
		state='mp';
		desc_eng='bhopal';
		edcodes='52';
	}else if(scode_=='s03' && edcodes=='1003'){
		state='chaattisgarh';
		desc_eng='raipur';
		edcodes='76';
	}else if(scode_=='s04' && edcodes=='1004'){
		state='gujarat';
		desc_eng='ahamadabad';
		edcodes='88';
	}else if(scode_=='s05' && edcodes=='1005'){
		state='delhi';
		desc_eng='delhi';
		edcodes='91';
	}else if(scode_=='s06' && edcodes=='1006'){
		state='maharshtra';
		desc_eng='mumbai';
		edcodes='92';
	}else if(scode_=='s07' && edcodes=='1007'){
		state='tamilnadu';
		desc_eng='chennai';
		edcodes='93';
	}else if(scode_=='s08' && edcodes=='1008'){
		state='karnatka';
		desc_eng='bangalore';
		edcodes='95';
	}else if(scode_=='s09' && edcodes=='1009'){
		state='westBengal';
		desc_eng='kolkatta';
		edcodes='97';
	}else if(scode_=='s10' && edcodes=='1010'){
		state='uttarpardesh';
		desc_eng='lucknow';
		edcodes='98';
	}
	
	
	
	if(scode_=='s01'){
		state='rajsthan';
	}else if(scode_=='s02'){
		state='mp';
	}else if(scode_=='s03' ){
		state='chaattisgarh';
	}else if(scode_=='s04' ){
		state='gujarat';
	}else if(scode_=='s05'){
		state='delhi';
	}else if(scode_=='s06'){
		state='maharshtra';
	}else if(scode_=='s07'){
		state='tamilnadu';
	}else if(scode_=='s08'){
		state='karnatka';
	}else if(scode_=='s09'){
		state='westBengal';
	}else if(scode_=='s10'){
		state='uttarpardesh';
	}

	 $jqnew.ajax({
		url:"https://epaper.navbharattimes.com/retedition.php?edcode="+edcodes,  
		success:function(data) {
			var strurl1="https://epaper.navbharattimes.com/"+desc_eng+"/"+data+"/"+edcodes+"/page-1.html";
			window.location.href=strurl1;	
		}
	  });
		return false;
}
</script>


<script>
function openNav() {
	document.getElementById("mySidenav").style.opacity = "1";
    document.getElementById("mySidenav").style.width = "220px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var $jq = jQuery.noConflict();
$jq('#mySidenav li.childToggle > a').click(function() {
	$jq(this).parent().siblings().find('ul').slideUp(300);
	$jq(this).next('ul').stop(true, false, true).slideToggle(300);
	return false;
});



function windowsprint(){

	if(document.getElementById('pgnum').value=="" || document.getElementById('turnpagenumber').value=="")
	{
		mod=1;
		pagenum=1;
	}
	else
	{
		mod=document.getElementById('mod').value;
		pagenum= document.getElementById('turnpagenumber').value;<!--document.getElementById('pgnum').value;-->
	}
		var pgdate1=document.getElementById("pgdate1").value;		
		var edcode=document.getElementById("edcode").value;
		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		}
		document.getElementById('iframecontent').src="printimagewindow.php?pgnum="+pagenum+"&edcode="+edcode+"&pgdate="+pgdate1;
}



function printres()
{
	 if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {
	 		var httpresponses =xmlHttp.responseText;
			httpresponses=trim(httpresponses);
		
	 }
}
</script>
<style>
.calDrop {
    border: none;
    padding: 0;
    width: auto;
    color: #555555;
    font-size: 14px;
    font-weight: 700;
    foight: auto;
    line-height: normal;
    margin: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    padding-left: 28px;
    position: relative;
    z-index: 1;
    background: transparent;
}
</style>
<script>
function eid_res(mod,pgnum,pagedates,vals){
	//alert(desc_eng);
	var valss=vals.split("~~");
	edcodes=valss[0];
	desc_eng=valss[1];
	scode_=valss[2];
	
	document.getElementById("desc_eng").value=desc_eng;
	var cityname=desc_eng;
	var statename="";
				
	var scode_name=document.getElementById("scode_name").value;		
	if(scode_=='s01')
       statename="Delhi-NCR";
	else if(scode_=='s02')
       statename="UP";
	else if(scode_=='s03')
       statename="Bihar";
	else if(scode_=='s04')
       statename="Jharkhand";
	else if(scode_=='s05')
       statename="Uttarakhand";

	edcodes=edcodereturn(edcodes);
	var $jqnew = jQuery.noConflict();

	$jqnew.ajax({
    url:"/retedition.php?edcode="+edcodes,  
    success:function(data) {
      	//alert(data); 
	  	var strurl1="/epaper/"+statename+"/"+cityname+"/"+data+"/"+edcodes+"/Page-"+pgnum+".html";
		window.location.href=strurl1;	
    }
  });


	//var strurl1="/epaper/"+statename+"/"+cityname+"/"+pagedates+"/"+edcodes+"/Page-"+pgnum+".html";
	//window.location.href=strurl1;
	return false;
}


function page_res(mod,edcodes,pgnum,pagedate){
	
	document.getElementById("desc_eng").value=desc_eng;
	var statename=document.getElementById("ediName_p").value;
	var cityname=document.getElementById("subEdiName_p").value;
    var pgdts=pagedate.split(" "); 
	edcodes=edcodereturn(edcodes);


	var strurl1="/epaper/"+statename+"/"+cityname+"/"+pgdts[0]+"/"+edcodes+"/Page-"+pgnum+".html";
	window.location.href=strurl1;
	return false;
}



//mod,pgnum,edcodes,pagedates,desc_eng,scode_
function archives_res(mod,edcodes,pgnum,pagedate){
	document.getElementById("desc_eng").value=desc_eng;
	var statename=document.getElementById("ediName_p").value;
	var cityname=document.getElementById("subEdiName_p").value;
    var pgdts=pagedate.split(" "); 
	edcodes=edcodereturn(edcodes);
	var atype='a';
	var strurl1="/epaper/"+statename+"/"+cityname+"/"+pgdts[0]+"/"+edcodes+"/Page-"+pgnum+".html";
	//window.location.href=strurl1;
	var win = window.open(strurl1, '_blank');
	win.focus();
	return false;
}

	document.getElementById("searchtexthome").onkeypress = function(event){
		if (event.keyCode == 13 || event.which == 13){
			searchpage();
			return false;
		}
	};

function searchpage(){
	
var vals=document.getElementById("searchtexthome").value;
//var url="/search/1/"+vals;
var url="/search.php?PageNo=1&q="+vals;
window.location.href=url;
return false;
	
}


function editionret(edcodes){


	if(edcodes=='1001' || edcodes=='1')
		edcodes=1;
	else if(edcodes=='1002')
		edcodes=54;
	else if(edcodes=='1003')
		edcodes=88;
	else if(edcodes=='1004')
		edcodes=127;
	else if(edcodes=='1005')
		edcodes=135;
	else if(edcodes=='200')
		edcodes=172;
	else if(edcodes=='262')
		edcodes=248;
	else if(edcodes=='140')
		edcodes=6;
	else if(edcodes=='509')
		edcodes=2;
	else if(edcodes=='511')
		edcodes=5;
	else if(edcodes=='513')
		edcodes=44;
	else if(edcodes=='501')
		edcodes=8;
	else if(edcodes=='517')
		edcodes=70;
	else if(edcodes=='510')
		edcodes=80;
	else if(edcodes=='504')
		edcodes=18;
	else if(edcodes=='503')
		edcodes=22;
	else if(edcodes=='518')
		edcodes=65;
	else if(edcodes=='238')
		edcodes=135;
	else if(edcodes=='512')
		edcodes=132;
	else if(edcodes=='515')
		edcodes=88;
	else if(edcodes=='508')
		edcodes=139;
	else if(edcodes=='514')
		edcodes=102;
	else if(edcodes=='505')
		edcodes=113;
	else if(edcodes=='506')
		edcodes=123;
	else if(edcodes=='236')
		edcodes=110;
	else if(edcodes=='516')
		edcodes=127;
	else if(edcodes=='521')
		edcodes=3;
	else if(edcodes=='522')
		edcodes=4;
	else if(edcodes=='523')
		edcodes=160;
	else if(edcodes=='524')
		edcodes=29;
	else if(edcodes=='526')
		edcodes=117;
	else if(edcodes=='502')
		edcodes=15;
	else
		edcodes=edcodes;

	return edcodes;

}

function edcodereturn(edcodes){

	if(edcodes=='509')
		edcodes=2;
	else if(edcodes=='511')
		edcodes=5;
	else if(edcodes=='513')
		edcodes=44;
	else if(edcodes=='501')
		edcodes=8;
	else if(edcodes=='517')
		edcodes=70;
	else if(edcodes=='510')
		edcodes=80;
	else if(edcodes=='504')
		edcodes=18;
	else if(edcodes=='503')
		edcodes=22;
	else if(edcodes=='518')
		edcodes=65;
	else if(edcodes=='238')
		edcodes=135;
	else if(edcodes=='512')
		edcodes=132;
	else if(edcodes=='515')
		edcodes=88;
	else if(edcodes=='508')
		edcodes=139;
	else if(edcodes=='514')
		edcodes=102;
	else if(edcodes=='505')
		edcodes=113;
	else if(edcodes=='506')
		edcodes=123;
	else if(edcodes=='236')
		edcodes=110;
	else if(edcodes=='516')
		edcodes=127;
	else if(edcodes=='521')
		edcodes=3;
	else if(edcodes=='522')
		edcodes=4;
	else if(edcodes=='523')
		edcodes=160;
	else if(edcodes=='524')
		edcodes=29;
	else if(edcodes=='502')
		edcodes=15; 
	else if(edcodes=='201')
		edcodes=54;
	else if(edcodes=='526')
		edcodes=117;
	else
		edcodes=edcodes;
	return edcodes;
}

</script>

<div class="clear"></div>
<div id="mainnew"style="background-color: #fff; padding-top: 1px;">
<!-- #rightbar start-->
<div class="rightbarhds" style=" text-align:center;">

<style type="text/css">
/* Styled scrollbars */
.iScrollHorizontalScrollbar {
	position: absolute;
	z-index: 9999;
	height: 12px;
	left: 2px;
	right: 2px;
	bottom: 2px;
	overflow: hidden;
}

.iScrollHorizontalScrollbar.iScrollBothScrollbars {
	right: 12px;
}

.iScrollVerticalScrollbar {
	position: absolute;
	z-index: 9999;
	width: 12px;
	bottom: 2px;
	top: 2px;
	right: 2px;
	overflow: hidden;
}

.iScrollVerticalScrollbar.iScrollBothScrollbars {
	bottom: 12px;
}

.iScrollIndicator {
	position: absolute;
	background: #FF6600;
	border-width: 1px;
	border-style: solid;
	border-color: #FF6600;
	border-radius: 7px;
}

.iScrollHorizontalScrollbar .iScrollIndicator {
	height: 100%;
	background: -moz-linear-gradient(left,  #FF6600 0%, #FF6600 100%);
	background: -webkit-linear-gradient(left,  #FF6600 0%,#FF6600 100%);
	background: -o-linear-gradient(left,  #FF6600 0%,#FF6600 100%);
	background: -ms-linear-gradient(left,  #FF6600 0%,#FF6600 100%);
	background: linear-gradient(to right,  #FF6600 0%,#FF6600 100%);
}

.iScrollVerticalScrollbar .iScrollIndicator {
	width: 100%;
	background: -moz-linear-gradient(top, #FF6600 0%, #FF6600 100%);
	background: -webkit-linear-gradient(top,  #FF6600 0%,#FF6600 100%);
	background: -o-linear-gradient(top, #FF6600 0%,#FF6600 100%);
	background: -ms-linear-gradient(top, #FF6600 0%,#FF6600 100%);
	background: linear-gradient(to bottom,  #FF6600 0%,#FF6600 100%);
}


/* end */

* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

html {
	-ms-touch-action: none;
}

body,ul,li {
	padding: 0;
	margin: 0;
	border: 0;
}


#header {
	position: absolute;
	z-index: 2;
	top: 0;
	left: 0;
	width: 100%;
	height: 45px;
	line-height: 45px;
	background: #CD235C;
	padding: 0;
	color: #eee;
	font-size: 20px;
	text-align: center;
	font-weight: bold;
}

#footer {
	position: absolute;
	z-index: 2;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 48px;
	background: #444;
	padding: 0;
	border-top: 1px solid #444;
}

#wrapper {
	position: absolute;
	z-index: 1;
	top: 0px;
	bottom: 0px;
	left: 0;
	width: 100%;
	background: #ccc;
	overflow:scroll;
	text-align: center;

}

#scroller {
	position: absolute;
	z-index: 1;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	width: 2000px;
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-text-size-adjust: none;
	-moz-text-size-adjust: none;
	-ms-text-size-adjust: none;
	-o-text-size-adjust: none;
	text-size-adjust: none;
}

#scroller ul {
	list-style: none;
	padding: 0;
	margin: 0;
	width: 100%;
	text-align: left;
}

#scroller li {
	padding: 0 10px;
	height: 40px;
	line-height: 40px;
	border-bottom: 1px solid #ccc;
	border-top: 1px solid #fff;
	background-color: #fafafa;
	font-size: 14px;
}

</style>
<script>
function showthumb(showHideDiv, switchImgTag,thumblayer,chkthumb) 
{
	var ele = document.getElementById(showHideDiv);
	var imageEle = document.getElementById(switchImgTag);
	var e1=document.getElementById(thumblayer);
	e2=document.getElementById(chkthumb);
	if(ele.style.display == "block") {
	//alert("11");
	ele.style.display = "none";
	//imageEle.innerHTML = '<img src="images/tplus.jpg">';

	var h2 = window.innerHeight - 240;
	e1.style.marginTop=h2+"px";
	e1.style.display = "block";
	e2.style.display = "none";

	//document.getElementById("thumblayer").className = "imgsetwidth";
var width1=screen.width;
if(width1>1100)
{
document.getElementById("thumblayer").style.width = "180px";
}
if(width1>700 && width1<1100)
{
document.getElementById("thumblayer").style.width = "137px";
}
if(width1>200 && width1<700)
{
document.getElementById("thumblayer").style.width = "120px";
}
	
	document.getElementById('rsch').style.visibility="visible";
	document.getElementById('rsch').style.display="block";
	document.getElementById('rsch').style.width="110px";
}
else 
{
	//alert("22");
	//document.getElementById(switchImgTag).style.backgroundColor="white";
	ele.style.display = "block";
	//imageEle.innerHTML = '<img src="images/tminus.jpg">';
	e1.style.display = "none";
	e2.style.display = "block";
	
	document.getElementById('rsch').style.visibility="hidden";
	document.getElementById('rsch').style.display="none";
}
}
</script>
<div id="sidenavID" class="sidenavRT">
<a href="javascript:void(0)" class="closebtnRT" onclick="closeNavRT()">&times;</a>
<div id='sidebar_hds' style='width:100%;text-align: -webkit-center;border:1px solid #dedddd;'>
<div class="thumbheader" id="chkthumb" ><a id="imageDivLink" href="#" style="font-weight:bold;font-size:13px;">Delhi</a></div>
<div class="wrapper">

<div class="pagescrollThumb content" id="contentDivImg" style="display: block;background-color:#f7f7f7;margin:0px;padding:0px;"  >

<div id='pgmain1' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 1</span><div class='orgthumbpgnumber'>1</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-1ss.jpg' class='pagethumb' onclick='pagechange(1);'></div></div><div id='pgmain2' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 2</span><div class='grthumbpgnumber'>2</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-2ss.jpg' class='pagethumb' onclick='pagechange(2);' ></div></div><div id='pgmain3' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 3</span><div class='grthumbpgnumber'>3</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-3ss.jpg' class='pagethumb' onclick='pagechange(3);' ></div></div><div id='pgmain4' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 4</span><div class='grthumbpgnumber'>4</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-4ss.jpg' class='pagethumb' onclick='pagechange(4);' ></div></div><div id='pgmain5' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 5</span><div class='grthumbpgnumber'>5</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-5ss.jpg' class='pagethumb' onclick='pagechange(5);' ></div></div><div id='pgmain6' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 6</span><div class='grthumbpgnumber'>6</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-6ss.jpg' class='pagethumb' onclick='pagechange(6);' ></div></div><div id='pgmain7' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 7</span><div class='grthumbpgnumber'>7</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-7ss.jpg' class='pagethumb' onclick='pagechange(7);' ></div></div><div id='pgmain8' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 8</span><div class='grthumbpgnumber'>8</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-8ss.jpg' class='pagethumb' onclick='pagechange(8);' ></div></div><div id='pgmain9' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 9</span><div class='grthumbpgnumber'>9</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-9ss.jpg' class='pagethumb' onclick='pagechange(9);' ></div></div><div id='pgmain10' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 10</span><div class='grthumbpgnumber'>10</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-10ss.jpg' class='pagethumb' onclick='pagechange(10);' ></div></div><div id='pgmain11' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 11</span><div class='grthumbpgnumber'>11</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-11ss.jpg' class='pagethumb' onclick='pagechange(11);' ></div></div><div id='pgmain12' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 12</span><div class='grthumbpgnumber'>12</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-12ss.jpg' class='pagethumb' onclick='pagechange(12);' ></div></div><div id='pgmain13' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 13</span><div class='grthumbpgnumber'>13</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-13ss.jpg' class='pagethumb' onclick='pagechange(13);' ></div></div><div id='pgmain14' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 14</span><div class='grthumbpgnumber'>14</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-14ss.jpg' class='pagethumb' onclick='pagechange(14);' ></div></div><div id='pgmain15' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 15</span><div class='grthumbpgnumber'>15</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-15ss.jpg' class='pagethumb' onclick='pagechange(15);' ></div></div><div id='pgmain16' class='leftthumb'><span class='thumbtitle'>पृष्ठ संख्या 16</span><div class='grthumbpgnumber'>16</div><div class='imgd'><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-16ss.jpg' class='pagethumb' onclick='pagechange(16);' ></div></div></div>

</div>
<div id="rsch" style="display:none;border:0px solid red;" >&nbsp;</div>
</div>
</div>




<script>
function openNavRT() {


	var newWidRT = $('#sidenavID').css('right');
	if(newWidRT == '0px'){
    	$('#sidenavID').css("right", "0px");
	}else{
		$('#sidenavID').css("right", '0px');
	}
}

function closeNavRT() {
    document.getElementById("sidenavID").style.width = "0";
}
</script>
</div>

<div id="mainepaer">
<div class="mainEpaperR1">
<div class="mainEpaperR1R2">
<script>
var xmlHttp;
var pollans;
function GetXmlHttpObject()
{
	xmlHttp=null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

function stopTimer () {
    //timer.stop();
	//document.getElementById('iframecontent').src='loader.php';
}

function testforapi(clipimgnmae)
{
			xmlHttp=GetXmlHttpObject()
			if (xmlHttp==null)
			{
				alert ("Browser does not support HTTP Request")
				return
			}
	
				var url="/clipshare.php?clpname="+clipimgnmae;
				xmlHttp.onreadystatechange=clipsharesname
				xmlHttp.open("GET",url,true)
				xmlHttp.send(null)
    			return false;
			
}


function clipsharesname(){
	 setTimeout(function() {	},3000);	
	 if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {
			
			$jj('#share_form')
			//document.getElementById('Idleftofimage').style.visibility="visible";
			//document.getElementById('Idrigthofimage').style.visibility="visible";
	 		var httpresponsess =xmlHttp.responseText;
			httpresponsess=trim(httpresponsess);
			$jj('#basic-modal-content').modal();
			$jj('#login_form').hide();
			$jj('#reg_form').hide();
			$jj('#share_form').show();
			($jj('#share_form')[0]).innerHTML=httpresponsess;
	}
}
</script>
<style>

@media only screen and (min-width:768px) and (max-width:1223px)
{
.lefttoolsin{
		float:left;
		width:0%; 
		margin-top:10%;
		margin-left:10%; 
		background-color: red;
	}
}

@media only screen and (min-device-width : 768px) 
and (max-device-width : 1024px) 
{
	.lefttoolsin{
		float:left;
		width:0%; 
		margin-top:10%;
		margin-left:1%; 
		background-color: green;
	}
}

@media only screen and (min-width :1224px) 
{

	.lefttoolsin{
		float:left;
		width:0%; 
		margin-top:10%;
		margin-left:5%; 
		background-color: orange;
	}

}

@media only screen and (min-device-width : 480px)
and (max-device-width : 1024px) and (orientation : portrait) 
{
		.lefttoolsin{
		float:left;
		width:0%; 
		margin-top:10%;
		margin-left:5%; 
		background-color: orange;
	}
	
}


.flipbook-viewport .shadow{
/*	-webkit-transition: -webkit-box-shadow 0.5s;
	-moz-transition: -moz-box-shadow 0.5s;
	-o-transition: -webkit-box-shadow 0.5s;
	-ms-transition: -ms-box-shadow 0.5s;

	-webkit-box-shadow:0 0 20px #ccc;
	-moz-box-shadow:0 0 20px #ccc;
	-o-box-shadow:0 0 20px #ccc;
	-ms-box-shadow:0 0 20px #ccc;
	box-shadow:0 0 20px #ccc;
*/



}
.oncolorclass{
background-color:#FF0000;
}

.outcolorclass{
background-color:#ffffff;
}
</style>
<script type="text/javascript" src="https://epaper.livehindustan.com/extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="/jquery.maphilight.js"></script>
<!--<script type="text/javascript" src="js_tooltip/jquery.darktooltip.js"></script>-->
<!--<script type="text/javascript" src="js_tooltip/jquery.darktooltip2.js"></script>
<script type="text/javascript" src="js_tooltip/jquery-1.3.1.min.js"></script>-->

<!-- code start for  crop img-->
  <script src="/js_crop_single/jquery.Jcrop.js"></script>
  <!--<link rel="stylesheet" href="css/darktooltip.css">-->
  <link rel="stylesheet" href="/css_crop/main.css" type="text/css" />
  <link rel="stylesheet" href="/css_crop/demos.css" type="text/css" />
  <link rel="stylesheet" href="/css_crop/jquery.Jcrop.css" type="text/css" />


<script type="text/javascript">
	jQuery(document).ready(function(e) {
		var setpgnum=0;//document.getElementById('setpgnum').value;	
		jQuery('img[usemap^=#enewspaper'+setpgnum+']').maphilight();
		;(function(a){a.fn.rwdImageMaps=function(){var c=this;var b=function(){c.each(function(){if(typeof(a(this).attr("usemap"))=="undefined"){return}var e=this,d=a(e);a("<img />").load(function(){var g="width",m="height",n=d.attr(g),j=d.attr(m);if(!n||!j){var o=new Image();o.src=d.attr("src");if(!n){n=o.width}if(!j){j=o.height}}var f=d.width()/100,k=d.height()/100,i=d.attr("usemap").replace("#",""),l="coords";a('map[name="'+i+'"]').find("area").each(function(){var r=a(this);if(!r.data(l)){r.data(l,r.attr(l))}var q=r.data(l).split(","),p=new Array(q.length);for(var h=0;h<p.length;++h){if(h%2===0){p[h]=parseInt(((q[h]/n)*100)*f)}else{p[h]=parseInt(((q[h]/j)*100)*k)}}r.attr(l,p.toString())})}).attr("src",d.attr("src"))})};a(window).resize(b).trigger("resize");return this}})(jQuery);
		jQuery('img[usemap^=#enewspaper'+setpgnum+']').rwdImageMaps();
		jQuery('map[id^=enewspaper'+setpgnum+']>area').attr('onmouseover','');
		jQuery('map[id^=enewspaper'+setpgnum+']>area').attr('onmouseout','');
	});
</script>
<!--end-->
<script type="text/javascript">
function borderit(obj,b)
{
var er2,err1;
	if(document.all)
	{
		return false;
		try {
			var xd
			
			if(obj.parentElement.parentElement.parentElement.id=='outdivd')
				xd=document.getElementById('outdivd');
			else if(obj.parentElement.parentElement.parentElement.id=='outdivdy')
				xd=document.getElementById('outdivdy');
			else if(obj.parentElement.parentElement.parentElement.id=='outdivdx')
				xd=document.getElementById('outdivdx');
			if(xd !== null && xd !== "undefined")
			{
				var _x = 0;
				var _y = 0;
				var el=xd;
				try
				{
						while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
									_x += el.offsetLeft;
									_y += el.offsetTop ;
									el = el.offsetParent;
						}
				}
				catch (er2)
				{
				}
				var bar=obj.coords.toString().split(",")		
				leftPos=_x+parseInt(bar[0]);
				topPos= _y+parseInt(bar[1]);
				document.getElementById('oFilterDIV').style.left=leftPos.toString() + "px";
				document.getElementById('oFilterDIV').style.top=topPos.toString() + "px";
				document.getElementById('oFilterDIV').style.width=(	parseInt(bar[2])-parseInt(bar[0])).toString() + "px";
				document.getElementById('oFilterDIV').style.height=(parseInt(bar[1])-parseInt(bar[3])).toString() + "px";
				document.getElementById('oFilterDIV').style.visibility="visible";

			}
		}
		catch (err1)
		{
			alert(err1);
		}
			/*	this.bearer.offset().left;*/
}


}

var $jqpagload=jQuery.noConflict();
$jqpagload(document).ready( function(){
	setTimeout('setdivpos()',1000);
});


var flags1='true';
var flags='true';
var gi;
var gi1;
function cropimgs(val,valhds)
{
		if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
		} 


	var valpsin;
	currenthds=document.getElementById('turnpagenumber').value;
	if(currenthds=='undefined' || currenthds==undefined || currenthds==""){
		valpsin= 1;
	}else {
		valpsin= currenthds;
	}
	closedivdancut();
	if(valhds=='cc')
	{
		//classchangeonovertbt('p16bt');
		document.getElementById('cropstype').value='true';
	}
	else if(valhds=='pp')
	{
		document.getElementById('cropstype').value='false';
	}
	
	flags="";	
	//document.getElementById('hdscrop').style.display="block";
	flags=val;
	//cropimgs zssadasd
	document.getElementById('Idleftofimage').style.visibility="hidden";
	document.getElementById('Idrigthofimage').style.visibility="hidden";
	if (document.getElementById('hdscrop').value=='true')
		{
			flags='false';
			document.getElementById('hdscrop').value='false';
	 	    try{
				gis.destroy();
			}
			catch(exd)
			{
			}
		}
		else
		{
			//alert('asdasda')
			var $cropimg=jQuery.noConflict();
			$cropimg(function(){
				$cropimg('#imgpage_'+valpsin).Jcrop({
				  aspectRatio: 1,
				   onSelect: updateCoords
				},function(){
				gis=this;
				});
			  });
			  
			  flags='true';
			  document.getElementById("hdscrop").value='true';
		}
	
}

function cropreturn()
{
	var $jqpagcrop=jQuery.noConflict();
	var valpsin1= currenthds;
	 if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {	
		if (document.getElementById('hdscrop').value=='true')
		{
			gis.destroy();
				flags='false';
				document.getElementById('hdscrop').value='false';
				//document.getElementById('hdscrop').style.display="none";
			
		}
		else
		{
			
			  flags='true';
			  document.getElementById("hdscrop").value='true';
		}
	 } 
	//return false;
}
//alert(document.getElementById('hdscrop').value)
if (flags=='true')
{
	if(flags1=='true')
	{
	var kjl=false;
	flags1='false';
	}
}
else if (flags=='false')
{ 
	var valpsin1= currenthds;

			$jqpagcrop(function(){
				$jqpagcrop('#imgpage_'+valpsin1).Jcrop({
				  aspectRatio: 1,
				  onSelect: updateCoords
				},function(){
				gis=this;
				});
			  });		  

}

  function updateCoords(c)
  {
	  var $cropimg=jQuery.noConflict();
   	$cropimg('#x').val(c.x);
    $cropimg('#y').val(c.y);
    $cropimg('#w').val(c.w);
    $cropimg('#h').val(c.h);
  };

  function checkCoords()
  {
  		var pnumber="";
  		var pmode="";
  		var ecode="";
  		var pgdate="";
		
			var valpsins= currenthds;
			if(currenthds=='undefined'){
			valpsin= 1;
			}else {
			valpsin= currenthds;
			}
			
  		if(document.getElementById('pgnum').value=="" || document.getElementById('pgnum').value==null)
		{
 			pnumber='1';
			pmode='1'; /*document.getElementById('mod').value;*/
		} else {
			 pnumber=document.getElementById('pgnum').value;
			 pmode=document.getElementById('mod').value;
 		}
  		var priimage=document.getElementById('pimg').value;
		if(priimage=="")
		{
			pimg="clipimg"; 
	 	}
		else
		{
			pimg="priimage"; 
	 	}
		
		if(document.getElementById('imgsrc').value!="")
		{ }
		if(document.getElementById('imgname').value!="")
		{ }
		
		if(document.getElementById('edcode').value!="" || document.getElementById('edcode').value!=''){
			ecode=document.getElementById('edcode').value;
		}
		if(document.getElementById('pgdate').value!="" || document.getElementById('pgdate').value!=''){
			pgdate=document.getElementById('pgdate').value;
		}
	
	var $cropimg=jQuery.noConflict();
    ratimg=1;
	document.getElementById('pimg').value="";
    if (parseInt($cropimg('#w').val()))
	{
		var	Pwidth=parseInt($cropimg('#w').val())/ratimg;
		var	Pheight=parseInt($cropimg('#h').val())/ratimg;
		var	Pxpos=parseInt($cropimg('#x').val())/ratimg;
		var	Pypos=parseInt($cropimg('#y').val())/ratimg;
		
		//$_POST['x'],$_POST['y'],
		//$targ_w,$targ_h,$_POST['w'],$_POST['h']
			
			var	tooltipsss=document.getElementById('tooltips').value;
			var boxidsss=document.getElementById('boxidhiddenshares').value;
			
		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		}
			
			var url="/crop.php?w="+Pwidth+"&h="+Pheight+"&x="+Pxpos+"&y="+Pypos+"&pimage="+pimg+"&tooltips="+tooltipsss+"&pnumber="+valpsin+"&pmode="+pmode+"&boxid="+boxidsss+"&edcode="+ecode+"&pagedate="+pgdate+"&imgsrc="+document.getElementById('imgsrc').value+"&imgname="+document.getElementById('imgname').value;
		//alert(url)
		xmlHttp.onreadystatechange=cropres
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

    }
	else
	{
		alert('Please select a crop region then press submit.');
    	return false;
	}
	
	
  };


function cropres()
{

		selectedflag="true";

	 if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {
			document.getElementById('Idleftofimage').style.visibility="visible";
			document.getElementById('Idrigthofimage').style.visibility="visible";
	 		var httpresponses =xmlHttp.responseText;
			httpresponses=trim(httpresponses);
			if(httpresponses.indexOf('printing')>0)
			{
			var url="printimage.php";
			popupWindow = window.open(
				url,'popUpWindow','height=700,width=800,left=200,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			document.getElementById('hdscrop').value='false';
			 gis.destroy();
	  		/*$(function () {
				$('.map').maphilight({
							fillColor: '008800'
						});
			});*/
			}
			else
			{
					var	tooltipshds=trim(document.getElementById('tooltips').value);
					if(tooltipshds=="t" || tooltipshds=='t')
					{
						if(httpresponses=='a'){
							alert("Article already added to your bookmarks.");
						} else {
							alert("Article successfully added to your bookmarks.");
						}
					} else {
						if(httpresponses.indexOf('clipings')>0){
							//alert("Clip successfully added to your Clipbook.");
						} else if(httpresponses=='a'){
							alert("Clip already added to your Clipbook.");
						}
					
					}
					document.getElementById('hdscrop').value='false';
					gis.destroy();
							}
			
			 var res1 = httpresponses.split('~~~~'); 	
			 var ressss=res1[1]; 		
		   if(res1[0]!='printing')	
		   testforapi(ressss);
		   return false;
	 }
}



	  function doitprintout()
	  {
		  document.getElementById('tooltips').value="";	
    	  document.getElementById('pimg').value="1";
		  checkCoords();
	  }
	  
	  function doitclipout()
	  {
		   document.getElementById('tooltips').value="";
		  document.getElementById('pimg').value="";
		  checkCoords();
	  }
	  
	  function doitcloseout()
	  { 
		   setTimeout("cropimgs(document.getElementById('hdscrop').value)",1000);
           return false;
	  }
	  
      function doitprint()
	  {
	   	  document.getElementById('pimg').value="1";
		  document.getElementById('tooltips').value="t";
		  checkCoords();
	  }
	  
	  
	  function doitclip()
	  {
	 	  document.getElementById('pimg').value="";
		  document.getElementById('tooltips').value="t";
		  checkCoords();
	  }



function currentedition(vals,valtype)
{
		if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
		} 
		
		var valpsin;
		valpsin=document.getElementById("pgnum").value;
		var edcode=document.getElementById("edcode").value;
		var pgno=valpsin;
		var strmmode=document.getElementById("mmode").value;
		var pgdate1=document.getElementById("pgdate1").value;
		
	    //alert(document.getElementById('boxidhiddenshares').value)
		if(document.getElementById('boxidhidden').value=="")
		{
			document.getElementById('boxidhidden').value=document.getElementById('boxidhiddenshares').value;
		}

		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		}
		var url='https://epaper.navbharattimes.com/currentedinew.php?mod='+strmmode+"&pageno="+pgno+"&ed="+edcode+"&dt="+pgdate1+"&boxids="+document.getElementById('boxidhidden').value+"&parentids="+document.getElementById('parentidhidden').value+"&downtype="+valtype;
		//alert(url)
		xmlHttp.onreadystatechange=pdfres
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}	  
	  
	  
function currentissues(vals,valtype)
{
		if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
		} 
		
		var valpsin;
		if(document.getElementById('turnpagenumber').value=="1" || document.getElementById('turnpagenumber').value=="")
		valpsin=1;
		else
		valpsin=document.getElementById('turnpagenumber').value; 
		


		var edcode=document.getElementById("edcode").value;
		var pgno=valpsin;
		var strmmode=document.getElementById("mmode").value;
		var pgdate1=document.getElementById("pgdate1").value;
		
	    //alert(document.getElementById('boxidhiddenshares').value)
		if(document.getElementById('boxidhidden').value=="")
		{
			document.getElementById('boxidhidden').value=document.getElementById('boxidhiddenshares').value;
		}


		xmlHttp=GetXmlHttpObject()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		}
		var url='https://epaper.navbharattimes.com/currentissuesnew.php?mod='+strmmode+"&pageno="+pgno+"&ed="+edcode+"&dt="+pgdate1+"&boxids="+document.getElementById('boxidhidden').value+"&parentids="+document.getElementById('parentidhidden').value+"&downtype="+valtype;
		//alert(url)
		xmlHttp.onreadystatechange=pdfres
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)

}



function pdfres()
{
	 if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	 {
	 		var httpresponses =xmlHttp.responseText;
			httpresponses=trim(httpresponses);
			trim(httpresponses);
			window.open(httpresponses);
			return false;
	}
		
}  
	  
	  
function checkres(mod,pgnum,edition,pgdate,titleheader)
{	
	 pgdate='2019-05-11';
	 var screenwidth=window.screen.availWidth;	
	 if(screenwidth>='1200' && mod=='2'){
		 
		 window.location.href="index.php?mod="+mod+"&pgnum="+pgnum+"&edcode="+edition+"&pagedate="+pgdate;
		//strurl1="epaper_"+mod+"_"+pgnum+"_"+edition+"_"+pgdate+"_"+titleheader+".html";
		window.location.href=strurl1;
	
	 } else  if(mod=='1'){
		 window.location.href="index.php?mod="+mod+"&pgnum="+pgnum+"&edcode="+edition+"&pagedate="+pgdate;
		//strurl1="epaper_"+mod+"_"+pgnum+"_"+edition+"_"+pgdate+"_"+titleheader+".html";
		window.location.href=strurl1;
	
	 } else  {
		alert('Warning:Best view on 1366*768');
		return false;
	 }
     return false;
}	  
	  


function setdivpos()
{
var leftPos = -20;
/*	this.bearer.offset().left;*/
var topPos = -20;
var _yd = -1;
try
{
try
{
_yd=document.getElementById('contentDivImg').offsetWidth;
}
catch (erd23)
{
}
xd=document.getElementById('outdivd');


if(xd !== null && xd !== "undefined")
{
	
	var _x = 0;
	 var _y = 0;
	
	 var el=xd;
	 var N= navigator.appName;
	var UA= navigator.userAgent;
	var temp;
	var browserVersion= UA.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
	if(browserVersion && (temp= UA.match(/version\/([\.\d]+)/i))!= null)
	browserVersion[2]= temp[1];
	browserVersion= browserVersion? [browserVersion[1], browserVersion[2]]: [N, navigator.appVersion,'-?'];
	 try
	 {
		while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
				_x += el.offsetLeft;
				_y += el.offsetTop ;
				el = el.offsetParent;
	 }

if(browserVersion[0]=="Chrome" || browserVersion[0]=="MSIE")
leftPos=_x+4;
else
{

leftPos=_x+4;
}

topPos= _y;

		
	 }
	 catch (er2)
	 {
	 
	 }
	document.getElementById('previd1').style.left =leftPos.toString() + "px";
	document.getElementById('previd1').style.top=(topPos+ 200).toString() + "px";
	//document.getElementById('previd1').style.visibility="visible";
	
	var pgno=document.getElementById("pgnumber").value;
	if(pgno!='1' && pgno!='0')
	{
		document.getElementById('previd1').style.visibility="hidden";
		document.getElementById('Idleftofimage').style.visibility="hidden";
		document.getElementById('Idleftofimagebottom').style.visibility="hidden";
		//document.getElementById("leftarrowpng").style.cursor="Pointer";

	}
	
	var totpage=document.getElementById("totalpages").value;
	if(parseInt(pgno)==parseInt(totpage))
	{
			document.getElementById('nextid1').style.visibility="hidden";
			document.getElementById('Idrigthofimage').style.visibility="hidden";
			document.getElementById('Idrigthofimagebottom').style.visibility="hidden";
			//document.getElementById("rightarrowpng").style.cursor="Default";

	}else
	{
			document.getElementById('nextid1').style.visibility="hidden";
			document.getElementById('Idrigthofimage').style.visibility="hidden";
			document.getElementById('Idrigthofimagebottom').style.visibility="hidden";
			//document.getElementById("rightarrowpng").style.cursor="Pointer";

	}
	
	var st=532
	var sthdsheight=797;
	try
	{
		st=document.getElementById('imgpage').offsetWidth;
		sthdsheight=document.getElementById('imgpage').offsetHeight;
	}
	catch (erds)
	{
	}
	if(browserVersion[0]=="Chrome" || browserVersion[0]=="MSIE")
		leftPos=_x+st+4;
	else
	{
		
			leftPos=_x+ st+4;
	}
		
	topPos= _y;
	

}

}
catch (err1)
{
//alert(err1);
}
document.getElementById('dpageid').style.left =(leftPos).toString() + "px";
document.getElementById('dpageid').style.top=topPos.toString() + "px";
document.getElementById('dpageid').style.visibility="hidden";
document.getElementById('nextid1').style.left =(leftPos-24).toString() + "px";
document.getElementById('nextid1').style.top=(topPos+ 200).toString() + "px";
//document.getElementById('nextid1').style.visibility="visible";
//document.getElementById('nextid1').style.display="block";
//alert(leftPos);
//alert(topPos);
try
	{
		document.getElementById('Idleftofimage').style.left =(leftPos-st-4).toString() + "px";
		document.getElementById('Idleftofimage').style.top=(topPos).toString() + "px";
		document.getElementById('Idleftofimage').className ="div_hover";
		//document.getElementById('Idleftofimage').style.visibility="visible";

		document.getElementById('Idrigthofimage').style.left =(leftPos-4-53).toString() + "px";
		document.getElementById('Idrigthofimage').style.top=(topPos).toString() + "px";
		document.getElementById('Idrigthofimage').className="div_hover1";
		//document.getElementById('Idrigthofimage').style.visibility="visible";

		document.getElementById('Idleftofimagebottom').style.left =(leftPos-st-4).toString() + "px";
		document.getElementById('Idleftofimagebottom').style.top=(topPos+ sthdsheight-39).toString() + "px";
		document.getElementById('Idleftofimagebottom').className ="div_hover2";
		//document.getElementById('Idleftofimagebottom').style.visibility="visible";
				
		document.getElementById('Idrigthofimagebottom').style.left =(leftPos-4-53).toString() + "px";
		document.getElementById('Idrigthofimagebottom').style.top=(topPos+sthdsheight-39).toString() + "px";
		document.getElementById('Idrigthofimagebottom').className="div_hover3";
		//document.getElementById('Idrigthofimagebottom').style.visibility="visible";

	}
	catch (ert5)
	{
		alert(ert5);
	}
			
}


function LTrim( value )
{
	var re = /\s*((\S+\s*)*)/;
	return value.replace(re, "$1");
}
// Removes ending whitespaces
function RTrim( value ) {
	var re = /((\s*\S+)*)\s*/;
	return value.replace(re, "$1");
}

// Removes leading and ending whitespaces
function trim( value ) {
	return LTrim(RTrim(value));
}

function resetrevert()
{

	//document.getElementById('hdscrop').style.display="none";
	flags='true';
		$(function () {
		$('.map').maphilight({
			fillColor: '008800'
			});
		});
}

</script>
<style type="text/css">
  #target {
    background-color: #ccc;
    width: 500px;
    height: 330px;
    font-size: 24px;
    display: block;
  }
</style>
<style>
  .transparent {
   filter:alpha(opacity=30); 
   -moz-opacity: 0.3; 
   opacity: 0.3; 
}


</style>

<!-- code end for  crop img-->

<style>
img[usemap] {
border: none;
height: auto;
max-width: 100%;
width: auto;
}
/*
img {
border: none;
height: auto;
max-width: 100%;
width: auto;
}*/
</style>

<!---button start--->

<!-- <div id="hbutton" class="nextprev">
<img src="images/arrow_left.jpg" onclick="abcpre();" style="cursor:pointer;cursor:hand">
<img src="images/arrow_right.jpg" onclick="abcnext();" style="cursor:pointer;cursor:hand">
</div> -->
<!---button end--->
			<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<div style="width:100%;backgroundcolor:red;height:40px;"><img src="/images/1000x200Banner1.jpg" style="width:89%;margin: 9px 0px;" />
</div>
<div id="maincontainer">
<div class="epaperdiv" style="margin-top: 10px;margin-bottom: 0px;border:1px solid #e7e7e7;">
<div style="width:100.1%;margin-bottom:4.8%;margin-left:0px;display:none;">
<div style="height: 65px; text-align: center; font-size: 2em; padding-top: 40px; color: #F82723;display:none;" id="r">Page # 1</div>
            <div id="red" class="pager" style="text-align:right;">
            <div class="btn disabled">First</div><div class="btn disabled">Prev</div><ul width="600px" style="display:none;" ><li><a id="1" class="red normal active" href="javascript:void(0)">1</a></li><li><a id="2" class="red normal" href="javascript:void(0)">2</a></li><li><a id="3" class="red normal" href="javascript:void(0)">3</a></li><li><a id="4" class="red normal" href="javascript:void(0)">4</a></li></ul><div class="btn">Next</div><div class="btn btnLast">Last</div>
			
			
			<select id="tpgnumber" style="color:#000;background-color: #fff;margin:0px;width:87px;height:24px;font-size:12px;cursor:pointer;" onchange="pagechange(this.value)"> <option value="1" style="font-size:12px;cursor:pointer;" >Page 1 </option>
			<option value="2" style="font-size:12px;cursor:pointer;" >Page 2 </option>
			<option value="3" style="font-size:12px;cursor:pointer;" >Page 3 </option>
			<option value="4" style="font-size:12px;cursor:pointer;" >Page 4 </option>
			<option value="5" style="font-size:12px;cursor:pointer;" >Page 5 </option>
			<option value="6" style="font-size:12px;cursor:pointer;" >Page 6 </option>
			<option value="7" style="font-size:12px;cursor:pointer;" >Page 7 </option>
			<option value="8" style="font-size:12px;cursor:pointer;" >Page 8 </option>
			<option value="9" style="font-size:12px;cursor:pointer;" >Page 9 </option>
			<option value="10" style="font-size:12px;cursor:pointer;" >Page 10 </option>
			<option value="11" style="font-size:12px;cursor:pointer;" >Page 11 </option>
			<option value="12" style="font-size:12px;cursor:pointer;" >Page 12 </option>
			<option value="13" style="font-size:12px;cursor:pointer;" >Page 13 </option>
			<option value="14" style="font-size:12px;cursor:pointer;" >Page 14 </option>
			<option value="15" style="font-size:12px;cursor:pointer;" >Page 15 </option>
			<option value="16" style="font-size:12px;cursor:pointer;" >Page 16 </option>
			<input type='hidden' id='totalpages' value='16'><input type='hidden' id='pgnumber' value='1'><input type='hidden' id='mmode' value='1'>			
			<img src="/images/zoom_out.png" class="zivzo" border="0" title="Zoom Out" onclick="closedivdan();">								
			<img src="/images/zoomactualsize.png" class="zivzo" title="Normal View" onclick="closedivdan();"  border="0">
			<img src="/images/zoom_in.png" class="zivzo" border="0" title="Zoom In" onclick="zoooinhds('1');">
			&nbsp;&nbsp;&nbsp;
			</div>
</div>

<!--javascript:changethumb('');-->
<!-----display sub edition name end------>


 <script>
       var gi=1;
       function pagechange(val){
				
				//document.getElementById('textgo').value=val;
				//document.getElementById('dango').click();
				document.getElementById('tpgnumber').value=val;
				
				try{
				document.getElementById('imgpage_'+val).outerHTML=document.getElementById('imgpage_'+val).outerHTML.replace('ss.jpg','.jpg');
				}catch (err) {
					//alert(err);
				}

				document.getElementById('turnpagenumber').value=val;
			    var tpages=document.getElementById('totalpages').value;	
				//var pagechangeidselected="pgmain"+val;
			
			if(gi==12){
				gi=1;
				//zoooinhds_ads('ads');
			}	
			gi=gi+1;	
			
		try{	
		
		 for(var i=0;i<document.getElementById('totalpages').value;i++){
		 if(i==val){
		 var pagechangeidselected="pgmain"+i; 
		 document.getElementById(pagechangeidselected).outerHTML=document.getElementById(pagechangeidselected).outerHTML.replace('pagethumb','pagethumbselect');
		 document.getElementById(pagechangeidselected).outerHTML=document.getElementById(pagechangeidselected).outerHTML.replace('grthumbpgnumber','orgthumbpgnumber');
		 document.getElementById(pagechangeidselected).outerHTML=document.getElementById(pagechangeidselected).outerHTML.replace('thumbtitle','thumbtitleselect');           
    	} else {
		   var pagechangeid="pgmain"+i;    									   
		   document.getElementById(pagechangeid).outerHTML=document.getElementById(pagechangeid).outerHTML.replace('pagethumbselect','pagethumb');
		   document.getElementById(pagechangeid).outerHTML=document.getElementById(pagechangeid).outerHTML.replace('orgthumbpgnumber','grthumbpgnumber');
		   document.getElementById(pagechangeid).outerHTML=document.getElementById(pagechangeid).outerHTML.replace('thumbtitleselect','thumbtitle');}
		}
			}
			catch (err)
			{
				//alert(err);
			}
			
			var $jqpag=jQuery.noConflict();

			$jqpag('.map').maphilight({
								fillColor: '008800'
			});
			
			try
			{
	        	$jqpag("#bookfliphds").turn("page",val);
			}
			catch (err)
			{
				//alert(err);
			}

			if(document.getElementById('pagerefreshparent').value=="true")
			{
				setTimeout(function(){
				var newHts= newHeight; 
				var newWts=newWid;
				$jqpag(".flipbook-viewport").css("width", newWid);
				$jqpag(".flipbook-viewport .shadow,.flipbook-viewport .shadow>.page-wrapper,.flipbook-viewport .shadow>.page-wrapper>div,.flipbook-viewport .shadow>.page-wrapper>div>div,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage,.flipbook-viewport .shadow>.page-wrapper>div>div>.shadowimage>canvas").css("height", newHeight);
				$jqpag(window).scroll(function () {
				$jqpag('.pager').css({'width': newWts});
				});
				}, 1000);
    		}        
	
			try
			{	
				if(document.getElementById('pagerefreshparent').value=="true")
				{
			
					if(val=="1" && document.getElementById('pagerefresh').value=="false" && document.getElementById('curpgnum').value==""){
						$jqpag("#bookfliphds").turn("page",val);
					}else{

							var atype=document.getElementById('archivetype').value;
							
							document.getElementById('curpgnum').value=val;
							if(document.getElementById('curpgnum').value!=document.getElementById('pgnum').value){
							//var url="https://epaper.navbharattimes.com/"+"indexnext.php?mod=1&pgnum="+val+"&edcode="+document.getElementById("edcode").value+"&pagedate="+document.getElementById("pgdate").value+"&type="+atype;
							var url="/epaper_1_"+val+"_"+document.getElementById("edcode").value+"_"+document.getElementById("pgdate").value+"_"+atype+".html";
							var win = window.open(url, '_self');
							win.focus();
							document.getElementById('curpgnum').value=val;
							document.getElementById('pgnum').value=val;
							document.getElementById('prepgnum').value="true";
							return false;
							}
					}
				
				}else{
						try
						{
							$jqpag("#bookfliphds").turn("page",val);
						}
						catch (err)
						{
							//alert(err);
						}
				}
				
		    	
			}
			catch (err)
			{
				//alert(err);
			}



			try

			{

				var chid='outdivd'+val;

				//alert(chid);

	            document.getElementById(chid).style.display="block";

			}

			catch (err)

			{

			   //alert(err);

			}
			var pnum=document.getElementById('turnpagenumber').value;
			var actuallinkurl=document.getElementById('actuallink').value;
			if(actuallinkurl.indexOf("Page")>0)
			{
				var res = actuallinkurl.split("Page-");
				pnum=parseInt(pnum)+parseInt(1);
				var strurl1 = actuallinkurl.replace(res[1], pnum+".html");
			}else{
				var pgdt=document.getElementById("pgdate1").value;
				actuallinkurl="https://epaper.navbharattimes.com/delhi/"+pgdt+"/13/Page-1.html";
				var res = actuallinkurl.split("Page-");
				pnum=parseInt(pnum)+parseInt(1);
				var strurl1 = actuallinkurl.replace(res[1], pnum+".html");
			}
			
			//alert("--hh--"+document.getElementById('turnpagenumber').value);	
			if(document.getElementById('turnpagenumber').value!=1){
				//ga('send', 'pageview',strurl1); 
				//ga('newTracker.send','pageview',strurl1);
				//Beacon('init', '6035286');
				//comScore();
			}
			//relatenewshds();
       }


function relatenewshds()
{
	return false;

	var ecode=document.getElementById('edcode').value;
	var pgnum=document.getElementById('turnpagenumber').value;
	var pgdate=document.getElementById('pgdate1').value;	
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
	alert ("Browser does not support HTTP Request")
	return
	}
	var url="/relatenews.php?pgnum="+pgnum+"&pgdate="+pgdate+"&ecode="+ecode;
	//alert(url)
	xmlHttp.onreadystatechange=resulrres
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function resulrres()
{
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
	{
		var httpresponses =xmlHttp.responseText;
		document.getElementById("newsres").innerHTML=httpresponses;
	}
}

</script>
<div class="loader"></div>
<div class="flipbook-viewport flipViewH1"  id="zoom-viewport">
	<div class="container">
		<div class="flipbook" id="bookfliphds" style="position:relative;width:100%;margin-bottom: 10px;">
			
















<div id='outdivd1' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-1.jpg' usemap='#enewspaper1' class='map shadowimage' id='imgpage_1'><map name='enewspaper1'><map name="Maps"><area shape="rect" class="borderimage"  coords="434.24,663.32,671.6,1071.36"coords="472.056944881891,721.700787401577,730.57662992126,1152.56692913386" href="#" onclick="return show_pop('4661','76363','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,380.88,589.72,499.41"coords="468.825448818898,414.265826771654,641.171905511813,537.437127258127" href="#" onclick="return show_pop('4661','76387','4')" onMouseover="borderit(this,'black',' नौकरी के बदले ज़मीन मामले मे CBI की नौ जगह तलाशी <br /><p>दिल्ली में RJD नेता के यहां.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="425.04,152.72,588.8,381.3"coords="462.628456692913,166.895999999999,640.905905511813,410.134" href="#" onclick="return show_pop('4661','76386','4')" onMouseover="borderit(this,'black',' ED से बोला सुप्रीम कोर्ट, डर का माहौल न बनाए <br /><p>भूपेश बघेल को फंसाने के आरो.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="354.2,667,425.04,879.78"coords="385.883716535433,725.281763779523,462.362456692913,946.655999999995" href="#" onclick="return show_pop('4661','76394','4')" onMouseover="borderit(this,'black',' चीनी की जगह स्वीटनर लेने पर WHO ने चेताया <br /><p>n पीटीआई, नई दिल्ली : WHO न.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="348.68,504.16,589.72,658.44"coords="379.420724409449,548.982110236221,641.171905511807,708.623999999995" href="#" onclick="return show_pop('4661','76393','4')" onMouseover="borderit(this,'black',' धार्मिक आज़ादी पर रिपोर्ट के ज़रिये US ने साधा निशाना, भारत ने जताया एेतराज़ <br /><p>ब्लिंकन ने नहीं लिया भारत क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="266.8,507.84,343.16,658.44"coords="290.016000000001,552.672,373.107338582677,708.623999999995" href="#" onclick="return show_pop('4661','76391','4')" onMouseover="borderit(this,'black',' पाक को सूचनाए  देने के आरोपी पत्रकार पर छापे <br /><p>n विस, नई दिल्ली : सीबीआई न.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,152.72,418.6,505.92"coords="111.206551181102,166.895999999999,455.899464566929,544.463999999998" href="#" onclick="return show_pop('4661','76388','4')" onMouseover="borderit(this,'black',' कशमकश जारी, CM तय करने अब राहुल भी उतरे  <br /><p>दिल्ली पहुंचकर खरगे से मिले.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,877.68,425.04,1063.92"coords="111.206551181102,954.863999999995,462.362456692914,1144.16503937008" href="#" onclick="return show_pop('4661','76397','4')" onMouseover="borderit(this,'black',' हाशिये पर चल रहे नेताओ को BJP मे अहम पद दिलाने का देता था झासा, पुलिस ने दबोचा <br /><p>पूछताछ में आरोपी ने बताया क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,658.72,348.68,880.71"coords="111.206551181102,716.831999999995,379.420724409449,947.408818897638" href="#" onclick="return show_pop('4661','76395','4')" onMouseover="borderit(this,'black',' तीन दिन देर से चल रहा मॉनसून, मौसम विभाग ने कहा- 4 जून तक केरल पहुचेगा <br /><p>दिल्ली में मंगलवार को धूल भ.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,505.08,254.84,658.44"coords="111.206551181102,549.742110236221,277.090015748032,708.623999999995" href="#" onclick="return show_pop('4661','76390','4')" onMouseover="borderit(this,'black',' पूरे ज्ञानवापी परिसर के सर्वे की माग, 22 को सुनवाई <br /><p>n एनबीटी न्यूज, वाराणसी</p>.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,154.56,671.6,307.83"coords="654.097889763779,168.416,730.57662992126,331.055999999998" href="#" onclick="return show_pop('4661','76384','4')" onMouseover="borderit(this,'black',' लेटर देकर PM बोले- नौकरी मे भ्रष्टाचार खत्म <br /><p>n पीटीआई, नई दिल्ली : प्रधा.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,505.08,671.6,658.44"coords="654.097889763779,549.806740157475,730.57662992126,708.623999999995" href="#" onclick="return show_pop('4661','76392','4')" onMouseover="borderit(this,'black',' 1 जून से दर्शको के लिए खुलेगा राष्ट्रपति भवन <br /><p>n विस, नई दिल्ली : आम दर्शक.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="595.24,309.12,671.6,502.2"coords="647.634897637793,336.075590551181,730.57662992126,540.737007874016" href="#" onclick="return show_pop('4661','76385','4')" onMouseover="borderit(this,'black',' नये ससद भवन की शुरुआत 28 मई को मुमकिन   <br /><p>n विस, नई दिल्ली : नये संसद.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="21.16,790.28,94.76,888.15"coords="23.2123821665629,859.544384467961,103.114146166563,955.843023622052" href="#" onclick="return show_pop('4661','74271','4')" onMouseover="borderit(this,'black',' हैपी मॉर्निंग <br /><p>चिंटू प्रार्थना कर रहा था। .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,354.2,95.68,422.22"coords="21.8018267716536,385.172787401572,104.743559055118,454.175999999998" href="#" onclick="return show_pop('4661','74667','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,156.4,95.68,354.33"coords="21.8018267716536,170.233889799405,104.904676925868,381.26290058885" href="#" onclick="return show_pop('4661','74511','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,424.12,95.68,792.36"coords="21.8018267716535,461.140472440945,104.743559055118,852.797795275592" href="#" onclick="return show_pop('4661','76389','4')" onMouseover="borderit(this,'black',' फटाफट खबरें <br /><p>दिल्ली के LG ने सेवा मामलों.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,154.38"coords="21.8018267716532,21.5433070866142,730.672422924134,166.895999999999" href="#" onclick="return show_pop('4661','76383','4')" onMouseover="borderit(this,'black',' बिपाशा से प्रेरित हो तापसी ने बनाई बॉडी <br /> <p><E>www.nbt.in</E></p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,883.2,95.68,1064.85"coords="21.6348233119835,960.24383924156,104.743559055118,1145.928" href="#" onclick="return show_pop('4661','76396','4')" onMouseover="borderit(this,'black',' सर्राफा <br /><p>सोना स्टैंडर्ड (99.5 शुद्धत.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd2' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-2.jpg' usemap='#enewspaper2' class='map shadowimage' id='imgpage_2'><map name='enewspaper2'><map name="Maps"><area shape="rect" class="borderimage"  coords="430.56,180.32,589.72,423.15"coords="468.825448818898,196.135242458671,641.171905511813,455.640757541326" href="#" onclick="return show_pop('4669','71362','4')" onMouseover="borderit(this,'black',' यमुना पर बनेगा 11 KM का ट्रैकिग-एडवेचर का रास्ता <br /><p>यह ट्रैक आईटीओ बैराज के पास.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,51.52,589.72,177.63"coords="468.825448818891,56.5439999999998,641.171905511802,191.519999999999" href="#" onclick="return show_pop('4669','71361','4')" onMouseover="borderit(this,'black',' SC ने पूछा- LG को एल्डरमैन की नियुक्ति की पावर कहा से मिली? <br /><p>n विस, नई दिल्ली : एमसीडी क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="427.8,862.04,586.04,1071.36"coords="465.593952755905,937.133858267711,637.940409448817,1152.56692913386" href="#" onclick="return show_pop('4669','71173','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="394.68,651.36,589.72,864.9"coords="429.185763779528,708.019272309068,641.171905511813,930.239999999995" href="#" onclick="return show_pop('4669','71369','4')" onMouseover="borderit(this,'black',' HC को भा गई सुदर नर्सरी की सुदरता, ट्रस्ट को मिली तारीफ <br /><p>n विस, नई दिल्ली: साउथ दिल्.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="272.32,433.32,589.72,647.28"coords="296.478992125984,471.837131480297,641.171905511818,696.484705571357" href="#" onclick="return show_pop('4669','71374','4')" onMouseover="borderit(this,'black',' अॉफिसर, सरकार फाइलो पर आमने-सामने <br /><p>विस, नई दिल्ली : राजशेखर के.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="271.4,651.36,384.56,864.9"coords="295.940409448819,708.019272309068,418.225606299213,930.239999999995" href="#" onclick="return show_pop('4669','71370','4')" onMouseover="borderit(this,'black',' पूरे देश मे सबसे महगी बिजली दिल्ली मे: BJP <br /><p>बीजेपी ने दिल्ली सरकार के द.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="263.12,862.04,422.28,1071.36"coords="286.784503937008,937.133858267711,459.130960629921,1152.56692913386" href="#" onclick="return show_pop('4669','71164','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,609.04,260.36,780.27"coords="111.206551181102,662.212910114191,283.553007874016,839.951999999995" href="#" onclick="return show_pop('4669','71371','4')" onMouseover="borderit(this,'black',' टीचर्स बोले - MCD स्कूलो मे पैरट्स की भागीदारी बढ़े  <br /><p>n विस, नई दिल्ली : एमसीडी स.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,938.4,671.6,1063.92"coords="654.097889763779,1020.984,730.57662992126,1144.104" href="#" onclick="return show_pop('4669','71366','4')" onMouseover="borderit(this,'black',' हेड कॉन्स्टेबल ने दी जान <br /><p>n विस, द्वारका : दिल्ली पुल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,817.88,671.6,942.09"coords="654.097889763779,889.959999999995,730.57662992126,1013.08" href="#" onclick="return show_pop('4669','71365','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,703.8,671.6,825.84"coords="654.097889763779,765.015999999997,730.57662992126,888.135999999997" href="#" onclick="return show_pop('4669','71364','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="601.68,582.36,671.6,704.01"coords="654.097889763779,633.231999999999,730.57662992126,757.871999999995" href="#" onclick="return show_pop('4669','71363','4')" onMouseover="borderit(this,'black',' डॉक्टरो से हिसा पर मागी रिपोर्ट <br /><p>n विस, नई दिल्ली: 2017 में .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="597.08,48.76,670.68,580.32"coords="649.160011477791,53.5566622647538,729.056581139467,624.801925683479" href="#" onclick="return show_pop('4669','66123','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="95.68,432.4,265.88,612.87"coords="104.743559055118,470.591999999998,289.636,659.376" href="#" onclick="return show_pop('4669','68644','4')" onMouseover="borderit(this,'black',' पहली महिला इटरसिटी बस शुरू <br />.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,782,257.6,1071.36"coords="21.8018267716548,850.874456692919,280.256881889764,1152.56692913386" href="#" onclick="return show_pop('4669','71156','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,432.4,90.16,589.62"coords="21.8018267716536,470.678173228343,98.2805669291336,634.752" href="#" onclick="return show_pop('4669','71373','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,32.2,425.04,429.66"coords="21.8018267716536,35.5679999999999,462.362456692914,462.383999999998" href="#" onclick="return show_pop('4669','71360','4')" onMouseover="borderit(this,'black',' न जाच न सवाल... पैसे दो, रिपोर्ट लो <br /><p>n विस, नई दिल्ली : बढ़ती गर.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,594.32,90.16,780.27"coords="21.8018267716535,646.000037109372,98.2805669291336,839.951999999995" href="#" onclick="return show_pop('4669','71372','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd3' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-3.jpg' usemap='#enewspaper3' class='map shadowimage' id='imgpage_3'><map name='enewspaper3'><map name="Maps"><area shape="rect" class="borderimage"  coords="427.8,459.08,506.92,564.51"coords="465.593952755906,499.804724409446,551.76718110236,607.521259842519" href="#" onclick="return show_pop('4670','70805','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="419.52,46.92,506.92,200.88"coords="456.97662992126,51.984,551.76718110236,216.143999999999" href="#" onclick="return show_pop('4670','70874','4')" onMouseover="borderit(this,'black',' कार मे लगी आग, ड्राइवर की जलकर मौत <br /><p>n विस, नई दिल्ली : नरेला इं.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="354.2,563.96,670.68,1071.36"coords="385.172787401574,613.984251968516,729.865700787399,1152.56692913387" href="#" onclick="return show_pop('4670','70788','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="266.8,48.76,411.24,200.88"coords="290.016000000001,53.1598674527834,447.282141732284,216.143999999999" href="#" onclick="return show_pop('4670','70873','4')" onMouseover="borderit(this,'black',' आईपी मे छेड़छाड़ की जाच रिपोर्ट अब तक नही आई <br /><p>n विस, नई दिल्ली : दिल्ली य.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="266.8,397.44,500.48,558.93"coords="290.016,432.577637795275,544.227023622047,601.92" href="#" onclick="return show_pop('4670','70877','4')" onMouseover="borderit(this,'black',' एम्स: दो महीने आधे डॉक्टर रहेगे छुट्टी पर <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="266.8,213.44,671.6,395.25"coords="290.016,232.559999999999,730.57662992126,425.48031496063" href="#" onclick="return show_pop('4670','70875','4')" onMouseover="borderit(this,'black',' पूर्व सीएम से लेकर मत्री तक थे झुग्गीवाले के भक्त <br /><p>सेंट्रल जिला पुलिस ने इसी श.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,563.96,342.24,917.91"coords="111.206551181102,613.167999999997,372.957732283464,987.695999999995" href="#" onclick="return show_pop('4670','70878','4')" onMouseover="borderit(this,'black',' धूल की वजह से विज़िबिलिटी महज़ 1100 मीटर, बिगड़ी हवा <br /><p>मौसम वैज्ञानिकों के अनुसार .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,48.76,671.6,210.18"coords="558.230173228346,53.8582677165354,730.57662992126,226.204724409449" href="#" onclick="return show_pop('4670','70780','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="512.44,400.2,670.68,564.51"coords="557.519244094491,435.174803149608,729.865700787404,607.521259842519" href="#" onclick="return show_pop('4670','70797','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,564.88,95.68,929.07"coords="21.8018267716536,614.232,104.458559055118,999.722999999996" href="#" onclick="return show_pop('4670','66448','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,923.68,342.24,1067.64"coords="21.8018267716536,1004.11199999999,372.957732283464,1148.4737007874" href="#" onclick="return show_pop('4670','70879','4')" onMouseover="borderit(this,'black',' भूकप मे क्या होगा इमारतो का हाल? कार्रवाई सुस्त  <br /><p>एडवोकेट अर्पित भार्गव ने पह.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,47.84,260.36,562.65"coords="21.8018267716536,52.1739999999999,283.900094488189,605.366929133861" href="#" onclick="return show_pop('4670','70876','4')" onMouseover="borderit(this,'black',' हाउस टैक्स मे छूट बद होने से लोगो पर बढ़ा बोझ <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd4' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-4.jpg' usemap='#enewspaper4' class='map shadowimage' id='imgpage_4'><map name='enewspaper4'><map name="Maps"><area shape="rect" class="borderimage"  coords="430.56,561.2,671.6,1071.36"coords="468.825448818898,610.128,730.57662992126,1152.56692913386" href="#" onclick="return show_pop('4671','70423','4')" onMouseover="borderit(this,'black',' मिलकर बनाएं दिल्ली को ज्यादा सेफ <br /><p>फायर कर्मियों ने 9 लोगों को.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,55.2,671.6,297.6"coords="468.825448818898,60.192,730.57662992126,320.527867452783" href="#" onclick="return show_pop('4671','70323','4')" onMouseover="borderit(this,'black',' नामी आयुर्वेदिक कपनियो के नाम पर सप्लाई करते थे खराब जड़ी-बूटी <br /><p>पूरे देश में 6372 लोगों से .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="353.28,55.2,425.04,297.6"coords="384.806551181102,60.192,462.362456692914,320.527867452783" href="#" onclick="return show_pop('4671','70421','4')" onMouseover="borderit(this,'black',' आखो मे मिर्च झोककर कैश और मोबाइल लूटा <br /><p>n विस, बुध विहार : रोहिणी ज.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="353.28,299,539.12,558.93"coords="384.49537007874,325.474328958346,586.595527559056,601.92" href="#" onclick="return show_pop('4671','70420','4')" onMouseover="borderit(this,'black','  शादी से पाच दिन पहले गोली मारकर युवती की जान ली <br /><p>n एनबीटी न्यूज, हापुड़</p><.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="321.08,586.96,418.6,737.49"coords="349.475527559055,638.082834645665,455.037732283464,793.47470866141" href="#" onclick="return show_pop('4671','67409','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="316.48,565.8,421.36,739.35"coords="344.926,615.645201501598,458.725527559055,795.409716535434" href="#" onclick="return show_pop('4671','67288','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="316.48,891.48,425.04,1066.71"coords="344.736000000001,969.607999999997,462.362456692914,1147.18110236221" href="#" onclick="return show_pop('4671','68108','4')" onMouseover="borderit(this,'black',' अहिसा इटरनैशनल का पुरस्कार वितरण समारोह     <br /><p>n रमेश जैन, नई दिल्लीः श्री.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="316.48,736.92,425.04,894.66"coords="344.736,801.799999999996,462.077456692913,962.786999999997" href="#" onclick="return show_pop('4671','67749','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="161,588.8,311.88,739.35"coords="175.405606299212,640.079201501599,339.565606299213,795.599716535433" href="#" onclick="return show_pop('4671','67291','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="150.88,960.48,310.04,1071.36"coords="164.849385826773,1044.64788661417,337.370343307087,1152.56692913386" href="#" onclick="return show_pop('4671','70367','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="150.88,744.28,310.04,954.18"coords="164.840768503938,809.196774803149,337.906771653543,1026.86173228347" href="#" onclick="return show_pop('4671','70350','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="109.48,380.88,342.24,563.58"coords="119.664172103487,414.772470439755,372.798030371204,606.013228346457" href="#" onclick="return show_pop('4671','70417','4')" onMouseover="borderit(this,'black',' पुलिस पर हमला, तीन SI ज़ख्मी <br /><p>हमले में पीसीआर वैन भी क्षत.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="551.08,305.44,671.6,558.93"coords="599.369511811021,332.889574803148,730.728629921261,601.92" href="#" onclick="return show_pop('4671','70419','4')" onMouseover="borderit(this,'black',' स्कूल मे बम रखने का भेजा ई-मेल, निकला फर्ज़ी <br /><p>n विस, साकेत : पुष्प विहार .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="30.36,609.04,149.04,696.57"coords="33.219779527559,662.467464566928,162.51379728827,749.663999999995" href="#" onclick="return show_pop('4671','67562','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="24.84,588.8,154.56,737.49"coords="27.016503937008,640.079201501599,168.511748031496,793.870866141731" href="#" onclick="return show_pop('4671','67362','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,763.6,145.36,866.76"coords="21.8018267716532,830.223042519682,158.601826771653,932.823042519682" href="#" onclick="return show_pop('4671','70333','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,862.04,138.92,1071.36"coords="21.8018267716531,937.13170393701,151.061669291338,1152.56692913386" href="#" onclick="return show_pop('4671','70342','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,581.44,425.04,742.14"coords="21.6971023622048,632.645543307081,462.362456692914,798.911999999994" href="#" onclick="return show_pop('4671','67287','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,561.2,425.04,590.55"coords="21.6971023622048,610.128,462.362456692914,635.964429848062" href="#" onclick="return show_pop('4671','67540','4')" onMouseover="borderit(this,'black',' महानगर खेल <br /><p>आप भी हमें अपनी खेल खबर और .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,44.64"coords="21.6964227531026,21.543307086614,730.57662992126,48.4724541102361" href="#" onclick="return show_pop('4671','70322','4')" onMouseover="borderit(this,'black',' दिल्ली : महानगर : महाकवरेज <br /><p>।  नवभारत टाइम्स ।  नई दिल्.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,45.08,343.16,382.23"coords="21.534408323959,49.4119685039369,373.065448818896,411.235999999998" href="#" onclick="return show_pop('4671','70422','4')" onMouseover="borderit(this,'black',' MCD ने 5450 प्रॉपर्टी सील की थी, लोगो ने 66% की सील तोड़ी <br /><p>रिपोर्ट में कहा गया है कि ए.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,389.16,95.68,563.58"coords="21.5075715693756,423.756850393701,104.743559055119,606.013228346457" href="#" onclick="return show_pop('4671','70416','4')" onMouseover="borderit(this,'black',' धर्म  कर्म <br /><p>n नप्र, नई दिल्लीः प्राचीन .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd5' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-5.jpg' usemap='#enewspaper5' class='map shadowimage' id='imgpage_5'><map name='enewspaper5'><map name="Maps"><area shape="rect" class="borderimage"  coords="434.24,663.32,671.6,1071.36"coords="472.078488188975,721.636157480307,730.57662992126,1152.56692913385" href="#" onclick="return show_pop('4672','71432','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="434.24,459.08,671.6,664.95"coords="472.056944881891,499.740094488188,730.57662992126,715.173165354332" href="#" onclick="return show_pop('4672','71440','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="431.48,398.36,500.48,455.7"coords="469.169722787583,433.123999999998,544.313615795094,490.143149606298" href="#" onclick="return show_pop('4672','70376','4')" onMouseover="borderit(this,'black',' दिल्ली की खबरों के लिए टेलिग्राम पर फॉलो करें <br />.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="269.56,821.56,428.72,1071.36"coords="293.247496062993,893.810267716533,466.046362204725,1152.56692913386" href="#" onclick="return show_pop('4672','71424','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="269.56,656.88,427.8,824.91"coords="293.247496062993,714.806929133861,465.787842519686,887.347275590553" href="#" onclick="return show_pop('4672','71448','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,900.68,260.36,1062.99"coords="200.611275590551,979.004472440938,283.553007874016,1143.64799999999" href="#" onclick="return show_pop('4672','69667','4')" onMouseover="borderit(this,'black',' बस की टक्कर से बुज़ुर्ग की हुई मौत <br /><p>n विस, नई दिल्ली : आईजीआई ए.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,49.68,506.92,394.32"coords="111.054551181102,54.2639999999999,551.615181102365,424.446236220471" href="#" onclick="return show_pop('4672','71528','4')" onMouseover="borderit(this,'black',' तिहाड़ मे पाच बड़े बदलाव...ताकि फिर न हो टिल्लू जैसा हत्याकाड <br /><p>कैदियों का सिक्योरिटी ऑडिट<.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,257.6,671.6,455.7"coords="558.230173228346,280.598544618138,730.57662992126,490.541102362205" href="#" onclick="return show_pop('4672','71529','4')" onMouseover="borderit(this,'black',' सुकेश को दूसरी जेल मे किया गया शिफ्ट <br /><p>दो और कैदी भी फोन टेंपर करक.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,50.6,671.6,253.89"coords="558.230173228346,55.5804949451329,730.57662992126,273.599999999999" href="#" onclick="return show_pop('4672','71530','4')" onMouseover="borderit(this,'black',' चोरी के आरोप मे नाबालिग की पीट-पीटकर हत्या <br /><p>फर्श बाजार थाना पुलिस ने गै.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,658.72,260.36,898.38"coords="21.8018267716539,716.831999999995,283.553007874016,966.217322834644" href="#" onclick="return show_pop('4672','71532','4')" onMouseover="borderit(this,'black',' हाइपरटेशन साइलेट किलर है, समय पर सही जाच कराए <br /><p>जनकपुरी सुपर स्पेशिएलिटी हॉ.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,397.44,425.04,661.23"coords="21.8018267716537,432.439999999998,462.362456692914,711.57692913386" href="#" onclick="return show_pop('4672','71531','4')" onMouseover="borderit(this,'black',' पत्नी, बच्ची को मारकर की खुदकुशी, बेटा भी ज़ख्मी <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,895.16,172.04,1069.5"coords="21.8018267716537,973.314645669292,187.900724409449,1150.02481889763" href="#" onclick="return show_pop('4672','69617','4')" onMouseover="borderit(this,'black',' आईपी मे 22 मई तक आवेदन करने का मौका <br /><p>n विस, नई दिल्ली : गुरु गोब.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,47.84,95.68,392.46"coords="21.8018267716536,52.435811023622,104.458559055118,422.610118110236" href="#" onclick="return show_pop('4672','71527','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd6' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-6.jpg' usemap='#enewspaper6' class='map shadowimage' id='imgpage_6'><map name='enewspaper6'><map name="Maps"><area shape="rect" class="borderimage"  coords="19.32,20.24,671.6,1071.36"coords="21.5433070866129,22.0818897637795,730.318110236221,1152.56692913386" href="#" onclick="return show_pop('4673','3767','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd7' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-7.jpg' usemap='#enewspaper7' class='map shadowimage' id='imgpage_7'><map name='enewspaper7'><map name="Maps"><area shape="rect" class="borderimage"  coords="354.2,563.96,671.6,1071.36"coords="385.881562204727,613.982097637793,730.576629921265,1152.56692913386" href="#" onclick="return show_pop('4674','69701','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="353.28,22.08,671.6,524.52"coords="384.311055118108,24.3223937007852,730.57662992126,564.434645669288" href="#" onclick="return show_pop('4674','69735','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="267.72,109.48,347.76,271.56"coords="291.093165354331,119.242204724409,378.085039370078,292.4288503937" href="#" onclick="return show_pop('4674','69761','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="260.36,38.64,345.92,102.3"coords="283.553007874016,42.2248818897638,376.189228346457,110.948031496063" href="#" onclick="return show_pop('4674','69647','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="187.68,560.28,346.84,666.81"coords="204.919937007875,609.673436220471,377.266393700789,717.389971653538" href="#" onclick="return show_pop('4674','69718','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="185.84,274.16,345,358.05"coords="202.765606299213,298.891842519686,375.693732283464,385.625196850394" href="#" onclick="return show_pop('4674','69727','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="185.84,360.64,345,524.52"coords="202.765606299212,392.088188976378,375.112062992126,564.434645669294" href="#" onclick="return show_pop('4674','69743','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,189.52,263.12,271.56"coords="200.611275590551,206.255622047244,286.784503937008,292.4288503937" href="#" onclick="return show_pop('4674','69752','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,528.08,671.6,554.28"coords="200.431748031495,574.003828691902,730.576629921265,596.686418233076" href="#" onclick="return show_pop('4674','69240','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="110.4,663.32,348.68,1071.36"coords="120.901039370078,721.69863307086,379.144970078739,1152.43766929134" href="#" onclick="return show_pop('4674','69709','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,822.48,98.44,1071.36"coords="21.8018267716538,894.047244094485,107.975055118111,1152.56692913386" href="#" onclick="return show_pop('4674','69781','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,195.04,175.72,384.09"coords="21.8018267716535,212.419988403319,191.993952755906,413.135999999998" href="#" onclick="return show_pop('4674','69969','4')" onMouseover="borderit(this,'black',' डेगू टीके के थर्ड फेज का ट्रायल अगस्त-सितबर से <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,37.72,257.6,185.07"coords="21.8018267716535,41.4959999999998,280.53694488189,199.727999999999" href="#" onclick="return show_pop('4674','68682','4')" onMouseover="borderit(this,'black',' योग दिवस पर PM रहेगे विदेश, अतरराष्ट्रीय स्तर पर आयोजन  <br /><p><E>Bhupender.Sharma@timesgr.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,716.68,99.36,824.91"coords="21.8018267716534,779.652283464567,108.190488188976,887.584251968505" href="#" onclick="return show_pop('4674','69771','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,394.68,178.48,712.38"coords="21.7916535433069,429.551999999998,194.746708661417,766.079999999995" href="#" onclick="return show_pop('4674','69970','4')" onMouseover="borderit(this,'black',' देश के 85%घरो मे हर दिन हो रही है बिजली कटौती: सर्वे <br /> <p>लोगों ने दिया जवाब</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd8' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-8.jpg' usemap='#enewspaper8' class='map shadowimage' id='imgpage_8'><map name='enewspaper8'><map name="Maps"><area shape="rect" class="borderimage"  coords="430.56,46,506.92,364.56"coords="468.825448818898,50.4639999999998,551.76718110236,392.734488188976" href="#" onclick="return show_pop('4675','68882','4')" onMouseover="borderit(this,'black',' केद्रीय मत्री नितिन गडकरी को फिर आया धमकी भरा फोन <br /><p>nपीटीआई, नई दिल्ली : केंद्र.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="420.44,845.48,671.6,1065.78"coords="457.622929133859,919.101672309068,730.57662992126,1146.10393700788" href="#" onclick="return show_pop('4675','68888','4')" onMouseover="borderit(this,'black',' समीर वानखेडे पर FIR से क्या रिया केस पर भी पड़ेगा असर? <br /><p>Sunil.Mehrotra@timesgroup.c.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="420.44,368.92,671.6,544.05"coords="457.622929133859,401.136377952756,730.57662992126,585.504" href="#" onclick="return show_pop('4675','68884','4')" onMouseover="borderit(this,'black',' 2024 लोकसभा चुनाव पर ममता की राय के साथ अखिलेश यादव <br /><p>n पीटीआई, कोलकाता : पश्चिम .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="420.44,542.8,589.72,841.65"coords="457.622929133859,590.321083464567,641.171905511813,905.615999999995" href="#" onclick="return show_pop('4675','68887','4')" onMouseover="borderit(this,'black',' मॉनसून की देरी से एट्री होने के आसार बताए गए <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,35.88,425.04,370.14"coords="111.206551181102,39.6660157480315,462.362456692914,398.766614173228" href="#" onclick="return show_pop('4675','68881','4')" onMouseover="borderit(this,'black',' ससद भवन की नई इमारत तैयार, 28 को PM कर सकते है शुरुआत <br /><p>उद्‌घाटन के मौके पर होने वा.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="598.92,696.44,671.6,844.44"coords="651.835842519682,757.871999999995,730.57662992126,908.050393700789" href="#" onclick="return show_pop('4675','68886','4')" onMouseover="borderit(this,'black',' परमवीर सिह को बचाया गया : पटोले <br /><p>n िवस,  मुंबई: कांग्रेस के .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="598.92,547.4,671.6,694.71"coords="651.835842519682,595.641083464566,730.57662992126,747.121889763779" href="#" onclick="return show_pop('4675','68885','4')" onMouseover="borderit(this,'black',' पजाब के पूर्व MLA ढिल्लो गिरफ्तार <br /><p>nएनबीटी न्यूज, चंडीगढ़ : पं.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="517.04,41.4,671.6,367.35"coords="562.969700787404,45.1439999999998,730.57662992126,395.762519685039" href="#" onclick="return show_pop('4675','68883','4')" onMouseover="borderit(this,'black',' मोदी बोले, नौकरियो मे भाई-भतीजावाद खत्म  <br /><p>nपीटीआई, नई दिल्ली </p><p><.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,371.68,408.48,1071.36"coords="21.8018267716536,404.344176377953,444.69694488189,1152.56692913386" href="#" onclick="return show_pop('4675','68889','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,39.56,95.68,368.28"coords="21.8018267716536,43.7759999999998,104.743559055118,396.719999999998" href="#" onclick="return show_pop('4675','66621','4')" onMouseover="borderit(this,'black',' कर्नाटक में BJP का अध्यक्ष बदलेगा <br /> <p>फटाफट खबरें</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd9' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-9.jpg' usemap='#enewspaper9' class='map shadowimage' id='imgpage_9'><map name='enewspaper9'><map name="Maps"><area shape="rect" class="borderimage"  coords="473.8,82.8,671.6,324.57"coords="515.143559055118,90.4818897637804,730.57662992126,349.001574803151" href="#" onclick="return show_pop('4676','66543','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="269.56,79.12,467.36,159.96"coords="293.247496062993,86.2594015748034,508.680566929135,172.43262992126" href="#" onclick="return show_pop('4676','66553','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="268.64,39.56,671.6,78.12"coords="292.170330708662,43.776,730.606532031495,84.816" href="#" onclick="return show_pop('4676','66599','4')" onMouseover="borderit(this,'black',' भेड़-बकरियों की मौत से हाई कोर्ट नाराज  <br /><p>n एनबीटी, मुंबई: बॉम्बे हाई.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="230,163.76,465.52,324.57"coords="250.160881889763,178.895622047246,506.720125984251,349.001574803153" href="#" onclick="return show_pop('4676','66535','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="103.04,122.36,221.72,324.57"coords="112.283716535434,133.568503937007,241.543559055118,349.001574803149" href="#" onclick="return show_pop('4676','66561','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,39.56,260.36,116.25"coords="111.206551181102,43.6430510253905,283.553007874016,125.855999999999" href="#" onclick="return show_pop('4676','66596','4')" onMouseover="borderit(this,'black',' कश्मीर मे हत्या मे दो गिरफ्तार  <br /><p>n पीटीआई, ﻿श्रीनगर: जम्मू-क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,358.8,671.6,563.58"coords="558.811842519688,390.924850393701,730.57662992126,606.013228346457" href="#" onclick="return show_pop('4676','66526','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,563.04,670.68,1071.36"coords="21.8018267716551,612.476220472448,729.542551181106,1152.56692913386" href="#" onclick="return show_pop('4676','66516','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,47.84,92,322.71"coords="21.8018267716536,52.364,100.865763779527,347.471999999999" href="#" onclick="return show_pop('4676','66598','4')" onMouseover="borderit(this,'black',' SC में तमिलनाडु ने कहा, द केरला स्टोरी पर बैन नहीं लगाया <br /><p>nविस, नई दिल्ली: सुप्रीम को.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,325.68,671.6,563.58"coords="21.8018267716536,354.349999999999,730.606532031495,606.013228346457" href="#" onclick="return show_pop('4676','66600','4')" onMouseover="borderit(this,'black',' 10वीं-12वीं के बाद सब्जेक्ट्स के चयन में बचें इन गलतियों से <br /><p>10वीं में साइंस में 90 फीसद.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd10' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-10.jpg' usemap='#enewspaper10' class='map shadowimage' id='imgpage_10'><map name='enewspaper10'><map name="Maps"><area shape="rect" class="borderimage"  coords="184,342.24,566.72,823.05"coords="200.611275590551,372.095999999998,616.871055118111,885.580724409447" href="#" onclick="return show_pop('4662','68548','4')" onMouseover="borderit(this,'black',' Source : UNODC <br /><p>कंटेंट: राहुल पाण्डेय, ग्रा.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,816.96,561.2,1067.64"coords="200.611275590548,888.996122654149,610.622299212595,1148.7968503937" href="#" onclick="return show_pop('4662','68551','4')" onMouseover="borderit(this,'black',' हादसो के बाद ग्राउड हुए ध्रुव, पर मिग का क्या <br /><p>ध्रुव के ग्राउंड होने से से.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,19.32,671.6,341.31"coords="200.234267716536,21.5433070866142,730.987149606299,367.313385826772" href="#" onclick="return show_pop('4662','68546','4')" onMouseover="borderit(this,'black',' क्या बीजेपी को आम चुनाव मे मुश्किल होगी <br /><p>कर्नाटक में नहीं चला कोई दा.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="573.16,350.52,671.6,1063.92"coords="623.548283464566,381.95487874621,730.57662992126,1144.39244094488" href="#" onclick="return show_pop('4662','68547','4')" onMouseover="borderit(this,'black',' सुख और शाति के लिए साधन नही, सतुष्टि ज़रूरी है <br /><p>आचार्य महाप्रज्ञ</p><p></p>.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="20.24,19.32,164.68,80.91"coords="22.1309606299211,21.5433070866142,179.397102362205,87.4658267716533" href="#" onclick="return show_pop('4662','68545','4')" onMouseover="borderit(this,'black',' विचार <br />.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,800.4,164.68,1065.78"coords="21.8018267716536,870.161512407375,179.397102362205,1146.10393700788" href="#" onclick="return show_pop('4662','68550','4')" onMouseover="borderit(this,'black',' छह दिशाओ का ज्ञान <br /><p>एक बार गौतम बुद्ध ने देखा क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,85.56,164.68,483.6"coords="21.8018267716536,93.5547890213441,179.397102362205,520.701732283464" href="#" onclick="return show_pop('4662','68544','4')" onMouseover="borderit(this,'black',' क्यो गलत है अमेरिका <br /><p>अमेरिकी विदेश मंत्रालय की अ.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="18.4,478.4,164.68,807.24"coords="20.5137080616639,520.701732283464,179.067968503937,868.195275590553" href="#" onclick="return show_pop('4662','68549','4')" onMouseover="borderit(this,'black',' सन्यास या ससार <br /><p>सौरभ श्रीवास्तव</p><p></p><.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd11' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-11.jpg' usemap='#enewspaper11' class='map shadowimage' id='imgpage_11'><map name='enewspaper11'><map name="Maps"><area shape="rect" class="borderimage"  coords="434.24,39.56,570.4,146.94"coords="472.272377952756,43.776,620.059464566928,158.687999999999" href="#" onclick="return show_pop('4663','67953','4')" onMouseover="borderit(this,'black',' SC को मिलेगे दो नए जज कलीजियम ने भेजे नाम <br /><p>n विस, नई दिल्ली: सुप्रीम क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="434.24,360.64,671.6,564.51"coords="472.207748031499,392.088188976376,730.727433070871,607.521259842519" href="#" onclick="return show_pop('4663','66130','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="434.24,156.4,671.6,358.05"coords="472.056944881891,170.19212598425,730.57662992126,385.625196850391" href="#" onclick="return show_pop('4663','66165','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="354.2,563.96,671.6,1071.36"coords="385.883716535433,613.984251968516,730.57662992126,1152.56692913387" href="#" onclick="return show_pop('4663','66112','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="348.68,43.24,425.04,185.07"coords="379.366866141732,47.5759999999999,462.362456692914,199.727999999999" href="#" onclick="return show_pop('4663','67951','4')" onMouseover="borderit(this,'black',' त्र्यबकेश्वर मदिर केस मे जाच SIT करेगी <br /><p>n भाषा, मुंबई : महाराष्ट्र .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="269.56,399.28,428.72,564.51"coords="293.398299212599,434.463874015747,466.455685039371,607.521259842519" href="#" onclick="return show_pop('4663','66147','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="269.56,195.04,427.8,398.04"coords="293.355212598425,212.567811023623,465.701669291338,428.000881889766" href="#" onclick="return show_pop('4663','66174','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="578.68,40.48,671.6,146.94"coords="629.489448818899,44.1464095458984,730.57662992126,158.687999999999" href="#" onclick="return show_pop('4663','67952','4')" onMouseover="borderit(this,'black',' जजो के प्रमोशन पर जुलाई मे होगी सुनवाई <br /><p>n विस, नई दिल्लीः सुप्रीम क.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="65.32,195.96,263.12,438.03"coords="71.3514330708658,213.343370078742,286.784503937008,471.863055118112" href="#" onclick="return show_pop('4663','66139','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="43.24,439.76,261.28,564.51"coords="47.6537952755894,478.326047244094,284.737889763778,607.521259842519" href="#" onclick="return show_pop('4663','66157','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,563.96,336.72,1071.36"coords="21.8018267716544,613.984251968516,366.494740157481,1152.56692913387" href="#" onclick="return show_pop('4663','66120','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,195.96,57.96,437.1"coords="21.8018267716536,213.343370078743,63.2726929133861,470.591999999998" href="#" onclick="return show_pop('4663','67950','4')" onMouseover="borderit(this,'black',' टैकर ऑटो की भिड़ंत, 9 की मौत <br /><p>nएनबीटी, फतेहपुर: यूपी में .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,39.56,337.64,185.07"coords="21.8018267716536,43.0159999999999,367.141039370079,199.727999999999" href="#" onclick="return show_pop('4663','67592','4')" onMouseover="borderit(this,'black',' चारधाम मे रजिस्ट्रेशन पर 25 तक रोक <br /><p>nविशेष संवाददाता, केदारनाथ<.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd12' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-12.jpg' usemap='#enewspaper12' class='map shadowimage' id='imgpage_12'><map name='enewspaper12'><map name="Maps"><area shape="rect" class="borderimage"  coords="296.24,441.6,671.6,839.79"coords="322.001826771654,480.325909573255,730.57662992126,903.903307086615" href="#" onclick="return show_pop('4664','27606','4')" onMouseover="borderit(this,'black',' नींद और एक्सरसाइज में छुपा है हाइपरटेंशन का इलाज <br /><p>हाइपरटेंशन की समस्या में कि.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,596.16,286.12,839.79"coords="200.611275590551,648.583999999996,311.290015748032,903.903307086615" href="#" onclick="return show_pop('4664','27609','4')" onMouseover="borderit(this,'black',' बिना हेलमेट बाइक सवारी कर फंसे बिग बी और अनुष्का <br /><p>लिवुड के महानायक अमिताभ बच्.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,837.2,671.6,1071.36"coords="21.8018267716539,910.01267636821,730.57662992126,1152.56692913386" href="#" onclick="return show_pop('4664','27610','4')" onMouseover="borderit(this,'black',' तब बेटी को लेकर पछतावा था, अब सपने पूरे करके गर्व है <br /><p>मैं काफी इमोशनल हो जाती हूं.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,103.96,671.6,433.38"coords="21.8018267716536,113.533228346457,730.57662992126,466.143374110236" href="#" onclick="return show_pop('4664','27605','4')" onMouseover="borderit(this,'black',' दूल्हा-दुलहन को भा रही लाइट कलर की मैचिंग ड्रेस! <br /><p><E>Saroj.Dhuliya@timesgroup.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,102.3"coords="21.8018267716536,21.5433070866142,730.57662992126,110.442362204725" href="#" onclick="return show_pop('4664','24224','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,429.64,289.8,593.34"coords="21.8018267716536,467.299387668797,315.921826771653,638.856" href="#" onclick="return show_pop('4664','27607','4')" onMouseover="borderit(this,'black',' कान में डेब्यू करेंगी सारा, ईशा गुप्ता और मानुषी छिल्लर भी <br /><p>स में कान फिल्म फेस्टिवल का.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,589.72,178.48,843.51"coords="21.8018267716536,641.077653543308,194.148283464567,907.188661417322" href="#" onclick="return show_pop('4664','27608','4')" onMouseover="borderit(this,'black',' ता <br /><p>पसी पन्नू कई फिल्मों में अप.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd13' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-13.jpg' usemap='#enewspaper13' class='map shadowimage' id='imgpage_13'><map name='enewspaper13'><map name="Maps"><area shape="rect" class="borderimage"  coords="266.8,541.88,671.6,744.93"coords="290.016,589.263307086616,730.57662992126,801.378500423408" href="#" onclick="return show_pop('4665','21399','4')" onMouseover="borderit(this,'black',' घर में ही एक्सरसाइज़ करके पेट कर सकते हैं कम <br /><p>जंपिंग जैक एक्सरसाइज</p><p>.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="177.56,745.2,671.6,1071.36"coords="193.954393700789,810.049889763779,730.57662992126,1152.56692913386" href="#" onclick="return show_pop('4665','21203','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,45.08,671.6,545.91"coords="558.230173228346,49.2006136474606,730.57662992126,587.055118110236" href="#" onclick="return show_pop('4665','21398','4')" onMouseover="borderit(this,'black',' इस समर सीज़न मिनी ड्रेस फिर से आई ट्रेंड में <br /><p>शन और स्टाइल की दुनिया में .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,506,544.05"coords="21.8018267716532,21.6573070866142,550.247181102365,585.504" href="#" onclick="return show_pop('4665','21397','4')" onMouseover="borderit(this,'black',' मां के साथ हमारा हर लम्हा है बेहद खास <br /><p>हमने हमेशा अपनी मां को मेहन.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,544.64,259.44,1071.36"coords="21.8018267716529,592.191999999999,282.793056346457,1152.56692913386" href="#" onclick="return show_pop('4665','21401','4')" onMouseover="borderit(this,'black',' बिजनेस बढ़ाने के लिए एसएमई प्लैटफॉर्म पर कैसे करें रजिस्टर? <br /><p>आज बड़े पैमाने पर लोग अपना .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd14' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-14.jpg' usemap='#enewspaper14' class='map shadowimage' id='imgpage_14'><map name='enewspaper14'><map name="Maps"><area shape="rect" class="borderimage"  coords="430.56,651.36,512.44,834.21"coords="468.825448818898,708.623999999995,557.087181102365,897.407999999995" href="#" onclick="return show_pop('4666','73907','4')" onMouseover="borderit(this,'black',' इग्लैड मे टॉप-3 की कड़ी परीक्षा: ख्वाजा <br /> <p>FILE</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="355.12,390.08,511.52,643.56"coords="386.368440944882,424.181732283464,556.172286571114,692.207999999995" href="#" onclick="return show_pop('4666','73906','4')" onMouseover="borderit(this,'black',' यशस्वी की प्रतिभा के कायल हुए इग्लैड के पूर्व कप्तान रूट <br /><p>n एजेंसियां, मुंबई: इंग्लैं.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="355.12,129.72,671.6,384.09"coords="386.368440944882,141.51379527559,730.57662992126,413.135999999998" href="#" onclick="return show_pop('4666','73902','4')" onMouseover="borderit(this,'black',' अगर वो मेरे आखिरी लम्हे होगे तो मै हसकर चला जाऊगा: गावसकर <br /><p>n NBT स्पोर्ट्स, नई दिल्ली:.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,646.76,418.6,834.21"coords="200.611275590551,703.921574803148,455.899464566929,897.407999999995" href="#" onclick="return show_pop('4666','73908','4')" onMouseover="borderit(this,'black',' पहले बैकबेचर था मै: छेत्री <br /><p>बार्सिलोना: बार्सिलोना की स.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,137.08,343.16,643.56"coords="111.206551181102,149.152692913385,373.797921259842,692.207999999995" href="#" onclick="return show_pop('4666','73903','4')" onMouseover="borderit(this,'black',' प्लेऑफ के करीब पहुचे सुपर जायट्स <br /><p>मुंबई इंडियंस: ईशान किशन कॉ.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,651.36,177.56,834.21"coords="111.206551181102,708.623999999995,193.72220472441,897.407999999995" href="#" onclick="return show_pop('4666','73909','4')" onMouseover="borderit(this,'black',' आर्चर फिर हुए लबे समय के लिए बाहर <br /> <p>FILE</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="517.96,394.68,671.6,834.21"coords="563.948125984253,429.741999999998,730.57662992126,897.407999999995" href="#" onclick="return show_pop('4666','73904','4')" onMouseover="borderit(this,'black',' बड़ी जीत से ही बनेगी पंजाब किंग्स की बात <br /><p>पंजाब के प्रभसिमरन सिंह ने<.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="20.24,833.52,670.68,1070.43"coords="22.5618267716536,906.375999999995,729.816629921259,1151.80692913386" href="#" onclick="return show_pop('4666','65934','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,126.96,95.68,225.99"coords="21.8018267716536,138.472,104.844511674761,243.654803149606" href="#" onclick="return show_pop('4666','68148','4')" onMouseover="borderit(this,'black',' 17 <br />.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,127.41"coords="21.8018267716536,21.5433070866142,730.659199182345,137.063307086614" href="#" onclick="return show_pop('4666','73901','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,228.16,95.68,834.21"coords="21.8018267716536,248.975999999999,104.743559055118,897.407999999995" href="#" onclick="return show_pop('4666','73900','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd15' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-15.jpg' usemap='#enewspaper15' class='map shadowimage' id='imgpage_15'><map name='enewspaper15'><map name="Maps"><area shape="rect" class="borderimage"  coords="430.56,368,502.32,558.93"coords="468.825448818898,400.772535433068,546.919937007874,601.92" href="#" onclick="return show_pop('4667','69416','4')" onMouseover="borderit(this,'black',' यह गली-मोहल्ले की लड़ाई नही : HC <br /><p>अशनीर, भारतपे से बोला दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,91.08,589.72,356.19"coords="468.825448818898,99.9666108917462,641.901984251969,383.470866141732" href="#" onclick="return show_pop('4667','69411','4')" onMouseover="borderit(this,'black',' IOC के शुद्ध लाभ मे अरसे बाद उछाल <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="348.68,99.36,418.6,353.4"coords="379.420724409449,108.071999999999,455.709464566929,380.303999999998" href="#" onclick="return show_pop('4667','69412','4')" onMouseover="borderit(this,'black',' ब्याज दरो पर अनिश्चितता से बाज़ार लुढ़का <br /><p>सेंसेक्स 413 अंक टूटा, निफ्.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,361.56,420.44,558.93"coords="111.206551181102,393.860724409447,457.515212598426,601.92" href="#" onclick="return show_pop('4667','69417','4')" onMouseover="borderit(this,'black',' वीवो की X सीरीज़ के नए फोन का क्या है X-फैक्टर <br /><p>n वीवो पिछले कुछ साल से अपन.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,90.16,339.48,356.19"coords="111.206551181102,98.9519999999998,369.371424210667,383.470866141732" href="#" onclick="return show_pop('4667','69414','4')" onMouseover="borderit(this,'black',' फर्ज़ी GST रजिस्ट्रेशन, टैक्स चोरी पर ऐक्शन <br /> <p>2020-21</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="598.92,231.84,667,356.19"coords="651.404976377952,252.659905511809,725.729385826774,383.470866141732" href="#" onclick="return show_pop('4667','67887','4')" onMouseover="borderit(this,'black',' Tesla के अफसर जल्द आएगे भारत <br /><p>n विस, मुंबई : इलॉन मस्क की.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="598.92,98.44,667.92,224.13"coords="651.404976377952,107.19590551181,726.016629921261,241.718738516739" href="#" onclick="return show_pop('4667','69410','4')" onMouseover="borderit(this,'black',' जापानी मेडिकल कपनियो को न्यौता <br /><p>n विस, नई दिल्ली : केंद्रीय.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="513.36,359.72,667.92,560.79"coords="558.230173228346,391.974488188976,726.716787401573,603.75118110236" href="#" onclick="return show_pop('4667','69415','4')" onMouseover="borderit(this,'black',' एक्सपोर्टर्स के बकाये का इतज़ार होगा खत्म <br /><p>n विशेष संवाददाता, नई दिल्ल.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="23,565.8,671.6,1071.36"coords="25.033322834637,615.061417322837,730.576629921254,1152.56692913386" href="#" onclick="return show_pop('4667','69049','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,94.76,95.68,558.93"coords="21.8018363464567,103.802834645668,104.743559055118,601.92" href="#" onclick="return show_pop('4667','69413','4')" onMouseover="borderit(this,'black',' Airtel का मुनाफा 49.2% बढ़ा <br /> <p>फटाफट खबरें</p> .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,89.28"coords="21.8018267716535,21.6946297914674,730.562866645212,96.0639999999997" href="#" onclick="return show_pop('4667','69409','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div><div id='outdivd16' ><img src='https://image.mepaper.navbharattimes.com/epaperimages//17052023//17052023-md-de-16.jpg' usemap='#enewspaper16' class='map shadowimage' id='imgpage_16'><map name='enewspaper16'><map name="Maps"><area shape="rect" class="borderimage"  coords="473.8,822.48,671.6,1071.36"coords="515.143559055118,894.047244094485,730.57662992126,1152.56692913386" href="#" onclick="return show_pop('4668','69579','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,326.6,671.6,589.62"coords="468.825448818898,355.680000000003,730.57662992126,634.752" href="#" onclick="return show_pop('4668','69601','4')" onMouseover="borderit(this,'black',' श्रीनगर मे G20 पर UN के दूत को आपत्ति, भारत ने कहा- निराधार <br /><p>श्रीनगर में 22 से 24 मई के .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="430.56,598.92,506.92,818.4"coords="468.825448818898,651.168,551.76718110236,880.991999999994" href="#" onclick="return show_pop('4668','69604','4')" onMouseover="borderit(this,'black',' अमेरिका ने घटाए एटमी हथियार <br /><p>nएपी, वॉशिंगटन: अमेरिका ने .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,822.48,463.68,1070.43"coords="200.611275590551,894.367999999998,504.403322834646,1151.09599999999" href="#" onclick="return show_pop('4668','69608','4')" onMouseover="borderit(this,'black',' पाकिस्तान के पूर्व मत्री फवाद पुलिस को देख हाई कोर्ट भागे, जज ने दी रियायत <br /><p>सफेद कुर्ता-पायजामा पहने फव.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="184,705.64,418.6,818.4"coords="200.611275590551,767.447999999995,455.283602540424,880.991999999994" href="#" onclick="return show_pop('4668','69605','4')" onMouseover="borderit(this,'black',' टूरिस्ट वीज़ा पर नही कर सकेगे हज <br /><p>n आईएएनएस, रियाद: हज के समय.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,326.6,425.04,710.52"coords="111.206551181103,355.680000000003,462.362456692914,764.559999999999" href="#" onclick="return show_pop('4668','69602','4')" onMouseover="borderit(this,'black',' भारत बोला, धार्मिक आज़ादी पर US की रिपोर्ट पक्षपातपूर्ण <br /><p>धार्मिक स्वतंत्रता पर क्या .....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="102.12,110.4,589.72,321.78"coords="111.206551181102,120.649700787403,641.176427410078,346.711999999999" href="#" onclick="return show_pop('4668','69607','4')" onMouseover="borderit(this,'black',' सचार साथी पोर्टल लॉन्च, गुम मोबाइल ट्रैक और ब्लॉक होगे <br /><p>धोखाधड़ी के मामलों की पहचान.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="595.24,107.64,671.6,315.27"coords="647.634897637793,117.647999999999,730.585673717795,339.263999999999" href="#" onclick="return show_pop('4668','69606','4')" onMouseover="borderit(this,'black',' UGC की नई वेबसाइट लॉन्च, दो नए पोर्टल भी <br /><p>उत्साह,  प्रोफेसर ऑफ प्रैक्.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="518.88,595.24,671.6,818.4"coords="564.693165354332,647.620195312498,730.57662992126,880.991999999994" href="#" onclick="return show_pop('4668','69603','4')" onMouseover="borderit(this,'black',' रूस ने 18 मिसाइलें कीव पर दागीं, मई में 8वां हमला <br /><p>राजधानी कीव में दमकल कर्मिय.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,104.88,95.68,704.01"coords="21.8018267716536,114.610393700788,104.743559055118,757.871999999995" href="#" onclick="return show_pop('4668','69600','4')" onMouseover="borderit(this,'black',' फटाफट खबरें <br /><p>n पीटीआई, इस्लामाबाद: पूर्व.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,704.72,178.48,1070.43"coords="21.8018267716536,766.079999999995,194.148283464567,1151.85599999999" href="#" onclick="return show_pop('4668','66502','4')" onMouseover="borderit(this,'black',' रोज़ की खबरों पर कितनी पैनी नज़र है, आज़माएं <br /><p>￼ C) वाराणसी ￼ B) टेलिकॉम फ.....')" onMouseout="borderit(this,'white')" data-tooltip="" > 
<area shape="rect" class="borderimage"  coords="19.32,19.32,671.6,101.37"coords="21.8018267716536,21.5433070866142,730.585673717795,109.465680818898" href="#" onclick="return show_pop('4668','66031','4')" onMouseover="borderit(this,'black','')" onMouseout="borderit(this,'white')" data-tooltip="" > 
</map></map></div>		</div>
	</div>
</div>

<audio id="audio" src="/video/page-flip-01a.mp3"></audio>

<script type="text/javascript">
var scrollHeight = 201;
function loadApp() {
	var pageheight=document.getElementById('pageheight').value;
	hdswidth=695;
	var $jqhs=jQuery.noConflict();
	var imagex_hs = $jqhs('.flipbook-viewport img');
	var newHeight_hs = parseInt(imagex_hs[0].height)+parseInt(1);
		hdsheight=newHeight_hs;
		if(hdsheight<100)
		{
			hdsheight=1088;
			$jqhs(".container").css("height",hdsheight);
		}else{
			hdsheight=newHeight_hs;
			$jqhs(".container").css("height", newHeight_hs);
		}
		document.getElementById('pageheight').value=hdsheight;
	//$jqhs(".container").css("height", newHeight_hs);
	//hdsheight=newHeight_hs;
	try{
					 $(".loader").fadeOut("slow");
  				}catch(ex){
    }
	var $flips = jQuery.noConflict(); 

	var oTurn = $flips('.flipbook').turn({
			// Width
			width:hdswidth,
			// Height
			height:hdsheight,
			// Elevation
			elevation: 50,
			// Enable gradients
			gradients: true,
			// Auto center this flipbook
			autoCenter: true,
			when: {
            turning: function(e, page, view) {  

			try{
					 $(".loader").fadeOut("slow");
				}catch(ex){
			}


			/*try{
	            var audio = document.getElementById("audio");
    	        //audio.play();
				if(document.getElementById('miccheck').value==1){
					const playPromise = audio.play();
					if (playPromise !== null){
						playPromise.catch(() => {  })
					}
				}
			}catch(ex){
			}*/

        }
    }
			
	});
	
	$flips("#outdivdR1Left").click(function(e){
		if(document.getElementById('turnpagenumber').value==1){
			alert('You are on first page.');
			return false;
		}
		oTurn.turn("previous");
		var $fliphds = jQuery.noConflict(); 
		$fliphds('.map').maphilight({
				fillColor: '008800'
		});
		 //refreshAds([slots['sky']]);
		// refreshAds([slots['sky-top']]);
	});
	
	
 $flips("#outdivdR1Right").click(function(e){
	 	
		if(document.getElementById('totalpages').value==document.getElementById('turnpagenumber').value){
			alert('You are on last page.');
			return false;
		}
		
		oTurn.turn("next");
		var $fliphds = jQuery.noConflict(); 
		$fliphds('.map').maphilight({
			fillColor: '008800'
		});
		
	//	refreshAds([slots['sky']]);
	//	refreshAds([slots['sky-top']]);
       //$('.borderimage').darkTooltip();
       //setTimeout('setdivpos()',1000);
	   //pagechange(document.getElementById('turnpagenumber').value);

	});
	
	
	$flips('.map').maphilight({
		fillColor: '008800'
	});
}



// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['/lib/turn.html9hds.js'],
	nope: ['/lib/turn.html4.min.js'],
	both: ['/css/basic.css'],
	complete: loadApp
});

</script>
</div>
</div>

<div style="clear:both;"></div>
<div id="socialmedias" style="display:none;Z-INDEX: 108;top:0;left:0;width:124px;height:90px;position:absolute;visibility:hidden;background:#FFFFFF;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border: 1px solid #800000;margin:0px;">
	<div id="fb-root" onclick="fsahare('nbt')" style="margin:4px;" class="outcolorclass"  onmouseover="classchangeonover(this.id);" onmouseout="classchangeonout(this.id)">
	
	</div>/images/fshared.png" style="border:0px;cursor:pointer;" />
	</div>
	<div style="margin:3px;display:none;" id="p17"  class="outcolorclass" onmouseover="classchangeonover(this.id);" onmouseout="classchangeonout(this.id)">
		<img src="/images/tshared.png"  onclick="twittersahare('nbt')" style="border:0px;cursor:pointer;">
		<script type="text/javascript">
		window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
		</script>
	</div>
	<div style="margin:3px;display:none;" id="p18" class="outcolorclass" onmouseover="classchangeonover(this.id);" onmouseout="classchangeonout(this.id)">
		<img src="/images/gshared.png" style="border:0px;cursor:pointer;" onclick=""/>
</div>

<div id="dshare" style="Z-INDEX: 103;top:0;left:0;width:100px;height:28px;position:absolute;visibility:hidden;background:#FFFFFF;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border: 1px solid #800000;margin:0px;display:none;">
</div>




<script>
function classchangeonover(valid)
{

}

function classchangeonout(valid)
{

}

function checkmic(val){
	document.getElementById('miccheck').value=val;
	if(document.getElementById('miccheck').value=="1"){
		document.getElementById('micon').style.display="none";
		document.getElementById('micoff').style.display="block";
	}else{
		document.getElementById('micoff').style.display="none";
		document.getElementById('micon').style.display="block";
	}
	return false;
}


function tocclick(x,y,z,pagenum,edcode,pagedt)
{
var imgview;
//window.close();
 //window.parent.closedivdanimage();	
// window.opener.show_pophead(x,y,z,imgview);

var mod=1;

if(y.indexOf("-")>0){
	res=y.split("-");
	resy=res[0];
}else{
	resy=y;
}


var pagedate3=pagedt.split(' ');
var pdate3=pagedate3[0].split('-');
if(pdate3['2'].length==1)
{
var datex='0'+pdate3['2'];
}
else{
var datex=pdate3['2'];
}
if(pdate3['1'].length==1)
{
var monthx='0'+pdate3['1'];
}
else{
var monthx=pdate3['1'];
}
var pagedate1=datex+'-'+monthx+'-'+pdate3['0'];

var strurl1="/imageview_"+x+"_"+resy+"_"+z+"_"+edcode+"_"+pagedate1+"_"+pagenum+"_i_1_sf.html";
//var strurl1="textview_"+x+"_"+resy+"_"+z+"_"+mod+"_"+pagenum+"_"+pagedate1+"_"+edcode+"_1.html";
var win = window.open(strurl1, '_blank'	);
win.focus();
return false;


}

var $jqpags=jQuery.noConflict();
$jqpags(document).scroll(function() {
  if ($jqpags(document).scrollTop() >= 800) {
    $jqpags('#outdivdR1Left').hide();
	$jqpags('#outdivdR1Right').hide();
  } else {
    $jqpags('#outdivdR1Left').show();
	$jqpags('#outdivdR1Right').show();
  }
});

</script>



<input type="hidden" id="miccheck" name="miccheck" value="1" />
<div style="height:20px;">&nbsp;</div>
<DIV id="oFilterDIV"  class="transparent"  style="POSITION: absolute;top:5;left:50;width:70px;height:50px;background-color: #ccffcc;border:2px solid #A49E9E;VISIBILITY: hidden;Z-INDEX: 100;" onclick="fakeClick(event)"  onmouseout="divdd.hide();"></DIV>
<DIV id="dpageid" style="VISIBILITY: hidden;POSITION:absolute;top:5;left:50;width:20px;height:19px; font-family: Arial;font-size: 12px;background-color: #DB1719;Z-INDEX: auto;color:#ffffff;">&nbsp;1</div>
<div id="previd1" style="VISIBILITY: hidden;POSITION:absolute;top:300;left:50;width:20px;height:19px;Z-INDEX: auto;"></div>
<div id="nextid1" style="VISIBILITY: hidden;POSITION:absolute;top:300;left:50;width:20px;height:19px; Z-INDEX: auto;color:#ffffff;"></div>

<div id="iframediv" class="pagezoomR1">
<div id="rigthiframediv" class="pagezoomR2">
		 <img src="/images/min2.png" id="img1rigthiframe1"  style="VISIBILITY: hidden;displaY:none;" onclick="divdan()"><img src="/images/clo2.png" id="img1rigthiframe2" style="VISIBILITY: hidden;" onclick="closedivdan()">
	</div>
	
	<iframe id="iframecontent" style="VISIBILITY: hidden;width:100%;height:40%;border:none;" onload="this.contentWindow.document.ondblclick=function(){closedivdan();}"></iframe>
</div>


<DIV id="Idleftofimage"   style="POSITION: absolute;top:0;left:0;width:46px;height:41px;VISIBILITY: hidden;" onclick="abcpre();" style="cursor:pointer;cursor:hand"></DIV>
<DIV id="Idrigthofimage"  style="POSITION: absolute;top:0;left:0;width:46px;height:41px;VISIBILITY: hidden;" onclick="abcnext();" style="cursor:pointer;cursor:hand"></DIV>
<DIV id="Idleftofimagebottom"   style="POSITION: absolute;top:0;left:0;width:46px;height:41px;VISIBILITY: hidden;" onclick="abcpre();" style="cursor:pointer;cursor:hand"></DIV>
<DIV id="Idrigthofimagebottom"  style="POSITION: absolute;top:0;left:0;width:46px;height:41px;VISIBILITY: hidden;" onclick="abcnext();" style="cursor:pointer;cursor:hand"></DIV>

<input type="hidden" id="x" name="x" />
<input type="hidden" id="y" name="y" />
<input type="hidden" id="w" name="w" />
<input type="hidden" id="h" name="h" />

<input type="hidden" id="statusclip" name="statusclip" />
<input type="hidden" id="imgsrc" name="imgsrc" />
<input type="hidden" id="imgname" name="imgname" />
<input type="hidden" id="mod" name="mod" value="" />
<input type="hidden" id="pgnum" name="pgnum"  value=1 />
<input type="hidden" id="edcode" name="edcode" value=13 />
<input type="hidden" id="pgdate" name="pgdate" value=2023-05-17 />

<input type="hidden" id="tooltips" name="tooltips" />
<input type="hidden" id="boxidhidden" name="boxidhidden" />
<input type="hidden" id="hiddenstreditionnm" name="hiddenstreditionnm"  value= />
<input type="hidden" id="hiddenusermail" name="hiddenusermail"  value= />
<input type="hidden" id="boxidhiddenshares" name="boxidhiddenshares" />
<input type="hidden" id="pagenumberhide" name="pagenumberhide" />
<input type="hidden" id="turnpagenumber" name="turnpagenumber" />
<input type="hidden" id="hideselectpnum" name="hideselectpnum" />
<input type="hidden" id="curpgnum" name="curpgnum"  />
<input type="hidden" id="prepgnum" name="prepgnum"  />


</div>
<div style="width:29%;float:left;margin-top:10px;"> 
	<div style="width:100%;border-radius: 8px 8px 0 0;border: solid 1px #e2e2e2;" id="l11_hds_22">
	<div id='div-gpt-ad-1630775340553-0' style='min-width: 250px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1630775340553-0'); });
  </script>
</div>
	</div>
	<div style="clear:both;margin:10px;"></div>
	<!--<div style="width:100%; border-radius: 8px 8px 0 0;border: solid 1px #e2e2e2;">
			<a href="https://navbharattimes.indiatimes.com/navbharatgold/day-today/vaccine-is-coming-but-will-corona-go/story/79286071.cms" target="_blank"><img  src="/top19.jpg" style='height:250px; width:300px;margin:13px;' /></a>
	</div>-->
	<div style='width: 300px; height: 250px;' id="s1_hds">
			
					</div>
	<!---->
	<!--ad 2 end-->
	<div style="clear:both;margin:10px;"></div>
		<div style="width:100%;border-radius: 8px 8px 0 0;border: solid 1px #e2e2e2;" id="l12_hds_22">
			<div id='div-gpt-ad-1630775393918-0' style='min-width: 250px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1630775393918-0'); });
  </script>
</div>
		</div>
	<div style="clear:both;margin:10px;"></div>
	<!--<div style="width:100%;border-radius: 8px 8px 0 0;border: solid 1px #e2e2e2;">
		<a href="https://navbharattimes.indiatimes.com/navbharatgold/goldquiz.cms" target="_blank"><img  src="/bottom12.jpg" style='height:250px; width:300px;margin:13px;' /></a>		
	</div>-->
	<div style='width: 300px; height: 250px;' id="s2_hds">
			
					</div>
	<div style="clear:both;margin:10px;"></div>
		<div style="margin-top:10px;"></div>
        <div id="ff_dsss">
		<!--<div id="div-clmb-ctn-352406-1" data-slot="352406" data-position="1" data-section="ArticleShow" data-ua="D" class="colombia"></div>-->
	    </div>
<div>&nbsp;</div>

</div>
</div>
</div>
<!-- Footer-->
<div style="clear:both;margin:10px;"></div>
<div style='height:90px; width:100%;text-align:center;' id="s3_hds">
				<div id='div-gpt-ad-1601381977325-0' style='width: 100%; height: 90px;'>
					  <script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1601381977325-0'); });
					  </script>
				</div>
	<!--			<a href="https://navbharattimes.indiatimes.com/navbharatgold" target="_blank"><img  src="/banner1.jpg" style='margin-top:8px;height:90px; width:728px;' /></a>-->
</div>

<div class=clear></div>
		<div id="containerright">
			<div class="midheader2">
					﻿<style>
/******************footer part start***************************/
.footer{
	background:#df2228;
	padding: 10px;
}
.footer p{
	color:#fff;
	margin:5px 0px;
}
.footer ul{
	list-style-type:none;
	margin-bottom:5px;
}
.footer ul li{
	display:inline-block;
	padding:3px 6px;
	border-right:1px solid #fff;
}
.footer ul li:last-child{
	border-right:none;
}
.footer ul li a{
	color:#fff;
}
</style>
<div class="footer text-center" style="text-align:center;padding:5px;font-weight:bold;">
<p>For any queries or feedback email us on feedback@nbt.com</p>
<ul>
<li><a href="http://www.navbharattimes.indiatimes.com/navbharatgold/" target="_blank">Navbharat Gold</a></li> 
<li><a href="mailto:help@navbharatgold.com" target="_blank" style="color:#fff;" >Helpdesk</a></li>  
<li><a href="https://epapers.timesgroup.com/terms" target="_blank">Terms of use</a></li> 
<li><a href="https://epapers.timesgroup.com/policy" target="_blank">Privacy Policy</a></li> 
<li><a href="https://navbharattimes.indiatimes.com/navbharatgold/podcast/articlelist/74591743.cms" target="_blank" style="color:#fff;">Podcast in Hindi</a></li>
 
</ul>
<p>Copyright © 2020 Bennett Coleman & Co. Ltd. All rights reserved.</p>
</div>
			</div>
</div>
<!-- End footer-->

<input type="hidden" name="arched" id="arched" value="">
<input type="hidden" name="hdscrop" id="hdscrop" value="false">
<input type="hidden" id="pgdate1" name="pgdate1"  value="2023-05-17" />
<input type="hidden" name="pimg" id="pimg" >
<input type="hidden" id="edcode" name="edcode" value=13 />
<input type="hidden" name="frmdate" id="frmdate" value="">
<input type="hidden" name="cropstype" id="cropstype" value="true">
<input type="hidden" name="session" id="session" value="true"/>
<!-- #main end-->

<div id="freesubmsg"></div>
</body>
</html>




<!-----pop up start------->
<input type="hidden" name="rswin" id="rswin" value="">
<script type="text/javascript" src="/js/dhtmlwindow.js"></script>
<link rel="stylesheet" href="/css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript">
var dhi=-1;
var dwi=-1;
var leftxd=-1;
var topxd=-1;
function divdan()
{
	if(dhi==-1 && leftxd==-1 && topxd==-1)
	{
		topxd=document.getElementById('iframediv').style.top;
		leftxd=document.getElementById('iframediv').style.left;
		dhi=document.getElementById('iframediv').style.height;
		dwi=document.getElementById('iframediv').style.width;
		document.getElementById('iframediv').style.height="240px";
        var w = window.innerWidth;
		document.getElementById('iframediv').style.top=(parseInt(topxd.toString().replace("px","")) +40) + "px";
		document.getElementById('iframediv').style.width=(w/2) + "px";
		document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
		// document.getElementById('rigthiframediv').style.left=((w/2)-60).toString() + "px";
		try
		{
			
			document.getElementById("iframediv").style.border="thick solid gray";
			document.getElementById('iframediv').style['-webkit-box-shadow'] = " 0px 0px 25px rgba(0, 0, 0, 0.4)";
			document.getElementById('iframediv').style['-moz-box-shadow'] = " 0px 1px 6px rgba(23, 69, 88, .5)";
		}
		catch (ert)
		{
		}
		while(document.getElementById("rigthiframediv").innerHTML.indexOf('min2.png')>0)
		{
			document.getElementById("rigthiframediv").innerHTML=document.getElementById("rigthiframediv").innerHTML.replace('min2.png','max2.png');
		}
	}
	else
	{
		document.getElementById('iframediv').style.top=topxd;
		document.getElementById('iframediv').style.left=leftxd;
		document.getElementById('iframediv').style.height=dhi;
		document.getElementById('iframediv').style.width=dwi;
		document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
		// document.getElementById('rigthiframediv').style.left=((dwi.toString().replace("px",""))-60).toString() + "px";
		try
		{
			document.getElementById("iframediv").style.border="";
			document.getElementById('iframediv').style['-webkit-box-shadow'] = "";
			document.getElementById('iframediv').style['-moz-box-shadow'] = "";
		}
		catch (ert)
		{
		}
		while(document.getElementById("rigthiframediv").innerHTML.indexOf('max2.png')>0)
		{
			document.getElementById("rigthiframediv").innerHTML=document.getElementById("rigthiframediv").innerHTML.replace('max2.png','min2.png');
		}
		topxd=-1;
		leftxd=-1;
		dhi=-1;
		dwi=-1;
	}
}

function closedivdancut(){

while(document.getElementById("rigthiframediv").innerHTML.indexOf('max2.png')>0)
{
document.getElementById("rigthiframediv").innerHTML=document.getElementById("rigthiframediv").innerHTML.replace('max2.png','min2.png');
}
topxd=-1;
leftxd=-1;
dhi=-1;
dwi=-1;

document.getElementById('iframediv').style.top="0px";
document.getElementById('iframediv').style.left="0px";
document.getElementById('iframediv').style.width="2px";
document.getElementById('iframediv').style.height="2px";
document.getElementById('iframediv').style.zIndex="auto";
document.getElementById('iframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
// document.getElementById('rigthiframediv').style.left="0px";
// document.getElementById('rigthiframediv').style.width="1px";
document.getElementById('rigthiframediv').style.height="1px";
document.getElementById('rigthiframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.zIndex="auto";
document.getElementById('img1rigthiframe1').style.visibility="hidden";
document.getElementById('img1rigthiframe2').style.visibility="hidden";
document.getElementById('iframecontent').style.visibility="hidden";

}

function closepopwin(){
	document.getElementById('fromarchive').value='false';
	document.getElementById('on_focus').style.display = 'none';
	return false;

}

function closedivdan()
{
var $mep=jQuery.noConflict();
$mep('body').css("overflow","auto");
while(document.getElementById("rigthiframediv").innerHTML.indexOf('max2.png')>0)
{
document.getElementById("rigthiframediv").innerHTML=document.getElementById("rigthiframediv").innerHTML.replace('max2.png','min2.png');
}
topxd=-1;
leftxd=-1;
dhi=-1;
dwi=-1;
<!-- Change By hds 010115-->
document.getElementById('iframediv').style.top="0px";
document.getElementById('iframediv').style.left="0px";
document.getElementById('iframediv').style.width="2px";
document.getElementById('iframediv').style.height="2px";
document.getElementById('iframediv').style.zIndex="auto";
document.getElementById('iframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
document.getElementById('rigthiframediv').style.height="1px";
document.getElementById('rigthiframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.zIndex="auto";
document.getElementById('img1rigthiframe1').style.visibility="hidden";
document.getElementById('img1rigthiframe2').style.visibility="hidden";
//document.getElementById('iframecontent').src='loader.php';
document.getElementById('iframecontent').style.visibility="hidden";

try{
	if(parent.ajaxwin2!=undefined || parent.ajaxwin2!="undefined")
		parent.ajaxwin2.hide();
}catch (erd){

}

closepopwin();

//checkcookie(); comment for POP on.

}

function closedivdanimage()
{

while(document.getElementById("rigthiframediv").innerHTML.indexOf('max2.png')>0)
{
document.getElementById("rigthiframediv").innerHTML=document.getElementById("rigthiframediv").innerHTML.replace('max2.png','min2.png');
}
topxd=-1;
leftxd=-1;
dhi=-1;
dwi=-1;
<!-- Change By hds 010115-->
	
document.getElementById('iframediv').style.top="0px";
document.getElementById('iframediv').style.left="0px";
document.getElementById('iframediv').style.width="2px";
document.getElementById('iframediv').style.height="2px";
document.getElementById('iframediv').style.zIndex="auto";
document.getElementById('iframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
// document.getElementById('rigthiframediv').style.left="0px";
// document.getElementById('rigthiframediv').style.width="1px";
document.getElementById('rigthiframediv').style.height="1px";
document.getElementById('rigthiframediv').style.visibility="hidden";
document.getElementById('rigthiframediv').style.zIndex="auto";
document.getElementById('img1rigthiframe1').style.visibility="hidden";
document.getElementById('img1rigthiframe2').style.visibility="hidden";
//document.getElementById('iframecontent').src='loader.php';
document.getElementById('iframecontent').style.visibility="hidden";



}


function show_pop_fromTI(x,y,z,imgviews)
{
var mod;
var pagenum;
var mod;
var pagenum;
var w = window.innerWidth;
var h = window.innerHeight;
imgview="true";

if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";

var kl=document.getElementById('chkthumb').offsetWidth;
var kt=document.getElementById('maintop1').offsetHeight;

if(w=='1024')
{
var w1=w-22;
document.getElementById('iframediv').style.left=5+"px";
}
else
{
var w1=w-kl-20;
document.getElementById('iframediv').style.left= "5px"; <!--kl.toString() + "px"; -->
}


var kt=document.getElementById('maintop1').offsetHeight;

kt=kt + document.getElementById('maintop1').offsetTop;

//var hi=h-kt-25;

//var hi=830;

/************/
	var $mep=jQuery.noConflict();
	var scwidth=screen.width; 
			var h4;
	 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $mep("#mainepaer86").css('height');
	 }else {
		h4 = $mep("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=parseInt(h4)-80;
//var h1=parseInt(h4)+45;
}
if(document.getElementById('rsmod').value=='2')
{
var h1=parseInt(h4)-55;
//var h1=parseInt(h4)+55;
}

var h2=document.getElementById('maintop1').offsetHeight;

var hi=h1+h2;

/***********/
//alert(hi);


window.scrollTo(0, 0);

document.getElementById('iframediv').style.top=kt.toString() + "px";
document.getElementById('iframediv').style.width=w1.toString() + "px";
document.getElementById('iframediv').style.height=hi.toString() + "px";
document.getElementById('iframediv').style.zIndex="102";
document.getElementById('iframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
// document.getElementById('rigthiframediv').style.left=(w1-46).toString() + "px";
// document.getElementById('rigthiframediv').style.width="46px";
document.getElementById('rigthiframediv').style.height="25px";
document.getElementById('rigthiframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.zIndex="103";
document.getElementById('img1rigthiframe1').style.visibility="visible";
document.getElementById('img1rigthiframe2').style.visibility="visible";

if(document.getElementById('pgnum').value=="")
{
	mod=1;
	pagenum=0;
}
else
{
	mod=document.getElementById('mod').value;
	pagenum=document.getElementById('pgnum').value;
}

try
{
	if(currenthds==undefined || currenthds=="undefined"){
		currenthds=1;
		//alert("----"+currenthds)
	}
	var xvalpsi= currenthds;

	//var img=document.getElementById("imgpage_"+xvalpsi);
	//if(img !== null && img !== "undefined")
	//{
		var src="";
		document.getElementById('iframecontent').src="pagezoomsin.php?img=" +src + "&dvartr=" +dvartr+"&id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum+"&edcode="+edcode;
		
	//}
	/*else
	{
		var xvalp= currenthds+1;	
		var yvalp= currenthds;	
		var img=document.getElementById("imgpagey_"+yvalp);
		if(img !== null && img !== "undefined")
		{
			var img1=document.getElementById("imgpagex_"+xvalp);
			var src=img.src;
			var src1=img1.src;
					//alert('2');
			document.getElementById('iframecontent').src="pagezoomdub.php?img=" +src + "&img1=" +src1 + "&dvartr=" +dvartr+"&id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum;
		}
	}*/
}
catch (erd)
{
	alert("No Image Found...!");
}

setTimeout("document.getElementById('iframecontent').style.visibility='visible'",1);
return false;
document.getElementById('rswin').value='1';
alert(document.getElementById('pgdate1').value)
var strurl1="detailimageviewer.php?id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum+"&pagedate1="+document.getElementById('pgdate1').value;
var width1=screen.width;

//alert(width1);

var w1=w-kl-20; 
var h=h1+h2+140;

if(width1>1100)
{
	//alert("111111");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width=1000px,height=900px,left=210px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>700 && width1<1100)
{
var w1=w-30; 
var h=h1+h2+140;
	//alert("222222");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=175px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
	//alert("33333333");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=210px,top=130px,resize=0,scrolling=1","recal");
}

ajaxwin2.moveTo(0,0);
parent.ajaxwin1.hide();
parent.ajaxwin.hide();
}


function show_pop(x,y,z,imgviews)
{
var mod;
var pagenum;
var mod;
var pagenum;
var w = window.innerWidth;
var h = window.innerHeight;



if(document.getElementById('flgfortextviews').value=="1")
{
	if(imgview=="true" && imgviews=="false"){
		show_pop_fromTI(x,y,z);
		return;
	}

	if(imgview=="true" || imgviews=="undefined"){
		show_pophead(x,y,z);
		return;
	}

	imgview="true";
}

	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	}
if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";
if(document.getElementById('mod').value==1)
{
var kl=document.getElementById('chkthumb').offsetWidth;
//var w1=w-kl-25; 
//alert("reena123");
var kt=document.getElementById('maintop1').offsetHeight;
//alert(k1);
}
var edcode=document.getElementById('edcode').value;
if(w=='1024')
{
var w1=w-22;
document.getElementById('iframediv').style.left=5+"px";
}
else
{
var w1=w-kl-20;
document.getElementById('iframediv').style.left= "5px"; <!--kl.toString() + "px"; -->
}


var kt=document.getElementById('maintop1').offsetHeight;

kt=kt + document.getElementById('maintop1').offsetTop;

//var hi=h-kt-25;

//var hi=830;
var $meps=jQuery.noConflict();
/************/
	var scwidth=screen.width; 
			var h4;
	 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $meps("#mainepaer86").css('height');
	 }else {
		h4 = $meps("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=parseInt(h4)-80;
//var h1=parseInt(h4)+45;
}
if(document.getElementById('rsmod').value=='2')
{
var h1=parseInt(h4)-55;
//var h1=parseInt(h4)+55;
}

var h2=document.getElementById('maintop1').offsetHeight;

var hi=h1+h2;

/***********/
//alert(hi);


window.scrollTo(0, 0);

/*document.getElementById('iframediv').style.top=kt.toString() + "px";
document.getElementById('iframediv').style.width=w1.toString() + "px";
document.getElementById('iframediv').style.height=hi.toString() + "px";
document.getElementById('iframediv').style.zIndex="102";
document.getElementById('iframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.top="6px";
 document.getElementById('rigthiframediv').style.right="46px";
// document.getElementById('rigthiframediv').style.left=(w1-46).toString() + "px";
// document.getElementById('rigthiframediv').style.width="46px";
document.getElementById('rigthiframediv').style.height="25px";
document.getElementById('rigthiframediv').style.visibility="visible";
document.getElementById('rigthiframediv').style.zIndex="103";
document.getElementById('img1rigthiframe1').style.visibility="visible";
document.getElementById('img1rigthiframe2').style.visibility="visible";
*/
//document.getElementById('turnpagenumber').value

if(document.getElementById('turnpagenumber').value=="")
{
	mod=1;
	pagenum=1;
}
else
{
	mod=document.getElementById('mod').value;
	pagenum=document.getElementById('turnpagenumber').value;
}

try
{
	var xvalpsi= 1;//document.getElementById('pgnum').value;//currenthds;
	var img=document.getElementById("imgpage_"+xvalpsi);
	if(img !== null && img !== "undefined")
	{
	var src=img.src;
	}
}
catch (erd)
{
	alert("No Image Found...!");
}

var pagedate3=document.getElementById('pgdate1').value;

var pdate3=pagedate3.split('-');
if(pdate3['2'].length==1)
{
var datex='0'+pdate3['2'];
}
else{
var datex=pdate3['2'];
}
if(pdate3['1'].length==1)
{
var monthx='0'+pdate3['1'];
}
else{
var monthx=pdate3['1'];
}
var pagedate1=datex+'-'+monthx+'-'+pdate3['0'];

///pagezoomsinwindows.php?id={R:1}&amp;boxid={R:2}&amp;cid={R:3}&amp;edcode={R:4}&amp;pagedate1={R:5}&amp;pagenum={R:6}&amp;ctype={R:7}&amp;counter={R:8}&amp;share={R:9}

//var url="pagezoomsinwindows.php?id="+x+"&boxid="+y+"&cid="+z+"&edcode="+edcode+"&pagedate1="+pagedate1+"&pagenum="+pagenum+"&ctype=i&counter=1&share=sf.html";
var url="/imageview_"+x+"_"+y+"_"+z+"_"+edcode+"_"+pagedate1+"_"+pagenum+"_i_1_sf.html";
var scwidth=screen.width; 
var scheight=screen.height; 

var iframe = document.getElementById("iframe").value; 
var newWindow = window.open(url, 'Dynamic Popup', 'height=' + scheight + ', width=' + scwidth + 'scrollbars=auto, resizable=no, location=no, status=no');


return false



var win = window.open(url, '_blank');
win.focus();
return false;

//comment by harsh 23/11/2016
try
{
	if(currenthds==undefined || currenthds=="undefined"){
		currenthds=1;
		//alert("----"+currenthds)
	}
	var xvalpsi= currenthds;

	//var img=document.getElementById("imgpage_"+xvalpsi);
	//if(img !== null && img !== "undefined")
	//{
		var src="";
		document.getElementById('iframecontent').src="pagezoomsin.php?img=" +src + "&dvartr=" +dvartr+"&id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum+"&edcode="+edcode;
		
	//}
	/*else
	{
		var xvalp= currenthds+1;	
		var yvalp= currenthds;	
		var img=document.getElementById("imgpagey_"+yvalp);
		if(img !== null && img !== "undefined")
		{
			var img1=document.getElementById("imgpagex_"+xvalp);
			var src=img.src;
			var src1=img1.src;
					//alert('2');
			document.getElementById('iframecontent').src="pagezoomdub.php?img=" +src + "&img1=" +src1 + "&dvartr=" +dvartr+"&id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum;
		}
	}*/
}
catch (erd)
{
	alert("No Image Found...!");
}

setTimeout("document.getElementById('iframecontent').style.visibility='visible'",1);
return false;
document.getElementById('rswin').value='1';
alert(document.getElementById('pgdate1').value)
var strurl1="detailimageviewer.php?id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum+"&pagedate1="+document.getElementById('pgdate1').value;
var width1=screen.width;

//alert(width1);

var w1=w-kl-20; 
var h=h1+h2+140;

if(width1>1100)
{
	//alert("111111");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width=1000px,height=900px,left=210px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>700 && width1<1100)
{
var w1=w-30; 
var h=h1+h2+140;
	//alert("222222");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=175px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
	//alert("33333333");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=210px,top=130px,resize=0,scrolling=1","recal");
}

ajaxwin2.moveTo(0,0);
parent.ajaxwin1.hide();
parent.ajaxwin.hide();
}

var dgt="";
function show_pophead(x,y,z,dgt)
{



if(document.getElementById('flgforimageviews').value=="1"){
	show_pop(x,y,z,dgt);
	return false;
}


var mod;
var pagenum;
var mod;
var pagenum;

var w = window.innerWidth;
var h1 = window.innerHeight;

	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	}

if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";
var h2=document.getElementById('maintop1').offsetHeight;
if(document.getElementById('mod').value==1){
var kl=document.getElementById('chkthumb').offsetWidth;
}
var w1=w-kl-20; 
//var h=h1+h2+140;
//alert(h);

/************/
var $jqddpag=jQuery.noConflict();
	var scwidth=screen.width; 
			var h4;
	 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $jqddpag("#mainepaer86").css('height');
	 }else {
		h4 = $jqddpag("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=(parseInt(h4)+45).toString() + "px";
}
if(document.getElementById('rsmod').value=='2')
{
var h1=(parseInt(h4)+55).toString() + "px";
}

var h2=document.getElementById('maintop1').offsetHeight;

var h=h1+h2;

/***********/

if(document.getElementById('turnpagenumber').value=="")
{
	mod=1;
	pagenum=0;
}
else
{
	mod=document.getElementById('mod').value;
	pagenum=document.getElementById('turnpagenumber').value;
}

if(z==""){
	z=document.getElementById('turnpagenumber').value;
}

var edcode=document.getElementById('edcode').value;
var siteurl=document.getElementById('siteurl').value;
//this is for making page selected in div
document.getElementById('hiddenstreditionnm').value; 
document.getElementById('rswin').value='1';

var pagedate3="";
if(dgt=="" || dgt==undefined)
{
	pagedate3=document.getElementById('pgdate1').value;
}else{
	pagedate3=dgt;
}

var pdate3=pagedate3.split('-');
if(pdate3['2'].length==1)
{
var datex='0'+pdate3['2'];
}
else{
var datex=pdate3['2'];
}
if(pdate3['1'].length==1)
{
var monthx='0'+pdate3['1'];
}
else{
var monthx=pdate3['1'];
}
var pagedate1=datex+'-'+monthx+'-'+pdate3['0'];

//var strurl1="detailtextview.php?id="+x+"&boxid="+y+"&cid="+z+"&mod="+mod+"&pagenum="+pagenum+"&pagedate1="+pagedate1+"&edcode="+edcode+"_0.html";
//var strurl1="/detailtextview.php?id={R:1}&amp;boxid={R:2}&amp;cid={R:3}&amp;mod={R:4}&amp;pagenum={R:5}&amp;pagedate1={R:6}&amp;edcode={R:7}&amp;articalno={R:8}
var strurl1="textview_"+x+"_"+y+"_"+z+"_"+mod+"_"+pagenum+"_"+pagedate1+"_"+edcode+"_0.html";
var win = window.open(strurl1, '_blank');
win.focus();
return false;

var width1=screen.width;
document.getElementById('hiddenstreditionnm').value="";
try
{
	document.getElementById('dshare').style.visibility="hidden";
	document.getElementById('oFilterDIV').style.visibility="hidden";
}
catch(erro)
{
}

/*
if(width1>1100)
{
	//alert("111111");
ajaxwin2=dhtmlwindow.open("poptxt", "iframe", strurl1, document.getElementById('hiddenstreditionnm').value, "width="+w1+"px,height="+h

+"px,left=210px,top=130px,resize=0,scrolling=1","recal");

}

if(width1>700 && width1<1100)
{
var w1=w-30; 
var h=h1+h2+140;

ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, document.getElementById('hiddenstreditionnm').value, "width="+w1+"px,height="+h

+"px,left=50px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
	//alert("33333333");
ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, document.getElementById('hiddenstreditionnm').value, "width="+w1+"px,height="+h

+"px,left=175px,top=130px,resize=0,scrolling=1","recal");

}
*/

document.getElementById('on_focus').style.display = 'block';

ajaxwin2=dhtmlwindow.open("popimage", "iframe", strurl1, document.getElementById('hiddenstreditionnm').value, "max-width=1100px,max-height=800px,bottom=0px,margin=auto,resize=0,scrolling=1","recal");

ajaxwin2.moveTo(0,0);

}




function helpshow()
{
	return false;
}


function mostpopular()
{
	return false;
}


function photogallery()
{
	return false;
}



function adgallery()
{
	return false;
}


function search()
{

	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	}


if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";

var w = window.innerWidth;
var kl=document.getElementById('chkthumb').offsetWidth;

var w1=w-kl-20; 
var $src=jQuery.noConflict();
/************/
	var scwidth=screen.width; 
			var h4;
	 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $src("#mainepaer86").css('height');
	 }else {
		h4 = $src("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=(parseInt(h4)+30).toString() + "px";
}
if(document.getElementById('rsmod').value=='2')
{
var h1=(parseInt(h4)+52).toString() + "px";
}

var h2=document.getElementById('maintop1').offsetHeight;

var h=h1+h2;

/***********/

document.getElementById('rswin').value='1';
var edcode=document.getElementById('edcode').value;
var strurl1="/search.php?PageNo=1&q="+edcode+"&checkflag=true";


var width1=screen.width;

if(width1>1100)
{
ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=210px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>700 && width1<1100)
{
var w1=w-30; 

ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=175px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
var w1=w-30; 

ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=210px,top=130px,resize=0,scrolling=1","recal");
}


ajaxwin2.moveTo(0,0);
}


function archives(x,y,z)
{

	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	} 


document.getElementById('fromarchive').value="true";
if(document.getElementById('dshare').style.visibility=="visible")
document.getElementById('dshare').style.visibility="hidden";


document.getElementById('rswin').value='1';
var modval=document.getElementById('rsmod').value;

var sb=document.getElementById('arched').value

var width1=screen.width;

url="/archives.php?ed="+x+"&sed="+y+"&dt="+z+"&sc="+sb+"&mod="+ modval;

if(width1>700 && width1<1100)
{

ajaxwin1=dhtmlwindow.open("archives", "iframe", url , "Edition Date", "width=410px,height=235px,left=5px,top=220px,resize=0,scrolling=1","recal");
}

if(width1>1100)
{

ajaxwin1=dhtmlwindow.open("archives", "iframe", url , "Edition Date", "width=410px,height=235px,left=170px,top=220px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
ajaxwin1=dhtmlwindow.open("archives", "iframe", url , "Edition Date", "width=380px,height=200px,left=170px,top=220px,resize=0,scrolling=1","recal");
}

ajaxwin1.moveTo(0,0);

}

function clipgallery()
{
		if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	} 


//if(document.getElementById('dshare').style.visibility=="visible")
//document.getElementById('dshare').style.visibility="hidden";


var w = window.innerWidth;
if(document.getElementById('mod').value==1)
var kl=document.getElementById('chkthumb').offsetWidth;

var w1=w-kl-20; 
var h4
	var scwidth=screen.width; 
	var $jqpassg=jQuery.noConflict();
/************/
 if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
		h4 = $jqpassg("#mainepaer86").css('height');
	 }else {
		h4 = $jqpassg("#mainepaer").css('height');
	 }

if(document.getElementById('rsmod').value=='1')
{
var h1=(parseInt(h4)+30).toString() + "px";
}
if(document.getElementById('rsmod').value=='2')
{
var h1=(parseInt(h4)+52).toString() + "px";
}

var h2=document.getElementById('maintop1').offsetHeight;

var h=h1+h2;

/***********/

document.getElementById('rswin').value='1';

var strurl1="/clipgallery.php?PageNo=1";
var win = window.open(strurl1, '_blank');
win.focus();
return false;

var width1=screen.width;

if(width1>1100)
{
var w1=w-kl-20; 

ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=200px,top=165px,resize=0,scrolling=1","recal");
}

if(width1>700 && width1<1100)
{
var w1=w-27; 

ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=10px,top=130px,resize=0,scrolling=1","recal");
}

if(width1>200 && width1<700)
{
var w1=w-30; 
var h=h1+h2+70;

ajaxwin2=dhtmlwindow.open("photo", "iframe", strurl1, "", "width="+w1+"px,height="+h+"px,left=10px,top=140px,resize=0,scrolling=1","recal");
}

ajaxwin2.moveTo(0,0);
}


function openmypage(x)
{
	var h2 = window.innerHeight;
	var hd=(h2-400).toString()+"px";
	var lftd="990px"
    try
	{
		_yd=document.getElementById('contentDivImg').offsetWidth;
	}
	catch (erd23)
	{
	}
	//danish to open at 
	try
	{
		$jqnew(".pagescrollThumb").mCustomScrollbar({
					set_height:"1090px",
					mouseWheel:true
				});

		$jqnew(".pagescrollThumb").mCustomScrollbar("scrollTo",".thumbtitleselect");
		$jqnew(".thumbdf").mCustomScrollbar({
					mouseWheel:true
				});
	}
	catch (wer)
	{
		//alert(wer);
	}

	try
	{
		xd=document.getElementById('outdivd');
		var op=525;
		if(xd == null || xd == "undefined")
		{
			xd=document.getElementById('outdivdx');
			op=xd.clientWidth;
		}
		if(xd !== null && xd !== "undefined")
		{
						
			var _x = 0;			
			var el=xd;
			var N= navigator.appName;
			var UA= navigator.userAgent;
			var temp;
			var browserVersion= UA.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
			if(browserVersion && (temp= UA.match(/version\/([\.\d]+)/i))!= null)
			browserVersion[2]= temp[1];
			browserVersion= browserVersion? [browserVersion[1], browserVersion[2]]: [N, navigator.appVersion,'-?'];
			try
			{
	
				while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
						_x += el.offsetLeft;
						el = el.offsetParent;
				}
							
			 }
			 catch (er2)
			 {
				// alert(er2);
			 }
						
			if(browserVersion[0]=="Chrome" || browserVersion[0]=="MSIE")
					leftPos=_x +op+5;
			else
			{
						sc=screen.width;
						if(sc<='1024')
							{
							leftPos=_x+op-_yd+110+20;
							}
							else
							{
							leftPos=_x+op-_yd+165+20;
							}
			}
			if(document.getElementById('rsmod').value=='1')
			{
			lftd=(leftPos-5).toString()+"px";
			}
			if(document.getElementById('rsmod').value=='2')
			{
			lftd=(leftPos).toString()-335+"px";
			}

			if((document.getElementById('rsmod').value=='2')&& (document.getElementById('pgnumber').value=='0'))
			{
			lftd=(leftPos-5).toString()+"px";
			}
		}
	}
	catch (err)
	{
	}
	try
	{
		if(lftd<200)
		{
			sc=screen.width;
			lftd=parseInt(((sc/1280)*920))+"px";
		}
	}
	catch (ee)
	{
	}
}
</script>

<!-----pop up end------->
<input type="hidden" name="rsmod" id="rsmod"value="1">
<input type="hidden" id="edcode" name="edcode" value=13 />
<input type="hidden" name="parentidhidden" id="parentidhidden">

<script>
function zoooinhds_ads(indexval) 
{
	return false;
	var $mep=jQuery.noConflict();
	
	if(indexval=="ads")
		zoomsval="ads";
	
	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	}
	if(document.getElementById('dshare').style.visibility=="visible")
	document.getElementById('dshare').style.visibility="hidden";
	$mep('body').css("overflow","hidden");
	
		var mod;
		var pagenum;
		var w = window.innerWidth;
		var h = window.innerHeight;
		var kl=document.getElementById('chkthumb').offsetWidth;
		var kt=document.getElementById('maintop1').offsetHeight;
		
		if(w=='1024')
		{
		var w1=w-22;
		document.getElementById('iframediv').style.left=5+"px";
		}
		else
		{
		var w1=w-kl-20;
		document.getElementById('iframediv').style.left= "5px"; <!--kl.toString() + "px"; -->
		}
		var kt=document.getElementById('maintop1').offsetHeight;
		kt=kt + document.getElementById('maintop1').offsetTop;
		/*Change by hds*/
			var scwidth=screen.width; 
			var h4;
			if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
			h4 = $mep("#mainepaer86").css('height');
			}else {
			h4 = $mep("#mainepaer").css('height');
			}
			
			if(document.getElementById('rsmod').value=='1')
			{
			var h1=parseInt(h4)-80;
			//var h1=parseInt(h4)+45;
			}
			if(document.getElementById('rsmod').value=='2')
			{
			var h1=parseInt(h4)-55;
			//var h1=parseInt(h4)+55;
			}
		var h2=document.getElementById('maintop1').offsetHeight;
		var hi=h1+h2;

		//alert(hi);
		window.scrollTo(0, 0);
		document.getElementById('iframediv').style.top=kt.toString() + "px";
		document.getElementById('iframediv').style.width=w1.toString() + "px";
		document.getElementById('iframediv').style.height=hi.toString() + "px";
		document.getElementById('iframediv').style.zIndex="102";
		document.getElementById('iframediv').style.visibility="visible";
		document.getElementById('rigthiframediv').style.top="6px";
 		document.getElementById('rigthiframediv').style.right="46px";
		document.getElementById('rigthiframediv').style.height="25px";
		document.getElementById('rigthiframediv').style.visibility="visible";
		document.getElementById('rigthiframediv').style.zIndex="103";
		document.getElementById('img1rigthiframe1').style.visibility="visible";
		document.getElementById('img1rigthiframe2').style.visibility="visible";
		if(document.getElementById('pgnum').value=="" || document.getElementById('turnpagenumber').value=="")
		{
			mod=1;
			pagenum=0;
		}
		else
		{
			mod=document.getElementById('mod').value;
			pagenum= document.getElementById('turnpagenumber').value;<!--document.getElementById('pgnum').value;-->
		}
		try
		{
			var xvalpsi= document.getElementById('turnpagenumber').value;
			if(xvalpsi==undefined || xvalpsi==""){
			xvalpsi=1;
			}
			var img=document.getElementById("imgpage_"+xvalpsi);
			if(img !== null && img !== "undefined")
			{
			    var kimgpath="";
				try
				{
					kimgpath=document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src;
				}
				catch(exd)
				{	
					kimgpath="";
				}
				if(kimgpath=="" || document.getElementById('iframecontent').style.visibility!="visible")
				{
					var src=img.src;
					var edcode=document.getElementById("edcode").value;
					src=src.toString().replace(".jpg",".jpg"); 
					var pgdate1=document.getElementById("pgdate1").value;		
				    var numes =document.getElementById('totalpages').value;	
					
					//if(indexval=="ads")
					//	src="http://hindustan.4cplus.net/cherokee-print-ads.jpg";
				
					document.getElementById('iframecontent').src="/pagezoomsinsingle.php?img=" +src+"&pgnum="+pagenum+"&edcode="+edcode+"&pgdate="+pgdate1+"&numes="+numes+"&zoomtypes="+zoomsval;
					
				}
				else if(kimgpath.toString().indexOf("-ll.jpg")>0)
				{
						alert("You can not Zoom in further.");
				}
			}
			else
			{
					var xvalp= currenthds+1;	
					var yvalp= currenthds;	
			
					var img1="";
					var img=document.getElementById("imgpagey_"+yvalp);
					mod=document.getElementById('mod').value;
					pagenum= currenthds;
					if((mod==2 && currenthds==1) || currenthds==undefined)
					img1=document.getElementById("reenaimg");
					else
					img1=document.getElementById("imgpagex_"+xvalp);
					//var src=img.src;
					//var src1=img1.src;
					
					if((img !== null && img !== "undefined") || (img1 !== null && img1 !== "undefined"))
					{
						 var kimgpath="";
						 var kimgpath1="";
					try
					{
						kimgpath=document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src;
						kimgpath1=document.getElementById('iframecontent').contentWindow.document.getElementById('img2').src;
					}
					catch(exd)
					{
						kimgpath="";
						kimgpath1="";
					}
					if(kimgpath=="" || document.getElementById('iframecontent').style.visibility!="visible")
					{	
						var src="";
						var src1=img1.src;
						src1=src1.toString().replace("s.jpg",".jpg"); 
					
						if((mod==2 && currenthds==1) || currenthds==undefined){
					        //src1=src1.toString().replace("s.jpg",".jpg"); 
							document.getElementById('iframecontent').src="pagezoomoutdouble.php?img1=" +src1+"&zoomtypes="+indexval;
						}else{
							 src=img.src;
                            src=src.toString().replace("s.jpg",".jpg"); 
							document.getElementById('iframecontent').src="pagezoomoutdouble.php?img=" +src + "&img1=" +src1+"&zoomtypes="+indexval;
						}
					}
					else if(kimgpath.toString().indexOf(".jpg")>0)
					{
							alert("You can not Zoom in further.");
					}
					else if(kimgpath.toString().indexOf("s.jpg")>0)
					{
						kimgpath=kimgpath.toString().replace("s.jpg",".jpg");
						kimgpath1=kimgpath1.toString().replace("s.jpg",".jpg");
						document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src=kimgpath;
						document.getElementById('iframecontent').contentWindow.document.getElementById('img2').src=kimgpath1;
						document.getElementById('iframediv').style.width=(w1-5).toString() + "px";
						setTimeout("document.getElementById('iframediv').style.width=(w1-15).toString() + 'px';",100);
					}
				}
			}
		}
		catch (erd)
		{
			//alert(erd);
		}
		document.getElementById('iframecontent').style.visibility="visible";

}
function zoooinhds(indexval) 
{
	var $mep=jQuery.noConflict();
	
	
	if(document.getElementById('session').value=="false"){
				alert('Please login first.');
				return false;
	}
	//if(document.getElementById('dshare').style.visibility=="visible")
	//document.getElementById('dshare').style.visibility="hidden";
	$mep('body').css("overflow","hidden");
	
		var mod;
		var pagenum;
		var w = window.innerWidth;
		var h = window.innerHeight;
		if(mod==2)
		var kl=120;
		else
		var kl=document.getElementById('chkthumb').offsetWidth;
			
		
		var kt=document.getElementById('maintop1').offsetHeight;
		
		if(w=='1024')
		{
		var w1=w-22;
		document.getElementById('iframediv').style.left=5+"px";
		}
		else
		{
		var w1=w-kl-20;
		document.getElementById('iframediv').style.left= "5px"; <!--kl.toString() + "px"; -->
		}
		var kt=document.getElementById('maintop1').offsetHeight;
		kt=kt + document.getElementById('maintop1').offsetTop;
		/*Change by hds*/
			var scwidth=screen.width; 
			var h4;
			if(scwidth=='1366' && document.getElementById('rsmod').value=='2'){
			h4 = $mep("#mainepaer86").css('height');
			}else {
			h4 = $mep("#mainepaer").css('height');
			}
			
			if(document.getElementById('rsmod').value=='1')
			{
			var h1=parseInt(h4)-80;
			//var h1=parseInt(h4)+45;
			}
			if(document.getElementById('rsmod').value=='2')
			{
			var h1=parseInt(h4)-55;
			//var h1=parseInt(h4)+55;
			}
		var h2=document.getElementById('maintop1').offsetHeight;
		var hi=h1+h2;

		//alert(hi);
		window.scrollTo(0, 0);
		document.getElementById('iframediv').style.top=kt.toString() + "px";
		document.getElementById('iframediv').style.width=w1.toString() + "px";
		document.getElementById('iframediv').style.height=hi.toString() + "px";
		document.getElementById('iframediv').style.zIndex="102";
		document.getElementById('iframediv').style.visibility="visible";
		document.getElementById('rigthiframediv').style.top="6px";
 		document.getElementById('rigthiframediv').style.right="46px";
		document.getElementById('rigthiframediv').style.height="25px";
		document.getElementById('rigthiframediv').style.visibility="visible";
		document.getElementById('rigthiframediv').style.zIndex="103";
		document.getElementById('img1rigthiframe1').style.visibility="visible";
		document.getElementById('img1rigthiframe2').style.visibility="visible";
		if(document.getElementById('pgnum').value=="" || document.getElementById('turnpagenumber').value=="")
		{
			mod=1;
			pagenum=0;
		}
		else
		{
			mod=document.getElementById('mod').value;
			pagenum= document.getElementById('turnpagenumber').value;<!--document.getElementById('pgnum').value;-->
		}
		try
		{
			var xvalpsi= document.getElementById('turnpagenumber').value;
			if(xvalpsi==undefined || xvalpsi==""){
			xvalpsi=1;
			}
			var img=document.getElementById("imgpage_"+xvalpsi);
			if(img !== null && img !== "undefined")
			{
			    var kimgpath="";
				try
				{
					kimgpath=document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src;
				}
				catch(exd)
				{	
					kimgpath="";
				}
				if(kimgpath=="" || document.getElementById('iframecontent').style.visibility!="visible")
				{
					var src=img.src;
					var edcode=document.getElementById("edcode").value;
					src=src.toString().replace(".jpg",".jpg"); 
					var pgdate1=document.getElementById("pgdate1").value;		
				    var numes =document.getElementById('totalpages').value;	
					
					document.getElementById('iframecontent').src="/pagezoomsinsingle.php?img=" +src+"&pgnum="+pagenum+"&edcode="+edcode+"&pgdate="+pgdate1+"&numes="+numes;
					
				}
				else if(kimgpath.toString().indexOf("-ll.jpg")>0)
				{
						alert("You can not Zoom in further.");
				}
			}
			else
			{
					var xvalp= currenthds+1;	
					var yvalp= currenthds;	
			
					var img1="";
					var img=document.getElementById("imgpagey_"+yvalp);
					mod=document.getElementById('mod').value;
					pagenum= currenthds;
					if((mod==2 && currenthds==1) || currenthds==undefined)
					img1=document.getElementById("reenaimg");
					else
					img1=document.getElementById("imgpagex_"+xvalp);
					//var src=img.src;
					//var src1=img1.src;
					
					if((img !== null && img !== "undefined") || (img1 !== null && img1 !== "undefined"))
					{
						 var kimgpath="";
						 var kimgpath1="";
					try
					{
						kimgpath=document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src;
						kimgpath1=document.getElementById('iframecontent').contentWindow.document.getElementById('img2').src;
					}
					catch(exd)
					{
						kimgpath="";
						kimgpath1="";
					}
					if(kimgpath=="" || document.getElementById('iframecontent').style.visibility!="visible")
					{	
						var src="";
						var src1=img1.src;
						src1=src1.toString().replace("s.jpg",".jpg"); 
					
						if((mod==2 && currenthds==1) || currenthds==undefined){
					        //src1=src1.toString().replace("s.jpg",".jpg"); 
							document.getElementById('iframecontent').src="pagezoomoutdouble.php?img1=" +src1+"&zoomtypes="+indexval;
						}else{
							 src=img.src;
                            src=src.toString().replace("s.jpg",".jpg"); 
							document.getElementById('iframecontent').src="pagezoomoutdouble.php?img=" +src + "&img1=" +src1+"&zoomtypes="+indexval;
						}
					}
					else if(kimgpath.toString().indexOf(".jpg")>0)
					{
							alert("You can not Zoom in further.");
					}
					else if(kimgpath.toString().indexOf("s.jpg")>0)
					{
						kimgpath=kimgpath.toString().replace("s.jpg",".jpg");
						kimgpath1=kimgpath1.toString().replace("s.jpg",".jpg");
						document.getElementById('iframecontent').contentWindow.document.getElementById('img1').src=kimgpath;
						document.getElementById('iframecontent').contentWindow.document.getElementById('img2').src=kimgpath1;
						document.getElementById('iframediv').style.width=(w1-5).toString() + "px";
						setTimeout("document.getElementById('iframediv').style.width=(w1-15).toString() + 'px';",100);
					}
				}
			}
		}
		catch (erd)
		{
			//alert(erd);
		}
		document.getElementById('iframecontent').style.visibility="visible";

}

function zoooouthds(indexval) 
{
	return false;
}
</script>
<script>
	function changethumb(val){
	var id='#pgmain'+val;
	 var scrol_pos = $(id).scrollTop();
	$(id).scrollTop(scrol_pos + 150);
}
</script>
<!-----thumbnail end---->

<!---sticky start--->
193
<!---sticky end--->
<div id='on_focus'>
<input type='hidden' name='ID' id='ID'>
<input type="hidden" value="https://epaper.navbharattimes.com/" id="siteurl"/>
<input type="hidden" id="fromsrhdt" name="fromsrhdt" value=""/>
<input type="hidden" id="fromarchive" name="fromarchive" value="false"/>
<input type="hidden" id="archivetype" name="archivetype" value="r"/>
<input type="hidden" id="HiddenSetheightVals" name="HiddenSetheightVals" />
<input type="hidden" id="HiddenSetheight_t" name="HiddenSetheight_t" value="true" />
<input type="hidden" id="glbvals">
<input type="hidden" id="currentpgnumber" name="currentpgnumber" />
<input type="hidden" id="imagex_num" name="imagex_num" />
<input type="hidden" id="imagey_num" name="imagey_num" />
<input type="hidden" id="desc_eng" name="desc_eng" value="13" />
<input type="hidden" id="scode_e" name="scode_e" />
<input type="hidden" id="scode_name" name="scode_name" value="2023-05-17"  />
<input type="hidden" id="tokenval" name="tokenval"/>
<input type="hidden" id="actuallink" name="actuallink" value="https://vsp1deskepaper.navbharattimes.com/delhi/2023-05-17/13/page-1.html"/>
	


