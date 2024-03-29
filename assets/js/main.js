jQuery(function ($) {

    $('input[placeholder], textarea[placeholder]').placeholder();
    $(".mask-phone").mask("+7 (999) 999-99-99");

    $('.owl-carousel_five-col').owlCarousel({
        loop: true,
        nav: true,
        navText: false,
        dots: false,
        items: 1,
        autoWidth: true,
        margin: 30,
        center: true,
        autoplay: false,
        smartSpeed: 400,
        autoplayTimeout: 5000,
        mouseDrag: false
    });

    $('.owl-carousel_center').owlCarousel({
        loop: true,
        nav: true,
        navText: false,
        dots: false,
        items: 1,
        autoWidth: true,
        margin: 40,
        center: true,
        autoplay: false,
        smartSpeed: 400,
        autoplayTimeout: 5000,
        mouseDrag: false,
        responsive: {
            0: {
                margin: 40
            },
            1200: {
                margin: 50
            }
        }
    });

    $('.owl-carousel_banner').owlCarousel({
        loop: true,
        nav: true,
        navText: false,
        dots: true,
        items: 1,
        autoplay: false,
        smartSpeed: 400,
        autoplayTimeout: 5000,
        mouseDrag: false
    });

    $(".open-fancy").fancybox({
        fitToView: false,
        autoSize: false,
        closeClick: false
    });

    // tabs
    $('ul.tabs').on('click', 'li:not(.current)', function () {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('div.section-tabs').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
    });

    // add-open-class
    $('.burger-menu').click(function () {
        if ($(this).parent().is('.menu-burger--opened')) {
            $(this).parent().removeClass('menu-burger--opened');
            $('body').removeClass('menu-open-wrapper-page');
        } else {
            $(this).parent().addClass('menu-burger--opened');
            $('body').addClass('menu-open-wrapper-page');
        }
    });

    // // add-open-class
    // $('.accordion-item__cap').click(function(){
    //  if($(this).parent().is('.accordion-item_opened')){
    //    $(this).parent().removeClass('accordion-item_opened');
    //    $('.accordion-item__dd').show('300');
    //  }else{
    //    $(this).parent().addClass('accordion-item_opened');
    //    $('.accordion-item__dd').show('300');
    //  }
    // });

    // add-open-class
    $('.accordion-item__cap').click(function () {
        if ($(this).parent().is('.accordion-item_opened')) {
            $(this).parent().removeClass('accordion-item_opened');
        } else {
            $(".accordion-item").removeClass('accordion-item_opened');
            $(this).parent().addClass('accordion-item_opened');
        }
    });

    //form elements
    jcf.setOptions('File', {
        buttonText: 'Выберите файл',
        placeholderText: 'Файл не выбран'
    });

    jcf.setOptions('Select', {
        wrapNative: false,
        multipleCompactStyle: true,
        fakeDropInBody: false,
        useCustomScroll: false
    });

    jcf.replaceAll();

    // plus/minus value
    $('.minus-input').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });

    $('.plus-input').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });

    // animaton scroll effects
    $('.show-animation').addClass("anim-hidden").viewportChecker({
        classToAdd: 'anim-visible animated',
        offset: 100
    });


});


//Google maps
function initMap() {
    var element = document.getElementById('mainMap');
    var options = {
        zoom: 17,
        center: {lat: 52.03530600000001, lng: 113.49267450000002},
        disableDefaultUI: true
    };

    var myMap = new google.maps.Map(element, options);

    addMarker({lat: 52.03530600000001, lng: 113.49267450000002});

    function addMarker(coordinates) {
        var marker = new google.maps.Marker({
            position: coordinates,
            //  icon: 'img/icons/marker.png',
            map: myMap
        });
    }
};

//Plugin placeholder
(function (b, f, i) {
    function l() {
        b(this).find(c).each(j)
    }

    function m(a) {
        for (var a = a.attributes, b = {}, c = /^jQuery\d+/, e = 0; e < a.length; e++) if (a[e].specified && !c.test(a[e].name)) b[a[e].name] = a[e].value;
        return b
    }

    function j() {
        var a = b(this), d;
        a.is(":password") || (a.data("password") ? (d = a.next().show().focus(), b("label[for=" + a.attr("id") + "]").attr("for", d.attr("id")), a.remove()) : a.realVal() == a.attr("placeholder") && (a.val(""), a.removeClass("placeholder")))
    }

    function k() {
        var a = b(this), d, c;
        placeholder = a.attr("placeholder");
        b.trim(a.val()).length > 0 || (a.is(":password") ? (c = a.attr("id") + "-clone", d = b("<input/>").attr(b.extend(m(this), {
            type: "text",
            value: placeholder,
            "data-password": 1,
            id: c
        })).addClass("placeholder"), a.before(d).hide(), b("label[for=" + a.attr("id") + "]").attr("for", c)) : (a.val(placeholder), a.addClass("placeholder")))
    }

    var g = "placeholder" in f.createElement("input"), h = "placeholder" in f.createElement("textarea"),
        c = ":input[placeholder]";
    b.placeholder = {input: g, textarea: h};
    !i && g && h ? b.fn.placeholder = function () {
    } : (!i && g &&
    !h && (c = "textarea[placeholder]"), b.fn.realVal = b.fn.val, b.fn.val = function () {
        var a = b(this), d;
        if (arguments.length > 0) return a.realVal.apply(this, arguments);
        d = a.realVal();
        a = a.attr("placeholder");
        return d == a ? "" : d
    }, b.fn.placeholder = function () {
        this.filter(c).each(k);
        return this
    }, b(function (a) {
        var b = a(f);
        b.on("submit", "form", l);
        b.on("focus", c, j);
        b.on("blur", c, k);
        a(c).placeholder()
    }))
})(jQuery, document, window.debug);


/* mask input*/
(function (e) {
    function t() {
        var e = document.createElement("input"), t = "onpaste";
        return e.setAttribute(t, ""), "function" == typeof e[t] ? "paste" : "input"
    }

    var n, a = t() + ".mask", r = navigator.userAgent, i = /iphone/i.test(r), o = /android/i.test(r);
    e.mask = {
        definitions: {9: "[0-9]", a: "[A-Za-z]", "*": "[A-Za-z0-9]"},
        dataName: "rawMaskFn",
        placeholder: "_"
    }, e.fn.extend({
        caret: function (e, t) {
            var n;
            if (0 !== this.length && !this.is(":hidden")) return "number" == typeof e ? (t = "number" == typeof t ? t : e, this.each(function () {
                this.setSelectionRange ? this.setSelectionRange(e, t) : this.createTextRange && (n = this.createTextRange(), n.collapse(!0), n.moveEnd("character", t), n.moveStart("character", e), n.select())
            })) : (this[0].setSelectionRange ? (e = this[0].selectionStart, t = this[0].selectionEnd) : document.selection && document.selection.createRange && (n = document.selection.createRange(), e = 0 - n.duplicate().moveStart("character", -1e5), t = e + n.text.length), {
                begin: e,
                end: t
            })
        }, unmask: function () {
            return this.trigger("unmask")
        }, mask: function (t, r) {
            var c, l, s, u, f, h;
            return !t && this.length > 0 ? (c = e(this[0]), c.data(e.mask.dataName)()) : (r = e.extend({
                placeholder: e.mask.placeholder,
                completed: null
            }, r), l = e.mask.definitions, s = [], u = h = t.length, f = null, e.each(t.split(""), function (e, t) {
                "?" == t ? (h--, u = e) : l[t] ? (s.push(RegExp(l[t])), null === f && (f = s.length - 1)) : s.push(null)
            }), this.trigger("unmask").each(function () {
                function c(e) {
                    for (; h > ++e && !s[e];) ;
                    return e
                }

                function d(e) {
                    for (; --e >= 0 && !s[e];) ;
                    return e
                }

                function m(e, t) {
                    var n, a;
                    if (!(0 > e)) {
                        for (n = e, a = c(t); h > n; n++) if (s[n]) {
                            if (!(h > a && s[n].test(R[a]))) break;
                            R[n] = R[a], R[a] = r.placeholder, a = c(a)
                        }
                        b(), x.caret(Math.max(f, e))
                    }
                }

                function p(e) {
                    var t, n, a, i;
                    for (t = e, n = r.placeholder; h > t; t++) if (s[t]) {
                        if (a = c(t), i = R[t], R[t] = n, !(h > a && s[a].test(i))) break;
                        n = i
                    }
                }

                function g(e) {
                    var t, n, a, r = e.which;
                    8 === r || 46 === r || i && 127 === r ? (t = x.caret(), n = t.begin, a = t.end, 0 === a - n && (n = 46 !== r ? d(n) : a = c(n - 1), a = 46 === r ? c(a) : a), k(n, a), m(n, a - 1), e.preventDefault()) : 27 == r && (x.val(S), x.caret(0, y()), e.preventDefault())
                }

                function v(t) {
                    var n, a, i, l = t.which, u = x.caret();
                    t.ctrlKey || t.altKey || t.metaKey || 32 > l || l && (0 !== u.end - u.begin && (k(u.begin, u.end), m(u.begin, u.end - 1)), n = c(u.begin - 1), h > n && (a = String.fromCharCode(l), s[n].test(a) && (p(n), R[n] = a, b(), i = c(n), o ? setTimeout(e.proxy(e.fn.caret, x, i), 0) : x.caret(i), r.completed && i >= h && r.completed.call(x))), t.preventDefault())
                }

                function k(e, t) {
                    var n;
                    for (n = e; t > n && h > n; n++) s[n] && (R[n] = r.placeholder)
                }

                function b() {
                    x.val(R.join(""))
                }

                function y(e) {
                    var t, n, a = x.val(), i = -1;
                    for (t = 0, pos = 0; h > t; t++) if (s[t]) {
                        for (R[t] = r.placeholder; pos++ < a.length;) if (n = a.charAt(pos - 1), s[t].test(n)) {
                            R[t] = n, i = t;
                            break
                        }
                        if (pos > a.length) break
                    } else R[t] === a.charAt(pos) && t !== u && (pos++, i = t);
                    return e ? b() : u > i + 1 ? (x.val(""), k(0, h)) : (b(), x.val(x.val().substring(0, i + 1))), u ? t : f
                }

                var x = e(this), R = e.map(t.split(""), function (e) {
                    return "?" != e ? l[e] ? r.placeholder : e : void 0
                }), S = x.val();
                x.data(e.mask.dataName, function () {
                    return e.map(R, function (e, t) {
                        return s[t] && e != r.placeholder ? e : null
                    }).join("")
                }), x.attr("readonly") || x.one("unmask", function () {
                    x.unbind(".mask").removeData(e.mask.dataName)
                }).bind("focus.mask", function () {
                    clearTimeout(n);
                    var e;
                    S = x.val(), e = y(), n = setTimeout(function () {
                        b(), e == t.length ? x.caret(0, e) : x.caret(e)
                    }, 10)
                }).bind("blur.mask", function () {
                    y(), x.val() != S && x.change()
                }).bind("keydown.mask", g).bind("keypress.mask", v).bind(a, function () {
                    setTimeout(function () {
                        var e = y(!0);
                        x.caret(e), r.completed && e == x.val().length && r.completed.call(x)
                    }, 0)
                }), y()
            }))
        }
    })
})(jQuery);

//file
!function (e) {
    e.addModule(function (e) {
        "use strict";
        return {
            name: "File",
            selector: 'input[type="file"]',
            options: {
                fakeStructure: '<span class="jcf-file"><span class="jcf-fake-input"></span><span class="jcf-upload-button"><span class="jcf-button-content"></span></span></span>',
                buttonText: "Choose file",
                placeholderText: "No file chosen",
                realElementClass: "jcf-real-element",
                extensionPrefixClass: "jcf-extension-",
                selectedFileBlock: ".jcf-fake-input",
                buttonTextBlock: ".jcf-button-content"
            },
            matchElement: function (e) {
                return e.is('input[type="file"]')
            },
            init: function () {
                this.initStructure(), this.attachEvents(), this.refresh()
            },
            initStructure: function () {
                this.doc = e(document), this.realElement = e(this.options.element).addClass(this.options.realElementClass), this.fakeElement = e(this.options.fakeStructure).insertBefore(this.realElement), this.fileNameBlock = this.fakeElement.find(this.options.selectedFileBlock), this.buttonTextBlock = this.fakeElement.find(this.options.buttonTextBlock).text(this.options.buttonText), this.realElement.appendTo(this.fakeElement).css({
                    position: "absolute",
                    opacity: 0
                })
            },
            attachEvents: function () {
                this.realElement.on({"jcf-pointerdown": this.onPress, change: this.onChange, focus: this.onFocus})
            },
            onChange: function () {
                this.refresh()
            },
            onFocus: function () {
                this.fakeElement.addClass(this.options.focusClass), this.realElement.on("blur", this.onBlur)
            },
            onBlur: function () {
                this.fakeElement.removeClass(this.options.focusClass), this.realElement.off("blur", this.onBlur)
            },
            onPress: function () {
                this.fakeElement.addClass(this.options.pressedClass), this.doc.on("jcf-pointerup", this.onRelease)
            },
            onRelease: function () {
                this.fakeElement.removeClass(this.options.pressedClass), this.doc.off("jcf-pointerup", this.onRelease)
            },
            getFileName: function () {
                var t = "", s = this.realElement.prop("files");
                return s && s.length ? e.each(s, function (e, s) {
                    t += (e > 0 ? ", " : "") + s.name
                }) : t = this.realElement.val().replace(/^[\s\S]*(?:\|\/)([\s\S^\\/]*)$/g, "$1"), t
            },
            getFileExtension: function () {
                var e = this.realElement.val();
                return e.lastIndexOf(".") < 0 ? "" : e.substring(e.lastIndexOf(".") + 1).toLowerCase()
            },
            updateExtensionClass: function () {
                var e = this.getFileExtension(), t = this.fakeElement.prop("className"),
                    s = t.replace(new RegExp("(\s|^)" + this.options.extensionPrefixClass + "[^ ]+", "gi"), "");
                this.fakeElement.prop("className", s), e && this.fakeElement.addClass(this.options.extensionPrefixClass + e)
            },
            refresh: function () {
                var e = this.getFileName() || this.options.placeholderText;
                this.fakeElement.toggleClass(this.options.disabledClass, this.realElement.is(":disabled")), this.fileNameBlock.text(e), this.updateExtensionClass()
            },
            destroy: function () {
                this.realElement.insertBefore(this.fakeElement).removeClass(this.options.realElementClass).css({
                    position: "",
                    opacity: ""
                }), this.fakeElement.remove(), this.realElement.off({
                    "jcf-pointerdown": this.onPress,
                    change: this.onChange,
                    focus: this.onFocus,
                    blur: this.onBlur
                }), this.doc.off("jcf-pointerup", this.onRelease)
            }
        }
    })
}(jcf);

//select
!function (e) {
    e.addModule(function (t, s) {
        "use strict";

        function i(e) {
            this.options = t.extend({
                wrapNative: !0,
                wrapNativeOnMobile: !0,
                fakeDropInBody: !0,
                useCustomScroll: !0,
                flipDropToFit: !0,
                maxVisibleItems: 10,
                fakeAreaStructure: '<span class="jcf-select"><span class="jcf-select-text"></span><span class="jcf-select-opener"></span></span>',
                fakeDropStructure: '<div class="jcf-select-drop"><div class="jcf-select-drop-content"></div></div>',
                optionClassPrefix: "jcf-option-",
                selectClassPrefix: "jcf-select-",
                dropContentSelector: ".jcf-select-drop-content",
                selectTextSelector: ".jcf-select-text",
                dropActiveClass: "jcf-drop-active",
                flipDropClass: "jcf-drop-flipped"
            }, e), this.init()
        }

        function o(e) {
            this.options = t.extend({
                wrapNative: !0,
                useCustomScroll: !0,
                fakeStructure: '<span class="jcf-list-box"><span class="jcf-list-wrapper"></span></span>',
                selectClassPrefix: "jcf-select-",
                listHolder: ".jcf-list-wrapper"
            }, e), this.init()
        }

        function n(e) {
            this.options = t.extend({
                holder: null,
                maxVisibleItems: 10,
                selectOnClick: !0,
                useHoverClass: !1,
                useCustomScroll: !1,
                handleResize: !0,
                multipleSelectWithoutKey: !1,
                alwaysPreventMouseWheel: !1,
                indexAttribute: "data-index",
                cloneClassPrefix: "jcf-option-",
                containerStructure: '<span class="jcf-list"><span class="jcf-list-content"></span></span>',
                containerSelector: ".jcf-list-content",
                captionClass: "jcf-optgroup-caption",
                disabledClass: "jcf-disabled",
                optionClass: "jcf-option",
                groupClass: "jcf-optgroup",
                hoverClass: "jcf-hover",
                selectedClass: "jcf-selected",
                scrollClass: "jcf-scroll-active"
            }, e), this.init()
        }

        var l = {
            name: "Select",
            selector: "select",
            options: {element: null, multipleCompactStyle: !1},
            plugins: {ListBox: o, ComboBox: i, SelectList: n},
            matchElement: function (e) {
                return e.is("select")
            },
            init: function () {
                this.element = t(this.options.element), this.createInstance()
            },
            isListBox: function () {
                return this.element.is("[size]:not([jcf-size]), [multiple]")
            },
            createInstance: function () {
                this.instance && this.instance.destroy(), this.isListBox() && !this.options.multipleCompactStyle ? this.instance = new o(this.options) : this.instance = new i(this.options)
            },
            refresh: function () {
                var e = this.isListBox() && this.instance instanceof i || !this.isListBox() && this.instance instanceof o;
                e ? this.createInstance() : this.instance.refresh()
            },
            destroy: function () {
                this.instance.destroy()
            }
        };
        t.extend(i.prototype, {
            init: function () {
                this.initStructure(), this.bindHandlers(), this.attachEvents(), this.refresh()
            }, initStructure: function () {
                this.win = t(s), this.doc = t(document), this.realElement = t(this.options.element), this.fakeElement = t(this.options.fakeAreaStructure).insertAfter(this.realElement), this.selectTextContainer = this.fakeElement.find(this.options.selectTextSelector), this.selectText = t("<span></span>").appendTo(this.selectTextContainer), h(this.fakeElement), this.fakeElement.addClass(r(this.realElement.prop("className"), this.options.selectClassPrefix)), this.realElement.prop("multiple") && this.fakeElement.addClass("jcf-compact-multiple"), this.options.isMobileDevice && this.options.wrapNativeOnMobile && !this.options.wrapNative && (this.options.wrapNative = !0), this.options.wrapNative ? this.realElement.prependTo(this.fakeElement).css({
                    position: "absolute",
                    height: "100%",
                    width: "100%"
                }).addClass(this.options.resetAppearanceClass) : (this.realElement.addClass(this.options.hiddenClass), this.fakeElement.attr("title", this.realElement.attr("title")), this.fakeDropTarget = this.options.fakeDropInBody ? t("body") : this.fakeElement)
            }, attachEvents: function () {
                var e = this;
                this.delayedRefresh = function () {
                    setTimeout(function () {
                        e.refresh(), e.list && (e.list.refresh(), e.list.scrollToActiveOption())
                    }, 1)
                }, this.options.wrapNative ? this.realElement.on({
                    focus: this.onFocus,
                    change: this.onChange,
                    click: this.onChange,
                    keydown: this.delayedRefresh
                }) : (this.realElement.on({
                    focus: this.onFocus,
                    change: this.onChange,
                    keydown: this.onKeyDown
                }), this.fakeElement.on({"jcf-pointerdown": this.onSelectAreaPress}))
            }, onKeyDown: function (e) {
                13 === e.which ? this.toggleDropdown() : this.dropActive && this.delayedRefresh()
            }, onChange: function () {
                this.refresh()
            }, onFocus: function () {
                this.pressedFlag && this.focusedFlag || (this.fakeElement.addClass(this.options.focusClass), this.realElement.on("blur", this.onBlur), this.toggleListMode(!0), this.focusedFlag = !0)
            }, onBlur: function () {
                this.pressedFlag || (this.fakeElement.removeClass(this.options.focusClass), this.realElement.off("blur", this.onBlur), this.toggleListMode(!1), this.focusedFlag = !1)
            }, onResize: function () {
                this.dropActive && this.hideDropdown()
            }, onSelectDropPress: function () {
                this.pressedFlag = !0
            }, onSelectDropRelease: function (e, t) {
                this.pressedFlag = !1, "mouse" === t.pointerType && this.realElement.focus()
            }, onSelectAreaPress: function (e) {
                var s = !this.options.fakeDropInBody && t(e.target).closest(this.dropdown).length;
                s || e.button > 1 || this.realElement.is(":disabled") || (this.selectOpenedByEvent = e.pointerType, this.toggleDropdown(), this.focusedFlag || ("mouse" === e.pointerType ? this.realElement.focus() : this.onFocus(e)), this.pressedFlag = !0, this.fakeElement.addClass(this.options.pressedClass), this.doc.on("jcf-pointerup", this.onSelectAreaRelease))
            }, onSelectAreaRelease: function (e) {
                this.focusedFlag && "mouse" === e.pointerType && this.realElement.focus(), this.pressedFlag = !1, this.fakeElement.removeClass(this.options.pressedClass), this.doc.off("jcf-pointerup", this.onSelectAreaRelease)
            }, onOutsideClick: function (e) {
                var s = t(e.target), i = s.closest(this.fakeElement).length || s.closest(this.dropdown).length;
                i || this.hideDropdown()
            }, onSelect: function () {
                this.refresh(), this.realElement.prop("multiple") ? this.repositionDropdown() : this.hideDropdown(), this.fireNativeEvent(this.realElement, "change")
            }, toggleListMode: function (e) {
                this.options.wrapNative || (e ? this.realElement.attr({
                    size: 4,
                    "jcf-size": ""
                }) : this.options.wrapNative || this.realElement.removeAttr("size jcf-size"))
            }, createDropdown: function () {
                this.dropdown && (this.list.destroy(), this.dropdown.remove()), this.dropdown = t(this.options.fakeDropStructure).appendTo(this.fakeDropTarget), this.dropdown.addClass(r(this.realElement.prop("className"), this.options.selectClassPrefix)), h(this.dropdown), this.realElement.prop("multiple") && this.dropdown.addClass("jcf-compact-multiple"), this.options.fakeDropInBody && this.dropdown.css({
                    position: "absolute",
                    top: -9999
                }), this.list = new n({
                    useHoverClass: !0,
                    handleResize: !1,
                    alwaysPreventMouseWheel: !0,
                    maxVisibleItems: this.options.maxVisibleItems,
                    useCustomScroll: this.options.useCustomScroll,
                    holder: this.dropdown.find(this.options.dropContentSelector),
                    multipleSelectWithoutKey: this.realElement.prop("multiple"),
                    element: this.realElement
                }), t(this.list).on({
                    select: this.onSelect,
                    press: this.onSelectDropPress,
                    release: this.onSelectDropRelease
                })
            }, repositionDropdown: function () {
                var e, t, s, i = this.fakeElement.offset(), o = this.fakeElement[0].getBoundingClientRect(),
                    n = o.width || o.right - o.left, l = this.fakeElement.outerHeight(),
                    r = this.dropdown.css("width", n).outerHeight(), h = this.win.scrollTop(), a = this.win.height(),
                    c = !1;
                i.top + l + r > h + a && i.top - r > h && (c = !0), this.options.fakeDropInBody && (s = "static" !== this.fakeDropTarget.css("position") ? this.fakeDropTarget.offset().top : 0, this.options.flipDropToFit && c ? (t = i.left, e = i.top - r - s) : (t = i.left, e = i.top + l - s), this.dropdown.css({
                    width: n,
                    left: t,
                    top: e
                })), this.dropdown.add(this.fakeElement).toggleClass(this.options.flipDropClass, this.options.flipDropToFit && c)
            }, showDropdown: function () {
                this.realElement.prop("options").length && (this.dropdown || this.createDropdown(), this.dropActive = !0, this.dropdown.appendTo(this.fakeDropTarget), this.fakeElement.addClass(this.options.dropActiveClass), this.refreshSelectedText(), this.repositionDropdown(), this.list.setScrollTop(this.savedScrollTop), this.list.refresh(), this.win.on("resize", this.onResize), this.doc.on("jcf-pointerdown", this.onOutsideClick))
            }, hideDropdown: function () {
                this.dropdown && (this.savedScrollTop = this.list.getScrollTop(), this.fakeElement.removeClass(this.options.dropActiveClass + " " + this.options.flipDropClass), this.dropdown.removeClass(this.options.flipDropClass).detach(), this.doc.off("jcf-pointerdown", this.onOutsideClick), this.win.off("resize", this.onResize), this.dropActive = !1, "touch" === this.selectOpenedByEvent && this.onBlur())
            }, toggleDropdown: function () {
                this.dropActive ? this.hideDropdown() : this.showDropdown()
            }, refreshSelectedText: function () {
                var e, s = this.realElement.prop("selectedIndex"), i = this.realElement.prop("options")[s],
                    o = i ? i.getAttribute("data-image") : null, n = "", l = this;
                this.realElement.prop("multiple") ? (t.each(this.realElement.prop("options"), function (e, t) {
                    t.selected && (n += (n ? ", " : "") + t.innerHTML)
                }), n || (n = l.realElement.attr("placeholder") || ""), this.selectText.removeAttr("class").html(n)) : i ? this.currentSelectedText === i.innerHTML && this.currentSelectedImage === o || (e = r(i.className, this.options.optionClassPrefix), this.selectText.attr("class", e).html(i.innerHTML), o ? (this.selectImage || (this.selectImage = t("<img>").prependTo(this.selectTextContainer).hide()), this.selectImage.attr("src", o).show()) : this.selectImage && this.selectImage.hide(), this.currentSelectedText = i.innerHTML, this.currentSelectedImage = o) : (this.selectImage && this.selectImage.hide(), this.selectText.removeAttr("class").empty())
            }, refresh: function () {
                "none" === this.realElement.prop("style").display ? this.fakeElement.hide() : this.fakeElement.show(), this.refreshSelectedText(), this.fakeElement.toggleClass(this.options.disabledClass, this.realElement.is(":disabled"))
            }, destroy: function () {
                this.options.wrapNative ? this.realElement.insertBefore(this.fakeElement).css({
                    position: "",
                    height: "",
                    width: ""
                }).removeClass(this.options.resetAppearanceClass) : (this.realElement.removeClass(this.options.hiddenClass), this.realElement.is("[jcf-size]") && this.realElement.removeAttr("size jcf-size")), this.fakeElement.remove(), this.doc.off("jcf-pointerup", this.onSelectAreaRelease), this.realElement.off({focus: this.onFocus})
            }
        }), t.extend(o.prototype, {
            init: function () {
                this.bindHandlers(), this.initStructure(), this.attachEvents()
            }, initStructure: function () {
                this.realElement = t(this.options.element), this.fakeElement = t(this.options.fakeStructure).insertAfter(this.realElement), this.listHolder = this.fakeElement.find(this.options.listHolder), h(this.fakeElement), this.fakeElement.addClass(r(this.realElement.prop("className"), this.options.selectClassPrefix)), this.realElement.addClass(this.options.hiddenClass), this.list = new n({
                    useCustomScroll: this.options.useCustomScroll,
                    holder: this.listHolder,
                    selectOnClick: !1,
                    element: this.realElement
                })
            }, attachEvents: function () {
                var e = this;
                this.delayedRefresh = function (t) {
                    t && (16 === t.which || t.ctrlKey || t.metaKey || t.altKey) || (clearTimeout(e.refreshTimer), e.refreshTimer = setTimeout(function () {
                        e.refresh(), e.list.scrollToActiveOption()
                    }, 1))
                }, this.realElement.on({
                    focus: this.onFocus,
                    click: this.delayedRefresh,
                    keydown: this.delayedRefresh
                }), t(this.list).on({
                    select: this.onSelect,
                    press: this.onFakeOptionsPress,
                    release: this.onFakeOptionsRelease
                })
            }, onFakeOptionsPress: function (e, t) {
                this.pressedFlag = !0, "mouse" === t.pointerType && this.realElement.focus()
            }, onFakeOptionsRelease: function (e, t) {
                this.pressedFlag = !1, "mouse" === t.pointerType && this.realElement.focus()
            }, onSelect: function () {
                this.fireNativeEvent(this.realElement, "change"), this.fireNativeEvent(this.realElement, "click")
            }, onFocus: function () {
                this.pressedFlag && this.focusedFlag || (this.fakeElement.addClass(this.options.focusClass), this.realElement.on("blur", this.onBlur), this.focusedFlag = !0)
            }, onBlur: function () {
                this.pressedFlag || (this.fakeElement.removeClass(this.options.focusClass), this.realElement.off("blur", this.onBlur), this.focusedFlag = !1)
            }, refresh: function () {
                this.fakeElement.toggleClass(this.options.disabledClass, this.realElement.is(":disabled")), this.list.refresh()
            }, destroy: function () {
                this.list.destroy(), this.realElement.insertBefore(this.fakeElement).removeClass(this.options.hiddenClass), this.fakeElement.remove()
            }
        }), t.extend(n.prototype, {
            init: function () {
                this.initStructure(), this.refreshSelectedClass(), this.attachEvents()
            }, initStructure: function () {
                this.element = t(this.options.element), this.indexSelector = "[" + this.options.indexAttribute + "]", this.container = t(this.options.containerStructure).appendTo(this.options.holder), this.listHolder = this.container.find(this.options.containerSelector), this.lastClickedIndex = this.element.prop("selectedIndex"), this.rebuildList(), this.element.prop("multiple") && (this.previousSelection = this.getSelectedOptionsIndexes())
            }, attachEvents: function () {
                this.bindHandlers(), this.listHolder.on("jcf-pointerdown", this.indexSelector, this.onItemPress), this.listHolder.on("jcf-pointerdown", this.onPress), this.options.useHoverClass && this.listHolder.on("jcf-pointerover", this.indexSelector, this.onHoverItem)
            }, onPress: function (e) {
                t(this).trigger("press", e), this.listHolder.on("jcf-pointerup", this.onRelease)
            }, onRelease: function (e) {
                t(this).trigger("release", e), this.listHolder.off("jcf-pointerup", this.onRelease)
            }, onHoverItem: function (e) {
                var t = parseFloat(e.currentTarget.getAttribute(this.options.indexAttribute));
                this.fakeOptions.removeClass(this.options.hoverClass).eq(t).addClass(this.options.hoverClass)
            }, onItemPress: function (e) {
                "touch" === e.pointerType || this.options.selectOnClick ? (this.tmpListOffsetTop = this.list.offset().top, this.listHolder.on("jcf-pointerup", this.indexSelector, this.onItemRelease)) : this.onSelectItem(e)
            }, onItemRelease: function (e) {
                this.listHolder.off("jcf-pointerup", this.indexSelector, this.onItemRelease), this.tmpListOffsetTop === this.list.offset().top && this.listHolder.on("click", this.indexSelector, {savedPointerType: e.pointerType}, this.onSelectItem), delete this.tmpListOffsetTop
            }, onSelectItem: function (e) {
                var s, i = parseFloat(e.currentTarget.getAttribute(this.options.indexAttribute)),
                    o = e.data && e.data.savedPointerType || e.pointerType || "mouse";
                this.listHolder.off("click", this.indexSelector, this.onSelectItem), e.button > 1 || this.realOptions[i].disabled || (this.element.prop("multiple") ? e.metaKey || e.ctrlKey || "touch" === o || this.options.multipleSelectWithoutKey ? this.realOptions[i].selected = !this.realOptions[i].selected : e.shiftKey ? (s = [this.lastClickedIndex, i].sort(function (e, t) {
                    return e - t
                }), this.realOptions.each(function (e, t) {
                    t.selected = e >= s[0] && e <= s[1]
                })) : this.element.prop("selectedIndex", i) : this.element.prop("selectedIndex", i), e.shiftKey || (this.lastClickedIndex = i), this.refreshSelectedClass(), "mouse" === o && this.scrollToActiveOption(), t(this).trigger("select"))
            }, rebuildList: function () {
                var s = this, i = this.element[0];
                this.storedSelectHTML = i.innerHTML, this.optionIndex = 0, this.list = t(this.createOptionsList(i)), this.listHolder.empty().append(this.list), this.realOptions = this.element.find("option"), this.fakeOptions = this.list.find(this.indexSelector), this.fakeListItems = this.list.find("." + this.options.captionClass + "," + this.indexSelector), delete this.optionIndex;
                var o = this.options.maxVisibleItems, n = this.element.prop("size");
                n > 1 && !this.element.is("[jcf-size]") && (o = n);
                var l = this.fakeOptions.length > o;
                return this.container.toggleClass(this.options.scrollClass, l), l && (this.listHolder.css({
                    maxHeight: this.getOverflowHeight(o),
                    overflow: "auto"
                }), this.options.useCustomScroll && e.modules.Scrollable) ? void e.replace(this.listHolder, "Scrollable", {
                    handleResize: this.options.handleResize,
                    alwaysPreventMouseWheel: this.options.alwaysPreventMouseWheel
                }) : void (this.options.alwaysPreventMouseWheel && (this.preventWheelHandler = function (e) {
                    var t = s.listHolder.scrollTop(),
                        i = s.listHolder.prop("scrollHeight") - s.listHolder.innerHeight();
                    (0 >= t && e.deltaY < 0 || t >= i && e.deltaY > 0) && e.preventDefault()
                }, this.listHolder.on("jcf-mousewheel", this.preventWheelHandler)))
            }, refreshSelectedClass: function () {
                var e, t = this, s = this.element.prop("multiple"), i = this.element.prop("selectedIndex");
                s ? this.realOptions.each(function (e, s) {
                    t.fakeOptions.eq(e).toggleClass(t.options.selectedClass, !!s.selected)
                }) : (this.fakeOptions.removeClass(this.options.selectedClass + " " + this.options.hoverClass), e = this.fakeOptions.eq(i).addClass(this.options.selectedClass), this.options.useHoverClass && e.addClass(this.options.hoverClass))
            }, scrollToActiveOption: function () {
                var e = this.getActiveOptionOffset();
                "number" == typeof e && this.listHolder.prop("scrollTop", e)
            }, getSelectedOptionsIndexes: function () {
                var e = [];
                return this.realOptions.each(function (t, s) {
                    s.selected && e.push(t)
                }), e
            }, getChangedSelectedIndex: function () {
                var e = this.element.prop("selectedIndex"), s = this, i = !1, o = null;
                return this.element.prop("multiple") ? (this.currentSelection = this.getSelectedOptionsIndexes(), t.each(this.currentSelection, function (e, t) {
                    !i && s.previousSelection.indexOf(t) < 0 && (0 === e && (i = !0), o = t)
                }), this.previousSelection = this.currentSelection, o) : e
            }, getActiveOptionOffset: function () {
                var e = this.getChangedSelectedIndex();
                if (null !== e) {
                    var t = this.listHolder.height(), s = this.listHolder.prop("scrollTop"), i = this.fakeOptions.eq(e),
                        o = i.offset().top - this.list.offset().top, n = i.innerHeight();
                    return o + n >= s + t ? o - t + n : s > o ? o : void 0
                }
            }, getOverflowHeight: function (e) {
                var t = this.fakeListItems.eq(e - 1), s = this.list.offset().top, i = t.offset().top,
                    o = t.innerHeight();
                return i + o - s
            }, getScrollTop: function () {
                return this.listHolder.scrollTop()
            }, setScrollTop: function (e) {
                this.listHolder.scrollTop(e)
            }, createOption: function (e) {
                var t = document.createElement("span");
                t.className = this.options.optionClass, t.innerHTML = e.innerHTML, t.setAttribute(this.options.indexAttribute, this.optionIndex++);
                var s, i = e.getAttribute("data-image");
                return i && (s = document.createElement("img"), s.src = i, t.insertBefore(s, t.childNodes[0])), e.disabled && (t.className += " " + this.options.disabledClass), e.className && (t.className += " " + r(e.className, this.options.cloneClassPrefix)), t
            }, createOptGroup: function (e) {
                var t, s, i = document.createElement("span"), o = e.getAttribute("label");
                return t = document.createElement("span"), t.className = this.options.captionClass, t.innerHTML = o, i.appendChild(t), e.children.length && (s = this.createOptionsList(e), i.appendChild(s)), i.className = this.options.groupClass, i
            }, createOptionContainer: function () {
                var e = document.createElement("li");
                return e
            }, createOptionsList: function (e) {
                var s = this, i = document.createElement("ul");
                return t.each(e.children, function (e, t) {
                    var o, n = s.createOptionContainer(t);
                    switch (t.tagName.toLowerCase()) {
                        case"option":
                            o = s.createOption(t);
                            break;
                        case"optgroup":
                            o = s.createOptGroup(t)
                    }
                    i.appendChild(n).appendChild(o)
                }), i
            }, refresh: function () {
                this.storedSelectHTML !== this.element.prop("innerHTML") && this.rebuildList();
                var t = e.getInstance(this.listHolder);
                t && t.refresh(), this.refreshSelectedClass()
            }, destroy: function () {
                this.listHolder.off("jcf-mousewheel", this.preventWheelHandler), this.listHolder.off("jcf-pointerdown", this.indexSelector, this.onSelectItem), this.listHolder.off("jcf-pointerover", this.indexSelector, this.onHoverItem), this.listHolder.off("jcf-pointerdown", this.onPress)
            }
        });
        var r = function (e, t) {
            return e ? e.replace(/[\s]*([\S]+)+[\s]*/gi, t + "$1 ") : ""
        }, h = function () {
            function t(e) {
                e.preventDefault()
            }

            var s = e.getOptions().unselectableClass;
            return function (e) {
                e.addClass(s).on("selectstart", t)
            }
        }();
        return l
    })
}(jcf);

//checkbox
!function (e) {
    e.addModule(function (e) {
        "use strict";
        return {
            name: "Checkbox",
            selector: 'input[type="checkbox"]',
            options: {
                wrapNative: !0,
                checkedClass: "jcf-checked",
                uncheckedClass: "jcf-unchecked",
                labelActiveClass: "jcf-label-active",
                fakeStructure: '<span class="jcf-checkbox"><span></span></span>'
            },
            matchElement: function (e) {
                return e.is(":checkbox")
            },
            init: function () {
                this.initStructure(), this.attachEvents(), this.refresh()
            },
            initStructure: function () {
                this.doc = e(document), this.realElement = e(this.options.element), this.fakeElement = e(this.options.fakeStructure).insertAfter(this.realElement), this.labelElement = this.getLabelFor(), this.options.wrapNative ? this.realElement.appendTo(this.fakeElement).css({
                    position: "absolute",
                    height: "100%",
                    width: "100%",
                    opacity: 0,
                    margin: 0
                }) : this.realElement.addClass(this.options.hiddenClass)
            },
            attachEvents: function () {
                this.realElement.on({
                    focus: this.onFocus,
                    click: this.onRealClick
                }), this.fakeElement.on("click", this.onFakeClick), this.fakeElement.on("jcf-pointerdown", this.onPress)
            },
            onRealClick: function (e) {
                var t = this;
                this.savedEventObject = e, setTimeout(function () {
                    t.refresh()
                }, 0)
            },
            onFakeClick: function (e) {
                this.options.wrapNative && this.realElement.is(e.target) || this.realElement.is(":disabled") || (delete this.savedEventObject, this.stateChecked = this.realElement.prop("checked"), this.realElement.prop("checked", !this.stateChecked), this.fireNativeEvent(this.realElement, "click"), this.savedEventObject && this.savedEventObject.isDefaultPrevented() ? this.realElement.prop("checked", this.stateChecked) : this.fireNativeEvent(this.realElement, "change"), delete this.savedEventObject)
            },
            onFocus: function () {
                this.pressedFlag && this.focusedFlag || (this.focusedFlag = !0, this.fakeElement.addClass(this.options.focusClass), this.realElement.on("blur", this.onBlur))
            },
            onBlur: function () {
                this.pressedFlag || (this.focusedFlag = !1, this.fakeElement.removeClass(this.options.focusClass), this.realElement.off("blur", this.onBlur))
            },
            onPress: function (e) {
                this.focusedFlag || "mouse" !== e.pointerType || this.realElement.focus(), this.pressedFlag = !0, this.fakeElement.addClass(this.options.pressedClass), this.doc.on("jcf-pointerup", this.onRelease)
            },
            onRelease: function (e) {
                this.focusedFlag && "mouse" === e.pointerType && this.realElement.focus(), this.pressedFlag = !1, this.fakeElement.removeClass(this.options.pressedClass), this.doc.off("jcf-pointerup", this.onRelease)
            },
            getLabelFor: function () {
                var t = this.realElement.closest("label"), s = this.realElement.prop("id");
                return !t.length && s && (t = e('label[for="' + s + '"]')), t.length ? t : null
            },
            refresh: function () {
                var e = this.realElement.is(":checked"), t = this.realElement.is(":disabled");
                this.fakeElement.toggleClass(this.options.checkedClass, e).toggleClass(this.options.uncheckedClass, !e).toggleClass(this.options.disabledClass, t), this.labelElement && this.labelElement.toggleClass(this.options.labelActiveClass, e)
            },
            destroy: function () {
                this.options.wrapNative ? this.realElement.insertBefore(this.fakeElement).css({
                    position: "",
                    width: "",
                    height: "",
                    opacity: "",
                    margin: ""
                }) : this.realElement.removeClass(this.options.hiddenClass), this.fakeElement.off("jcf-pointerdown", this.onPress), this.fakeElement.remove(), this.doc.off("jcf-pointerup", this.onRelease), this.realElement.off({
                    focus: this.onFocus,
                    click: this.onRealClick
                })
            }
        }
    })
}(jcf);

//radio
!function (e) {
    e.addModule(function (t) {
        "use strict";
        return {
            name: "Radio",
            selector: 'input[type="radio"]',
            options: {
                wrapNative: !0,
                checkedClass: "jcf-checked",
                uncheckedClass: "jcf-unchecked",
                labelActiveClass: "jcf-label-active",
                fakeStructure: '<span class="jcf-radio"><span></span></span>'
            },
            matchElement: function (e) {
                return e.is(":radio")
            },
            init: function () {
                this.initStructure(), this.attachEvents(), this.refresh()
            },
            initStructure: function () {
                this.doc = t(document), this.realElement = t(this.options.element), this.fakeElement = t(this.options.fakeStructure).insertAfter(this.realElement), this.labelElement = this.getLabelFor(), this.options.wrapNative ? this.realElement.prependTo(this.fakeElement).css({
                    position: "absolute",
                    opacity: 0
                }) : this.realElement.addClass(this.options.hiddenClass)
            },
            attachEvents: function () {
                this.realElement.on({
                    focus: this.onFocus,
                    click: this.onRealClick
                }), this.fakeElement.on("click", this.onFakeClick), this.fakeElement.on("jcf-pointerdown", this.onPress)
            },
            onRealClick: function (e) {
                var t = this;
                this.savedEventObject = e, setTimeout(function () {
                    t.refreshRadioGroup()
                }, 0)
            },
            onFakeClick: function (e) {
                this.options.wrapNative && this.realElement.is(e.target) || this.realElement.is(":disabled") || (delete this.savedEventObject, this.currentActiveRadio = this.getCurrentActiveRadio(), this.stateChecked = this.realElement.prop("checked"), this.realElement.prop("checked", !0), this.fireNativeEvent(this.realElement, "click"), this.savedEventObject && this.savedEventObject.isDefaultPrevented() ? (this.realElement.prop("checked", this.stateChecked), this.currentActiveRadio.prop("checked", !0)) : this.fireNativeEvent(this.realElement, "change"), delete this.savedEventObject)
            },
            onFocus: function () {
                this.pressedFlag && this.focusedFlag || (this.focusedFlag = !0, this.fakeElement.addClass(this.options.focusClass), this.realElement.on("blur", this.onBlur))
            },
            onBlur: function () {
                this.pressedFlag || (this.focusedFlag = !1, this.fakeElement.removeClass(this.options.focusClass), this.realElement.off("blur", this.onBlur))
            },
            onPress: function (e) {
                this.focusedFlag || "mouse" !== e.pointerType || this.realElement.focus(), this.pressedFlag = !0, this.fakeElement.addClass(this.options.pressedClass), this.doc.on("jcf-pointerup", this.onRelease)
            },
            onRelease: function (e) {
                this.focusedFlag && "mouse" === e.pointerType && this.realElement.focus(), this.pressedFlag = !1, this.fakeElement.removeClass(this.options.pressedClass), this.doc.off("jcf-pointerup", this.onRelease)
            },
            getCurrentActiveRadio: function () {
                return this.getRadioGroup(this.realElement).filter(":checked")
            },
            getRadioGroup: function (e) {
                var s = e.attr("name"), i = e.parents("form");
                return s ? i.length ? i.find('input[name="' + s + '"]') : t('input[name="' + s + '"]:not(form input)') : e
            },
            getLabelFor: function () {
                var e = this.realElement.closest("label"), s = this.realElement.prop("id");
                return !e.length && s && (e = t('label[for="' + s + '"]')), e.length ? e : null
            },
            refreshRadioGroup: function () {
                this.getRadioGroup(this.realElement).each(function () {
                    e.refresh(this)
                })
            },
            refresh: function () {
                var e = this.realElement.is(":checked"), t = this.realElement.is(":disabled");
                this.fakeElement.toggleClass(this.options.checkedClass, e).toggleClass(this.options.uncheckedClass, !e).toggleClass(this.options.disabledClass, t), this.labelElement && this.labelElement.toggleClass(this.options.labelActiveClass, e)
            },
            destroy: function () {
                this.options.wrapNative ? this.realElement.insertBefore(this.fakeElement).css({
                    position: "",
                    width: "",
                    height: "",
                    opacity: "",
                    margin: ""
                }) : this.realElement.removeClass(this.options.hiddenClass), this.fakeElement.off("jcf-pointerdown", this.onPress), this.fakeElement.remove(), this.doc.off("jcf-pointerup", this.onRelease), this.realElement.off({
                    blur: this.onBlur,
                    focus: this.onFocus,
                    click: this.onRealClick
                })
            }
        }
    })
}(jcf);


/* animation scroll */
!function (a) {
    a.fn.viewportChecker = function (b) {
        var c = {
            classToAdd: "visible",
            classToRemove: "invisible",
            classToAddForFullView: "full-visible",
            removeClassAfterAnimation: !1,
            offset: 100,
            repeat: !1,
            invertBottomOffset: !0,
            callbackFunction: function (a, b) {
            },
            scrollHorizontal: !1,
            scrollBox: window
        };
        a.extend(c, b);
        var d = this, e = {height: a(c.scrollBox).height(), width: a(c.scrollBox).width()};
        return this.checkElements = function () {
            var b, f;
            c.scrollHorizontal ? (b = Math.max(a("html").scrollLeft(), a("body").scrollLeft(), a(window).scrollLeft()), f = b + e.width) : (b = Math.max(a("html").scrollTop(), a("body").scrollTop(), a(window).scrollTop()), f = b + e.height), d.each(function () {
                var d = a(this), g = {}, h = {};
                if (d.data("vp-add-class") && (h.classToAdd = d.data("vp-add-class")), d.data("vp-remove-class") && (h.classToRemove = d.data("vp-remove-class")), d.data("vp-add-class-full-view") && (h.classToAddForFullView = d.data("vp-add-class-full-view")), d.data("vp-keep-add-class") && (h.removeClassAfterAnimation = d.data("vp-remove-after-animation")), d.data("vp-offset") && (h.offset = d.data("vp-offset")), d.data("vp-repeat") && (h.repeat = d.data("vp-repeat")), d.data("vp-scrollHorizontal") && (h.scrollHorizontal = d.data("vp-scrollHorizontal")), d.data("vp-invertBottomOffset") && (h.scrollHorizontal = d.data("vp-invertBottomOffset")), a.extend(g, c), a.extend(g, h), !d.data("vp-animated") || g.repeat) {
                    String(g.offset).indexOf("%") > 0 && (g.offset = parseInt(g.offset) / 100 * e.height);
                    var i = g.scrollHorizontal ? d.offset().left : d.offset().top,
                        j = g.scrollHorizontal ? i + d.width() : i + d.height(), k = Math.round(i) + g.offset,
                        l = g.scrollHorizontal ? k + d.width() : k + d.height();
                    g.invertBottomOffset && (l -= 2 * g.offset), k < f && l > b ? (d.removeClass(g.classToRemove), d.addClass(g.classToAdd), g.callbackFunction(d, "add"), j <= f && i >= b ? d.addClass(g.classToAddForFullView) : d.removeClass(g.classToAddForFullView), d.data("vp-animated", !0), g.removeClassAfterAnimation && d.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                        d.removeClass(g.classToAdd)
                    })) : d.hasClass(g.classToAdd) && g.repeat && (d.removeClass(g.classToAdd + " " + g.classToAddForFullView), g.callbackFunction(d, "remove"), d.data("vp-animated", !1))
                }
            })
        }, ("ontouchstart" in window || "onmsgesturechange" in window) && a(document).bind("touchmove MSPointerMove pointermove", this.checkElements), a(c.scrollBox).bind("load scroll", this.checkElements), a(window).resize(function (b) {
            e = {height: a(c.scrollBox).height(), width: a(c.scrollBox).width()}, d.checkElements()
        }), this.checkElements(), this
    }
}(jQuery);