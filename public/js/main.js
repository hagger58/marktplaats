
var ddmenuOptions =
{
    menuId: "ddmenu",
    linkIdToMenuHtml: null,
    open: "onmouseover", // or "onclick"
    delay: 50,
    speed: 400,
    keysNav: true,
    singleOpen: false,
    license: "6c0l68"
};

var ddmenu = new Ddmenu(ddmenuOptions);

/* Menucool Drop Down Menu v2015.10.26 Copyright www.menucool.com */
function Ddmenu(k) {
    "use strict";
    var p = function(a, b) {
            return a.getElementsByTagName(b)
        },