/**
 * Created by Feri on 15/11/2016.
 */
(function (e) {
    History.Adapter.bind(window, 'statechange', function () {
        if (e(".collection-list").length > 0 || e(".filters-panel").length > 0) {
            if (!obj.ajaxClickHandlerState) {
                var n = location.search == "" ? "" : "?" + location.search;
                var url = location.pathname + n;
                obj.getCollectionContent(url);
            }
            obj.ajaxClickHandlerState = false;
        }
    });

    var obj = {
        init: function () {
            this.shopifyParam();
            this.initSidebar();
            this.initToolbar();
        },
        initSidebar: function () {
            if (e(".collection-list").length > 0) {
                obj.typeEvent();
                obj.tagsEvent();
                obj.colorEvent();
                obj.sizeEvent();
                obj.priceEvent();
            }
        },
        initToolbar: function () {
            if (e(".filters-panel").length > 0) {
                obj.initSortbyEvent();
                obj.initSortbyState();
                obj.initGridOrListEvent();
                obj.initPerpageEvent();
                obj.initPaginationEvent();
            }
        },
        shopifyParam: function () {
            Shopify.queryParams = {};
            if (location.search.length) {
                for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                    aKeyValue = aCouples[i].split('=');
                    if (aKeyValue.length > 1) {
                        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                    }
                }
            }
        },
        clearShopifyParam: function () {
            delete Shopify.queryParams.q;
            delete Shopify.queryParams.type;
            delete Shopify.queryParams.tag;
            delete Shopify.queryParams.constraint;
            delete Shopify.queryParams.page;
        },
        // Sort By
        initSortbyState: function () {
            if (e(".sort-select").length > 0) {
                if (Shopify.queryParams.sort_by) {
                    e('.sort-select').each(function () {
                        e(this).val(Shopify.queryParams.sort_by);
                    });
                }
            }
        },
        initSortbyEvent: function () {
            if (e(".sort-select").length > 0) {
                e('.sort-select').each(function () {
                    e(this).change(function (event) {
                        var val = e(this).val();
                        Shopify.queryParams.sort_by = val;
                        var collHandle = obj.getUrlSubcategory('/collections/', location.pathname);
                        var newURL = '/collections/' + collHandle;
                        obj.createFilterLocationSearch();
                        var url = newURL + "?" + e.param(Shopify.queryParams).replace(/%2B/g, '+');
                        obj.ajaxClick(url);
                    });
                });
            }
        },
        // SELECT GRID TYPE
        initGridOrListEvent: function () {
            if (e(".view-grid").length > 0 && e(".view-list").length) {
                var viewGrid = e(".view-grid"),
                    viewList = e(".view-list");

                viewGrid.click(function (event) {
                    delete Shopify.queryParams.grid;
                    event.preventDefault();
                });

                viewList.click(function (event) {
                    Shopify.queryParams.grid = "list";
                    event.preventDefault();
                });

                if (obj.getUrlValue("grid", location.search) == "list") {
                    viewList.trigger("click");
                }
                ;
            }
            ;
        },
        // Show Grid
        initPerpageEvent: function () {
            if (e(".grid-select").length > 0) {
                e(".grid-select").change(function (event) {
                    delete Shopify.queryParams.page;

                    var val = e(".grid-select option:selected").val();
                    Shopify.queryParams.view = val;

                    var collHandle = obj.getUrlSubcategory('/collections/', location.pathname);
                    var newURL = '/collections/' + collHandle;
                    obj.createFilterLocationSearch();
                    var url = newURL + "?" + e.param(Shopify.queryParams).replace(/%2B/g, '+');
                    obj.ajaxClick(url);
                });
            }
        },
        initPaginationEvent: function () {
            if (e(".filters-panel .pagination").length > 0) {
                e(".filters-panel .pagination a").click(function (event) {
                    if (!e(this).parent().hasClass("active")) {
                        var value = e(this).attr("href").match(/page=\d+/g);
                        if (value) {
                            var currentpage = parseInt(value[0].match(/\d+/g));
                            Shopify.queryParams.page = currentpage;
                            if (Shopify.queryParams.page) {
                                var collHandle = obj.getUrlSubcategory('/collections/', location.pathname);
                                var newURL = '/collections/' + collHandle;
                                obj.createFilterLocationSearch();
                                var url = newURL + "?" + e.param(Shopify.queryParams).replace(/%2B/g, '+');
                                obj.ajaxClick(url);
                            }
                        }
                    }
                    event.preventDefault();
                });
            }
            ;
        },
        // Type Click
        typeEvent: function () {
            if (e(".type-filter").length > 0) {
                e('.type-filter input').click(function (event) {
                    obj.clickHandler();
                    event.preventDefault();
                });
            }
            ;
        },
        // Tags Click
        tagsEvent: function () {
            if (e(".tag-filter").length > 0) {
                e('.tag-filter a').click(function (event) {
                    e(this).parent().addClass("active");

                    if (e(this).hasClass('clear-tag')) {
                        e(this).attr('href', '');
                    }

                    obj.clickHandler();
                    event.preventDefault();
                });
            }
            ;
        },
        // Filter Block Click
        colorEvent: function () {
            if (e(".color-filter").length > 0) {
                e('.color-filter a').click(function (event) {
                    e(this).parent().addClass("active");

                    if (e(this).hasClass('clear-tag')) {
                        e(this).attr('href', '');
                    }

                    obj.clickHandler();
                    event.preventDefault();
                });
            }
            ;
        },
        sizeEvent: function () {
            if (e(".size-filter").length > 0) {
                e('.size-filter input').click(function (event) {
                    obj.clickHandler();
                    event.preventDefault();
                });
            }
            ;
        },
        priceEvent: function () {
            if (e(".price-filter").length > 0) {
                e('.price-filter input').click(function (event) {
                    obj.clickHandler();
                    event.preventDefault();
                });
            }
            ;
        },
        // Filters Click Handler
        clickHandler: function () {
            delete Shopify.queryParams.page;
            var newTags = [];

            obj.saveNewTag(".type-filter input:checked", newTags);
            obj.saveNewTag(".price-filter input:checked", newTags);
            obj.saveNewTag(".size-filter input:checked", newTags);
            obj.saveNewATag(".color-filter .active", newTags);
            obj.saveNewATag(".tag-filter .active", newTags);

            var collHandle = obj.getUrlSubcategory('/collections/', location.pathname);
            if (collHandle != 'type' && location.search.length == 0) {
                var newURL = '/collections/' + collHandle;
                if (newTags.length) {
                    newURL += '/' + newTags.join('+');
                }
                var search = e.param(Shopify.queryParams);
                if (search.length) {
                    newURL += '?' + search;
                }
            }
            else {
                if (newTags.length) {
                    newTags = newTags.join('+');
                    Shopify.queryParams.constraint = newTags.replace(/%5B%5D/g, "");
                }
                else {
                    delete Shopify.queryParams.constraint;
                }
                var newURL = location.pathname + "?" + e.param(Shopify.queryParams).replace(/%2B/g, "+");
            }

            obj.ajaxClick(newURL);
        },
        saveNewTag: function (data, newTags) {
            if (e(data).val()) {
                newTags.push(e(data).val());
            }
        },
        saveNewATag: function (data, newTags) {
            if (e(data).find('a').attr("href")) {
                newTags.push(e(data).find('a').attr("href"));
            }
        },
        createFilterLocationSearch: function () {
            var newTags = [];

            obj.saveNewTag(".type-filter input:checked", newTags);
            obj.saveNewTag(".price-filter input:checked", newTags);
            obj.saveNewTag(".size-filter input:checked", newTags);
            obj.saveNewATag(".color-filter .active", newTags);
            obj.saveNewATag(".tag-filter .active", newTags);

            if (newTags.length) {
                newTags = newTags.join('+');
                Shopify.queryParams.constraint = newTags.replace(/%5B%5D/g, "");
            }
        },


        //AJAX
        ajaxClick: function (url) {
            obj.ajaxClickHandlerState = true;
            History.pushState({
                param: Shopify.queryParams
            }, url, url);
            obj.getCollectionContent(url);
        },
        getCollectionContent: function (url) {
            delete Shopify.queryParams.page;
            var params = {
                type: "get",
                url: url,
                beforeSend: function () {
                    obj.showPreloader();
                },
                success: function (data) {
                    obj.hidePreloader();
                    obj.pageData(data);
                    obj.initPaginationEvent();
                    obj.initGridOrListEvent();
                    obj.initSidebar();
                    /*
                     obj.initShowMore();*/
                    e('.content-sort').trigger("initWishlist");
                },
                error: function (XMLHttpRequest, textStatus) {
                    obj.hidePreloader();
                    alert("error")
                }
            }
            jQuery.ajax(params);
        },
        //Get and show new content
        pageData: function (data) {
            var current_class = "#centerCol";
            var content = e(data).find(current_class);
            e(current_class).empty();
            e(current_class).append(content.html());

            //sidebar
            content = e(data).find("#filtersCol .type-filter");
            e("#filtersCol .type-filter").replaceWith(content);
            var content = e(data).find("#filtersCol .color-filter");
            e("#filtersCol .color-filter").replaceWith(content);
            var content = e(data).find("#filtersCol .size-filter");
            e("#filtersCol .size-filter").replaceWith(content);
            var content = e(data).find("#filtersCol .price-filter");
            e("#filtersCol .price-filter").replaceWith(content);
            var content = e(data).find("#filtersCol .tag-filter");
            e("#filtersCol .tag-filter").replaceWith(content);
            //------------------

            content = e(data).find(".product-pagintion .pagination");
            if (jQuery.type(content.html()) === "undefined") {
                e(".product-pagintion").empty();
            }
            else {
                if (e(".product-pagintion .pagination").length > 0)
                    e(".product-pagintion .pagination").replaceWith(content);
                else
                    e(".product-pagintion").html(content);
            }

            content = null;
            data = null;

            if (e(".shopify-product-reviews-badge").length > 0) {
                e.getScript("http://productreviews.shopifycdn.com/assets/v4/spr.js");
            }

            e(window).trigger("reinit_isotop");
            e(window).trigger("reinitheight");
            e('.currency .active').trigger('click');
            e(window).trigger('findAndReplace');
        },
        //Utils
        showPreloader: function () {
            e(".custom-loader").show();
        },
        hidePreloader: function () {
            e(".custom-loader").hide();
        },
        getUrlSubcategory: function (category, url) {
            var str = url;
            var n = str.indexOf(category);
            if (n < 0)
                return "";
            str = str.slice(n + category.length, str.length);
            var m = str.indexOf("/") > -1 ? str.indexOf("/") : str.length;
            str = str.slice(0, m).toLowerCase();
            return str.replace(name + "=", "");
        },
        getUrlValue: function (name, url) {
            var str = url;
            var n = str.indexOf(name);
            if (n < 0)
                return "";
            str = str.slice(n, str.length);
            var m = str.indexOf("&") > -1 ? str.indexOf("&") : str.length;
            str = str.slice(0, m).toLowerCase();
            return str.replace(name + "=", "");
        }
    }

    e(document).ready(function () {
        obj.init();
    });

})(jQuery)