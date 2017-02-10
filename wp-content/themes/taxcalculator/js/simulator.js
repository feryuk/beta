/**
 * Created by Feri on 19/12/2016.
 */
function prepareSimulator(id, structure) {
    var touchDevice = $.jqx.mobile.isTouchDevice();
    var hasFullScreenParam = window.location.toString().indexOf('fullscreen') >= 0;
    if (!touchDevice) {
        var theme = "mobile";
        var device = "mobile";
        var hasParam = window.location.toString().indexOf('?');
        if (hasParam = -1) {
            var start = window.location.toString().indexOf('(');
            var end = window.location.toString().indexOf(')');
            var device = window.location.toString().substring(start + 1, end);
            if (device === "") device = "mobile";
            var className = "device-" + device;

            if (device !== "android" && device !== "blackberry" && device !== "win8" && device !== "mobile") {
                device = "mobile";
                var className = "device-" + device;
            }

            if (device == "android") theme = "android";
            if (device == "blackberry") theme = "blackberry";
            if (device == "win8") theme = "windowsphone";
        }
    }


    if (hasParam != -1) {
        switch (id) {
            case "grid":
            case "scheduler":
            case "kanban":
            case "layout":
            case "dockinglayout":
            case "gauge":
            case "chart":
            case "menu":
            case "treemap":
            case "tabs":
            case "editor":
            case "panel":
            case "window":
            case "photoGallery":
            case "splitter":
            case "popover":
            case "draw":
            case "ribbon":
            case "rangeSelector":
                className += "-tablet";
                break;
        }
        if ($("#demoContainer").length > 0) {
            $("#demoContainer")[0].className = 'device-mobilex';
            $("#container")[0].className = "device-mobile-container";
        }
    }
    $(document.body).css('visibility', 'visible');
    return theme;
}

function initSimulator(id, settings) {


    switch (id) {
        case "calendar":
            if ($("#fromCalendar").length > 0) {
                $("#fromCalendar").jqxCalendar({ enableHover: false, keyboardNavigation: false });
                $("#toCalendar").jqxCalendar({ enableHover: false, keyboardNavigation: false });
            }
            break;
        case "listbox":
            $("#listbox").jqxListBox({ touchMode: true, keyboardNavigation: false, enableMouseWheel: false });
            break;
        case "splitter":
            $("#splitter").jqxSplitter({ touchMode: true });
            if ($("#listbox").length > 0) {
                $("#listbox").jqxListBox({ touchMode: true, keyboardNavigation: false, enableMouseWheel: false });
                $("#ContentPanel").jqxPanel({ touchMode: true });
            }
            else {
                $('#rightSplitter').jqxSplitter({ touchMode: true });
            }
            break;
        case "menu":
            $("#menu").jqxMenu({enableHover: false, clickToOpen: true, touchMode: true });
            break;
        case "tree":
            $("#tree").jqxTree({ touchMode: true, keyboardNavigation: false });
            break;
        case "dropdownlist":
            $("#dropdownlist").jqxDropDownList('listBox').host.jqxListBox({ touchMode: true, keyboardNavigation: false });
            break;
        case "adapter":
            $("#jqxDropDownList").jqxDropDownList('listBox').host.jqxListBox({ touchMode: true, keyboardNavigation: false });
            break;
        case "combobox":
            $("#combobox").jqxComboBox({ touchMode: true});
            break;
        case "dropDownButton":
            $("#tree").jqxTree({ touchMode: true, keyboardNavigation: false });
            break;
        case "numberInput":
            $("#numericInput").jqxNumberInput({touchMode: true});
            $("#percentageInput").jqxNumberInput({ touchMode: true });
            $("#currencyInput").jqxNumberInput({ touchMode: true });
            break;
        case "tabs":
            $("#tabs").jqxTabs({ touchMode: true, keyboardNavigation: false });
            $("#jqxGrid").jqxGrid({ touchmode: true, keyboardnavigation: false, enablemousewheel: false });
            break;
        case "grid":
            $("#grid").jqxGrid({ touchmode: true, keyboardnavigation: false, enablemousewheel: false });
            break;
        case "treeGrid":
            $("#treeGrid").jqxTreeGrid({ touchmode: true, enableHover: false });
            break;
        case "dataTable":
            $("#dataTable").jqxDataTable({touchmode: true, enableHover: false});
            break;
        case "panel":
            $("#panel").jqxPanel({ touchMode: true });
            break;
        case "scheduler":
            settings.touchMode = true;
            $("#scheduler").jqxScheduler(settings);
            break;
        case "editor":
            $("#editor").jqxEditor({ touchMode: true });
            break;
    }
}