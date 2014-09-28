/*!
 *  Item: tr.base
 */
var $id = function(a) {
	return document.getElementById(a)
};
var tr = tr || {};
(function() {
	tr.base = {
		browVer : typeof ($) != "undefined" ? $.browser.version : "",
		isMozilla : (typeof document.implementation != "undefined")
				&& (typeof document.implementation.createDocument != "undefined")
				&& (typeof HTMLDocument != "undefined"),
		isIE : window.ActiveXObject ? true : false,
		isIE6 : (window.ActiveXObject ? true : false) && this.browVer == 6 ? true
				: false,
		isFirefox : (navigator.userAgent.toLowerCase().indexOf("firefox") != -1),
		isSafari : (navigator.userAgent.toLowerCase().indexOf("safari") != -1),
		isOpera : (navigator.userAgent.toLowerCase().indexOf("opera") != -1),
		isSupportJquery : typeof ($) != "undefined" && $ != null,
		bind : function(c, a, b) {
			if (c.addEventListener) {
				c.addEventListener(a, b, false)
			} else {
				if (c.attachEvent) {
					c.attachEvent("on" + a, b)
				} else {
					c["on" + a] = b
				}
			}
		},
		stopProp : function(a) {
			var a = a || window.event;
			a.stopPropagation ? a.stopPropagation() : (a.cancelBubble = true)
		},
		setCookie : function(d, e, f, a) {
			if (a) {
				var c = new Date();
				var b = new Date();
				b.setTime(c.getTime() + 3600000 * a)
			}
			window.document.cookie = d + "=" + e + "; "
					+ (a ? ("expires=" + b.toGMTString() + "; ") : "")
					+ (f ? ("path=" + f + "; ") : "path=/; ");
			return true
		},
		getCookie : function(a) {
			if (document.cookie.length > 0) {
				c_start = document.cookie.indexOf(a + "=");
				if (c_start != -1) {
					c_start = c_start + a.length + 1;
					c_end = document.cookie.indexOf(";", c_start);
					if (c_end == -1) {
						c_end = document.cookie.length
					}
					return unescape(document.cookie.substring(c_start, c_end))
				}
			}
			return ""
		},
		getQueryString : function(a) {
			var b = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i");
			var c = (window.location.search || window.location.hash).substr(1)
					.match(b);
			if (c != null) {
				return decodeURI(c[2])
			}
			return null
		},
		getStyle : function(a) {
			return a.currentStyle
					|| document.defaultView.getComputedStyle(a, null)
		},
		htmlEncode : function(a) {
			return a.replace(/&amp;/g, "&").replace(/&acute;/g, "'").replace(
					/&quot;/g, '"').replace(/&lt;/g, "<").replace(/&gt;/g, ">")
					.replace(/<br>/g, "\n")
		},
		copyClip : function(h) {
			if (window.clipboardData) {
				window.clipboardData.setData("Text", h)
			} else {
				if (window.netscape) {
					try {
						netscape.security.PrivilegeManager
								.enablePrivilege("UniversalXPConnect");
						var c = Components.classes["@mozilla.org/widget/clipboard;1"]
								.createInstance(Components.interfaces.nsIClipboard);
						if (!c) {
							return
						}
						var b = Components.classes["@mozilla.org/widget/transferable;1"]
								.createInstance(Components.interfaces.nsITransferable);
						if (!b) {
							return
						}
						b.addDataFlavor("text/unicode");
						var g = new Object(), a = new Object(), g = Components.classes["@mozilla.org/supports-string;1"]
								.createInstance(Components.interfaces.nsISupportsString), i = h;
						g.data = i;
						b.setTransferData("text/unicode", g, i.length * 2);
						var d = Components.interfaces.nsIClipboard;
						if (!c) {
							return false
						}
						c.setData(b, null, d.kGlobalClipboard)
					} catch (f) {
					}
				}
			}
		},
		getWindowSize : function() {
			if (window.innerWidth) {
				winWidth = window.innerWidth
			} else {
				if ((document.body) && (document.body.clientWidth)) {
					winWidth = document.body.clientWidth
				}
			}
			if (window.innerHeight) {
				winHeight = window.innerHeight
			} else {
				if ((document.body) && (document.body.clientHeight)) {
					winHeight = document.body.clientHeight
				}
			}
			if (document.documentElement
					&& document.documentElement.clientHeight
					&& document.documentElement.clientWidth) {
				winHeight = document.documentElement.clientHeight;
				winWidth = document.documentElement.clientWidth
			}
			return {
				height : winHeight,
				width : winWidth
			}
		},
		trim : function(a) {
			if (typeof (a) == "string") {
				return a.replace(/^\s*|\s*$/gm, "")
			} else {
				return a
			}
		},
		isEmpty : function(a) {
			switch (typeof (a)) {
			case "string":
				return a.replace(/^\s\s*/, "").replace(/\s\s*$/, "").length == 0 ? true
						: false;
			case "object":
				return a == null;
			case "array":
				return a.length == 0;
			default:
				return true
			}
		},
		isNumber : function(b) {
			var a = /^[\d|\.|,]+$/;
			return a.test(b)
		},
		isInt : function(b) {
			if (b == "" && b != 0) {
				return false
			}
			var a = /^-?\d+$/;
			return a.test(b)
		},
		isEmail : function(b) {
			var a = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/;
			return a.test(b)
		},
		isTelArea : function(b) {
			var a = /^[\d]{3,4}$/;
			return a.test(b)
		},
		isTel : function(b) {
			var a = /^[\d\-\s]{6,13}$/;
			return a.test(b)
		},
		isMobile : function(b) {
			var a = /^1[3|4|5|8][0-9]{9}$/;
			return a.test(b)
		},
		textCue : function(d, e, b, a, c) {
			if (!b) {
				b = "#000"
			}
			if (!a) {
				a = "#999"
			}
			d.value = e;
			d.style.color = a;
			d.onfocus = function() {
				if (this.value == e) {
					this.value = "";
					this.style.color = b
				}
			};
			d.onblur = function() {
				if (d.value == "") {
					d.value = e;
					d.style.color = a
				}
			};
			if (typeof c != "function") {
				return
			}
			d.onkeypress = function(g) {
				var g = g || window.event, f = g.keyCode || g.which;
				if (f == 13) {
					c()
				}
			}
		},
		dateFormat : function(c, a) {
			var d = {
				"M+" : c.getMonth() + 1,
				"D+" : c.getDate(),
				"h+" : c.getHours(),
				"m+" : c.getMinutes(),
				"s+" : c.getSeconds(),
				"q+" : Math.floor((c.getMonth() + 3) / 3),
				S : c.getMilliseconds()
			};
			if (/(Y+)/.test(a)) {
				a = a.replace(RegExp.$1, (c.getFullYear() + "")
						.substr(4 - RegExp.$1.length))
			}
			for ( var b in d) {
				if (new RegExp("(" + b + ")").test(a)) {
					a = a.replace(RegExp.$1, RegExp.$1.length == 1 ? d[b]
							: ("00" + d[b]).substr(("" + d[b]).length))
				}
			}
			return a
		}
	}
})();
;
/*
 * ! Item: tr.jqplugin.tab
 */
(function(a) {
	a.fn.tab = function(b) {
		var d = {
			tabLink : ".tabLink",
			tabContent : ".tabContent",
			initIndex : 0,
			current : "on",
			reverse : false
		};
		var c = a.extend(d, b);
		this.each(function() {
			var i = a(this), k, h, f, j, g;
			if (!c.tabLink || !c.tabContent) {
				return
			}
			k = i.find(c.tabLink);
			h = i.find(c.tabContent);
			f = k.length;
			j = c.initIndex < f ? c.initIndex : 0;
			e(j);
			k.mouseover(function() {
				e(k.index(a(this)));
				return false
			});
			function e(l) {
				if (l < h.length) {
					k.removeClass(c.current);
					k[l].className += " " + c.current;
					h.hide();
					h[c.reverse ? f - l - 1 : l].style.display = "block"
				}
			}
		})
	}
})(jQuery);
;
/*
 * ! Item: tr.jqplugin.twostateli
 */
(function(a) {
	a.fn.twoStateLi = function(b) {
		var e = {
			state1 : ".state1",
			state2 : ".state2",
			initIndex : 0,
			changeSpeed : 0
		};
		var c = a.extend(e, b);
		var d = tr.base;
		this.each(function() {
			var k = a(this), h, f, i, m, j, g = false;
			h = k.find(c.state1);
			f = k.find(c.state2);
			if (h.length == 0 || f.length == 0 || !d.isInt(c.initIndex)) {
				return
			}
			c.initIndex = m = c.initIndex > f.length - 1 ? 0 : c.initIndex;
			l(c.initIndex);
			if (d.isInt(c.changeSpeed) && c.changeSpeed > 0) {
				g = true;
				j = setInterval(function() {
					m = m >= f.length - 1 ? 0 : m + 1;
					l(m)
				}, c.changeSpeed)
			}
			f.mouseover(function() {
				clearInterval(j);
				m = f.index(a(this));
				l(m);
				f.eq(m).parent().bind("mouseleave", function() {
					if (g) {
						j = setInterval(function() {
							m = m >= f.length - 1 ? 0 : m + 1;
							l(m)
						}, c.changeSpeed)
					}
					a(this).unbind("mouseleave")
				})
			});
			function l(n) {
				h.hide();
				f.show();
				if (h[n]) {
					h[n].style.display = "block"
				}
				f[n].style.display = "none"
			}
		})
	}
})(jQuery);
;
(function(a) {
	a.fn.ppImageview = function(J) {
		var r = "", T = "", j = "", y = "", H = "", u = "";
		var w = [], W;
		var R, O, t, s, g = new Image();
		var z = null, v = null;
		var k = this, S, L, i, U, E, C, M, m, e, G, d, X, c, N, K, b, P, l, Y, x, Q, o;
		var q = {
			imageAClass : ".ppImages",
			pp : true,
			resizable : true,
			wRate : 0.4,
			hRate : 0.9,
			minWid : 600,
			minHei : 400,
			multiPage : false,
			preClass : "",
			nextClass : "",
			thumb : false
		};
		a.extend(q, J);
		a(q.imageAClass, this).each(function(aa) {
			w.push(a(this));
			a(this).click(function(ab) {
				ab.preventDefault();
				I(a(this), aa)
			})
		});
		W = w.length;
		function I(ab, aa) {
			F();
			h();
			D(aa)
		}
		function F() {
			var aa = "";
			aa += '<div class="imageviewBox">';
			aa += '<div class="viewboxHeader"><h3 class="viewboxTitle"></h3><a href="javascript:void(0);" title="Close" class="viewboxClose icon-public">Close</a><span class="viewboxInfo">Size format</span></div>';
			aa += '<div class="viewboxContent"><div class="viewboxLoading"></div><img class="viewImagePre" src="" /><img class="viewImageCurrent" id="viewImageCurrent" src="" /><img class="viewImageNext" src="" /><a href="javascript:void(0);" class="viewbtnPre icon-public"></a><a href="javascript:void(0);" class="viewbtnNext icon-public"></a>';
			if (q.pp) {
				aa += '<a href="javascript:void(0);" downname="wallpaper" class="viewbtnDown icon-public" resname="" downurl=""></a>'
			} else {
				aa += '<a href="" target="_blank" class="viewbtnDown icon-public"></a>'
			}
			aa += '<div class="no_pic"><div class="no_pic_inner">';
			aa += '<div class="no_pic_line1">NO MORE</div>';
			aa += '<div class="no_pic_line2">Hết ảnh nền</div>';
			aa += '<div class="no_pic_line3"><a class="no_pic_link" href="#">Xem trang kế</a></div>';
			aa += "</div></div>";
			aa += "</div>";
			if (q.thumb) {
				aa += '<div class="imageThumbBox"><div class="imageThumbInner">';
				aa += '<a class="thumbLeft" href="javascript:void(0)"> < </a><div class="thumbUlWrap"><ul class="thumbUlList">'
						+ A()
						+ '</ul></div><a class="thumbRight" href="javascript:void(0)"> > </a>';
				aa += "</div></div>"
			}
			aa += "</div>";
			aa += '<div class="imageviewBg"></div>';
			a(aa).appendTo(a("body"));
			Z()
		}
		function A() {
			var ab = "";
			for ( var aa = 0; aa < w.length; aa++) {
				ab += '<li index="' + aa + '" oSrc="' + w[aa].attr("href")
						+ '"><img alt="" src="'
						+ a("img", w[aa]).eq(0).attr("src") + '" /></li>'
			}
			return ab
		}
		function V() {
			S.css("display", "block");
			L.css("display", "block")
		}
		function Z() {
			S = a(".imageviewBox");
			L = a(".imageviewBg");
			i = a(".viewboxContent");
			U = a(".viewboxLoading");
			E = a(".viewboxTitle");
			C = a(".viewboxInfo");
			M = a(".viewboxClose");
			m = a(".viewImageCurrent").eq(0);
			e = a(".viewImagePre");
			G = a(".viewImageNext");
			d = a(".viewbtnPre");
			X = a(".viewbtnNext");
			c = a(".viewbtnDown", S);
			x = a(".no_pic");
			Q = a(".no_pic_line2");
			o = a(".no_pic_link");
			if (q.thumb) {
				N = a(".thumbLeft");
				K = a(".thumbRight");
				P = a(".thumbUlList");
				b = a("li", P);
				Y = a(".imageThumbInner");
				l = a(".thumbUlWrap");
				b.click(function() {
					r = a(this).attr("oSrc");
					D(parseInt(a(this).attr("index")))
				});
				N.click(function() {
					f(true, 1)
				});
				K.click(function() {
					f(true, 2)
				})
			}
			i.hover(function() {
				a(this).addClass("viewboxContent_on")
			}, function() {
				a(this).removeClass("viewboxContent_on")
			});
			d.click(function() {
				r = e.attr("src");
				D(parseInt(a(this).attr("index")))
			});
			X.click(function() {
				r = G.attr("src");
				D(parseInt(a(this).attr("index")))
			});
			a(".imageviewBg,.viewboxClose").click(function() {
				B()
			});
			a(window).bind("resize.wallpaper", p);
			a(window).bind("scroll.wallpaper", p);
			if (q.pp) {
				c.click(function(ab) {
					ab.preventDefault();
					var aa = a(this);
					a("#layer_wrap").floatObj({
						id : $id("layer_wrap"),
						alignCenter : true,
						closeBtn : a("#closeLayer"),
						layerDec : $id("layer_dec"),
						appName : aa.attr("resname"),
						appVersion : aa.attr("version"),
						appType : aa.attr("downname"),
						timeDec : ".timeout_dec",
						timeSecond : 15
					});
					ppOneKey(a(this))
				})
			}
		}
		function p() {
			if (document.getElementById("viewImageCurrent")) {
				clearTimeout(z);
				z = setTimeout(function() {
					h();
					n();
					if (q.thumb) {
						f(false, 3, a(".currentThumb").eq(0))
					}
				}, 500)
			}
		}
		function D(ac) {
			if (ac < 0 || ac > W - 1) {
				U[0].style.display = "none";
				x[0].style.display = "block";
				ac <= 0 ? Q[0].innerHTML = "Đã là trang đầu"
						: Q[0].innerHTML = "Không còn tiếp";
				if (ac < 0) {
					d.attr("index", -1);
					X.attr("index", 0);
					if (q.multiPage && a(q.preClass)[0]) {
						o[0].href = a(q.preClass)[0].href;
						o[0].innerHTML = "Trang kế tiếp";
						o[0].style.display = "block"
					} else {
						o[0].href = "";
						o[0].style.display = "none"
					}
				} else {
					d.attr("index", W - 1);
					X.attr("index", W);
					if (q.multiPage && a(q.nextClass)[0]) {
						o[0].href = a(q.nextClass)[0].href;
						o[0].innerHTML = "Trang kế tiếp";
						o[0].style.display = "block"
					} else {
						o[0].href = "";
						o[0].style.display = "none"
					}
				}
				C[0].innerHTML = E[0].innerHTML = "";
				if (q.thumb) {
					b.attr("class", "")
				}
				return false
			}
			x[0].style.display = "none";
			g.onload = null;
			g = new Image();
			var ad = ac - 1, ab = ac + 1;
			var ae = w[ac];
			r = ae.attr("href");
			T = a("img", ae).eq(0).attr("alt");
			j = ae.attr("data-type");
			y = ae.attr("data-format");
			u = ae.attr("data-size");
			H = ae.attr("data-original");
			if (q.pp) {
				c.attr("resname", T);
				c.attr("downurl", H)
			} else {
				c.attr("href", H)
			}
			U.css("display", "block");
			m.css("display", "none");
			E[0].innerHTML = T;
			C[0].innerHTML = "Format:" + y + "  Kích thước:" + u + "  Loại:" + j;
			e.attr("src", w[ad] ? w[ad].attr("href") : "");
			G.attr("src", w[ab] ? w[ab].attr("href") : "");
			d.attr("index", ad);
			X.attr("index", ab);
			if (q.thumb) {
				b.each(function() {
					var af = a(this);
					if (parseInt(af.attr("index")) == ac) {
						af.attr("class", "currentThumb");
						f(false, 3, af)
					} else {
						af.attr("class", "")
					}
				})
			}
			g.src = r;
			if (g.complete) {
				aa()
			} else {
				g.onload = function() {
					g.onload = null;
					aa()
				}
			}
			function aa() {
				U.css("display", "none");
				R = parseInt(g.width);
				O = parseInt(g.height);
				n();
				m.attr("src", g.src);
				m.css("display", "inline-block")
			}
		}
		function n() {
			var aa = R;
			var ad = O;
			var ag = aa / ad;
			var ac = 0, af = 0, ab = 0, ae = 0;
			if (aa >= t && ad >= s) {
				if ((aa - t) >= (ad - s)) {
					ac = t;
					af = ac / ag;
					ae = (s - af) / 2
				} else {
					af = s;
					ac = af * ag;
					ab = (t - ac) / 2
				}
			} else {
				if (aa >= t && ad < s) {
					ac = t;
					af = ac / ag;
					ae = (s - af) / 2
				} else {
					if (aa < t && ad >= s) {
						af = s;
						ac = af * ag;
						ab = (t - ac) / 2
					} else {
						ac = aa;
						af = ad;
						ab = (t - ac) / 2;
						ae = (s - af) / 2
					}
				}
			}
			m.width(ac).height(af);
			m.css({
				left : ab + "px",
				top : +ae + "px"
			})
		}
		function h() {
			var ab = 0, ad = 0, aa = 0;
			var ac = parseInt(a(window).width()), ae = parseInt(a(window)
					.height());
			if (q.resizable) {
				ac * q.wRate < q.minWid ? ab = q.minWid : ab = ac * q.wRate;
				ae * q.hRate < q.minHei ? ad = q.minHei : ad = ae * q.hRate
			} else {
				ab = q.minWid;
				ad = q.minHei
			}
			t = ab;
			if (q.thumb) {
				s = ad - 140;
				l.width(ab - (11 * 2 + 35 * 2));
				b.each(function(af) {
					var ag = parseInt(a(this).width());
					a(this).attr("pLeft", aa);
					a(this).width(ag);
					aa += ag + 16
				});
				P.width(aa)
			} else {
				s = ad - 40
			}
			i.width(t).height(s);
			S.width(ab).height(ad);
			S.css("left", (ac - ab) / 2 + "px");
			S.css("top", (ae - ad) / 2 + parseInt(a(document).scrollTop())
					+ "px");
			L.height(ae > parseInt(a(document).height()) ? ae : parseInt(a(
					document).height()))
		}
		function f(ag, ad, ah) {
			var af = 0;
			var ab = parseInt(l.width());
			var ae = parseInt(P.css("left"));
			var ac = Math.abs(ae);
			var aa = parseInt(P.width());
			if (ag) {
				if (ad == 1) {
					af = ae + ab
				} else {
					if (ad == 2) {
						af = ae - ab
					}
				}
			} else {
				af = -parseInt(ah.attr("pleft")) + 200
			}
			if (af < ab - aa) {
				af = -(aa - ab)
			}
			if (af > 0) {
				af = 0
			}
			ag ? P.animate({
				left : af + "px"
			}, 200) : P.css("left", af)
		}
		function B() {
			a(".imageviewBg,.imageviewBox").remove();
			a(window).unbind("resize.wallpaper");
			a(window).unbind("scroll.wallpaper")
		}
	}
})(jQuery);
;
$(function() {
	topUserLogin();
	menu();
	searchRes();
	setMouseHover();
	fTopNav();
	if ($("html").find(".wrap").length > 0) {
		gotoTOP()
	}
	getNavWidth();
	baiduShare()
});
function gotoTOP() {
	var d = "Về đầu trang", b = $('<div class="backtoTop"></div>').appendTo($("body"))
			.text(d).attr("title", d).hover(function() {
				$(this).addClass("backtoTop-hover")
			}, function() {
				$(this).removeClass("backtoTop-hover")
			}).click(function() {
				$("html, body").animate({
					scrollTop : 0
				}, 120)
			});
	function c() {
		var e = $(document).scrollTop(), f = $(window).height();
		(e > 0) ? b.show() : b.hide();
		if (!window.XMLHttpRequest) {
			b.css("top", e + f - 166)
		}
	}
	$(".backtoTop").css("right", $(".wrap").offset().left - 60);
	function a() {
		var e = $(".wrap").offset().left;
		if (e > 60) {
			$(".backtoTop").css("right", e - 60)
		} else {
			$(".backtoTop").css("right", e)
		}
	}
	$(window).bind("scroll", c);
	$(window).bind("resize", a)
}
function getNavWidth() {
	var c = $("#nav .navList"), d = parseInt(c.width()), b = c.find("li"), a;
	if (b.length > 1) {
		a = parseInt((d - (b.length - 1) * 1) / b.length);
		b.css("width", a)
	}
}

function topUserLogin() {
	var a = $id("userLogin"), c;
	if (!a) {
		return
	}
	c = a.innerHTML;
	$.ajax({
		url : "/user/",
		type : "GET",
		dataType : "json",
		success : b
	});
	function b(d) {
		if (d.status == 400) {
			a.innerHTML = c
		} else {
			a.innerHTML = "Hello " + d.data.username
					+ " ，Welcome!　[<a href='/user/loginout/?url="
					+ encodeURIComponent(parent.location.href)
					+ "'>Logout</a>]"
		}
	}
}
function menu() {
	var a = $("li.dropMenu");
	a.hover(function() {
		var b = $(this).children("div.menuBox");
		$(this).find("span.otherMenu").addClass("on");
		if (b.length > 0) {
			if (b.css("display") == "none") {
				b.stop().slideDown(100)
			} else {
				b.stop().slideUp(100)
			}
		}
	}, function() {
		var b = $(this).children("div.menuBox");
		$(this).find("span.otherMenu").removeClass("on");
		b.stop().slideUp(100)
	})
}
function setMouseHover() {
	var a = $(".setHover");
	a.hover(function() {
		this.className = this.className.replace(/^setHover/, "setHover hover")
				.replace(/(\s?)(\S+)\s+setHover/, "$1$2 setHover $2_hover")
	}, function() {
		this.className = this.className.replace(/\s+\S+_hover|\s+hover/, "")
	})
}
function searchRes() {
	var b = $("div.search"), c = $("#searchRight"), f = $("#searchTypeIco"), h = $("ul.typebox"), g = h
			.children("li"), e = b.children("a[href]"), d = e.attr("href"), i = b
			.children("input[type=text]"), a = "", j = "";
	f.mouseover(function() {
		if (h.css("display") == "none") {
			h.slideDown("fast")
		}
	});
	c.mouseleave(function() {
		h.hide()
	});
	g.click(function() {
		f.children("i").attr("class", $(this).children("i").attr("class"));
		h.hide()
	});
	h.mouseleave(function() {
		h.hide()
	});
	i.focus(function() {
		var k = i.val();
		if (k == "Tìm kiếm") {
			$(this).val("")
		}
	});
	i.blur(function() {
		var k = i.val();
		if (k == "") {
			$(this).val("Tìm kiếm")
		}
	});
	e.click(function() {
		var k = i.val();
		if (k == "" || k == "Tìm kiếm") {
			alert("Không thể bỏ trống");
			return false
		} else {
			j = k;
			a = f.find("i").attr("class");
			if (a == "news") {
				d = "http://game-pt.com/search/?devtype=&a=" + a + "&keyword="
						+ j;
				e.attr("href", d)
			} else {
				if (a == "bell") {
					d = "/lingsheng/search/" + j;
					e.attr("href", d);
					i.val(j)
				} else {
					d += "/" + k;
					e.attr("href", d)
				}
			}
		}
	});
	i
			.keydown(function(l) {
				var m = l || window.event
						|| arguments.callee.caller.arguments[0], n = i.val(), k;
				if (m && m.keyCode == 13) {
					if (n == "" || n == "Tìm kiếm") {
						alert("Không thể bỏ trống");
						return false
					} else {
						j = n;
						a = f.find("i").attr("class");
						if (a == "news") {
							window.location = "http://game-pt.com/search/?devtype=&a="
									+ a + "&keyword=" + j
						} else {
							if (a == "bell") {
								k = "/lingsheng/search/" + j;
								window.location.href = k
							} else {
								k = d + "/" + n;
								window.location.href = k
							}
						}
					}
				}
			})
}

--------------------
 Web sharing
--------------------
function wbshare() {
	var c = $("span.share,div.share"), b = c.find("span.sina"), a = c
			.find("span.txWeibo");
	qzone = c.find("span.qzone");
	renren = c.find("span.renren");
	b.click(function() {
		shareToApp.tSinaWb()
	});
	a.click(function() {
		shareToApp.tQQWb()
	});
	qzone.click(function() {
		shareToApp.tQQZone()
	});
	renren.click(function() {
		shareToApp.tRR()
	})
}
shareToApp = {
	tSinaWb : function() {
		var c = {
			url : location.href,
			appkey : "",
			title : shareText,
			pic : "",
			ralateUid : ""
		};
		var a = [];
		for ( var b in c) {
			a.push(b + "=" + encodeURIComponent(c[b] || ""))
		}
		window.open("http://service.weibo.com/share/share.php?" + a.join("&"),
				"_blank", "width=615,height=505")
	},
	tQQWb : function() {
		var e = encodeURI(shareText);
		var d = encodeURIComponent(location.href);
		var c = encodeURI("appkey");
		var b = "";
		var a = "http://v.t.qq.com/share/share.php?title=" + e + "&url=" + d
				+ "&appkey=" + c + "&site=" + b;
		window
				.open(
						a,
						"Chuyển đến Q-zone",
						"width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no")
	},
	tQQZone : function() {
		var b = encodeURIComponent(location.href);
		var a = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url="
				+ b;
		window.open(a)
	},
	tRR : function() {
		var c = encodeURI(shareText);
		var b = encodeURIComponent(location.href);
		var a = "http://share.renren.com/share/buttonshare.do?link=" + b
				+ "&title=" + c;
		window.open(a, "Share to Renren", "width=600,height=450")
	}
};

function SetCwinHeight(b) {
	var a = b;
	if (a && !window.opera) {
		if (a.contentDocument && a.contentDocument.body.offsetHeight) {
			a.height = a.contentDocument.body.offsetHeight
		} else {
			if (a.contentDocument
					&& a.contentDocument.documentElement.offsetHeight) {
				a.height = a.contentDocument.documentElement.offsetHeight
			} else {
				if (a.Document && a.Document.body.scrollHeight) {
					a.height = a.Document.body.scrollHeight
				}
			}
		}
	}
}

function friendLinkToggle() {
	var e = $("div.friendL"), a = $("div.friendR"), d = a.children("a.more"), c = a
			.children("a.noMore"), b = e.height();
	friendL_line_h = parseInt(e.children("a").css("line-height")) * 2;
	b > friendL_line_h ? e[0].style.height = friendL_line_h + "px" : "";
	d.click(function() {
		e.stop().animate({
			height : b + "px"
		}, "fast");
		this.style.display = "none";
		c[0].style.display = "block";
		return false
	});
	c.click(function() {
		e.stop().animate({
			height : friendL_line_h + "px"
		}, "fast");
		this.style.display = "none";
		d[0].style.display = "block";
		return false
	})
}

function fTopNav() {
	var a = $("#topNav");
	$navCon = $("#topNav_con");
	$("#topNav, #topNav_con").hover(function() {
		a.addClass("current");
		$navCon.css("display", "block")
	}, function() {
		a.removeClass("current");
		$navCon.css("display", "none")
	})
}

--------------------
 Share to Baidu.com
--------------------
function baiduShare() {
	window._bd_share_config = {
		common : {
			bdSnsKey : {},
			bdText : "",
			bdMini : "2",
			bdMiniList : false,
			bdPic : "",
			bdStyle : "0",
			bdSize : "16"
		},
		share : {}
	};
	with (document) {
		0[(getElementsByTagName("head")[0] || body)
				.appendChild(createElement("script")).src = "http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="
				+ ~(-new Date() / 3600000)]
	}
}

jQuery.easing.jswing = jQuery.easing.swing;
jQuery.extend(jQuery.easing, {
	def : "easeOutQuad",
	swing : function(j, i, b, c, d) {
		return jQuery.easing[jQuery.easing.def](j, i, b, c, d)
	},
	easeInQuad : function(j, i, b, c, d) {
		return c * (i /= d) * i + b
	},
	easeOutQuad : function(j, i, b, c, d) {
		return -c * (i /= d) * (i - 2) + b
	},
	easeInOutQuad : function(j, i, b, c, d) {
		if ((i /= d / 2) < 1) {
			return c / 2 * i * i + b
		}
		return -c / 2 * ((--i) * (i - 2) - 1) + b
	},
	easeInCubic : function(j, i, b, c, d) {
		return c * (i /= d) * i * i + b
	},
	easeOutCubic : function(j, i, b, c, d) {
		return c * ((i = i / d - 1) * i * i + 1) + b
	},
	easeInOutCubic : function(j, i, b, c, d) {
		if ((i /= d / 2) < 1) {
			return c / 2 * i * i * i + b
		}
		return c / 2 * ((i -= 2) * i * i + 2) + b
	},
	easeInQuart : function(j, i, b, c, d) {
		return c * (i /= d) * i * i * i + b
	},
	easeOutQuart : function(j, i, b, c, d) {
		return -c * ((i = i / d - 1) * i * i * i - 1) + b
	},
	easeInOutQuart : function(j, i, b, c, d) {
		if ((i /= d / 2) < 1) {
			return c / 2 * i * i * i * i + b
		}
		return -c / 2 * ((i -= 2) * i * i * i - 2) + b
	},
	easeInQuint : function(j, i, b, c, d) {
		return c * (i /= d) * i * i * i * i + b
	},
	easeOutQuint : function(j, i, b, c, d) {
		return c * ((i = i / d - 1) * i * i * i * i + 1) + b
	},
	easeInOutQuint : function(j, i, b, c, d) {
		if ((i /= d / 2) < 1) {
			return c / 2 * i * i * i * i * i + b
		}
		return c / 2 * ((i -= 2) * i * i * i * i + 2) + b
	},
	easeInSine : function(j, i, b, c, d) {
		return -c * Math.cos(i / d * (Math.PI / 2)) + c + b
	},
	easeOutSine : function(j, i, b, c, d) {
		return c * Math.sin(i / d * (Math.PI / 2)) + b
	},
	easeInOutSine : function(j, i, b, c, d) {
		return -c / 2 * (Math.cos(Math.PI * i / d) - 1) + b
	},
	easeInExpo : function(j, i, b, c, d) {
		return (i == 0) ? b : c * Math.pow(2, 10 * (i / d - 1)) + b
	},
	easeOutExpo : function(j, i, b, c, d) {
		return (i == d) ? b + c : c * (-Math.pow(2, -10 * i / d) + 1) + b
	},
	easeInOutExpo : function(j, i, b, c, d) {
		if (i == 0) {
			return b
		}
		if (i == d) {
			return b + c
		}
		if ((i /= d / 2) < 1) {
			return c / 2 * Math.pow(2, 10 * (i - 1)) + b
		}
		return c / 2 * (-Math.pow(2, -10 * --i) + 2) + b
	},
	easeInCirc : function(j, i, b, c, d) {
		return -c * (Math.sqrt(1 - (i /= d) * i) - 1) + b
	},
	easeOutCirc : function(j, i, b, c, d) {
		return c * Math.sqrt(1 - (i = i / d - 1) * i) + b
	},
	easeInOutCirc : function(j, i, b, c, d) {
		if ((i /= d / 2) < 1) {
			return -c / 2 * (Math.sqrt(1 - i * i) - 1) + b
		}
		return c / 2 * (Math.sqrt(1 - (i -= 2) * i) + 1) + b
	},
	easeInElastic : function(o, m, p, a, b) {
		var d = 1.70158;
		var c = 0;
		var n = a;
		if (m == 0) {
			return p
		}
		if ((m /= b) == 1) {
			return p + a
		}
		if (!c) {
			c = b * 0.3
		}
		if (n < Math.abs(a)) {
			n = a;
			var d = c / 4
		} else {
			var d = c / (2 * Math.PI) * Math.asin(a / n)
		}
		return -(n * Math.pow(2, 10 * (m -= 1)) * Math.sin((m * b - d)
				* (2 * Math.PI) / c))
				+ p
	},
	easeOutElastic : function(o, m, p, a, b) {
		var d = 1.70158;
		var c = 0;
		var n = a;
		if (m == 0) {
			return p
		}
		if ((m /= b) == 1) {
			return p + a
		}
		if (!c) {
			c = b * 0.3
		}
		if (n < Math.abs(a)) {
			n = a;
			var d = c / 4
		} else {
			var d = c / (2 * Math.PI) * Math.asin(a / n)
		}
		return n * Math.pow(2, -10 * m)
				* Math.sin((m * b - d) * (2 * Math.PI) / c) + a + p
	},
	easeInOutElastic : function(o, m, p, a, b) {
		var d = 1.70158;
		var c = 0;
		var n = a;
		if (m == 0) {
			return p
		}
		if ((m /= b / 2) == 2) {
			return p + a
		}
		if (!c) {
			c = b * (0.3 * 1.5)
		}
		if (n < Math.abs(a)) {
			n = a;
			var d = c / 4
		} else {
			var d = c / (2 * Math.PI) * Math.asin(a / n)
		}
		if (m < 1) {
			return -0.5
					* (n * Math.pow(2, 10 * (m -= 1)) * Math.sin((m * b - d)
							* (2 * Math.PI) / c)) + p
		}
		return n * Math.pow(2, -10 * (m -= 1))
				* Math.sin((m * b - d) * (2 * Math.PI) / c) * 0.5 + a + p
	},
	easeInBack : function(l, k, b, c, d, j) {
		if (j == undefined) {
			j = 1.70158
		}
		return c * (k /= d) * k * ((j + 1) * k - j) + b
	},
	easeOutBack : function(l, k, b, c, d, j) {
		if (j == undefined) {
			j = 1.70158
		}
		return c * ((k = k / d - 1) * k * ((j + 1) * k + j) + 1) + b
	},
	easeInOutBack : function(l, k, b, c, d, j) {
		if (j == undefined) {
			j = 1.70158
		}
		if ((k /= d / 2) < 1) {
			return c / 2 * (k * k * (((j *= (1.525)) + 1) * k - j)) + b
		}
		return c / 2 * ((k -= 2) * k * (((j *= (1.525)) + 1) * k + j) + 2) + b
	},
	easeInBounce : function(j, i, b, c, d) {
		return c - jQuery.easing.easeOutBounce(j, d - i, 0, c, d) + b
	},
	easeOutBounce : function(j, i, b, c, d) {
		if ((i /= d) < (1 / 2.75)) {
			return c * (7.5625 * i * i) + b
		} else {
			if (i < (2 / 2.75)) {
				return c * (7.5625 * (i -= (1.5 / 2.75)) * i + 0.75) + b
			} else {
				if (i < (2.5 / 2.75)) {
					return c * (7.5625 * (i -= (2.25 / 2.75)) * i + 0.9375) + b
				} else {
					return c * (7.5625 * (i -= (2.625 / 2.75)) * i + 0.984375) + b
				}
			}
		}
	},
	easeInOutBounce : function(j, i, b, c, d) {
		if (i < d / 2) {
			return jQuery.easing.easeInBounce(j, i * 2, 0, c, d) * 0.5 + b
		}
		return jQuery.easing.easeOutBounce(j, i * 2 - d, 0, c, d) * 0.5 + c
				* 0.5 + b
	}
});
;


$(function() {
	banner();
	gameChoose();
	content();
	$("#js-thelist").ppImageview({
		imageAClass : ".img_a",
		pp : false,
		resizable : true,
		wRate : 0.5,
		hRate : 0.8,
		minWid : 600,
		minHei : 400,
		thumb : false
	});
	vote();
	picErr()
});

//--------------------
// Hiệu ứng Tab ở Homepage
//--------------------
function gameChoose() {
	var c = $("div.home-title"), g = $("div.recommend"), a = $("div.reList"), d = $("div.softIntr"), b = $("div.gameRank");
	specialTopic = $("div.specialTopic");
	newsTab = $("div.newsTab");
	f(c, g, b, specialTopic, newsTab);
	e(a);
	b.children("ul").twoStateLi({
		state1 : ".detailTxt",
		state2 : ".nameDown",
		changeSpeed : 4000
	});
	function f(n, l, k, j, i) {
		var o = [ n.eq(0).find("ul.game_choose_p1 > li"),
				n.eq(1).find("ul.game_choose_p2 > li"),
				n.eq(2).find("ul.game_choose_p3 > li"),
				n.eq(3).find("ul.game_choose_p4 > li"),
				n.eq(4).find("ul.game_choose_p5 > li") ], h = [
				l.eq(0).children("div.gcp1"), l.eq(1).children("div.gcp2"),
				l.eq(2).children("div.gcp3"), l.eq(3).children("div.gcp4"),
				l.eq(4).children("div.gcp5") ], m = k.eq(0);
		obj3_ul = m.children("ul"), obj3_a = m.find("div.title > span"),
				obj4_ul = j.children("ul"), obj4_a = j.find("div.title > a"),
				obj5_ul = i.children("ul"),
				obj5_a = i.find("div.title > span"), aheight = $("dd.aheight");
		o[0].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[0].eq(p).show().siblings("div.gcp1").hide()
		});
		o[1].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[1].eq(p).show().siblings("div.gcp2").hide()
		});
		o[1].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[1].eq(p).show().siblings("div.gcp2").hide()
		});
		o[2].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[2].eq(p).show().siblings("div.gcp3").hide()
		});
		o[3].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[3].eq(p).show().siblings("div.gcp4").hide()
		});
		o[4].mouseover(function() {
			var p = $(this).index();
			$(this).addClass("on").siblings("li").removeClass("on");
			h[4].eq(p).show().siblings("div.gcp5").hide()
		});
		m.tab({
			tabLink : obj3_a,
			tabContent : obj3_ul
		});
		j.tab({
			tabLink : obj4_a,
			tabContent : obj4_ul
		});
		i.tab({
			tabLink : obj5_a,
			tabContent : obj5_ul
		});
		aheight.children("a.more").one("click", function() {
			var p = $("#menu"), q = p.height();
			aheight.animate({
				height : "36px"
			}, "normal", "easeOutExpo");
			p.animate({
				height : q + 18 + "px"
			}, "normal", "easeOutExpo")
		})
	}
	function e(l) {
		var h, k = l.find("dl"), j = l.find("dt > a");
		j.mouseover(function() {
			h = j.index(this);
			for ( var m = 0, i = d.length; m < i; m++) {
				if (m != h) {
					d.eq(m).fadeOut("fast");
					k.eq(m).removeClass("zIndex")
				} else {
					if (d.eq(m).css("display") == "none") {
						d.eq(m).fadeIn("fast");
						k.eq(m).addClass("zIndex")
					}
				}
			}
		});
		d.mouseleave(function() {
			d.eq(h).fadeOut("fast");
			k.eq(h).removeClass("zIndex")
		});
		k.mouseleave(function() {
			d.eq(h).fadeOut("fast");
			k.eq(h).removeClass("zIndex")
		})
	}
}

//--------------------
// Hiệu ứng chạy Banner
//--------------------
function banner() {
	var i = 1, d = 1, k = -194, g = 4000, h, j, e = $("#banner > ul").html();
	$("#banner > ul").html(e + e);
	f();
	m();
	$("#banner > ul").css({
		width : h + "px"
	});
	c();
	$("#banner > ul > li").hover(function() {
		clearInterval(j);
		c_index = $(this).index();
		a($("div.bannerDetail"), c_index)
	}, function() {
		l($("div.bannerDetail"), c_index);
		c()
	});
	function a(p, n) {
		p.eq(n).stop().animate({
			top : "0px"
		}, "fast", "easeOutExpo")
	}
	function l(p, n) {
		p.eq(n).stop().animate({
			top : "320px"
		}, "fast", "easeOutExpo")
	}
	function c() {
		var n = $("#banner"), q = n.children("ul"), p = q.children("li"), o = p
				.find("img");
		j = setInterval(function() {
			b(p);
			q.animate({
				left : k * d + "px"
			}, 1000, "easeInOutExpo")
		}, g)
	}
	function b(q) {
		for ( var p = 0, n = q.length; p < n; p++) {
			if (q.eq(p).attr("class") == "first") {
				d += parseInt(q.eq(p).find("img").attr("amount"));
				i = p + 1;
				if (i > q.length / 2) {
					i = 1;
					d = 1;
					q.parent().css({
						left : 0 + "px"
					});
					q.eq(0).addClass("first").siblings("li").removeClass(
							"first")
				}
			}
		}
		q.eq(i).addClass("first").siblings("li").removeClass("first")
	}
	function f() {
		var q = 0, o = $("#banner img");
		for ( var p = 0, n = o.length; p < n; p++) {
			q += parseInt(o.eq(p).attr("amount"))
		}
		h = q * 194
	}
	function m() {
		var q, s, r = $("#banner > ul > li"), o = r.find("img");
		for ( var p = 0, n = o.length; p < n; p++) {
			q = parseInt(o.eq(p).attr("amount"));
			s = q * 184 + (q - 1) * 10;
			r.eq(p).css({
				width : s + "px"
			})
		}
	}
}


function content() {
	var a = $("a.changeList"), b;
	a.click(function() {
		var d = a.index(this), c = $(this).attr("href");
		b = $(this).find("span");
		b[0].className = "load";
		$.ajax({
			dataType : "json",
			type : "GET",
			url : c,
			cache : false,
			success : function(e) {
				if (e.status == 200) {
					var f = a.eq(d).parent().parent();
					f.children("dd[class!=cBorderB]").remove();
					f.children("dt").after(e.data)
				}
				setTimeout(function() {
					b[0].className = "witeIco"
				}, 300)
			}
		});
		return false
	});
	a.hover(function() {
		$(this).removeClass("gray").children("span").attr("class", "greenIco")
	}, function() {
		if ($(this).addClass("gray").children("span")[0].className != "load") {
			$(this).addClass("gray").children("span").attr("class", "witeIco")
		}
	})
}


function vote() {
	var a = $("span.voteTarget");
	a.live("click", function() {
		var d = $(this).attr("href");
		b($(this), d);
		return false
	});
	function b(e, d) {
		$
				.ajax({
					dataType : "json",
					type : "GET",
					url : d,
					cache : false,
					success : function(f) {
						var l = e.attr("voteStyle"), i, j;
						switch (l) {
						case "mode_three":
							if (f.status == 200) {
								var i = e.children("i"), j = e.parent()
										.children("span.addAnimate");
								$.isNumeric(i.text()) ? i.text(parseInt(i
										.text()) + 1) : "";
								c(j, "-15px")
							} else {
								var h = e[0].innerHTML;
								if (h.indexOf("Đã thích") < 0) {
									e[0].innerHTML = "Đã thích";
									setTimeout(function() {
										e[0].innerHTML = h
									}, 5000)
								}
							}
							break;
						case "mode_four":
							if (f.status == 200) {
								var i = e, j = e.parent().children(
										"span.addAnimate"), g = e.attr("class");
								$.isNumeric(i.text()) ? i.text(parseInt(i
										.text()) + 1) : "";
								g.indexOf("good") > -1 ? c(j, "-15px", "40%")
										: c(j, "-15px", "70%");
								c(j, "-15px")
							} else {
								var k = e.text(), g = e.attr("class");
								k.indexOf("Đã đánh giá") < 0 ? e.text("Đã đánh giá") : "";
								setTimeout(function() {
									e.text(k)
								}, 5000)
							}
							break
						}
					}
				})
	}
	function c(f, d, e) {
		e != "" ? f[0].style.left = e : "";
		f[0].style.display = "block";
		f.animate({
			top : d
		}, function() {
			this.style.cssText = "display:none; top:-5px;"
		})
	}
}

function picErr() {
	var g = $(".recommend"), b = g.eq(0).find("img"), c = g.eq(1).find("img"), a = $("div.picDown img"), e = "/static/images/game70X70.gif", d = "/static/images/soft70X70.gif", f = "/static/images/paperIndex226X127.gif";
	b.error(function() {
		this.src = e
	});
	c.error(function() {
		this.src = d
	});
	a.error(function() {
		this.src = f
	})
};
;
/*
 * ! Item: tr.jqplugin.floatObj
 */
(function(a) {
	a.fn.floatWeixin = function(b) {
		var e = {
			id : "",
			alignLeft : false,
			alignRight : false,
			alignTop : false,
			alignBottom : false,
			alignCenter : false,
			offsetX : 0,
			offsetY : 0,
			zIndex : -1,
			speed : 0,
			followScrollY : true,
			bgMask : "",
			closeBtn : ".close",
			initShow : false
		};
		var c = a.extend(e, b);
		var d = tr.base;
		this.each(function() {
			var p = a(this), o = this, r, m, q, s, g, f, n, h, l;
			o.style.position = "absolute";
			o.style.overflow = "hidden";
			r = p.outerWidth(true);
			m = p.outerHeight(true);
			n = d.getWindowSize();
			o.style.display = "none";
			s = document.body ? document.body.offsetHeight
					: document.documentElement.offsetHeight;
			if (!c.alignLeft && !c.alignRight && !c.alignTop && !c.alignBottom
					&& !c.alignCenter) {
				c.alignLeft = true
			}
			if (c.alignLeft && c.alignRight) {
				c.alignRight = false
			}
			if (c.alignTop && c.alignBottom) {
				c.alignBottom = false
			}
			if (c.alignLeft && c.alignTop || c.alignTop && c.alignRight
					|| c.alignLeft && c.alignBottom || c.alignBottom
					&& c.alignRight) {
				c.alignCenter = false
			}
			function k() {
				if (o.style.display == "none") {
					return
				}
				h = document.documentElement.scrollTop || window.pageYOffset
						|| document.body.scrollTop;
				if (c.alignCenter) {
					g = (n.width - r) / 2;
					f = (n.height - m) / 2 + h
				}
				if (c.alignLeft) {
					g = 0
				}
				if (c.alignRight) {
					g = n.width - r
				}
				if (c.alignTop) {
					f = 0 + h
				}
				if (c.alignBottom) {
					f = n.height - m + h
				}
				if (d.isInt(c.offsetX)) {
					g += c.offsetX
				}
				if (d.isInt(c.offsetY)) {
					f += c.offsetY
				}
				if (m > n.height) {
					f = h
				}
				if (m + h > s) {
					f = s - m
				}
				o.style.left = g + "px";
				o.style.top = f + "px"
			}
			if (c.followScrollY) {
				a(window).bind("scroll.pop_" + c.id, k)
			}
			a(window).bind("resize.pop_" + c.id, function() {
				n = d.getWindowSize();
				k()
			});
			if (c.zIndex > -1 && d.isInt(c.zIndex)) {
				o.style.zIndex = c.zIndex + 10
			}
			function j(t) {
				if (c.speed == 0 || !d.isInt(c.speed)) {
					o.style.display = "none"
				} else {
					p.fadeOut(c.speed * 0.6)
				}
				if (c.bgMask != "") {
					l.style.display = "none"
				}
				if (t == "unload") {
					a(window).unbind("resize.pop_" + c.id).unbind(
							"scroll.pop_" + c.id)
				}
				return false
			}
			function i() {
				if (c.bgMask != "") {
					l = a(c.bgMask)[0];
					l.style.height = s + "px";
					l.style.display = "block"
				}
				if (c.speed == 0 || !d.isInt(c.speed)) {
					o.style.display = "block"
				} else {
					p.fadeIn(c.speed)
				}
				k()
			}
			i();
			o.close = function() {
				j("unload")
			};
			o.hide = function() {
				j("")
			};
			if (c.closeBtn != "") {
				p.find(c.closeBtn).click(function() {
					j("")
				})
			}
			if (c.initShow) {
				i()
			}
		})
	}
})(jQuery);
;
/*
 * ! Item: tr.jqplugin.floatObj
 */
(function(a) {
	a.fn.floatObj = function(b) {
		var e = {
			id : "",
			alignLeft : false,
			alignRight : false,
			alignTop : false,
			alignBottom : false,
			alignCenter : false,
			offsetX : 0,
			offsetY : 0,
			zIndex : -1,
			speed : 0,
			followScrollY : true,
			bgMask : "",
			closeBtn : ".close",
			initShow : false
		};
		var c = a.extend(e, b);
		var d = tr.base;
		this.each(function() {
			var p = a(this), o = this, r, m, q, s, g, f, n, h, l;
			o.style.position = "absolute";
			o.style.overflow = "hidden";
			r = p.outerWidth(true);
			m = p.outerHeight(true);
			n = d.getWindowSize();
			o.style.display = "none";
			s = document.body ? document.body.offsetHeight
					: document.documentElement.offsetHeight;
			if (!c.alignLeft && !c.alignRight && !c.alignTop && !c.alignBottom
					&& !c.alignCenter) {
				c.alignLeft = true
			}
			if (c.alignLeft && c.alignRight) {
				c.alignRight = false
			}
			if (c.alignTop && c.alignBottom) {
				c.alignBottom = false
			}
			if (c.alignLeft && c.alignTop || c.alignTop && c.alignRight
					|| c.alignLeft && c.alignBottom || c.alignBottom
					&& c.alignRight) {
				c.alignCenter = false
			}
			function k() {
				if (o.style.display == "none") {
					return
				}
				h = document.documentElement.scrollTop || window.pageYOffset
						|| document.body.scrollTop;
				if (c.alignCenter) {
					g = (n.width - r) / 2;
					f = (n.height - m) / 2 + h
				}
				if (c.alignLeft) {
					g = 0
				}
				if (c.alignRight) {
					g = n.width - r
				}
				if (c.alignTop) {
					f = 0 + h
				}
				if (c.alignBottom) {
					f = n.height - m + h
				}
				if (d.isInt(c.offsetX)) {
					g += c.offsetX
				}
				if (d.isInt(c.offsetY)) {
					f += c.offsetY
				}
				if (m > n.height) {
					f = h
				}
				if (m + h > s) {
					f = s - m
				}
				o.style.left = g + "px";
				o.style.top = f + "px"
			}
			if (c.followScrollY) {
				a(window).bind("scroll.pop_" + c.id, k)
			}
			a(window).bind("resize.pop_" + c.id, function() {
				n = d.getWindowSize();
				k()
			});
			if (c.zIndex > -1 && d.isInt(c.zIndex)) {
				o.style.zIndex = c.zIndex + 10
			}
			function j(t) {
				if (c.speed == 0 || !d.isInt(c.speed)) {
					o.style.display = "none"
				} else {
					p.fadeOut(c.speed * 0.6)
				}
				if (c.bgMask != "") {
					l.style.display = "none"
				}
				if (t == "unload") {
					a(window).unbind("resize.pop_" + c.id).unbind(
							"scroll.pop_" + c.id)
				}
				return false
			}
			function i() {
				if (c.bgMask != "") {
					l = a(c.bgMask)[0];
					l.style.height = s + "px";
					l.style.display = "block"
				}
				if (c.speed == 0 || !d.isInt(c.speed)) {
					o.style.display = "block"
				} else {
					p.fadeIn(c.speed)
				}
				k()
			}
			o.show = i;
			o.close = function() {
				j("unload")
			};
			o.hide = function() {
				j("")
			};
			if (c.closeBtn != "") {
				p.find(c.closeBtn).click(function() {
					j("")
				})
			}
			if (c.initShow) {
				i()
			}
		})
	}
})(jQuery);
;
(function(a) {
	a.fn.resImgAutoPlug = function(d) {
		var i = {
			previous : ".pre",
			next : ".next",
			silde : ".silde",
			lastImgSrc : "",
			firstBtn : ".firstBtn",
			lastBtn : ".lastBtn",
			autoBtn : false,
			endBtn : false
		};
		var g = a.extend(i, d);
		this.each(function() {
			var p = a(this), m, l, o, k, j, q, n = [];
			m = p.find(g.previous);
			l = p.find(g.next);
			o = p.find(g.silde);
			k = p.find(g.firstBtn);
			j = p.find(g.lastBtn);
			h(o, g.lastImgSrc, n);
			e(p, g.autoBtn, false, true);
			f(p, g.endBtn, n);
			l.bind("click", function() {
				var s, t = [], r;
				s = o.find("img");
				r = s.length;
				q = parseInt(o.css("left"));
				t = c(s);
				q -= n[t[1]];
				if (p.width() - o.width() < q) {
					m.show();
					e(p, g.autoBtn, true, true);
					n[r] = parseInt(o.css("left")) - n[t[1]];
					o.stop(true, true).animate({
						left : n[r] + "px"
					}, "fast");
					s.eq(t[0] + 1).addClass("first").siblings("img")
							.removeClass("first")
				} else {
					m.show();
					l.hide();
					e(p, g.autoBtn, true, false);
					n[r] = parseInt(o.css("left")) - n[r - 1];
					o.stop(true, true).animate({
						left : p.width() - o.width() + "px"
					}, "fast");
					s.eq(r - 1).addClass("first").siblings("img").removeClass(
							"first")
				}
			});
			m.bind("click", function() {
				var s, t = [], r;
				s = o.find("img");
				r = s.length;
				q = parseInt(o.css("left"));
				t = c(s);
				if (q <= p.width() - o.width()) {
					q += n[r - 1]
				} else {
					q += n[t[1]]
				}
				if (q < 0) {
					l.show();
					e(p, g.autoBtn, true, true);
					n[r + 1] = parseInt(o.css("left")) + n[t[1]];
					o.stop(true, true).animate({
						left : n[r + 1] + "px"
					}, "fast");
					s.eq(t[0] - 1).addClass("first").siblings("img")
							.removeClass("first")
				} else {
					m.hide();
					l.show();
					e(p, g.autoBtn, false, true);
					o.stop(true, true).animate({
						left : "0px"
					}, "fast");
					s.eq(0).addClass("first").siblings("img").removeClass(
							"first")
				}
			})
		});
		function f(j, s, q) {
			var n = j.find(g.previous), m = j.find(g.next), p = j
					.find(g.firstBtn), k = j.find(g.lastBtn), r = j
					.find(g.silde), l = r.find("img");
			if (s) {
				p.bind("click", function() {
					n.hide();
					m.show();
					e(j, g.autoBtn, false, true);
					r.stop(true, true).animate({
						left : "0px"
					}, "slow");
					l.eq(0).addClass("first").siblings("img").removeClass(
							"first")
				});
				k.bind("click", function() {
					var t = 0, o = [];
					n.show();
					m.hide();
					e(j, g.autoBtn, true, false);
					r.stop(true, true).animate({
						left : j.width() - r.width() + "px"
					}, "slow");
					l.eq(l.length - 1).addClass("first").siblings("img")
							.removeClass("first")
				})
			}
		}
		function e(q, j, m, r) {
			var l = q.find(g.previous), k = q.find(g.next);
			if (j) {
				q.hover(function() {
					if (m) {
						l.show()
					} else {
						if (!m) {
							l.hide()
						}
					}
					if (r) {
						k.show()
					} else {
						if (!r) {
							k.hide()
						}
					}
				}, function() {
					l.hide();
					k.hide()
				})
			} else {
				l.show();
				k.show()
			}
		}
		function c(p) {
			var n = [];
			for ( var m = 0, k = p.length; m < k; m++) {
				if (p.eq(m).attr("class") == "first") {
					n[0] = m;
					n[1] = parseInt(p.eq(m).attr("tabIndex"))
				}
			}
			return n
		}
		function h(m, l, n) {
			var j = m.find("img"), k = new Image();
			k.src = l;
			j.eq(j.length - 1).after(k);
			k.onload = function() {
				b(m, n)
			}
		}
		function b(s, n) {
			var r = 0, l = 0, k, p;
			p = s.find("img");
			p.eq(0).addClass("first");
			n[p.length] = 0;
			n[p.length + 1] = 0;
			for ( var q = 0, j = p.length; q < j; q++) {
				p.eq(q).attr("tabIndex", q);
				l = p.eq(q)[0].offsetWidth;
				k = [ parseInt(p.eq(q).css("margin-left")),
						parseInt(p.eq(q).css("margin-right")) ];
				r += l + k[0] + k[1];
				n[q] = l + k[0] + k[1]
			}
			s[0].style.width = r + "px";
			return n
		}
	}
})(jQuery);
;
(function() {
	$(function() {
		a();
		try {
			c()
		} catch (d) {
		}
	});
	window.onload = function() {
		b()
	};
	function c() {
		var f = $("#versionList"), h = f.find("ul li"), e = $("#versionCode"), d = e
				.find(".appcode")[0], g = e.find("p")[0];
		f.floatObj({
			id : "versionList",
			alignCenter : true,
			speed : 300,
			bgMask : "#bg_mask"
		});
		e.floatObj({
			id : "versionCode",
			alignCenter : true,
			speed : 300,
			bgMask : "#bg_mask",
			closeBtn : ""
		});
		$id("showMoreVer").onclick = function() {
			f[0].show()
		};
		h.find(".darkGray").click(
				function() {
					g.innerHTML = this.parentNode.innerHTML.replace(
							/\<a[\S\s]+\<\/span\>/i, "");
					d.src = this.parentNode.getAttribute("imgsrc");
					e[0].show();
					f[0].style.display = "none";
					e[0].style.display = "block"
				});
		e.find(".close")[0].onclick = function() {
			f[0].hide();
			e[0].hide()
		};
		e.find(".returnList")[0].onclick = function() {
			f[0].style.display = "block";
			e[0].style.display = "none"
		}
	}
	function b() {
		var d = $("div.gamePic");
		if (d.length > 0) {
			d.resImgAutoPlug({
				previous : d.find("a.previous"),
				next : d.find("a.next"),
				silde : d.find("div.pic"),
				firstBtn : d.find("span.firstBtn"),
				lastBtn : d.find("span.lastBtn"),
				lastImgSrc : "/static/images/lastGame.jpg",
				autoBtn : true,
				endBtn : true
			})
		}
	}
	function a() {
		var f = $("div.gameRank");
		f.tab({
			tabLink : f.find("div.rankTitle span"),
			tabContent : f.children("ul")
		});
		f.children("ul").twoStateLi({
			state1 : ".detailTxt",
			state2 : ".nameDown",
			changeSpeed : 4000
		});
		d();
		e();
		function d() {
			var i = $("div.conTxt"), h = $("div.aboutIntr a.more");
			lineHeight = parseInt(i.eq(0).css("line-height")),
					txtOffsetHeight = [], txtMinHeight = [];
			txtOffsetHeight = [
					i.eq(0).length > 0 ? i.eq(0)[0].offsetHeight : "",
					i.eq(1).length > 0 ? i.eq(1)[0].offsetHeight : "" ];
			txtMinHeight = [ lineHeight * 4, lineHeight * 2 ];
			if (i.eq(0).length > 0) {
				i.eq(0).css({
					height : txtMinHeight[0]
				})
			}
			if (i.eq(1).length > 0) {
				i.eq(1).css({
					height : txtMinHeight[1]
				})
			}
			var g = i.find("span"), j = parseInt(i.eq(0).css("fontSize"));
			if (g.length > 0) {
				g.css({
					lineHeight : lineHeight + "px",
					fontSize : j
				})
			}
			if ((txtOffsetHeight[0] <= txtMinHeight[0])
					&& (txtOffsetHeight[1] <= txtMinHeight[1])) {
				h.hide()
			}
			h.toggle(function() {
				txtOffsetHeight[0] > txtMinHeight[0]
						&& txtOffsetHeight[0] != "" ? i.eq(0).stop().animate({
					height : txtOffsetHeight[0]
				}) : "";
				txtOffsetHeight[1] > txtMinHeight[1]
						&& txtOffsetHeight[1] != "" ? i.eq(1).stop().animate({
					height : txtOffsetHeight[1]
				}) : "";
				h.addClass("off")
			}, function() {
				i.eq(0).length > 0 ? i.eq(0).stop().animate({
					height : txtMinHeight[0]
				}) : "";
				i.eq(1).length > 0 ? i.eq(1).stop().animate({
					height : txtMinHeight[1]
				}) : "";
				h.attr("class", "more")
			})
		}
		function e() {
			var g = $("span.voteTarget");
			g.live("click", function() {
				var j = $(this).attr("href");
				h($(this), j);
				return false
			});
			function h(k, j) {
				$.ajax({
					dataType : "json",
					type : "GET",
					url : j,
					cache : false,
					success : function(l) {
						var r = k.attr("voteStyle"), n, p;
						switch (r) {
						case "mode_one":
							if (l.status == 200) {
								var n = k.children("p"), p = k
										.children("span.addAnimate");
								$.isNumeric(n.text()) ? n.text(parseInt(n
										.text()) + 1) : "";
								i(p, "-30px")
							} else {
								var o = k.parent().parent().children(
										"span.errMsg");
								o.css("display") == "none" ? o.fadeIn("fast")
										.delay(5000).fadeOut("fast") : ""
							}
							break;
						case "mode_two":
							if (l.status == 200) {
								var n = k, p = k.parent().children(
										"span.addAnimate");
								$.isNumeric(n.text()) ? n.text(parseInt(n
										.text()) + 1) : "";
								i(p, "-15px")
							} else {
								var q = k.text();
								if (q.indexOf("Đã đánh giá") < 0) {
									k.text("Đã đánh giá");
									setTimeout(function() {
										k.text(q)
									}, 5000)
								}
							}
							break;
						case "mode_three":
							if (l.status == 200) {
								var n = k.children("i"), p = k.parent()
										.children("span.addAnimate");
								$.isNumeric(n.text()) ? n.text(parseInt(n
										.text()) + 1) : "";
								i(p, "-15px")
							} else {
								var m = k[0].innerHTML;
								if (m.indexOf("Đã đánh giá") < 0) {
									k[0].innerHTML = "Đã đánh giá";
									setTimeout(function() {
										k[0].innerHTML = m
									}, 5000)
								}
							}
							break
						}
					}
				})
			}
			function i(k, j) {
				k[0].style.display = "block";
				k.animate({
					top : j
				}, function() {
					this.style.cssText = "display:none; top:-5px;"
				})
			}
		}
	}
})();
;
var searchbox = (function($, window, document, undefined) {
	var currentType = '', isShowOptions = false, hotkeys = [], hasLoadHotKey = false, eleID;
	var mapping = {
		"ios" : {
			"soft" : "1",
			"bell" : "2",
			"wallpaper" : "3",
			"news" : "4"
		},
		"android" : {
			"soft" : "5",
			"bell" : "6",
			"wallpaper" : "7",
			"news" : "8"
		},
		"news" : {
			"news" : "9",
			"options" : [ {
				"news" : "4"
			} ]
		},
		"options" : [ {
			"news" : "4"
		}, {
			"soft" : "1"
		}, {
			"bell" : "2"
		} ]
	};
	var buildsearchBox = function(obj, options) {
		eleID = $(obj).attr('id');
		if (!eleID) {
			eleID = "searchbox_"
					+ Math.floor(Math.random() * (new Date()).getTime());
			$(obj).attr('id', eleID);
		}
		var settings = {
			defaultType : "news",
			onSearch : function() {
				var searchObj = $("#" + eleID), searchTxt = searchObj.val();
				if (searchTxt === '' || searchTxt === 'Tìm kiếm') {
					alert('Không thể bỏ trống');
					searchObj.focus();
					return false;
				}
				var href = '', txt = encodeURIComponent(searchTxt);
				if (currentType === 'news') {
					href = 'http://game-pt.com/search/' + txt;
				} else if (currentType === 'bell') {
					href = '/lingsheng/search/' + txt;
				} else {
					href = '/search/' + txt;
				}
				if (href !== '') {
					window.location.href = href;
				}
			}
		}, preHtml, suffHtml, current = $("#" + eleID);
		if (options) {
			$.extend(settings, options);
		}
		;
		if (mapping[settings.site].options) {
			settings.type = mapping[settings.site].options;
		} else {
			settings.type = mapping.options;
		}
		currentType = settings.defaultType;
		preHtml = buildKeyBoxHtml(settings);
		suffHtml = buildSearchBtn();
		var html = preHtml + $('<div>').append(current.clone()).html()
				+ suffHtml;
		current.replaceWith(html);
		bindEvents(eleID, settings);
		if ($("#" + eleID).val() === '' || $("#" + eleID).val() === 'Tìm kiếm') {
			setHotKey(settings.site, settings.defaultType);
		}
	}
	var buildKeyBoxHtml = function(settings) {
		var strHtml = '<div class="searchInputBox">';
		strHtml += '<div class="keyBox" id="keyBox">';
		var defaultOpt = $.grep(settings.type, function(item) {
			return item.hasOwnProperty(settings.defaultType);
		})[0];
		strHtml += '<span class="keyTxt" id="keyTxt" style="{{padding}}" searchType="'
				+ settings.defaultType
				+ '">'
				+ defaultOpt[settings.defaultType] + '</span>';
		if (settings.type.length > 1) {
			strHtml += '<span class="ico-key ico-keyBottom"></span>';
			strHtml = strHtml.replace("{{padding}}", "");
		} else {
			strHtml = strHtml.replace("{{padding}}", "padding-left:30px");
		}
		strHtml += '<ul class="typebox" id="typebox">';
		if (!(settings.type.length === 1 && settings.type[0][settings.defaultType])) {
			for ( var i = 0, len = settings.type.length; i < len; i++) {
				for ( var item in settings.type[i]) {
					if (settings.type[i].hasOwnProperty(item)) {
						strHtml += '<li option-type="' + item + '">'
								+ settings.type[i][item] + '</li>';
					}
				}
			}
			;
		}
		strHtml += '</ul></div>';
		return strHtml;
	};
	var buildSearchBtn = function() {
		return '<span class="btn-seach" alt="Tìm kiếm" title="Tìm kiếm"></span></div>';
	};
	var bindEvents = function(eleID, settings) {
		var typebox = $("#typebox"), keyTxt = $('#keyTxt');
		$("#keyBox").hover(function() {
			showList(true);
		}, function() {
			setTimeout(function() {
				if (!$('#keyBox').is(":hover")) {
					showList(false);
				}
			}, 200);
		});
		$("#keyBox").click(function() {
			showList(!isShowOptions);
		});
		$("#" + eleID).keypress(function(e) {
			if (e.which == 13 && settings && settings.onSearch) {
				settings.onSearch();
			}
		});
		$("#" + eleID).click(
				function() {
					var that = $(this);
					if (that.val() === 'Tìm kiếm') {
						that.val('');
					} else if (isHotKey(settings.site, currentType
							|| settings.defaultType, that.val())) {
						that.val('');
					}
				});
		$("#" + eleID).blur(function() {
			var that = $(this);
			if (that.val() === '' || that.val() === 'Tìm kiếm') {
				setHotKey(settings.site, currentType || settings.defaultType);
			}
		});
		typebox.find("li").click(function(e) {
			keyTxt.html($(this).html());
			currentType = $(this).attr('option-type');
			keyTxt.attr('searchType', currentType);
			showList(false);
			setHotKey(settings.site, currentType);
			e.stopPropagation();
		});
		$("div[class='searchInputBox'] .btn-seach").click(function() {
			if (settings && settings.onSearch) {
				settings.onSearch();
			} else {
				return false;
			}
		});
	};
	var showList = function(isShow) {
		var typebox = $("#typebox");
		isShowOptions = isShow;
		if (isShow) {
			typebox.show();
			typebox.prev().removeClass('ico-keyBottom').addClass('ico-keyTop');
		} else {
			typebox.hide();
			typebox.prev().removeClass('ico-keyTop').addClass('ico-keyBottom');
		}
	};
	var loadKeywords = function(callBack) {
		if (hotkeys.length > 0 && !hasLoadHotKey) {
			return;
		}
		var url = "/keywords/getOnePerType";
		$.getJSON(url, function(result) {
			hasLoadHotKey = true;
			hotkeys = result.data.data;
			callBack();
		});
	};
	var setHotKey = function(site, type) {
		if (hotkeys.length <= 0 && !hasLoadHotKey) {
			loadKeywords(function() {
				setHotKey(site, type);
			});
			return;
		}
		var map = mapping[site];
		if (map && map[type]) {
			var hotkey = $.grep(hotkeys, function(item) {
				return item.type === map[type];
			});
			if (hotkey && hotkey.length > 0) {
				$("#" + eleID).val(decodeURIComponent(hotkey[0].name));
			}
		}
	};
	var isHotKey = function(site, type, val) {
		var map = mapping[site];
		if (map && map[type]) {
			var hotkey = $.grep(hotkeys, function(item) {
				return item.type === map[type];
			});
			if (hotkey && hotkey.length > 0 && hotkey[0].name === val) {
				return true;
			}
		}
		return false;
	}
	return buildsearchBox;
})(jQuery, window, document);
$(document)
		.ready(
				function() {
					$("input[type='text'][searchbox]")
							.each(
									function(key, val) {
										var curObj = $(val), site = curObj
												.attr('searchbox'), defaultType = curObj
												.attr('defaulttype'), options = [];
										if (curObj.attr('options')) {
											options = $.parseJSON(curObj
													.attr('options'));
										}
										var opt = {
											"site" : site,
											"defaultType" : defaultType
										};
										if (options.length > 0)
											opt.type = options;
										searchbox(curObj, opt);
									})
				});
