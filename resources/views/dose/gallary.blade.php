<!DOCTYPE html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WSKJDHHW');
    </script>
    <link media="all"
        href="https://preview-v2-wolfthemes.b-cdn.net/app/cache/autoptimize/50/css/autoptimize_45f88521cf11e1f17954f0f69e01e9dd.css"
        rel="stylesheet">
    <title>Vertical Slider &#8211; Unimate</title>
    <meta name='robots' content='max-image-preview:large' /><style>img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px }</style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Unimate &raquo; Feed"
        href="https://preview.wolfthemes.store/unimate/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Unimate &raquo; Comments Feed"
        href="https://preview.wolfthemes.store/unimate/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/preview.wolfthemes.store\/unimate\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css'
        href='https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/css/dashicons.min.css?ver=6.7.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='admin-bar-css'
        href='https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/css/admin-bar.min.css?ver=6.7.2'
        type='text/css' media='all' />
    <style id='admin-bar-inline-css' type='text/css'>
        #wp-admin-bar-my-sites-search.hide-if-no-js {
            display: none;
        }

        #wp-admin-bar-my-sites-search label[for="my-sites-search-text"] {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        #wp-admin-bar-my-sites-search {
            height: 38px;
        }

        #wp-admin-bar-my-sites-search .ab-item {
            height: 34px;
        }

        #wp-admin-bar-my-sites-search input {
            padding: 0 2px;
            width: 95%;
            width: calc(100% - 4px);
        }
    </style>
    <style id='wolf-core-styles-inline-css' type='text/css'>
        .wolf-core-background-color-black {
            background-color: #000000;
        }

        .wolf-core-border-color-black {
            border-color: #000000;
        }

        .wolf-core-button-background-color-black {
            background-color: #000000;
            color: #000000;
            border-color: #000000;
        }

        .wolf-core-button-background-color-black .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #000000;
            background-color: #000000;
        }

        .wolf-core-icon-color-black {
            color: #000000;
        }

        .wolf-core-svg-icon-color-black svg * {
            stroke: #000000 !important;
        }

        .wolf-core-icon-background-color-black {
            box-shadow: 0 0 0 0 #000000;
            background-color: #000000;
            color: #000000;
            border-color: #000000;
        }

        .wolf-core-icon-background-color-black .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #000000;
            background-color: #000000;
        }

        .wolf-core-text-color-black {
            color: #000000 !important;
        }

        .wolf-core-background-color-lightergrey {
            background-color: #f7f7f7;
        }

        .wolf-core-border-color-lightergrey {
            border-color: #f7f7f7;
        }

        .wolf-core-button-background-color-lightergrey {
            background-color: #f7f7f7;
            color: #f7f7f7;
            border-color: #f7f7f7;
        }

        .wolf-core-button-background-color-lightergrey .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #f7f7f7;
            background-color: #f7f7f7;
        }

        .wolf-core-icon-color-lightergrey {
            color: #f7f7f7;
        }

        .wolf-core-svg-icon-color-lightergrey svg * {
            stroke: #f7f7f7 !important;
        }

        .wolf-core-icon-background-color-lightergrey {
            box-shadow: 0 0 0 0 #f7f7f7;
            background-color: #f7f7f7;
            color: #f7f7f7;
            border-color: #f7f7f7;
        }

        .wolf-core-icon-background-color-lightergrey .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #f7f7f7;
            background-color: #f7f7f7;
        }

        .wolf-core-text-color-lightergrey {
            color: #f7f7f7 !important;
        }

        .wolf-core-background-color-darkgrey {
            background-color: #444444;
        }

        .wolf-core-border-color-darkgrey {
            border-color: #444444;
        }

        .wolf-core-button-background-color-darkgrey {
            background-color: #444444;
            color: #444444;
            border-color: #444444;
        }

        .wolf-core-button-background-color-darkgrey .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #444444;
            background-color: #444444;
        }

        .wolf-core-icon-color-darkgrey {
            color: #444444;
        }

        .wolf-core-svg-icon-color-darkgrey svg * {
            stroke: #444444 !important;
        }

        .wolf-core-icon-background-color-darkgrey {
            box-shadow: 0 0 0 0 #444444;
            background-color: #444444;
            color: #444444;
            border-color: #444444;
        }

        .wolf-core-icon-background-color-darkgrey .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #444444;
            background-color: #444444;
        }

        .wolf-core-text-color-darkgrey {
            color: #444444 !important;
        }

        .wolf-core-background-color-white {
            background-color: #ffffff;
        }

        .wolf-core-border-color-white {
            border-color: #ffffff;
        }

        .wolf-core-button-background-color-white {
            background-color: #ffffff;
            color: #ffffff;
            border-color: #ffffff;
        }

        .wolf-core-button-background-color-white .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #ffffff;
            background-color: #ffffff;
        }

        .wolf-core-icon-color-white {
            color: #ffffff;
        }

        .wolf-core-svg-icon-color-white svg * {
            stroke: #ffffff !important;
        }

        .wolf-core-icon-background-color-white {
            box-shadow: 0 0 0 0 #ffffff;
            background-color: #ffffff;
            color: #ffffff;
            border-color: #ffffff;
        }

        .wolf-core-icon-background-color-white .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #ffffff;
            background-color: #ffffff;
        }

        .wolf-core-text-color-white {
            color: #ffffff !important;
        }

        .wolf-core-background-color-orange {
            background-color: #F7BE68;
        }

        .wolf-core-border-color-orange {
            border-color: #F7BE68;
        }

        .wolf-core-button-background-color-orange {
            background-color: #F7BE68;
            color: #F7BE68;
            border-color: #F7BE68;
        }

        .wolf-core-button-background-color-orange .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #F7BE68;
            background-color: #F7BE68;
        }

        .wolf-core-icon-color-orange {
            color: #F7BE68;
        }

        .wolf-core-svg-icon-color-orange svg * {
            stroke: #F7BE68 !important;
        }

        .wolf-core-icon-background-color-orange {
            box-shadow: 0 0 0 0 #F7BE68;
            background-color: #F7BE68;
            color: #F7BE68;
            border-color: #F7BE68;
        }

        .wolf-core-icon-background-color-orange .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #F7BE68;
            background-color: #F7BE68;
        }

        .wolf-core-text-color-orange {
            color: #F7BE68 !important;
        }

        .wolf-core-background-color-green {
            background-color: #6DAB3C;
        }

        .wolf-core-border-color-green {
            border-color: #6DAB3C;
        }

        .wolf-core-button-background-color-green {
            background-color: #6DAB3C;
            color: #6DAB3C;
            border-color: #6DAB3C;
        }

        .wolf-core-button-background-color-green .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #6DAB3C;
            background-color: #6DAB3C;
        }

        .wolf-core-icon-color-green {
            color: #6DAB3C;
        }

        .wolf-core-svg-icon-color-green svg * {
            stroke: #6DAB3C !important;
        }

        .wolf-core-icon-background-color-green {
            box-shadow: 0 0 0 0 #6DAB3C;
            background-color: #6DAB3C;
            color: #6DAB3C;
            border-color: #6DAB3C;
        }

        .wolf-core-icon-background-color-green .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #6DAB3C;
            background-color: #6DAB3C;
        }

        .wolf-core-text-color-green {
            color: #6DAB3C !important;
        }

        .wolf-core-background-color-turquoise {
            background-color: #49afcd;
        }

        .wolf-core-border-color-turquoise {
            border-color: #49afcd;
        }

        .wolf-core-button-background-color-turquoise {
            background-color: #49afcd;
            color: #49afcd;
            border-color: #49afcd;
        }

        .wolf-core-button-background-color-turquoise .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #49afcd;
            background-color: #49afcd;
        }

        .wolf-core-icon-color-turquoise {
            color: #49afcd;
        }

        .wolf-core-svg-icon-color-turquoise svg * {
            stroke: #49afcd !important;
        }

        .wolf-core-icon-background-color-turquoise {
            box-shadow: 0 0 0 0 #49afcd;
            background-color: #49afcd;
            color: #49afcd;
            border-color: #49afcd;
        }

        .wolf-core-icon-background-color-turquoise .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #49afcd;
            background-color: #49afcd;
        }

        .wolf-core-text-color-turquoise {
            color: #49afcd !important;
        }

        .wolf-core-background-color-violet {
            background-color: #8D6DC4;
        }

        .wolf-core-border-color-violet {
            border-color: #8D6DC4;
        }

        .wolf-core-button-background-color-violet {
            background-color: #8D6DC4;
            color: #8D6DC4;
            border-color: #8D6DC4;
        }

        .wolf-core-button-background-color-violet .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #8D6DC4;
            background-color: #8D6DC4;
        }

        .wolf-core-icon-color-violet {
            color: #8D6DC4;
        }

        .wolf-core-svg-icon-color-violet svg * {
            stroke: #8D6DC4 !important;
        }

        .wolf-core-icon-background-color-violet {
            box-shadow: 0 0 0 0 #8D6DC4;
            background-color: #8D6DC4;
            color: #8D6DC4;
            border-color: #8D6DC4;
        }

        .wolf-core-icon-background-color-violet .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #8D6DC4;
            background-color: #8D6DC4;
        }

        .wolf-core-text-color-violet {
            color: #8D6DC4 !important;
        }

        .wolf-core-background-color-pink {
            background-color: #FE6C61;
        }

        .wolf-core-border-color-pink {
            border-color: #FE6C61;
        }

        .wolf-core-button-background-color-pink {
            background-color: #FE6C61;
            color: #FE6C61;
            border-color: #FE6C61;
        }

        .wolf-core-button-background-color-pink .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #FE6C61;
            background-color: #FE6C61;
        }

        .wolf-core-icon-color-pink {
            color: #FE6C61;
        }

        .wolf-core-svg-icon-color-pink svg * {
            stroke: #FE6C61 !important;
        }

        .wolf-core-icon-background-color-pink {
            box-shadow: 0 0 0 0 #FE6C61;
            background-color: #FE6C61;
            color: #FE6C61;
            border-color: #FE6C61;
        }

        .wolf-core-icon-background-color-pink .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #FE6C61;
            background-color: #FE6C61;
        }

        .wolf-core-text-color-pink {
            color: #FE6C61 !important;
        }

        .wolf-core-background-color-greyblue {
            background-color: #49535a;
        }

        .wolf-core-border-color-greyblue {
            border-color: #49535a;
        }

        .wolf-core-button-background-color-greyblue {
            background-color: #49535a;
            color: #49535a;
            border-color: #49535a;
        }

        .wolf-core-button-background-color-greyblue .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #49535a;
            background-color: #49535a;
        }

        .wolf-core-icon-color-greyblue {
            color: #49535a;
        }

        .wolf-core-svg-icon-color-greyblue svg * {
            stroke: #49535a !important;
        }

        .wolf-core-icon-background-color-greyblue {
            box-shadow: 0 0 0 0 #49535a;
            background-color: #49535a;
            color: #49535a;
            border-color: #49535a;
        }

        .wolf-core-icon-background-color-greyblue .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #49535a;
            background-color: #49535a;
        }

        .wolf-core-text-color-greyblue {
            color: #49535a !important;
        }

        .wolf-core-background-color-red {
            background-color: #da4f49;
        }

        .wolf-core-border-color-red {
            border-color: #da4f49;
        }

        .wolf-core-button-background-color-red {
            background-color: #da4f49;
            color: #da4f49;
            border-color: #da4f49;
        }

        .wolf-core-button-background-color-red .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #da4f49;
            background-color: #da4f49;
        }

        .wolf-core-icon-color-red {
            color: #da4f49;
        }

        .wolf-core-svg-icon-color-red svg * {
            stroke: #da4f49 !important;
        }

        .wolf-core-icon-background-color-red {
            box-shadow: 0 0 0 0 #da4f49;
            background-color: #da4f49;
            color: #da4f49;
            border-color: #da4f49;
        }

        .wolf-core-icon-background-color-red .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #da4f49;
            background-color: #da4f49;
        }

        .wolf-core-text-color-red {
            color: #da4f49 !important;
        }

        .wolf-core-background-color-yellow {
            background-color: #e6ae48;
        }

        .wolf-core-border-color-yellow {
            border-color: #e6ae48;
        }

        .wolf-core-button-background-color-yellow {
            background-color: #e6ae48;
            color: #e6ae48;
            border-color: #e6ae48;
        }

        .wolf-core-button-background-color-yellow .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #e6ae48;
            background-color: #e6ae48;
        }

        .wolf-core-icon-color-yellow {
            color: #e6ae48;
        }

        .wolf-core-svg-icon-color-yellow svg * {
            stroke: #e6ae48 !important;
        }

        .wolf-core-icon-background-color-yellow {
            box-shadow: 0 0 0 0 #e6ae48;
            background-color: #e6ae48;
            color: #e6ae48;
            border-color: #e6ae48;
        }

        .wolf-core-icon-background-color-yellow .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #e6ae48;
            background-color: #e6ae48;
        }

        .wolf-core-text-color-yellow {
            color: #e6ae48 !important;
        }

        .wolf-core-background-color-blue {
            background-color: #75D69C;
        }

        .wolf-core-border-color-blue {
            border-color: #75D69C;
        }

        .wolf-core-button-background-color-blue {
            background-color: #75D69C;
            color: #75D69C;
            border-color: #75D69C;
        }

        .wolf-core-button-background-color-blue .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
        }

        .wolf-core-icon-color-blue {
            color: #75D69C;
        }

        .wolf-core-svg-icon-color-blue svg * {
            stroke: #75D69C !important;
        }

        .wolf-core-icon-background-color-blue {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
            color: #75D69C;
            border-color: #75D69C;
        }

        .wolf-core-icon-background-color-blue .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
        }

        .wolf-core-text-color-blue {
            color: #75D69C !important;
        }

        .wolf-core-background-color-peacoc {
            background-color: #4CADC9;
        }

        .wolf-core-border-color-peacoc {
            border-color: #4CADC9;
        }

        .wolf-core-button-background-color-peacoc {
            background-color: #4CADC9;
            color: #4CADC9;
            border-color: #4CADC9;
        }

        .wolf-core-button-background-color-peacoc .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #4CADC9;
            background-color: #4CADC9;
        }

        .wolf-core-icon-color-peacoc {
            color: #4CADC9;
        }

        .wolf-core-svg-icon-color-peacoc svg * {
            stroke: #4CADC9 !important;
        }

        .wolf-core-icon-background-color-peacoc {
            box-shadow: 0 0 0 0 #4CADC9;
            background-color: #4CADC9;
            color: #4CADC9;
            border-color: #4CADC9;
        }

        .wolf-core-icon-background-color-peacoc .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #4CADC9;
            background-color: #4CADC9;
        }

        .wolf-core-text-color-peacoc {
            color: #4CADC9 !important;
        }

        .wolf-core-background-color-chino {
            background-color: #CEC2AB;
        }

        .wolf-core-border-color-chino {
            border-color: #CEC2AB;
        }

        .wolf-core-button-background-color-chino {
            background-color: #CEC2AB;
            color: #CEC2AB;
            border-color: #CEC2AB;
        }

        .wolf-core-button-background-color-chino .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #CEC2AB;
            background-color: #CEC2AB;
        }

        .wolf-core-icon-color-chino {
            color: #CEC2AB;
        }

        .wolf-core-svg-icon-color-chino svg * {
            stroke: #CEC2AB !important;
        }

        .wolf-core-icon-background-color-chino {
            box-shadow: 0 0 0 0 #CEC2AB;
            background-color: #CEC2AB;
            color: #CEC2AB;
            border-color: #CEC2AB;
        }

        .wolf-core-icon-background-color-chino .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #CEC2AB;
            background-color: #CEC2AB;
        }

        .wolf-core-text-color-chino {
            color: #CEC2AB !important;
        }

        .wolf-core-background-color-mulled-wine {
            background-color: #50485B;
        }

        .wolf-core-border-color-mulled-wine {
            border-color: #50485B;
        }

        .wolf-core-button-background-color-mulled-wine {
            background-color: #50485B;
            color: #50485B;
            border-color: #50485B;
        }

        .wolf-core-button-background-color-mulled-wine .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #50485B;
            background-color: #50485B;
        }

        .wolf-core-icon-color-mulled-wine {
            color: #50485B;
        }

        .wolf-core-svg-icon-color-mulled-wine svg * {
            stroke: #50485B !important;
        }

        .wolf-core-icon-background-color-mulled-wine {
            box-shadow: 0 0 0 0 #50485B;
            background-color: #50485B;
            color: #50485B;
            border-color: #50485B;
        }

        .wolf-core-icon-background-color-mulled-wine .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #50485B;
            background-color: #50485B;
        }

        .wolf-core-text-color-mulled-wine {
            color: #50485B !important;
        }

        .wolf-core-background-color-vista-blue {
            background-color: #75D69C;
        }

        .wolf-core-border-color-vista-blue {
            border-color: #75D69C;
        }

        .wolf-core-button-background-color-vista-blue {
            background-color: #75D69C;
            color: #75D69C;
            border-color: #75D69C;
        }

        .wolf-core-button-background-color-vista-blue .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
        }

        .wolf-core-icon-color-vista-blue {
            color: #75D69C;
        }

        .wolf-core-svg-icon-color-vista-blue svg * {
            stroke: #75D69C !important;
        }

        .wolf-core-icon-background-color-vista-blue {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
            color: #75D69C;
            border-color: #75D69C;
        }

        .wolf-core-icon-background-color-vista-blue .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #75D69C;
            background-color: #75D69C;
        }

        .wolf-core-text-color-vista-blue {
            color: #75D69C !important;
        }

        .wolf-core-background-color-grey {
            background-color: #EBEBEB;
        }

        .wolf-core-border-color-grey {
            border-color: #EBEBEB;
        }

        .wolf-core-button-background-color-grey {
            background-color: #EBEBEB;
            color: #EBEBEB;
            border-color: #EBEBEB;
        }

        .wolf-core-button-background-color-grey .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #EBEBEB;
            background-color: #EBEBEB;
        }

        .wolf-core-icon-color-grey {
            color: #EBEBEB;
        }

        .wolf-core-svg-icon-color-grey svg * {
            stroke: #EBEBEB !important;
        }

        .wolf-core-icon-background-color-grey {
            box-shadow: 0 0 0 0 #EBEBEB;
            background-color: #EBEBEB;
            color: #EBEBEB;
            border-color: #EBEBEB;
        }

        .wolf-core-icon-background-color-grey .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #EBEBEB;
            background-color: #EBEBEB;
        }

        .wolf-core-text-color-grey {
            color: #EBEBEB !important;
        }

        .wolf-core-background-color-sky {
            background-color: #5AA1E3;
        }

        .wolf-core-border-color-sky {
            border-color: #5AA1E3;
        }

        .wolf-core-button-background-color-sky {
            background-color: #5AA1E3;
            color: #5AA1E3;
            border-color: #5AA1E3;
        }

        .wolf-core-button-background-color-sky .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #5AA1E3;
            background-color: #5AA1E3;
        }

        .wolf-core-icon-color-sky {
            color: #5AA1E3;
        }

        .wolf-core-svg-icon-color-sky svg * {
            stroke: #5AA1E3 !important;
        }

        .wolf-core-icon-background-color-sky {
            box-shadow: 0 0 0 0 #5AA1E3;
            background-color: #5AA1E3;
            color: #5AA1E3;
            border-color: #5AA1E3;
        }

        .wolf-core-icon-background-color-sky .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #5AA1E3;
            background-color: #5AA1E3;
        }

        .wolf-core-text-color-sky {
            color: #5AA1E3 !important;
        }

        .wolf-core-background-color-juicy-pink {
            background-color: #F4524D;
        }

        .wolf-core-border-color-juicy-pink {
            border-color: #F4524D;
        }

        .wolf-core-button-background-color-juicy-pink {
            background-color: #F4524D;
            color: #F4524D;
            border-color: #F4524D;
        }

        .wolf-core-button-background-color-juicy-pink .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #F4524D;
            background-color: #F4524D;
        }

        .wolf-core-icon-color-juicy-pink {
            color: #F4524D;
        }

        .wolf-core-svg-icon-color-juicy-pink svg * {
            stroke: #F4524D !important;
        }

        .wolf-core-icon-background-color-juicy-pink {
            box-shadow: 0 0 0 0 #F4524D;
            background-color: #F4524D;
            color: #F4524D;
            border-color: #F4524D;
        }

        .wolf-core-icon-background-color-juicy-pink .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #F4524D;
            background-color: #F4524D;
        }

        .wolf-core-text-color-juicy-pink {
            color: #F4524D !important;
        }

        .wolf-core-background-color-sandy-brown {
            background-color: #F79468;
        }

        .wolf-core-border-color-sandy-brown {
            border-color: #F79468;
        }

        .wolf-core-button-background-color-sandy-brown {
            background-color: #F79468;
            color: #F79468;
            border-color: #F79468;
        }

        .wolf-core-button-background-color-sandy-brown .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #F79468;
            background-color: #F79468;
        }

        .wolf-core-icon-color-sandy-brown {
            color: #F79468;
        }

        .wolf-core-svg-icon-color-sandy-brown svg * {
            stroke: #F79468 !important;
        }

        .wolf-core-icon-background-color-sandy-brown {
            box-shadow: 0 0 0 0 #F79468;
            background-color: #F79468;
            color: #F79468;
            border-color: #F79468;
        }

        .wolf-core-icon-background-color-sandy-brown .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #F79468;
            background-color: #F79468;
        }

        .wolf-core-text-color-sandy-brown {
            color: #F79468 !important;
        }

        .wolf-core-background-color-purple {
            background-color: #B97EBB;
        }

        .wolf-core-border-color-purple {
            border-color: #B97EBB;
        }

        .wolf-core-button-background-color-purple {
            background-color: #B97EBB;
            color: #B97EBB;
            border-color: #B97EBB;
        }

        .wolf-core-button-background-color-purple .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #B97EBB;
            background-color: #B97EBB;
        }

        .wolf-core-icon-color-purple {
            color: #B97EBB;
        }

        .wolf-core-svg-icon-color-purple svg * {
            stroke: #B97EBB !important;
        }

        .wolf-core-icon-background-color-purple {
            box-shadow: 0 0 0 0 #B97EBB;
            background-color: #B97EBB;
            color: #B97EBB;
            border-color: #B97EBB;
        }

        .wolf-core-icon-background-color-purple .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #B97EBB;
            background-color: #B97EBB;
        }

        .wolf-core-text-color-purple {
            color: #B97EBB !important;
        }

        .wolf-core-background-color-accent {
            background-color: #d2b48c;
        }

        .wolf-core-border-color-accent {
            border-color: #d2b48c;
        }

        .wolf-core-button-background-color-accent {
            background-color: #d2b48c;
            color: #d2b48c;
            border-color: #d2b48c;
        }

        .wolf-core-button-background-color-accent .wolf-core-button-background-fill {
            box-shadow: 0 0 0 0 #d2b48c;
            background-color: #d2b48c;
        }

        .wolf-core-icon-color-accent {
            color: #d2b48c;
        }

        .wolf-core-svg-icon-color-accent svg * {
            stroke: #d2b48c !important;
        }

        .wolf-core-icon-background-color-accent {
            box-shadow: 0 0 0 0 #d2b48c;
            background-color: #d2b48c;
            color: #d2b48c;
            border-color: #d2b48c;
        }

        .wolf-core-icon-background-color-accent .wolf-core-icon-background-fill {
            box-shadow: 0 0 0 0 #d2b48c;
            background-color: #d2b48c;
        }

        .wolf-core-text-color-accent {
            color: #d2b48c !important;
        }
    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='unimate-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Gabarito%3A400%2C500%2C600%2C700%7CSpace+Grotesk%3A400%2C500%2C600%2C700&#038;ver=1.1.40#038;subset=latin,latin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mediaelement-css'
        href='https://preview-v2-wolfthemes.b-cdn.net/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'
        href='https://preview-v2-wolfthemes.b-cdn.net/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.7.2'
        type='text/css' media='all' />
    <style id='unimate-style-inline-css' type='text/css'>
        /* Color Scheme */
        html {
            --accent-color: #d2b48c !important;
            --strong-color: #212121 !important;
        }

        /* Body Background Color */
        body,
        .frame-border {
            background-color: #ddddcc;
        }

        /* Page Background Color */
        .site-header,
        .post-header-container,
        .content-inner,
        .loading-overlay,
        .no-hero #hero,
        .wolf-core-font-default {
            background-color: #ddddcc;
        }

        .menu-skin-dark.menu-sticky-soft.sticking:not(.overlay-menu-toggle):not(.mobile-menu-toggle) .nav-bar,
        .menu-skin-dark.menu-sticky-hard.sticking:not(.overlay-menu-toggle):not(.mobile-menu-toggle) .nav-bar {
            /*background-color: #ddddcc;*/
        }

        /* Submenu color */
        #site-navigation-primary-desktop .mega-menu-panel,
        #site-navigation-primary-desktop ul.sub-menu,
        #mobile-menu-panel,
        .offcanvas-menu-panel,
        .lateral-menu-panel,
        .wwcs-selector,
        .currency-switcher .woocs-style-1-dropdown .woocs-style-1-dropdown-menu {
            background: #fafafa;
        }

        .menu-skin-dark.menu-sticky-soft.sticking:not(.overlay-menu-toggle):not(.mobile-menu-toggle) .nav-bar,
        .menu-skin-dark.menu-sticky-hard.sticking:not(.overlay-menu-toggle):not(.mobile-menu-toggle) .nav-bar {
            /*background:#fafafa!important;*/
        }

        .currency-switcher .woocs-style-1-dropdown .woocs-style-1-dropdown-menu li {
            background-color: #fafafa !important;
        }

        .panel-closer-overlay {

            //background:#fafafa; } /* Sub menu Font Color */ .nav-menu-desktop li ul li:not(.menu-button-primary):not(.menu-button-secondary) .menu-item-text-container, .nav-menu-desktop li ul.sub-menu li:not(.menu-button-primary):not(.menu-button-secondary).menu-item-has-children > a:before, .nav-menu-desktop li ul li.not-linked > a:first-child .menu-item-text-container, .nav-menu-vertical li ul li:not(.menu-button-primary):not(.menu-button-secondary) .menu-item-text-container, .nav-menu-vertical li ul.sub-menu li:not(.menu-button-primary):not(.menu-button-secondary).menu-item-has-children > a:before, .nav-menu-vertical li ul li.not-linked > a:first-child .menu-item-text-container, .mega-menu-tagline-text, .wwcs-selector, .currency-switcher .woocs-style-1-dropdown .woocs-style-1-dropdown-menu{ color: #272727; } #close-side-panel-icon{ /*color: #272727!important;*/ } /*.nav-menu-vertical li a, .nav-menu-mobile li a, .nav-menu-vertical li.menu-item-has-children:before, .nav-menu-vertical li.page_item_has_children:before, .nav-menu-vertical li.active:before, .nav-menu-mobile li.menu-item-has-children:before, .nav-menu-mobile li.page_item_has_children:before, .nav-menu-mobile li.active:before{ color: #272727!important; }*/ .lateral-menu-panel .wolf-core-icon:before{ color: #272727!important; } .nav-menu-desktop li ul.sub-menu li.menu-item-has-children > a:before{ color: #272727; } /* Accent Color */ .accent, .text-accent, .text-accent-color{ color:#d2b48c; } .artist-meta a { color:#d2b48c; } #back-to-top:hover svg { stroke:#d2b48c } .lateral-menu-panel-inner ul.sub-menu li:hover > a span{ color:#d2b48c!important; } .oas-preview__back:hover, .ovs-action:hover, .wolf-core-theme-svg-animation svg path{ stroke: #d2b48c; } .author-box .author-name a:hover, .unimate-hover-color-accent:hover, .unimate-hover-accent:hover, svg.tbtn-special-frame path{ color:#d2b48c; } svg.tbtn-special-frame path{ stroke:#d2b48c!important; } .single-post-nav a{ color:#d2b48c; } .accent-color-is-black .wolf-core-font-color-light .accent{ color:white; } .filter-link.active{ background-color: #d2b48c!important; } .entry-product-grid .quickview-product-add-to-cart-icon, .widget_price_filter .ui-slider-horizontal .ui-slider-range, .cart-product-count{ background-color:#d2b48c; } /*.entry-product-grid .product-loop-buttons .product-quickview-button:hover, .entry-product-grid .product-loop-buttons .wolf_add_to_wishlist:hover { border-color: #d2b48c; background-color: #d2b48c; }*/ .product-layout-box-style-1 .quickview-product-add-to-cart-icon:before, .wolf-core-single-image-overlay-title span:after, .woocommerce-LoopProduct-link:hover{ color:#d2b48c; } .tagcloud a:hover, .widget_tag_cloud a:hover, .wp-block-tag-cloud a:hover{ background-color:#d2b48c; } .entry-post-skin-light:not(.entry-post-standard).entry-video:hover .video-play-button { border-left-color:#d2b48c!important; } .entry-post-standard .entry-thumbnail-overlay{ background-color:rgba( 210,180,140, 0.95); } .hamburger-link:hover .hamburger-btn-label{ color:#d2b48c; } .event-website a, .event-email a{ color:#d2b48c; } .entry-post-standard .entry-title a:hover, .entry-post-standard .entry-meta a:hover, .entry-post-grid .entry-title a:hover, .entry-post-grid .entry-meta a:hover, .entry-post-masonry .entry-title a:hover, .entry-post-masonry .entry-meta a:hover, .wp-block-latest-posts__post-title:hover{ /*color:#d2b48c!important;*/ } .widget_block ul li a:not(.wp-block-social-link-anchor):hover, .widget_archive ul li a:not(.wp-block-social-link-anchor):hover, .widget_categories ul li a:not(.wp-block-social-link-anchor):hover, .widget_meta ul li a:not(.wp-block-social-link-anchor):hover, .widget_nav_menu ul li a:not(.wp-block-social-link-anchor):hover, .widget_product_categories ul li a:not(.wp-block-social-link-anchor):hover, .widget_tag_cloud ul li a:not(.wp-block-social-link-anchor):hover, .widget_recent_entries ul li a:not(.wp-block-social-link-anchor):hover, .widget_pages ul li a:not(.wp-block-social-link-anchor):hover{ /*color:#d2b48c!important;*/ } .nav-menu-desktop li ul.sub-menu li:not(.menu-button-primary):not(.menu-button-secondary):not(.not-linked) a:hover > .menu-item-inner > .menu-item-text-container, .nav-menu-desktop li ul.sub-menu li:not(.menu-button-primary):not(.menu-button-secondary):not(.not-linked) a:focus > .menu-item-inner > .menu-item-text-container{ /*color:#d2b48c!important;*/ } mark, p.demo_store, .woocommerce-store-notice{ background-color:#d2b48c; } .nav-menu-desktop > li .link__mask:after, .nav-menu-vertical > li .link__mask:after{ color:#d2b48c; } /* Buttons */ .nav-button-text-accent .menu-item-inner{ color:#d2b48c; } .theme-button-text-accent{ color:#d2b48c!important; } .theme-button-text-accent svg path{ stroke:#d2b48c; } /* WooCommerce */ .star-rating span:before{ color:#d2b48c; } .group_table td a:hover{ color:#d2b48c; } /* Wolf Core */ .wolf-core-background-color-accent, .entry-product .minimal-player-play-button{ background-color:#d2b48c; } .accent-color-is-black .wolf-core-font-color-light .wolf_core_bar_color_filler{ background-color:white!important; } .wolf-core-highlight-accent{ background-color:#d2b48c; color:#fff; } .wolf-core-icon-background-color-accent{ box-shadow:0 0 0 0 #d2b48c; background-color:#d2b48c; color:#d2b48c; border-color:#d2b48c; } .wolf-core-icon-background-color-accent .wolf-core-icon-background-fill{ box-shadow:0 0 0 0 #d2b48c; background-color:#d2b48c; } .wolf-core-button-background-color-accent{ background-color:#d2b48c; color:#d2b48c; border-color:#d2b48c; } .wolf-core-button-background-color-accent .wolf-core-button-background-fill{ box-shadow:0 0 0 0 #d2b48c; background-color:#d2b48c; } .wolf-core-svg-icon-color-accent svg * { stroke:#d2b48c!important; } .wolf-core-one-page-nav-bullet-tip{ background-color: #d2b48c; } .wolf-core-one-page-nav-bullet-tip:before{ border-color: transparent transparent transparent #d2b48c; } .accent, .bypostauthor .avatar{ color:#d2b48c; } .wolf-core-button-color-button-accent, .more-link, .buton-accent{ background-color: #d2b48c; border-color: #d2b48c; } .wolf-core-ils-item-title:before { background-color: #d2b48c!important; } .group_table td a:hover{ color:#d2b48c; } input[type=submit]{ background-color: #d2b48c; border-color: #d2b48c; } /* icons */ .wolf-core-icon-color-accent{ color:#d2b48c; } .wolf-core-icon-background-color-accent{ box-shadow:0 0 0 0 #d2b48c; background-color:#d2b48c; color:#d2b48c; border-color:#d2b48c; } .wolf-core-icon-background-color-accent .wolf-core-icon-background-fill{ box-shadow:0 0 0 0 #d2b48c; background-color:#d2b48c; } #ajax-progress-bar, .cart-icon-product-count{ background:#d2b48c; } .background-accent{ background: #d2b48c!important; } .background-accent-inner .elementor-widget-container{ background: #d2b48c!important; } .mejs-container .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-container .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-container .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{ background: #d2b48c!important; } .trigger{ background-color: #d2b48c!important; border : solid 1px #d2b48c; } .bypostauthor .avatar { border: 3px solid #d2b48c; } ::selection { background: #d2b48c; } ::-moz-selection { background: #d2b48c; } /********************* WOLF ***********************/ .wolf-core-it-label{ color:#d2b48c; } .wolf-core-icon-box.wolf-core-icon-type-circle .wolf-core-icon-no-custom-style.wolf-core-hover-fill-in:hover, .wolf-core-icon-box.wolf-core-icon-type-square .wolf-core-icon-no-custom-style.wolf-core-hover-fill-in:hover { -webkit-box-shadow: inset 0 0 0 1em #d2b48c; box-shadow: inset 0 0 0 1em #d2b48c; border-color: #d2b48c; } .wolf-core-pricing-table-featured-text, .wolf-core-pricing-table-featured .wolf-core-pricing-table-button a{ background: #d2b48c; } .wolf-core-pricing-table-featured .wolf-core-pricing-table-price-strike:before { background-color: #d2b48c; } .wolf-core-team-member-social-container a:hover{ color: #d2b48c; } /* Main Text Color */ body, .wolf-core-font-dark, .nav-label{ color:#585858; } .spinner-color, .sk-child:before, .sk-circle:before, .sk-cube:before{ background-color: #212121!important; } /* Strong Text Color */ a, p strong, .products li .price, .products li .star-rating, blockquote, .wr-print-button, table.cart thead, #content table.cart thead, .work-meta-label, .wwcs-current-currency, .entry-featured-link, .author-description, .wolf-core-link-text, .entry-product-grid .woocommerce-Price-amount { /*color: #212121;*/ } .wolf-alert.success a, .wolf-alert.success a:hover, .wolf-alert.success b, .wolf-alert.success span, .wolf-alert.success strong, .woocommerce-error a, .woocommerce-error a:hover, .woocommerce-error b, .woocommerce-error span, .woocommerce-error strong, .woocommerce-info a, .woocommerce-info a:hover, .woocommerce-info b, .woocommerce-info span, .woocommerce-info strong, .woocommerce-message a, .woocommerce-message a:hover, .woocommerce-message b, .woocommerce-message span, .woocommerce-message strong{ /*color: #212121;*/ } .wolf-core-pricing-table-title{ color: #212121!important; } h1,h2,h3,h4,h5,h6, .wolf-core-font-dark h1:not(.wolf-core-service-title), .wolf-core-font-dark h2:not(.wolf-core-service-title), .wolf-core-font-dark h3:not(.wolf-core-service-title), .wolf-core-font-dark h4:not(.wolf-core-service-title), .wolf-core-font-dark h5:not(.wolf-core-service-title) .wolf-core-font-dark h6:not(.wolf-core-service-title), .wolf-core-font-dark strong, .wolf-core-font-dark b, .wolf-core-font-dark .wolf-core-counter, .wolf-core-font-dark .wolf-core-bigtext-link, .wolf-core-font-dark .wolf-core-fittext-link, .wolf-core-font-dark .wolf-core-pie-counter, .wolf-core-font-dark .wolf-core-icon-color-default, .sku, .wolf-core-font-dark .wolf-core-counter-text, .wolf-core-font-dark .wolf-core-video-opener-caption, .wolf-core-font-dark .wolf-core-list-has-icon ul li .fa, .wolf-core-font-dark .wolf-core-process-number.wolf-core-text-color-default, .wolf-core-font-dark .wolf-core-process-number.wolf-core-text-color-default:before, .wolf-core-font-dark .blockquote:before, .wolf-core-font-dark blockquote, .post-extra-meta, .comment-reply-title, .comment-reply-link{ color: #212121; } .comment-reply-link:hover{ color: #d2b48c; } .wolf-core-font-dark .wolf-core-process-icon-container{ border-color: #212121; } .bit-widget-container, .entry-link{ /*color: #212121;*/ } .single-product .entry-summary .woocommerce-Price-amount, .entry-post-standard .entry-title{ /*color: #212121!important;*/ } .wr-stars>span.wr-star-voted:before, .wr-stars>span.wr-star-voted~span:before{ color: #212121!important; } /* Border Color */ // .widget-title, // .woocommerce-tabs ul.tabs{ // border-bottom-color:rgba( 33,33,33, 0.03); // } .widget_layered_nav_filters ul li a{ border-color:rgba( 33,33,33, 0.03); } hr{ background:rgba( 33,33,33, 0.03); } .wolf-core-background-color-default.wolf-core-font-dark{ background-color:#ddddcc; }
            body,
            blockquote.wvc-testimonial-content,
            .tp-caption:not(h1):not(h2):not(h3):not(h4):not(h5) {
                font-family: Gabarito
            }

            .wvc-countdown-container .countdown-period,
            .bit-widget {
                font-family: Gabarito !important
            }

            .nav-menu li,
            .cta-container,
            .category-filter ul li a,
            .cart-panel-buttons a,
            .ac-header {
                font-family: 'Gabarito'
            }

            .nav-menu li,
            .cta-container,
            .category-filter ul li a,
            .cart-panel-buttons a,
            .ac-header {
                font-weight: 600
            }

            .nav-menu li,
            .cta-container,
            .category-filter ul li a,
            .cart-panel-buttons a,
            .ac-header {
                text-transform: uppercase
            }

            .nav-menu li,
            .cta-container,
            .category-filter ul li a,
            .cart-panel-buttons a,
            .ac-header {
                font-style: normal
            }

            .nav-menu li,
            .cta-container,
            .category-filter ul li a,
            .cart-panel-buttons a,
            .ac-header {
                letter-spacing: 1px
            }

            .nav-menu ul ul li:not(.not-linked) {
                font-family: default
            }

            .nav-menu ul ul li:not(.not-linked) {
                text-transform: none
            }

            .nav-menu ul ul li:not(.not-linked) {
                font-weight: 500
            }

            .nav-menu ul ul li:not(.not-linked) {
                letter-spacing: 0px !important;
            }

            .wolf-core-heading,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .post-title,
            .entry-title,
            h2.entry-title>.entry-link,
            h2.entry-title,
            .widget-title,
            .wvc-counter-text,
            .wvc-countdown-period,
            .event-date,
            .logo-text,
            .wvc-interactive-links,
            .wvc-interactive-overlays,
            .heading-font,
            .wp-block-latest-posts__list li>a,
            .wolf-core-textual-showcase-item,
            .wolf-core-interactive-link-item,
            .wolf-core-marquee-text,
            .wolf-core-il-marquee__inner,
            .heading-font,
            .loading-text,
            .overlay-menu-container .nav-menu li,
            .comment-reply-title,
            .wolf-core-pricing-table-price,
            .loading-logo-text,
            .caption-title,
            .event-display-interactive-link .menu__item-title {
                font-family: 'Gabarito'
            }

            .wolf-core-heading,
            h1:not(.wvc-bigtext),
            h2:not(.wvc-bigtext),
            h3:not(.wvc-bigtext),
            h4:not(.wvc-bigtext),
            h5:not(.wvc-bigtext),
            .post-title,
            .entry-title,
            h2.entry-title>.entry-link,
            h2.entry-title,
            .widget-title,
            .wvc-counter-text,
            .wvc-countdown-period,
            .location-title,
            .logo-text,
            .wvc-interactive-links,
            .wvc-interactive-overlays,
            .heading-font,
            .wp-block-latest-posts__list li>a,
            .wolf-core-textual-showcase-item,
            .wolf-core-interactive-link-item,
            .wolf-core-marquee-text,
            .wolf-core-il-marquee__inner,
            .heading-font,
            .loading-text,
            .overlay-menu-container .nav-menu li,
            .comment-reply-title,
            .wolf-core-pricing-table-price,
            .loading-logo-text,
            .caption-title,
            .event-display-interactive-link .menu__item-title {
                font-weight: 700
            }

            .wolf-core-heading,
            h1:not(.wvc-bigtext),
            h2:not(.wvc-bigtext),
            h3:not(.wvc-bigtext),
            h4:not(.wvc-bigtext),
            h5:not(.wvc-bigtext),
            .post-title,
            .entry-title,
            h2.entry-title>.entry-link,
            h2.entry-title,
            .widget-title,
            .wvc-counter-text,
            .wvc-countdown-period,
            .location-title,
            .logo-text,
            .wvc-interactive-links,
            .wvc-interactive-overlays,
            .heading-font,
            .wp-block-latest-posts__list li>a,
            .wolf-core-textual-showcase-item,
            .wolf-core-interactive-link-item,
            .wolf-core-marquee-text,
            .wolf-core-il-marquee__inner,
            .heading-font,
            .loading-text,
            .overlay-menu-container .nav-menu li,
            .comment-reply-title,
            .wolf-core-pricing-table-price,
            .loading-logo-text,
            .caption-title,
            .event-display-interactive-link .menu__item-title {
                text-transform: none
            }

            .wolf-core-heading,
            h1:not(.wvc-bigtext),
            h2:not(.wvc-bigtext),
            h3:not(.wvc-bigtext),
            h4:not(.wvc-bigtext),
            h5:not(.wvc-bigtext),
            .post-title,
            .entry-title,
            h2.entry-title>.entry-link,
            h2.entry-title,
            .widget-title,
            .wvc-counter-text,
            .wvc-countdown-period,
            .location-title,
            .logo-text,
            .wvc-interactive-links,
            .wvc-interactive-overlays,
            .heading-font,
            .wp-block-latest-posts__list li>a,
            .wolf-core-textual-showcase-item,
            .wolf-core-interactive-link-item,
            .wolf-core-marquee-text,
            .wolf-core-il-marquee__inner,
            .heading-font,
            .loading-text,
            .overlay-menu-container .nav-menu li,
            .comment-reply-title,
            .wolf-core-pricing-table-price,
            .loading-logo-text,
            .caption-title,
            .event-display-interactive-link .menu__item-title {
                font-style: normal
            }

            .logo {
                max-width: 280px !important;
            }

            .nav-menu li.hot>a .menu-item-text-container:before {
                content: "hot";
            }

            .nav-menu li.new>a .menu-item-text-container:before {
                content: "new";
            }

            .nav-menu li.sale>a .menu-item-text-container:before {
                content: "sale";
            }

            .side-panel {
                background-color: #827f6c;
                background-color: rgba(130, 127, 108, 1);
            }

            html {
                --border-radius: 0px;
            }

            /*.overlay-menu-toggle .overlay-menu-panel-inner, .overlay-menu-panel:after { background-color: #212121; }*/
            .overlay-menu-panel .overlay__path {
                fill: #212121;
            }

            /*.side-panel:after, .cart-side-panel:after, .login-form-inner { background-color: #827f6c; }*/
            #mobile-menu-panel:after {
                background-color: #827f6c;
            }

            .menu-line,
            .cta-line {
                background-color: #a89e9a;
            }
    </style>
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-34 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1400px;
        }

        .e-con {
            --container-max-width: 1400px;
        }

        .elementor-widget:not(:last-child) {
            margin-block-end: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px 20px;
            --widgets-spacing-row: 20px;
            --widgets-spacing-column: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-3183 .elementor-element.elementor-element-2212f67 {
            --display: flex;
            --gap: 0px 0px;
            --row-gap: 0px;
            --column-gap: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }
    </style>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" id="jquery-js-after">
        jQuery(document).ready(function($) {
            $('#wp-admin-bar-my-sites-search.hide-if-no-js').show();
            $('#wp-admin-bar-my-sites-search input').keyup(function() {

                var searchValRegex = new RegExp($(this).val(), 'i');

                $('#wp-admin-bar-my-sites-list > li.menupop').hide().filter(function() {

                    return searchValRegex.test($(this).find('> a').text());

                }).show();

            });
        });
    </script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/unimate\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/unimate\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/preview.wolfthemes.store\/unimate\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script type="text/javascript" id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/unimate\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/unimate\/?wc-ajax=%%endpoint%%",
            "i18n_password_show": "Show password",
            "i18n_password_hide": "Hide password"
        };
    </script>
    <link rel="https://api.w.org/" href="https://preview.wolfthemes.store/unimate/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://preview.wolfthemes.store/unimate/wp-json/wp/v2/pages/3183" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://preview.wolfthemes.store/unimate/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <meta name="generator" content="WolfEvents 1.3.3" />
    <meta name="generator" content="WolfPortfolio 1.2.3" />
    <meta name="generator" content="WooCommerce 9.7.1" />
    <link rel="canonical" href="https://preview.wolfthemes.store/unimate/vertical-slider/" />
    <link rel='shortlink' href='https://preview.wolfthemes.store/unimate/?p=3183' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://preview.wolfthemes.store/unimate/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpreview.wolfthemes.store%2Funimate%2Fvertical-slider%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://preview.wolfthemes.store/unimate/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpreview.wolfthemes.store%2Funimate%2Fvertical-slider%2F&#038;format=xml" />
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style><noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.28.1; features: additional_custom_breakpoints, e_local_google_fonts, e_element_cache; settings: css_print_method-internal, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.26 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style class='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://preview.wolfthemes.store/app/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://preview.wolfthemes.store/app/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="stylesheet" href="https://use.typekit.net/gsl3wcd.css">
    <style>
        .sbi_info {
            display: none !important
        }

        .we-date-format-custom {
            width: 35px;
        }

        /* Insta icon quickfix  */
        .sbi_item:not(.sbi_type_video) .sbi_photo:after {
            font-family: Socicon !important;
            content: "\e044" !important;
        }

        /* New insta plugins padding fix*/
        #sb_instagram #sbi_images {
            padding: 0 !important;
        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .logo-text {
            font-family: Afronaut;
        }

        #inner-pages .gallery__item {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .coupon {
            float: none;
            display: flex;
            align-items: center;
            font-size: 18px;
            width: 100% !important;
        }

        .coupon .button {
            margin-top: 0 !important;
        }

        .woocommerce-checkout-review-order-table {
            font-size: 18px !important;
        }

        .wolf-core-interactive-link-bg img {
            height: 100vh
        }

        .is-blog .content-wrapper {
            padding-top: 50px !important;
        }
    </style>
</head>

<body
    class="page-template-default page page-id-3183 theme-unimate wolf-events unimate woocommerce-no-js wolf not-edge page-title-vertical-slider loading-animation-type-none site-layout-wide button-style-square global-skin-light skin-light wolf-core-yes menu-layout-top-justify menu-style-transparent menu-skin-light menu-width-wide mega-menu-width-fullwidth menu-hover-style- menu-sticky-none submenu-bg-light accent-color-dark menu-items-visibility- side-panel-position-right side-panel-bg-light has-hero hero-font-light body-font-gabarito heading-font-gabarito menu-font-gabarito submenu-font-default transition-animation-type- has-text-logo logo-visibility-always is-page has-wvc hero-layout-none post-is-title-text post-is-hero footer-type-hidden footer-skin-dark footer-widgets-layout-none footer-layout-boxed bottom-bar-layout-centered bottom-bar-visible has-404-plugin desktop desktop-screen wolf-core-body wolf-core-layout wolf-core-elementor wolf-core-elementor-page wolf-core-2-0-34 wolf-core-is-desktop wolf-core-not-edge wolf-core-not-firefox elementor-default elementor-kit-34 elementor-page elementor-page-3183"
    data-hero-font-tone="light" data-post-id="3183">
    <div id="offcanvas"></div>
    <div id="mobile-menu-panel" class="panel-font-light" data-lenis-prevent> <a href="#"
            id="close-mobile-menu-icon" class="close-panel-button toggle-mobile-menu">X</a>
        <div id="mobile-menu-panel-inner" data-lenis-prevent>
            <div id="mobile-menu-container">
                <div class="menu-mobile-menu-container">
                    <ul id="site-navigation-mobile-mobile" class="nav-menu nav-menu-mobile">
                        <li id="menu-item-5268"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5268">
                            <a href="#"><span class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Home</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5253"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-5253">
                                    <a href="https://preview.wolfthemes.store/unimate/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Main Home</span></span></a></li>
                                <li id="menu-item-5276"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5276"><a
                                        href="https://preview.wolfthemes.store/unimate/art-gallery-home/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Art Gallery Home</span></span></a></li>
                                <li id="menu-item-5277"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5277"><a
                                        href="https://preview.wolfthemes.store/unimate/interactive-links/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Interactive Links</span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5280"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5280">
                            <a href="#"><span class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Blog</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5250"><a
                                        href="https://preview.wolfthemes.store/unimate/blog/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Blog List</span></span></a></li>
                                <li id="menu-item-5271"
                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5271"><a
                                        href="https://preview.wolfthemes.store/unimate/2023/06/14/standard/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Single Post</span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5288"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5288">
                            <a href="#"><span class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Events</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5287"
                                    class="menu-item menu-item-type-post_type menu-item-object-event menu-item-5287"><a
                                        href="https://preview.wolfthemes.store/unimate/event/canvas-chronicles/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Single Event</span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5272"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5272">
                            <a href="#"><span class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Pages</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5251"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5251"><a
                                        href="https://preview.wolfthemes.store/unimate/about-us/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">About Us</span></span></a></li>
                                <li id="menu-item-5278"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5278"><a
                                        href="https://preview.wolfthemes.store/unimate/opening-hours/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Opening Hours</span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5273"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5273">
                            <a href="#"><span class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Shop</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5252"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5252"><a
                                        href="https://preview.wolfthemes.store/unimate/shop/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Product List</span></span></a></li>
                                <li id="menu-item-5274"
                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-5274">
                                    <a href="https://preview.wolfthemes.store/unimate/product/a-nobles-portrait/"><span
                                            class="menu-item-inner"><span class="menu-item-text-container"
                                                itemprop="name">Single Product</span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5249"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5249"><a
                                href="https://preview.wolfthemes.store/unimate/landing/"><span
                                    class="menu-item-inner"><span class="menu-item-text-container"
                                        itemprop="name">Landing</span></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget-area">
                <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                    <div class="widget_text widget-content">
                        <div class="textwidget custom-html-widget">124 W Whitner St, 65 -A6 Anderson <br>
                            unimate@wolfthemes.com<br> + 3565 88 4456-78 <br><br> Open daily 09:00-19:00 <br>Monday
                            Closed</div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div id="side-panel" class="side-panel ">
        <div class="side-panel-inner">
            <div id="side-panel-widgets" class="sidebar-container sidebar-side-panel" role="complementary"
                itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
                <div class="sidebar-inner">
                    <div class="widget-area">
                        <div class="sp-widget-area-main">
                            <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                                <div class="widget_text widget-content">
                                    <div class="textwidget custom-html-widget">124 W Whitner St, 65 -A6 Anderson <br>
                                        unimate@wolfthemes.com<br> + 3565 88 4456-78 <br><br> Open daily 09:00-19:00
                                        <br>Monday Closed</div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-container">
        <div id="page" class="hfeed site">
            <div id="page-content">
                <header id="masthead" class="site-header clearfix" itemscope itemtype="http://schema.org/WPHeader">
                    <p class="site-name" itemprop="headline">Unimate</p>
                    <p class="site-description" itemprop="description">Art WordPress Theme</p>
                    <div id="header-content">
                        <div id="desktop-navigation" class="clearfix">
                            <div id="nav-bar" class="nav-bar" data-menu-layout="top-justify">
                                <div class="flex-wrap">
                                    <div class="logo-container">
                                        <div class="logo logo-is-text"><a class="logo-text logo-link"
                                                href="https://preview.wolfthemes.store/unimate/"
                                                rel="home">Unimate</a></div>
                                    </div>
                                    <nav class="menu-container" itemscope="itemscope"
                                        itemtype="https://schema.org/SiteNavigationElement">
                                        <div class="menu-primary-menu-container">
                                            <ul id="site-navigation-primary-desktop"
                                                class="nav-menu nav-menu-desktop">
                                                <li id="menu-item-18"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-parent-item menu-item-18 menu-item-18 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Home</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-59"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-59 menu-item-59 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Main Home</span></span></a>
                                                        </li>
                                                        <li id="menu-item-203"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203 menu-item-203 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/art-gallery-home/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Art Gallery
                                                                        Home</span></span></a></li>
                                                        <li id="menu-item-159"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159 menu-item-159 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/interactive-thumbnails/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Interactive
                                                                        Thumbs</span></span></a></li>
                                                        <li id="menu-item-58"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 menu-item-58 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/interactive-links/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Interactive
                                                                        Links</span></span></a></li>
                                                        <li id="menu-item-189"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189 menu-item-189 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/textual-showcase/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Textual
                                                                        Showcase</span></span></a></li>
                                                        <li id="menu-item-192"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-192 menu-item-192 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/parallax/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Parallax</span></span></a></li>
                                                        <li id="menu-item-201"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201 menu-item-201 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/artist-home/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Artist Home</span></span></a>
                                                        </li>
                                                        <li id="menu-item-202"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202 menu-item-202 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/portfolio-grid/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Portfolio
                                                                        Grid</span></span></a></li>
                                                        <li id="menu-item-3188"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3183 current_page_item menu-item-3188 menu-item-3188 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/vertical-slider/"
                                                                aria-current="page" class="menu-link"
                                                                itemprop="url"><span class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Vertical
                                                                        Slider</span></span></a></li>
                                                        <li id="menu-item-5061"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5061 menu-item-5061 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/landing/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Landing</span></span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-19"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-19 menu-item-19 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Pages</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-27"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27 menu-item-27 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/about-us/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">About Us</span></span></a></li>
                                                        <li id="menu-item-26"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26 menu-item-26 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/contact-us/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Contact Us</span></span></a>
                                                        </li>
                                                        <li id="menu-item-5883"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5883 menu-item-5883 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/plan-your-visit/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Plan your
                                                                        Visit</span></span></a></li>
                                                        <li id="menu-item-281"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-281 menu-item-281 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/our-artists/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Our Artists</span></span></a>
                                                        </li>
                                                        <li id="menu-item-278"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-278 menu-item-278 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/find-us/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Find Us</span></span></a></li>
                                                        <li id="menu-item-279"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279 menu-item-279 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/opening-hours/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Opening Hours</span></span></a>
                                                        </li>
                                                        <li id="menu-item-23"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 menu-item-23 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/coming-soon/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Coming Soon</span></span></a>
                                                        </li>
                                                        <li id="menu-item-24"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 menu-item-24 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/maintenance/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Maintenance</span></span></a>
                                                        </li>
                                                        <li id="menu-item-25"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25 menu-item-25 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/error-404/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Error 404</span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-20"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-20 menu-item-20 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Shop</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3065"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3065 menu-item-3065 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/shop/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Shop</span></span></a></li>
                                                        <li id="menu-item-21"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-21 menu-item-21 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Pages</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-320"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320 menu-item-320 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/my-account/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">My
                                                                                account</span></span></a></li>
                                                                <li id="menu-item-319"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-319 menu-item-319 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/checkout/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Checkout</span></span></a>
                                                                </li>
                                                                <li id="menu-item-318"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318 menu-item-318 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/cart/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Cart</span></span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-6083"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product menu-item-6083 menu-item-6083 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/product/lady-seraphina/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Single
                                                                        Product</span></span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-260"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-260 menu-item-260 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Events</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3064"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-3064 menu-item-3064 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">List Types</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-3060"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3060 menu-item-3060 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/events-list/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Events
                                                                                List</span></span></a></li>
                                                                <li id="menu-item-3061"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3061 menu-item-3061 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/event-slider/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Event
                                                                                Slider</span></span></a></li>
                                                                <li id="menu-item-3062"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3062 menu-item-3062 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/event-accordion/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Event
                                                                                Accordion</span></span></a></li>
                                                                <li id="menu-item-3077"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3077 menu-item-3077 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/event-vertical-slider/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Vertical
                                                                                Slider</span></span></a></li>
                                                                <li id="menu-item-3063"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3063 menu-item-3063 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/event-type/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Event
                                                                                Types</span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-5289"
                                                            class="menu-item menu-item-type-post_type menu-item-object-event menu-item-5289 menu-item-5289 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="https://preview.wolfthemes.store/unimate/event/canvas-chronicles/"
                                                                class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Single Event</span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-22"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-22 menu-item-22 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Blog</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3066"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-3066 menu-item-3066 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">List Types</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-210"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210 menu-item-210 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/blog/sidebar-left/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Sidebar
                                                                                Left</span></span></a></li>
                                                                <li id="menu-item-211"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211 menu-item-211 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/blog/sidebar-right/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Sidebar
                                                                                Right</span></span></a></li>
                                                                <li id="menu-item-213"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213 menu-item-213 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/blog/grid/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Grid</span></span></a>
                                                                </li>
                                                                <li id="menu-item-212"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-212 menu-item-212 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/blog/grid-modern/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Grid
                                                                                Modern</span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-28 menu-item-28 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Single Posts</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-5087"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5087 menu-item-5087 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/2023/06/14/standard/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Standard
                                                                                Post</span></span></a></li>
                                                                <li id="menu-item-5085"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5085 menu-item-5085 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/2023/06/14/video/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Video
                                                                                Post</span></span></a></li>
                                                                <li id="menu-item-5086"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-parent-item menu-item-5086 menu-item-5086 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/2023/06/14/audio/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Audio
                                                                                Post</span></span></a></li>
                                                                <li id="menu-item-5088"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5088 menu-item-5088 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/2023/06/14/quote/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Quote</span></span></a>
                                                                </li>
                                                                <li id="menu-item-5089"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5089 menu-item-5089 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/2023/06/14/link/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Link</span></span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-63"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-63 menu-item-63 menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Portfolio</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-64"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-64 menu-item-64 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">List Types</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-3286"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3286 menu-item-3286 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/portfolio-standard/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Standard</span></span></a>
                                                                </li>
                                                                <li id="menu-item-3285"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3285 menu-item-3285 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/portfolio-info-on-hover/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Info On
                                                                                Hover</span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-66"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-66 menu-item-66 menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Single
                                                                        Projects</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-5111"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5111 menu-item-5111 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/bronze-figurative-sculpture/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Small
                                                                                Images</span></span></a></li>
                                                                <li id="menu-item-5112"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5112 menu-item-5112 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/whimsical-illustrations/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Big
                                                                                Images</span></span></a></li>
                                                                <li id="menu-item-5113"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5113 menu-item-5113 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/radiant-reverie/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Small
                                                                                Gallery</span></span></a></li>
                                                                <li id="menu-item-5114"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5114 menu-item-5114 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/surreal-elegance/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Big
                                                                                Gallery</span></span></a></li>
                                                                <li id="menu-item-5115"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5115 menu-item-5115 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/golden-horizons/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Small
                                                                                Slider</span></span></a></li>
                                                                <li id="menu-item-5116"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-work menu-item-5116 menu-item-5116 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/work/celestial-beauty/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Big
                                                                                Slider</span></span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-3054"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-3054 menu-item-3054 mega-menu menu-item-icon-before mega-menu-4-cols">
                                                    <a href="#" class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Shows</span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-5172"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5172 menu-item-5172 not-linked menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Exhibitions and
                                                                        Events</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-5866"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5866 menu-item-5866 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/this-month/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">This
                                                                                Month</span></span></a></li>
                                                                <li id="menu-item-5868"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-event menu-item-5868 menu-item-5868 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/event/canvas-chronicles/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Canvas
                                                                                Chronicles</span></span></a></li>
                                                                <li id="menu-item-5867"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5867 menu-item-5867 menu-item-icon-before mega-menu-4-cols">
                                                                    <a href="https://preview.wolfthemes.store/unimate/our-artists/"
                                                                        class="menu-link" itemprop="url"><span
                                                                            class="menu-item-inner"><span
                                                                                class="menu-item-text-container"
                                                                                itemprop="name">Our
                                                                                Artists</span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-5173"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-5173 menu-item-5173 not-linked menu-item-icon-before mega-menu-4-cols">
                                                            <a href="#" class="menu-link" itemprop="url"><span
                                                                    class="menu-item-inner"><span
                                                                        class="menu-item-text-container"
                                                                        itemprop="name">Current
                                                                        Events</span></span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-5174"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5174 menu-item-5174 menu-item-icon-before mega-menu-4-cols">
                                                                    <span class="event-grid-menu"><span
                                                                            class="event-grid-menu-entry">
                                                                            <meta itemprop="name"
                                                                                content="Abstract Fusion">
                                                                            <meta itemprop="url"
                                                                                content="https://preview.wolfthemes.store/unimate/event/abstract-fusion/">
                                                                            <meta itemprop="image"
                                                                                content="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/629067813-1024x574.jpg">
                                                                            <meta itemprop="description"
                                                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...">
                                                                            <div class="entry-event-custom_list-inner">
                                                                                <div
                                                                                    class="entry-event-custom_list-image entry-event-img">
                                                                                    <a
                                                                                        href="https://preview.wolfthemes.store/unimate/event/abstract-fusion/">
                                                                                        <img fetchpriority="high"
                                                                                            class=" resized-thumbnail "
                                                                                            src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/629067813-350x200.jpg"
                                                                                            width="350"
                                                                                            height="200"
                                                                                            alt="An art gallery with beautiful paintings displayed on minimalist white walls. Generative AI"
                                                                                            title="An art gallery with beautiful paintings displayed on minimalist" /></a>
                                                                                </div>
                                                                                <div class="entry-event-date"> <span>18
                                                                                        Oct - 22 Oct</span></div>
                                                                                <div
                                                                                    class="entry-event-title-container">
                                                                                    <h3 itemprop="name"
                                                                                        class="entry-event-title entry-title">
                                                                                        <a itemprop="url"
                                                                                            class="entry-event-title-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event/abstract-fusion/">
                                                                                            Abstract Fusion </a></h3>
                                                                                </div>
                                                                                <div class="entry-event-description">
                                                                                    <div
                                                                                        class="entry-event-categories">
                                                                                        <a class="event-type-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event-type/painting/">Painting</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </span><span class="event-grid-menu-entry">
                                                                            <meta itemprop="name"
                                                                                content="Brushstrokes &#038; Beyond">
                                                                            <meta itemprop="url"
                                                                                content="https://preview.wolfthemes.store/unimate/event/brushstrokes-beyond/">
                                                                            <meta itemprop="image"
                                                                                content="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/327969992-1024x795.jpg">
                                                                            <meta itemprop="description"
                                                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...">
                                                                            <div class="entry-event-custom_list-inner">
                                                                                <div
                                                                                    class="entry-event-custom_list-image entry-event-img">
                                                                                    <a
                                                                                        href="https://preview.wolfthemes.store/unimate/event/brushstrokes-beyond/">
                                                                                        <img class=" resized-thumbnail "
                                                                                            src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/327969992-350x200.jpg"
                                                                                            width="350"
                                                                                            height="200"
                                                                                            alt="Vienna, Austria. 2019/10/23. &quot;The Calling of the Apostle Matthew"
                                                                                            title="Vienna, Austria. 2019/10/23. &quot;The Calling of the Apostle Matthew" /></a>
                                                                                </div>
                                                                                <div class="entry-event-date"> <span>18
                                                                                        Nov - 22 Nov</span></div>
                                                                                <div
                                                                                    class="entry-event-title-container">
                                                                                    <h3 itemprop="name"
                                                                                        class="entry-event-title entry-title">
                                                                                        <a itemprop="url"
                                                                                            class="entry-event-title-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event/brushstrokes-beyond/">
                                                                                            Brushstrokes &#038; Beyond
                                                                                        </a></h3>
                                                                                </div>
                                                                                <div class="entry-event-description">
                                                                                    <div
                                                                                        class="entry-event-categories">
                                                                                        <a class="event-type-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event-type/painting/">Painting</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </span><span class="event-grid-menu-entry">
                                                                            <meta itemprop="name"
                                                                                content="Artistic Odyssey">
                                                                            <meta itemprop="url"
                                                                                content="https://preview.wolfthemes.store/unimate/event/artistic-odyssey/">
                                                                            <meta itemprop="image"
                                                                                content="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/502727397-1024x682.jpg">
                                                                            <meta itemprop="description"
                                                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...">
                                                                            <div class="entry-event-custom_list-inner">
                                                                                <div
                                                                                    class="entry-event-custom_list-image entry-event-img">
                                                                                    <a
                                                                                        href="https://preview.wolfthemes.store/unimate/event/artistic-odyssey/">
                                                                                        <img class=" resized-thumbnail "
                                                                                            src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/502727397-350x200.jpg"
                                                                                            width="350"
                                                                                            height="200"
                                                                                            alt="Bronze color gypsum copy of ancient statue of Diana head for artists. Plaster sculpture of woman face. Diana in Roman mythology the goddess of nature and hunting. Renaissance epoch sample. Template."
                                                                                            title="Plaster sculpture of woman face. Bronze color gypsum copy of ancient statue of Diana head for artists. Diana in Roman mythology the goddess of nature and hunting. Renaissance epoch sample. Template." /></a>
                                                                                </div>
                                                                                <div class="entry-event-date"> <span>18
                                                                                        Nov - 22 Nov</span></div>
                                                                                <div
                                                                                    class="entry-event-title-container">
                                                                                    <h3 itemprop="name"
                                                                                        class="entry-event-title entry-title">
                                                                                        <a itemprop="url"
                                                                                            class="entry-event-title-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event/artistic-odyssey/">
                                                                                            Artistic Odyssey </a></h3>
                                                                                </div>
                                                                                <div class="entry-event-description">
                                                                                    <div
                                                                                        class="entry-event-categories">
                                                                                        <a class="event-type-link"
                                                                                            href="https://preview.wolfthemes.store/unimate/event-type/sculpture/">Sculpture</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </span></span></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="cta-container">
                                        <div class="menu-secondary-menu-container">
                                            <ul id="site-navigation-secondary-desktop"
                                                class="nav-menu nav-menu-desktop">
                                                <li id="menu-item-3249"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3249 menu-item-3249 menu-button-primary menu-item-icon-before mega-menu-4-cols">
                                                    <a href="https://preview.wolfthemes.store/unimate/purchase"
                                                        class="menu-link" itemprop="url"><span
                                                            class="menu-item-inner"><span
                                                                class="menu-item-text-container"
                                                                itemprop="name">Tickets</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="cta-container"> <button
                                            class="hamburger-link toggle-mobile-menu unbutton side-panel-hamburger">
                                            <span class="hamburger-btn__hamburger"> <span
                                                    class="hamburger-btn__span hbgl--1"></span> <span
                                                    class="hamburger-btn__span hbgl--2"></span> <span
                                                    class="hamburger-btn__span hbgl--3"></span> </span> </button></div>
                                </div>
                            </div>
                        </div>
                        <div id="mobile-navigation">
                            <div id="mobile-bar" class="nav-bar">
                                <div class="flex-mobile-wrap">
                                    <div class="logo-container">
                                        <div class="logo logo-is-text"><a class="logo-text logo-link"
                                                href="https://preview.wolfthemes.store/unimate/"
                                                rel="home">Unimate</a></div>
                                    </div>
                                    <div class="cta-container"></div>
                                    <div class="hamburger-container"> <button
                                            class="hamburger-link toggle-mobile-menu unbutton side-panel-hamburger">
                                            <span class="hamburger-btn__hamburger"> <span
                                                    class="hamburger-btn__span hbgl--1"></span> <span
                                                    class="hamburger-btn__span hbgl--2"></span> <span
                                                    class="hamburger-btn__span hbgl--3"></span> </span> </button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div id="main" class="site-main clearfix">
                    <div id="mobile-panel-closer-overlay" class="panel-closer-overlay toggle-mobile-menu"></div>
                    <div id="panel-closer-overlay" class="panel-closer-overlay toggle-side-panel toggle-cart"></div>
                    <div class="site-content">
                        <div class="content-inner section wvc-row wolf-core-row">
                            <div class="content-wrapper">
                                <div id="primary" class="content-area">
                                    <main id="content" class="clearfix">
                                        <div class="page-entry-content clearfix">
                                            <div data-elementor-type="wp-page" data-elementor-id="3183"
                                                class="elementor elementor-3183">
                                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-2212f67 e-con-full e-flex e-con e-parent"
                                                    data-font-skin="" data-color-tone="" data-id="2212f67"
                                                    data-element_type="container">
                                                    <div class="elementor-element elementor-element-90a3bd0 elementor-widget elementor-widget-event-index"
                                                        data-id="90a3bd0" data-element_type="widget"
                                                        data-widget_type="event-index.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="event-grid-container">
                                                                <div id="index-49056" data-post-type="event"
                                                                    data-params="{&quot;post_type&quot;:&quot;event&quot;,&quot;posts_per_page&quot;:6,&quot;item_animation&quot;:&quot;none&quot;,&quot;offset&quot;:2,&quot;overlay_color&quot;:&quot;black&quot;,&quot;overlay_text_color&quot;:&quot;white&quot;,&quot;overlay_opacity&quot;:44,&quot;caption_text_alignment&quot;:&quot;center&quot;,&quot;caption_v_align&quot;:&quot;middle&quot;,&quot;post_display&quot;:&quot;standard&quot;,&quot;post_metro_pattern&quot;:&quot;auto&quot;,&quot;post_module&quot;:&quot;grid&quot;,&quot;post_thumbnail_size&quot;:&quot;standard&quot;,&quot;post_layout&quot;:&quot;standard&quot;,&quot;post_excerpt_type&quot;:&quot;auto&quot;,&quot;post_excerpt_length&quot;:&quot;shorten&quot;,&quot;post_display_elements&quot;:&quot;show_thumbnail,show_date,show_text,show_category,show_tags&quot;,&quot;page_display&quot;:&quot;grid&quot;,&quot;work_display&quot;:&quot;grid&quot;,&quot;work_module&quot;:&quot;grid&quot;,&quot;work_thumbnail_size&quot;:&quot;standard&quot;,&quot;work_layout&quot;:&quot;overlay&quot;,&quot;work_category_filter&quot;:true,&quot;work_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;work_hover_effect&quot;:&quot;default&quot;,&quot;product_display&quot;:&quot;grid&quot;,&quot;product_metro_pattern&quot;:&quot;pattern-1&quot;,&quot;product_module&quot;:&quot;grid&quot;,&quot;release_display&quot;:&quot;grid&quot;,&quot;release_metro_pattern&quot;:&quot;pattern-1&quot;,&quot;release_hover_effect&quot;:&quot;default&quot;,&quot;release_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;release_module&quot;:&quot;grid&quot;,&quot;release_thumbnail_size&quot;:&quot;square&quot;,&quot;release_layout&quot;:&quot;standard&quot;,&quot;event_display&quot;:&quot;liquid-slider&quot;,&quot;timeline&quot;:&quot;future&quot;,&quot;mp_event_display&quot;:&quot;grid&quot;,&quot;mp_event_module&quot;:&quot;grid&quot;,&quot;video_display&quot;:&quot;grid&quot;,&quot;video_layout&quot;:&quot;overlay&quot;,&quot;video_module&quot;:&quot;grid&quot;,&quot;video_onclick&quot;:&quot;lightbox&quot;,&quot;video_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;artist_display&quot;:&quot;list&quot;,&quot;artist_metro_pattern&quot;:&quot;auto&quot;,&quot;artist_hover_effect&quot;:&quot;default&quot;,&quot;artist_module&quot;:&quot;grid&quot;,&quot;artist_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;artist_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_display&quot;:&quot;grid&quot;,&quot;gallery_module&quot;:&quot;grid&quot;,&quot;gallery_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_custom_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_layout&quot;:&quot;standard&quot;,&quot;gallery_category_filter&quot;:true,&quot;gallery_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;gallery_hover_effect&quot;:&quot;default&quot;,&quot;attachment_display&quot;:&quot;masonry_horizontal&quot;,&quot;attachment_thumbnail_size&quot;:&quot;standard&quot;,&quot;attachment_custom_thumbnail_size&quot;:&quot;standard&quot;,&quot;job_display&quot;:&quot;list&quot;,&quot;context&quot;:&quot;elementor&quot;,&quot;el_id&quot;:&quot;index-49056&quot;,&quot;isShortcode&quot;:true,&quot;event_layout&quot;:&quot;overlay&quot;,&quot;event_by_date_type&quot;:&quot;event_date_future&quot;,&quot;_transform_keep_proportions&quot;:&quot;yes&quot;,&quot;_transform_keep_proportions_hover&quot;:&quot;yes&quot;}"
                                                                    class="clearfix items wvc-element wolf-core-element entry-grid-loading event-items events caption-text-align-center caption-valign-middle grid-padding- display-liquid-slider event-display-liquid-slider module-grid event-module-grid items-thumbnail-size-standard layout-overlay event-layout-overlay pagination-none grid no-filtered-content"
                                                                    data-scroll data-scroll-css-progress></div>
                                                            </div>
                                                            <div class="liquid-slider-content" id="liquid-slider-app">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="entry-meta page-entry-meta"></footer>
                                    </main>
                                </div>
                            </div>
                        </div>
                        <style id="elementor-post-255">
                            .elementor-255 .elementor-element.elementor-element-e70e577 {
                                --display: flex;
                                --flex-direction: row;
                                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
                                --container-widget-height: 100%;
                                --container-widget-flex-grow: 1;
                                --container-widget-align-self: stretch;
                                --flex-wrap-mobile: wrap;
                                --align-items: stretch;
                                --overlay-opacity: 0.5;
                                border-style: solid;
                                --border-style: solid;
                                border-width: 1px 0px 1px 0px;
                                --border-top-width: 1px;
                                --border-right-width: 0px;
                                --border-bottom-width: 1px;
                                --border-left-width: 0px;
                                border-color: #131417;
                                --border-color: #131417;
                                --padding-top: 0px;
                                --padding-bottom: 0px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-255 .elementor-element.elementor-element-e70e577::before,
                            .elementor-255 .elementor-element.elementor-element-e70e577>.elementor-background-video-container::before,
                            .elementor-255 .elementor-element.elementor-element-e70e577>.e-con-inner>.elementor-background-video-container::before,
                            .elementor-255 .elementor-element.elementor-element-e70e577>.elementor-background-slideshow::before,
                            .elementor-255 .elementor-element.elementor-element-e70e577>.e-con-inner>.elementor-background-slideshow::before,
                            .elementor-255 .elementor-element.elementor-element-e70e577>.elementor-motion-effects-container>.elementor-motion-effects-layer::before {
                                --background-overlay: '';
                            }

                            .elementor-255 .elementor-element.elementor-element-cdf6871 {
                                --display: flex;
                                --justify-content: center;
                                --align-items: center;
                                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
                                border-style: solid;
                                --border-style: solid;
                                border-width: 0px 1px 0px 0px;
                                --border-top-width: 0px;
                                --border-right-width: 1px;
                                --border-bottom-width: 0px;
                                --border-left-width: 0px;
                                border-color: #131417;
                                --border-color: #131417;
                            }

                            .elementor-255 .elementor-element.elementor-element-4e8c477 .elementor-heading-title {
                                font-family: "afronaut", Sans-serif;
                                line-height: 8px;
                            }

                            .elementor-255 .elementor-element.elementor-element-b92bc7e {
                                text-align: center;
                            }

                            .elementor-255 .elementor-element.elementor-element-12cf5d6 {
                                --display: flex;
                            }

                            .elementor-255 .elementor-element.elementor-element-f1270d0 {
                                text-align: center;
                            }

                            .elementor-255 .elementor-element.elementor-element-ad9496e {
                                text-align: center;
                            }

                            .elementor-255 .elementor-element.elementor-element-7b2420f {
                                --display: flex;
                                --justify-content: space-between;
                                border-style: solid;
                                --border-style: solid;
                                border-width: 0px 1px 0px 0px;
                                --border-top-width: 0px;
                                --border-right-width: 1px;
                                --border-bottom-width: 0px;
                                --border-left-width: 0px;
                                border-color: #919191;
                                --border-color: #919191;
                                --padding-top: 50px;
                                --padding-bottom: 50px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-255 .elementor-element.elementor-element-6209df1 {
                                --display: flex;
                            }

                            .elementor-255 .elementor-element.elementor-element-6a98f5c {
                                --display: flex;
                                --flex-direction: row;
                                --container-widget-width: initial;
                                --container-widget-height: 100%;
                                --container-widget-flex-grow: 1;
                                --container-widget-align-self: stretch;
                                --flex-wrap-mobile: wrap;
                                --padding-top: 0px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-255 .elementor-element.elementor-element-3ef521b {
                                --display: flex;
                            }

                            .elementor-255 .elementor-element.elementor-element-ddc04c9 .elementor-icon-list-icon i {
                                transition: color 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-ddc04c9 .elementor-icon-list-icon svg {
                                transition: fill 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-ddc04c9 {
                                --e-icon-list-icon-size: 14px;
                                --icon-vertical-offset: 0px;
                            }

                            .elementor-255 .elementor-element.elementor-element-ddc04c9 .elementor-icon-list-text {
                                transition: color 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-0c80adf {
                                --display: flex;
                            }

                            .elementor-255 .elementor-element.elementor-element-8106918 .elementor-icon-list-icon i {
                                transition: color 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-8106918 .elementor-icon-list-icon svg {
                                transition: fill 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-8106918 {
                                --e-icon-list-icon-size: 14px;
                                --icon-vertical-offset: 0px;
                            }

                            .elementor-255 .elementor-element.elementor-element-8106918 .elementor-icon-list-text {
                                transition: color 0.3s;
                            }

                            .elementor-255 .elementor-element.elementor-element-396d22c {
                                --display: flex;
                                --justify-content: space-between;
                                --padding-top: 50px;
                                --padding-bottom: 50px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-255 .elementor-element.elementor-element-6292e42 {
                                --display: flex;
                                --justify-content: center;
                                border-style: none;
                                --border-style: none;
                                --padding-top: 40px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-255 .elementor-element.elementor-element-75e35c0 {
                                --display: flex;
                                border-style: solid;
                                --border-style: solid;
                                border-width: 1px 0px 0px 0px;
                                --border-top-width: 1px;
                                --border-right-width: 0px;
                                --border-bottom-width: 0px;
                                --border-left-width: 0px;
                                border-color: #131417;
                                --border-color: #131417;
                                --padding-top: 20px;
                                --padding-bottom: 20px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-255 .elementor-element.elementor-element-16b5e9f {
                                text-align: center;
                                font-size: 13px;
                                color: #0000005E;
                            }

                            @media(max-width:767px) {
                                .elementor-255 .elementor-element.elementor-element-cdf6871 {
                                    border-width: 0px 0px 0px 0px;
                                    --border-top-width: 0px;
                                    --border-right-width: 0px;
                                    --border-bottom-width: 0px;
                                    --border-left-width: 0px;
                                    --padding-top: 50px;
                                    --padding-bottom: 20px;
                                    --padding-left: 0px;
                                    --padding-right: 0px;
                                }

                                .elementor-255 .elementor-element.elementor-element-7b2420f {
                                    border-width: 0px 0px 0px 0px;
                                    --border-top-width: 0px;
                                    --border-right-width: 0px;
                                    --border-bottom-width: 0px;
                                    --border-left-width: 0px;
                                    --padding-top: 0px;
                                    --padding-bottom: 0px;
                                    --padding-left: 0px;
                                    --padding-right: 0px;
                                }

                                .elementor-255 .elementor-element.elementor-element-396d22c {
                                    --padding-top: 0px;
                                    --padding-bottom: 0px;
                                    --padding-left: 0px;
                                    --padding-right: 0px;
                                }
                            }
                        </style>
                        <div data-elementor-type="wp-post" data-elementor-id="255" class="elementor elementor-255">
                            <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-e70e577 e-con-full e-flex wolf-core-row-parallax-no e-con e-parent"
                                data-font-skin="" data-color-tone="" data-id="e70e577" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-cdf6871 e-flex e-con-boxed wolf-core-row-parallax-no e-con e-child"
                                    data-font-skin="" data-color-tone="" data-id="cdf6871"
                                    data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-4e8c477 elementor-widget elementor-widget-heading"
                                            data-id="4e8c477" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Unimate</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b92bc7e elementor-widget elementor-widget-heading"
                                            data-id="b92bc7e" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Museum</h5>
                                            </div>
                                        </div>
                                        <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-12cf5d6 e-flex e-con-boxed e-con e-child"
                                            data-font-skin="" data-color-tone="" data-id="12cf5d6"
                                            data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-f1270d0 elementor-widget elementor-widget-heading"
                                                    data-id="f1270d0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            Opening hours</h4>
                                                    </div>
                                                </div>
                                                <div class=" elementor-element elementor-element-ad9496e elementor-widget elementor-widget-text-editor"
                                                    data-id="ad9496e" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Daily: 10.00–17.00 (Fridays: 20.30)<br />Last entry: 16.45
                                                            (Fridays: 20.15)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-7b2420f e-flex e-con-boxed e-con e-child"
                                    data-font-skin="" data-color-tone="" data-id="7b2420f"
                                    data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-6209df1 e-flex e-con-boxed e-con e-child"
                                            data-font-skin="" data-color-tone="" data-id="6209df1"
                                            data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-3e9a3d2 elementor-widget elementor-widget-heading"
                                                    data-id="3e9a3d2" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            About Us</h4>
                                                    </div>
                                                </div>
                                                <div class=" elementor-element elementor-element-675bf67 elementor-widget elementor-widget-text-editor"
                                                    data-id="675bf67" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus
                                                            leo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-6a98f5c e-flex e-con-boxed e-con e-child"
                                            data-font-skin="" data-color-tone="" data-id="6a98f5c"
                                            data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-3ef521b e-flex e-con-boxed e-con e-child"
                                                    data-font-skin="" data-color-tone="" data-id="3ef521b"
                                                    data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-e1d5f95 elementor-widget elementor-widget-heading"
                                                            data-id="e1d5f95" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Visitors</h4>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ddc04c9 link-list elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="ddc04c9" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">Buy
                                                                                tickets</span> </a></li>
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">FInd
                                                                                Us</span> </a></li>
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">Our
                                                                                History</span> </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-0c80adf e-flex e-con-boxed e-con e-child"
                                                    data-font-skin="" data-color-tone="" data-id="0c80adf"
                                                    data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-0585712 elementor-widget elementor-widget-heading"
                                                            data-id="0585712" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h4
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Links</h4>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8106918 link-list elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="8106918" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">Work
                                                                                With Us</span> </a></li>
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">Privacy
                                                                                Policy</span> </a></li>
                                                                    <li class="elementor-icon-list-item"> <a
                                                                            href="#"> <span
                                                                                class="elementor-icon-list-text">Terms
                                                                                and Condition</span> </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-396d22c e-flex e-con-boxed e-con e-child"
                                    data-font-skin="" data-color-tone="" data-id="396d22c"
                                    data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-8594c35 elementor-widget elementor-widget-heading"
                                            data-id="8594c35" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Stay Tuned
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0faa9fd elementor-widget elementor-widget-mailchimp"
                                            data-id="0faa9fd" data-element_type="widget"
                                            data-widget_type="mailchimp.default">
                                            <div class="elementor-widget-container">
                                                <div class="wolf-core-mailchimp-form-container wolf-core-mailchimp-size-large wolf-core-mailchimp-align-center wolf-core-mailchimp-text-align-center wolf-core-mc-submit-type-text wolf-core-element wolf-core-mailchimp-show-name-"
                                                    style="">
                                                    <form class="wolf-core-mailchimp-form"><input type="hidden"
                                                            name="wolf-core-mailchimp-list"
                                                            class="wolf-core-mailchimp-list"
                                                            value="eb6ab49cd8"><input type="hidden"
                                                            name="wolf-core-mailchimp-has-name"
                                                            class="wolf-core-mailchimp-has-name" value="">
                                                        <div class="wolf-core-mailchimp-inner">
                                                            <div
                                                                class="wolf-core-mailchimp-email-container wolf-core-mailchimp-input-container">
                                                                <input placeholder="Your email" type="email"
                                                                    name="wolf-core-mailchimp-email"
                                                                    class="wolf-core-mailchimp-email"></div>
                                                            <div class='wolf-core-mailchimp-submit-container'><button
                                                                    class='wolf-core-button wolf-core-mailchimp-submit   button theme-button-primary'><span
                                                                        class="wolf-core-button-text">Subscribe</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="wolf-core-clear"></div><span
                                                            class="wolf-core-mailchimp-result">&nbsp;</span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-359d0bf elementor-widget elementor-widget-heading"
                                            data-id="359d0bf" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Follow Us
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3211f91 elementor-widget elementor-widget-socials"
                                            data-id="3211f91" data-element_type="widget"
                                            data-widget_type="socials.default">
                                            <div class="elementor-widget-container">
                                                <div class="wolf-core-socials-container wolf-core-si-size-fa-1x wolf-core-align-center wolf-core-si-direction-horizontal wolf-core-si-acronym- wolf-core-element"
                                                    style="">
                                                    <div class="wolf-core-social-icon wolf-core-icon-box wolf-core-icon-background-style-none wolf-core-icon-hover-opacity"
                                                        style="animation-delay:0ms;">
                                                        <div class="wolf-core-icon-background-color-custom wolf-core-icon-container fa-1x fa-stack"
                                                            style="">
                                                            <div class="wolf-core-icon-background-fill "></div><i
                                                                style=""
                                                                class="wolf-core-icon-color- wolf-core-icon fab fa-facebook"><a
                                                                    title="facebook"
                                                                    class="wolf-core-social-icon-link"
                                                                    target="_blank" rel="noreferrer, noopener"
                                                                    href="#"></a></i>
                                                        </div>
                                                    </div>
                                                    <div class="wolf-core-social-icon wolf-core-icon-box wolf-core-icon-background-style-none wolf-core-icon-hover-opacity"
                                                        style="animation-delay:200ms;">
                                                        <div class="wolf-core-icon-background-color-custom wolf-core-icon-container fa-1x fa-stack"
                                                            style="">
                                                            <div class="wolf-core-icon-background-fill "></div><i
                                                                style=""
                                                                class="wolf-core-icon-color- wolf-core-icon fab fa-twitter"><a
                                                                    title="twitter"
                                                                    class="wolf-core-social-icon-link"
                                                                    target="_blank" rel="noreferrer, noopener"
                                                                    href="#"></a></i>
                                                        </div>
                                                    </div>
                                                    <div class="wolf-core-social-icon wolf-core-icon-box wolf-core-icon-background-style-none wolf-core-icon-hover-opacity"
                                                        style="animation-delay:400ms;">
                                                        <div class="wolf-core-icon-background-color-custom wolf-core-icon-container fa-1x fa-stack"
                                                            style="">
                                                            <div class="wolf-core-icon-background-fill "></div><i
                                                                style=""
                                                                class="wolf-core-icon-color- wolf-core-icon fab socicon-instagram"><a
                                                                    title="instagram"
                                                                    class="wolf-core-social-icon-link"
                                                                    target="_blank" rel="noreferrer, noopener"
                                                                    href="#"></a></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-6292e42 e-flex e-con-boxed e-con e-parent"
                                data-font-skin="" data-color-tone="" data-id="6292e42"
                                data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-276b831 elementor-widget elementor-widget-clients"
                                        data-id="276b831" data-element_type="widget"
                                        data-widget_type="clients.default">
                                        <div class="elementor-widget-container">
                                            <div class="wolf-clients wolf-core-clearfix wolf-core-clients-grid wolf-core-clients-padding-yes wolf-core-element wolf-core-clients-columns-4"
                                                style="">
                                                <figure class=' wolf-core-client wolf-core-client-grid'
                                                    style='animation-delay:0ms;'>
                                                    <div
                                                        class='wolf-core-client-inner wolf-core-client-no-hover-image'>
                                                        <div class="wolf-core-client-image-inner"><img
                                                                width="114" height="50"
                                                                src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/logo-1-h-50.png"
                                                                class="wolf-core-client-image attachment-thumbnail"
                                                                alt="" decoding="async" /></div>
                                                    </div>
                                                </figure>
                                                <figure class=' wolf-core-client wolf-core-client-grid'
                                                    style='animation-delay:0ms;'>
                                                    <div
                                                        class='wolf-core-client-inner wolf-core-client-no-hover-image'>
                                                        <div class="wolf-core-client-image-inner"><img
                                                                width="32" height="50"
                                                                src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/Fichier-4.png"
                                                                class="wolf-core-client-image attachment-thumbnail"
                                                                alt="" decoding="async" /></div>
                                                    </div>
                                                </figure>
                                                <figure class=' wolf-core-client wolf-core-client-grid'
                                                    style='animation-delay:0ms;'>
                                                    <div
                                                        class='wolf-core-client-inner wolf-core-client-no-hover-image'>
                                                        <div class="wolf-core-client-image-inner"><img
                                                                width="76" height="50"
                                                                src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/Fichier-2.png"
                                                                class="wolf-core-client-image attachment-thumbnail"
                                                                alt="" decoding="async" /></div>
                                                    </div>
                                                </figure>
                                                <figure class=' wolf-core-client wolf-core-client-grid'
                                                    style='animation-delay:0ms;'>
                                                    <div
                                                        class='wolf-core-client-inner wolf-core-client-no-hover-image'>
                                                        <div class="wolf-core-client-image-inner"><img
                                                                width="34" height="50"
                                                                src="https://preview.wolfthemes.store/app/uploads/sites/50/2023/10/Fichier-3.png"
                                                                class="wolf-core-client-image attachment-thumbnail"
                                                                alt="" decoding="async" /></div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wolf-core-elementor-row wolf-core-font- elementor-element elementor-element-75e35c0 e-flex e-con-boxed wolf-core-row-parallax-no e-con e-parent"
                                data-font-skin="" data-color-tone="" data-id="75e35c0"
                                data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div class=" elementor-element elementor-element-16b5e9f elementor-widget elementor-widget-text-editor"
                                        data-id="16b5e9f" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container"> All Rights Reserved &copy; Unimate
                                            <span class="wolf-core-current-year">2025</span>. Website by <a
                                                href="https://wlfthm.es/tf">WolfThemes</a> &bull; <a
                                                href="https://preview.wolfthemes.store/unimate/purchase">Terms &#038;
                                                Conditions</a> &bull; <a
                                                href="https://preview.wolfthemes.store/unimate/purchase">Privacy
                                                Policy</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="cursor">
        <div class="cursor__inner cursor__inner--circle"><span class="cursor-text">Click &amp; Drag</span></div>
        <div class="cursor__inner cursor__inner--dot"></div>
    </div>
    <div class="loading-cursor"></div>
    <script type="text/javascript">
        var sbiajaxurl = "https://preview.wolfthemes.store/unimate/wp-admin/admin-ajax.php";
    </script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script type="text/javascript" id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/preview.wolfthemes.store\/unimate\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": 1
        };
    </script>
    <script type="text/javascript" id="wolf-core-functions-js-extra">
        var WolfCoreJSParams = {
            "themeSlug": "unimate",
            "ajaxUrl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php",
            "ajaxNonce": "0830fd3785",
            "WolfCoreUrl": "https:\/\/preview.wolfthemes.store\/app\/plugins\/wolf-core",
            "lightbox": "fancybox",
            "isMobile": "",
            "WOWAnimationOffset": "0",
            "forceAnimationMobile": "",
            "smoothScrollSpeed": "900",
            "smoothScrollEase": "swing",
            "pieChartLineWidth": "5",
            "parallaxNoIos": "1",
            "parallaxNoAndroid": "1",
            "parallaxNoSmallScreen": "1",
            "googleMapApiKey": "AIzaSyDzLQPom8JJ0fH19lBnAzhJNNrVG9aj3V0",
            "onePageSelector": ".wolf-core-parent-row",
            "fullPage": null,
            "fpTransitionEffect": "mix",
            "fpAnimTime": "900",
            "fpEasing": "swing",
            "fullPageContainer": "[data-elementor-type=\"wp-page\"]",
            "fullPageSelector": ".wolf-core-parent-row",
            "audioButtonPlayText": "Play",
            "audioButtonPauseText": "Pause",
            "language": "en_US",
            "accentColor": "#d2b48c",
            "fullHeightRowDoWPMOffsset": "1",
            "isRTL": "1",
            "printStylesheet": "https:\/\/preview.wolfthemes.store\/app\/plugins\/wolf-core\/assets\/css\/print.min.css",
            "isElementorEditor": "",
            "l10n": {
                "emptyFields": "Please fill all fields.",
                "unknownError": "Something went wrong while submuitting the form, please try again later.",
                "processingMessage": "Loading<span class=\"wolf-core-hellip\">.<\/span><span class=\"wolf-core-hellip\">.<\/span><span class=\"wolf-core-hellip\">.<\/span>",
                "BMICProcessingMessage": "Calculating<span class=\"wolf-core-hellip\">.<\/span><span class=\"wolf-core-hellip\">.<\/span><span class=\"wolf-core-hellip\">.<\/span>"
            }
        };
    </script>
    <script type="text/javascript" id="wolf-cta-js-extra">
        var WolfCTAParams = {
            "isMobile": "",
            "postTitle": "Vertical Slider",
            "ajaxUrl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.7.2"
        id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        var _wpmejsSettings = {
            "pluginPath": "\/unimate\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
    </script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.7.2"
        id="wp-mediaelement-js"></script>
    <script type="text/javascript" id="wolftheme-js-extra">
        var UnimateParams = {
            "defaultPageLoadingAnimation": "",
            "defaultPageTransitionAnimation": "",
            "siteUrl": "https:\/\/preview.wolfthemes.store\/unimate\/",
            "homeUrl": "https:\/\/preview.wolfthemes.store\/unimate\/",
            "ajaxUrl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php",
            "ajaxNonce": "0638cdf3a8",
            "themeUrl": "https:\/\/preview.wolfthemes.store\/app\/themes\/unimate",
            "isUserLoggedIn": "",
            "isMobile": null,
            "isPostTypeArchive": "",
            "isPage": "1",
            "themeSlug": "unimate",
            "accentColor": "#d2b48c",
            "breakPoint": "1350",
            "menuLayout": "top-justify",
            "menuSkin": "light",
            "menuOffset": "0",
            "menuHoverStyle": "",
            "subMenuWidth": "230",
            "stickyMenuType": "none",
            "stickyMenuScrollPoint": "200",
            "stickyMenuHeight": "100",
            "desktopMenuHeight": "80",
            "mobileScreenBreakpoint": "499",
            "tabletScreenBreakpoint": "768",
            "notebookScreenBreakpoint": "1024",
            "desktopScreenBreakpoint": "1224",
            "desktopBigScreenBreakpoint": "1350",
            "isWolfCore": "1",
            "pageBuilder": "elementor",
            "lightbox": "fancybox",
            "onePageMenu": "",
            "onePageBulletNav": "",
            "WOWBoxClass": "wow",
            "WOWAnimationOffset": "0",
            "fullPageAnimation": "",
            "forceAnimationMobile": "",
            "parallaxNoIos": "1",
            "smoothScrollOffsetAdjust": "50",
            "parallaxNoAndroid": "1",
            "parallaxNoSmallScreen": "1",
            "portfolioSidebarOffsetTop": "0",
            "isWooCommerce": "1",
            "WooCommerceCartUrl": "https:\/\/preview.wolfthemes.store\/unimate\/cart\/",
            "WooCommerceCheckoutUrl": "https:\/\/preview.wolfthemes.store\/unimate\/checkout\/",
            "WooCommerceAccountUrl": "https:\/\/preview.wolfthemes.store\/unimate\/my-account\/",
            "isWooCommerceVariationSwatches": "1",
            "relatedProductCount": "4",
            "doWoocommerceLightbox": "1",
            "doVideoLightbox": "",
            "doLiveSearch": "1",
            "doLoadMorePaginationHashChange": "1",
            "smoothScrollSpeed": "1000",
            "smoothScrollEase": "swing",
            "infiniteScrollEmptyLoad": "https:\/\/preview.wolfthemes.store\/app\/themes\/unimate\/assets\/img\/blank.gif",
            "infiniteScrollGif": "https:\/\/preview.wolfthemes.store\/app\/themes\/unimate\/assets\/img\/loading.gif",
            "isCustomizer": null,
            "isAjaxNav": "",
            "ajaxNavigateToggleClass": ["mobile-menu-toggle", "side-panel-toggle", "search-form-toggle",
                "overlay-menu-toggle", "offcanvas-menu-toggle", "lateral-menu-toggle"
            ],
            "pageLoadingAnimationType": "none",
            "hasLoadingOverlay": "",
            "pageLoadedDelay": "1000",
            "pageTransitionDelayBefore": "0",
            "pageTransitionDelayAfter": "0",
            "mediaelementLegacyCssUri": "https:\/\/preview.wolfthemes.store\/unimate\/wp-includes\/js\/mediaelement\/mediaelementplayer-legacy.min.css",
            "fancyboxMediaelementCssUri": "https:\/\/preview.wolfthemes.store\/app\/themes\/unimate\/assets\/css\/fancybox-mediaelement.min.css",
            "fancyboxSettings": {
                "loop": true,
                "transitionEffect": "slide",
                "wheel": false,
                "hideScrollbar": false,
                "buttons": ["zoom", "thumbs", "fullscreen", "close"]
            },
            "entrySliderAnimation": "fade",
            "is404": "",
            "allowedMimeTypes": ["jpg|jpeg|jpe", "png", "gif", "mov|qt", "avif", "avi", "mpeg|mpg|mpe", "3gp|3gpp",
                "3g2|3gp2", "mid|midi", "pdf", "doc", "docx", "docm", "pot|pps|ppt", "pptx", "pptm", "odt", "ppsx",
                "ppsm", "xla|xls|xlt|xlw", "xlsx", "xlsm", "xlsb", "key", "mp3|m4a|m4b", "ogg|oga", "wma", "wav",
                "mp4|m4v", "webm", "ogv", "wmv", "flv", "svg", "svgz", "webp", "csv", "zip", "gz"
            ],
            "logoMarkup": "<div class=\"logo logo-is-text\"><a class=\"logo-text logo-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/\" rel=\"home\">Unimate<\/a><\/div>",
            "language": "en_US",
            "l10n": {
                "chooseImage": "Choose an image",
                "useImage": "Use image",
                "replyTitle": "Post a comment",
                "editPost": "Edit Post",
                "infiniteScrollMsg": "Loading<span class=\"load-more-hellip\">.<\/span><span class=\"load-more-hellip\">.<\/span><span class=\"load-more-hellip\">.<\/span>",
                "infiniteScrollEndMsg": "No more post to load",
                "loadMoreMsg": "Load More",
                "infiniteScrollDisabledMsg": "The infinitescroll is disabled in live preview mode",
                "addToCart": "Add to cart",
                "viewCart": "View cart",
                "addedToCart": "Added to cart",
                "playText": "Play",
                "pauseText": "Pause",
                "missingRevsliderHelpMessage": "You can import the Unimate demo sliders by following the instructions in <a href=\"https:\/\/wlfthm.es\/import-revsliders\" target=\"_blank\" style=\"color:white;text-decoration:underline;font-weight:700\">this post<\/a>",
                "startShoppingText": "Start Shopping",
                "loadingText": "Loading...",
                "cartMenuItemText": "Cart",
                "search": "Search",
                "loginText": "Login",
                "myAccountText": "My Account",
                "total": "Total",
                "checkout": "Checkout",
                "emptyCartText": "Your cart is empty",
                "searchProducts": "Search products...",
                "noProductInCart": "Your cart is currently empty!",
                "noEventResultText": "No event found in this category",
                "noWorkResultText": "No work found in this category",
                "dragText": "Click &amp; Drag",
                "viewEventText": "View Event",
                "CartPanelTitle": "Your cart (<span class=\"cart-side-panel-product-count\">0<\/span> items)",
                "CartPanelTotalLabel": "Subotal:",
                "CartPanelTotalDescription": "Shipping, taxes, and discounts calculated at checkout."
            },
            "rowBgDefaultColor": "#ddddcc",
            "lenis": "1",
            "menuFontFamily": "Gabarito",
            "headingFontFamily": "Gabarito",
            "isWC": "1",
            "cartUrl": "https:\/\/preview.wolfthemes.store\/unimate\/cart\/",
            "accountUrl": "https:\/\/preview.wolfthemes.store\/unimate\/my-account\/",
            "checkoutUrl": "https:\/\/preview.wolfthemes.store\/unimate\/checkout\/",
            "cartProductCount": "0",
            "cartSubTotal": "<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">$<\/span>0.00<\/bdi><\/span>",
            "searchMenuItem": "1",
            "accountMenuItem": "1",
            "wishlistMenuItem": "1",
            "productHasStackedImages": "1",
            "isLoadingOverlay": ""
        };
    </script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
    </script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/vendor/react.min.js?ver=18.3.1.1"
        id="react-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.3.1.1"
        id="react-dom-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/escape-html.min.js?ver=6561a406d2d232a6fbd2"
        id="wp-escape-html-js"></script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/dist/element.min.js?ver=cb762d190aebbec25b27"
        id="wp-element-js"></script>
    <script type="text/javascript" id="unimate-js-js-extra">
        var liquidSliderData = {
            "readMore": "More Info",
            "slidesData": [{
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/502727397.jpg",
                "title": "Artistic Odyssey",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/artistic-odyssey\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "dark"
            }, {
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/403123229.jpg",
                "title": "Chromatic Reverie",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/chromatic-reverie\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "light"
            }, {
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/narciso-arellano-_r9XDE_KFuM-unsplash.jpg",
                "title": "Canvas Chronicles",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/canvas-chronicles\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "dark"
            }, {
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/619829228.jpg",
                "title": "Innovative Visions",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/innovative-visions\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "dark"
            }, {
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/475355584-1950x1500.jpg",
                "title": "Sculpture Serenade",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/sculpture-serenade\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "dark"
            }, {
                "image": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50\/2023\/10\/09569872.jpg",
                "title": "Night of Creative Revelation",
                "permalink": "https:\/\/preview.wolfthemes.store\/unimate\/event\/night-of-creative-revelation\/",
                "meta": "",
                "date": "18 Nov - 22 Nov",
                "category": "<a class=\"event-type-link\" href=\"https:\/\/preview.wolfthemes.store\/unimate\/event-type\/sculpture\/\">Sculpture<\/a>",
                "imgColorTone": "dark"
            }]
        };
    </script>
    <script type="text/javascript" id="wolf-core-mailchimp-js-extra">
        var WolfCoreMailchimpParams = {
            "ajaxUrl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php",
            "subscriptionSuccessfulMessage": "Thanks for subscribing"
        };
    </script>
    <script type="text/javascript"
        src="https://preview-v2-wolfthemes.b-cdn.net/unimate/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.28.1",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "e_local_google_fonts": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "home_screen": true
            },
            "urls": {
                "assets": "https:\/\/preview.wolfthemes.store\/app\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/preview.wolfthemes.store\/unimate\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/preview.wolfthemes.store\/app\/uploads\/sites\/50"
            },
            "nonces": {
                "floatingButtonsClickTracking": "7e06e11536"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 3183,
                "title": "Vertical%20Slider%20%E2%80%93%20Unimate",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type="text/javascript">
        (function() {
            UnimateParams.isMobile = navigator.userAgent.match(
                    /(Mobi)|(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i
                ) ?
                true :
                false;
        })();
    </script>
    <script defer
        src="https://preview-v2-wolfthemes.b-cdn.net/app/cache/autoptimize/50/js/autoptimize_c608c4ce65e9b91d5093249b36cb0e46.js">
    </script>
</body>

</html>
<!-- Dynamic page generated in 3.033 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2025-03-27 09:33:44 -->

<!-- Compression = gzip -->
